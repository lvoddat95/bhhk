<div class="form-group">
	<label>Quy tắc bảo hiểm (wording): </label>
	<input type="text" class="form-control">
	<div class="mt-1 font-weight-bold text-right">
		<?php if (!empty($GLOBALS["quy_tac"]) && $GLOBALS["quy_tac"] == 'remove_tra_cuu') : ?>
		<?php else: ?>
			<a href="javascript:;" class="mr-3" data-toggle="modal" data-target="#quy_tac_bao_hiem"><i class="icon-link2 mr-1"></i>Tra cứu quy tắc bảo hiểm</a>
		<?php endif; ?>
		<?php if (!empty($GLOBALS["dkbs"]) && $GLOBALS["dkbs"] == 'remove') : ?>
		<?php else: ?>
			<a href="javascript:;" class="" data-toggle="modal" data-target="#dieu_khoan_sua_doi_bo_sung" ><i class="icon-link2 mr-1"></i>Những điều khoản sửa đổi, bổ sung</a>
		<?php endif; ?>
	</div>
</div>

<?php inc('modal/modal_quy_tac_bao_hiem.php'); ?> 
