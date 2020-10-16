<?php

$password="Password";

$encrypt_password=password_hash($password, PASSWORD_BCRYPT);

echo $encrypt_password;

echo PHP_EOL;

if(password_verify('Passwor' , $encrypt_password))
{
    echo "You have access to this page";
}else{
    echo "You dont have accses to this page";
}