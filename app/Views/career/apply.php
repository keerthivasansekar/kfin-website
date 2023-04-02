<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= view_cell('App\Libraries\PageHeader::header', ['pageinfo' => $pageinfo]) ?>

	<!-- JOB APPLY CONTENT -->
	<div class="inner-content">
		<div class="container">
			<div class="row shop-login">
				<div class="col-md-8 col-md-offset-2">
					<div class="box-content">
						<h3 class="uppercase text-center">Apply Now</h3>
						<div class="clearfix space40"></div>
						<?php if(session()->getFlashdata('status') == 'success'): ?>
						<div class="alert success">
							<i class="fa fa-lg fa-check-circle-o"></i> Your application has been successfully submitted.<br/>   We will be in touch shortly.
						</div>
						<?php endif; ?>
						<form action="" method="POST" enctype="multipart/form-data" class="logregform">
                            <div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label for="fullname">Full Name <span class="text-danger">*</span></label>
										<input type="text" name="fullname" value="<?= set_value('fullname') ?>" class="form-control" >
										<span class="text-danger"><?= $validation->getError('fullname') ?></span>
									</div>
								</div>
							</div>
							<div class="clearfix space20"></div>
                            <div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label for="email">E-mail <span class="text-danger">*</span></label>
										<input type="text" name="email" value="<?= set_value('email') ?>" class="form-control" >
										<span class="text-danger"><?= $validation->getError('email') ?></span>
									</div>
								</div>
							</div>
							<div class="clearfix space20"></div>
                            <div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label for="mobile">Mobile Number <span class="text-danger">*</span></label>
										<input type="phone" name="mobile" value="<?= set_value('mobile') ?>" class="form-control" >
										<span class="text-danger"><?= $validation->getError('mobile') ?></span>
									</div>
								</div>
							</div>
                            <div class="clearfix space20"></div>
                            <div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label for="title">Job Applying for <span class="text-danger">*</span></label>
										<select class="form-control" name="title">
                                            <option value="">Job Role..</option>
                                        <?php foreach ($jobs as $job) : ?>
                                            <option value="<?= $job['title'] ?>" <?= set_select('title', $job['title']) ?> ><?= $job['title'] ?></option>
                                        <?php endforeach ?>
                                        </select>
										<span class="text-danger"><?= $validation->getError('title') ?></span>
									</div>
								</div>
							</div>
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-6">
										<label for="totalexp">Total years of Experience <span class="text-danger">*</span></label>
										<input type="text" name="totalexp" value="<?= set_value('totalexp') ?>" class="form-control" >
										<span class="text-danger"><?= $validation->getError('totalexp') ?></span>
									</div>
									<div class="col-md-6">
										<label for="currentctc">Current CTC <span class="text-danger">*</span></label>
										<input type="text" name="currentctc" value="<?= set_value('currentctc') ?>" class="form-control" >
										<span class="text-danger"><?= $validation->getError('currentctc') ?></span>
									</div>
								</div>
							</div>
                            <div class="clearfix space20"></div>
                            <div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label for="currentcompany">Current Company <span class="text-danger">*</span></label>
										<input type="text" name="currentcompany" value="<?= set_value('currentcompany') ?>" class="form-control" >
										<span class="text-danger"><?= $validation->getError('currentcompany') ?></span>
									</div>
								</div>
							</div>
                            <div class="clearfix space20"></div>
                            <div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label for="resume">Upload your Resume <span class="text-danger">*</span></label>
										<input type="file" name="resume" id="resume" >
										<span class="text-danger"><?= $validation->getError('resume') ?></span>
									</div>
								</div>
							</div>
                            <div class="clearfix space20"></div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                    	<label class="control-label" for="recaptcha">Solve the captcha</label>
                                    	<div class="input-group">
                                    		<span class="input-group-addon"><img src="<?php echo $captcha->inline(); ?>" /></span>
                                    		<input type="text" name="recaptcha" class="form-control" id="recaptcha">
                                    	</div>
										<span class="text-danger"><?= $validation->getError('recaptcha') ?></span>
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-12">
									<div class="space20"></div>
									<button type="submit" class="button btn-md pull-right">Apply</button>
								</div>
                                <div class="col-md-12">
                                    <div class="space20"></div>
                                    <span class="text-danger">* Mandatory</span>
                                </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?= $this->endSection() ?>