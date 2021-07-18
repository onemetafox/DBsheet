"use strict";

// Class definition
var KTWizard5 = function () {
	// Base elements
	var _wizardEl;
	var _formEl;
	var _wizardObj;
	var _validations = [];

	var initUI = function(){
        $("input[name=mobile]").inputmask("mask", {
            "mask": "999-9999-9999"
        }); 
        $("input[name=post_code]").inputmask("mask", {
            "mask": "999-9999"
        });
        $("input[name=phone1]").inputmask("mask", {
            "mask": "9999999999"
        });
     	$("input[name=phone2]").inputmask("mask", {
            "mask": "9999999999"
        });
        $("input[name=phone4]").inputmask("mask", {
            "mask": "999-9999-9999"
        });
        $("input[name=phone3]").inputmask("mask", {
            "mask": "9999999999"
        });
         $('input[name=birthday]').datepicker({
	        rtl: KTUtil.isRTL(),
	        orientation: "bottom left",
	        todayHighlight: true,
	        templates: arrows,
	        format: "yyyy-mm-dd"
	    });
    }
	// Private functions
	var _initWizard = function () {
		// Initialize form wizard

	 	$("#confirm").on("click", function(){
	 		$("#decide").val("save");
        	$("#kt_confirm_modal").modal('show');
        });
        $("#delete").on("click", function(){
        	if (window.confirm("削除しますか？")) {
				$("#decide").val("delete");
        		$("#kt_confirm_modal").modal('show');
			}
        });
        $("#new_photo").on('click',function(){

        	var count = $(".photo-container>div").length +1;

        	var str = '<div class="image-input image-input-outline m-5" id="kt_image_'+count+'" style="background-image: url(/dbsheet/assets/media/users)">\
                        <div class="image-'+count+' image-input-wrapper" ;background-size: contain;"></div>\
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="アバターを変更する">\
                            <i class="fa fa-pen icon-sm text-muted"></i>\
                            <input type="file" id = "profile_avatar_'+count+'" name="profile_avatar_'+count+'" accept=".heic, .jpg, .jpeg, .tiff"/>\
                            <input type="hidden" name="profile_avatar_remove"/>\
                        </label>\
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="アバターをキャンセルする">\
                        <i class="ki ki-bold-close icon-xs text-muted"></i>\
                        </span>\
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" onclick="removeImg('+count+')" data-action="remove" data-toggle="tooltip" title="アバターを削除する">\
                        <i class="ki ki-bold-close icon-xs text-muted"></i>\
                        </span>\
                    </div>';
             $(".photo-container").append(str);
             var temp = new KTImageInput('kt_image_'+count);
        })
        $("button[name=saveUser]").on('click', function(){
        	var validator = _validations[0];
        	if (validator) {
				validator.validate().then(function (status) {
					if (status == 'Valid') {
						
						var data = new FormData($("#kt_form")[0]);
						$.ajax({
			                url: HOST_URL + "admin/user/save",
			                type: 'post',
			                data: data,
			                contentType: false,
			                processData: false,
			                success: function(response){
			                    var data = JSON.parse(response);
			                    if(data.success == true){
			                        $("#id").val(data.id);
			                        toastr.success("基本情報を登録しました。次の情報を登録してください。");
									datatable1.search(data.id, 'user_id');
									$("#confirm").css("display","block");
			                    }else{
			                    	toastr.error(data.msg);
			                    }
			                },
			            });
					}
				});
			}
        })
	}

	var _initValidation = function () {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					name: {
						validators: {
							notEmpty: {
								message: '名前は必須です'
							}
						}
					},
					address: {
						validators: {
							notEmpty: {
								message: '住所は必須です'
							}
						}
					},
					nick_name: {
						validators: {
							notEmpty: {
								message: 'ふりがなは必須です'
							},
							isKatakana: {
								message: "ふりがなナを入力してください",
							}
						}
					},
					mobile: {
						validators: {
							notEmpty: {
								message: '携帯電話は必須です'
							}
						}
					},
					post_code: {
						validators: {
							notEmpty: {
								message: '郵便番号は必須です'
							}
						}
					},
					email: {
						validators: {
							notEmpty: {
								message: 'メールアドレスは必須です'
							},
							emailAddress: {
								message: 'メールアドレスを入力してください。'
							}
						}
					}


				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));

	}
	var temp1 = function (){
		$("form#kt_password_form").submit(function (event) {
            var paramObj = new FormData($("form#kt_password_form")[0]);
            $.ajax({
                url: HOST_URL + "welcome/checkPassword",
                type: 'post',
                data: paramObj,
                contentType: false,
                processData: false,
                success: function(response){
                    var data = JSON.parse(response);
                    if(data.success == true){
                        $("#kt_password_modal").modal('hide');
                        if($("input[name=show_type]").val()=="purchase"){
                        	$('.purchase').collapse('show');
                        	$("#detail_div").css("display","block");
                        }else{
                        	$('.extend').collapse('show');
                        }
                    }else{
                        toastr.error(data.msg)
                    }
                },
            });
            event.preventDefault();
        });
        $(".img_close").on('click', function(){
        	$("#myModal").css("display", "none");
        })
        $("#kt_confirm_form").submit(function (event) {

            var paramObj = new FormData($("form#kt_confirm_form")[0]);
            paramObj.append('confirm',$("#decide").val());
            paramObj.append('id',$("#id").val());
            $.ajax({
                url: HOST_URL + "admin/user/confirm",
                type: 'post',
                data: paramObj,
                contentType: false,
                processData: false,
                success: function(response){
                    var data = JSON.parse(response);
                    if(data.success == true){
                        $("#kt_confirm_modal").modal('toggle');
                        saveData();
                        // window.location = HOST_URL;
                    }else{
                        toastr.error(data.msg);
                    }
                },
            });
            event.preventDefault();
        });
    }

	return {
		// public functions
		init: function () {
			_wizardEl = KTUtil.getById('kt_wizard');
			_formEl = KTUtil.getById('kt_form');
			initUI();
			_initWizard();
			_initValidation();
			temp1();
		}
	};
}();

jQuery(document).ready(function () {

	KTWizard5.init();
});

function saveData(){
    var formData = new FormData();
    var count = $(".photo-container>div").length;
    for(var i =1 ; i <= count ; i++){
        if($(".image-"+i).css("background-image") != "url(\"http://localhost/dbsheet/uploads/\")"){
            var file = $('#profile_avatar_'+i)[0].files;
            formData.append('file'+i ,file[0]);
        }
    }
        
    formData.append("extend[id]", $("#id").val());
    formData.append("extend[age]", $("#age").val());
    formData.append("extend[color]", $("#color").val());
    formData.append("extend[hobby]", $("#hobby").val());
    formData.append("extend[habit]", $("#habit").val());
    formData.append("extend[etc]", $("#etc").val());
    formData.append("extend[body]", $("#body").val());
    formData.append("extend[extra]", $("#extra").val());

    $.ajax({
        url: HOST_URL + 'admin/user/saveImage',
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response){
            var data = JSON.parse(response);
            if(data.success == true){
                toastr.success(data.msg);
                var raw = data.data;
                // $("input[name=photo-id-"+index+"]").val(raw.id);
            }else{
                toastr.error(data.msg)
            }
        },
    });
}
function removeImg(index){
	$.ajax({
		type: "POST",
        url: HOST_URL + 'admin/user/removeImage',
        data: {
        	"id" : $("#id").val(),
        	"index": index
        },
        dataType: "json",
        encode: true,
        success: function(response){
            var data = JSON.parse(response);
            if(data.success == true){
                toastr.success(data.msg);
                var raw = data.data;
                // $("input[name=photo-id-"+index+"]").val(raw.id);
            }else{
                toastr.error(data.msg)
            }
        },
    });
}
function showPurchase (){
    var isVisible = $('.purchase').is( ":visible" );
    if(isVisible){
        $('.purchase').collapse('hide');
        $("#detail_div").css("display","none");
    }else{
    	$("input[name=show_type]").val("purchase");
    	$("#kt_password_modal").modal("show");
    }
}

function showExtend (){
    var isVisible = $('.extend').is( ":visible" );
    if(isVisible){
        $('.extend').collapse('hide');
    }else{
    	$("input[name=show_type]").val("extend");
    	$("#kt_password_modal").modal("show");
    }
}
function showImage(el){
	var image = el.style.backgroundImage
	var path = image.replace('url(','').replace(')','').replace(/\"/gi, "");
	$("#img01").attr("src",path);
	$("#myModal").css("display", "block");

}