<?php
include '../../../models/student.php';


use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $genre = $_POST['genre'];
  $level = $_POST['level'];
  $promotion = $_POST['promotion'];
  $image = $_FILES['image']['name'];
  $temp_name = $_FILES['image']['tmp_name'];
  $folder = "../../assets/img/" . $image;

  $utilisateur_result = insert($name, $email, $phone, $genre, $folder);

  if ($utilisateur_result[0]) {
    $lastInsertedId = mysqli_insert_id($connect);
    $etudiant_result = insert_Etudiant($level, $promotion, $lastInsertedId);


    $generatedPassword = $utilisateur_result[1];



    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = $_ENV['HOST'];
    $mail->SMTPAuth = $_ENV['SMTPAUTH'];
    $mail->Username =$_ENV['USERNAME'];
    $mail->Password = $_ENV['PASSWORD'];
    $mail->SMTPSecure = $_ENV['SMTPSECURE'];
    $mail->Port = $_ENV['PORT'];

    $mail->isHTML(true);
    $mail->setFrom('meqdarghizlane@gmail.com', 'Meqdar Ghizlane');
    $mail->addAddress($email, $name);

    $mail->Subject = 'Welcome to Marionnettes High School Online Portal';
    $mail->Body =
      '<p>Dear ' . $name . ',</p>
    <p>Congratulations! You are now a part of Marionnettes High School Online Portal. We are thrilled to have you on board.</p>
    <p>Your login details:</p>
    <ul>
        <li><strong>Email:</strong> ' . $email . '</li>
        <li><strong>Password:</strong> ' . $generatedPassword . '</li>
    </ul>
    <p>Please use these credentials to log in to your account. Explore the portal to access resources, assignments, and stay connected with the Marionnettes High School community.</p>
    <p>If you have any questions or need assistance, don\'t hesitate to reach out. We\'re here to help you succeed!</p>';


    if (!$mail->send()) {
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message sent!';
    }


    if ($etudiant_result) {
      move_uploaded_file($temp_name, $folder);
      header("location:../../../views/admin/student/afficher.php");
      exit();
    } else {
      echo "Error inserting student data";
    }
  } else {
    echo "Error inserting user data";
  }
}
