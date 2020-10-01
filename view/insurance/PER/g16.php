<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
    
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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i> G16 - Bảo hiểm sức khỏe người vay vốn</a>
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
                                                                    <fieldset  class="tab-pane active show" id="step1">

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/kenh_khai_thac.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/hinh_thuc_khai_thac.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/1_thong_tin_chung/so_don_bao_hiem.php'); ?> 
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/so_tham_chieu.php'); ?> 
                                                                            </div>
                                                                            
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/so_ban_chao.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/so_hd_nhan_tai.php'); ?> 
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/1_thong_tin_chung/nguoi_duoc_bao_hiem.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/1_thong_tin_chung/nguoi_thanh_toan_bao_hiem.php'); ?> 
                                                                            </div>
                                                                            
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/can_bo_khai_thac.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/can_bo_cap_don.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/ngay_cap.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/loai_tien.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/ti_gia_thuc_te.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/1_thong_tin_chung/tai_bao_hiem.php'); ?>
                                                                                <?php inc('template/1_thong_tin_chung/dong_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>

                                                                    <!-- Step 2 -->
                                                                    <?php inc('template/2_trung_gian_bao_hiem/2_trung_gian_bao_hiem.php'); ?>
                                                                    
                                                                    <!-- Step 3 -->
                                                                    <fieldset class="tab-pane" id="step3">

                                                                        <div class="block">
                                                                            <p class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Thông tin sản phẩm bảo an tín dụng</p>
                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group ">
                                                                                        <label>Nhóm khách hàng: </label>
                                                                                        <select class="form-control" select2 name="">
                                                                                            <option>--- Chọn ---</option>
                                                                                            <option>Khách hàng TONKIN (OCB)</option>
                                                                                            <option>Nhóm khách hàng vay tín chấp(Bắt buộc tham gia bảo hiểm)</option>
                                                                                            <option>Khách hàng vay thế chấp</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group ">
                                                                                        <label>Đối tượng vay: </label>
                                                                                        <select class="form-control" select2 name="">
                                                                                            <option>--- Chọn ---</option>
                                                                                            <option>KH Cá nhân/Hộ gia đình</option>
                                                                                            <option>KH DN vừa và nhỏ</option>
                                                                                            <option>KH DN lớn</option>
                                                                                            <option>KH DN siêu vi mô</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group ">
                                                                                        <label>Nhóm khách hàng: </label>
                                                                                        <select class="form-control" select2 name="">
                                                                                           <option>--- Chọn ---</option>
                                                                                           <option>Khách hàng ưu tiên</option>
                                                                                           <option>Khách hàng trung lưu</option>
                                                                                           <option>Khách hàng DN nhiều tiền gửi</option>
                                                                                           <option>Khách hàng phổ thông</option>
                                                                                           <option>Khách hàng DN vừa</option>
                                                                                           <option>Tập đoàn,TCTY nhà nước</option>
                                                                                           <option>KH DN lớn</option>
                                                                                           <option>Khách hàng DN siêu lớn</option>
                                                                                           <option>KH DN vi mô</option>
                                                                                           <option>KH DN siêu vi mô</option>
                                                                                       </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group ">
                                                                                        <label>Nhóm rủi ro: </label>
                                                                                        <select class="form-control" select2 name="">
                                                                                            <option>--- Chọn ---</option>
                                                                                            <option value="">Nhóm 1</option>
                                                                                            <option value="">Nhóm 2</option>
                                                                                            <option value="">Nhóm 3</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="block">
                                                                            <p class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Thông tin doanh nghiệp</p>
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <div class="form-group ">
                                                                                        <label>Mã KH doanh nghiệp: </label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group ">
                                                                                        <label>Tên KH Doanh nghiệp: </label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="form-group ">
                                                                                        <label>Mã số thuế: </label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group ">
                                                                                        <label>Địa chỉ: </label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="block">
                                                                            <p class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Thông tin Hợp đồng tín dụng</p>
                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group ">
                                                                                        <label>Hợp đồng tín dụng: <span class="text-danger">*</span></label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group ">
                                                                                        <label>Số tiền vay: </label>
                                                                                        <input type="text" class="form-control input-money">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group ">
                                                                                        <label>Thời hạn vay: </label>
                                                                                        <select class="form-control" select2 name="">
                                                                                           <option id="" value="" name="">--- Chọn ---</option>
                                                                                           <option id="1" name="1 Tháng" value="1">1 Tháng</option>
                                                                                           <option id="2" name="2 Tháng" value="2">2 Tháng</option>
                                                                                           <option id="3" name="3 Tháng" value="3">3 Tháng</option>
                                                                                           <option id="4" name="4 Tháng" value="4">4 Tháng</option>
                                                                                           <option id="5" name="5 Tháng" value="5">5 Tháng</option>
                                                                                           <option id="6" name="6 Tháng" value="6">6 Tháng</option>
                                                                                           <option id="7" name="7 Tháng" value="7">7 Tháng</option>
                                                                                           <option id="8" name="8 Tháng" value="8">8 Tháng</option>
                                                                                           <option id="9" name="9 Tháng" value="9">9 Tháng</option>
                                                                                           <option id="10" name="10 Tháng" value="10">10 Tháng</option>
                                                                                           <option id="11" name="11 Tháng" value="11">11 Tháng</option>
                                                                                           <option id="12" name="12 Tháng" value="12">12 Tháng</option>
                                                                                           <option id="13" name="13 Tháng" value="13">13 Tháng</option>
                                                                                           <option id="14" name="14 Tháng" value="14">14 Tháng</option>
                                                                                           <option id="15" name="15 Tháng" value="15">15 Tháng</option>
                                                                                           <option id="16" name="16 Tháng" value="16">16 Tháng</option>
                                                                                           <option id="17" name="17 Tháng" value="17">17 Tháng</option>
                                                                                           <option id="18" name="18 Tháng" value="18">18 Tháng</option>
                                                                                           <option id="19" name="19 Tháng" value="19">19 Tháng</option>
                                                                                           <option id="20" name="20 Tháng" value="20">20 Tháng</option>
                                                                                           <option id="21" name="21 Tháng" value="21">21 Tháng</option>
                                                                                           <option id="22" name="22 Tháng" value="22">22 Tháng</option>
                                                                                           <option id="23" name="23 Tháng" value="23">23 Tháng</option>
                                                                                           <option id="24" name="24 Tháng" value="24">24 Tháng</option>
                                                                                           <option id="25" name="25 Tháng" value="25">25 Tháng</option>
                                                                                           <option id="26" name="26 Tháng" value="26">26 Tháng</option>
                                                                                           <option id="27" name="27 Tháng" value="27">27 Tháng</option>
                                                                                           <option id="28" name="28 Tháng" value="28">28 Tháng</option>
                                                                                           <option id="29" name="29 Tháng" value="29">29 Tháng</option>
                                                                                           <option id="30" name="30 Tháng" value="30">30 Tháng</option>
                                                                                           <option id="31" name="31 Tháng" value="31">31 Tháng</option>
                                                                                           <option id="32" name="32 Tháng" value="32">32 Tháng</option>
                                                                                           <option id="33" name="33 Tháng" value="33">33 Tháng</option>
                                                                                           <option id="34" name="34 Tháng" value="34">34 Tháng</option>
                                                                                           <option id="35" name="35 Tháng" value="35">35 Tháng</option>
                                                                                           <option id="36" name="36 Tháng" value="36">36 Tháng</option>
                                                                                           <option id="48" name="4 Năm" value="48">4 Năm</option>
                                                                                           <option id="60" name="5 Năm" value="60">5 Năm</option>
                                                                                           <option id="72" name="6 Năm" value="72">6 Năm</option>
                                                                                           <option id="84" name="7 Năm" value="84">7 Năm</option>
                                                                                           <option id="96" name="8 Năm" value="96">8 Năm</option>
                                                                                           <option id="108" name="9 Năm" value="108">9 Năm</option>
                                                                                           <option id="120" name="10 Năm" value="120">10 Năm</option>
                                                                                       </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="block">
                                                                            <p class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Thông tin người thụ hưởng</p>
                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label>Người thụ hưởng 1: </label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <div class="form-group">
                                                                                        <label>Địa chỉ: </label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group ">
                                                                                        <label>Người thụ hưởng 2: </label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group ">
                                                                                        <label>Địa chỉ: </label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group ">
                                                                                        <label>Quan hệ: </label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group ">
                                                                                        <label>CMTND/HC: </label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                    
                                                                    <!-- Step 4 -->
                                                                    <fieldset class="tab-pane" id="step4">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group ">
                                                                                    <label>Chương trình bảo hiểm: </label>
                                                                                    <select class="form-control" select2>
                                                                                        <option>--- Chọn ---</option>
                                                                                        <option>Chương trình 1</option>
                                                                                        <option>Chương trình 2</option>
                                                                                        <option>Chương trình 3</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
                                                                            </div>
                                                                            
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label>Phạm vi bảo hiểm:</label>
                                                                                    <div repeater>
                                                                                        <table class="table table-bordered datatable table-fixed child-row-sm" data-paging="false" data-info="false" data-ordering="false"data-searching="false">
                                                                                            <colgroup>
                                                                                                <col width="3%"></col>
                                                                                            </colgroup>
                                                                                            <thead class="thead-light">
                                                                                                <tr>
                                                                                                    <th width="20%">Phạm vi bảo hiểm</th>
                                                                                                    <th class="none">Loại vay vốn</th>
                                                                                                    <th width="10%">Số tiền bảo hiểm</th>
                                                                                                    <th width="5%" class="desktop">TL Phí (%)</th>
                                                                                                    <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                    <th width="5%" class="desktop">VAT (%)</th>
                                                                                                    <th width="10%" class="desktop">VAT</th>
                                                                                                    <th width="5%" class="desktop">COM (%)</th>
                                                                                                    <th width="10%" class="desktop">COM</th>
                                                                                                    <th width="20%" class="desktop">Định mức</th>
                                                                                                    <th width="7%" class="all"></th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody data-repeater-list="repeater-list">
                                                                                                <tr data-repeater-item>
                                                                                                    <td>
                                                                                                        <select select2>
                                                                                                            <option value="">--- Chọn phạm vi ---</option>
                                                                                                            <option value="">A. Tử vong,thương tật toàn bộ vĩnh viễn do tai nạn</option>
                                                                                                            <option value="">B. Tử vong, tàn tật toàn bộ vĩnh viễn do ốm đau, bệnh tật, thai sản</option>
                                                                                                            <option value="">Phạm vi A + B</option>
                                                                                                        </select>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="col-content-lg">
                                                                                                            <div class="row">
                                                                                                                <div class="col-6"> 
                                                                                                                    <div class="select-group">
                                                                                                                        <select select2 name="loai_vay_von" class="form-control" onchange="on_change_loai_vay_von(this);">
                                                                                                                            <option value="">--- Chọn ---</option>
                                                                                                                            <option value="1">Số tiền vay ban đầu</option>
                                                                                                                            <option value="2">Dư nợ giảm dần</option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-6"> 
                                                                                                                    <button id="upload-excel" class="btn btn-light btn-file ml-3" style="display: none;">
                                                                                                                        <i class="far fa-upload mr-1"></i>
                                                                                                                        <span class="hidden-xs">Import Excel</span>
                                                                                                                        <input type="file" class="file-input-preview">
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <table id="table-excel" class="table table-bordered mt-3" style="display: none;">
                                                                                                            <thead>
                                                                                                                <tr>
                                                                                                                    <th class="sad">Tháng tham gia</th>
                                                                                                                    <th>Phí</th>
                                                                                                                    <th>Số tiền</th>
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <tbody class="ss">
                                                                                                                <tr>
                                                                                                                    <td><input class="form-control text-right input-month" type="text" placeholder="0"></td>
                                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="10"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td>
                                                                                                        <select class="form-control " select2 >
                                                                                                            <option value="">--- Chọn định mức ---</option>
                                                                                                            <option>Tử vong,thương tật toàn bộ vĩnh viễn do tai nạn</option>    
                                                                                                            <option>Tử vong, tàn tật toàn bộ vĩnh viễn do ốm đau, bệnh tật, thai sản</option>    
                                                                                                        </select>
                                                                                                    </td>
                                                                                                    <td class="text-center">
                                                                                                        <button type="button" data-repeater-delete class="btn btn-danger">Xoá</button>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>

                                                                                        </table>

                                                                                        <table class="table table-bordered datatable table-fixed child-row-sm" data-paging="false" data-info="false" data-ordering="false"data-searching="false">
                                                                                            <colgroup>
                                                                                                <col width="3%"></col>
                                                                                                <col width="20%"></col>
                                                                                                <col width="10%"></col>
                                                                                                <col class="desktop" width="5%"></col>
                                                                                                <col class="desktop" width="10%"></col>
                                                                                                <col class="desktop" width="5%"></col>
                                                                                                <col class="desktop" width="10%"></col>
                                                                                                <col class="desktop" width="5%"></col>
                                                                                                <col class="desktop" width="10%"></col>
                                                                                                <col class="desktop" width="20%"></col>
                                                                                                <col class="all" width="7%"></col>
                                                                                            </colgroup>
                                                                                            <thead class="thead-none">
                                                                                                <tr>
                                                                                                    <th class="desktop"></th>
                                                                                                    <th></th>
                                                                                                    <th></th>
                                                                                                    <th class="desktop">TL Phí (%)</th>
                                                                                                    <th class="desktop">Phí BH (có VAT)</th>
                                                                                                    <th class="desktop">VAT (%)</th>
                                                                                                    <th class="desktop">VAT</th>
                                                                                                    <th class="desktop">COM (%)</th>
                                                                                                    <th class="desktop">COM</th>
                                                                                                    <th class="desktop"></th>
                                                                                                    <th class="all"></th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td></td>
                                                                                                    <td><b>Tổng cộng: </b></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0.99"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="10"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="10.0"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td`>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                       
                                                                                        <div class="border p-1 text-center">
                                                                                            <input class="btn bg-success" data-repeater-create type="button" value="+ Thêm">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label>Tổng phí chuẩn: </label>
                                                                                    <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="">
                                                                                </div>                                                                            
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label>Tỉ lệ giảm phí: </label>
                                                                                    <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="">
                                                                                </div>                                                                            
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group ">
                                                                                    <label>Đơn trên phân cấp: 
                                                                                        <a href="#" data-tooltip="tipsy" original-title="<b style='color: red;'>“Có”</b> nếu là đơn trên phân cấp." data-position="top"><i class="icon-info22"></i></a>
                                                                                    </label>
                                                                                    <div class="button-switch">
                                                                                        <input type="checkbox" id="don_tren_phan_cap" checked class="switch required" name="don_tren_phan_cap" disabled>
                                                                                        <label for="don_tren_phan_cap" data-off="Không" data-on="Có"></label>
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
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/dieu_kien_bao_hiem.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/dieu_khoan_loai_tru.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/quy_tac_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thong_tin_ve_thoi_han_thanh_toan.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thanh_toan_tai_ngan_hang.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <span class="font-weight-semibold"><label>Lịch thanh toán bảo hiểm: </label></span>
                                                                                <?php inc('template/4_pham_vi_bao_hiem/lich_thanh_toan.php'); ?>
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
        <?php inc('modal/modal_ds_nguoi_tham_gia_bao_hiem.php'); ?> 

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

