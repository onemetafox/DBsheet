arrows = {
    leftArrow: '<i class="la la-angle-right"></i>',
    rightArrow: '<i class="la la-angle-left"></i>'
}
var datatable1;
/******/ (() => { // webpackBootstrap
/******/    "use strict";
var __webpack_exports__ = {};
/*!****************************************************************!*\
  !*** ../demo1/src/js/pages/crud/ktdatatable/base/data-ajax.js ***!
  \****************************************************************/

// Class definition
var KTDatatableRemoteAjaxDemo1 = function() {
    // Private functions

    // basic demo
    var demo1 = function() {

        datatable1 = $('#kt_datatable').KTDatatable({
            // datasource definition
            
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + 'admin/user/api',
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
                                "q" : ""
                            }
                        }
                    },
                },
                pageSize: 10,
                serverPaging: false,
                serverFiltering: false,
                serverSorting: false
            },
            rows :{
                autoHide : true,
                afterTemplate : function(row, data, index){

                }
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
            toolbar:{
                items:{
                    pagination:{
                        pages:{
                            mobile:{
                                layout: 'compact'
                            }
                        }
                    }
                }
            },
            
            // column sorting
            sortable: true,

            pagination: true,

            columns: [{
                field: 'name',
                title: '名前(ふりがな)',
                textAlign: 'center',
                autoHide: false,
                template: function(row) {
                        return '\
                        <a href="'+HOST_URL+'admin/product/edit/'+row.id+'" class="" title = "Edit">\
                        ' + row.name +'(' + row.nick_name +')\
                        </a>\
                        ';
                }
            }, {
                field: 'sex',
                title: '性 別',
                template : function(row){
                    if(row.sex == 1){
                        return '男 別';
                    }else{
                        return '女 別'
                    }
                }
            }, {
                field: 'birthday',
                title: '生年月日'
            }, {
                field: 'mobile',
                title: '電話番号'
            }, {
                field: 'address',
                title: '住 所'
            }],

        });

        $("#new_family").on("click", function(){
            // $('#form')[0].reset();
            $("#family_id").val("");
            $('#form#kt_family_form').trigger("reset");
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
                        datatable1.setDataSourceParam("query[user_id]", $("#id").val());
                        datatable1.reload();
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
        init: function() {
            temp1();
            demo1();
        },
    };
}();

jQuery(document).ready(function() {
    KTDatatableRemoteAjaxDemo1.init();
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