<?php

require_once('params.php');

echo "kernel {$url}bin/memdisk iso\n";
echo "initrd {$url}bin/esxi/fujitsu/esxi55fujitsu.iso\n";
echo "boot\n";

?>
