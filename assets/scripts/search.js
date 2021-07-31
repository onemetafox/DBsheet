
var datatable1;
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};

var KTDatatableRemoteAjaxDemo1 = function() {
    
    var searchGrid = function() {
        datatable1 = $('#kt_datatable').KTDatatable({
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + 'admin/user/api',
                        params : {
                            query:{
                                "q" : $("#query").val(),
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
            columns: [{
                field: 'name',
                title: '名 前',
            },{
                field: 'nick_name',
                title: 'ふりがな'
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
                field: 'content',
                title: '備考'
            }],
        });

    };
    
    return {
        // public functions
        init: function() {
            searchGrid();
            // datatable1.reload();
        },
    };
}();

jQuery(document).ready(function() {
    KTDatatableRemoteAjaxDemo1.init();
});

/******/ })()
;
//# sourceMappingURL=data-ajax.js.map

