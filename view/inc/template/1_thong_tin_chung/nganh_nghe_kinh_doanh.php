<?php if (!empty($GLOBALS["nganh_nghe_kinh_doanh"]) && $GLOBALS["nganh_nghe_kinh_doanh"] == 'remove') : ?>
<?php else: ?>
    <div class="form-group">
        <label>Ngành nghề kinh doanh: </label>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <input type="text" class="form-control required" placeholder="Nhập mã ngành nghề...">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="input-group">
                    <input type="text" class="form-control required" placeholder="Nhập tên ngành nghề..." >
                    <span class="input-group-append">
                        <button type="button" class="btn bg-primary" data-fancybox data-base-class="fancybox-container-lg" data-type="iframe" data-src="<?php echo HTTP_PATH; ?>view/inc/iframe/iframe_ds_nganh_nghe.php" href="javascript:;">Chọn</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>