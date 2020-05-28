
<?php

$error = true;
$message = null;


if ($error) {
   $message = 'You have encountered an error';
   // &message değişkeninin type'ı null'dı ancak şimdi stringe çevirdik
}

echo $message; // Burada bir hatamız oluşabilir
