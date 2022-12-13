<?php
 function scramble_word($word) {
        if (strlen($word) < 2)
            return $word;
        else
            return $word{0} . str_shuffle(substr($word, 1, -1)) . $word{strlen($word) - 1};
    }
$str =  $_POST['str'];
$limiter = ' ';
$words = explode($limiter, $str);
 
foreach ($words as $word) {
    echo scramble_word($word);
    echo " ";
    
}

?>