<?php

if (!authenticated()) {
    echo "echo Authentication failed!\n";
    echo "sleep 3\n";
    echo "chain --replace --autofree {$url}boot.php\n";
    exit();
}

?>
