<?php $__env->startSection('content2'); ?>
    <div class="dashboard-body-part">
        <div class="row gy-4">
            <div class="row g-sm-4 g-3 justify-content-between">
                <div class="col-xl-4 col-lg-6">
                    <div class="user-account-number h-100">
                        <div class="card-dot mb-sm-4 mb-2">
                            <span class="dot-1"></span>
                            <span class="dot-2"></span>
                        </div>
                        <p class="caption mb-2"><?php echo e(__('Account Balance')); ?></p>
                        <h3 class="acc-number">
                            <?php echo e(number_format(auth()->user()->balance, 2) . ' ' . $general->site_currency); ?>

                        </h3>
                        <i class="bi bi-wallet2"></i>
                    </div>
                </div>

                <!-- mobile card slider start -->
                <div class="col-12 d-sm-none d-block">
                    <div class="mobile-card-slider">
                        <div class="single-slide">
                            <div class="d-box-three gr-bg-1">
                                <div class="icon">
                                    <i class="bi bi-piggy-bank text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white"><?php echo e(__('Total Withdraw')); ?></p>
                                    <h5 class="title text-white"><?php echo e(number_format($withdraw, 2) . ' ' . $general->site_currency); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="d-box-three gr-bg-3">
                                <div class="icon">
                                    <i class="bi bi-hourglass-split text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white"><?php echo e(__('Total Deposit')); ?></p>
                                    <h5 class="title text-white"><?php echo e(number_format($totalDeposit, 2) . ' ' . $general->site_currency); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="d-box-three gr-bg-2">
                                <div class="icon">
                                <i class="bi bi-cash-coin text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white"><?php echo e(__('Total Invest')); ?></p>
                                    <h5 class="title text-white"><?php echo e(number_format($totalInvest, 2) . ' ' . $general->site_currency); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="d-box-three gr-bg-4">
                                <div class="icon">
                                    <i class="bi bi-wallet2 text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white"><?php echo e(__('Current Invest')); ?></p>
                                    <h5 class="title text-white"><?php echo e(isset($currentInvest->amount) ? number_format($currentInvest->amount, 2) : 0); ?> <?php echo e(@$general->site_currency); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="d-box-three gr-bg-5">
                                <div class="icon">
                                    <i class="bi bi-wallet2 text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white"><?php echo e(__('Pending Invest')); ?></p>
                                    <h5 class="title text-white"><?php echo e(number_format($pendingInvest, 2) . ' ' . $general->site_currency); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="d-box-three gr-bg-6">
                                <div class="icon">
                                    <i class="bi bi-wallet2 text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white"><?php echo e(__('Pending Withdraw')); ?></p>
                                    <h5 class="title text-white"><?php echo e(number_format($pendingWithdraw, 2) . ' ' . $general->site_currency); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="d-box-three gr-bg-7">
                                <div class="icon">
                                    <i class="bi bi-wallet2 text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white"><?php echo e(__('Refferal Earn')); ?></p>
                                    <h5 class="title text-white"><?php echo e(number_format($commison, 2)); ?> <?php echo e(@$general->site_currency); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile card slider end -->

                <div class="col-xl-4 col-lg-6 d-sm-block d-none">
                    <div class="row g-sm-4 g-3">
                        <div class="col-lg-12 col-6">
                            <div class="d-box-three gr-bg-1">
                                <div class="icon">
                                    <i class="bi bi-piggy-bank text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white"><?php echo e(__('Total Withdraw')); ?></p>
                                    <h5 class="title text-white">
                                        <?php echo e(number_format($withdraw, 2) . ' ' . $general->site_currency); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-6">
                            <div class="d-box-three gr-bg-3">
                                <div class="icon">
                                    <i class="bi bi-hourglass-split text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white"><?php echo e(__('Total Deposit')); ?></p>
                                    <h5 class="title text-white">
                                        <?php echo e(number_format($totalDeposit, 2) . ' ' . $general->site_currency); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 d-sm-block d-none">
                    <div class="row g-sm-4 g-3">
                        <div class="col-xl-12 col-6">
                            <div class="d-box-three gr-bg-2">
                                <div class="icon">
                                    <i class="bi bi-cash-coin text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white"><?php echo e(__('Total Invest')); ?></p>
                                    <h5 class="title text-white">
                                        <?php echo e(number_format($totalInvest, 2) . ' ' . $general->site_currency); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-6">
                            <div class="d-box-three gr-bg-4">
                                <div class="icon">
                                    <i class="bi bi-wallet2 text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white"><?php echo e(__('Current Invest')); ?></p>
                                    <h5 class="title text-white">
                                        <?php echo e(isset($currentInvest->amount) ? number_format($currentInvest->amount, 2) : 0); ?>

                                        <?php echo e(@$general->site_currency); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mt-1 d-box-two-wrapper d-sm-flex d-none">
                <div class="col-xl-3 col-sm-6">
                    <div class="d-box-two">
                        <div class="d-box-two-icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <span class="caption-title"><?php echo e(__('Current Plan')); ?></span>
                        <h3 class="d-box-two-amount">
                            <?php echo e(isset($currentPlan->plan->plan_name) ? $currentPlan->plan->plan_name : 'N/A'); ?></h3>
                        <a href="<?php echo e(route('user.invest.all')); ?>" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="d-box-two">
                        <div class="d-box-two-icon">
                            <i class="fas fa-money-check"></i>
                        </div>
                        <span class="caption-title"><?php echo e(__('Pending Invest')); ?></span>
                        <h3 class="d-box-two-amount">
                            <?php echo e(number_format($pendingInvest, 2) . ' ' . $general->site_currency); ?>

                        </h3>
                        <a href="<?php echo e(route('user.invest.pending')); ?>" class="link-btn"><i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="d-box-two">
                        <div class="d-box-two-icon">
                            <i class="fas fa-hourglass-half"></i>
                        </div>
                        <span class="caption-title"><?php echo e(__('Pending Withdraw')); ?></span>
                        <h3 class="d-box-two-amount">
                            <?php echo e(number_format($pendingWithdraw, 2) . ' ' . $general->site_currency); ?>

                        </h3>
                        <a href="<?php echo e(route('user.withdraw.pending')); ?>" class="link-btn"><i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="d-box-two">
                        <div class="d-box-two-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <span class="caption-title"><?php echo e(__('Refferal Earn')); ?></span>
                        <h3 class="d-box-two-amount">
                            <?php echo e(number_format($commison, 2)); ?> <?php echo e(@$general->site_currency); ?>

                        </h3>
                        <a href="<?php echo e(route('user.commision')); ?>" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- mobile screen card start -->
            <div class="col-12 d-sm-none">
                <div class="row gy-4 mobile-box-wrapper">
                    <div class="col-3">
                        <div class="mobile-box link-item">
                            <a href="<?php echo e(route('user.invest.log')); ?>" class="item-link"></a>
                            <img src="<?php echo e(asset('asset/theme4/images/d-icon/1.png')); ?>" alt="icon">
                            <h6 class="title"><?php echo e(__('Invest')); ?></h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mobile-box link-item">
                            <a href="<?php echo e(route('user.deposit.log')); ?>" class="item-link"></a>
                            <img src="<?php echo e(asset('asset/theme4/images/d-icon/2.png')); ?>" alt="icon">
                            <h6 class="title"><?php echo e(__('Deposit')); ?></h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mobile-box link-item">
                            <a href="<?php echo e(route('user.withdraw.all')); ?>" class="item-link"></a>
                            <img src="<?php echo e(asset('asset/theme4/images/d-icon/3.png')); ?>" alt="icon">
                            <h6 class="title"><?php echo e(__('Withdraw')); ?></h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mobile-box link-item">
                            <a href="<?php echo e(route('user.interest.log')); ?>" class="item-link"></a>
                            <img src="<?php echo e(asset('asset/theme4/images/d-icon/4.png')); ?>" alt="icon">
                            <h6 class="title"><?php echo e(__('Transfer')); ?></h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mobile-box link-item">
                            <a href="<?php echo e(route('user.transaction.log')); ?>" class="item-link"></a>
                            <img src="<?php echo e(asset('asset/theme4/images/d-icon/5.png')); ?>" alt="icon">
                            <h6 class="title"><?php echo e(__('2FA')); ?></h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mobile-box link-item">
                            <a href="<?php echo e(route('user.transaction.log')); ?>" class="item-link"></a>
                            <img src="<?php echo e(asset('asset/theme4/images/d-icon/6.png')); ?>" alt="icon">
                            <h6 class="title"><?php echo e(__('Support')); ?></h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mobile-box link-item">
                            <a href="<?php echo e(route('user.commision')); ?>" class="item-link"></a>
                            <img src="<?php echo e(asset('asset/theme4/images/d-icon/7.png')); ?>" alt="icon">
                            <h6 class="title"><?php echo e(__('Settings')); ?></h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mobile-box link-item">
                            <a href="<?php echo e(route('user.viewall')); ?>" class="item-link"></a>
                            <img src="<?php echo e(asset('asset/theme4/images/d-icon/8.png')); ?>" alt="icon">
                            <h6 class="title"><?php echo e(__('View All')); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile screen card end -->

            <div class="mt-4">
                <label><?php echo e(__('Your refferal link')); ?></label>
                <div class="input-group mb-3">
                    <input type="text" id="refer-link" class="form-control copy-text"
                        value="<?php echo e(route('user.register', @Auth::user()->username)); ?>" placeholder="referallink.com/refer"
                        aria-label="Recipient's username" aria-describedby="basic-addon2" readonly>
                    <button type="button" class="input-group-text copy cmn-btn"
                        id="basic-addon2"><?php echo e(__('Copy')); ?></button>
                </div>
            </div>


            <?php
                $reference = auth()->user()->refferals;
            ?>

            <?php
                $reference = auth()->user()->refferals;
            ?>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="site-card">
                    <div class="card-header">
                        <h5 class="mb-0"><?php echo e(__('Reference Tree')); ?></h5>
                    </div>
                    <div class="card-body">
                        <?php if($reference->count() > 0): ?>
                            <ul class="sp-referral">
                                <li class="single-child root-child">
                                    <p>
                                        <img src="<?php echo e(getFile('user', auth()->user()->image)); ?>">
                                        <span
                                            class="mb-0"><?php echo e(auth()->user()->full_name . ' - ' . currentPlan(auth()->user())); ?></span>
                                    </p>
                                    <ul class="sub-child-list step-2">
                                        <?php $__currentLoopData = $reference; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="single-child">
                                                <p>
                                                    <img src="<?php echo e(getFile('user', $user->image)); ?>">
                                                    <span
                                                        class="mb-0"><?php echo e($user->full_name . ' - ' . currentPlan($user)); ?></span>
                                                </p>

                                                <ul class="sub-child-list step-3">
                                                    <?php $__currentLoopData = $user->refferals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="single-child">
                                                            <p>
                                                                <img src="<?php echo e(getFile('user', $ref->image)); ?>">
                                                                <span
                                                                    class="mb-0"><?php echo e($ref->full_name . ' - ' . currentPlan($ref)); ?></span>
                                                            </p>

                                                            <ul class="sub-child-list step-4">
                                                                <?php $__currentLoopData = $ref->refferals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li class="single-child">
                                                                        <p>
                                                                            <img
                                                                                src="<?php echo e(getFile('user', $ref2->image)); ?>">
                                                                            <span
                                                                                class="mb-0"><?php echo e($ref2->full_name . ' - ' . currentPlan($ref2)); ?></span>
                                                                        </p>
                                                                    </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>

                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                </li>
                            </ul>
                        <?php else: ?>
                            <div class="col-md-12 text-center mt-5">
                                <i class="far fa-sad-tear display-1"></i>
                                <p class="mt-2">
                                    <?php echo e(__('No Reference User Found')); ?>

                                </p>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="planDelete" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <form action="" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Plan</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php $__currentLoopData = auth()->user()->payments()->where('payment_status', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group site-radio">

                                    <input type="radio" name="plan" value="<?php echo e($pay->plan->id); ?>"
                                        id="planDeletelabel-<?php echo e($loop->iteration); ?>">

                                    <label for="planDeletelabel-<?php echo e($loop->iteration); ?>">
                                        <?php echo e($pay->plan->plan_name); ?>

                                    </label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('style'); ?>
        <style>
            .modal-backdrop.fade.show {
                display: none;
            }

            @media (max-width: 991px) {
                #header.header-inner-pages {
                    display: block;
                    background: transparent !important;
                    position: absolute;
                }

                .dashboard-body-part {
                    padding-top: 80px;
                }
            }

            .sp-referral .single-child {
                padding: 6px 10px;
                border-radius: 5px;
            }

            .sp-referral .single-child+.single-child {
                margin-top: 15px;
            }

            .sp-referral .single-child p {
                display: flex;
                align-items: center;
                margin-bottom: 0;
            }

            .sp-referral .single-child p img {
                width: 35px;
                height: 35px;
                border-radius: 50%;
                object-fit: cover;
                -o-object-fit: cover;
            }

            .sp-referral .single-child p span {
                width: calc(100% - 35px);
                font-size: 14px;
                padding-left: 10px;
            }

            .sp-referral>.single-child.root-child>p img {
                border: 2px solid #c3c3c3;
            }

            .sub-child-list {
                position: relative;
                padding-left: 35px;
            }

            .sub-child-list::before {
                position: absolute;
                content: '';
                top: 0;
                left: 17px;
                width: 1px;
                height: 100%;
                background-color: #a1a1a1;
            }

            .sub-child-list>.single-child {
                position: relative;
            }

            .sub-child-list>.single-child::before {
                position: absolute;
                content: '';
                left: -18px;
                top: 21px;
                width: 30px;
                height: 5px;
                border-left: 1px solid #a1a1a1;
                border-bottom: 1px solid #a1a1a1;
                border-radius: 0 0 0 5px;
            }

            .sub-child-list>.single-child>p img {
                border: 2px solid #c3c3c3;
            }
        </style>
    <?php $__env->stopPush(); ?>

    <?php $__env->startPush('script'); ?>
        <script>
            'use strict';

            $('.planDelete').on('click', function() {
                const modal = $('#planDelete');

                modal.find('form').attr('action', $(this).data('href'))

                modal.modal('show')


            })

            var copyButton = document.querySelector('.copy');
            var copyInput = document.querySelector('.copy-text');
            copyButton.addEventListener('click', function(e) {
                e.preventDefault();
                var text = copyInput.select();
                document.execCommand('copy');
            });
            copyInput.addEventListener('click', function() {
                this.select();
            });

            
        $('.mobile-card-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '60px',
            arrows: false,
            dots: false,
            autoplay: false,
            cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
            speed: 1500,
            autoplaySpeed: 1000,
            responsive: [
                {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
                }
            ]
        });
        </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hyip\core\resources\views/theme4/user/dashboard.blade.php ENDPATH**/ ?>