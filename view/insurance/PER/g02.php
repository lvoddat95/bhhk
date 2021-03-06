<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["dk_sua_doi_bo_sung"] = 'g'; ?>
<?php $GLOBALS["dk_loai_tru"] = 'g02'; ?>
<?php $GLOBALS["quy_tac"] = 'remove_tra_cuu'; ?>

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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i> G02 - Bảo hiểm con người mức trách nhiệm cao (VNI Care)</a>
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
                                                                        <div class="row mb-md-5 mb-3">
                                                                           <div class="col-md-12">
                                                                                <div class="tab-claim tab-style">
                                                                                    <ul class="nav nav-tabs">
                                                                                        <li class="nav-item">
                                                                                            <a href="#ds_quyen_loi" class="nav-link active show" data-toggle="tab">
                                                                                                <i class="fal fa-file-invoice mr-1"></i>
                                                                                                <span>Danh mục phạm vi bảo hiểm và các giới hạn phụ</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a href="#ds_doi_tuong" class="nav-link" data-toggle="tab">
                                                                                                <i class="fal fa-address-card mr-1"></i>
                                                                                                <span>Danh sách người được bảo hiểm</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="clearfix"></div>

                                                                                    <div class="tab-content">
                                                                                        <div class="tab-pane active show" id="ds_quyen_loi">
                                                                                            <p class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Upload thông tin danh mục phạm vi bảo hiểm và các giới hạn phụ</p>

                                                                                            <div class="row mb-3 align-items-center">
                                                                                                <div class="col-sm-4">
                                                                                                    <button class="btn btn-light btn-file mr-3">
                                                                                                        <i class="far fa-upload mr-2"></i> 
                                                                                                        <span class="hidden-xs">Import file</span>
                                                                                                        <input type="file" class="file-input-preview">
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="col-sm-8">
                                                                                                    <p class="mb-0 d-flex justify-content-end align-items-center"><span class="text-danger">Nhấn vào browser để upload dữ liệu từ excel.</span> <a href="" download="" class="text-primary">(Nhấn vào đây để tải file mẫu)</a></p>
                                                                                                </div>
                                                                                            </div>

                                                                                            <hr class="border-dashed border-silver mb-3">

                                                                                            <div repeater>
                                                                                               <table class="table table-bordered datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false" >
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th class="w1p text-center">STT</th>
                                                                                                            <th class="w15p">Mã nhóm</th>
                                                                                                            <th>Tên nhóm</th>
                                                                                                            <td class="w20p text-center">Phạm vi bảo hiểm và giới hạn phụ</td>
                                                                                                            <th class="w1p text-center"></th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody data-repeater-list="repeater-parent">
                                                                                                        <tr data-repeater-item>
                                                                                                            <td class="text-center">1</td>
                                                                                                            <td><input type="text" class="form-control"></td>
                                                                                                            <td><input type="text" class="form-control"></td>
                                                                                                            <td class="text-center">
                                                                                                                <button type="button" class="btn btn-outline-primary text-primary bg-white" onclick="fancybox_modal(this,'#ds_quyen_loi_bh')">+ Danh sách phạm vi <span>(0)</span></button>
                                                                                                            </td>
                                                                                                            <td class="text-center"><a href="javascript:;" data-repeater-delete class="btn btn-outline-danger text-danger bg-white"><i class="icon-trash"></i> Xoá</a></td>
                                                                                                            
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                                <div class="p-1 text-center">
                                                                                                    <input class="btn bg-success" data-repeater-create type="button" value="+ Thêm nhóm">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="tab-pane " id="ds_doi_tuong">
                                                                                            <p class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Upload thông tin danh sách người được bảo hiểm</p>

                                                                                            <div class="row mb-3 align-items-center">
                                                                                                <div class="col-sm-4">
                                                                                                    <button class="btn btn-light btn-file mr-3">
                                                                                                        <i class="far fa-upload mr-2"></i> 
                                                                                                        <span class="hidden-xs">Import file</span>
                                                                                                        <input type="file" class="file-input-preview">
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="col-sm-8">
                                                                                                    <p class="mb-0 d-flex justify-content-end align-items-center"><span class="text-danger">Nhấn vào browser để upload dữ liệu từ excel.</span> <a href="" download="" class="text-primary">(Nhấn vào đây để tải file mẫu)</a></p>
                                                                                                </div>
                                                                                            </div>

                                                                                            <hr class="border-dashed border-silver mb-3">

                                                                                            <div repeater>
                                                                                                <table class="table table-bordered datatable child-row-sm" data-control-right="true" data-paging="false" data-info="false" data-ordering="false" data-searching="false" >
                                                                                                    <thead class="thead-light">
                                                                                                        <tr>
                                                                                                            <th class="w1p all text-center"><input type="checkbox" id="input-chk-all"></th>
                                                                                                            <th class="none">Mã nhân viên</th>
                                                                                                            <th class="w15p"><span class="text-danger">*</span> Người được BH</th>
                                                                                                            <th class="w5p none">Giới tính</th>
                                                                                                            <th class="w5p none">Ngày sinh</th>
                                                                                                            <th class="none">Địa chỉ</th>
                                                                                                            <th class="none">Email/Số điện thoại</th>
                                                                                                            <th class="desktop"><span class="text-danger">*</span>Tuổi</th>
                                                                                                            <th class="desktop">Đơn vị</th>
                                                                                                            <th class="desktop">Chức vụ</th>
                                                                                                            <th class="desktop">Phòng ban</th>
                                                                                                            <th class="desktop"><span class="text-danger">*</span> Hiệu lực từ ngày</th>
                                                                                                            <th class="desktop"><span class="text-danger">*</span> Đến ngày</th>
                                                                                                            <th class="desktop"><span class="text-danger">*</span> Nhóm/Cấp</th>
                                                                                                            <th class="none"><span class="text-danger">*</span> Tỉ lệ phí chuẩn / Phí chuẩn</th>
                                                                                                            <th class="all w1p"></th>
                                                                                                        </tr>
                                                                                                        
                                                                                                    </thead>
                                                                                                    <tbody data-repeater-list="repeater-list">
                                                                                                        <tr data-repeater-item>
                                                                                                            <td class="text-center">
                                                                                                                <b class="item-level">1.</b> <input type="checkbox" class="input-chk">
                                                                                                            </td>
                                                                                                            <td><input class="form-control col-content-xs" type="text"></td>
                                                                                                            <td><input class="form-control" type="text"></td>

                                                                                                            <td><input class="form-control col-content-xs" type="text"></td>
                                                                                                            <td><input class="form-control col-content-xs input-date datepicker" placeholder="dd/mm/yyyy" type="text"></td>
                                                                                                            <td><input class="form-control col-content-lg" type="text"></td>
                                                                                                            <td><input class="form-control col-content-lg" type="text"></td>
                                                                                                            <td><input class="form-control col-content-xs" type="text"></td>
                                                                                                            <td><input class="form-control col-content-lg" type="text"></td>
                                                                                                            <td><input class="form-control col-content-lg" type="text"></td>
                                                                                                            <td><input class="form-control col-content-lg" type="text"></td>

                                                                                                            <td><input class="form-control col-content-xs input-date datepicker" placeholder="dd/mm/yyyy" type="text"></td>
                                                                                                            <td><input class="form-control col-content-xs input-date datepicker" placeholder="dd/mm/yyyy" type="text"></td>
                                                                                                            <td><input class="form-control col-content-sm" type="text"></td>

                                                                                                            <td>
                                                                                                                <table class="table table-bordered">
                                                                                                                    <thead>
                                                                                                                        <tr>
                                                                                                                            <th colspan="2" class="text-center">Phạm vi A</th>
                                                                                                                            <th colspan="2" class="text-center">Phạm vi B</th>
                                                                                                                            <th colspan="2" class="text-center">Phạm vi C</th>
                                                                                                                            <th colspan="2" class="text-center">Phạm vi D</th>
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                            <th class="text-center w10p"><span class="text-danger">*</span> TL phí chuẩn A</th>
                                                                                                                            <th class="text-center">Phí chuẩn A</th>
                                                                                                                            <th class="text-center w10p"><span class="text-danger">*</span> TL phí chuẩn B</th>
                                                                                                                            <th class="text-center">Phí chuẩn B</th>
                                                                                                                            <th class="text-center w10p"><span class="text-danger">*</span> TL phí chuẩn C</th>
                                                                                                                            <th class="text-center">Phí chuẩn C</th>
                                                                                                                            <th class="text-center w10p"><span class="text-danger">*</span> TL phí chuẩn D</th>
                                                                                                                            <th class="text-center">Phí chuẩn D</th>
                                                                                                                        </tr>
                                                                                                                    </thead>
                                                                                                                    <tbody>
                                                                                                                        <tr>
                                                                                                                            <td><input class="form-control col-content-sm input-float text-right" placeholder="0.0" type="text"></td>
                                                                                                                            <td><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" ></td>

                                                                                                                            <td><input class="form-control col-content-sm input-float text-right" placeholder="0.0" type="text"></td>
                                                                                                                            <td><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" ></td>

                                                                                                                            <td><input class="form-control col-content-sm input-float text-right" placeholder="0.0" type="text"></td>
                                                                                                                            <td><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" ></td>

                                                                                                                            <td><input class="form-control col-content-sm input-float text-right" placeholder="0.0" type="text"></td>
                                                                                                                            <td><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" ></td>
                                                                                                                        </tr>
                                                                                                                    </tbody>    
                                                                                                                </table>
                                                                                                            </td>

                                                                                                            <td class="text-center">
                                                                                                                <div class="list-icons">
                                                                                                                    <div class="dropdown">
                                                                                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                                                                            <a href="#" data-repeater-delete class="dropdown-item"> <i class="icon-trash mr-1"></i> Xoá đối tượng</a>
                                                                                                                            <a href="#"class="dropdown-item"> <i class="icon-alert mr-1"></i> Thông báo lỗi</a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                                <div class="border p-1 text-center">
                                                                                                    <input class="btn bg-danger" type="button" value="- Xoá nhiều" disabled>
                                                                                                </div>
                                                                                            </div>
                                                                                                
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row justify-content-end">
                                                                            <div class="col-md-5">
                                                                                <table class="table datatable"  
                                                                                    data-paging="false"
                                                                                    data-info="false"
                                                                                    data-ordering="false"
                                                                                    data-searching="false"
                                                                                    >
                                                                                    <thead class="thead-light">
                                                                                        <tr>
                                                                                            <th class="w25p all"></th>
                                                                                            <th class="text-center desktop"><b>Nhóm bảo hiểm</b></th>
                                                                                            <th class="text-center desktop"><b>Số tiền</b></th>
                                                                                            <th class="text-center desktop"><b>Tỉ lệ phí (%)</b></th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td><b><i class="far fa-sigma mr-1"></i>Tổng cộng:</b></td>
                                                                                            <td><input type="text" class="form-control input-money text-right" name="" placeholder="0"></td>
                                                                                            <td><input type="text" class="form-control input-money text-right" name="" placeholder="0"></td>
                                                                                            <td><input type="text" class="form-control input-float text-right" name="" placeholder="0"></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <table class="table datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                                                    <thead class="thead-light">
                                                                                        <tr>
                                                                                            <th class="w30p all"></th>
                                                                                            <th class="desktop">Số tiền bảo hiểm</th>
                                                                                            <th class="desktop">Phí bảo hiểm</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Phạm vi A</td>
                                                                                            <td><input type="text" class="form-control input-money text-right" name="" placeholder="0"></td>
                                                                                            <td><input type="text" class="form-control input-money text-right" name="" placeholder="0"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Phạm vi B</td>
                                                                                            <td><input type="text" class="form-control input-money text-right" name="" placeholder="0"></td>
                                                                                            <td><input type="text" class="form-control input-money text-right" name="" placeholder="0"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Phạm vi C</td>
                                                                                            <td><input type="text" class="form-control input-money text-right" name="" placeholder="0"></td>
                                                                                            <td><input type="text" class="form-control input-money text-right" name="" placeholder="0"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Phạm vi D</td>
                                                                                            <td><input type="text" class="form-control input-money text-right" name="" placeholder="0"></td>
                                                                                            <td><input type="text" class="form-control input-money text-right" name="" placeholder="0"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <b><i class="far fa-sigma mr-1"></i>Tổng cộng</b>
                                                                                                <b class="small">(A+B+C+D)</b>
                                                                                            </td>
                                                                                            <td><input type="text" class="form-control input-money text-right font-weight-bold" value="0" placeholder="0" ></td>
                                                                                            <td><input type="text" class="form-control input-money text-right font-weight-bold" value="0" placeholder="0" ></td>
                                                                                        </tr>
                                                                                        
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            
                                                                        </div>

                                                                    </fieldset>
                                                                    
                                                                    <!-- Step 4 -->
                                                                    <fieldset class="tab-pane" id="step4">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
                                                                            </div>
                                                                            
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label>Phạm vi bảo hiểm:</label>
                                                                                    <div>
                                                                                        <table class="table table-bordered datatable" 
                                                                                            data-paging="false"
                                                                                            data-info="false"
                                                                                            data-ordering="false"
                                                                                            data-searching="false"
                                                                                            >
                                                                                            <thead class="thead-light">
                                                                                                <tr>
                                                                                                    <th width="20%">Phạm vi bảo hiểm</th>
                                                                                                    <th width="10%">Số tiền bảo hiểm</th>
                                                                                                    <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                    <th width="5%" class="desktop">VAT (%)</th>
                                                                                                    <th width="10%" class="desktop">VAT</th>
                                                                                                    <th width="5%" class="desktop">COM (%)</th>
                                                                                                    <th width="10%" class="desktop">COM</th>
                                                                                                    <th width="20%" class="desktop">Định mức</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>1. Phạm vi A (Chết, tàn tật toàn bộ vĩnh viễn do ốm đau bệnh tật)</td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td>
                                                                                                        <select class="form-control " select2 name="dinh_muc" >
                                                                                                            <option>Bảo hiểm con nguời mức trách nhiệm cao (VNI Care)</option>    
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>2. Phạm vi B (Tai nạn cá nhân)</td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td>
                                                                                                        <select class="form-control " select2 name="dinh_muc" >
                                                                                                            <option>Bảo hiểm con nguời mức trách nhiệm cao (VNI Care)</option>
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>3. Phạm vi C (Trợ cấp nằm viện và phẫu thuật)</td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td>
                                                                                                        <select class="form-control " select2 name="dinh_muc" >
                                                                                                            <option>Bảo hiểm con nguời mức trách nhiệm cao (VNI Care)</option>
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>4. Phạm vi D (Điều trị ngoại trú do ốm bệnh)</td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td>
                                                                                                        <select class="form-control " select2 name="dinh_muc" >
                                                                                                            <option>Bảo hiểm con nguời mức trách nhiệm cao (VNI Care)</option> 
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th><b>Tổng cộng: </b></th>
                                                                                                    <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                                    <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                                    <th align="right"><input class="form-control text-right" type="text" disabled readonly value="10"></th>
                                                                                                    <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                                    <th align="right"><input class="form-control text-right" type="text" disabled readonly value="10.0"></th>
                                                                                                    <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                                    <th align="right"></th>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                                
                                                                                        </table>
                                                                                                
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
                                                                                                <th class="w70p">Quyền lợi</th>
                                                                                                <th class="w30p text-right">Phí BH có VAT</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Mức trách nhiệm của VNI</td>
                                                                                                <td class="text-right"><input class="form-control input-money text-right" type="text" value="0"></td>
                                                                                            </tr>
                                                                                            
                                                                                            <tr>
                                                                                                <td>Phạm vi A (Chết, tàn tật toàn bộ vĩnh viễn do ốm đau bệnh tật)</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            
                                                                                            <tr>
                                                                                                <td>Phạm vi B (Tai nạn cá nhân)</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Phạm vi C (Trợ cấp nằm viện và phẫu thuật)</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Phạm vi D (Điều trị ngoại trú do ốm bệnh)</td>
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
        <?php inc('modal/modal_ds_nguoi_tham_gia_bao_hiem.php'); ?> 
        <?php inc('modal/modal_ds_quyen_loi_bh.php'); ?> 

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

