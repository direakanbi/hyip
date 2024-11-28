<?php $__env->startSection('content2'); ?>
    <div class="dashboard-body-part">

        <div class="mobile-page-header">
            <h5 class="title"><?php echo e(__('Authentication')); ?></h5>
            <a href="<?php echo e(route('user.dashboard')); ?>" class="back-btn"><i class="bi bi-arrow-left"></i> <?php echo e(__('Back')); ?></a>
        </div>

        <div class="row gy-4 justify-content-center">
            <div class="col-xxl-6 col-xl-8">

                <div class="site-card">
                    <div class="card-header">
                        <h5 class="mb-0"><?php echo e(__('Two Factor Authentication')); ?></h5>
                    </div>
                    <div class="card-body">
                        <p><?php echo e(__('Two factor authentication (2FA) strengthens access security by requiring two methods (also referred to as factors) to verify your identity. Two factor authentication protects against phishing, social engineering and password brute force attacks and secures your logins from attackers exploiting weak or stolen credentials.')); ?>

                        </p>

                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if($data['user']->loginSecurity == null): ?>
                            <form class="form-horizontal" method="POST" action="<?php echo e(route('user.generate2faSecret')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group mt-4">
                                    <button type="submit" class="btn main-btn">
                                        <span><?php echo e(__('Generate Secret Key to Enable 2FA')); ?></span>
                                    </button>
                                </div>
                            </form>
                        <?php elseif(!$data['user']->loginSecurity->google2fa_enable): ?>
                            <?php echo e(__(' 1. Scan this QR code with your Google Authenticator App.')); ?>


                            <div class="my-3">
                                <img src="<?= $data['google2fa_url'] ?>">
                            </div>

                            2. <?php echo e(__('Enter the pin from Google Authenticator app')); ?>:<br /><br />
                            <form class="form-horizontal" method="POST" action="<?php echo e(route('user.enable2fa')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group<?php echo e($errors->has('verify-code') ? ' has-error' : ''); ?>">
                                    <label for="secret" class="control-label"><?php echo e(__('Authenticator Code')); ?></label>
                                    <input id="secret" type="password" class="form-control col-md-12 mb-3" name="secret"
                                        required>
                                    <?php if($errors->has('verify-code')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('verify-code')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <button type="submit" class="btn  main-btn mt-4">
                                    <span><?php echo e(__('Enable 2FA')); ?></span>
                                </button>
                            </form>
                        <?php elseif($data['user']->loginSecurity->google2fa_enable): ?>
                            <div class="alert alert-success">
                                <?php echo e(__(' 2FA is currently enabled on your account.')); ?>

                            </div>
                            <p><?php echo e(__('If you are looking to disable Two Factor Authentication. Please confirm your password and Click Disable 2FA Button')); ?>.
                            </p>
                            <form class="form-horizontal" method="POST" action="<?php echo e(route('user.disable2fa')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group<?php echo e($errors->has('current-password') ? ' has-error' : ''); ?>">
                                    <label for="change-password" class="control-label"><?php echo e(__('Current Password')); ?></label>
                                    <input id="current-password" type="password" class="form-control col-md-12 mb-4"
                                        name="current-password" required>
                                    <?php if($errors->has('current-password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('current-password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <button type="submit" class="btn main-btn mt-4"><span><?php echo e(__('Disable 2FA')); ?></span></button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(template().'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hyip\core\resources\views/theme4/user/2fa_settings.blade.php ENDPATH**/ ?>