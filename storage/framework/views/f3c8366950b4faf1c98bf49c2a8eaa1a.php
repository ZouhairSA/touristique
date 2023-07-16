
<?php $__env->startSection('page_login_user'); ?>
    <div class="title_page"
        style="background: url('<?php echo e(asset('/img/page_billetteries.jpg')); ?>') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1>LOGIN </h1>

            </div>
        </div>
    </div>

    <div class="billetteries_block">
        <div class="container">
            <form method="POST" action="<?php echo e(route('login_user')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">first_name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Your Name" name="nameStudent">
                    
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Enter  Your password" name="password">
                </div>

                
                <button type="submit" class="btn btn-primary center">Submit</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auzone_libre\resources\views/components/pages/login/client_login.blade.php ENDPATH**/ ?>