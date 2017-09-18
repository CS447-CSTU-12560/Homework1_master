var columns = [
	{id: 'prod_id', name: '#'},
	{id: 'name', name: 'Name'},
	{id: 'detail', name: 'Detail'},
	{id: 'picture', name: 'Picture'},
	{id: 'price', name: 'Price'},
	{id: 'piece', name: 'Piece'},
];

var ori_prod = {
	'prod_id': '',
	'name': '',
	'detail': '',
	'picture': '',
	'price': '',
	'piece': ''
}

$('document').ready(function () {
	init_table();
	refresh_table();

	window.tb_content = $("#datatable-responsive tbody");

	$('#btn_refresh').click(function () {
		refresh_table();
	})

	$('#btn_delete').click(function () {
		if (!$('#del_prod_id').val()) {
			swal('กรุณาใส่ Product id ที่ต้องการจะลบ', '', 'error');
			return;
		}
		del_product($('#del_prod_id').val());
	})

	$('#btn_cancel').click(function () {
		clear_update_field();
		restore_update_field();
	})

	$('#btn_update').click(function () {
		update_product();
	})

	$('#update_prod_id').keypress(function (event) {
		if (event.which === 13) {

			if ($('#update_prod_id') == '') {
				swal('กรุณาใส่ Product id', '', 'error');
				return;
			}
			disabled_update_field();
			get_product($('#update_prod_id').val());
		}
	});

	$('#del_prod_id').keypress(function (event) {
		if (event.which === 13) {
			event.preventDefault();	// workaround fix bug
			if (!$('#del_prod_id').val()) {
				swal('กรุณาใส่ Product id ที่ต้องการจะลบ', '', 'error');
				return;
			}
			disabled_update_field();
			del_product($('#del_prod_id').val());
		}
	});
})

/**
 * read segment
 */

function init_table() {
	var tb_parent = $('#datatable-responsive');
	tb_parent.html('');
	var str = '';
	str += ('<thead><tr>');
	for (var i = 0; i < columns.length; i++) {
		str += ('<th>' + columns[i]['name'] + '</th>');
	}
	str += ('</tr></thead>');
	str += ('<tbody></tbody>');
	tb_parent.append(str);
}

function add_data_to_table(data) {
	console.log(data);
	var str = '<tr>';
	for (var i = 0; i < columns.length; i++) {
		if (i === 3) {
			str += '<td align="center"><img src="' + APP_PATH + data[columns[i]['id']] + '" style="width:200px;height:200px;"></td>';
			continue;
		}
		str += '<td>';
		str += data[columns[i]['id']];
		str += '</td>';
	}
	str += '</tr>';
	tb_content.append(str);
}

function refresh_data() {

	var url = APP_PATH + 'ajax_get_product';
	var data = {prod_id: 'all'};
	$.post(url, data, function (result) {
		console.log(result); // dbg
		if (result.result) {
			tb_content.html('');
			for (var i = 0; i < result.data.length; i++) {
				add_data_to_table(result.data[i]);
			}
		} else {
			swal(result.status_message, '', 'error');
			init_table();
		}

	}).fail(function (result) {
		console.log("ERROR: " + result);
	});
}

function refresh_table() {
	refresh_data();
}

/**
 * delete segment
 */
function del_product(prod_id) {

	var url = APP_PATH + 'ajax_delete_product';
	var data = {
		prod_id: prod_id,
		// prod_name: $('#prod_name').val()	
	};
	console.log(data);
	$.post(url, data, function (result) {
		console.log(result); // dbg
		if (result.result) {
			swal('ทำการลบ Product สำเร็จ', '', 'success');
		} else {
			swal(result.status_message, '', 'error');
		}
		refresh_table();

	}).fail(function (result) {
		console.log("ERROR: " + result);
	});
}

/**
 * update segment
 */

function enabled_update_field() {
	$('#update_prod_id, #update_prod_name, #update_prod_detail, #update_prod_picture, #update_prod_price, #update_prod_piece').attr('disabled', false)
}

function disabled_update_field() {
	$('#update_prod_id, #update_prod_name, #update_prod_detail, #update_prod_picture, #update_prod_price, #update_prod_piece').attr('disabled', true)
}

function get_product(prod_id) {
	
	var url = APP_PATH + 'ajax_get_product';
	var data = {
		prod_id: prod_id
	};
	$.post(url, data, function (result) {
		console.log(result); // dbg
		if (result.result) {
			backup_update_field(result.data[0]);
			restore_update_field();

		} else {
			reset_update_field();
			swal(result.status_message, '', 'error');
		}
		enabled_update_field();

	}).fail(function (result) {
		console.log("ERROR: " + result);
		enabled_update_field();
	});
}

function update_product() {
	
	var url = APP_PATH + 'ajax_update_product';
	var data = {
		prod_id: $('#update_prod_id').val(),
		prod_name: $('#update_prod_name').val(),
		prod_detail: $('#update_prod_detail').val(),
		prod_picture: $('#update_prod_picture').val(),
		prod_price: $('#update_prod_price').val(),
		prod_piece: $('#update_prod_piece').val(),
	};
	disabled_update_field();
	$.post(url, data, function (result) {
		console.log(result); // dbg
		if (result.result) {
			swal('ทำการอัพเดทข้อมูลสำเร็จ', '', 'success');
			reset_update_field();
			refresh_table();
		} else {
			swal('อัพเดทข้อมูลไม่สำเร็จ', '', 'error');
		}
		enabled_update_field();

	}).fail(function (result) {
		console.log("ERROR: " + result);
		enabled_update_field();
	});
}

function reset_update_field() {
	ori_prod['prod_id'] = '';
	ori_prod['name'] = '';
	ori_prod['detail'] = '';
	ori_prod['picture'] = '';
	ori_prod['price'] = '';
	ori_prod['piece'] = '';
	$('#update_prod_id').val('');
	$('#update_prod_name').val('');
	$('#update_prod_detail').val('');
	$('#update_prod_picture').val('');
	$('#update_prod_price').val('');
	$('#update_prod_piece').val('');
}

function backup_update_field(data) {
	ori_prod['prod_id'] = data['prod_id'];
	ori_prod['name'] = data['name'];
	ori_prod['detail'] = data['detail'];
	ori_prod['picture'] = data['picture'];
	ori_prod['price'] = data['price'];
	ori_prod['piece'] = data['piece'];
}

function restore_update_field() {
	$('#update_prod_id').val(ori_prod['prod_id']);
	$('#update_prod_name').val(ori_prod['name']);
	$('#update_prod_detail').val(ori_prod['detail']);
	$('#update_prod_picture').val(ori_prod['picture']);
	$('#update_prod_price').val(ori_prod['price']);
	$('#update_prod_piece').val(ori_prod['piece']);
}

function clear_update_field() {
	$('#update_prod_id').val('');
	$('#update_prod_name').val('');
	$('#update_prod_detail').val('');
	$('#update_prod_picture').val('');
	$('#update_prod_price').val('');
	$('#update_prod_piece').val('');
}