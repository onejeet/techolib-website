<?php
use \google\appengine\api\mail\Message;

    include_once('includes/functions.php');



            $msg = "NAME: "  .$_POST['name']    ."<br>\n";
            $msg .= "EMAIL: "  .$_POST['email']    ."<br>\n";
            $msg .= "WEBSITE: "  .$_POST['web']    ."<br>\n";
            $msg .= "COMMENTS: "  .$_POST['comments']    ."<br>\n";

            $subject = "Contact Form from www.techolib.com";

                $message = new Message();
                $message->setSender("admin@techolib.com");
                $message->setSubject($subject);
                $message->setTextBody($msg);
                $message->send();

?>

