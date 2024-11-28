<table id="profit-table" class="table site-table w-100">
    <tr>
        <td><?php echo e(__('Plan')); ?></td>
        <td><?php echo e(__($plan->plan_name)); ?></td>
    </tr>
    <tr>
        <td><?php echo e(__('Amount')); ?></td>
        <td><?php echo e($amount . ' ' . @$general->site_currency); ?></td>
    </tr>
    <tr>
        <td><?php echo e(__('Payout Period')); ?></td>
        <td>

            <?php if($plan->return_for == 1): ?>
                <?php echo e(__('Every')); ?> <?php echo e(__($plan->time->name)); ?> <?php echo e(__('For')); ?> <?php echo e(__($plan->how_many_time)); ?>

                <?php echo e(__($plan->time->name)); ?>

            <?php else: ?>
                <?php echo e(__('Every')); ?> <?php echo e(__($plan->time->name)); ?> <?php echo e(__('Lifetime')); ?>

            <?php endif; ?>

        </td>
    </tr>
    <tr>
        <td><?php echo e(__('Profit')); ?></td>
        <td><?php echo e($calculate . ' ' . @$general->site_currency); ?></td>
    </tr>
    <tr>
        <td><?php echo e(__('Capital back')); ?></td>
        <td>
            <?php if($plan->capital_back == 1): ?>
                <?php echo e(__('Capital Back')); ?> <?php echo e(__('YES')); ?>

            <?php else: ?>
                <?php echo e(__('Capital Back')); ?> <?php echo e(__('NO')); ?>

            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td><?php echo e(__('Total')); ?></td>
        <td>
            <?php if($plan->return_for == 1): ?>
                <?php echo e(__($calculate * $plan->how_many_time)); ?> + <?php echo e(__($plan->capital_back == 1 ? $amount : '0')); ?>

                <?php echo e(@$general->site_currency); ?>

            <?php else: ?>
                <?php echo e(__($calculate)); ?> <?php echo e(@$general->site_currency); ?>

            <?php endif; ?>

        </td>
    </tr>
</table>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
    <a href="<?php echo e(route('user.gateways', $plan->id)); ?>" type="button" class="btn main-btn"><span><?php echo e(__('Invest')); ?></span></a>
</div>

<?php $__env->startPush('style'); ?>
    <style>
        #calculationModal .modal-footer {
            margin: 0 -15px;
        }

    </style>
<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\hyip\core\resources\views/theme4/pages/profittable.blade.php ENDPATH**/ ?>