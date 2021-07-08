
<?php 
    $user["update_status"] = "1";
    $this->admin->updateData($user);
?>
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
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>名 前(ふりがな)</th>
                                <th>住 所</th>
                                <th>電話番号</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($list) { foreach ($list as $key => $item) { ?>
                                <tr>
                                    <td><?= $item["name"] ?>(<?= $item["nick_name"] ?>)</td>
                                    <td><?= $item["address"] ?></td>
                                    <td><?= $item["mobile"] ?></td>
                                </tr>
                            <?php } }else {?>
                                <tr>
                                    <td colspan="4">データがありません</td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="card-toolbar float-right">
                        <a href="<?=base_url()?>admin/user/view" class="btn btn-primary font-weight-bolder">
                        </i>一覧作成</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom card-stretch">
                        <div class="card-body">
                            <div id="kt_calendar"></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="card card-custom card-stretch">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">イベント</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="kt_calendar_external_events" class="fc-unthemed">
                                
                            </div>
                        </div>
                    </div>
                </div> -->
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
</script>
