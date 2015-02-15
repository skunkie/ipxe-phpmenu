<?php

require_once('params.php');

echo "cpuid --ext 29 && set arch 64 || set arch 32\n";
echo "kernel {$url}bin/acronisbr115/kernel\${arch}.dat vga=791 quiet\n";
echo "initrd {$url}bin/acronisbr115/initrd\${arch}.dat\n";
echo "boot\n";

?>
