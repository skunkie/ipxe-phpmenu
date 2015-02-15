<?php

require_once('params.php');

echo "kernel {$url}bin/memdisk iso\n";
echo "initrd {$url}bin/acronisdd11/acronis_dd11_linux_based.iso\n";
echo "boot\n";

?>
