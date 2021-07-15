/******/ (() => { // webpackBootstrap
/******/    "use strict";
var __webpack_exports__ = {};
/*!*************************************************************!*\
  !*** ../demo1/src/js/pages/crud/file-upload/image-input.js ***!
  \*************************************************************/


// Class definition
var KTImageInputDemo = function () {
    // Private functions
    var initDemos = function () {
        var avatar1 = new KTImageInput('kt_image_1');
        var avatar2 = new KTImageInput('kt_image_2');
        var avatar3 = new KTImageInput('kt_image_3');
        var avatar4 = new KTImageInput('kt_image_4');
        var avatar5 = new KTImageInput('kt_image_5');
        var avatar6 = new KTImageInput('kt_image_6');
        var avatar7 = new KTImageInput('kt_image_7');
        var avatar8 = new KTImageInput('kt_image_8');
    }

    return {
        // public functions
        init: function() {
            initDemos();
        }
    };
}();

jQuery(document).ready(function () {
    KTImageInputDemo.init();
});

/******/ })()
;
//# sourceMappingURL=image-input.js.map

function saveData(){
    var formData = new FormData();
    for(var i =1 ; i <= 8 ; i++){
        if($(".image-"+i).css("background-image") != "url(\"http://localhost/dbsheet/uploads/\")"){
            var file = $('#profile_avatar_'+i)[0].files;
            formData.append('file'+i ,file[0]);
        }
    }
        
    formData.append("product_id", $("#product_id").val());
    formData.append("user[age]", $("input[name=age]").val());
    formData.append("user[color]", $("input[name=color]").val());
    formData.append("user[hobby]", $("select[name=hobby]").val());
    formData.append("user[habit]", $("select[name=habit]").val());
    formData.append("user[etc]", $("input[name=etc]").val());
    formData.append("user[body]", $("input[name=body]").val());

    $.ajax({
        url: HOST_URL + 'admin/product/saveImage',
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