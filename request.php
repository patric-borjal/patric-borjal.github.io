<?php

function email_validation($email) {
    return (!preg_match(
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)) ? FALSE : TRUE;
}
  
if(!email_validation($_POST['email'])) {
    echo "Invalid email address.";
}
else {
    echo "Valid email address.";
}

if (isset($_POST['submit'])) {
    $name = $_POST['contact_name'];
    $email = $_POST['email_address'];
    $subject = $_POST['subject'];
    $message = $_POST['comments'];

}

echo '<p>Message from ' . $name . ' (' . $email . ')</p>';
echo '<p>Re: ' . $subject . '</p>';
echo '<p>' . $message . '</p>';

?>

