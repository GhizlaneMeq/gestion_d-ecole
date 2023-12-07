<div class="modal fade" id="displayBookModal" tabindex="-1" aria-labelledby="displayBookModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width:1000px">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card border-left-primary shadow h-100 custom-card">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>auteur</th>
                                                <th>description</th>
                                                <th>resume</th>
                                                <th>nombre de page</th>
                                                <th>category</th>
                                                <th>image</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($rows = mysqli_fetch_assoc($book_result)) :
                                                /* $id = $rows['id'];
                                                $category_query = "SELECT categories.nom,categories.id FROM livres JOIN categories ON livres.category_id = categories.id WHERE livres.id=$id";
                                                $category_result = mysqli_query($connect, $category_query);
                                                $rowss = mysqli_fetch_assoc($category_result); */
                                            ?>
                                                <tr>
                                                    <th><?php echo $rows['name'] ?></th>
                                                    <th><?php echo $rows['auteur'] ?></th>
                                                    <td><?php echo $rows['description'] ?></td>
                                                    <td><?php echo $rows['resume'] ?></td>
                                                    <td><?php echo $rows['nbrPage'] ?></td>
                                                    <td><?php echo 'hghf'/* $rowss['nom'] */ ?></td>
                                                    <td><img src="<?php echo $rows['image'] ?>?>" style="max-width:100px;" class=""></td>
                                                    <td>
                                                        <a href="ModifierLivre.php?id=<?= $rows['id'] ?>" class="link-dark"><i class='bx bxs-pencil fs-5 me-3'></i></a>
                                                        <a href="SupprimerLivre.php?id=<?= $rows['id'] ?>" class="link-danger" onclick="return confirm('Are you sure you want to delete this book?');"><i class='bx bxs-user-x fs-5'></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            endwhile;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>