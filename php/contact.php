<?php

 //if(isset($_POST['email']) && $_POST['email'] != ''){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailheader = "From:" .$name."<".$email.">\r\n";

    $recipient = "ayrus9@proton.me";

    mail($recipient, $subject, $message, $mailheader)
    or die("Error!");

//}

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayrus Snapshot</title>
    <link rel="icon" type="image/X-UA-Compatible" href="/images/fav64.png">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>

    <div class="container">
        <h1> Thank You for contacting me. I will get back to you as soon as possible! </h1>
        <p class="back"> Go back to <a href="index.html"><u> Main Page </u></a></p>
    </div>  
</body>
</html>
'

?>