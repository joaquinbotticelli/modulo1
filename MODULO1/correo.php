<?php 

if(isset($_POST['enviar'])){
    if(!empty($_POST['name'])&& !empty($_POST['email'])&& !empty($_POST['asunto'])&& !empty($_POST['msg'])){
       $name= $_POST['name'];
       $asunto= $_POST['asunto'];
       $msg= $_POST['msg'];
       $email=$_POST['email'];
       $header= "From: noreply@exaple.com" . "\r\n";
       $header.= "Reply-To: noreply@exaple.com" . "\r\n";
       $header.= "X-Mailer: PHP/". phpversion();
       $mail= @mail($email,$asunto,$msg,$header);
       if ($mail){
        echo "<h4 Mail enviado exitosamente!</h4>";

       } 
    }
}