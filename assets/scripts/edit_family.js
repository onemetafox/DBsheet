arrows = {
    leftArrow: '<i class="la la-angle-right"></i>',
    rightArrow: '<i class="la la-angle-left"></i>'
}

var datatable1;
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!****************************************************************!*\
  !*** ../demo1/src/js/pages/crud/ktdatatable/base/data-ajax.js ***!
  \****************************************************************/

// Class definition
var KTDatatableRemoteAjaxDemo1 = function(user_id) {
    // Private functions

    // basic demo
    var demo1 = function(user_id) {

        datatable1 = $('#kt_family_table').KTDatatable({
            // datasource definition
            
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + 'admin/family/api',
                        // sample custom headers
                        headers: {'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
                        map: function(raw) {
                            var dataSet = raw;
                            if (typeof raw.data !== 'undefined') {
                                dataSet = raw.data;
                            }
                            return dataSet;
                        },
                        params :{
                            query :{
                                "user_id" : $("#id").val()==""?"test":$("#id").val()
                            }
                        }
                    },
                },
                pageSize: 10,
                serverPaging: false,
                serverFiltering: true,
                serverSorting: false
            },
            layout: {
                scroll: false,
                footer: false,
					icons:{
						pagination: {
							next: 'la la-angle-right',
							prev: 'la la-angle-left',
							first: 'la la-angle-double-left',
							last: 'la la-angle-double-right',
							more: 'la la-ellipsis-h'
						  }
					},
            },
            translate :{
                records : {
                    noRecords : 'データがありません',
                    processing: 'お待ちください...'
                },
                toolbar :{
                    pagination :{
                        items :{
                            info : '表示 {{start}} - {{end}} の {{total}} 記録'
                        }
                    }
                }
            },
			
            // column sorting
            sortable: true,

            pagination: false,

            columns: [{
                field: 'name',
                title: '名 前',
                textAlign: 'center'
            }, {
                field: 'nick_name',
                title: 'ふりがな',
                textAlign: 'center'
            }, {
                field: 'sex',
                title: '性 別',
                width: 40,
                template : function(row){
                    if(row.sex == 1){
                        return '男';
                    }else{
                        return '女'
                    }
                }
            }, {
                field: 'birthday',
                title: '生年月日'
            }, {
                field: 'content',
                title: '続柄'
            }, {
                field: 'Actions',
                title: '編 集',
                sortable: false,
                width: 240,
                overflow: 'visible',
                autoHide: false,
                template: function(row) {
                    return '\
                    <a href="javascript:editFamily('+row.id+')" class="btn btn-icon btn-light btn-hover-primary btn-sm edit_btn" title = "編集">\
                        <span class="svg-icon svg-icon-md svg-icon-primary">\
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                    <rect x="0" y="0" width="24" height="24" />\
                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />\
                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />\
                                </g>\
                            </svg>\
                        </span>\
                    </a>\
                    <a href="javascript:delFamily('+row.id+')" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="削除">\
                        <span class="svg-icon svg-icon-md svg-icon-primary">\
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                    <rect x="0" y="0" width="24" height="24" />\
                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />\
                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />\
                                </g>\
                            </svg>\
                        </span>\
                    </a>\
                    ';
                },
            }],

        });

        $("#new_family").on("click", function(){
            // $('#form')[0].reset();
            if($("#id").val() == ""){
                toastr.error("ユーザー情報を登録してください。");
                return;
            }
            $("#family_id").val("");
            $('#kt_family_form').trigger("reset");
            $("#kt_family_modal").modal('show');
        });
       
    };
    var temp1 = function (){
        $("form#kt_family_form").submit(function (event) {
            var paramObj = new FormData($("form#kt_family_form")[0]);
            paramObj.append('user_id',$("#id").val());
            $.ajax({
                url: HOST_URL + "admin/family/save",
                type: 'post',
                data: paramObj,
                contentType: false,
                processData: false,
                success: function(response){
                    var data = JSON.parse(response);
                    if(data.success == true){
                        $("#kt_family_modal").modal('hide');
                        $("#id").val(data.id);
                        datatable1.search(data.id, 'user_id');
                    }else{
                        toastr.error(data.msg)
                    }
                },
            });
            event.preventDefault();
        });
    }
    return {
        // public functions
        init: function(user_id) {
            temp1();
            demo1(user_id);
        },
    };
}();

jQuery(document).ready(function() {
    $('input[name=birthday]').datepicker({
        rtl: KTUtil.isRTL(),
        orientation: "bottom left",
        todayHighlight: true,
        templates: arrows,
        format: "yyyy-mm-dd"
    });
    var user_id = $("#id").val();
    KTDatatableRemoteAjaxDemo1.init(user_id);
});

/******/ })()
;
//# sourceMappingURL=data-ajax.js.map

function editFamily(id){
    $.ajax({
        type: "POST",
        url: HOST_URL + "admin/family/api",
        data: {
            query:{"id" : id}
        },
        dataType: "json",
        encode: true,
    }).done(function (data) {
        var row = data.data;
        $("#kt_family_form #family_id").val(row["id"]);
        $("#kt_family_form #name").val(row["name"]);
        $("#kt_family_form #nick_name").val(row["nick_name"]);
        $("#kt_family_form #birthday").val(row["birthday"]);
        $("#kt_family_form #sex").val(row["sex"]);
        $("#kt_family_form #content").val(row["content"]);
        $("#kt_family_modal").modal('show');
    });
}

function delFamily(id){
    $.ajax({
        type: "POST",
        url: HOST_URL + "admin/family/delete",
        data: {"id" : id },
        dataType: "json",
        encode: true,
    }).done(function (data) {
        toastr.success("成 功");
        datatable1.reload();
    });
}