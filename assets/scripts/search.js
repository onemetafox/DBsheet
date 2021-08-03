
var datatable1;
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};

var demo = function() {
    
    var searchGrid = function(keyword) {
        datatable1 = $('#kt_datatable').KTDatatable({
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + 'admin/user/getData',
                    },
                    params :{
                        query :{
                            "query" : keyword
                        }
                    }
                },
                pageSize: 10,
                serverPaging: false,
                serverFiltering: true,
                serverSorting: false,
                serverSearching: true,
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
			search: {
                input: $('#search'),
                key: 'keyword'
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
                        <a href="'+HOST_URL+'admin/product/edit/'+row.userid+'" class="" title = "Edit">\
                        ' + row.user_name +'(' + row.nick_name +')\
                        </a>\
                        ';
                }
            }, {
                field: 'sex',
                title: '性 別',
                sortable: false,
                template : function(row){
                    if(row.sex == 1){
                        return '男';
                    }else{
                        return '女'
                    }
                }
            }, {
                field: 'birthday',
                title: '生年月日',
                sortable: false
            }, {
                field: 'address',
                title: '〒住所',
                sortable: false
            }, {
                field: 'mobile',
                width: 150,
                title: '電話番号',
                sortable: false
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
    return {
        // public functions
        init: function(keyword) {
            searchGrid(keyword);
        },
    };
}();

jQuery(document).ready(function() {

    var keyword = $("#search").val();
    demo.init(keyword);
});

/******/ })()

