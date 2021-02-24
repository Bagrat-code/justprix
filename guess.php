<?php


echo $_POST['guess'];
 echo "<br>";
 echo "<br>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $guess = 3000;

    if ($_POST['guess'] < $guess) {
        echo " Le JUSTE PRIX est + élevé ";
        echo "<br>" ;
    };

    if ($_POST['guess'] > $guess) {
        echo " Le JUSTE PRIX est - élevé ";
        echo "<br>" ;
    } 


    if ($_POST['guess'] != $guess) {
        echo "LE PRIX n'est pas bon, retente ta chance
        <br>
        
        <img src='no.gif'>
        <img src='badluck.gif'>
        <img src='west.gif'>
        <img src='prière2.jpg'>" ;
    } else {
        echo "JUSTE PRIX, TU AS DEVINE, FELICITATIONS !!! 
        <br>
        <img src='good.gif'>
        <img src='jotaro.gif'>
        <img src='kiss.gif'>";
    }
}

?>


