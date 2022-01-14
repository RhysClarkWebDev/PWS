<?php
  $email_error = $first_name_error = $last_name_error = $address_error = $addresshome = $number_error = $contact_error = $where_error = $subject_error = $message_error = $recaptcha_error = "";
  $email = $first_name = $last_name = $address = $addresshome_error = $number = $contact = $where = $subject = $message = $success = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
      $email_error = "Email is required";
    }
    else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
      }
    }


    if (empty($_POST["first_name"])) {
      $first_name_error = "First name is required";
    }
    else {
      $first_name = test_input($_POST["first_name"]);
      }

      if (empty($_POST["last_name"])) {
        $last_name_error = "Last name is required";
      }
      else {
        $last_name = test_input($_POST["last_name"]);
        }

      if (empty($_POST["address"])) {
        $address_error = "Address is required";
      }
      else {
        $address = test_input($_POST["address"]);
        }

        if (empty($_POST["addresshome"])) {
          $addresshome_error = "";
        }
        else {
          $addresshome = test_input($_POST["addresshome"]);
          }

        if (empty($_POST["number"])) {
          $number_error = "Number is required";
        }
        else {
          $number = test_input($_POST["number"]);
          }


          if(empty($_POST["contact"])){
            $contact_error = "";
          }
          else {
            $contact = test_input($_POST["contact"]);
          }

          if (empty($_POST["where"])) {
            $where_error = "Please pick an option";
          }
          else {
            $where = test_input($_POST["where"]);
            }







    if (empty($_POST["message"])) {
      $message = "";
    }
    else {
      $message = test_input($_POST["message"]);
    }





    $secretKey = "6LfRGFcdAAAAAEh97wo9va9bCNu_o6o8YNYJGeBq";
		$responseKey = $_POST['g-recaptcha-response'];
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey";
		$response = file_get_contents($url);
		$response = json_decode($response);
    if ($response->success)
			;
		else
		 	$recaptcha_error ="Verification Failed, Please Tick the Captcha";



    if($first_name_error == ""  and $last_name_error == "" and $email_error == "" and $address_error == "" and $addresshome_error == "" and $number_error == ""  and $contact_error == "" and $where_error == "" and $response->success) {
      $message_body = "";
      unset ($_POST['submit']);
      foreach ($_POST as $key => $value){
        $message_body .= "$key: $value\n";
      }



      $to = 'info@pwsarchitecture.co.uk';
      $subject = test_input($_POST["address"]);


      $message = "<html>
      <body>
      <br>
      <br>
      <h2>DETAILS</h2>
      <p><span style='font-weight:bold'> Name:</span> $first_name $last_name</p>
      <p><span style='font-weight:bold'> Phone:</span> $number</p>
      <p><span style='font-weight:bold'> Address (Site):</span> $address</p>
      <p><span style='font-weight:bold'> Address (Home):</span> $addresshome</p>
      <p><span style='font-weight:bold'> Preferred Contact Method:</span> $contact</p>
      <p><span style='font-weight:bold'> Where did you find PWS?:</span> $where</p>
      <br>
      <br>
      <h2>MESSAGE</h2>
      <p>$message</p>


      </body>
      </html>";



      $headers = "From: $email" . "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


      if (mail($to, $subject, $message, $headers)){
        $success = "Your message has been sent, thank you.";
        $email = $name = $subject = $message = '';
      }

    }
  }





function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
