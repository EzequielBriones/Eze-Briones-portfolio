 <?php
    if (isset($_POST["email"])) {
      $username = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

      $to = "ezebriones01@gmail.com";
      $subject = $message;

      $message = "Name: {$username} Email: {$email}  Message: " . $message;

      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $headers .= 'From: Ezequiel';

      $mail = mail($to,$subject,$message,$headers);

      if ($mail) {
        echo "<script>alert('Mail Send.');</script>";
      }else {
        echo "<script>alert('Mail Not Send.');</script>";
      }
    }
  ?>