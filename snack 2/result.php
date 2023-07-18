<?php

// raccolgo i dati dal form
$age = $_GET['age'] ?? '';
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';

// validazione campi
$is_age_valid = is_numeric($age) && $age > 0;
$is_name_valid = mb_strlen(trim($name)) > 3;
$is_email_valid = str_contains($email, '.') && str_contains($email, '@');

$is_form_invalid = !$is_name_valid || !$is_email_valid || !$is_age_valid;

if($is_form_invalid){
    echo 'Accesso Negato';
} else{
    echo 'Accesso Riuscito';
}

?>