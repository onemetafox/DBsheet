
<link href="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1 mb-2">
                <div class="d-flex flex-column">
                    <div class="input-icon input-icon-right mr-2">
                        <input type="text" class="form-control" placeholder="検索..." id="search" value="<?= $filter?>" onkeypress="goSearch(event)">
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
                <a href="<?=base_url()?>" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-5">トップ画面に戻る</a>
                <a href="<?=base_url()?>welcome/signout" class="btn btn-danger font-weight-bold py-3 px-6">ログアウト</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">検索結果</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <td>名前（ふりがな）</td>
                                <td>住所</td>
                                <td>電話番号</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($users) { foreach ($users as $item){ ?>
                                <tr>
                                    <td><a href="<?=base_url()?>admin/product/edit/<?=$item->id?>"><?=$item->name?>(<?=$item->nick_name?>)</a></td>
                                    <td><?=$item->address?></td>
                                    <td><?=$item->mobile?></td>
                                </tr>
                            <?php } }else{ ?>
                                <tr>
                                    <td colspan="4">データがありません</td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=asset_url()?>/plugins/global/plugins.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?=asset_url()?>/js/scripts.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.js"></script>
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
