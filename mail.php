<html>
<title>Mail</title>
<head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js'></script>
<script type="text/javascript">
 function a(){
              swal({
                title: "Thank you for contacting Us. We will contact you shortly.",
                timer:5000,
               
              }, function(){
                    window.location.href = "https://therohitmarne.github.io/shreekala/index.html";
              });
};
</script>
</head>
<body>

<?php
$today = date("d-m-Y"); 
// $email1 = "rohitmarne789@gmail.com.test-google-a.com";
$email1 = "rohitmarne789@gmail.com"; 

if(isset($_POST['submit']))

{
$name  = $_POST["name"];
$email  = $_POST["email"];
$no  = $_POST["phone"];
$select   = $_POST["select"];
// $msg  = $_POST["msg"];

$mysite = "https://therohitmarne.github.io/shreekala/index.html";
$webmaster = "Thank You From $mysite";


$subject = "Email From Shree Kala Architecture & Interior Design - Contact Us";

$message = "<html><body><br>
<table width='100%' border='1' cellspacing='0' cellpadding='5'>
 <tr>
    <td width='32%'>Name</td>
    <td width='65%'> ".$name."</td>
  </tr>

  <tr>
    <td>Email Id</td>
    <td> ".$email." </td>
  </tr> 
  <tr>
    <td>Phone</td>
    <td> ".$no." </td>
  </tr>
   <tr>
    <td>Select</td>
    <td> ".$select." </td>
  </tr>
</table>
</body></html>";

$from_address="contact@".$_SERVER['SERVER_NAME'];
$from_name="Shree Kala Architecture & Interior Design";

$headers = "MIME-Version: 1.0\r\n"
  ."Content-Type: text/html; charset=utf-8\r\n"
  ."Content-Transfer-Encoding: 8bit\r\n"
  ."From: =?UTF-8?B?". base64_encode($from_name) ."?= <$from_address>\r\n"
  ."BCC: rohitmarne789@gmail.com.test-google-a.com\r\n"
  ."X-Mailer: PHP/". phpversion();


  if(mail($email1, $subject, $message, $headers, "-fwebmaster@{$_SERVER['SERVER_NAME']}")) 
    {
    echo "<script type='text/javascript'>a();</script>";  
    } 
     else 
    { 
      
    }
}
else
{
    
}


?>

</body>
</html>
