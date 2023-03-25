<?php


$max = 6;

for ($n1 = 0; $n1 <= $max; $n1++) 
{ 
    for ($blank = $max - $n1; $blank > 0; $blank--) 
    { 
        echo " ";
    }
    for ($n2 = 0; $n2 < $n1; $n2++) 
    { 
        echo "*";
    }
    echo "\n";
}

for ($n1 = 0; $n1 <= $max; $n1++) 
{ 
    for ($blank = $max - $n1; $blank > 0; $blank--) 
    { 
        echo " ";
    }
    for ($n2 = 0; $n2 < $n1; $n2++) 
    { 
        echo "★";
    }
    echo "\n";
}


?>