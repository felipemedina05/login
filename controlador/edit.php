<?php

$hash = '$2y$10$ETk9xEAwHzfgFur926cPCu.SfYYLSIWcLLymCoWVWcThPqU4N4Jtu';
$contrasena = 'admin';

$verify = password_verify($contrasena, $hash);
var_dump($verify);
