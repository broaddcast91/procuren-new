<?php 
if(isset($_POST['submit'])){
   $to = "haranathpriyan@gmail.com";
    
   
    $name = $_POST['name']; // this is the sender's Email address
   
    $Email = $_POST['email'];
     $company = $_POST['subject'];
      $comment = $_POST['message'];
     
    $subject = "ProcureN Enquiry form";
    $subject2 = "Copy of your form submission";
    $message =  " CLIENT CONTACT DETAILS  :" . "\n\n"." Client Name : " . $_POST['name'] .  "\n\n"."E-mail :" . $_POST['email'].  "\n\n"."Company Website : " . $_POST['subject']."\n\n"."Message : " . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['email'];

    $headers = "From:" .  $name;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    // sends a copy of the message to the sender

echo "<script>
    window.location = 'index.html';
</script>";
    // to redirect to another page.
    }
?>