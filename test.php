<?php
require_once 'user.php';

$user = new User("Joao", "255.255.255.0", "Rua das flores");

echo $user->getNome();