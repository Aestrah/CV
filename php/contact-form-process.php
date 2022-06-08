<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "mourier.ludovic.dev@hotmail.com";
    $email_subject = "Stage d'entreprise";

    function problem($error)
    {
        echo "Une erreur à eu lieu concernant l'adresse mail.";
        echo "Cette erreur s'affiche ci-dessous. <br><br>";
        echo $error . "<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Email']) 
    ) {
        problem("Une erreur à eu lieu concernant l'adresse mail.");
    }

    $email = $_POST['Email']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    $email_message .= "Email: " . clean_string($email) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $headers);
?>

    <!-- include your success message below -->


<?php
}
?>

