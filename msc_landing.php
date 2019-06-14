<?php


 if(isset($_POST["submit"]))
{



    //Your code here to handle a successful verification



$name =$_REQUEST["name"];

$email =$_REQUEST["email"];

$phone = $_REQUEST["phone"];

$subject = "MSc BT";

$city ="Landing page";

$message ="Details from landing page";

$date_posting =date("d/m/Y");






$sql = "INSERT INTO `ims_quick_contact` (`id`, `name`, `phone`, `email`, `subject`,`city`, `message`, `date_posting`) VALUES //('', '$name', '$phone',  '$email', '$subject', '$city', '$message', '$date_posting')";  

$rs = mysqli_query($con, $sql);






echo "<script>document.location.href='index.html';</script>";

}

