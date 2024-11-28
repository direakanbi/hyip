


<?php $__env->startSection('content2'); ?>
    <div class="dashboard-body-part">

        <div class="mobile-page-header">
            <h5 class="title"><?php echo e(__('Money Transfer History')); ?></h5>
            <a href="<?php echo e(route('user.dashboard')); ?>" class="back-btn"><i class="bi bi-arrow-left"></i> <?php echo e(__('Back')); ?></a>
        </div>

        <div class="site-card">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h5 class="mb-sm-0 mb-2"><?php echo e(__('Money Transfer Log')); ?></h5>
                <form action="" method="get">
                    <div class="row g-3">
                        <div class="col-auto">
                            <input type="text" name="trx" class="form-control form-control-sm" placeholder="transaction id">
                        </div>
                        <div class="col-auto">
                            <input type="date" class="form-control form-control-sm" placeholder="Search User" name="date">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn main-btn btn-sm"><?php echo e(__('Search')); ?></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-body text-end">

                <div class="table-responsive">
                    <table class="table site-table">
                        <thead>
                            <tr>
                                <th><?php echo e(__('Trx')); ?></th>
                                <th><?php echo e(__('Sender')); ?></th>
                                <th><?php echo e(__('Receiver')); ?></th>
                                <th><?php echo e(__('Amount')); ?></th>
                                <th><?php echo e(__('Currency')); ?></th>
                                <th><?php echo e(__('Charge')); ?></th>
                                <th><?php echo e(__('Details')); ?></th>
                                <th><?php echo e(__('Payment Date')); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $transfers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td data-caption="<?php echo e(__('Trx')); ?>"><?php echo e($transaction->transaction_id); ?></td>

                                    <td data-caption="<?php echo e(__('Sender')); ?>">
                                        <p class="p-0 m-0">
                                            Name : <?php echo e($transaction->sender->full_name); ?>

                                        </p>
                                        <p class="p-0 m-0">
                                            Email : <?php echo e($transaction->sender->email); ?>

                                        </p>
                                    </td>

                                    <td data-caption="<?php echo e(__('Receiver')); ?>">
                                        <p class="p-0 m-0">
                                            Name : <?php echo e($transaction->receiver->full_name); ?>

                                        </p>
                                        <p class="p-0 m-0">
                                            Email : <?php echo e($transaction->receiver->email); ?>

                                        </p>
                                    </td>

                                    <td data-caption="<?php echo e(__('Amount')); ?>"><?php echo e(number_format($transaction->amount, 2)); ?>

                                    </td>
                                    <td data-caption="<?php echo e(__('Currency')); ?>"><?php echo e($general->site_currency); ?></td>
                                    <td data-caption="<?php echo e(__('Charge')); ?>">
                                        <?php echo e(number_format($transaction->charge, 2) . ' ' . $general->site_currency); ?></td>
                                    <td data-caption="<?php echo e(__('Details')); ?>"><?php echo e($transaction->details); ?></td>
                                    <td data-caption="<?php echo e(__('Payment Date')); ?>">
                                        <?php echo e($transaction->created_at->format('Y-m-d')); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td class="text-center no-data-table" colspan="100%">
                                        <?php echo e(__('No Transaction Found')); ?>

                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?php if($transfers->hasPages()): ?>
                        <?php echo e($transfers->links()); ?>

                    <?php endif; ?>
                </div>
            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hyip\core\resources\views/theme4/user/transfer_log.blade.php ENDPATH**/ ?>