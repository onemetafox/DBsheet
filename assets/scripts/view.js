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
var KTDatatableRemoteAjaxDemo1 = function(query) {
    // Private functions

    // basic demo
    var demo1 = function(query) {

        datatable1 = $('#kt_datatable').KTDatatable({
            // datasource definition
            
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + 'admin/product/search',
                        // sample custom headers
                        headers: {'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
                        map: function(raw) {
                            var dataSet = raw;
                            if (typeof raw.data !== 'undefined') {
                                dataSet = raw.data;
                            }
                            return dataSet;
                        },
                        params:{
                            query:{
                                "query" : query
                            } 
                        }
                    },
                },
                pageSize: 10,
                serverPaging: false,
                serverFiltering: true,
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
                field: 'RecordID',
                title: '宛名印刷',
                sortable: false,
                width: 40,
                selector: true,
                textAlign: 'center',
            },{
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
                field: 'address',
                title: '〒住所'
            }, {
                field: 'mobile',
                title: '電話番号'
            }, {
                field: 'price',
                title: '購入金額',
                template:function(row){
                    return row.price + "円";
                }
            }, {
                field: 'date',
                title: '最終購入日'
            }],

        });

       
        $("#search").on("click", function(){
            var paramObj = {};
            paramObj['name'] = $("input[name=name]").val();
            paramObj['customer'] = $("#customer").prop("checked");
            paramObj['making'] = $("#making").prop("checked");

            paramObj['date_from'] = $("input[name=date_from]").val();
            paramObj['date_to'] = $("input[name=date_to]").val();
            paramObj['price_from'] = $("input[name=price_from]").val();
            paramObj['price_to'] = $("input[name=price_to]").val();
            paramObj['hobby'] = $("select[name=hobby]").val();
            paramObj['habit'] = $("select[name=habit]").val();

            datatable1.search(JSON.stringify(paramObj), 'query');

        })
       
    };
    
    return {
        // public functions
        init: function(query) {
            demo1(query);
        },
    };
}();

jQuery(document).ready(function() {
    var paramObj = {};
    paramObj['name'] = $("input[name=name]").val();
    paramObj['customer'] = $("#customer").prop("checked");
    paramObj['making'] = $("#making").prop("checked");
    paramObj['date_from'] = $("input[name=date_from]").val();
    paramObj['date_to'] = $("input[name=date_to]").val();
    paramObj['price_from'] = $("input[name=price_from]").val();
    paramObj['price_to'] = $("input[name=price_to]").val();
    paramObj['hobby'] = $("select[name=hobby]").val();
    paramObj['habit'] = $("select[name=habit]").val();

    KTDatatableRemoteAjaxDemo1.init(JSON.stringify(paramObj));
});

/******/ })()
;
//# sourceMappingURL=data-ajax.js.map


function showSearch(){
    var isVisible = $('.card-footer').is( ":visible" );
    if(isVisible){
        $('.card-footer').collapse('hide');
    }else{
        $('.card-footer').collapse('show');
    }
    
}