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
            "mask": "(999) 999-9999"
        }); 
        $("input[name=post_code]").inputmask("mask", {
            "mask": "999-9999"
        });
        $("input[name=phone1]").inputmask("mask", {
            "mask": "99999999999"
        });
     	$("input[name=phone2]").inputmask("mask", {
            "mask": "99999999999"
        });
        $("input[name=phone4]").inputmask("mask", {
            "mask": "99999999999"
        });
        $("input[name=phone3]").inputmask("mask", {
            "mask": "99999999999"
        });
        $("input[name=post_code]").inputmask("mask", {
            "mask": "999-9999"
        });
        $("input[name=post_code]").inputmask("mask", {
            "mask": "999-9999"
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
        	if (window.confirm("本当に去りたいですか？?")) {
				$("#decide").val("delete");
        		$("#kt_confirm_modal").modal('show');
			}
        });
		_wizardObj = new KTWizard(_wizardEl, {
			startStep: 1, // initial active step number
			clickableSteps: false  // allow step clicking
		});

		// Validation before going to next page
		_wizardObj.on('change', function (wizard) {
			
			if (wizard.getStep() > wizard.getNewStep()) {
				return; // Skip if stepped back
			}

			// Validate form before change wizard step
			var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

			if (validator) {
				validator.validate().then(function (status) {
					if (status == 'Valid') {
						if(wizard.currentStep == 1){
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
				                        datatable1.setDataSourceParam("query[user_id]", data.id);
                        				datatable1.reload();
				                    }else{
				                        swal.fire({
							                text: data.msg,
							                icon: "error",
							                buttonsStyling: false,
							                confirmButtonText: "はい、わかった！",
					                        customClass: {
					    						confirmButton: "btn font-weight-bold btn-light-primary"
					    					}
							            }).then(function() {
											KTUtil.scrollTop();
										});
				                    }
				                },
				            });
						}
						if(wizard.currentStep == 2){
							datatable2.setDataSourceParam("query[user_id]", $("#id").val());
							datatable2.reload();
						}
						wizard.goTo(wizard.getNewStep());

						KTUtil.scrollTop();
					}
					// datatable1.reload();
					// datatable2.reload();
				});
			}

			return false;  // Do not change wizard step, further action will be handled by he validator
		});

		// Change event
		_wizardObj.on('changed', function (wizard) {
			KTUtil.scrollTop();
		});
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
								message: '氏名は必須です'
							}
						}
					},
					address: {
						validators: {
							notEmpty: {
								message: 'アドレスは必須です'
							}
						}
					},
					nick_name: {
						validators: {
							notEmpty: {
								message: 'ふりがなは必須です'
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
					phone: {
						validators: {
							notEmpty: {
								message: '電話自宅は必須です'
							},digits: {
								message: '無効入力'
							}
						}
					},phone1: {
						validators: {
							digits: {
								message: '無効入力'
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
								message: '無効なメール'
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

		// Step 2
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					address1: {
						validators: {
							notEmpty: {
								message: 'Address is required'
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
