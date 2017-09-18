$('document').ready(function () {

	$('#btn_add').click(function () {
		if ( !$('#prod_name').val() || !$('#prod_detail').val() || !$('#prod_picture').val() || !$('#prod_price').val() || !$('#prod_piece').val()) {
			swal('กรุณากรอก input ให้ครบทุกช่อง', '', 'error');
		} else {
			add_product();
		}

	});
	$('#btn_clear').click(function () {
		$('#prod_name, #prod_detail, #prod_picture, #prod_price, #prod_piece').val('');
	});

});


function add_product() {
	var url = APP_PATH + 'ajax_add_product';
	var data = {
		prod_name: $('#prod_name').val(),
		prod_detail: $('#prod_detail').val(),
		prod_picture: $('#prod_picture').val(),
		prod_price: $('#prod_price').val(),
		prod_piece: $('#prod_piece').val()
	};
	console.log(data);
	$.post(url, data, function (result) {
		console.log(result); // dbg
		if (result.result) {
			swal('ทำการเพิ่ม Product สำเร็จ', '', 'success');
		} else {
			swal(result.status_message, '', 'error');
		}

	}).fail(function (result) {
		console.log("ERROR: " + result);
	});
}