var mysql      = require('mysql');
var query = require('./query.js')
// var connection = mysql.createConnection({
//   host     : '127.0.0.1',
//   user     : 'root',
//   password : '',
//   database : 'crud_application',
//   timeout: 60000
// });
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'crud_application',
  port     : 3306,
  timeout: 60000
});


connection.connect((err) => {
  if(!err)
    console.log('Database connection success.');
  else
    console.log('Database connection error. \nerr:'+err);
});

connection.query(query.create_table_items, (err, results, fields) => {
  if(err)
    console.log(err);
  else
    console.log('Create TABLE items if not exists success.');
});

connection.query(query.create_table_users, (err, results, fields) => {
  if(err)
    console.log(err);
  else
    console.log('Create TABLE users if not exists success.');
});

exports.fetchData = (callback) => {
  var err_response_1, err_response_2;
  connection.query(query.insert_into_items, (err, results, fields) => {
    err_response_1 = err;
    if(err)
      console.log(err);
    else
      console.log('Insert into items success.');
  });

  connection.query(query.insert_into_users, (err, results, fields) => {
    err_response_2 = err;
    if(err)
      console.log(err);
    else
      console.log('Insert into users success.');
  });

  callback(err_response_1 && err_response_2);
}

exports.getItems = (callback) => {
  connection.query('SELECT * from items;', (err, results, fields) => {
    if(err)
      console.log('Get Items Error.');
    callback(results);
  });
}

exports.getItemById = (item_id, callback) => {
  connection.query('SELECT * from items WHERE item_id='+item_id+';', (err, results, fields) => {
    if(err)
      console.log('Get item by id error.');
    callback(results);
  });
}

exports.updateItem = (payload, callback) => {
  var execute = "UPDATE items SET item_name = '"+payload.item_name+"', item_picture = '"+payload.item_picture+"', item_price = "+payload.item_price+", item_stock = "+payload.item_stock+" WHERE item_id = "+payload.item_id;
  console.log(execute);
  connection.query(execute,
    (err, results, fields) => {
      if(err)
        console.log('Update Item Error.');
      callback(err);
    });
}

exports.insertItem = (payload, callback) => {
  var execute = ("INSERT INTO items (item_name, item_picture, item_price, item_stock) \
  VALUES ('"+payload.item_name+"', '"+payload.item_picture+"', "+payload.item_price+", "+payload.item_stock+") \
  ;")
  console.log(execute);
  connection.query(execute,
    (err, results, fields) => {
      if(err)
        console.log('Insert Item Error.');
      callback(err);
    });
}

exports.deleteItemById = (item_id, callback) => {
  var execute = "DELETE FROM items WHERE item_id = "+item_id;
  console.log(execute);
  connection.query(execute,
    (err, results, fields) => {
      if(err)
        console.log('Delete Item By Id Error.');
      callback(err);
    });
}

exports.login = (username, password, callback) => {
  var execute = "SELECT * FROM users WHERE user_name = '"+username+"' AND user_password = '"+password+"';";
  console.log(execute);
  connection.query(execute,
    (err, results, fields) => {
      console.log('results: ', results);
      if(err)
        console.log('login Error.');
      if(results === undefined)
        callback(false);
      else
        callback(results.length === 1);
    });
}
