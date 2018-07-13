
<?php 

if(isset($_POST['feedback_submit'])){
     $feedback_name = $_POST['feedback_name'];
     $feedback_email = $_POST['feedback_email'];
     $feedback_message = $_POST['feedback_message'];

     $recipent = "youremail@youremail.com";
     $subject = "New feedback from $feedback_name";
     $content = "Name : $feedback_name Email : $feedback_email Message : $feedback_message.";
     $header = "From: $feedback_name <$feedback_email>";

     $email_status = mail($recipent, $subject, $content, $header);

     if($email_status){
          header("Location: http://localhost:8888/contact-form/index.php?success=1");
     }else{
          header("Location: http://localhost:8888/contact-form/index.php?success=-1");          
     }
}

?>