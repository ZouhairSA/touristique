
<?php $__env->startSection('page_login_profil'); ?>
    <div class="title_page"
        style="background: url('<?php echo e(asset('/img/page_apropos.jpg')); ?>') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1 id="PG_Profill" style="color:rgb(238, 218, 218);font-family: 'ARGUE';font-size: 98px;"></h1>
            </div>
        </div>
    </div>
    <script>
        var title = document.getElementById("PG_Profill");
        var words = "Decouvrire votre Profil";
        var i = 0;
        var isDeleting = false;

        function type() {
            if (i < words.length) {
                title.innerHTML += words.charAt(i);
                i++;
                setTimeout(type, 190);
            } else {
                isDeleting = true;
                setTimeout(deleteLetter, 130);
            }
        }

        function deleteLetter() {
            if (title.innerHTML.length > 0 && isDeleting) {
                title.innerHTML = title.innerHTML.slice(0, -1);
                setTimeout(deleteLetter, 150);
            } else {
                isDeleting = false;
                i = 0;
                setTimeout(type, 500);
            }
        }

        type();
    </script>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-container" style="padding-left:10%">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center" style="font-family: ARGUE;font-size:36px;">Login Form</h3>
                    </div>
                    <div class="card-body" style="margin-left: 10px">
                        <form method="POST" action="<?php echo e(route('validate_login_profil')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3 text-center" style="max-width: 700px;margin-left:40px">
                                <label for="email" class="form-label"
                                    style="font-family: Markthin;font-size:30px">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>
                            <div class="mb-3 text-center" style="max-width: 700px;margin-left:40px">
                                <label for="password" class="form-label"
                                    style="font-family: Markthin;font-size:30px">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter your password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>
                            <div class="text-center" style="max-width: 700px;margin-left:28px">
                                <button type="submit" style="margin-left:70px;padding-left:39px;padding-right:39px"
                                    class="btn btn-primary">Submit</button>

                                <a href="/registrement_page" style="padding-left:39px;padding-right:39px"
                                    class="btn btn-secondary">Register</a>
                            </div>
                        </form>
                    </div>
                    <br>
                </div>
            </div>

            
            
            <div class="col-md-2 ">
                
                <br>
                <div class="text-center">

                    <?php if(session()->has('error_1')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('error_1')); ?>

                        </div>
                    <?php endif; ?>
                    

                </div>
            </div>
            
            

        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auzone_libre\resources\views/components/pages/login_profil.blade.php ENDPATH**/ ?>