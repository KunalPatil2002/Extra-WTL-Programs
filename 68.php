<?php 
function generatePassword($length = 8) { 
return 
substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123
 456789'), 0, $length); 
} 
echo "Random password: " . generatePassword(); 
?> 