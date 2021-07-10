
<link href="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <div class="input-icon">
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="javascript:showSearch()" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">一覧作成</a>
                <a href="<?=base_url()?>" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">宛名印刷</a>
                <a href="<?=base_url()?>" class="btn btn-transparent-white font-weight-bold py-3 px-6">トップ画面に戻る</a>
            </div>
        </div>
    </div>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">検索結果</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                    </table>
                </div>
                <div class="card-footer collapse">
                    <form method="post" id="kt_search_form">
                        <div class="form-group row">
                            <div class="col-lg-5 col-md-12 col-sm-12 input-group">
                                <label class="col-form-label text-right col-lg-3 col-md-3 col-sm-12">購入品</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control form-control-solid" name="name" id="name" value="<?= $filter["name"]?>" required>
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12 input-group">
                                <div class="col-lg-6 col-md-6 col-sm-6 input-group">
                                    <label class="col-form-label text-right col-lg-3 col-sm-3">制作中</label>
                                    <div class="col-lg-9 col-sm-3">
                                        <span class="switch switch-icon">
                                            <label>
                                                <input type="checkbox" <?=isset($filter['making']) && ($filter['making'])=='on'?'checked':''?> id="making" name="making">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 input-group">
                                    <label class="col-form-label text-right col-lg-3 col-sm-3">お得意様</label>
                                    <div class="col-lg-9 col-sm-3">
                                        <span class="switch switch-icon">
                                            <label>
                                                <input type="checkbox" <?= isset($filter['customer']) && ($filter['customer'])=='on'?'checked':''?> id="customer" name="customer">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-2 col-md-2 col-sm-12">お買い上げ金額</label>
                            <div class="col-lg-10 col-md-10 col-sm-12 input-group">
                                <div class="col-lg-6 col-md-6 col-sm-12 input-daterange input-group">
                                    <input type="text" class="form-control" value="<?=$filter['date_from']?>" name="date_from">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            年～
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" value="<?=$filter['date_to']?>" name="date_to">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 input-daterange input-group">
                                    <input type="text" class="form-control" value="<?=$filter['price_from']?>" name="price_from">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            円～
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" value="<?=$filter['price_to']?>" name="price_to">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-6 col-sm-12 input-group">
                                <label class="col-form-label text-right col-lg-3 col-md-3 col-sm-12">趣 味</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control" name="hobby">
                                        <option value=""></option>
                                        <option value="歌舞伎" <?= $filter['hobby']=='歌舞伎'?'selected':''?>>歌舞伎</option>
                                        <option value="能" <?=$filter['hobby']=='能'?'selected':''?>>能</option>
                                        <option value="文楽" <?=$filter['hobby']=="文楽"?'selected':''?>>文楽 </option>
                                        <option value="落語" <?=$filter['hobby']=="落語"?'selected':''?>>落語 </option>
                                        <option value="美術・工芸品" <?=$filter['hobby']=="美術・工芸品"?'selected':''?>>美術・工芸品</option>
                                    </select>
                                    <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="sex" id="sex" value="" required> -->
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 input-group">
                                <label class="col-form-label text-right col-lg-3 col-md-3 col-sm-12">習い事</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control" name="habit">
                                        <option value=""></option>
                                        <option value="着付" <?=$filter['habit']=="着付"?'selected':''?>>着付</option>
                                        <option value="和裁" <?=$filter['habit']=="和裁"?'selected':''?>>和裁 </option>
                                        <option value="茶道" <?=$filter['habit']=="茶道"?'selected':''?>>茶道 </option>
                                        <option value="華道" <?=$filter['habit']=="華道"?'selected':''?>>華道 </option>
                                        <option value="三味線" <?=$filter['habit']=="三味線"?'selected':''?>>三味線 </option>
                                        <option value="琴" <?=$filter['habit']=="琴"?'selected':''?>>琴</option>
                                    </select>
                                    <div class="fv-plugins-message-container"></div>
                                </div>    
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-toolbar float-right">
                                <button type="button" id="search" class="btn btn-primary font-weight-bolder">
                                    </i>一覧作成</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=asset_url()?>/plugins/global/plugins.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?=asset_url()?>/js/scripts.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?=asset_url()?>scripts/view.js"></script>
