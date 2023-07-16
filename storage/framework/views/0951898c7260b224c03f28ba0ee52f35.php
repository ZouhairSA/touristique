
<?php $__env->startSection('profil_page_id'); ?>
    <div class="title_page"
        style="background: url('<?php echo e(asset('/img/sabyoudA.jpg')); ?>') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                
                <input type="text" value="Bienvenue Mr : <?php echo e($mydata->nom); ?>" class="d-none" id="vall222">
                <h1 id="paragraphe1111" style="color:black;font-size: 70px;font-family: bolder;"></h1>
                
            </div>
        </div>
    </div>

    <script>
        var title = document.getElementById("paragraphe1111");
        var words11 = document.getElementById("vall222");
        var words = words11.value;
        var i = 0;
        var isDeleting = false;

        function type() {
            if (i < words.length) {
                title.innerHTML += words.charAt(i);
                i++;
                setTimeout(type, 220);
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

    <?php if(session()->has('error_55')): ?>
        <div class="col-md-2 ">
            
            <br>
            <div class="text-center">

                <div class="alert alert-danger">
                    <?php echo e(session('error_55')); ?>

                </div>
            </div>
        </div>
    <?php endif; ?>


    <div class="presentation">
        <div class="container">
            <div class="row wow slideInRight" data-wow-duration="2.5s">
                <h3>Bienvenue dans notre espace </h3>
                <p class="container">Nous sommes à votre disposition pour répondre à toutes vos questions et vous aider à
                    planifier votre
                    prochain voyage. N'hésitez pas à parcourir notre site pour découvrir nos offres de voyage et à nous
                    contacter si vous avez besoin d'aide. Bon voyage !</p>

            </div>
        </div>
    </div>

    <div calss="">
        <div class="billetteries_block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 align-self-center">

                        
                        <div class="row">
                            <div class="card">
                                <div class="card-header text-center" style="background-color: #6c757d">
                                    <h2
                                        style="font-family: 'AllisonScript';color: #000000;
                                    font-size: 33px;">
                                        Vos informations</h2>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3 text-center">
                                        <div class="col">
                                            <h3 style="font-family:Markthin">Prénom :</h3>
                                            <input class="text-center" style="font-size: 23px" type="text"
                                                style="font-family:Markthin" value="<?php echo e($mydata->prenom); ?>" disabled>
                                            
                                        </div>
                                        <div class="col">
                                            <h3 style="font-family:Markthin">Nom:</h3>
                                            <input class="text-center" style="font-size: 23px" type="text"
                                                style="font-family:Markthin" value="<?php echo e($mydata->nom); ?>" disabled>
                                            
                                        </div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col">
                                            <h3 style="font-family:Markthin">Email :</h3>
                                            <input class="text-center" style="font-size: 23px" type="text"
                                                style="font-family:Markthin" value="<?php echo e($mydata->email); ?>" disabled>
                                            
                                        </div>
                                        <div class="col">
                                            <h3 style="font-family:Markthin">Référence :</h3>
                                            <input class="text-center" style="font-size: 23px" type="text"
                                                value="<?php echo e($mydata->id); ?>" disabled>
                                            
                                        </div>

                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col">
                                            <h3 style="font-family:Markthin">Numéro de téléphone :</h3>
                                            <input class="text-center" style="font-size: 23px" type="text"
                                                style="font-family:Markthin" value="<?php echo e($mydata->telephone); ?>" disabled>
                                        </div>
                                        

                                        <div class="col text-center">
                                            <label for=""></label><br>
                                            <button type="button" class="btn btn-primary btn-lg btn-block"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo e($mydata->id); ?>">
                                                Modifier</button>
                                        </div>
                                        

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

        

        

        <?php if($reservationsCount > 0): ?>

            <h1 class="text-center" style="font-family: 'AllisonScript';color:rgb(61, 21, 21)">la partie de reservation :
            </h1>
            <br>
            <table class="container table">
                <thead>
                    <tr class="text-center">
                        <th>Ref_Reservation</th>
                        <th>Ref_voyage</th>
                        <th>Voyage</th>
                        <th>Prix</th>
                        <th>Durée</th>
                        <th>Place</th>
                        <th>Restauration</th>
                        
                        <th>Date_Mofication</th>

                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="container text-center">
                            <td><?php echo e($reservation->id); ?></td>
                            <td><?php echo e($reservation->id_voyage); ?></td>

                            <?php
                                // recuperer Id de voyage  du table concerve ------------------:
                                
                                $id_voyage = $reservation->id_voyage;
                                
                                //recuperer data de la table Voyage par le Id ------------------::
                                $TableVoyage = DB::table('voyages')
                                    ->where('id', $id_voyage)
                                    ->first();
                                
                                // chercher le nom de voyage par le id a recuperer ------------------::
                                $nom_Voyage = $TableVoyage->nom_voyage;
                                
                                //recuperer le prix  du voyage:
                                $price = $TableVoyage->prix;
                                
                                //recupere la duree du voyage :
                                $duree = $TableVoyage->duree_voyage;
                                
                                // recuperertotale  des  personnes:
                                $places = $TableVoyage->total_reserved;
                                
                                // //recuperer  le  restauration :
                                
                                $type_rst = $TableVoyage->restauration;
                                $Type_restauration = 'Non';
                                
                                if ($type_rst > 0) {
                                    $Type_restauration = $type_rst . ' fois';
                                }
                                
                            ?>

                            <td><?php echo e($nom_Voyage); ?></td>
                            <td><?php echo e($price); ?></td>
                            <td><?php echo e($duree); ?></td>
                            <td><?php echo e($places); ?></td>
                            <td><?php echo e($Type_restauration); ?></td>
                            
                            <td><?php echo e($reservation->updated_at); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        <?php else: ?>
            <h2 class="container" style="font-family: 'AllisonScript'">Vous n'avez effectué aucune réservation.</h2>
        <?php endif; ?>
    </div>

    <div class="modal fade" id="exampleModal_<?php echo e($mydata->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier votre informations :</h5>
                    

                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('Md_Data_profil')); ?>">
                        
                        <?php echo csrf_field(); ?>
                        <input type="text" class="form-control d-none" value=" <?php echo e($mydata->id); ?>"
                            name="reference_Profil">
                        <div class="mb-3">

                            <label for="name" class="form-label">Name :</label>

                            <input type="text" class="form-control" placeholder="Saisie votre Nom" name="name_Saisie"
                                value="<?php echo e($mydata->nom); ?>">

                            <?php $__errorArgs = ['name_Saisie'];
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

                        <div class="mb-3">

                            <label for="name" class="form-label">Prenom :</label>
                            <input type="text" class="form-control" placeholder="Saisie votre Prenom"
                                name="prenom_Saisie" value="<?php echo e($mydata->prenom); ?>">
                            <?php $__errorArgs = ['prenom_Saisie'];
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

                        <div class="mb-3">

                            <label for="name" class="form-label">Numéro télèphone :</label>
                            <input type="text" class="form-control" placeholder="Saisie votre Numéro télèphone "
                                name="Tel_Saisie" value="<?php echo e($mydata->telephone); ?>">
                            <?php $__errorArgs = ['Tel_Saisie'];
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

                        <div class="mb-3">

                            <label class="form-label">Email : </label>
                            <input type="email" class="form-control" placeholder="Saisie votre Email"
                                value="<?php echo e($mydata->email); ?>" name="Email_Saisie">
                            <?php $__errorArgs = ['Email_Saisie'];
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

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auzone_libre\resources\views/components/pages/profil_page.blade.php ENDPATH**/ ?>