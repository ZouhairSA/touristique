
<?php $__env->startSection('billeterie'); ?>
    <div class="title_page"
        style="background: url('<?php echo e(asset('/img/page_billetteries.jpg')); ?>') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                
                <h1 id="Pg_reservation"></h1>
            </div>
        </div>
    </div>

    <script>
        var title = document.getElementById("Pg_reservation");
        var words = "Choisie Billet découvrir plus ...";
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

    
    <?php if(session()->has('success')): ?>
        <div class="container" style="height: 
5em">

            <br>
            
            <div class="text-center">

                
                <div class="alert alert-success text-center">
                    <?php echo e(session('success')); ?>

                </div>
                

            </div>
        </div>
    <?php endif; ?>
    
    <?php if(session()->has('error')): ?>
        <div class="container" style="height: 
5em">

            <br>
            <div class="text-center">

                
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
                

            </div>
        </div>
    <?php endif; ?>

    
    
    <?php if(session()->has('avertissement')): ?>
        <div class="container" style="height: 
    5em">
            <div class="text-center">

                
                <div class="alert alert-danger">
                    <?php echo e(session('avertissement')); ?>

                </div>


            </div>
        </div>
    <?php endif; ?>


    
    
    <?php if(session()->has('problème')): ?>
        <div class="container" style="height: 
5em">
            <div class="text-center">

                
                <div class="alert alert-danger">
                    <?php echo e(session('problème')); ?>

                </div>
                

            </div>
        </div>
    <?php endif; ?>

    
    



    <div class="billetteries_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12"><img alt="titre" class="img-fluid"
                        src="<?php echo e(asset('/img/billetteries_block_img.jpg')); ?>" /></div>

                <div class="col-lg-6 col-md-12 align-self-center">
                    <h4>Vous avez besoin d&rsquo;un billet d&rsquo;avion <span>ou d&#39;une r&eacute;servation de
                            croisi&egrave;re ? </span></h4>

                    <p><span>Vous souhaitez r&eacute;server vos billets pour un voyage ?</span> Consultez-nous vous
                        obtiendrez une r&eacute;ponse rapide et votre r&eacute;servation sera quasiment instantan&eacute;e,
                        m&ecirc;me pour des billets low costs et des croisi&egrave;res partout &agrave; travers le
                        monde.&nbsp;</p>
                </div>
            </div>
        </div>
    </div>

    <div class="seminaires_block">
        <div class="container">
            <div class="row">
                <h1 class="text-center"
                    style="
                    color: #91a71d;
                    font-size: 48px;
                    font-family: 'AllisonScript';
                ">
                    Voyages</h1>
                <form>
                    <?php echo csrf_field(); ?>

                    <div class="switcher_home">
                        <div class="container">
                            <div class="row">
                                <div class=" wow slideInLeft" data-wow-duration="1.5s">
                                    <div class="owl-carousel nos_services_home" id="nos_services_home">
                                        <?php $__currentLoopData = $voyages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voyage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div
                                                class="item_nos_produit_home position-relative border-rotate animated-border">
                                                <div>
                                                    <div class="row mb-6">
                                                        <div class="col-12 text-center">
                                                            <div class="col">

                                                                
                                                                
                                                                <br>
                                                                <p type="text" id="nom" style="font-size:35px;"
                                                                    class="p-3 mb-2 bg-light text-dark"
                                                                    value="<?php echo e($voyage->nom_voyage); ?>">
                                                                    <?php echo e($voyage->nom_voyage); ?></p>
                                                                <hr>
                                                                
                                                            </div>


                                                        </div>
                                                        

                                                        <div class="col-12 conatiner">
                                                            <div class="col text-center">
                                                                <br>
                                                                
                                                                
                                                                <div class="">
                                                                    <p><?php echo e($voyage->description); ?>

                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">

                                                            <div class="col">
                                                                <br>
                                                                <label style="font-size:20px" name="personnes"
                                                                    value="<?php echo e($voyage->total_reserved); ?>">
                                                                    Nombre des personne : <?php echo e($voyage->total_reserved); ?>

                                                                </label>
                                                                

                                                            </div>

                                                            <div class="col">
                                                                <br>
                                                                <label style="font-size:20px" name="restaurant"
                                                                    value="<?php echo e($voyage->restauration); ?>">
                                                                    Restaurant Repas : <?php echo e($voyage->restauration); ?>

                                                                    fois.
                                                                </label>
                                                                <br>

                                                                
                                                            </div>
                                                            <hr>
                                                        </div>


                                                        <div class="row mb-3">

                                                            <div class="col text-center">
                                                                <div class="col">
                                                                    <label for="nom" style="font-size: 27px"
                                                                        class="form-label font-weight-bold text-center">Prix
                                                                        :
                                                                        <?php echo e($voyage->prix); ?></label>
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-lg btn-block"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal_<?php echo e($voyage->id); ?>">
                                                                    Résérver
                                                                </button>
                                                                <br>
                                                                
                                                                <br>
                                                            </div>
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

    


    <?php $__currentLoopData = $voyages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voyage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="animated-borderr">
            <div class="modal fade" id="exampleModal_<?php echo e($voyage->id); ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-content">
                            <div class="modal-header bg-dark text-white">
                                <h5 class="modal-title text-center w-100" id="exampleModalLabel">
                                    Enter your name and email
                                </h5>
                                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    style="border: 3px solid white;"></button>
                            </div>


                            <div class="modal-body">
                                <form method="post" action="<?php echo e(route('validation_conserves')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <div class="mb-3 text-center">

                                        <label for="name_voyage" style="font-size: 25px" class="form-label">Nom voyage :
                                        </label>

                                        <label style=" color: #5b6624; font-family: 'Markthin' ; font-size: 41px">
                                            <?php echo e($voyage->nom_voyage); ?></label>

                                        <input type="text" class="form-control d-none"
                                            value=" <?php echo e($voyage->nom_voyage); ?>" name="nom_voyage">

                                        <input type="text" class="form-control d-none" value=" <?php echo e($voyage->id); ?>"
                                            name="nom_voyage">

                                    </div>

                                    <div class="row mb-3 text-center">
                                        <div class="col">

                                            <label style="font-size: 25px" class="form-label">Reference : </label>
                                            <label style="font-size: 21px">
                                                <?php echo e($voyage->id); ?></label>

                                            <input type="text" class="form-control d-none"
                                                value=" <?php echo e($voyage->id); ?>" name="ref_voyage">
                                        </div>

                                        <div class="col">

                                            <label for="prix_voyage" class="form-label"
                                                style="font-size: 25px">Prix</label>
                                            <label style="font-size: 21px">
                                                <?php echo e($voyage->prix); ?></label>

                                            <input type="text" class="form-control bg-primary d-none"
                                                value=" <?php echo e($voyage->prix); ?>" name="prix_voyage">

                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">

                                        <label for="name" class="form-label">Name :</label>
                                        <input type="text" class="form-control" id="nom_Profil" name="nom_profil"
                                            placeholder="saisie votre Name " required>

                                    </div>
                                    
                                    <div class="mb-3">

                                        <label class="form-label">Email : </label>
                                        <input type="email" class="form-control" id="email_profil" name="email_profil"
                                            placeholder="saisie votre Email " required>

                                    </div>
                                    
                                    <div class="mb-3">

                                        <label class="form-label">Password : </label>
                                        <input type="password" class="form-control" id="passw_profil"
                                            name="passw_profil" placeholder="saisie votre Password " required>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auzone_libre\resources\views/components/pages/billeterie.blade.php ENDPATH**/ ?>