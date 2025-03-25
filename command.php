<?php
if (isset($_GET['ip'])) {
    $ip = $_GET['ip'];
    echo"ip : ". $ip . "<br>";
    $command = shell_exec("ping -c 1 ". $ip);
    echo "commande exécutée : <br>";
    echo "<pre>" . $command . "</pre>";
}else{
    echo 'No IP';
}