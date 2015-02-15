<?php

require_once('params.php');

echo "cpuid --ext 29 && set arch x86_64 || set arch i386\n";
echo "param arch \${arch}\n";
echo "param wim win7pe_reboot_pro_\${arch}.wim\n";
echo "chain --replace --autofree {$url}wimboot.php##params\n";

?>
