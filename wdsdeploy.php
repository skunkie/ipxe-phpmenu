<?php

require_once('params.php');

echo "param arch x86_64\n";
echo "param wim wdsdeploy.wim\n";
echo "chain --replace --autofree {$url}wimboot.php##params\n";

?>
