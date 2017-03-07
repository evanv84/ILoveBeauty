<?php
    // if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $from = 'I Love Beauty'; 
        $to = 'event-sochi@mail.ru, gatodirect@gmail.com'; 
        $subject = 'Новая заявка с сайта ';
        
        $body ="Здравствуйте! У Вас новая заявка с сайта.\n\n
        Имя: $name\n\n
        Номер телефона: $phone\n\n
        ";

// If there are no errors, send the email

        mail ($to, $subject, $body, $from);
        header('location: /thank-you.html');
        exit();

    // }
?>