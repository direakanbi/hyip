<?php $__env->startSection('content2'); ?>
<div class="dashboard-body-part">

    <div class="mobile-page-header">
        <h5 class="title"><?php echo e(__('Payment Informations')); ?></h5>
        <a href="<?php echo e(route('user.deposit')); ?>" class="back-btn"><i class="bi bi-arrow-left"></i> <?php echo e(__('Back')); ?></a>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8">
            <div class="site-card">
                <div class="card-header text-center">
                    <h5 class="mb-0"><?php echo e(__('Payment Preview')); ?></h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php if(!(session('type') == 'deposit')): ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-medium"><?php echo e(__('Plan Name')); ?>:</span>

                            <span><?php echo e($deposit->plan->plan_name); ?></span>

                        </li>
                        <?php endif; ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-medium"><?php echo e(__('Gateway Name')); ?>:</span>

                            <span><?php echo e($deposit->gateway->gateway_name); ?></span>

                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-medium"><?php echo e(__('Amount')); ?>:</span>
                            <span><?php echo e(number_format($deposit->amount, 2)); ?></span>
                        </li>

                        <li class="list-group-item  d-flex justify-content-between">
                            <span class="fw-medium"><?php echo e(__('Charge')); ?>:</span>
                            <span><?php echo e(number_format($deposit->charge, 2)); ?></span>
                        </li>


                        <li class="list-group-item  d-flex justify-content-between">
                            <span class="fw-medium"><?php echo e(__('Conversion Rate')); ?>:</span>
                            <span><?php echo e('1 ' . @$general->site_currency . ' = ' . number_format($deposit->rate, 2)); ?></span>
                        </li>



                        <li class="list-group-item  d-flex justify-content-between">
                            <span class="fw-medium"><?php echo e(__('Total Payable Amount')); ?>:</span>
                            <span><?php echo e(number_format($deposit->final_amount, 2)); ?></span>
                        </li>
                    </ul>
                    <div class="text-end mt-4">
                        <form action="" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="amount"
                                value="<?php echo e(number_format($deposit->final_amount, 2)); ?>">
                            <button type="submit" class="btn main-btn w-100"><span><?php echo e(__('Pay With Paypal')); ?></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(template().'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hyip\core\resources\views/theme4/user/gateway/paypal.blade.php ENDPATH**/ ?>