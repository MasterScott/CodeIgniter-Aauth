		<div class="container">
			<div class="card card-login mx-auto mt-5">
				<div class="card-header"><?=lang('Account.resetPasswordHeader')?></div>
				<div class="card-body">
					<form method="POST">
						<p><?=lang('Account.resetPasswordText')?></p>
						<?if (isset($errors)):?>
							<div class="alert alert-danger"><?=$errors?></div>
						<?endif;?>
						<?if (isset($infos)):?>
							<div class="alert alert-info"><?=$infos?></div>
						<?endif;?>
						<div class="form-group">
							<div class="form-label-group">
								<input type="test" name="verification_code" id="inputVerificationCode" class="form-control" placeholder="<?=lang('Account.resetPasswordLabelVerificationCode')?>" value="<?=$verificationCode?>" required autofocus>
								<label for="inputVerificationCode"><?=lang('Account.resetPasswordLabelVerificationCode')?></label>
							</div>
						</div>
						<button class="btn btn-primary btn-block" type="submit"><?=lang('Account.resetPasswordLabelSubmit')?></button>
					</form>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-6">
							<a class="d-block small" href="<?=site_url('account/login')?>"><?=lang('Account.linkBackToLogin')?></a>
						</div>
						<div class="col-6 text-right">
							<a class="d-block small" href="<?=site_url('account/register')?>"><?=lang('Account.linkRegister')?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
