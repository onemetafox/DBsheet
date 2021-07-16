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
            "mask": "9999999999"
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
			                    	toastr.success(data.msg);
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
                        window.location = HOST_URL;
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
