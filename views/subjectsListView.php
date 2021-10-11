 <div class="row">
     <div class="col-6 my-3 mx-auto">
         <div class="card shadow text-center">
             <div class="card-body">
                 <h2 class="card-title">Liste des matières</h2>
                 <p class="card-text">
                 <ul>
                     <?php foreach ($subjectsArray as $index => $oSubject) : ?>
                         <li><?php echo $oSubject->getName() . " " . $oSubject->getDuration() . " heures " . $oSubject->getDescription() . ", Note: " . $oSubject->calculNote() . " coef: " . Subject::COEFFICIENT;
                                if ($oSubject->getDescription() > 4) : ?>
                                 <strong><?php echo "module important" ?></strong>
                                 <div class="d-flex justify-content-center">
                                     <div class="col-2">
                                         <form action="index.php?action=matieres/delete" method="POST">
                                             <button name="delete" id="delete" type="submit" class="btn btn-danger " value="<?php echo $index; ?>">Supprimer</button>
                                         </form>
                                     </div>
                                     <div class="col-2">
                                         <form action="index.php?action=matieres/update" method="POST">
                                             <button name="update" id="update" type="submit" class="btn btn-warning" value="<?php echo $index; ?>">Modifier</button>
                                         </form>
                                     </div>


                                 </div>

                         </li>
                 <?php endif;
                            endforeach; ?>
                 </ul>
                 </p>
                 <a href="index.php?action=matieres/add"><button name="add" id="add" type="submit" class="btn btn-success">Ajouter</button></a>
             </div>
         </div>
     </div>
 </div>