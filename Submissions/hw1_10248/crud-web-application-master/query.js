exports.create_table_items = ("CREATE TABLE IF NOT EXISTS items (\
item_id INT NOT NULL AUTO_INCREMENT,\
item_name TEXT NOT NULL,\
item_picture TEXT NOT NULL,\
item_price INT NOT NULL ,\
item_stock INT,\
PRIMARY KEY (item_id)\
);")
exports.create_table_users = ("CREATE TABLE IF NOT EXISTS users (\
user_id INT NOT NULL AUTO_INCREMENT,\
user_name TEXT NOT NULL,\
user_sirname TEXT NOT NULL,\
user_password TEXT NOT NULL,\
user_address TEXT NOT NULL,\
PRIMARY KEY (user_id)\
);")
exports.insert_into_items = ("INSERT INTO items (item_name, item_picture, item_price, item_stock) \
VALUES ('kitkat', 'https://www.madewithnestle.ca/sites/default/files/nestle_product_kitkat-01-orig.png', 35, 20), \
('Pure Life Pack', 'https://www.madewithnestle.ca/sites/default/files/styles/product_thumbnail/public/purelife_multi_6_x_1.5l_08_03-comp_copy.png', 120, 30), \
('Corn Puff Original Flavour', 'http://brikar.co/media/catalog/product/cache/1/thumbnail/600x600/fb88dfed061b0be2fe7e8cbd5135434e/1/_/1_4_43_1.jpg', 20, 60) \
;")
exports.insert_into_users = ("INSERT INTO users (user_name, user_password, user_sirname, user_address) \
VALUES ('admin', 'password', 'wuttisasiwat', 'tanurat 8'), \
('root', 'root', 'adminlastname', 'thammasat')\
;")
