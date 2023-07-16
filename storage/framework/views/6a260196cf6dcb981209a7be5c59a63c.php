
<?php $__env->startSection('registrement'); ?>
    <div class="title_page"
        style="background: url('<?php echo e(asset('/img/registrementZ.jpg')); ?>') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1 id="title"></h1>
                

            </div>
        </div>
    </div>

    <script>
        var title = document.getElementById("title");
        var words = "Rejoignez notre communauté en vous inscrivant sur notre site";
        var i = 0;
        var isDeleting = false;

        function type() {
            if (i < words.length) {
                title.innerHTML += words.charAt(i);
                i++;
                setTimeout(type, 80);
            } else {
                isDeleting = true;
                setTimeout(deleteLetter, 130);
            }
        }

        function deleteLetter() {
            if (title.innerHTML.length > 0 && isDeleting) {
                title.innerHTML = title.innerHTML.slice(0, -1);
                setTimeout(deleteLetter, 120);
            } else {
                isDeleting = false;
                i = 0;
                setTimeout(type, 500);
            }
        }

        type();
    </script>
    <style>
        @keyframes pulse {

            0% {
                transform: scale(0.9);
                opacity: 1;
            }

            50% {
                transform: scale(1);
                opacity: 0.5;
            }

            100% {
                transform: scale(0.9);
                opacity: 1;
            }

        }
    </style>
    

    

    
    


    <?php if(session()->has('success')): ?>
        <div class="container" style="height: 
5em,position: relative">

            <br>
            
            <div class="text-center" style="position: relative;">

                
                <div class="alert alert-success text-center"
                    style="border: 2px solid #ffffff; border-radius: 5px; animation: pulse 2s ease-in-out infinite;">
                    <?php echo e(session('success')); ?>

                </div>
                

            </div>
        </div>
    <?php endif; ?>

    

    <div class="switcher_confironce_home my-5 wow slideInLeft" data-wow-duration="2.1s">
        <div class="switcher_confironce_text">
            <h3>Ils nous font confiance</h3>
        </div>
        
        <div class="container">
            <div class="owl-carousel switcher_confironce" id="switcher_confironce">
                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="<?php echo e(asset('/img/01.png')); ?>" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="<?php echo e(asset('/img/02.png')); ?>" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="<?php echo e(asset('/img/03.png')); ?>" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="<?php echo e(asset('/img/04.png')); ?>" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="<?php echo e(asset('/img/05.png')); ?>" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="<?php echo e(asset('/img/06.png')); ?>" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="<?php echo e(asset('/img/07.png')); ?>" />
                </div>
            </div>
        </div>
    </div>

    

    <div class="container">
        
        

        <div class="col-md-12 container">
            
            <div class="card mt-5 shadow-lg"
                style="background-image:
                    url(<?php echo e(asset('/img/bkk1.jpg')); ?>);background-size: cover;">
                <div class="card-body">
                    <h3 class="text-center mb-4" style="color:rgb(235, 233, 232);font-family: 'MarkBold';font-size:33px">
                        Sign
                        In</h3>

                    <form method="POST" action="<?php echo e(route('store_data_profil')); ?>">

                        <?php echo csrf_field(); ?>

                        <div class="mb-3 text-center mx-auto" style="max-width: 700px;">
                            
                            
                            <input type="text" class="form-control rounded-pill" id="nom" name="nom"
                                placeholder="Saisie votre Nom" required maxlength="20">

                            <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-white">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                        <div class="mb-3 text-center mx-auto" style="max-width: 700px;">
                            
                            <input type="text" class="form-control rounded-pill" id="prenom" name="prenom"
                                placeholder="Saisie votre Prenom" required>

                            <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-white">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                        <div class="mb-3 text-center mx-auto" style="max-width: 700px;">
                            
                            <input type="number" class="form-control rounded-pill" id="telephone" name="telephone"
                                placeholder="Saisie votre Téléphone" required>


                            <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-white">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                        <div class="mb-3 text-center mx-auto" style="max-width: 700px;">
                            

                            <input type="email" class="form-control rounded-pill" id="email" name="email"
                                placeholder="Saisie votre Email" required>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-white">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                        <div class="mb-2 text-center mx-auto" style="max-width: 700px;">
                            
                            <input type="password" class="form-control rounded-pill" id="password" name="password"
                                placeholder="Saisie votre Password" required>

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-white">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5 custom-button-az"
                                style="background-color: transparent;">Sign Up</button>
                            <a href="/show_Page_login" class="btn btn-primary btn-lg  rounded-pill px-5 custom-button-az"
                                style="background-color: transparent;">Sign In</a>
                        </div>


                        
                    </form>
                </div>
            </div>
        </div>

        
        

    </div>
    <div class="contact_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>Pour plus d&#39;informations, <span>n&#39;h&eacute;sitez pas &agrave; nous contacter </span></p>
                </div>

                <div class="col-lg-6"><a href="/contact_page"><img alt="looking_down_arrow" class="img-fluid"
                            src="<?php echo e(asset('/img/mail_icon.png')); ?>" />Nous contacter</a></div>
            </div>
        </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auzone_libre\resources\views/components/pages/registrement.blade.php ENDPATH**/ ?>