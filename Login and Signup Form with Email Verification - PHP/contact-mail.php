<?php  
if(isset($_POST['submit'])) {
 $mailto =  "21ce083@charusat.edu.in";  //My email address
 //getting customer data
 $Name = $_POST['Name']; //getting customer name
 $fromEmail = $_POST['Email']; //getting customer email
 //$phone = $_POST['tel']; //getting customer Phome number
 $subject = $_POST['subject']; //getting subject line from client
 $messages =  $_POST['message'];
 $subject2 = "Confirmation: Message was submitted successfully,Sunshine Jewellery | Nadiad"; // For customer confirmation
 
 //Email body I will receive
 $message = "Client Name: " . $Name . "\n"
 . "\n";
 "Client Subject: " . $subject . "\n"
 . "\n"
//  ."Client Message: " . "\n" . $_POST['message'];
 ."Client Messages: " . "\n" . $_POST['message'] ."\n";
 "Client Messages: " . "\n" . $messages ."\n";
  
 
 //Message for client confirmation
 $message2 = "Dear " . $Name . "\n"
 . "Thank you for contacting Sunshine Jewellers. We will get back to you shortly!" . "\n\n"
 ."Your Subject: " . $subject . "\n"
 . "\n"
 . "You submitted the following message: "
 . $_POST['message'] . "\n"
 ."\n"
 . "Regards," . "\n" . "Sunshine Jewellery | Nadiad";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject,$Name, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2 , $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
    // echo ("mail sent success");
  if ($result1 && $result2) {
    // header('location: thankyou.html');
    echo ("mail sent success");
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
}
 
?>