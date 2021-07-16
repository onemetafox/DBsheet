
<link href="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=asset_url()?>/css/pages/wizard/wizard-5.css" rel="stylesheet" type="text/css" />
<?php 
    $user["update_status"] = "2";
    $this->admin->updateData($user);
?>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <div class="input-icon">
                    </div>
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <?php if(isset($id)){?>
                    <a id="delete" class="btn btn-danger font-weight-bold py-3 px-6 mr-5">削 除</a>
                <?php } ?>
                <a href="<?=base_url()?>" class="btn btn-transparent-white font-weight-bold py-3 px-6">トップ画面に戻る</a>
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Card Body-->
                <div class="card-body p-0">
                    <!--begin::Wizard 5-->
                    <div class="wizard wizard-5 d-flex flex-column flex-lg-row flex-row-fluid" id="kt_wizard">
                        <!--begin::Content-->
                        <div class="wizard-content bg-gray-100 d-flex flex-column flex-row-fluid py-15 px-5 px-lg-10">
                            <!--begin::Form-->
                            <div class="d-flex justify-content-center flex-row-fluid">
                                <form class="pb-5 w-100 w-md-450px w-lg-1000px" novalidate="novalidate" id="kt_form">
                                    <input type="hidden" name="id" id="id" value="<?=isset($id)?$id:''?>">
                                    <!--begin: Wizard Step 1-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-sm-3 mt-2">
                                                    <input type="text" class="form-control" value="<?=isset($customer)?$customer['name']:''?>" name="name" placeholder="名前"/>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <input type="text" class="form-control" value="<?=isset($customer)?$customer['nick_name']:''?>" name="nick_name" placeholder="ふりがな"/>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <input type="email" class="form-control" value="<?=isset($customer)?$customer['email']:''?>" name="email" inputmode="text" placeholder="メールアドレス"/>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['birthday']:''?>"  name="birthday" placeholder="生年月日"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-map-marker"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['post_code']:''?>" name="post_code" inputmode="text" placeholder="郵便番号"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-bookmark-o"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <select class="form-control" name="sex">
                                                            <option value="1" <?=isset($customer) &&$customer['sex'] ==1?'selected':''?>>男</option>
                                                            <option value="2" <?=isset($customer) &&$customer['sex'] ==2?'selected':''?>>女</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"  placeholder="携帯電話" value="<?=isset($customer)?$customer['mobile']:''?>" name="mobile" inputmode="text">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-mobile-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone1']:''?>" name="phone4" placeholder="勤務先電話"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['class']:''?>" name="class" placeholder="クラス"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-bookmark-o"></i></span> 
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="form-group row">
                                                
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone1']:''?>" name="phone1" placeholder="電話自宅1"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone2']:''?>" name="phone2" placeholder="電話自宅2"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone3']:''?>" name="phone3" placeholder="電話自宅3"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-6">お得意様</label>
                                                        <div class="col-sm-6">
                                                            <span class="switch switch-icon">
                                                                <label>
                                                                    <input type="checkbox" <?=isset($customer)&&($customer["customer"]=="2")?'checked':''?> name="customer">
                                                                    <span></span>
                                                                </label>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['address']:''?>"  name="address" placeholder="住所"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-map-marker"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="button" name="saveUser" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3">次 へ
                                           </button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <span class="card-icon">
                                                    <i class="flaticon2-psd text-primary"></i>
                                                </span>
                                                <h3 class="card-label">家族</h3>
                                            </div>
                                            <div class="card-toolbar">
                                               <a class="btn btn-light-primary font-weight-bolder btn-sm" id="new_family">+ 追加</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <!--begin: Datatable-->
                                            <table class="table table-bordered table-hover table-checkable" id="kt_family_table" style="margin-top: 13px !important">
                                            </table>
                                            <!--end: Datatable-->
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <span class="card-icon">
                                                    <i class="flaticon2-psd text-primary"></i>
                                                </span>
                                                <h3 class="card-label">購入履歴</h3>
                                            </div>
                                            <div class="card-toolbar">
                                               <a class="btn btn-light-primary font-weight-bolder btn-sm" id="new_product">+ 追加</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <!--begin: Datatable-->
                                            <table class="table table-separate table-head-custom table-foot-custom table-checkable" id="kt_product_table" style="margin-top: 13px !important">
                                            </table>
                                            <!--end: Datatable-->
                                        </div>
                                    </div>  
                                    <div style="display:none;" id="detail_div">
                                        
                                    </div>
                                    <!--begin: Wizard Actions-->
                                    <div class="justify-content-between pt-3 text-right" style="text-align: right;">
                                        <div>
                                            <button type="button"  id="confirm"  class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3" >更 新
                                           </button>
                                            
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wizard 5-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    <!--begin::Modal-->
</div>
<div class="modal fade" id="kt_family_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">家族/追加・更新</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_family_form">
                <input type="hidden" name="family_id" id="family_id">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">名 前</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="name" id="name" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">ふりがな</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="nick_name" id="nick_name" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">生年月日</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" readonly name="birthday" id="birthday" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">性 別</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select class="form-control" name="sex" id="sex">
                                <option value="1">男</option>
                                <option value="2">女</option>
                            </select>
                            <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="sex" id="sex" value=""> -->
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">続柄</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="content" id="content" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                            <!-- <select class="form-control" name="hobby">
                                <option value=""></option>
                                <option value="歌舞伎" <?=isset($customer)&&($customer["hobby"]=="歌舞伎")?'selected':''?>>歌舞伎</option>
                                <option value="能" <?=isset($customer)&&($customer["hobby"]=="能")?'selected':''?>>能</option>
                                <option value="文楽" <?=isset($customer)&&($customer["hobby"]=="文楽")?'selected':''?>>文楽 </option>
                                <option value="落語" <?=isset($customer)&&($customer["hobby"]=="落語")?'selected':''?>>落語 </option>
                                <option value="美術・工芸品" <?=isset($customer)&&($customer["hobby"]=="美術・工芸品")?'selected':''?>>美術・工芸品</option>
                            </select> -->
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary px-15 mr-2" data-dismiss="modal">閉じる</button>
            <button type="submit" class="btn btn-primary px-15">保存</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--begin::Modal-->
<div class="modal fade" id="kt_product_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">購入履歴/追加・更新</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_product_form">
                <input type="hidden" name="product_id" id="product_id">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">家族</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select class="form-control" name="family_id">
                                
                            </select>
                            <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="sex" id="sex" value=""> -->
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">買上日</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" readonly name="date" id="date" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">買上品</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="name" id="name" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">名前</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="user_name" id="user_name" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">買上金額(円)</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="price" id="price" type="number" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                   <!--  <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Etc</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="etc" id="etc" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">特殊加工</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid form-control-lg" name="content" id="content" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary px-15 mr-2" data-dismiss="modal">閉じる</button>
                    <button type="submit" class="btn btn-primary px-15">保存</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="kt_confirm_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">確 認</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" id ="kt_confirm_form">
                <input type="hidden" name="decide" id="decide">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">I D</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input class="form-control form-control-solid form-control-lg" name="admin_id" type="text" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Password</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="password" class="form-control form-control-solid form-control-lg" name="password" value="">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary px-15 mr-2" data-dismiss="modal">閉じる</button>
            <button type="submit" class="btn btn-primary px-15">送信</button>
            </div>
            </form>
        </div>
    </div>
</div>

    <!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?=asset_url()?>/plugins/global/plugins.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?=asset_url()?>/js/scripts.bundle.js"></script>
<script src="<?=asset_url()?>/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?=asset_url()?>/scripts/edit_family.js"></script>
<script src="<?=asset_url()?>/scripts/edit_product.js"></script>
<script src="<?=asset_url()?>/scripts/edit.js"></script>
