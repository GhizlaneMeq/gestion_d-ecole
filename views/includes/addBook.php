<?php 
$Categories_query = "SELECT * FROM `categories`";
$Categories_result = mysqli_query($connect, $Categories_query);
 ?>
<div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-container">
                            <h2 class="text-center text-white">Book Information</h2>
                            <form action="../../controllers/admin/booking/add_book.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="auteur">Author:</label>
                                    <input type="text" class="form-control" id="auteur" name="auteur" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="file" class="form-control-file" id="image" name="image" accept="image/" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="resume">Summary:</label>
                                    <textarea class="form-control" id="resume" name="resume" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="nombre_page">Number of Pages:</label>
                                    <input type="number" class="form-control" id="nombre_page" name="nombre_page" required>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category:</label>
                                    <select class="form-control" id="category" name="category_id" >
                                        <?php
                                        while ($rows = mysqli_fetch_assoc($Categories_result)): 
                                        ?>
                                        <option value="<?php echo $rows['id'] ?>"><?php echo $rows['nom']  ?></option>
                                        <?php
                                         endwhile;
                                        ?>
                                    </select>
                                </div> <br> <br>
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Ad Book</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>