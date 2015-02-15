<?php

require_once('params.php');

echo "kernel {$url}bin/clonezilla/vmlinuz boot=live config noswap nolocales edd=on nomodeset ocs_live_run=\"ocs-live-general\" ocs_live_extra_param=\"\" keyboard-layouts=NONE ocs_live_batch=\"no\" locales=en_US.UTF-8 vga=791 nosplash noprompt toram=filesystem.squashfs i915.blacklist=yes radeonhd.blacklist=yes nouveau.blacklist=yes vmwgfx.enable_fbdev=no fetch={$url}bin/clonezilla/filesystem.squashfs\n";
echo "initrd {$url}bin/clonezilla/initrd.img\n";
echo "boot\n";

?>
