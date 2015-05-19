$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$to = 'youremail@domain.com';
$subject = 'the subject';
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: youremail@domain.com';
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message) or die('Error sending Mail'); //This method sends the mail.
echo "Your email was sent!"; // success message
}