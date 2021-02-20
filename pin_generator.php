<?php 
# Generate the random number
    $rand_pin = mt_rand(100000000000,999999999999);

# Using for loop make at least 200 random pin
    for ($i=0; $i < 200; $i++) { 
        echo $i.'=> '. $rand_pin++ .'<br>';
    }

?>