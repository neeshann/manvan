<?php
//$to  = 'nishan_thapa_428@yahoo.com'; // note the comma
$to = 'neeshann@gmail.com.com';
$subject = 'Online Contact from website';

$message = "
<p><strong>Online Contact Information</strong></p>
<table width=\"50%\" border=\"0\">
  <tr>
    <td>Full Name</td>
    <td>".$_POST['name']."</td>
  </tr>
  <tr>
    <td>Moving Date</td>
    <td>".$_POST['moving_date']."</td>
  </tr>
  <tr>
    <td>Contact Number</td>
    <td>".$_POST['phone']."</td>
  </tr>
  <tr>
  <td>Moving From Postal Code</td>
  <td>".$_POST['from_postalcode']."</td>
  </tr>
  <td>Lift Available</td>
  <td>".$_POST['from_lift']."</td>
  </tr>
  <tr>
  <td>Moving to Postal Code</td>
  <td>".$_POST['to_postalcode']."</td>
  </tr>
  <tr>
  <td>Lift Available</td>
  <td>".$_POST['to_lift']."</td>
  </tr>
  <tr>
  <td>Email</td>
  <td>".$_POST['email']."</td>
  </tr>
  <tr>
  <td>Moving Time</td>
  <td>".$_POST['time']."</td>
  </tr>
  <tr>
  <td>Person Needed</td>
  <td>".$_POST['men']."</td>
  </tr>
  <tr>
  <td>Property Type</td>
  <td>".$_POST['property']."</td>
  </tr>
  
  <tr>
    <td>Additional Information</td>
    <td>".$_POST['message']."</td>
  </tr>
</table>
";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: Man with Van Remvals <neeshann@gmail.com>' . "\r\n";
$headers .= "From: Website <noreply@nishanthapa.com.np>" . "\r\n";

$sm=mail($to, $subject, $message, $headers);

if($sm)
{
	echo "<script>alert('Thank you for your submission. We will contact you shortly.'); location.replace('index.php');</script>";
	exit;
}
else
{
	echo "<script>alert('Temporary Error!'); location.replace('index.php');</script>";
	exit;
}
?>
