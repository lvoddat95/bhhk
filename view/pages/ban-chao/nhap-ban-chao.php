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
                            <i class="linearicons-text-align-left font-size-m font-weight-bold"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH .'view/pages/ban-chao/danh-sach-ban-chao.php'; ?>" class="breadcrumb-item"><i class="icon-steering-wheel mr-1"></i>Danh sách bản chào</a>
                                <span class="breadcrumb-item active">Cập nhập bản chào</span>
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
                            <h4 class="font-weight-semibold"><i class="icon-bookmark mr-2"></i>Bản chào bảo hiểm xe cơ giới</h4>
                        </div>
                        <div class=" p-button">
                            <div class="dropdown d-inline-block mr-2">
                                <a href="#" class="list-icons-item dropdown-toggle caret-0 btn" data-toggle="dropdown"><i class="icon-gear spinner"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-check"></i>Trình duyệt</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i>Đóng đơn</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i>Tái tục đơn</a>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block mr-2">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-printer2"></i> IN</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i>Giấy yêu cầu BH</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i>Hợp đồng BH</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i>Bản chào phí BH</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i>Giấy chứng nhận BH</a>
                                </div>
                            </div>
                            
                            <a href="#" class="btn btn-labeled btn-labeled-left mr-2">
                                <b><i class="icon-files-empty"></i></b>Lưu & Copy
                            </a>
                            <a href="#" class="btn btn-labeled btn-labeled-left mr-2">
                                <b><i class="icon-file-plus"></i></b> Lưu & thêm mới
                            </a>
                            <a href="javascript:;" class="btn bg-primary"><i class="icon-floppy-disk mr-1"></i> Lưu</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <section class="input-don">
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h5 class="card-title font-size-s">Thông tin chung</h5>
                                        <div class="header-elements">
                                            <div class="list-icons">
                                                <a class="list-icons-item" data-action="collapse"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <?php inc('template/1_thong_tin_chung/hinh_thuc_khai_thac.php'); ?> 
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label>Số bản chào: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control required" name="so_don_bao_hiem" placeholder="Nhập số đơn bảo hiểm..." value="012000005/F02">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php inc('template/1_thong_tin_chung/nguoi_duoc_bao_hiem.php'); ?> 
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php inc('template/1_thong_tin_chung/sdt_chu_xe.php'); ?>
                                                </div>
                                                <div class="col-md-8">
                                                    <?php inc('template/1_thong_tin_chung/dia_chi_chu_xe.php'); ?>
                                                </div>
                                            </div>

                

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php inc('template/1_thong_tin_chung/ngay_cap.php'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <?php inc('template/1_thong_tin_chung/loai_tien.php'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <?php inc('template/1_thong_tin_chung/ti_gia_thuc_te.php'); ?>
                                                </div>
                                                
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h5 class="card-title font-size-s">Danh sách đối tượng bảo hiểm</h5>
                                        <div class="header-elements">
                                            <div class="list-icons">
                                                <a class="list-icons-item" data-action="collapse"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="ban_chao_list" class="table-list table table-bordered table-hover datatable" 
                                            data-paging="false" 
                                            data-info="false" 
                                            data-ordering="true" 
                                            data-searching="false" 
                                            data-page-length="-1">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th width="50px" data-orderable="false" class="text-center">STT</th>
                                                    <th>Biển số xe</th>
                                                    <th class="desktop">Hiệu xe</th>
                                                    <th class="desktop">Năm sản xuất</th>
                                                    <th class="min-tablet">Phí bảo hiểm</th>
                                                    <th class="min-tablet">VAT</th>
                                                    <th>Tổng phí thanh toán</th>
                                                    <th width="50px" data-orderable="false" class="text-center desktop">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-center">1</td>
                                                <td>30A07012</td>
                                                <td>BMW</td>
                                                <td>2019</td>
                                                <td>437,000</td>
                                                <td>43,700</td>
                                                <td>480,700</td>
                                                <td align="center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="<?php echo HTTP_PATH .'view/pages/nhap-don.php'; ?>" ><i class="icon-file-plus mr-1 text-success"></i> Tạo mới đơn BH</a>
                                                                <a class="dropdown-item" href="javascript:;" class="dropdown-item" data-toggle="modal" data-target="#modal_form" title="Xem chi tiết"><i class="icon-file-eye mr-1 text-primary"></i> Xem chi tiết</a>
                                                                <a class="dropdown-item" href="javascript:;" class="dropdown-item" title="Xóa đối tượng" onclick="_xoa_dong(this);"><b><i class="icon-trash mr-1 text-danger"></i></b> Xóa đối tượng</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>71C05150</td>
                                                    <td>Xe khác</td>
                                                    <td>2019</td>
                                                    <td>1,690,000</td>
                                                    <td>166,000</td>
                                                    <td>1,856,000</td>
                                                    <td align="center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="<?php echo HTTP_PATH .'view/pages/nhap-don.php'; ?>" ><i class="icon-file-plus mr-1 text-success"></i> Tạo mới đơn BH</a>
                                                                    <a class="dropdown-item" href="javascript:;" class="dropdown-item" data-toggle="modal" data-target="#modal_form" title="Xem chi tiết"><i class="icon-file-eye mr-1 text-primary"></i> Xem chi tiết</a>
                                                                    <a class="dropdown-item" href="javascript:;" class="dropdown-item" title="Xóa đối tượng" onclick="_xoa_dong(this);"><b><i class="icon-trash mr-1 text-danger"></i></b> Xóa đối tượng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>51C56843</td>
                                                    <td>FORD</td>
                                                    <td>2019</td>
                                                    <td>1,183,000</td>
                                                    <td>93,300</td>
                                                    <td>1,276,300</td>
                                                    <td align="center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="<?php echo HTTP_PATH .'view/pages/nhap-don.php'; ?>" ><i class="icon-file-plus mr-1 text-success"></i> Tạo mới đơn BH</a>
                                                                    <a class="dropdown-item" href="javascript:;" class="dropdown-item" data-toggle="modal" data-target="#modal_form" title="Xem chi tiết"><i class="icon-file-eye mr-1 text-primary"></i> Xem chi tiết</a>
                                                                    <a class="dropdown-item" href="javascript:;" class="dropdown-item" title="Xóa đối tượng" onclick="_xoa_dong(this);"><b><i class="icon-trash mr-1 text-danger"></i></b> Xóa đối tượng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="border p-1 text-center"><a href="" data-toggle="modal" data-target="#modal_form" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-plus2"></i></b> Thêm mới đối tượng</a></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                </div>

            </div>
            
        </div>

        <div class="modal-group">
            <!-- Modal  -->
            <div id="modal_form" class="modal fade" role="dialog" aria-labelledby="modal_form">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase font-weight-semibold color">THÔNG TIN ĐỐI TƯỢNG BẢO HIỂM</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- Form wzard with step validation section start -->
                            <section id="validation">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <form action="#" class="steps-validation wizard-notification">
                                                        
                                                         <!-- Step 3 -->
                                                        <h6>Đối tượng bảo hiểm</h6>
                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/muc_dich_su_dung.php'); ?>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/dong_xe.php'); ?>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/nhom_xe.php'); ?>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/loai_xe.php'); ?>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/nhan_hieu.php'); ?>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/so_loai.php'); ?>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/nguon_goc_xe.php'); ?>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/thang_sx.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/nam_sx.php'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-md-6">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/chua_co_bien.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/loai_bien.php'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/bien_kiem_soat.php'); ?>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/so_khung.php'); ?>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/mau_son.php'); ?>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/so_may.php'); ?>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/so_cho_ngoi.php'); ?>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/trong_tai.php'); ?>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/gia_tri_xe.php'); ?>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/xe_moi_100.php'); ?>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        
                                                        <!-- Step 4 -->
                                                        <h6>Phạm vi bảo hiểm</h6>
                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="collapse-group">
                                                                        <div class="p-title">Phạm vi bảo hiểm:</div>
                                                                        <div class="p-body collapse show">
                                                                            <div class="c-item">
                                                                                <div class="c-title">
                                                                                    <span class="button-switch no-label">
                                                                                        <input type="checkbox" id="vcxe" class="switch cls_ckb" name="ckbchild1">
                                                                                        <label for="vcxe" data-off="Không" data-on="Có"></label>
                                                                                    </span>
                                                                                    <a data-toggle="collapse" class="collapsed" href="#collapsible-item1">Vật chất xe</a>
                                                                                </div>
                                    
                                                                                <div id="collapsible-item1" class="collapse" datatable-collapse>
                                                                                    <div class="c-body">
                                                                                        
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
                                                                                                    <th width="5%" class="desktop">Phí (%)</th>
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
                                                                                                    <td><b>I. Vật chất xe </b></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="10"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td>
                                                                                                        <select class="form-control required " select2 name="dinh_muc" >
                                                                                                            <option id="1A0CB825-AF10-4E71-973D-47A14076CABD" value="1A0CB825-AF10-4E71-973D-47A14076CABD"
                                                                                                                title="Xe cơ giới khác">Xe cơ giới khác</option>
                                                                                                            <option id="A43D9544-9201-490D-8087-A99CC3A6D906" value="A43D9544-9201-490D-8087-A99CC3A6D906"
                                                                                                                title="Biển xanh, biển đỏ, biển nước ngoài">Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                            <option id="506CE15B-BC49-4F11-899A-7E950EC8A456" value="506CE15B-BC49-4F11-899A-7E950EC8A456"
                                                                                                                title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>15 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                            <option id="9A3B6724-5296-4AC1-A93F-D86E5E3439FB" value="9A3B6724-5296-4AC1-A93F-D86E5E3439FB"
                                                                                                                title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;10 tuổi kể từ ngày SX</option>
                                                                                                            <option id="98BDBF21-0466-4BA7-8464-7455F86D7E81" value="98BDBF21-0466-4BA7-8464-7455F86D7E81"
                                                                                                                title="Xe cơ giới khai thác qua Ngân hàng, show room">Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                            <option id="27292D06-61D1-4EE9-8417-AEF6FADD987B" value="27292D06-61D1-4EE9-8417-AEF6FADD987B" title="Xe tải">Xe tải
                                                                                                            </option>
                                                                                                        
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table class="table table-bordered datatable"
                                                                                            style="margin-top: -1px;"
                                                                                            data-paging="false"
                                                                                            data-info="false"
                                                                                            data-ordering="false"
                                                                                            data-searching="false"
                                                                                        >
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th width="20%">
                                                                                                        <b>II. Điều khoản sửa đổi bổ sung</b>
                                                                                                    </th>
                                                                                                    <th width="10%" class="desktop "></th>
                                                                                                    <th width="5%" desktop-10></th>
                                                                                                    <th width="10%" class="desktop "></th>
                                                                                                    <th width="5%" class="desktop "></th>
                                                                                                    <th width="10%" class="desktop "></th>
                                                                                                    <th width="5%" class="desktop "></th>
                                                                                                    <th width="10%" class="desktop "></th>
                                                                                                    <th width="20%" class="desktop "></th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="dkbs">
                                                                                                            <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS01">
                                                                                                            <label class="mb-0" for="BS01">BS01 - Bảo hiểm thay thế mới (bảo hiểm mới thay cũ)</label>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="dkbs">
                                                                                                            <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS02">
                                                                                                            <label class="mb-0" for="BS02">BS02 - Bảo hiểm lựa chọn cơ sở sửa chữa chính hãng</label>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0.16"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td >
                                                                                                        <div class="dkbs">
                                                                                                            <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS03">
                                                                                                            <label class="mb-0" for="BS03">BS03 - Bảo hiểm thuê xe trong thời gian sửa chữa (bảo hiểm gián đoạn sử dụng xe)</label>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0.08"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="dkbs">
                                                                                                            <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS04">
                                                                                                            <label class="mb-0" for="BS04">BS04 - Bảo hiểm đối với xe miễn thuế, tạm nhập, tái xuất</label>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0.06"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="dkbs">
                                                                                                            <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS05">
                                                                                                            <label class="mb-0" for="BS05">BS05 - Bảo hiểm vật chất xe cơ giới ngoài lãnh thổ Việt Nam (Trung Quốc, Lào, Cămpuchia và Thái Lan)</label>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0.08"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="dkbs">
                                                                                                            <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS06">
                                                                                                            <label class="mb-0" for="BS06">BS06 - Bảo hiểm tổn thất do Thủy kích</label>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0.08"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="dkbs">
                                                                                                            <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS07">
                                                                                                            <label class="mb-0" for="BS07">BS07 - Bảo hiểm vật chất xe cơ giới lưu hành tạm thời</label>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0.08"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="dkbs">
                                                                                                            <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS08">
                                                                                                            <label class="mb-0" for="BS08">BS08 - Bảo hiểm mất bộ phận</label>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0.16"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="dkbs">
                                                                                                            <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS09">
                                                                                                            <label class="mb-0" for="BS09">BS09 - Bảo hiểm xe tập lái</label>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0.08"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="dkbs">
                                                                                                            <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS10">
                                                                                                            <label class="mb-0" for="BS10">BS10 - Bảo hiểm tổn thất xảy ra trong quá trình hoạt động của thiết bị chuyên dùng</label>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0.1"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="dkbs">
                                                                                                            <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS11">
                                                                                                            <label class="mb-0" for="BS11">BS11 - Các điều khỏan thỏa thuận bổ sung khác</label>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0.04"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td></td>
                                                                                                    <td></td>
                                                                                                    <td align="right"><input class="form-control text-danger text-right" type="text" disabled value="0.04"></td>
                                                                                                    <td align="right"><input class="form-control text-danger text-right" type="text" disabled value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table class="table table-bordered datatable table-total" style="margin-top: -1px;"
                                                                                            data-paging="false"
                                                                                            data-info="false"
                                                                                            data-ordering="false"
                                                                                            data-searching="false"
                                                                                        >
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th width="20%"><b>Tổng cộng: </b></th>
                                                                                                    <th width="10%">Số tiền bảo hiểm</th>
                                                                                                    <th width="5%" class="desktop">Phí (%)</th>
                                                                                                    <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                    <th width="5%" class="desktop">VAT (%)</th>
                                                                                                    <th width="10%" class="desktop">VAT</th>
                                                                                                    <th width="5%" class="desktop">COM (%)</th>
                                                                                                    <th width="10%" class="desktop">COM</th>
                                                                                                    <th width="20%" class="desktop"></th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0.99"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="10"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="10.0"></td>
                                                                                                    <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td>
                                                                                                    <td align="right"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="c-item">
                                                                                <div class="c-title">
                                                                                    <span class="button-switch no-label">
                                                                                        <input type="checkbox" id="tndstn" class="switch cls_ckb" name="ckbchild2">
                                                                                        <label for="tndstn" data-off="Không" data-on="Có"></label>
                                                                                    </span>
                                                                                    <a class="collapsed " data-toggle="collapse" href="#collapsible-item2">TNDS tự nguyện</a>
                                                                                </div>
                                                                                <div id="collapsible-item2" class="collapse" datatable-collapse>
                                                                                    <div class="c-body">
                                                                                        <table class="table table-bordered datatable" style="margin-bottom: 0;"
                                                                                            data-paging="false"
                                                                                            data-info="false"
                                                                                            data-ordering="false"
                                                                                            data-searching="false"
                                                                                        >
                                                                                            <thead class="thead-light">
                                                                                                <tr>
                                                                                                    <th width="15%">Quyền lợi</th>
                                                                                                    <th width="15%">Số tiền bảo hiểm</th>
                                                                                                    <th width="5%" class="desktop">Phí (%)</th>
                                                                                                    <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                    <th width="5%" class="desktop">VAT (%)</th>
                                                                                                    <th width="10%" class="desktop">VAT</th>
                                                                                                    <th width="5%" class="desktop">COM (%)</th>
                                                                                                    <th width="10%" class="desktop">COM</th>
                                                                                                    <th  style="max-width: 280px;" width="20%" class="desktop">Định mức</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><b>TNDS tự nguyện về người</b></td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right input-money" style="display: inline-block; width: calc(100% - 65px);"  type="text"  value="0" >
                                                                                                        <span style="width: 62px;">(/người/vụ)</span>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right input-float" style="color: red;" type="text" value="0" >
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right input-money" type="text"  value="0" >
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right" disabled="disabled" readonly="readonly" value="10">
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right input-money" type="text"  value="0" >
                                                                                                    </td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0"></td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right input-money" type="text" value="0" >
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <select class="form-control required " select2 name="dinh_muc" >
                                                                                                            <option id="1A0CB825-AF10-4E71-973D-47A14076CABD" value="1A0CB825-AF10-4E71-973D-47A14076CABD"
                                                                                                                title="Xe cơ giới khác">Xe cơ giới khác</option>
                                                                                                            <option id="A43D9544-9201-490D-8087-A99CC3A6D906" value="A43D9544-9201-490D-8087-A99CC3A6D906"
                                                                                                                title="Biển xanh, biển đỏ, biển nước ngoài">Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                            <option id="506CE15B-BC49-4F11-899A-7E950EC8A456" value="506CE15B-BC49-4F11-899A-7E950EC8A456"
                                                                                                                title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>15 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                            <option id="9A3B6724-5296-4AC1-A93F-D86E5E3439FB" value="9A3B6724-5296-4AC1-A93F-D86E5E3439FB"
                                                                                                                title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;10 tuổi kể từ ngày SX</option>
                                                                                                            <option id="98BDBF21-0466-4BA7-8464-7455F86D7E81" value="98BDBF21-0466-4BA7-8464-7455F86D7E81"
                                                                                                                title="Xe cơ giới khai thác qua Ngân hàng, show room">Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                            <option id="27292D06-61D1-4EE9-8417-AEF6FADD987B" value="27292D06-61D1-4EE9-8417-AEF6FADD987B" title="Xe tải">Xe tải
                                                                                                            </option>
                                                                                                        
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                
                                                                                                <tr>
                                                                                                    <td><b>TNDS tự nguyện về tài sản</b></td>
                                                                                                    <td>
                                                                                                        <div class="d-flex">
                                                                                                            <input class="form-control text-right input-money" style="display: inline-block; width: calc(100% - 65px);" type="text" value="0">
                                                                                                            <span style="width: 62px;"> (/vụ)</span>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right input-float" style="color: red;" type="text" value="0" >
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right input-money" type="text"  value="0" >
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right" disabled="disabled" readonly="readonly" value="10">
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right input-money" type="text"  value="0" >
                                                                                                    </td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0"></td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right input-money" type="text" value="0" >
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <select class="form-control required " select2 name="dinh_muc" >
                                                                                                            <option id="1A0CB825-AF10-4E71-973D-47A14076CABD" value="1A0CB825-AF10-4E71-973D-47A14076CABD"
                                                                                                                title="Xe cơ giới khác">Xe cơ giới khác</option>
                                                                                                            <option id="A43D9544-9201-490D-8087-A99CC3A6D906" value="A43D9544-9201-490D-8087-A99CC3A6D906"
                                                                                                                title="Biển xanh, biển đỏ, biển nước ngoài">Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                            <option id="506CE15B-BC49-4F11-899A-7E950EC8A456" value="506CE15B-BC49-4F11-899A-7E950EC8A456"
                                                                                                                title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>15 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                            <option id="9A3B6724-5296-4AC1-A93F-D86E5E3439FB" value="9A3B6724-5296-4AC1-A93F-D86E5E3439FB"
                                                                                                                title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;10 tuổi kể từ ngày SX</option>
                                                                                                            <option id="98BDBF21-0466-4BA7-8464-7455F86D7E81" value="98BDBF21-0466-4BA7-8464-7455F86D7E81"
                                                                                                                title="Xe cơ giới khai thác qua Ngân hàng, show room">Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                            <option id="27292D06-61D1-4EE9-8417-AEF6FADD987B" value="27292D06-61D1-4EE9-8417-AEF6FADD987B" title="Xe tải">Xe tải
                                                                                                            </option>
                                                                                                        
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><b>Tổng cộng: </b></td>
                                                                                                    <td align="right"><b>0</b></td>
                                                                                                    <td align="right"><b>0</b></td>
                                                                                                    <td align="right"><b>0</b></td>
                                                                                                    <td align="right"></td>
                                                                                                    <td align="right"><b>0</b></td>
                                                                                                    <td align="right"><b>0</b></td>
                                                                                                    <td align="right"><b>0</b></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                            
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
            
                                                                            <div class="c-item">
                                                                                <div class="c-title">
                                                                                    <span class="button-switch no-label">
                                                                                        <input type="checkbox" id="tnlpx" class="switch cls_ckb" name="ckbchild3">
                                                                                        <label for="tnlpx" data-off="Không" data-on="Có"></label>
                                                                                    </span>
                                                                                    <a class="collapsed " data-toggle="collapse" href="#collapsible-item3">Tai nạn lái, phụ xe và người ngồi trên xe</a>
                                                                                </div>
                                                                                <div id="collapsible-item3" class="collapse" datatable-collapse>
                                                                                    <div class="c-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-2">
                                                                                                <div class="form-group">
                                                                                                    <label>Số người tham gia: <span class="text-danger">*</span></label>
                                                                                                    <input type="text" class="form-control" name="so_nguoi_tham_gia" placeholder="Nhập số người tham gia..." value="0" >
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <table class="table table-bordered datatable"
                                                                                            data-paging="false"
                                                                                            data-info="false"
                                                                                            data-ordering="false"
                                                                                            data-searching="false"
                                                                                        >
                                                                                            <thead class="thead-light">
                                                                                                <tr>
                                                                                                    <th width="15%">Quyền lợi</th>
                                                                                                    <th width="15%">Số tiền bảo hiểm</th>
                                                                                                    <th width="5%" class="desktop">Phí (%)</th>
                                                                                                    <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                    <th width="5%" class="desktop">VAT (%)</th>
                                                                                                    <th width="10%" class="desktop">VAT</th>
                                                                                                    <th width="5%" class="desktop">COM (%)</th>
                                                                                                    <th width="10%" class="desktop">COM</th>
                                                                                                    <th  style="max-width: 280px;" width="20%" class="desktop">Định mức</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><b>Tai nạn lái, phụ xe và người ngồi trên xe </b></td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right" style="display: inline-block; width: calc(100% - 65px);" type="text" value="0" >
                                                                                                        <span style="width: 62px;">(/người/vụ)</span>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-left" style="color: red;" type="text" value="0" >
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right" type="text" value="0">
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="0">
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right" type="text" value="0">
                                                                                                    </td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0"></td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right input-money" type="text" value="0" >
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <select class="form-control required " select2 name="dinh_muc" >
                                                                                                            <option id="1A0CB825-AF10-4E71-973D-47A14076CABD" value="1A0CB825-AF10-4E71-973D-47A14076CABD"
                                                                                                                title="Xe cơ giới khác">Xe cơ giới khác</option>
                                                                                                            <option id="A43D9544-9201-490D-8087-A99CC3A6D906" value="A43D9544-9201-490D-8087-A99CC3A6D906"
                                                                                                                title="Biển xanh, biển đỏ, biển nước ngoài">Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                            <option id="506CE15B-BC49-4F11-899A-7E950EC8A456" value="506CE15B-BC49-4F11-899A-7E950EC8A456"
                                                                                                                title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>15 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                            <option id="9A3B6724-5296-4AC1-A93F-D86E5E3439FB" value="9A3B6724-5296-4AC1-A93F-D86E5E3439FB"
                                                                                                                title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;10 tuổi kể từ ngày SX</option>
                                                                                                            <option id="98BDBF21-0466-4BA7-8464-7455F86D7E81" value="98BDBF21-0466-4BA7-8464-7455F86D7E81"
                                                                                                                title="Xe cơ giới khai thác qua Ngân hàng, show room">Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                            <option id="27292D06-61D1-4EE9-8417-AEF6FADD987B" value="27292D06-61D1-4EE9-8417-AEF6FADD987B" title="Xe tải">Xe tải
                                                                                                            </option>
                                                                                                        
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
            
                                                                            <div class="c-item">
                                                                                <div class="c-title">
                                                                                    <span class="button-switch no-label">
                                                                                        <input type="checkbox" id="tndsbb" class="switch cls_ckb" name="ckbchild4">
                                                                                        <label for="tndsbb" data-off="Không" data-on="Có"></label>
                                                                                    </span>
                                                                                    <a class="collapsed " data-toggle="collapse" href="#collapsible-item4">TNDS bắt buộc</a>
                                                                                </div>
                                                                                <div id="collapsible-item4" class="collapse" datatable-collapse>
                                                                                    <div class="c-body">
                                                                                        <div class="row mb-3">
                                                                                            <div class="col-md-4">
                                                                                                <label>Thời hạn bảo hiểm: <span class="text-danger">*</span></label>
                                                                                                <div class="d-flex mb-2">
                                                                                                    <span style="width: 100px;">Từ</span>
                                                                                                    <input type="time" class="form-control mr-2" step="width: 100px;">
                                                                                                    <input type="text" class="form-control datepicker input-date" placeholder="dd/mm/yyyy">
                                                                                                </div>
                                                                                                <div class="d-flex">
                                                                                                    <span style="width: 100px;">Đến</span>
                                                                                                    <input type="time" class="form-control mr-2" step="width: 100px;">
                                                                                                    <input type="text" class="form-control datepicker input-date" placeholder="dd/mm/yyyy">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                                <label>Số GCNBH: <span class="text-danger">*</span></label>
                                                                                                <input type="text" class="form-control" placeholder="Nhập số giấy chứng nhận...">
                                                                                            </div>
                                                                                        </div>
                                                                                        <table class="table table-bordered datatable"
                                                                                            data-paging="false"
                                                                                            data-info="false"
                                                                                            data-ordering="false"
                                                                                            data-searching="false"
                                                                                        >
                                                                                            <thead class="thead-light">
                                                                                                <tr>
                                                                                                    <th width="10%">Quyền lợi</th>
                                                                                                    <th width="20%">Số tiền bảo hiểm</th>
                                                                                                    <th width="5%" class="desktop">Phí (%)</th>
                                                                                                    <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                    <th width="5%" class="desktop">VAT (%)</th>
                                                                                                    <th width="10%" class="desktop">VAT</th>
                                                                                                    <th width="5%" class="desktop">COM (%)</th>
                                                                                                    <th width="10%" class="desktop">COM</th>
                                                                                                    <th  style="max-width: 280px;" width="20%" class="desktop">Định mức</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><b style="text-transform: uppercase;">TNDS bắt buộc </b></td>
                                                                                                    <td>
                                                                                                        <b>TNDS về người: 100tr/người/vụ</b>
                                                                                                        <br>
                                                                                                        <b>TNDS về tài sản: 100tr/vụ</b>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right" style="color: red;" type="text" value="0">
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right" type="text" value="100,000,000" >
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="10" >
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right" type="text"value="0" >
                                                                                                    </td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="5.0"></td>
                                                                                                    <td>
                                                                                                        <input class="form-control text-right input-money" type="text" value="0" >
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <select class="form-control required " select2 name="dinh_muc" >
                                                                                                            <option id="1A0CB825-AF10-4E71-973D-47A14076CABD" value="1A0CB825-AF10-4E71-973D-47A14076CABD"
                                                                                                                title="Xe cơ giới khác">Xe cơ giới khác</option>
                                                                                                            <option id="A43D9544-9201-490D-8087-A99CC3A6D906" value="A43D9544-9201-490D-8087-A99CC3A6D906"
                                                                                                                title="Biển xanh, biển đỏ, biển nước ngoài">Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                            <option id="506CE15B-BC49-4F11-899A-7E950EC8A456" value="506CE15B-BC49-4F11-899A-7E950EC8A456"
                                                                                                                title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>15 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                            <option id="9A3B6724-5296-4AC1-A93F-D86E5E3439FB" value="9A3B6724-5296-4AC1-A93F-D86E5E3439FB"
                                                                                                                title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;10 tuổi kể từ ngày SX</option>
                                                                                                            <option id="98BDBF21-0466-4BA7-8464-7455F86D7E81" value="98BDBF21-0466-4BA7-8464-7455F86D7E81"
                                                                                                                title="Xe cơ giới khai thác qua Ngân hàng, show room">Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                            <option id="27292D06-61D1-4EE9-8417-AEF6FADD987B" value="27292D06-61D1-4EE9-8417-AEF6FADD987B" title="Xe tải">Xe tải
                                                                                                            </option>
                                                                                                        
                                                                                                        </select>
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
                                                                <div class="col-md-6">
                                                                    <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_dai_li.php'); ?>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_moi_gioi.php'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <?php inc('template/4_pham_vi_bao_hiem/loai_mien_thuong.php'); ?>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <?php inc('template/4_pham_vi_bao_hiem/so_tien_mien_thuong.php'); ?>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <?php inc('template/4_pham_vi_bao_hiem/so_tien_giam_mien_thuong.php'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="col-md-12">
                                                                    <b><label>Lịch thanh toán bảo hiểm: </label></b>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <table class="table table-bordered" style="margin: auto;">
                                                                        <colgroup>
                                                                            <col width="70%">
                                                                            <col width="30%">
                                                                        </colgroup>
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th width="70%">Quyền lợi</th>
                                                                                <th class="text-right" width="30%">Phí BH có VAT</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Vật chất xe </td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td>Điều khoản bổ sung</td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Số tiền giảm miễn thường</td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td>TNDS tự nguyện về người</td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td>TNDS tự nguyện về tài sản </td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td>Tai nạn lái, phụ xe và người ngồi trên xe </td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td>TNDS bắt buộc </td>
                                                                                <td class="text-right" >0</td>
                                                                            </tr>
                                                                            
                                                                            <tr class="bold" style="background-color: #fff;">
                                                                                <td>Tổng phí BH</td>
                                                                                <td><input class="form-control text-right" type="text" disabled="" readonly="" value="0"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="col-md-8">
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
                                                        
                                                    </form>
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
            </div>
            <!-- /Modal  -->

            <!-- Danh sách files -->
            <div id="ds_files" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="file-manager">
                            <div class="f-left">
                                <div class="f-left-wrapper">
                                    <ul class="nav nav-file nav-sidebar">
                                        <li class="nav-item-header"><span>Danh sách files</span></li>
                                        <li class="nav-item nav-item-submenu nav-item-open">
                                            <a href="#" class="nav-link"><i class="icon-folder-open3"></i><span>Tất cả</span></a> 
                                            <ul class="nav nav-group-sub">
                                                <li class="nav-item"> <a href="#" class="nav-link"><i class="icon-file-text2"></i><span>Tài liệu</span></a> </li>
                                                <li class="nav-item"> <a href="#" class="nav-link"><i class="icon-file-picture"></i><span>Hình ảnh</span></a> </li>
                                                <li class="nav-item"> <a href="#" class="nav-link"><i class="icon-file-video"></i><span>Video</span></a> </li>
                                                <li class="nav-item"> <a href="#" class="nav-link"><i class="icon-file-music"></i><span>Âm thanh</span></a> </li>
                                                <li class="nav-item"> <a href="#" class="nav-link"><i class="icon-file-zip"></i><span>File nén</span></a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="f-right grid">
                                <div class="file-header d-flex justify-content-between">
                                    <div class="file-view">
                                        <button class="btn btn-light btn-sm" onclick="list_view(this)" title="List"><i class="icon-list2"></i></button>
                                        <button class="btn btn-light btn-sm" onclick="grid_view(this)" title="Grid"><i class="icon-grid2"></i></button>
                                    </div>
                                    <div class="file-search">
                                        <input type="text" name="" class="form-control form-control-sm" placeholder="Tìm kiếm...">
                                        <button type="submit"><i class="icon-search4"></i></button>
                                    </div>
                                </div>
                                <ul class="list-files scrollbar-light">
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-txt"></span>
                                            <div class="file-info">
                                                <span class="name">Text.txt</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">13 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/image2.jpg) " class="file-icon"></span>
                                            <div class="file-info">
                                                <span class="name">preview-15.jpg</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-audio"></span>
                                            <div class="file-info">
                                                <span class="name">Celine Dion - Ashes.mp4</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/image.png) " class="file-icon file-txt"></span>
                                            <div class="file-info">
                                                <span class="name">preview-11.jpg</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/image.png)" class="file-icon file-image"></span>
                                            <div class="file-info">
                                                <span class="name">preview.png</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.1 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/image3.jpg)" class="file-icon file-image"></span>
                                            <div class="file-info">
                                                <span class="name">Copy preview-11.jpg</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">890.50 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/excel.png)" class="file-icon file-excel"></span>
                                            <div class="file-info">
                                                <span class="name">Excel Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">520.12 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/excel.png)" class="file-icon file-excel"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Excel Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">520.12 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/pdf.png)" class="file-icon file-pdf"></span>
                                            <div class="file-info">
                                                <span class="name">PDF Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">120.12 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/arc.png)" class="file-icon file-arc"></span>
                                            <div class="file-info">
                                                <span class="name">ZIP Archive</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">20.05 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/pp.png)" class="file-icon file-pp"></span>
                                            <div class="file-info">
                                                <span class="name">PPTX Sample File</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">245.05 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-audio"></span>
                                            <div class="file-info">
                                                <span class="name">Secret.mp4</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">5.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-audio"></span>
                                            <div class="file-info">
                                                <span class="name">Martin Clo - MM.mp4</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">4.1 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.1 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">19.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-txt"></span>
                                            <div class="file-info">
                                                <span class="name">Text Sample.txt</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">53 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-video"></span>
                                            <div class="file-info">
                                                <span class="name">Video Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">119 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-csv"></span>
                                            <div class="file-info">
                                                <span class="name">CSV Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">89.21 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">19.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">19.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-xps"></span>
                                            <div class="file-info">
                                                <span class="name">XPX Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">9.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    
                                    
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Danh sách files -->
        </div>

        <!-- Danh sách người tham gia bảo hiểm -->
        <div id="ds_nguoi_tham_gia_bao_hiem" class="modal fade" tabindex="-1" datatable-modal>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ont-weight-semibold ">Danh sách người tham gia bảo hiểm</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <form action="#">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group ">
                                        <label class="mb-0">Tên người được BH </label>
                                        <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Ký hiệu</label>
                                        <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Ấn chỉ</label>
                                        <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">&nbsp;</label>
                                        <div>
                                            <a href="#" class="btn bg-primary"> <i class="icon-search4 mr-2"></i>Tìm kiếm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-sm-4">
                                    <button class="btn btn-light btn-file mr-3">
                                        <i class="icon-upload7 mr-2"></i> 
                                        <span class="hidden-xs">Import file</span>
                                        <input type="file" class="file-input-preview">
                                    </button>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 d-flex align-items-center"><span class="text-danger">Nhấn vào browser để upload dữ liệu từ excel.</span> <a href="" download class="text-primary">(Nhấn vào đây để tải file mẫu)</a></p>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered datatable"  
                                            data-paging="false"
                                            data-info="false"
                                            data-ordering="false"
                                            data-searching="false"
                                            >
                                            <thead class="thead-light">
                                                <th width="30px">#</th>
                                                <th>Người được BH</th>
                                                <th>Ấn chỉ</th>
                                                <th>Địa chỉ</th>
                                                <th>Ngày cấp</th>
                                                <th>Ngày thu phí</th>
                                                <th>Hiệu lực từ ngày</th>
                                                <th>Đến ngày</th>
                                                <th>Số tiền BH</th>
                                                <th>Phí BH</th>
                                                <th>Phí bổ sung</th>
                                                <th>Ghi chú</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn bg-primary"><i class="icon-floppy-disk mr-1"></i>Ghi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- / Danh sách người tham gia bảo hiểm -->

        <?php inc('chat-box.php'); ?> 
        <?php inc('quick-action.php'); ?> 

        <?php inc('modal/modal_ds_so_hop_dong_xin_cap.php'); ?>
        <div class="modal-group">
            <?php
                inc('modal/modal_ds_cac_khach_hang.php'); 
                inc('modal/modal_cap_nhap_thong_tin_khach_hang.php'); 
            ?>
        </div>


    </body>

<?php include_once FOOTER; ?>