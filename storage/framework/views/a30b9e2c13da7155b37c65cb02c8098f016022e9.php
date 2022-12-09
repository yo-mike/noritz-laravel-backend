<div class="w-container sizing_klc">

    <?php if($steps==0): ?>
    <div class="w-row">
        <div class="w-col w-col-12 top_part">
            <h1>Ready to find the perfect tankless for your home?</h1>
            <p>The Noritz sizing calculator can help you begin your journey to finding the perfect tankless for your home. Simply provide a few details about your home and our calculator will recommend the best tankless based on this information. Click below to begin.</p>
            <a type="button" wire:click="stepscount(1)" class="submit-button">Click to Get Started</a>
        </div>
    </div>
    <?php endif; ?>

    <?php if($steps==1): ?>
    <div class="w-row" id="step-1">
        <div class="w-col w-col-12 steps zip_code">
            <hr>
            <h3>Step 1</h3>
            <form wire:submit.prevent="stepOneSubmit">
                <?php echo csrf_field(); ?>
                <h2>Please enter your zip code</h2>
                <input type="text" name="zip_code" id="zip_code" wire:model="zip_code">
                <?php $__errorArgs = ['zip_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span></br>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <?php if( session()->has('invalidZipCode') ): ?>
                <p class="text-danger"><?php echo e(session('invalidZipCode')); ?></p></br>
                <?php endif; ?>
                <input class="submit-button" type="submit" value="Next">
            </form>
            <hr>
        </div>
    </div>
    <?php endif; ?>

    <?php if($steps==2): ?>
    <div class="w-row" id="step-2">
        <form wire:submit.prevent="stepTwoSubmit">
            <?php echo csrf_field(); ?>
            <div class="w-col w-col-12 steps">
                <div class="home_info">
                    <h3>Step 2</h3>
                    <h2>Information about your Home</h2>
                    <div class="w-row">
                        <div class="w-col w-col-6">
                            <div class="form-grpup">
                                <label for="">Number of Showers in your Home</label>
                                <button type="button" class="input-number-decrement" wire:click="decrement">-</button>
                                <input class="input-number" name="noofShower" id="noofShower" type="text" value="<?php echo e($noofShower); ?>" min="0" max="100" wire:model="noofShower">
                                <button type="button" class="input-number-increment" wire:click="increment">+</button>
                            </div>
                            <?php if( session()->has('info') ): ?>
                            <span class="text-danger"><?php echo e(session('info')); ?></span>
                            <?php endif; ?>
                            <?php $__errorArgs = ['noofShower'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="w-col w-col-6">
                            <div class="form-grpup">
                                <label for="">High Flow Shower Heads/Body Sprays</label>
                                <select name="bodySpray" id="bodySpray" wire:model="bodySpray">
                                    <option value="">Select option</option>
                                    <option value="yes">YES</option>
                                    <option value="no">NO</option>
                                </select>
                            </div>
                            <?php $__errorArgs = ['bodySpray'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="w-col w-col-6">
                            <div class="form-grpup">
                                <label for="">Does your home have a recirculation loop?</label>
                                <select name="recirculation" id="recirculation" wire:model="recirculation">
                                    <option value="">Select option</option>
                                    <option value="yes">YES</option>
                                    <option value="no">NO</option>
                                </select>
                            </div>
                            <?php $__errorArgs = ['recirculation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="w-col w-col-6">
                            <div class="form-grpup">
                                <label for="">Replacing a Boiler?</label>
                                <select name="replaceBoliler" id="replaceBoliler" wire:model="replaceBoliler">
                                    <option value="">Select option</option>
                                    <option value="yes">YES</option>
                                    <option value="no">NO</option>
                                </select>
                            </div>
                            <?php $__errorArgs = ['replaceBoliler'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <input class="submit-button" type="submit" value="Submit" wire:click="stepThreeSubmit">
                </div>
                <hr>
            </div>
        </form>
    </div>
    <?php endif; ?>

    <?php if($steps==3): ?>
    <div class="w-row" id="step-3">
        <div class="w-col w-col-12 steps recommend_product">
            <h3>Noritz Tankless</h3>
            <h2>We Recommend</h2>
            <ul>
                <?php echo e($contactNotrizMessage); ?>

                <?php $__currentLoopData = $heaters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heater): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="pr_img">
                        <img src="<?php echo e(asset($heater->FullMarketingImage)); ?>" alt="">
                    </div>
                    <div class="pr_info">
                        <h2><?php echo e($heater->series); ?></h2>
                        <p>
                            Max: <?php echo e($heater->max_gas_input_btu); ?> btuh<br>
                            Min: <?php echo e($heater->min_gas_input_btu); ?> btuh<br>
                            Max Flow:<?php echo e($heater->max_flow_rate); ?><br>
                            Efficiency: <?php echo e($heater->thermal_efficiency); ?>

                        </p>
                        <?php if($heater->spec_sheet && $heater->spec_sheet !=''): ?>
                        <a class="Spec_Sheet" target="_blank" href="<?php echo e($this->getDownloadFile('spec_sheet',$heater->model_no)); ?>">Download Spec Sheet</a>
                        <?php endif; ?>
                        <a class="GetaQuote" target="_blank" href="https://contractorfinder.noritz.com/contractors/postal/<?php echo e($zip_code); ?>">Get a Quote</a>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php if((!empty($commercial_heaters) && count($commercial_heaters)>0 && $perPage>3) || (!empty($residental_heaters) && count($residental_heaters)>0 && $perPage>3)): ?>
<script>
    window.onscroll = function(ev) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            console.log(window.innerHeight + window.scrollY);
            setTimeout(function() {
                window.livewire.emit('load-more');
            }, 1500);
        }
    };


    (function() {

        window.inputNumber = function(el) {

            var min = el.attr('min') || false;
            var max = el.attr('max') || false;

            var els = {};

            els.dec = el.prev();
            els.inc = el.next();

            el.each(function() {
                init($(this));
            });

            function init(el) {

                els.dec.on('click', decrement);
                els.inc.on('click', increment);

                function decrement() {
                    var value = el[0].value;
                    value--;
                    if (!min || value >= min) {
                        el[0].value = value;
                    }
                }

                function increment() {
                    var value = el[0].value;
                    value++;
                    if (!max || value <= max) {
                        el[0].value = value++;
                    }
                }
            }
        }
    })();

    inputNumber($('.input-number'));
    
</script>
<?php endif; ?>
<div wire:loading style="width:100%;">
    <div id="filter_loader">
        <div class="filter-spinner"></div>
    </div>
</div>

<style>
    #loader {
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 999;
        margin-top: 60px;
    }

    .steps.zip_code input[type="text"]+.text-danger {
        margin-top: -25px;
        display: block;
        line-height: 1;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    .text-danger {
        color: #D2332A;
        line-height: 3;
    }

    button.input-number-decrement {
    line-height: 0;
}

    .nb-spinner {
        width: 75px;
        height: 75px;
        margin: 0;
        background: transparent;
        border-top: 4px solid #cf4d4d;
        border-right: 4px solid transparent;
        border-radius: 50%;
        -webkit-animation: 1s spin linear infinite;
        animation: 1s spin linear infinite;
    }

    #filter_loader {
        position: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: 999;
        background: #ffffffb5;
    }

    .filter-spinner {
        width: 75px;
        height: 75px;
        margin: 0;
        background: transparent;
        border-top: 4px solid #cf4d4d;
        border-right: 4px solid transparent;
        border-radius: 50%;
        -webkit-animation: 1s spin linear infinite;
        animation: 1s spin linear infinite;
    }

    .tnames {
        color: #000;
    }

    .tnames:hover {
        color: #ff5959;
    }

    strong.no_products {
        font-size: 18px;
        color: #ff5959;
        max-width: 87%;
        display: block;
    }





    .w-container.sizing_klc {
        width: 100%;
        max-width: 1180px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .w-col.w-col-12.top_part {
        max-width: 660px;
        margin: auto;
        float: none;
        text-align: center;
        padding: 50px 10px 100px;
    }

    .top_part h1 {
        margin: 0 0 30px;
        font-size: 48px;
        line-height: 1.15;
    }

    .top_part p {
        font-size: 17px;
        color: #000;
        opacity: 0.9;
        line-height: 27px;
        margin-bottom: 40px;
    }

    .top_part a.submit-button {
        display: inline-block;
        border-radius: 12px;
        text-align: center;
        color: #fff;
        font-size: 14px;
        line-height: 30px;
        height: auto;
        width: auto;
        padding: 0 27px;
        margin: 0 !important;
        cursor: pointer;
    }

    .top_part a.submit-button:hover {
        background: #000;
    }

    .steps hr {
        border:
            none;
        border-top: 1px solid rgba(0, 0, 0, 0.25);
        margin: 0;
    }

    .steps.zip_code {
        margin-bottom: 75px;
        text-align: center;
    }

    .steps h3 {
        margin: 75px 0 15px;
        color: #D2332A;
        font-family: 'Titillium Web', sans-serif;
        font-size: 24px;
        line-height: 1;
        font-weight: 700;
    }

    .steps h2 {
        margin: 0 0 25px;
        font-size: 36px;
        line-height: 1.1;
    }

    .steps.zip_code input[type="text"] {
        display: block;
        margin: 0 auto 35px;
        background: rgba(0, 0, 0, 0.05);
        border: none;
        width: 220px;
        height: 37px;
        padding: 5px;
        text-align: center;
    }

    .steps input.submit-button {
        border-radius: 12px;
        text-align: center;
        color: #fff;
        font-size: 14px;
        line-height: 30px;
        height: auto;
        width: auto;
        padding: 0 27px;
        margin: 0 0 90px !important;
        border: none;
        min-width: 168px;
        cursor: pointer;
    }

    .steps input.submit-button:hover {
        background: #000;
    }

    .input-number {
        width: 80px;
        padding: 0 12px;
        vertical-align: top;
        text-align: center;
        outline: none;
    }

    .input-number,
    .input-number-decrement,
    .input-number-increment {
        border: none;
        height: 30px;
        user-select: none;
    }

    .input-number-decrement,
    .input-number-increment {
        display: inline-block;
        width: 30px;
        height: 30px;
        line-height: 30px;
        background: #D9D9D9;
        border-radius: 50%;
        color: rgba(0, 0, 0, 0.5);
        text-align: center;
        font-size: 24px;
        cursor: pointer;
    }

    .input-number-decrement:active,
    .input-number-increment:active {
        background: #ddd;
    }

    span.input-number-decrement {
        line-height: 26px;
        position: relative;
        top: -2px;
    }

    .home_info {
        display: inline-block;
        width: 100%;
        background: rgba(217, 217, 217, 0.25);
        padding: 55px 150px;
        text-align: center;
    }

    .steps .home_info h3 {
        margin-top: 0;
    }

    .steps .home_info input.submit-button {
        margin-bottom: 0 !important;
        margin-top: 50px !important;
    }

    .home_info+hr {
        margin: 45px 0 0;
    }

    .steps .form-grpup {
        margin-top: 50px;
    }

    .steps .home_info h2 {
        margin-bottom: 0;
    }

    .home_info .w-row {
        display: flex;
        flex-wrap: wrap;
    }

    .steps .form-grpup label {
        font-size: 20px;
        font-family: 'Titillium Web', sans-serif;
        margin: 0 0 20px;
        line-height: 1.2;
    }

    .steps .form-grpup select {
        border: none;
        background: #fff;
        width: 150px;
        height: 30px;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 600;
    }

    .recommend_product {
        text-align: center;
    }

    .recommend_product ul {
        display: flex;
        flex-wrap: wrap;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .recommend_product ul li {
        display: flex;
        width: 100%;
        align-items: center;
        border: 5px solid #E6E6E6;
        padding: 40px 80px;
        text-align: left;
        margin-bottom: 100px;
    }

    .recommend_product ul li .pr_img {
        width: 100%;
        max-width: 395px;
    }

    .recommend_product ul li .pr_img img {
        height: auto;
    }

    .recommend_product ul li .pr_info {
        padding-left: 60px;
    }

    .recommend_product ul li .pr_info h2 {
        font-size: 64px;
        margin-bottom: 30px;
    }

    .recommend_product ul li .pr_info p {
        font-size: 24px;
        line-height: 36px;
        font-weight: 500;
        margin-bottom: 30px;
        color: #000;
    }

    .recommend_product ul li a.Spec_Sheet {
        font-size: 24px;
        line-height: 36px;
        font-weight: 700;
        margin-bottom: 50px;
        color: #D2332A;
        font-family: 'Titillium Web', sans-serif;
    }

    .recommend_product ul li a.GetaQuote {
        display: flex;
        width: 100%;
        max-width: 300px;
        background: #D2332A;
        border-radius: 12px;
        line-height: 70px;
        justify-content: center;
        font-family: 'Titillium Web';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        color: #fff;
        margin-top: 60px;
    }

    .recommend_product ul li a.GetaQuote:hover {
        background-color: #000;
    }

    @media (max-width:1023px) {
        .w-col.w-col-12.top_part {
            padding: 50px 10px 50px;
        }

        .steps h3 {
            margin: 35px 0 15px;
        }

        .steps input.submit-button {
            margin: 0 0 50px !important;
        }

        .steps.zip_code {
            margin-bottom: 40px;
        }

        .home_info {
            padding: 40px 20px;
        }

        .recommend_product ul li .pr_info {
            padding-left: 30px;
        }

        .recommend_product ul li .pr_info h2 {
            font-size: 44px;
            margin-bottom: 10px;
        }

        .recommend_product ul li {
            padding: 30px 50px;
            margin-bottom: 50px;
        }

        .recommend_product ul li .pr_img {
            width: 100%;
            max-width: 300px;
        }

        .recommend_product ul li a.GetaQuote {
            max-width: 200px;
            line-height: 60px;
            font-size: 24px;
            margin-top: 40px;
        }
    }

    @media (max-width:767px) {
        .w-col.w-col-12.top_part {
            padding: 30px 10px 30px;
        }

        .top_part h1 {
            margin: 0 0 20px;
            font-size: 34px;
            line-height: 1.05;
        }

        .top_part p {
            line-height: 25px;
            margin-bottom: 20px;
        }

        .steps h3 {
            margin: 25px 0 10px;
            font-size: 20px;
        }

        .steps h2 {
            margin: 0 0 20px;
            font-size: 24px;
            line-height: 1;
        }

        .steps.zip_code input[type="text"] {
            margin: 0 auto 25px;
        }

        .steps input.submit-button {
            margin: 0 0 30px !important;
        }

        .steps.zip_code {
            margin-bottom: 30px;
        }

        .home_info {
            padding: 20px 15px;
        }

        .steps .form-grpup label {
            margin: 0 0 15px;
        }

        .steps .form-grpup {
            margin-top: 30px;
        }

        .steps .home_info input.submit-button {
            margin-top: 30px !important;
        }

        .home_info+hr {
            margin: 30px 0 0;
        }

        .recommend_product ul li {
            padding: 20px 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
            border-width: 2px;
        }

        .recommend_product ul li .pr_img {
            max-width: 100%;
            margin-bottom: 30px;
        }

        .recommend_product ul li .pr_info {
            padding-left: 0;
            width: 100%;
        }

        .recommend_product ul li .pr_info p {
            font-size: 20px;
            line-height: 30px;
            margin-bottom: 10px;
        }

        .recommend_product ul li a.GetaQuote {
            max-width: 190px;
            line-height: 50px;
            font-size: 20px;
            margin-top: 20px;
        }
    }
</style><?php /**PATH E:\php8\htdocs\noritz-laravel-backend\resources\views/domain/website/products/livewire/sizing.blade.php ENDPATH**/ ?>