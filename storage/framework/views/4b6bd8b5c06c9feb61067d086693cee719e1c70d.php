<section class="section-padding Service_flow-section">
    <div class="container">
        <div class="section-header service_flow_header">
            <h2 class="section-main-heading">
                <?php echo e(trans('messages.service_flow')); ?>

            </h2>
        </div>
        <div class="row g-4">
            <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="<?php echo e($keys == 3 ? 'service_boxx' : 'service_box'); ?>">
                    <figure class="service_flow_icon">
                        <img src="<?php echo e(Config('constants.SERVICE_FLOW_IMAGE_PATH').$services->image); ?>" alt="img">
                    </figure>
                    <h3 class="flow_service_title"><?php echo e($services->service->title ?? ''); ?></h3>
                    <p class="flow_service_info"><?php echo e($services->service->description ?? ''); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="estimation_box">
            <div class="row">
                <div class="col-md-5 col-lg-4  col-xl-6 estimation_left">
                    <div class="estimation_inner_box">
                        <h4 class="estimation_heading">
                            Simple Estimation Tool
                        </h4>
                        <p class="estimation-info">
                            Shipping cost estimation at a glance.
                            The actual shipping price may vary based on postal service and the final delivery
                            destination.
                        </p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8 col-xl-6 estimation_right">
                    <div class="shipping_form_block">
                        <form class="shipping_form">
                            <div class="shipping_input_box">
                                <div class="shipping_label">
                                    <label class="form-label">Shipping Method <sup>*</sup></label>
                                </div>
                                <div class="shipping_input">
                                    <div class="ratio_group">
                                        <div class="form-check custom_radio">
                                            <input class="form-check-input" type="radio" name="Shipping_type"
                                                id="KoreaEasyShipping">
                                            <label class="form-check-label" for="KoreaEasyShipping">
                                                KoreaEasyShipping®
                                            </label>
                                        </div>
                                        <div class="form-check custom_radio">
                                            <input class="form-check-input" type="radio" name="Shipping_type"
                                                id="EMS">
                                            <label class="form-check-label" for="EMS">
                                                EMS Standard
                                            </label>
                                        </div>
                                        <div class="form-check custom_radio">
                                            <input class="form-check-input" type="radio" name="Shipping_type"
                                                id="ems_premium">
                                            <label class="form-check-label" for="ems_premium">
                                                EMS Premium
                                            </label>
                                        </div>
                                        <div class="form-check custom_radio">
                                            <input class="form-check-input" type="radio" name="Shipping_type"
                                                id="K-Parcel-air">
                                            <label class="form-check-label" for="K-Parcel-air">
                                                Korea K-Parcel Air
                                            </label>
                                        </div>
                                        <div class="form-check custom_radio">
                                            <input class="form-check-input" type="radio" name="Shipping_type"
                                                id="K-Parcel-ship">
                                            <label class="form-check-label" for="K-Parcel-ship">
                                                Korea K-Parcel Ship
                                            </label>
                                        </div>
                                        <div class="form-check custom_radio">
                                            <input class="form-check-input" type="radio" name="Shipping_type"
                                                id="DHL">
                                            <label class="form-check-label" for="DHL">
                                                DHL
                                            </label>
                                        </div>
                                        <div class="form-check custom_radio">
                                            <input class="form-check-input" type="radio" name="Shipping_type"
                                                id="UPS">
                                            <label class="form-check-label" for="UPS">
                                                UPS
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shipping_input_box">
                                <div class="shipping_label">
                                    <label class="form-label">Where Do You Want
                                        to Ship a Package<sup>*</sup></label>
                                </div>
                                <div class="shipping_input">
                                    <div class="form-group">
                                        <select class="form-select ">
                                            <option value="Afghanistan">Select</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Alabama">Alabama</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="shipping_input_box">
                                <div class="shipping_label">
                                    <label class="form-label">Package Weight <sup>*</sup></label>
                                </div>
                                <div class="shipping_input">
                                    <div class="form-group">
                                        <select class="form-select ">
                                            <option value="Afghanistan">kg</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Alabama">Alabama</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="shipping_input_box">
                                <div class="shipping_label">

                                </div>
                                <div class="shipping_input">
                                    <div class="calculate_box">

                                    </div>
                                    <div class="calculate-btn-box">
                                        <button class="calculate-btn btn-Btheme"> Calculate</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="estimation_Price_box text-end">
            <div class="price_label">Estimate Price - $ 150</div>
        </div>
    </div>
</section><?php /**PATH /home/keasybuy/web/keasybuypanel.dev.obdemo.com/public_html/resources/views/frontend/components/service.blade.php ENDPATH**/ ?>