<?php
    $xmlData = "<?xml version='1.0' encoding='UTF-8'?>
    <document>
    <user>John Doe</user>
    <email>john@example.com</email>
    </document>";

    $xml = simplexml_load_string($xmlData) or die("Error connot create object");

    if ($xml === false)
    {
        echo "failed loading XML: ";
        foreach (libxml_get_errors() as $error)
        {
            echo "<br>", $error->message;
        }
    }else{
        print_r($xml);
    }


?>

