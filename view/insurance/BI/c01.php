<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?> 
<?php $GLOBALS["nguoi_duoc_bao_hiem"] = 'label_khach_hang'; ?>
<?php $GLOBALS["rui_ro_uot_c01"] = 'c01'; ?>
<?php $GLOBALS["loai_mien_thuong"] = 'repeater'; ?>
<?php $GLOBALS["dieu_kien_bao_hiem"] = 'modal'; ?>
<?php $GLOBALS["dieu_kien_bao_hiem_c01"] = 'c01'; ?>
<?php $GLOBALS["trach_nhiem_dong_bao_hiem"] = 'trach-nhiem-dong-bao-hiem'; ?>
<?php $GLOBALS["so_gcnbh"] = 'remove'; ?>


    <body class="sidebar-xs">

        <div class="page-content home-page">

            <?php include_once SIDEBAR; ?>

            <div class="content-wrapper">

                <div class="content">

                    <!-- Header -->
                    <div class="header-top">
                        <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                            <i class="far fa-align-left"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i>C01 - Bảo hiểm mọi rủi ro trong xây dựng</a>
                                <span class="breadcrumb-item active">Cập nhập đơn</span>
                            </div>
                            <div class="d-md-none logo-mobile">
                                <a href="<?php echo HTTP_PATH; ?>" class="logo-text">
                                    <div class="logo-img"><img src="<?php echo HTTP_PATH .'app-assets/images/logo/logo2.png'; ?>" alt="VNI Logo"></div>
                                    <span class="text align-middle" style="font-weight: 900;">VNI</span>
                                </a>
                            </div>
                        </div>
                        <?php include_once TOP_RIGHT; ?>
                    </div>
                    <!-- /Header -->

                    <div class="page-title">
                        <div class="p-title">
                            <p class="font-weight-semibold font-size-m mb-0"><i class="icon-certificate mr-2"></i>Thêm mới đơn bảo hiểm</p>
                            <span class="text-muted d-block font-size-xs">Nhập thông tin theo từng bước. Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                        </div>
                        <div class="p-button">
                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                            <a href="javascript:;" class="btn mr-1"><i class="far fa-copy mr-1"></i> Lưu & Copy</a>
                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                        </div>
                    </div>

                    <!-- Content-block -->
                    <div class="content-block">

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Form wzard with step validation section start -->
                                <section id="validation" class="input-don">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="wizard">

                                                            <?php inc('template/steps.php'); ?>

                                                            <form action="#" class="form-validation clearfix">
                                                                <div class="tab-content">
                                                                    <!-- Bước 1 -->
                                                                    <?php inc('template/1_thong_tin_chung/1_thong_tin_chung.php'); ?>

                                                                    <!-- Step 2 -->
                                                                    <?php inc('template/2_trung_gian_bao_hiem/2_trung_gian_bao_hiem.php'); ?>
                                                                    
                                                                    <!-- Step 3 -->
                                                                    <fieldset class="tab-pane" id="step3">
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/3_doi_tuong_bao_hiem/PRO/ma_dia_diem.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                    <label>Nhóm công trình DD/GT: <span class="text-danger">*</span></label>
                                                                                    <select class="form-control" select2>
                                                                                        <option id="" value="" name="">--- Chọn ---</option>
                                                                                        <option value="">Công trình dân dụng</option>
                                                                                        <option value="">Công trình giao thông</option>
                                                                                        <option value="">Công trình công nghiệp</option>
                                                                                        <option value="">Công trình hạ tầng kỹ thuật</option>
                                                                                        <option value="">Công trình thủy lợi</option>
                                                                                        <option value="">Công trình thủy điện</option>
                                                                                        <option value="">Công trình nông nghiệp và phát triển nông thôn</option>
                                                                                        <option value="">Công trình khác</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                             <div class="col-md-6">
                                                                                <?php inc('template/3_doi_tuong_bao_hiem/BI/cong_trinh.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/3_doi_tuong_bao_hiem/BI/rui_ro_uot.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/3_doi_tuong_bao_hiem/BI/ten_cong_trinh_du_an.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="">Danh sách người được bảo hiểm:</label>
                                                                            <table class="table table-bordered datatable" datatable-tab data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="w1p">STT</th>
                                                                                        <th class="w25p">Người được bh</th>
                                                                                        <th class="desktop">Địa chỉ</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="border p-1 text-center">
                                                                                <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang">Chọn từ danh sách</button>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </fieldset>
                                                                    
                                                                    <!-- Step 4 -->
                                                                    <fieldset class="tab-pane" id="step4">
                                                                        <div class="row">
                                                                            <div class="col-md-9">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group ">
                                                                                    <label>Thời gian bảo hành: </label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control input-month"placeholder="Nhập thời hạn..." value="">
                                                                                        <span class="input-group-append">
                                                                                            <span class="input-group-text">Tháng</span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="collapse-group">
                                                                                    <div class="p-title">Phạm vi bảo hiểm: <a href="#" data-tooltip="tipsy" original-title="Chỉ có thể chọn Tổn thất vật chất tự nguyện hoặc Tổn thất vật chất bắt buộc" data-position="top"><i class="icon-info22"></i></a></div>
                                                                                    <div class="p-body collapse show">

                                                                                        <div class="c-item radio">
                                                                                            <div class="c-title">
                                                                                                <span class="button-switch no-label">
                                                                                                    <input type="checkbox" data-type-radio id="ckbchild1" class="switch cls_ckb">
                                                                                                    <label for="ckbchild1" data-off="Không" data-on="Có"></label>
                                                                                                </span>
                                                                                                <a data-toggle="collapse" class="collapsed" href="#collapsible-item1">Tổn thất vật chất tự nguyện</a>
                                                                                            </div>
                                                
                                                                                            <div id="collapsible-item1" class="collapse" datatable-collapse>
                                                                                                <div class="c-body">
                                                                                                    <table class="table table-bordered datatable" 
                                                                                                        data-paging="false"
                                                                                                        data-info="false"
                                                                                                        data-ordering="false"
                                                                                                        data-searching="false" >
                                                                                                        <thead class="thead-light">
                                                                                                            <tr>
                                                                                                                <th width="20%">Phạm vi bảo hiểm</th>
                                                                                                                <th width="17%">Số tiền bảo hiểm</th>
                                                                                                                <th width="5%" class="desktop">Phí (%)</th>
                                                                                                                <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                                <th width="5%" class="desktop">VAT (%)</th>
                                                                                                                <th width="10%" class="desktop">VAT</th>
                                                                                                                <th width="5%" class="desktop">COM (%)</th>
                                                                                                                <th width="10%" class="desktop">COM</th>
                                                                                                                <th width="17%" class="desktop">Định mức</th>
                                                                                                            </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td>Tổn thất vật chất tự nguyện</td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td>
                                                                                                                    <select class="form-control" select2 >
                                                                                                                        <option>CTDD-Giá trị bảo hiểm ≤ 50 tỷ</option>
                                                                                                                        <option>CTDD-50 tỷ &lt; Giá trị bảo hiểm ≤ 75 tỷ</option>
                                                                                                                        <option>CTDD-75 tỷ &lt; Giá trị bảo hiểm ≤ 100 tỷ</option>
                                                                                                                        <option>CTDD-100 tỷ &lt; Giá trị bảo hiểm &lt; 650 tỷ</option>
                                                                                                                        <option>CTDD-650 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                                        <option>CTDD- 1000 tỷ ≤ Giá trị bảo hiểm ≤ 4000 tỷ</option>
                                                                                                                        <option>CTDD-Giá trị bảo hiểm lớn hơn 4000 tỷ</option>
                                                                                                                        <option>CTCNGT-Giá trị bảo hiểm &lt; 500 tỷ</option>
                                                                                                                        <option>CTCNGT-500 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                                        <option>CTCNGT-1000 tỷ ≤ Giá trị bảo hiểm ≤ 3000 tỷ</option>
                                                                                                                        <option>CTCNGT-Giá trị bảo hiểm trên 3000 tỷ</option>
                                                                                                                    </select>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="c-item radio">
                                                                                            <div class="c-title">
                                                                                                <span class="button-switch no-label">
                                                                                                    <input type="checkbox" data-type-radio id="ckbchild2" class="switch cls_ckb">
                                                                                                    <label for="ckbchild2" data-off="Không" data-on="Có"></label>
                                                                                                </span>
                                                                                                <a class="collapsed " data-toggle="collapse" href="#collapsible-item2">Tổn thất vật chất bắt buộc</a>
                                                                                            </div>
                                                                                            <div id="collapsible-item2" class="collapse" datatable-collapse>
                                                                                                <div class="c-body">
                                                                                                    <table class="table table-bordered datatable" 
                                                                                                        data-paging="false"
                                                                                                        data-info="false"
                                                                                                        data-ordering="false"
                                                                                                        data-searching="false" >
                                                                                                        <thead class="thead-light">
                                                                                                            <tr>
                                                                                                                <th width="20%">Phạm vi bảo hiểm</th>
                                                                                                                <th width="17%">Số tiền bảo hiểm</th>
                                                                                                                <th width="5%" class="desktop">Phí (%)</th>
                                                                                                                <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                                <th width="5%" class="desktop">VAT (%)</th>
                                                                                                                <th width="10%" class="desktop">VAT</th>
                                                                                                                <th width="5%" class="desktop">COM (%)</th>
                                                                                                                <th width="10%" class="desktop">COM</th>
                                                                                                                <th width="17%" class="desktop">Định mức</th>
                                                                                                            </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td>Tổn thất vật chất bắt buộc</td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td>
                                                                                                                    <select class="form-control" select2 >
                                                                                                                        <option>CTDD-Giá trị bảo hiểm ≤ 50 tỷ</option>
                                                                                                                        <option>CTDD-50 tỷ &lt; Giá trị bảo hiểm ≤ 75 tỷ</option>
                                                                                                                        <option>CTDD-75 tỷ &lt; Giá trị bảo hiểm ≤ 100 tỷ</option>
                                                                                                                        <option>CTDD-100 tỷ &lt; Giá trị bảo hiểm &lt; 650 tỷ</option>
                                                                                                                        <option>CTDD-650 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                                        <option>CTDD- 1000 tỷ ≤ Giá trị bảo hiểm ≤ 4000 tỷ</option>
                                                                                                                        <option>CTDD-Giá trị bảo hiểm lớn hơn 4000 tỷ</option>
                                                                                                                        <option>CTCNGT-Giá trị bảo hiểm &lt; 500 tỷ</option>
                                                                                                                        <option>CTCNGT-500 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                                        <option>CTCNGT-1000 tỷ ≤ Giá trị bảo hiểm ≤ 3000 tỷ</option>
                                                                                                                        <option>CTCNGT-Giá trị bảo hiểm trên 3000 tỷ</option>
                                                                                                                    </select>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="c-item ">
                                                                                            <div class="c-title">
                                                                                                <span class="button-switch no-label">
                                                                                                    <input type="checkbox" id="ckbchild3" class="switch cls_ckb">
                                                                                                    <label for="ckbchild3" data-off="Không" data-on="Có"></label>
                                                                                                </span>
                                                                                                <a class="collapsed " data-toggle="collapse" href="#collapsible-item3">TNDS bên thứ 3</a>
                                                                                            </div>
                                                                                            <div id="collapsible-item3" class="collapse" datatable-collapse>
                                                                                                <div class="c-body">
                                                                                                    <table class="table table-bordered datatable mb-3" data-paging="false" data-info="false" data-ordering="false"data-searching="false" >
                                                                                                        <thead class="thead-light">
                                                                                                            <tr>
                                                                                                                <th width="20%">Phạm vi bảo hiểm</th>
                                                                                                                <th width="17%">Số tiền bảo hiểm</th>
                                                                                                                <th width="5%" class="desktop">Phí (%)</th>
                                                                                                                <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                                <th width="5%" class="desktop">VAT (%)</th>
                                                                                                                <th width="10%" class="desktop">VAT</th>
                                                                                                                <th width="5%" class="desktop">COM (%)</th>
                                                                                                                <th width="10%" class="desktop">COM</th>
                                                                                                                <th width="17%" class="desktop">Định mức</th>
                                                                                                            </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td>TNDS bên thứ 3</td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td>
                                                                                                                    <select class="form-control" select2 >
                                                                                                                        <option>CTDD-Giá trị bảo hiểm ≤ 50 tỷ</option>
                                                                                                                        <option>CTDD-50 tỷ &lt; Giá trị bảo hiểm ≤ 75 tỷ</option>
                                                                                                                        <option>CTDD-75 tỷ &lt; Giá trị bảo hiểm ≤ 100 tỷ</option>
                                                                                                                        <option>CTDD-100 tỷ &lt; Giá trị bảo hiểm &lt; 650 tỷ</option>
                                                                                                                        <option>CTDD-650 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                                        <option>CTDD- 1000 tỷ ≤ Giá trị bảo hiểm ≤ 4000 tỷ</option>
                                                                                                                        <option>CTDD-Giá trị bảo hiểm lớn hơn 4000 tỷ</option>
                                                                                                                        <option>CTCNGT-Giá trị bảo hiểm &lt; 500 tỷ</option>
                                                                                                                        <option>CTCNGT-500 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                                        <option>CTCNGT-1000 tỷ ≤ Giá trị bảo hiểm ≤ 3000 tỷ</option>
                                                                                                                        <option>CTCNGT-Giá trị bảo hiểm trên 3000 tỷ</option>
                                                                                                                    </select>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table class="table table-bordered">
                                                                                                        <thead class="thead-light">
                                                                                                            <tr>
                                                                                                                <th width="20%">TNDS bên thứ 3</th>
                                                                                                            </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td class="font-weight-semibold">Về người:</td>
                                                                                                                <td>
                                                                                                                    <div>
                                                                                                                        <label>Số tiền / người:</label>
                                                                                                                        <input class="form-control text-right input-money" type="text" placeholder="0">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div>
                                                                                                                        <label>Số người tối đa:</label>
                                                                                                                        <input class="form-control text-right input-number" type="text" placeholder="0">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div>
                                                                                                                        <label>Tổng số tiền / số người tối đa:</label>
                                                                                                                        <input class="form-control text-right input-money" type="text" placeholder="0">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td class="font-weight-semibold">Về tài sản:</td>
                                                                                                                <td>
                                                                                                                    <div>
                                                                                                                        <label>Số tiền / vụ:</label>
                                                                                                                        <input class="form-control text-right input-money" type="text" placeholder="0">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div>
                                                                                                                        <label>
                                                                                                                            Tổng số tiền / tất cả các vụ: 
                                                                                                                            <a href="#" data-tooltip="tipsy" original-title="Tổng số tiền / tất cả các vụ trong thời hạn của hợp đồng" data-position="top"><i class="icon-info22"></i></a>
                                                                                                                        </label>
                                                                                                                        <input class="form-control text-right input-money" type="text" placeholder="0">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_dai_li.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_moi_gioi.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/loai_mien_thuong_repeater.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/ten_rui_ro.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/dieu_kien_bao_hiem.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/dieu_khoan_loai_tru.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/dia_diem_bao_hiem.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/quy_tac_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/PRO/trach_nhiem_dong_bao_hiem.php'); ?>
                                                                            </div>  
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/phan_bo_don_vi.php'); ?>
                                                                            </div>  
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thong_tin_ve_thoi_han_thanh_toan.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thanh_toan_tai_ngan_hang.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="">Thanh toán bảo hiểm: </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <table class="table table-bordered" style="margin: auto;">
                                                                                        <thead class="thead-light">
                                                                                            <tr>
                                                                                                <th class="w60p">Quyền lợi</th>
                                                                                                <th class="w40p text-right">Phí BH có VAT</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Mức trách nhiệm của VNI</td>
                                                                                                <td class="text-right"><input class="form-control input-money text-right" type="text" value="0"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Tổn thất vật chất</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>TNDS bên thứ 3</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            
                                                                                            <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                                <td>Tổng phí BH (chưa VAT)</td>
                                                                                                <td><input class="form-control text-right" type="text" readonly value="0"></td>
                                                                                            </tr>
                                                                                            <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                                <td>Tổng VAT</td>
                                                                                                <td><input class="form-control text-right" type="text" readonly value="0"></td>
                                                                                            </tr>
                                                                                            <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                                <td>Tổng phí BH (có VAT)</td>
                                                                                                <td><input class="form-control text-right" type="text" readonly value="0"></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <?php inc('template/4_pham_vi_bao_hiem/lich_thanh_toan.php'); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/ghi_chu_noi_bo.php'); ?>
                                                                            </div>  
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/ghi_chu_cho_khach_hang.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/tai_lieu_dinh_kem.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </form>

                                                            <?php inc('template/actions.php'); ?>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Form wzard with step validation section end -->
                            </div>
                        </div>

                    </div>
                    <!-- /Content-block -->

                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                </div>

            </div>
            
        </div>

        <?php inc('chat-box.php'); ?> 
        <?php inc('quick-action.php'); ?> 

        <?php inc('modal/modal_ds_so_hop_dong_xin_cap.php'); ?> 
        <?php inc('modal/modal_danh_muc_tai_san_bao_hiem.php'); ?>
         
        <div class="modal-group">
            <?php inc('modal/modal_ds_tau_thuyen.php'); ?> 
            <?php inc('modal/modal_cap_nhap_tau_thuyen.php'); ?> 
        </div>

        <div class="modal-group">
            <?php
                inc('modal/modal_ds_cac_khach_hang.php'); 
                inc('modal/modal_cap_nhap_thong_tin_khach_hang.php'); 
            ?>
        </div>

        <?php inc('modal/modal_ds_rui_ro_bao_hiem.php'); ?> 
        <?php inc('modal/modal_ds_dieu_khoan_loai_tru.php'); ?> 
        <?php inc('modal/modal_dieu_khoan_sua_doi_bo_sung.php'); ?> 
        <?php inc('modal/modal_ds_files.php'); ?>

    </body>

<?php include_once FOOTER; ?>

