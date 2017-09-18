$(document).ready(function () {

	$('#acc_user, #acc_pass').keypress(function (e) {
		var key = e.which;
		if (key === 13) {
			check_input() ? login() : swal('กรุณาใส่ Username หรือ Password', '', 'error');
		}
	});

	$('#submit').click(function () {
		check_input() ? login() : swal('กรุณาใส่ Username หรือ Password', '', 'error');
	})

})

function login() {
	var data = {
		'acc_user': $('#acc_user').val(),
		'acc_pass': $('#acc_pass').val()
	}
	var url = APP_PATH + 'ajax_login';

	$.post(url, data, function(result) {
		console.log(result);

		if (result.result) {
			location.assign(result.redirect);				
		} else {
			swal(result.status_message, '', 'error');
		}
	}).fail(function (result) {
		console.log("ERROR: " + result);
	});
}

function check_input() {
	return $('#acc_user').val() != '' && $('#acc_pass').val() != '';
}

