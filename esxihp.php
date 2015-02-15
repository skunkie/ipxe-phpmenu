<?php

require_once('params.php');

echo "kernel {$url}bin/memdisk iso\n";
echo "initrd {$url}bin/esxi/hp/esxi55hp.iso\n";
echo "boot\n";

?>
