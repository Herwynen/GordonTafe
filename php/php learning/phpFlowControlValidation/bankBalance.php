<?php
#   1. Write a file that compares two bank balances using an else If statement. (EXAMPLE 1)
#   Use an appropriate variable type for your data.  Return whether balance1 is greater than, equal to or less than balance 2.  
#   Save as BankBalance.php
#   Christopher van Herwynen
    $bal1 = 945.2;
    $bal2 = 945.2;
    
    if($bal1 < $bal2)
        echo"$bal1 is less than $bal2.";
    
    elseif($bal1 == $bal2)
        echo"$bal1 and $bal2 have the same value.";
    
    elseif($bal1 > $bal2)
        echo"$bal1 is greater than $bal2.";
?>