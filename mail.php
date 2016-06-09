<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
use Carbon\Carbon;

// Instantiate the client.
$mgClient = new Mailgun('key-27a54e4cdd30f83e34c4e5d689e56bb1');
$domain = "planetrse-toulouse.org";
$sujet = $_POST['sujet'];
$message = $_POST['message'];
$email = $_POST['email'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date = Carbon::now()->ToDateTimeString();
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'  => 'Site PlanetRSE <contact@planetrse-toulouse.org>',
    'to'    => '<sehli.hayate@live.fr>',
    'cc'	=> $email,
    'subject' => 'Nouveau message Planet-RSE : '.$sujet,
    'html'    => 'Date : '.$date.'<br>Auteur : '.$prenom.' '.$nom.'<br>Email : '.$email.'<br>Message : '.$message
));

//header('Location: https://planetrse-toulouse.org/');


// mrsyljay@gmail.com
echo json_encode(['message'=>'Votre message bien envoyé']); 





