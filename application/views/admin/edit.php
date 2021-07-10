
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
                        <!--begin::Aside-->
                        <div class="wizard-aside bg-white d-flex flex-column flex-row-auto w-100 w-lg-300px w-xl-400px w-xxl-250px">
                            <!--begin::Aside Top-->
                            <div class="d-flex flex-column-fluid flex-column px-10">
                                <!--begin: Wizard Nav-->
                                <div class="wizard-nav d-flex d-flex justify-content-center pt-10 pt-lg-20 pb-5">
                                    <!--begin::Wizard Steps-->
                                    <div class="wizard-steps">
                                        <!--begin::Wizard Step 1 Nav-->
                                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                            <div class="wizard-wrapper">
                                                <div class="wizard-icon">
                                                    <i class="wizard-check ki ki-check"></i>
                                                    <span class="wizard-number">1</span>
                                                </div>
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">基本情報</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 1 Nav-->
                                        <!--begin::Wizard Step 2 Nav-->
                                        <div class="wizard-step" data-wizard-type="step">
                                            <div class="wizard-wrapper">
                                                <div class="wizard-icon">
                                                    <i class="wizard-check ki ki-check"></i>
                                                    <span class="wizard-number">2</span>
                                                </div>
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">家族</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 2 Nav-->
                                        <!--begin::Wizard Step 3 Nav-->
                                        <div class="wizard-step" data-wizard-type="step">
                                            <div class="wizard-wrapper">
                                                <div class="wizard-icon">
                                                    <i class="wizard-check ki ki-check"></i>
                                                    <span class="wizard-number">3</span>
                                                </div>
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">購入履歴</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 3 Nav-->
                                    </div>
                                    <!--end::Wizard Steps-->
                                </div>
                                <!--end: Wizard Nav-->
                            </div>
                            <!--end::Aside Top-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="wizard-content bg-gray-100 d-flex flex-column flex-row-fluid py-15 px-5 px-lg-10">
                            <!--begin::Form-->
                            <div class="d-flex justify-content-center flex-row-fluid">
                                <form class="pb-5 w-100 w-md-450px w-lg-800px" novalidate="novalidate" id="kt_form">
                                    <input type="hidden" name="id" id="id" value="<?=isset($id)?$id:''?>">
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
                                                    <input type="text" class="form-control" value="<?=isset($customer)?$customer['name']:''?>" name="name" placeholder="名 前"/>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <input type="text" class="form-control" value="<?=isset($customer)?$customer['name']:''?>" name="nick_name" placeholder="ふりがな"/>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <input type="email" class="form-control" value="<?=isset($customer)?$customer['email']:''?>" name="email" inputmode="text" placeholder="メールアドレス"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['address']:''?>"  name="address" placeholder="住 所0"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-map-marker"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['address1']:''?>" name="address1"  placeholder="住 所1"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-map-marker"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['address2']:''?>" name="address2" placeholder="住 所2"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-map-marker"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['post_code']:''?>" name="post_code" inputmode="text" placeholder="郵便番号"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-bookmark-o"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['class']:''?>" name="class" placeholder="クラス"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-bookmark-o"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"  placeholder="携帯電話" value="<?=isset($customer)?$customer['mobile']:''?>" name="mobile" inputmode="text">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-mobile-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone1']:''?>" name="phone1" placeholder="電話自宅1"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone2']:''?>" name="phone2" placeholder="電話自宅2"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone3']:''?>" name="phone3" placeholder="電話自宅3"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mt-2">
                                                    <div class="input-group">
                                                        <select class="form-control" name="sex">
                                                            <option value="1">男</option>
                                                            <option value="2">女</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="<?=isset($customer)?$customer['phone1']:''?>" name="phone4" placeholder="勤務先電話"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-phone"></i></span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4 mt-2">
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
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-3">趣 味</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="hobby">
                                                                <option value=""></option>
                                                                <option value="歌舞伎" <?=isset($customer)&&($customer["hobby"]=="歌舞伎")?'selected':''?>>歌舞伎</option>
                                                                <option value="能" <?=isset($customer)&&($customer["hobby"]=="能")?'selected':''?>>能</option>
                                                                <option value="文楽" <?=isset($customer)&&($customer["hobby"]=="文楽")?'selected':''?>>文楽 </option>
                                                                <option value="落語" <?=isset($customer)&&($customer["hobby"]=="落語")?'selected':''?>>落語 </option>
                                                                <option value="美術・工芸品" <?=isset($customer)&&($customer["hobby"]=="美術・工芸品")?'selected':''?>>美術・工芸品</option>
                                                            </select>
                                                            <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="sex" id="sex" value="" required> -->
                                                            <div class="fv-plugins-message-container"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-2">
                                                    <div class="input-group">
                                                        <label class="col-form-label text-right col-sm-4">習い事</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" name="habit">
                                                                <option value=""></option>
                                                                <option value="着付" <?=isset($customer)&&($customer["habit"]=="着付")?'selected':''?>>着付</option>
                                                                <option value="和裁" <?=isset($customer)&&($customer["habit"]=="和裁")?'selected':''?>>和裁 </option>
                                                                <option value="茶道" <?=isset($customer)&&($customer["habit"]=="茶道")?'selected':''?>>茶道 </option>
                                                                <option value="華道" <?=isset($customer)&&($customer["habit"]=="華道")?'selected':''?>>華道 </option>
                                                                <option value="三味線" <?=isset($customer)&&($customer["habit"]=="三味線")?'selected':''?>>三味線 </option>
                                                                <option value="琴" <?=isset($customer)&&($customer["habit"]=="琴")?'selected':''?>>琴</option>
                                                            </select>
                                                            <div class="fv-plugins-message-container"></div>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <div class="card card-custom gutter-b">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <!-- <span class="card-icon">
                                                        <i class="flaticon2-psd text-primary"></i>
                                                    </span>
                                                    <h3 class="card-label">家族</h3> -->
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
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <div class="card card-custom gutter-b">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <!-- <span class="card-icon">
                                                        <i class="flaticon2-psd text-primary"></i>
                                                    </span>
                                                    <h3 class="card-label">家族</h3> -->
                                                </div>
                                                <div class="card-toolbar">
                                                   <a class="btn btn-light-primary font-weight-bolder btn-sm" id="new_product">+ 追加</a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <!--begin: Datatable-->
                                                <table class="table table-bordered table-hover table-checkable" id="kt_product_table" style="margin-top: 13px !important">
                                                </table>
                                                <!--end: Datatable-->
                                            </div>
                                        </div>  
                                    </div>
                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between pt-3">
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pl-6 pr-8 py-4 my-3 mr-3" data-wizard-type="action-prev">
                                            <span class="svg-icon svg-icon-md mr-1">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
                                                        <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>以 前</button>
                                        </div>
                                        <div>
                                            <button type="button"  id="confirm"  class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3" data-wizard-type="action-submit">更 新
                                            <span class="svg-icon svg-icon-md ml-2">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span></button>
                                            <button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next">次 に
                                            <span class="svg-icon svg-icon-md ml-1">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span></button>
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
                                <input class="form-control form-control-solid form-control-lg" name="name" id="name" type="text" value="" required>
                                <div class="fv-plugins-message-container"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">ふりがな</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control form-control-solid form-control-lg" name="nick_name" id="nick_name" value="" required>
                                <div class="fv-plugins-message-container"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">生年月日</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input class="form-control form-control-solid form-control-lg" readonly name="birthday" id="birthday" type="text" value="" required>
                                <div class="fv-plugins-message-container"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">性 別</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <select class="form-control" name="sex">
                                    <option value="1">男</option>
                                    <option value="2">女</option>
                                </select>
                                <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="sex" id="sex" value="" required> -->
                                <div class="fv-plugins-message-container"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">メモ</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input class="form-control form-control-solid form-control-lg" name="content" id="content" type="text" value="" required>
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
                            <label class="col-form-label text-right col-lg-3 col-sm-12">買上日</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input class="form-control form-control-solid form-control-lg" readonly name="date" id="date" type="text" value="" required>
                                <div class="fv-plugins-message-container"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">買上品</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control form-control-solid form-control-lg" name="name" id="name" value="" required>
                                <div class="fv-plugins-message-container"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">買上金額(円)</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input class="form-control form-control-solid form-control-lg" name="price" id="price" type="text" value="" required>
                                <div class="fv-plugins-message-container"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Etc</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control form-control-solid form-control-lg" name="etc" id="etc" value="" required>
                                <div class="fv-plugins-message-container"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">メモ</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control form-control-solid form-control-lg" name="content" id="content" value="" required>
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
                            <input class="form-control form-control-solid form-control-lg" name="admin_id" type="text" value="" required>
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Password</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="password" class="form-control form-control-solid form-control-lg" name="password" value="" required>
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