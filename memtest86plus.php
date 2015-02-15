<?php

require_once('params.php');

echo "set 209:string {$url}pxelinux.cfg/memtest86plus.cfg\n";
echo "chain --replace --autofree {$url}bin/pxelinux.0\n";

?>
