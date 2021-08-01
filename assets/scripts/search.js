
var datatable1;
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};

var demo = function() {
    
    var searchGrid = function(query) {
        datatable1 = $('#kt_datatable1').KTDatatable({
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + 'admin/user/getData',
                        params : {
                            query:{
                                "query" : query,
                            }
                        },
                        map: function(raw) {
                            var dataSet = raw;
                            if (typeof raw.data !== 'undefined') {
                                dataSet = raw.data;
                                $("strong").html(dataSet.length);
                            }
                            return dataSet;
                        },
                        timeout: 30000
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
			
            // column sorting
            sortable: true,

            pagination: true,
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
            footerCallback: function(row, data, start, end, display) {

                var column = 6;
                var api = this.api(), data;

                // Remove the formatting to get integer data for summation
                var intVal = function(i) {
                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                };

                // Total over all pages
                var total = api.column(column).data().reduce(function(a, b) {
                    return intVal(a) + intVal(b);
                }, 0);

                // Total over this page
                var pageTotal = api.column(column, {page: 'current'}).data().reduce(function(a, b) {
                    return intVal(a) + intVal(b);
                }, 0);

                // Update footer
                $(api.column(column).footer()).html(
                    '$' + KTUtil.numberString(pageTotal.toFixed(2)) + '<br/> ( $' + KTUtil.numberString(total.toFixed(2)) + ' total)',
                );
            },
            columns: [{
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
                field: 'birthday',
                title: '生年月日'
            }, {
                field: 'address',
                title: '〒住所'
            }, {
                field: 'mobile',
                width: 150,
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
        });
       

    };

    var temp = function(){
        $("#btn_search").on('click', function(){
            var keyword = $("#search").val();
            datatable1.search(keyword,"query");
            // searchGrid(keyword);
        })
    }
    return {
        // public functions
        init: function(query) {
            searchGrid(query);
            temp();
        },
    };
}();

jQuery(document).ready(function() {
    var query = $("#search").val();
    demo.init(query);
});

/******/ })()