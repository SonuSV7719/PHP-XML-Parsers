<?php
    $xml = simplexml_load_file("xmlData.xml") or die("Error while creating object");

    echo $xml->user . "<br>";
    echo $xml->email . "<br>";
   
    $xmlBookData = simplexml_load_file("books.xml");

    echo $xmlBookData->book[0]->title. "<br>";
    echo $xmlBookData->book[1]->title. "<br>";

    //PHP SimpleXML - Get Node Values - Loop

    foreach ($xmlBookData->children() as $books)
    {
        echo $books->title . ", ";
        echo $books->author . ", ";
        echo $books->year . ", ";
        echo $books->price . "<br>";

    }

    //PHP SimpleXML - Get Attribute Values

    echo $xmlBookData->book[0]["category"] . "<br>";
    echo $xmlBookData->book[1]->title["lang"] . "<br>";

    //PHP SimpleXML - Get Attribute Values - Loop

    foreach($xmlBookData->children() as $books)
    {
        echo "Languages of each title in book: ".$books->title['lang'];
        echo "<br>";
    }


?>