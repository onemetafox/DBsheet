arrows = {
    leftArrow: '<i class="la la-angle-right"></i>',
    rightArrow: '<i class="la la-angle-left"></i>'
}
var datatable3;
var datatable4
var editable = true;
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

        datatable3 = $('#kt_datatable_1').KTDatatable({
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
                                if(raw.data.length == 0)
                                    editable = true;
                                else
                                    editable = false;
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

            columns: [
            {
                field: 'parent_id',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: "区分",
                template: function(row){
                    if(row.parent_id){
                        return "実寸";
                    }else{
                        return "希望寸法"
                    }
                }
            },{
                field: 'back',
                overflow: 'visible',
                width: 30,
                autoHide: false,
                title: '丈‐背',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.back+"</span>"
                    }else{
                        return row.back;
                       
                    }
                }
            }, {
                field: 'shoulder',
                overflow: 'visible',
                width: 30,
                autoHide: false,
                title: '丈‐肩',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.shoulder+"</span>"
                    }else{
                        return row.shoulder;
                       
                    }
                }
            }, {
                field: 'yuki',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '裄',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.yuki+"</span>"
                    }else{
                        return row.yuki;
                       
                    }
                }
            }, {
                field: 'shawl',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '肩巾',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.shawl+"</span>"
                    }else{
                        return row.shawl;
                       
                    }
                }
            }
            , {
                field: 'sleeve_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '袖巾',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.sleeve_width+"</span>"
                    }else{
                        return row.sleeve_width;
                       
                    }
                }
            }
            , {
                field: 'sleeve_length',
                width: 20,
                overflow: 'visible',
                autoHide: false,
                title: '袖丈',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.sleeve_length+"</span>"
                    }else{
                        return row.sleeve_length;
                       
                    }
                }
            }
            , {
                field: 'with_sleeves',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '袖付',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.with_sleeves+"</span>"
                    }else{
                        return row.with_sleeves;
                       
                    }
                }
            },{
                field: 'front_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '前巾',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.front_width+"</span>"
                    }else{
                        return row.front_width;
                       
                    }
                }
            }
            , {
                field: 'back_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '後巾',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.back_width+"</span>"
                    }else{
                        return row.back_width;
                       
                    }
                }
            }
            , {
                field: 'under_hood',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '褄下',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.under_hood+"</span>"
                    }else{
                        return row.under_hood;
                       
                    }
                }
            }
            , {
                field: 'hug',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '抱巾',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.hug+"</span>"
                    }else{
                        return row.hug;
                       
                    }
                }
            }
            , {
                field: 'width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '衽巾',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.width+"</span>"
                    }else{
                        return row.width;
                       
                    }
                }
            }
            , {
                field: 'carry_forward',
                width: 20,
                overflow: 'visible',
                autoHide: false,
                title: '繰越',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.carry_forward+"</span>"
                    }else{
                        return row.carry_forward;
                       
                    }
                }
            },{
                field: 'hips',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'ヒップ',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.hips+"</span>"
                    }else{
                        return row.hips;
                       
                    }
                }
            },{
                field: 'bust',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'バスト',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.bust+"</span>"
                    }else{
                        return row.bust;
                       
                    }
                }
            },{
                field: 'west',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'ウエスト',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.west+"</span>"
                    }else{
                        return row.west;
                       
                    }
                }
            },{
                field: 'height',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '身長',
                template: function(row){
                    if(row.parent_id){
                        return "<span class='font-weight-boldest text-danger'>"+row.height+"</span>"
                    }else{
                        return row.height;
                       
                    }
                }
            }],

        });

        $("#new_detail").on("click", function(){
            // $('#form')[0].reset();
            if(editable){
                $("#id").val("");
                $('#kt_detail_form').trigger("reset");
                $("#kt_detail_modal").modal('show');
            }else{
                Swal.fire({
                    title: "アラート!",
                    text: "1つ以上追加できません!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "はい",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            }
        });
        $("#del_detail").on("click", function(){
            // $('#form')[0].reset();
            if(editable){
                Swal.fire({
                    title: "アラート!",
                    text: "",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "はい",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            }else{
                Swal.fire({
                    title: "削除しますか？",
                    text: "これを元に戻すことはできません！",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "はい",
                    cancelButtonText: "いいえ",
                    reverseButtons: true
                }).then(function(result) {
                    var product_id = $("#product_id").val();
                    if (result.value) {
                         $.ajax({
                            type: "POST",
                            url: HOST_URL + "admin/detail/delete",
                            data: {"id" : product_id },
                            dataType: "json",
                            encode: true,
                        }).done(function (data) {
                            toastr.success("成 功");
                            datatable3.reload();
                            datatable4.reload();
                        });
                    } else if (result.dismiss === "cancel") {
                        
                    }
                });
            }
        });
        $("#edit_detail").on("click", function(){
            // $('#form')[0].reset();
            if(editable){
                Swal.fire({
                    title: "アラート!",
                    text: "編集するレコードがありません!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "はい",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            }else{
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
                    $("#h-back").val(row[0]["back"]);
                    $("#h-shoulder").val(row[0]["shoulder"]);
                    $("#h-yuki").val(row[0]["yuki"]);
                    $("#h-shawl").val(row[0]["shawl"]);
                    $("#h-sleeve_width").val(row[0]["sleeve_width"]);
                    $("#h-sleeve_length").val(row[0]["sleeve_length"]);
                    $("#h-with_sleeves").val(row[0]["with_sleeves"]);
                    $("#h-front_width").val(row[0]["front_width"]);
                    $("#h-back_width").val(row[0]["back_width"]);
                    $("#h-under_hood").val(row[0]["under_hood"]);
                    $("#h-hug").val(row[0]["hug"]);
                    $("#h-width").val(row[0]["width"]);
                    $("#h-carry_forward").val(row[0]["carry_forward"]);
                    $("#h-hips").val(row[0]["hips"]);
                    $("#h-bust").val(row[0]["bust"]);
                    $("#h-west").val(row[0]["west"]);
                    $("#h-height").val(row[0]["height"]);
                    $("#h-remark").val(row[0]["remark"]);

                    $("#r-back").val(row[1]["back"]);
                    $("#r-shoulder").val(row[1]["shoulder"]);
                    $("#r-yuki").val(row[1]["yuki"]);
                    $("#r-shawl").val(row[1]["shawl"]);
                    $("#r-sleeve_width").val(row[1]["sleeve_width"]);
                    $("#r-sleeve_length").val(row[1]["sleeve_length"]);
                    $("#r-with_sleeves").val(row[1]["with_sleeves"]);
                    $("#r-front_width").val(row[1]["front_width"]);
                    $("#r-back_width").val(row[1]["back_width"]);
                    $("#r-under_hood").val(row[1]["under_hood"]);
                    $("#r-hug").val(row[1]["hug"]);
                    $("#r-width").val(row[1]["width"]);
                    $("#r-carry_forward").val(row[1]["carry_forward"]);
                    $("#r-hips").val(row[1]["hips"]);
                    $("#r-bust").val(row[1]["bust"]);
                    $("#r-west").val(row[1]["west"]);
                    $("#r-height").val(row[1]["height"]);
                    $("#r-remark").val(row[1]["remark"]);
                    $("#kt_detail_modal").modal('show');
                });
            }
        });
       
    };
    var demo2 = function(product_id) {
        datatable4 = $('#kt_datatable').KTDatatable({
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

            columns: [
            {
                field: 'parent_id',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: "区分",
                template: function(row){
                    if(row.parent_id){
                        return "実寸";
                    }else{
                        return "希望寸法"
                    }
                }
            },{
                field: 'back',
                overflow: 'visible',
                width: 30,
                autoHide: false,
                title: '丈‐背',
                template : function(row){
                    if(row.parent_id){
                        if(row.back){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.back) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }
                    else{
                        return Number(row.back) / 2.63125;
                    }
                }
            }, {
                field: 'shoulder',
                overflow: 'visible',
                width: 30,
                autoHide: false,
                title: '丈‐肩',
                template : function(row){
                    if(row.parent_id){
                        if(row.shoulder){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.shoulder) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }
                    else{
                        return Number(row.shoulder) / 2.63125;
                    }
                }
            }, {
                field: 'yuki',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '裄',
                template : function(row){
                     if(row.parent_id){
                        if(row.yuki){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.yuki) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }
                    else{
                        return Number(row.yuki) / 2.63125;
                    }
                }
            }, {
                field: 'shawl',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '肩巾',
                template : function(row){ 
                    if(row.parent_id){
                        if(row.shawl){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.shawl) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }
                    else{
                        return Number(row.shawl) / 2.63125;
                    }
                }
            }
            , {
                field: 'sleeve_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '袖巾',
                template : function(row){
                     if(row.parent_id){
                        if(row.sleeve_width){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.sleeve_width) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }else{
                        return Number(row.sleeve_width) / 2.63125;
                    }
                }
            }
            , {
                field: 'sleeve_length',
                width: 20,
                overflow: 'visible',
                autoHide: false,
                title: '袖丈',
                template : function(row){
                     if(row.parent_id){
                        if(row.sleeve_length){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.sleeve_length) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }else{
                        return Number(row.sleeve_length) / 2.63125;
                    }
                }
            }
            , {
                field: 'with_sleeves',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '袖付',
                template : function(row){
                     if(row.parent_id){
                        if(row.with_sleeves){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.with_sleeves) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }else{
                        return Number(row.with_sleeves) / 2.63125;
                    }
                }
            },{
                field: 'front_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '前巾',
                template : function(row){
                     if(row.parent_id){
                        if(row.front_width){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.front_width) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }else{
                        return Number(row.front_width) / 2.63125;
                    }
                }
            }
            , {
                field: 'back_width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '後巾',
                template : function(row){
                     if(row.parent_id){
                        if(row.back_width){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.back_width) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }else{
                        return Number(row.back_width) / 2.63125;
                    }
                }
            }
            , {
                field: 'under_hood',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '褄下',
                template : function(row){
                     if(row.parent_id){
                        if(row.under_hood){
                            return "<span class='font-weight-boldest text-danger'>"+Number(row.under_hood) / 2.63125;+"</span>"; }else{
                            return "";
                        }
                    }else{
                        return Number(row.under_hood) / 2.63125;
                    }
                }
            }
            , {
                field: 'hug',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '抱巾',
                template : function(row){
                     if(row.parent_id){
                        if(row.hug){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.hug) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }else{
                        return Number(row.hug) / 2.63125;
                    }
                }
            }
            , {
                field: 'width',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '衽巾',
                template : function(row){
                     if(row.parent_id){
                        if(row.width){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.width) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }else{
                        return Number(row.width) / 2.63125;
                    }
                }
            }
            , {
                field: 'carry_forward',
                width: 20,
                overflow: 'visible',
                autoHide: false,
                title: '繰越',
                template : function(row){
                     if(row.parent_id){
                        if(row.carry_forward){
                        return "<span class='font-weight-boldest text-danger'>"+Number(row.carry_forward) / 2.63125;+"</span>" }else{
                            return "";
                        }
                    }else{
                        return Number(row.carry_forward) / 2.63125;
                    }
                }
            },{
                field: 'hips',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'ヒップ',
                template: function(row){
                    if(row.parent_id){
                        if(row.hips){
                        return "<span class='font-weight-boldest text-danger'>"+row.hips+"</span>" }else{
                            return "";
                        }
                    }else{
                        return row.hips;
                       
                    }
                }
            },{
                field: 'bust',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'バスト',
                template: function(row){
                    if(row.parent_id){
                        if(row.bust){
                        return "<span class='font-weight-boldest text-danger'>"+row.bust+"</span>" }else{
                            return "";
                        }
                    }else{
                        return row.bust;
                       
                    }
                }
            },{
                field: 'west',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: 'ウエスト',
                template: function(row){
                    if(row.parent_id){
                        if(row.west){
                        return "<span class='font-weight-boldest text-danger'>"+row.west+"</span>" }else{
                            return "";
                        }
                    }else{
                        return row.west;
                       
                    }
                }
            },{
                field: 'height',
                overflow: 'visible',
                width: 20,
                autoHide: false,
                title: '身長',
                template: function(row){
                    if(row.parent_id){
                        if(row.height){
                        return "<span class='font-weight-boldest text-danger'>"+row.height+"</span>" }else{
                            return "";
                        }
                    }else{
                        return row.height;
                       
                    }
                }
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
                        // $("#product_id").val(data.id);
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
function setMaking(){
    var data = new FormData();
    if($("input[name=making]").prop("checked")){
        data.append("making","2");
    }
    else{
        data.append("making","1");
    }
    
    data.append("product_id", $("#product_id").val());
    
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
}