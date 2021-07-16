arrows = {
    leftArrow: '<i class="la la-angle-right"></i>',
    rightArrow: '<i class="la la-angle-left"></i>'
}
var datatable3;
var datatable4
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!****************************************************************!*\
  !*** ../demo1/src/js/pages/crud/ktdatatable/base/data-ajax.js ***!
  \****************************************************************/

// Class definition
var KTDatatableRemoteAjaxDemo1 = function() {
    // Private functions

    // basic demo
    var demo1 = function(product_id) {

        datatable3 = $('#kt_datatable').KTDatatable({
            scrollY: '50vh',
            scrollX: true,
            scrollCollapse: true,
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + 'admin/detail/api',
                        // sample custom headers
                        headers: {'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
                        map: function(raw) {
                            var dataSet = raw;
                            if (typeof raw.data !== 'undefined') {
                                dataSet = raw.data;
                            }
                            return dataSet;
                        },
                        params : {
                            query:{
                                "product_id" : product_id
                            }
                        }
                    },
                },
                pageSize: 10,
                serverPaging: false,
                serverFiltering: false,
                serverSorting: false
            },
            scrollX : true,
            scrollCollapse: true,
            layout: {
                scroll: true,
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
			
            sortable: false,

            pagination: false,

            columns: [{
                field: 'back',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '丈(背)'
            }, {
                field: 'shoulder',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '丈(肩)'
            }, {
                field: 'yuki',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '裄'
            }, {
                field: 'shawl',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '肩巾'
            }
            , {
                field: 'sleeve_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '袖巾'
            }
            , {
                field: 'sleeve_length',
                width: 20,
                overflow: 'visible',
                autoHide: false,
                title: '袖丈'
            }
            , {
                field: 'with_sleeves',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '袖付'
            },{
                field: 'front_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '前巾'
            }
            , {
                field: 'back_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '後巾'
            }
            , {
                field: 'under_hood',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '褄下'
            }
            , {
                field: 'hug',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '抱巾'
            }
            , {
                field: 'width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '衽巾'
            }
            , {
                field: 'carry_forward',
                width: 20,
                overflow: 'visible',
                autoHide: false,
                title: '繰越'
            },{
                field: 'hips',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'ヒップ'
            },{
                field: 'bust',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'バスト'
            },{
                field: 'west',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'ウエスト'
            },{
                field: 'height',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '身長'
            }, {
                field: 'Actions',
                title: '編 集',
                sortable: false,
                width: 240,
                overflow: 'visible',
                autoHide: false,
                template: function(row) {
                    return '\
                    <a href="javascript:editDetail('+row.id+')" class="btn btn-icon btn-light btn-hover-primary btn-sm edit_btn" title = "編集">\
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
                    <a href="javascript:delDetail('+row.id+')" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="削除">\
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

        $("#new_detail").on("click", function(){
            // $('#form')[0].reset();
            $("#id").val("");
            $('#kt_detail_form').trigger("reset");
            $("#kt_detail_modal").modal('show');
        });
       
    };
    var demo2 = function(product_id) {
        datatable4 = $('#kt_datatable_1').KTDatatable({
            scrollY: '50vh',
            scrollX: true,
            scrollCollapse: true,
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + 'admin/detail/api',
                        // sample custom headers
                        headers: {'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
                        map: function(raw) {
                            var dataSet = raw;
                            if (typeof raw.data !== 'undefined') {
                                dataSet = raw.data;
                            }
                            return dataSet;
                        },
                        params : {
                            query:{
                                "product_id" : product_id
                            }
                        }
                    },
                },
                pageSize: 10,
                serverPaging: false,
                serverFiltering: false,
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
            
            sortable: false,

            pagination: false,

            columns: [{
                field: 'back',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '丈(背)',
                template : function(row){
                    return Number(row.back) * 26;
                }
            }, {
                field: 'shoulder',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '丈(肩)',
                template : function(row){
                    return Number(row.shoulder) * 26;
                }
            }, {
                field: 'yuki',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '裄',
                template : function(row){
                    return Number(row.yuki) * 26;
                }
            }, {
                field: 'shawl',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '肩巾',
                template : function(row){
                    return Number(row.shawl) * 26;
                }
            }
            , {
                field: 'sleeve_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '袖巾',
                template : function(row){
                    return Number(row.sleeve_width) * 26;
                }
            }
            , {
                field: 'sleeve_length',
                width: 20,
                overflow: 'visible',
                autoHide: false,
                title: '袖丈',
                template : function(row){
                    return Number(row.sleeve_length) * 26;
                }
            }
            , {
                field: 'with_sleeves',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '袖付',
                template : function(row){
                    return Number(row.with_sleeves) * 26;
                }
            },{
                field: 'front_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '前巾',
                template : function(row){
                    return Number(row.front_width) * 26;
                }
            }
            , {
                field: 'back_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '後巾',
                template : function(row){
                    return Number(row.back_width) * 26;
                }
            }
            , {
                field: 'under_hood',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '褄下',
                template : function(row){
                    return Number(row.under_hood) * 26;
                }
            }
            , {
                field: 'hug',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '抱巾',
                template : function(row){
                    return Number(row.hug) * 26;
                }
            }
            , {
                field: 'width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '衽巾',
                template : function(row){
                    return Number(row.width) * 26;
                }
            }
            , {
                field: 'carry_forward',
                width: 20,
                overflow: 'visible',
                autoHide: false,
                title: '繰越',
                template : function(row){
                    return Number(row.carry_forward) * 26;
                }
            },{
                field: 'hips',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'ヒップ'
            },{
                field: 'bust',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'バスト'
            },{
                field: 'west',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'ウエスト'
            },{
                field: 'height',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '身長'
            }, {
                field: 'Actions',
                title: '編 集',
                sortable: false,
                width: 240,
                overflow: 'visible',
                autoHide: false,
                template: function(row) {
                    // return '\
                    // <a href="javascript:editDetail('+row.product_id+')" class="btn btn-icon btn-light btn-hover-primary btn-sm edit_btn" title = "Edit">\
                    //     <span class="svg-icon svg-icon-md svg-icon-primary">\
                    //         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                    //             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                    //                 <rect x="0" y="0" width="24" height="24" />\
                    //                 <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />\
                    //                 <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />\
                    //             </g>\
                    //         </svg>\
                    //     </span>\
                    // </a>\
                    // <a href="javascript:delDetail('+row.product_id+')" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="Delete">\
                    //     <span class="svg-icon svg-icon-md svg-icon-primary">\
                    //         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                    //             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                    //                 <rect x="0" y="0" width="24" height="24" />\
                    //                 <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />\
                    //                 <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />\
                    //             </g>\
                    //         </svg>\
                    //     </span>\
                    // </a>\
                    // ';
                     return '\
                    <a href="javascript:delDetail('+row.id+')" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="削除">\
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

    };
    var temp1 = function (){
        $("#setDate").on("click", function(){
            $("#kt_delivery_modal").modal("show");
        })
        $('input[name=delivery_date]').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            format: "yyyy-mm-dd"
        });
        $("form#kt_detail_form").submit(function (event) {
            var paramObj = new FormData($("form#kt_detail_form")[0]);
            paramObj.append('product_id',$("#product_id").val());
            paramObj.append('user_id',$("#user_id").val());
            $.ajax({
                url: HOST_URL + "admin/detail/save",
                type: 'post',
                data: paramObj,
                contentType: false,
                processData: false,
                success: function(response){
                    var data = JSON.parse(response);
                    if(data.success){
                        $("#kt_detail_modal").modal('hide');
                        $("#product_id").val(data.id);
                        // datatable3.search($("#product_id").val(), "product_id");
                        // datatable4.search($("#product_id").val(), "product_id");
                        datatable3.reload();
                        datatable4.reload();
                    }else{
                        toastr.error(data.msg)
                    }
                },
            });
            event.preventDefault();
        });
        $("form#kt_date_form").submit(function (event) {
            var paramObj = new FormData($("form#kt_date_form")[0]);
            paramObj.append('product_id',$("#product_id").val());
            paramObj.append('user_id',$("#user_id").val());
            $.ajax({
                url: HOST_URL + "admin/product/save",
                type: 'post',
                data: paramObj,
                contentType: false,
                processData: false,
                success: function(response){
                    var data = JSON.parse(response);
                    if(data.success == true){
                        toastr.success(data.msg);
                    }else{
                        toastr.error(data.msg)
                    }
                },
            });
            event.preventDefault();
        });
        $("#setMaking").on('click', function(){
            // if (window.confirm("未完成")) {
                var data = new FormData();
                data.append("product_id", $("#product_id").val());
                data.append("making","2");
                data.append("user_id", $("#user_id").val());
                $.ajax({
                    url: HOST_URL + "admin/product/save",
                    type: 'post',
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        var data = JSON.parse(response);
                        if(data.success == true){
                            toastr.success(data.msg);
                        }else{
                            toastr.error(data.msg);
                        }
                    },
                });
            // }
        })
    }
    return {
        // public functions
        init: function(product_id) {
            temp1();
            demo1(product_id);
            demo2(product_id);
        },
    };
}();

jQuery(document).ready(function() {
    var product_id = $("#product_id").val();
    KTDatatableRemoteAjaxDemo1.init(product_id);
});

/******/ })()
;
//# sourceMappingURL=data-ajax.js.map

function editDetail(product_id){
    $.ajax({
        type: "POST",
        url: HOST_URL + "admin/detail/api",
        data: {
            query:{"product_id" : product_id}
        },
        dataType: "json",
        encode: true,
    }).done(function (data) {
        var row = data.data;
        $("input[name=id]").val(row[0]["id"]);
        $("input[name=back]").val(row[0]["back"]);
        $("input[name=shoulder]").val(row[0]["shoulder"]);
        $("input[name=yuki]").val(row[0]["yuki"]);
        $("input[name=shawl]").val(row[0]["shawl"]);
        $("input[name=sleeve_width]").val(row[0]["sleeve_width"]);
        $("input[name=sleeve_length]").val(row[0]["sleeve_length"]);
        $("input[name=with_sleeves]").val(row[0]["with_sleeves"]);
        $("input[name=front_width]").val(row[0]["front_width"]);
        $("input[name=back_width]").val(row[0]["back_width"]);
        $("input[name=under_hood]").val(row[0]["under_hood"]);
        $("input[name=hug]").val(row[0]["hug"]);
        $("input[name=width]").val(row[0]["width"]);
        $("input[name=carry_forward]").val(row[0]["carry_forward"]);
        $("input[name=hips]").val(row[0]["hips"]);
        $("input[name=bust]").val(row[0]["bust"]);
        $("input[name=west]").val(row[0]["west"]);
        $("input[name=height]").val(row[0]["height"]);
        $("#kt_detail_modal").modal('show');
    });
}

function delDetail(id){
    $.ajax({
        type: "POST",
        url: HOST_URL + "admin/detail/delete",
        data: {"id" : id },
        dataType: "json",
        encode: true,
    }).done(function (data) {
        toastr.success("成 功");
        datatable3.reload();
        datatable4.reload();
    });
}
function switchView(index){
    if(index == 1){
        datatable3.reload();
        $("#ex1-tab-1").addClass("active");
        $("#ex1-tab-2").removeClass("active");
        $("#ex1-tabs-1").addClass("active");
        $("#ex1-tabs-2").removeClass("active");
    }else{
        datatable4.reload();
        $("#ex1-tab-1").removeClass("active");
        $("#ex1-tab-2").addClass("active");
        $("#ex1-tabs-1").removeClass("active");
        $("#ex1-tabs-2").addClass("active");
    }

}