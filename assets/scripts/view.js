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
   
    var localSelectorDemo = function(query){
         var options = {
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
                field: 'user_id',
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
                        ' + row.user_name +'(' + row.nick_name +')\
                        </a>\
                        ';
                }
            }, {
                field: 'sex',
                title: '性 別',
                template : function(row){
                    if(row.sex == 1){
                        return '男';
                    }else{
                        return '女'
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
                    return new Intl.NumberFormat('ja-JP', { style: 'currency', currency: 'JPY' }).format(Number(row.price))
                }
            }, {
                field: 'date',
                title: '最終購入日'
            }],
        };
        options.extensions ={
            checkbox: true
        };
        datatable1 = $('#kt_datatable').KTDatatable(options);
        $('a[name=print]').on('click', function(e) {
            var ids = datatable1.rows('.datatable-row-active').
                nodes().
                find('.checkbox > [type="checkbox"]').
                map(function(i, chk) {
                    return $(chk).val();
            });
            if(ids.length == 0){
                toastr.error("select user");
                return;
            }
            var temp = "";
            for (var i = 0; i < ids.length; i++) {
                 temp = temp + "." + ids[i];
            }
            if(ids[1]){
                toastr.error("一つの項目だけを選択してください。");
                return;
            }
            window.open(HOST_URL+"admin/user/export/"+ids[0], '_blank').focus();
            // var c = document.createDocumentFragment();
            // for (var i = 0; i < ids.length; i++) {
            //     var li = document.createElement('li');
            //     li.setAttribute('data-id', ids[i]);
            //     li.innerHTML = 'Selected record ID: ' + ids[i];
            //     c.appendChild(li);
            // }
            // $('#kt_datatable_fetch_display').append(c);
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
    }
    return {
        // public functions
        init: function(query) {
            localSelectorDemo(query);
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
     $('input[name=date_from]').datepicker({
        rtl: KTUtil.isRTL(),
        orientation: "bottom left",
        todayHighlight: true,
        // templates: arrows,
        format: "yyyy-mm-dd"
    });
    $('input[name=date_to]').datepicker({
        rtl: KTUtil.isRTL(),
        orientation: "bottom left",
        todayHighlight: true,
        // templates: arrows,
        format: "yyyy-mm-dd"
    });
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