<?php

require_once('params.php');

echo "kernel {$url}bin/gparted/vmlinuz boot=live config union=aufs noswap noprompt vga=791 locales=en_US.UTF-8 keyboard-layouts=NONE gl_batch fetch={$url}bin/gparted/filesystem.squashfs\n";
echo "initrd {$url}bin/gparted/initrd.img\n";
echo "boot\n";

?>
