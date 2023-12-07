<?php
include '../../../controllers/admin/teacher/afficher.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display teachers</title>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../../../assets/css/dashboard/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <?php include '../../includes/dashboard_aside.php' ?>
    <div class="content">
        <div class="row tab">
            <div class="col-xl-6 col-md-6 mb-5" data-aos="fade-right" data-aos-duration="1500">
                <a href="ajouter.php" class="btn btn-success mb-3" data-aos="fade-down" data-aos-duration="1500">add teacher</a>

                <div class="card border-left-primary shadow h-100 custom-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>genre</th>
                                        <th>matiere</th>
                                        <th>image</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($rows = mysqli_fetch_assoc($result)) :
                                    ?>
                                        <tr>
                                            <th><?php echo $rows['professeur_name'] ?></th>
                                            <th><?php echo $rows['email'] ?></th>
                                            <td><?php echo $rows['phone'] ?></td>
                                            <td><?php echo $rows['genre'] ?></td>
                                            <td><?php echo $rows['subject_name'] ?></td>
                                            <td><img src="../<?php echo $rows['image'] ?>" style="max-width:100px;" class=""></td>
                                            <td>
                                                <a href="modifier.php?id=<?= $rows['professeur_id'] ?>" class="link-dark"><i class='bx bxs-pencil fs-5 me-3'></i></a>
                                                <a href="../../../controllers/admin/teacher/delete.php?id=<?= $rows['professeur_id'] ?>" class="link-danger" onclick="return confirm('Are you sure you want to delete this Student?');"><i class='bx bxs-user-x fs-5'></i></a>
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


    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>



<script>
    AOS.init();
</script>

</html>