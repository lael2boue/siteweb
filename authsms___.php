﻿<?php
session_start();

header("Content-Type: text/html; charset=UTF-8");

$_SESSION['sender'] = $_GET['sender'];
$_SESSION['recipient'] = $_GET['recipient'];
$_SESSION['message'] = $_GET['message'];

//DEFINITION DES VARIABLES
$login = $_SESSION['login'];
$password = $_SESSION['pwd'];

//"username=Your Username&password=Your Password&mt=Message Type&fl=Sent As Flash Message &sid=Sender Name&mno=Mobile Number&ipcl=Your Server Ip Address&msg=Message"

// VERIFICATION SI LA METHODE EST "POST"
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {

        if($login != "sylvere18" || $password != "web43947")
        {
            die("Nom utilisateur ou mot de passe incorrect !");
        }else{
//            echo utf8_decode('Texte accentué.' ). "<br>";
//            echo 'Texte accentué. <br>';
//            echo $login . "<br>";
//            echo $_SESSION['sender']. "<br>";
//            echo $_SESSION['recipient']. "<br>";
//            echo $_SESSION['message']. "<br>";
//            echo $password. "<br>";
            $sender = htmlspecialchars($_SESSION['sender']);
            $recipient = htmlspecialchars($_SESSION['recipient']);
//            $message = iconv("ISO-8859-15", "UTF-8//TRANSLIT", htmlspecialchars($_SESSION['message']));
            $message = htmlspecialchars($_SESSION['message']);
//            echo $message. "<br>";
            $msgType = 0;
            $flash = 0;
            $ip = $_SERVER['REMOTE_ADDR'];
//            echo $ip. "<br>";
            header("location:https://1s2u.com/sms/sendsms/sendsms.asp?username=" . $login . "&password=" .$password. "&mt=" .$msgType. "&fl=" .$flash. "&sid=" .$sender. "&mno=" .$recipient. "&ipcl=" .$ip. "&msg=" .$message);
        }

    }

?>

<?php
session_destroy();
?>
