<?php require_once '../../config.php'; ?>
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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i> Trang chủ</a>
                                <span class="breadcrumb-item active">Danh sách địa điểm</span>
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
                            <p class="font-weight-semibold font-size-m mb-0">Danh sách địa điểm</p>
                        </div>
                        <div class="p-button">
                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                            <a href="" class="btn mr-1"><i class="fa fa-trash mr-1"></i> Xoá</a>
                            <a href="<?php echo HTTP_PATH .'view/pages/nhap-dia-diem.php'; ?>" class="btn bg-primary btn-labeled btn-labeled-left mr-1"><b><i class="icon-plus2"></i></b> Thêm mới</a>
                        </div>
                    </div>

                    <!-- Content-block -->
                    <div class="content-block">

                        <div class="card">
                            <div class="card-body">
                                
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="d-block">Tỉnh / Thành phố:</label>
                                            <select select2 class="form-control">
                                                <option value="">--- Chọn Tỉnh / Thành phố ---</option>

                                                <option value="01">Hà Nội</option>

                                                <option value="02">Tỉnh Hà Giang</option>

                                                <option value="04">Tỉnh Cao Bằng</option>

                                                <option value="06">Tỉnh Bắc Kạn</option>

                                                <option value="08">Tỉnh Tuyên Quang</option>

                                                <option value="10">Tỉnh Lào Cai</option>

                                                <option value="11">Tỉnh Điện Biên</option>

                                                <option value="12">Tỉnh Lai Châu</option>

                                                <option value="14">Tỉnh Sơn La</option>

                                                <option value="15">Tỉnh Yên Bái</option>

                                                <option value="17">Tỉnh Hoà Bình</option>

                                                <option value="19">Tỉnh Thái Nguyên</option>

                                                <option value="20">Tỉnh Lạng Sơn</option>

                                                <option value="22">Tỉnh Quảng Ninh</option>

                                                <option value="24">Tỉnh Bắc Giang</option>

                                                <option value="25">Tỉnh Phú Thọ</option>

                                                <option value="26">Tỉnh Vĩnh Phúc</option>

                                                <option value="27">Tỉnh Bắc Ninh</option>

                                                <option value="30">Tỉnh Hải Dương</option>

                                                <option value="31">Thành phố Hải Phòng</option>

                                                <option value="33">Tỉnh Hưng Yên</option>

                                                <option value="34">Tỉnh Thái Bình</option>

                                                <option value="35">Tỉnh Hà Nam</option>

                                                <option value="36">Tỉnh Nam Định</option>

                                                <option value="37">Tỉnh Ninh Bình</option>

                                                <option value="38">Tỉnh Thanh Hóa</option>

                                                <option value="40">Tỉnh Nghệ An</option>

                                                <option value="42">Tỉnh Hà Tĩnh</option>

                                                <option value="44">Tỉnh Quảng Bình</option>

                                                <option value="45">Tỉnh Quảng Trị</option>

                                                <option value="46">Tỉnh Thừa Thiên Huế</option>

                                                <option value="48">Thành phố Đà Nẵng</option>

                                                <option value="49">Tỉnh Quảng Nam</option>

                                                <option value="51">Tỉnh Quảng Ngãi</option>

                                                <option value="52">Tỉnh Bình Định</option>

                                                <option value="54">Tỉnh Phú Yên</option>

                                                <option value="56">Tỉnh Khánh Hòa</option>

                                                <option value="58">Tỉnh Ninh Thuận</option>

                                                <option value="60">Tỉnh Bình Thuận</option>

                                                <option value="62">Tỉnh Kon Tum</option>

                                                <option value="64">Tỉnh Gia Lai</option>

                                                <option value="66">Tỉnh Đắk Lắk</option>

                                                <option value="67">Tỉnh Đắk Nông</option>

                                                <option value="68">Tỉnh Lâm Đồng</option>

                                                <option value="70">Tỉnh Bình Phước</option>

                                                <option value="72">Tỉnh Tây Ninh</option>

                                                <option value="74">Tỉnh Bình Dương</option>

                                                <option value="75">Tỉnh Đồng Nai</option>

                                                <option value="77">Tỉnh Bà Rịa - Vũng Tàu</option>

                                                <option value="79">Thành phố Hồ Chí Minh</option>

                                                <option value="80">Tỉnh Long An</option>

                                                <option value="82">Tỉnh Tiền Giang</option>

                                                <option value="83">Tỉnh Bến Tre</option>

                                                <option value="84">Tỉnh Trà Vinh</option>

                                                <option value="86">Tỉnh Vĩnh Long</option>

                                                <option value="87">Tỉnh Đồng Tháp</option>

                                                <option value="89">Tỉnh An Giang</option>

                                                <option value="91">Tỉnh Kiên Giang</option>

                                                <option value="92">Thành phố Cần Thơ</option>

                                                <option value="93">Tỉnh Hậu Giang</option>

                                                <option value="94">Tỉnh Sóc Trăng</option>

                                                <option value="95">Tỉnh Bạc Liêu</option>
                                                                            
                                                <option value="96">Tỉnh Cà Mau</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Quận / Huyện: </label>
                                            <select select2 class="form-control">
                                                <option value="">--- Chọn Quận / Huyện ---</option><option value="Quận Ba Đình">Quận Ba Đình</option><option value="Huyện Ba Vì">Huyện Ba Vì</option><option value="Quận Bắc Từ Liêm">Quận Bắc Từ Liêm</option><option value="Quận Cầu Giấy">Quận Cầu Giấy</option><option value="Huyện Chương Mỹ">Huyện Chương Mỹ</option><option value="Huyện Đan Phượng">Huyện Đan Phượng</option><option value="Huyện Đông Anh">Huyện Đông Anh</option><option value="Đống Đa">Đống Đa</option><option value="Huyện Gia Lâm">Huyện Gia Lâm</option><option value="Quận Hà Đông">Quận Hà Đông</option><option value="Quận Hai Bà Trưng">Quận Hai Bà Trưng</option><option value="Huyện Hoài Đức">Huyện Hoài Đức</option><option value="Quận Hoàn Kiếm">Quận Hoàn Kiếm</option><option value="Quận Hoàng Mai">Quận Hoàng Mai</option><option value="Quận Long Biên">Quận Long Biên</option><option value="Huyện Mê Linh">Huyện Mê Linh</option><option value="Huyện Mỹ Đức">Huyện Mỹ Đức</option><option value="Quận Nam Từ Liêm">Quận Nam Từ Liêm</option><option value="Huyện Phú Xuyên">Huyện Phú Xuyên</option><option value="Huyện Phúc Thọ">Huyện Phúc Thọ</option><option value="Huyện Quốc Oai">Huyện Quốc Oai</option><option value="Huyện Sóc Sơn">Huyện Sóc Sơn</option><option value="Thị xã Sơn Tây">Thị xã Sơn Tây</option><option value="Quận Tây Hồ">Quận Tây Hồ</option><option value="Huyện Thạch Thất">Huyện Thạch Thất</option><option value="Huyện Thanh Oai">Huyện Thanh Oai</option><option value="Huyện Thanh Trì">Huyện Thanh Trì</option><option value="Quận Thanh Xuân">Quận Thanh Xuân</option><option value="Huyện Thường Tín">Huyện Thường Tín</option><option value="Huyện Ứng Hòa">Huyện Ứng Hòa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="d-block">Phường / Xã:</label>
                                            <select select2 class="form-control">
                                                <option value="">--- Chọn Phường / Xã ---</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Mã địa điểm: </label>
                                            <input type="text" class="form-control" name="" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Vĩ độ: </label>
                                            <input type="text" class="form-control required"  placeholder="Lat..." value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Kinh độ: </label>
                                            <input type="text" class="form-control required"  placeholder="Long..." value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-button justify-content-end">
                                    <button type="submit" class="btn bg-primary"><i class="fa fa-filter mr-1"></i>Lọc</button>
                                    <button type="button" class="btn btn-light" data-dismiss="modal"><i class="icon-cross2 mr-1"></i>Hủy điều kiện lọc</button>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered table-hover datatable"  
                                    data-paging="true"
                                    data-info="true"
                                    data-ordering="false"
                                    data-searching="false"
                                    data-page-length="10" >
                                    <thead class="thead-light">
                                        <th width="30px" data-orderable="false">#</th>
                                        <th>Mã địa điểm</th>
                                        <th class="desktop">Địa chỉ</th>
                                        <th>Vị trí</th>
                                        <th class="desktop">Ghi chú</th>
                                        <th data-orderable="false" class="text-center all">#</th>
                                    </thead>
                                   <tbody>
                                   		<tr>
                                   			<td><input type="checkbox" class="input-chk"></td>
	                                   		<td>MADIADIEM</td>
	                                   		<td>Hoàng Cầu, Đống Đa, Hà Nội</td>
	                                   		<td>
	                                   			<span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
	                                   		</td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                   		</tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="input-chk"></td>
                                            <td>MADIADIEM</td>
                                            <td>Hoàng Cầu, Đống Đa, Hà Nội</td>
                                            <td>
                                                <span>Vĩ độ: 21.0183926</span> <span class="p-1">|</span> <span>Kinh độ: 105.8240567</span>
                                            </td>
                                            <td></td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">
                                                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" data-toggle="modal" data-target="#thiet_la_han_muc" class="dropdown-item"> Thiết lập hạn mức</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                   		

                                   </tbody>
                                </table>
                            </div>
                        </div>
                    
                    </div>
                    <!-- /Content-block -->

                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                </div>

            </div>
            
        </div>
        <?php inc('modal/modal_thiet_lap_han_muc.php'); ?>
    </body>

<?php include_once FOOTER; ?>