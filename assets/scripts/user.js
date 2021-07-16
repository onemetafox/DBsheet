/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!***********************************************************!*\
  !*** ../demo1/src/js/pages/custom/login/login-general.js ***!
  \***********************************************************/


// Class Definition
var KTLogin = function() {
    var _login;

    var _showForm = function(form) {
        var cls = 'login-' + form + '-on';
        var form = 'kt_login_' + form + '_form';

        _login.removeClass('login-forgot-on');
        _login.removeClass('login-signin-on');
        _login.removeClass('login-signup-on');

        _login.addClass(cls);

        KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
    }

    var _handleSignInForm = function() {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_signin_form'),
			{
				fields: {
					username: {
						validators: {
							notEmpty: {
								message: 'ユーザー名が必要です'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'パスワードが必要です'
							}
						}
					}
				},
				plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        $('#kt_login_signin_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
		        if (status == 'Valid') {
		        	var paramObj = new FormData($("#kt_login_signin_form")[0]);
		        	$.ajax({
		                url: HOST_URL + "welcome/signin",
		                type: 'post',
		                data: paramObj,
		                contentType: false,
		                processData: false,
		                success: function(response){
		                    var data = JSON.parse(response);
		                    if(data.success == true){
		                        window.location = HOST_URL;
		                    }else{
		                        swal.fire({
					                text: data.msg,
					                icon: "error",
					                buttonsStyling: false,
					                confirmButtonText: "はい、わかった!",
			                        customClass: {
			    						confirmButton: "btn font-weight-bold btn-light-primary"
			    					}
					            }).then(function() {
									KTUtil.scrollTop();
								});
		                    }
		                },
		            });
				} else {
					swal.fire({
		                text: "申し訳ありませんが、エラーが発生しました。再試行してください。",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "はい",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });
    }

   

    // Public Functions
    return {
        // public functions
        init: function() {
            _login = $('#kt_login');
            _handleSignInForm();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});

/******/ })()
;
//# sourceMappingURL=login-general.js.map