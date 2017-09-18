

function editProduct(pid){

	$.ajax({

		url: "classes/searchProduct.php",

		type: "POST",

		dataType: "json",

		data: {pidSend: pid},

		success: function(response) {

			if (response.status = true)

			{

				bootbox.confirm({

					title: 'ข้อมูลสินค้าหมายเลข: '+response.pid,

					message: 	"<form id='editp' action=''>" +
								
								"<div>" +
									"เลือกรูปที่จะอัพโหลด:" +
									"<input type='file' name='imgToUpload' id='imgToUpload'>" +
								"</div><br>"+
								
								'<div class="row">'+

								'<div class = "form-group">'+

								'<div class="col-xs-6">'+

								'<label class="col-xs-12">ชื่อสินค้า</label>'+

								'<input class="form-control" type="text" id="p_name" name="p_name" placeholder="กรุณาใส่ชื่อสินค้า" value="'+ response.pname +'">'+

								'</div>'+

								'<div class="col-xs-6">'+

								'<label class="col-xs-12">จำนวนสินค้า</label>'+
								
								'<input class="form-control" type="text" id="p_have" name="p_have" placeholder="กรุณาใส่จำนวนสินค้าที่มี" value="'+ response.phave +'">'+

								'</div>'+

								'<div class="col-xs-6">'+

								'<label class="col-xs-12">ราคาสินค้า</label>'+

								'<input class="form-control" type="text" id="p_price" name="p_price" placeholder="กรุณาใส่ราคา" value="'+ response.pprice +'">'+

								'</div>'+

								'<div class="col-xs-6">'+

								'<label class="col-xs-12">ข้อมูลสินค้า</label>'+

								'<textarea class="form-control" type="text" id="p_info" name="p_info" placeholder="กรุณาใส่รายละเอียดสินค้า" >'+ response.pinfo+'</textarea>'+

								'</div>'+

								'</div>'+
								
								'</form>', 

					buttons: {

						confirm: {

							label: "แก้ไขข้อมูล",

							className: "btn-warning"

						},

						cancel: {

							label: "ปิดหน้านี้",

							className: "btn-success"

						}

					},

					callback: function(result) {
							
							if(result){
								/*var img = $('#fileToUpload').val();
								var name = $('#p_name').val();
								var info = $('#p_info').val();
								var price = $('#p_price').val();
								var itHave = $('#p_have').val();*/
								var formData = new FormData($('#editp')[0]);
								formData.append('pidSend',response.pid);
								$.ajax({

									url: "classes/editProduct.php",

									type: "POST",
									
									dataType: "json",

									data: formData,
									/*data: {pidSend: pid, nameSend: name, infoSend: info, priceSend: price, haveSend: itHave, imgSend: img},*/
									
									success: function(response) {

										if (response.status = true)

										{

											swal({   

												title: "แก้ไขข้อมูลสำเร็จแล้ว",   

												text: "ข้อมูลสินค้ารหัส " + pid +" ได้ถูกแก้ไขแล้ว",   

												icon: "success",

												button: "ยืนยัน",

												closeOnConfirm: false,   

												closeOnCancel: false 

											})
											.then((isConfirm)=> {   

												if (isConfirm) {

													window.location = "index.php";

												}

											});

										}

									},

									error: function (request, statuserror, error){

										swal("เกิดข้อผิดพลาด", request.responseText, "error");

									},
									
									contentType: false,
									
									processData: false

								});
							}
						}

				});

			}

		},

		error: function (request, statuserror, error) {

			swal("เกิดข้อผิดพลาด", request.responseText, "error");

		}

	});
}



function removeProduct(pid1){

	swal({   

		title: "ยืนยันการลบสินค้าหมายเลข: "+pid1+" ?",   

		text: "หากคุณลบสินค้านี้แล้วจะไม่สามารถกู้คืนได้อีก",   

		icon: "warning",   

		showCancelButton: true,   

		confirmButtonColor: "#DD6B55",   

		buttons: ["ยกเลิก", "ยืนยัน"],

	}) 
	.then((willDelete) => {
		
		if (willDelete) {

			xmlhttp = new XMLHttpRequest();

			xmlhttp.open("GET","classes/removeProduct.php?q="+pid1,true);

			xmlhttp.send();

			swal({   

				title: "ลบข้อมูลสินค้าสำเร็จแล้ว",   

				text: "ข้อมูลสินค้าได้ถูกลบออกจากระบบแล้ว",   

				icon: "success",

				button: "ยืนยัน", 

				closeOnConfirm: false,   

				closeOnCancel: false 

			})

			.then((isConfirm)=> {   

				if (isConfirm) {

					window.location = "index.php";

				}

			});

		} else {
			swal({   

				title: "ยกเลิกแล้ว",   

				text: "ข้อมูลสนค้านี้จะยังคงอยู่ในระบบ",   

				icon: "error",

				button: "ยืนยัน", 

				closeOnConfirm: false,   

				closeOnCancel: false 

			})			

		} 

	});

}

function newProduct(){

	bootbox.confirm({

		title: 'เพิ่มสินค้าใหม่',

		message: 	"<form id='editp' action=''>" +
					
					"<div>" +
						"เลือกรูปที่จะอัพโหลด:" +
						"<input type='file' name='imgToUpload' id='imgToUpload'>" +
					"</div><br>"+
					
					'<div class="row">'+

					'<div class = "form-group">'+

					'<div class="col-xs-6">'+

					'<label class="col-xs-12">ชื่อสินค้า</label>'+

					'<input class="form-control" type="text" id="p_name" name="p_name" placeholder="กรุณาใส่ชื่อสินค้า" >'+

					'</div>'+

					'<div class="col-xs-6">'+

					'<label class="col-xs-12">จำนวนสินค้า</label>'+
					
					'<input class="form-control" type="text" id="p_have" name="p_have" placeholder="กรุณาใส่จำนวนสินค้าที่มี" >'+

					'</div>'+

					'<div class="col-xs-6">'+

					'<label class="col-xs-12">ราคาสินค้า</label>'+

					'<input class="form-control" type="text" id="p_price" name="p_price" placeholder="กรุณาใส่ราคา" >'+

					'</div>'+

					'<div class="col-xs-6">'+

					'<label class="col-xs-12">ข้อมูลสินค้า</label>'+

					'<textarea class="form-control" type="text" id="p_info" name="p_info" placeholder="กรุณาใส่รายละเอียดสินค้า" ></textarea>'+

					'</div>'+

					'</div>'+
					
					'</form>', 

		buttons: {

			confirm: {

				label: "เพิ่มสินค้า",

				className: "btn-success"

			},

			cancel: {

				label: "ปิดหน้านี้",

				className: "btn-warning"

			}

		},

		callback: function(result) {
				
				if(result){
					/*var img = $('#fileToUpload').val();
					var name = $('#p_name').val();
					var info = $('#p_info').val();
					var price = $('#p_price').val();
					var itHave = $('#p_have').val();*/
					var formData = new FormData($('#editp')[0]);
					$.ajax({

						url: "classes/addProduct.php",

						type: "POST",
						
						dataType: "json",

						data: formData,
						/*data: {pidSend: pid, nameSend: name, infoSend: info, priceSend: price, haveSend: itHave, imgSend: img},*/
						
						success: function(response) {

							if (response.status = true)

							{

								swal({   

									title: "เพิ่มสินค้าสำเร็จแล้ว",   

									text: "ข้อมูลสินค้ารหัสใหม่ได้ถูกเพิมสู่ระบบแล้ว",   

									icon: "success",

									button: "ยืนยัน",

									closeOnConfirm: false,   

									closeOnCancel: false 

								})
								.then((isConfirm)=> {   

									if (isConfirm) {

										window.location = "index.php";

									}

								});

							}

						},

						error: function (request, statuserror, error){

							swal("เกิดข้อผิดพลาด", request.responseText, "error");

						},
						
						contentType: false,
						
						processData: false

					});
				}
			}

	});
}