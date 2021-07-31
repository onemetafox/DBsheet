
<?php 
    $user["update_status"] = "1";
    $this->admin->updateData($user);
?>
<style type="text/css">
    .fc-day-number{
        pointer-events: none;
    }
    #customer.active{
        color: #6993ff !important;
    }
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <div class="input-icon input-icon-right mr-2">
                        <input type="text" class="form-control" placeholder="検索..." id="search" onkeypress="goSearch(event)">
                        <span>
                            <i class="flaticon2-search-1 icon-md"></i>
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="javascript:search()" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">検索</a>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="<?=base_url()?>admin/product/edit" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">新規</a>
                <a href="<?=base_url()?>welcome/signout" class="btn btn-danger font-weight-bold py-3 px-6">ログアウト</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
           <div class="card card-custom gutter-b">
                <div class="card-body">
                    <form method="post" name="kt_search_form" action="<?=base_url()?>admin/user/view">
                        <div class="form-group row">
                            <div class="col-lg-5 col-md-12 col-sm-12 input-group">
                                <label class="col-form-label text-right col-lg-3 col-md-3 col-sm-12">購入品</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control form-control-solid form-control-lg" name="name" id="name">
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12 input-group">
                                <div class="col-lg-6 col-md-6 col-sm-6 input-group">
                                    <label class="col-form-label text-right col-lg-3 col-sm-3">制作中</label>
                                    <div class="col-lg-9 col-sm-3">
                                        <span class="switch switch-icon">
                                            <label>
                                                <input type="checkbox" name="making">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 input-group">
                                    <div class="d-flex flex-grow-1 align-items-center rounded">
                                        <input type="hidden" name="customer">
                                        <div class="text-muted">お得意様</div>
                                        <div class="mr-4 flex-shrink-0 text-center ml-10" style="width: 40px;" onclick="setCustomer()">
                                            <i id="customer"  class="icon-2x  flaticon-star text-dark-50"></i>
                                        </div>
                                    </div>
                                    <!-- <label class="col-form-label text-right col-lg-3 col-sm-3">お得意様</label>
                                    <div class="col-lg-9 col-sm-3">
                                        <span class="switch switch-icon">
                                            <label>
                                                <input type="checkbox" name="customer">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-2 col-md-2 col-sm-12">お買い上げ金額</label>
                            <div class="col-lg-10 col-md-10 col-sm-12 input-group">
                                <div class="col-lg-6 col-md-6 col-sm-12 input-daterange input-group">
                                    <input type="text" class="form-control" name="date_from">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            年～
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="date_to">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 input-daterange input-group">
                                    <input type="number" class="form-control" name="price_from">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            円～
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" name="price_to">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-6 col-sm-12 input-group">
                                <label class="col-form-label text-right col-lg-3 col-md-3 col-sm-12">趣 味</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control" name="hobby">
                                        <option value="0"></option>
                                        <option value="歌舞伎">歌舞伎</option>
                                        <option value="能">能</option>
                                        <option value="文楽">文楽 </option>
                                        <option value="落語">落語 </option>
                                        <option value="美術・工芸品">美術・工芸品</option>
                                    </select>
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 input-group">
                                <label class="col-form-label text-right col-lg-3 col-md-3 col-sm-12">習い事</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control" name="habit">
                                        <option value="0"></option>
                                        <option value="着付">着付</option>
                                        <option value="和裁">和裁 </option>
                                        <option value="茶道">茶道 </option>
                                        <option value="華道">華道 </option>
                                        <option value="三味線">三味線 </option>
                                        <option value="琴">琴</option>
                                    </select>
                                    <div class="fv-plugins-message-container"></div>
                                </div>    
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-toolbar float-right">
                                <button type="submit" class="btn btn-primary font-weight-bolder">
                                    </i>一覧作成</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="card card-custom card-stretch">
                        <div class="card-body">
                            <div id="kt_calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-custom card-stretch">
                        <div class="card-header">
                            <div class="card-title">
                                詳細
                            </div>    
                        </div>
                        <div class="card-body">
                            <div class="card card-custom gutter-b" style="display: none;" name="detail">
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column"   style="text-align: center;">
                                    <div class="flex-grow-1 pb-5">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center pr-2 mb-6">
                                            <span class="text-muted font-weight-bold font-size-lg flex-grow-1" name="date"></span>
                                        </div>
                                        <!--end::Info-->
                                        <a class="text-dark font-weight-bolder text-hover-primary font-size-h4" name="title" >
                                        </a>
                                        <!--begin::Desc-->
                                        <p class="text-dark-50 font-weight-normal font-size-lg mt-6" name="content">
                                        </p>
                                        <!--end::Desc-->
                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="<?=asset_url()?>/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
<script src="<?=asset_url()?>/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="<?=asset_url()?>/scripts/calendar.js"></script>
<script type="text/javascript">
    function goSearch(e){
        if (e.keyCode == 13) {
            window.location = "<?=base_url()?>admin/user/search?q=" + $("#search").val();
        }
    }
    function search(){
        window.location = "<?=base_url()?>admin/user/search?q=" + $("#search").val();
    }
    function setCustomer(){
        var active = $("#customer").hasClass("active");
        if(active){
            $("#customer").removeClass("active");
            $("input[name=customer]").val("off");
        }else{
            $("#customer").addClass("active");
            $("input[name=customer]").val("on");
            
        }
    }
</script>
