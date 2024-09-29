
   <?php
function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>

<?php
// display form if user has not clicked submit
  // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["from"]);
    if ($mailcheck==FALSE) {
      echo "Invalid input";
    } else {
      $from = $_POST["from"]; // sender
      $subject = $_POST["subject"];
      $message = $_POST["message"];
	  $message .= "Your Contact Detail from www.citysportsclub.in"."\n";
	   $message .= "Name: ".$_POST['userName']."\n";
	  $message .= "Email: ".$_POST['userEmail']."\n";
	  $message .= "Mobile: ".$_POST['userPhone']."\n";
	  $message .= "Message: ".$_POST['userMsg']."\n";
		
	  // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("kushaldhole@hotmail.com",$subject,$message,"From: $from\n");
	  echo "<script>alert('Thank You!! We will get back to you shortly');</script>";
     // echo "<script>window.location.reload();</script>";
	  
     
    }
  }

?> 


    
    
                    <form class="fixed" name="contact-form" method="post" action="">
                    <input type="hidden" name="from" value="info@epharmc.com">
   <input type="hidden" name="subject" value="Enquiry Email form www.breezyfans.com">
    <input type="hidden" name="message">  
                        <fieldset>
                            <div id="formstatus"></div>
                            
                            <div class="row">
                            	<div class="span4">
                            
                                    <p>
                                        <input class="span4" type="text" id="name" name="userName" value="" placeholder="name" />
                                    </p>
                                
                                </div><!-- end .span4 -->
                                <div class="span4">
                                
                                    <p>
                                        <input class="span4" type="text" id="email" name="userEmail" value="" placeholder="email" />
                                    </p>
                                    
                                </div><!-- end .span4 -->
                            </div><!-- end .row -->
                            
                            <p>
                                <input class="span8" type="text" id="subject" name="userPhone" value="" placeholder="contact no"  />
                            </p>
                            
                            <p>
                                <textarea class="span8" id="message" name="userMsg" rows="7" cols="25" placeholder="write a message"></textarea>
                            </p>
                            
                            <p class="last text-right">
                                <input id="submit" type="submit" name="submit" class="btn btn-blue" value="Send" />
                            </p>
                        </fieldset>
					</form><!-- end #contact-form -->
               
		

</body>
</html>