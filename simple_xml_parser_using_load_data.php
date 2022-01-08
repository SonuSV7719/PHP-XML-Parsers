<?php
    $xmlData = simplexml_load_file("xmlData.xml");


    if ($xmlData===false)
    {
        echo "Failed loading XML";
        foreach (libxml_get_errors() as $error)
        {
            echo "<br>" , $error->message;
        }
        
    }
    else{
        print_r($xmlData);
    }

?>