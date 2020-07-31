<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>

    <body class="sidebar-xs">

        <div class="page-content">

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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i> F02 - Bảo hiểm ô tô</a>
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
                                                        <form action="#" class="steps-validation wizard-notification">
                                                            <!-- Bước 1 -->
                                                            <h6>Thông tin chung</h6>
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-xl-3 col-lg-2 col-md-6">
                                                                        <?php inc('template/1_thong_tin_chung/kenh_khai_thac.php'); ?> 
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg-2 col-md-6">
                                                                        <?php inc('template/1_thong_tin_chung/hinh_thuc_khai_thac.php'); ?> 
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                                                        <?php inc('template/1_thong_tin_chung/so_don_bao_hiem.php'); ?> 
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                                                        <?php inc('template/1_thong_tin_chung/so_gcnbh.php'); ?> 
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
                                                                        <?php inc('template/1_thong_tin_chung/ten_chu_xe.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/1_thong_tin_chung/sdt_chu_xe.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/1_thong_tin_chung/so_cmt_chu_xe.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <?php inc('template/1_thong_tin_chung/dia_chi_chu_xe.php'); ?>
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
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/1_thong_tin_chung/loai_tien.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/1_thong_tin_chung/ti_gia_thuc_te.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <?php inc('template/1_thong_tin_chung/tai_bao_hiem.php'); ?>

                                                                        <?php inc('template/1_thong_tin_chung/dong_bao_hiem.php'); ?>
                                                                    </div>
                                                                </div>
                                                            </fieldset>

                                                            <!-- Step 2 -->
                                                            <h6>Trung gian bảo hiểm</h6>
                                                            <fieldset>
                                                                <div id="daili" class="row" >
                                                                    <div class="col-md-7">
                                                                        <?php inc('template/2_trung_gian_bao_hiem/dai_li.php'); ?>
                                                                    </div>
                                                                </div>

                                                                <div id="moigioi" class="row" >
                                                                    <div class="col-md-7">
                                                                        <?php inc('template/2_trung_gian_bao_hiem/moi_gioi.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <?php inc('template/2_trung_gian_bao_hiem/hoa_hong_moi_gioi.php'); ?>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <?php inc('template/2_trung_gian_bao_hiem/vay_qua_ngan_hang.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <?php inc('template/2_trung_gian_bao_hiem/nguon_dich_vu.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <?php inc('template/2_trung_gian_bao_hiem/chi_tiet_nguon_dich_vu.php'); ?>
                                                                    </div>
                                                                </div>

                                                                <?php inc('template/2_trung_gian_bao_hiem/ngan_hang.php'); ?>

                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <?php inc('template/2_trung_gian_bao_hiem/phoi_hop_khai_thac.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <?php inc('template/2_trung_gian_bao_hiem/hinh_thuc_phoi_hop.php'); ?>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            
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
                                                                                                        <th class="desktop w20p">Quyền lợi</th>
                                                                                                        <th class="desktop w10p">Số tiền bảo hiểm</th>
                                                                                                        <th class="desktop w5p">Phí (%)</th>
                                                                                                        <th class="desktop w10p">Phí BH (có VAT)</th>
                                                                                                        <th class="desktop w5p">VAT (%)</th>
                                                                                                        <th class="desktop w10p">VAT</th>
                                                                                                        <th class="desktop w5p">COM (%)</th>
                                                                                                        <th class="desktop w10p">COM</th>
                                                                                                        <th class="desktop w20p">Định mức</th>
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
                                                                                                                <option>Xe cơ giới khác</option>
                                                                                                                <option>Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX</option>
                                                                                                                <option>Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                <option>Xe tải</option>
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
                                                                                                        <th class="desktop w20p"><b>II. Điều khoản sửa đổi bổ sung</b></th>
                                                                                                        <th class="desktop w10p"></th>
                                                                                                        <th class="desktop w5p"></th>
                                                                                                        <th class="desktop w10p"></th>
                                                                                                        <th class="desktop w5p"></th>
                                                                                                        <th class="desktop w10p"></th>
                                                                                                        <th class="desktop w5p"></th>
                                                                                                        <th class="desktop w10p"></th>
                                                                                                        <th class="desktop w20p"></th>
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
                                                                                                        <th class="desktop w20p"><b>Tổng cộng: </b></th>
                                                                                                        <th class="desktop w10p">Số tiền bảo hiểm</th>
                                                                                                        <th class="desktop w5p">Phí (%)</th>
                                                                                                        <th class="desktop w10p">Phí BH (có VAT)</th>
                                                                                                        <th class="desktop w5p">VAT (%)</th>
                                                                                                        <th class="desktop w10p">VAT</th>
                                                                                                        <th class="desktop w5p">COM (%)</th>
                                                                                                        <th class="desktop w10p">COM</th>
                                                                                                        <th class="desktop w20p">Định mức</th>
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
                                                                                                        <th class="desktop w15p">Quyền lợi</th>
                                                                                                        <th class="desktop w15p">Số tiền bảo hiểm</th>
                                                                                                        <th class="desktop w5p">Phí (%)</th>
                                                                                                        <th class="desktop w10p">Phí BH (có VAT)</th>
                                                                                                        <th class="desktop w5p">VAT (%)</th>
                                                                                                        <th class="desktop w10p">VAT</th>
                                                                                                        <th class="desktop w5p">COM (%)</th>
                                                                                                        <th class="desktop w10p">COM</th>
                                                                                                        <th class="desktop w20p">Định mức</th>
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
                                                                                                                <option>Xe cơ giới khác</option>
                                                                                                                <option>Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX</option>
                                                                                                                <option>Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                <option>Xe tải</option>
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
                                                                                                        <th class="desktop w15p">Quyền lợi</th>
                                                                                                        <th class="desktop w15p">Số tiền bảo hiểm</th>
                                                                                                        <th class="desktop w5p">Phí (%)</th>
                                                                                                        <th class="desktop w10p">Phí BH (có VAT)</th>
                                                                                                        <th class="desktop w5p">VAT (%)</th>
                                                                                                        <th class="desktop w10p">VAT</th>
                                                                                                        <th class="desktop w5p">COM (%)</th>
                                                                                                        <th class="desktop w10p">COM</th>
                                                                                                        <th class="desktop w20p">Định mức</th>
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
                                                                                                                <option>Xe cơ giới khác</option>
                                                                                                                <option>Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX</option>
                                                                                                                <option>Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                <option>Xe tải</option>
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
                                                                                                        <th class="desktop w10p">Quyền lợi</th>
                                                                                                        <th class="desktop w20p">Số tiền bảo hiểm</th>
                                                                                                        <th class="desktop w5p">Phí (%)</th>
                                                                                                        <th class="desktop w10p">Phí BH (có VAT)</th>
                                                                                                        <th class="desktop w5p">VAT (%)</th>
                                                                                                        <th class="desktop w10p">VAT</th>
                                                                                                        <th class="desktop w5p">COM (%)</th>
                                                                                                        <th class="desktop w10p">COM</th>
                                                                                                        <th class="desktop w20p">Định mức</th>
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
                                                                                                                <option>Xe cơ giới khác</option>
                                                                                                                <option>Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX</option>
                                                                                                                <option>Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                <option>Xe tải</option>
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
                                                                        <table class="table table-bordered">
                                                                            <thead class="thead-light">
                                                                                <tr>
                                                                                    <th class="w70p">Quyền lợi</th>
                                                                                    <th class="w30p text-right">Phí BH có VAT</th>
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
                    <!-- /Content-block -->

                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                
                </div>
                <!-- /content -->

            </div>
            <!-- /content-wrapper -->
        </div>
        <!-- /page-content -->

        <?php inc('chat-box.php'); ?> 
        <?php inc('quick-action.php'); ?> 

        <?php inc('modal/modal_ds_so_hop_dong_xin_cap.php'); ?> 
        <div class="modal-group">
            <?php
                inc('modal/modal_ds_cac_khach_hang.php'); 
                inc('modal/modal_cap_nhap_thong_tin_khach_hang.php'); 
            ?>
        </div>
        <?php inc('modal/modal_ds_files.php'); ?> 
        


    </body>

<?php include_once FOOTER; ?>            
        </div> 