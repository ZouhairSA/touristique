
<?php $__env->startSection('page_voyage_reservation'); ?>
    <div class="title_page"
        style="background: url('<?php echo e(asset('/img/page_billetteries.jpg')); ?>') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1>Reservation :</h1>

            </div>
        </div>
    </div>

    <div class="seminaires_block">
        <div class="container">
            <div class="row">
                <form>
                    <?php echo csrf_field(); ?>

                    <div class="switcher_home">
                        <div class="container">
                            <div class="row">
                                <div class=" wow slideInLeft" data-wow-duration="1.5s">
                                    <div class="owl-carousel nos_services_home" id="nos_services_home">
                                        <?php $__currentLoopData = $voyages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voyage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="item_nos_produit_home position-relative">
                                                <div class="card">
                                                    <div class="row mb-6">
                                                        <div class="col-12 text-center">
                                                            <div class="col">

                                                                
                                                                
                                                                <br>
                                                                <p type="text" id="nom" style="font-size:35px;"
                                                                    value="<?php echo e($voyage->nom_voyage); ?>">
                                                                    <?php echo e($voyage->nom_voyage); ?></p>
                                                                <hr>
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="col-12 text-center">
                                                            <div class="col">
                                                                <p for="description" class="form-label  text-center"
                                                                    style="font-size:25px;">
                                                                    Description
                                                                </p>
                                                                <div class="border border-primary">
                                                                    <p><?php echo e($voyage->description); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">

                                                            <div class="col">
                                                                <br>
                                                                <label for="personnes"
                                                                    class="form-label font-weight-bold">Nombre de
                                                                    personnes</label>
                                                                <input type="number" class="form-control" id="personnes"
                                                                    name="personnes" disabled
                                                                    value="<?php echo e($voyage->total_reserved); ?>">
                                                            </div>

                                                            <div class="col">
                                                                <br>
                                                                <label for="restaurant"
                                                                    class="form-label font-weight-bold">Restaurant</label>
                                                                <input type="text" class="form-control" id="restaurant"
                                                                    name="restaurant" disabled
                                                                    value="<?php echo e($voyage->restauration); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-12 text-center">
                                                            <div class="col">
                                                                <label for="nom"
                                                                    class="form-label font-weight-bold text-center">Prix</label>
                                                                <div class="text-center">
                                                                    <input type="text" class="form-control text-center"
                                                                        id="nom" value="<?php echo e($voyage->prix); ?>" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="col-12 text-center">
                                                            <br>
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal_<?php echo e($voyage->id); ?>">Envoyer</button>

                                                            
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $__currentLoopData = $voyages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voyage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="exampleModal_<?php echo e($voyage->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enter your name and email</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal " aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo e(route('validation_reservation_voyage')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="mb-3">

                                <label for="name_voyage" class="form-label">Nom voyage :</label>
                                <input type="text" class="form-control" value=" <?php echo e($voyage->nom_voyage); ?>"
                                    name="name_voyage">
                                

                            </div>

                            <div class="mb-3">

                                <label for="ref_voyage" class="form-label">Reference :</label>
                                <input type="text" class="form-control" value=" <?php echo e($voyage->id); ?>" name="ref_voyage">
                            </div>

                            <div class="mb-3 ">

                                <label for="prix_voyage" class="form-label">Prix</label>
                                <input type="text" class="form-control bg-primary" value=" <?php echo e($voyage->prix); ?>"
                                    name="prix_voyage">

                            </div>

                            <div class="mb-3">

                                <label for="name" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="nom_Profil" name="nom_profil"
                                    placeholder="saisie votre Name" required>

                            </div>

                            <div class="mb-3">

                                <label for="email" class="form-label">Email : </label>
                                <input type="email" class="form-control" id="email_profil" name="email_profil"
                                    placeholder="saisie votre Email" required>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('components.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auzone_libre\resources\views/components/pages/reservation/page_voyage_reservation.blade.php ENDPATH**/ ?>