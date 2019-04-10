<?php 
    $name= $_POST['name'];
    $visitor_email= $_POST['email'];
    $visitor_number= $_POST['phone'];
    $message= $_POST['message'];
        

    $email_form = 'ryajyv@hotmail.com';

    $email_subject = "New Form Submission";

    $email_body = "Nom client : $name .\n".
                    "Email client : $visitor_email .\n".
                    "Téléphone client : $visitor_phone .\n".
                    "Message client : $message .\n";

    $to ="ryajyve@hotmail.com";

    $headers = "From:  $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?> 
