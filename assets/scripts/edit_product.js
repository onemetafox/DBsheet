arrows = {
    leftArrow: '<i class="la la-angle-right"></i>',
    rightArrow: '<i class="la la-angle-left"></i>'
}

var datatable2;
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!****************************************************************!*\
  !*** ../demo1/src/js/pages/crud/ktdatatable/base/data-ajax.js ***!
  \****************************************************************/

// Class definition

var KTDatatableRemoteAjaxDemo2 = function(user_id) {
    // Private functions

    // basic demo
    var demo2 = function(user_id) {

        datatable2 = $('#kt_product_table').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + 'admin/product/api',
                        // sample custom headers
                        headers: {'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
                        map: function(raw) {
                            var temp = {};
                            Object.assign(temp, raw.data[0]);
                            temp.price = 0;
                            var dataSet = raw;
                            if (typeof raw.data !== 'undefined' ) {
                                var data = raw.data;
                                for(var i=0 ; i<data.length; i++){
                                    temp.price = Number(temp.price) + Number(data[i].price);
                                }
                                temp.name = "合計";
                                temp.id = "";
                                temp.content = "";
                                temp.date = "";
                                data.push(temp);
                                dataSet = data;
                            }
                            return dataSet;
                        },
                        params :{
                            query:{
                                "user_id":$("#id").val()==""?"test":$("#id").val()
                            }
                        }
                    },
                },
                pageSize: 10,
                serverPaging: false,
                serverFiltering: true,
                serverSorting: false
				// autoColumns: true
            },

            // layout definition
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
			
            // column sorting
            sortable: true,

            pagination: false,
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
			// columns definition
            columns: [{
                field: 'date',
                title: '買上日',
            }, {
                field: 'name',
                title: '買上品'
            }, {
                field: 'price',
                title: '価 格',
                template:function(row){
                    return new Intl.NumberFormat('ja-JP', { style: 'currency', currency: 'JPY' }).format(Number(row.price))
                }
            }, {
                field: 'content',
                title: 'コンテンツ'
            }, {
                field: 'Actions',
                title: '編 集',
                sortable: false,
                width: 240,
                overflow: 'visible',
                autoHide: false,
                template: function(row) {
                    if(row.id != "")
                    return '\
                    <a href="javascript:loadDetail('+row.id+')" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="寸法">\
                        <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Send.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                <rect x="0" y="0" width="24" height="24"/>\
                                <path d="M3,13.5 L19,12 L3,10.5 L3,3.7732928 C3,3.70255344 3.01501031,3.63261921 3.04403925,3.56811047 C3.15735832,3.3162903 3.45336217,3.20401298 3.70518234,3.31733205 L21.9867539,11.5440392 C22.098181,11.5941815 22.1873901,11.6833905 22.2375323,11.7948177 C22.3508514,12.0466378 22.2385741,12.3426417 21.9867539,12.4559608 L3.70518234,20.6826679 C3.64067359,20.7116969 3.57073936,20.7267072 3.5,20.7267072 C3.22385763,20.7267072 3,20.5028496 3,20.2267072 L3,13.5 Z" fill="#000000"/>\
                            </g>\
                        </svg><!--end::Svg Icon--></span>\
                    </a>\
                    <a href="javascript:editProduct('+row.id+')" class="btn btn-icon btn-light btn-hover-primary btn-sm edit_btn" title = "編集">\
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
                    <a href="javascript:delProduct('+row.id+')" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="削除">\
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
                    else
                        return "";
                }
            }]
        });
        $("#new_product").on("click", function(){
            if($("#id").val() == ""){
                toastr.error("ユーザー情報を登録してください。");
                return;
            }
            $.ajax({
                type: "POST",
                url: HOST_URL + "admin/family/api",
                data: {
                    query:{"user_id" : $("#id").val()}
                },
                dataType: "json",
                encode: true,
            }).done(function (data) {
                var row = data.data;
                var str = '';
                for(var i= 0; i < row.length; i++){
                    str = str + '<option value = "' + row[i].id + '">' + row[i].name + '</option>';
                }
                $("select[name=family_id]").html(str);
                $("#product_id").val("");
                $('form#kt_product_form').trigger("reset");
                $("#kt_product_modal").modal('show');
            });
            
        });
       
    };
    var temp2 = function (){
        $("form#kt_product_form").submit(function (event) {
            var paramObj = new FormData($("form#kt_product_form")[0]);
            paramObj.append('user_id',$("#id").val());
            $.ajax({
                url: HOST_URL + "admin/product/save",
                type: 'post',
                data: paramObj,
                contentType: false,
                processData: false,
                success: function(response){
                    var data = JSON.parse(response);
                    if(data.success == true){
                        $("#kt_product_modal").modal('hide');
                        $("#id").val(data.id);
                        datatable2.search($("#id").val(), 'user_id');
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
            temp2();
            demo2(user_id);
        },
    };
}();

jQuery(document).ready(function() {
    $('input[name=date]').datepicker({
        rtl: KTUtil.isRTL(),
        orientation: "bottom left",
        todayHighlight: true,
        templates: arrows,
        format: "yyyy-mm-dd"
    });
    // $("input[name=price]").inputmask('¥ 999,999,999,999', {
    //     numericInput: true
    // }); //123456  =>  € ___.__1.234,56
    var user_id = $("#id").val();
    KTDatatableRemoteAjaxDemo2.init(user_id);
});

/******/ })()
;
//# sourceMappingURL=data-ajax.js.map
function editProduct(id){
    $.ajax({
        type: "POST",
        url: HOST_URL + "admin/product/api",
        data: {
            query:{"id" : id}
        },
        dataType: "json",
        encode: true,
    }).done(function (data) {
        var row = data.data;
        $("#kt_product_form #product_id").val(row["id"]);
        $("#kt_product_form #name").val(row["name"]);
        $("#kt_product_form #price").val(row["price"]);
        $("#kt_product_form #date").val(row["date"]);
        $("#kt_product_form #etc").val(row["etc"]);
        $("#kt_product_form #content").val(row["content"]);
        $("#kt_product_form #user_name").val(row["user_name"]);
        $("#kt_product_modal").modal('show');
    });
}

function delProduct(id){
    $.ajax({
        type: "POST",
        url: HOST_URL + "admin/product/delete",
        data: {"id" : id },
        dataType: "json",
        encode: true,
    }).done(function (data) {
        toastr.success("成 功");
        datatable2.reload();
    });
}
function loadDetail(id){
    $("#detail_div").css("display","block");
    $("#detail_div").load(HOST_URL+'admin/product/detail/'+id);
}