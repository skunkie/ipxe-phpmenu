<?php

require_once('params.php');

if (isset($_POST['arch'])) { $arch = $_POST['arch']; }
if (isset($_POST['wim'])) { $wim = $_POST['wim']; }

echo "kernel {$url}bin/wimboot/wimboot\n";
echo "initrd {$url}bin/wimboot/{$arch}/bootmgr         bootmgr\n";
echo "initrd {$url}bin/wimboot/{$arch}/bcd             BCD\n";
echo "initrd {$url}bin/wimboot/{$arch}/boot.sdi        boot.sdi\n";
echo "initrd {$url}bin/wimboot/{$arch}/sources/{$wim}  boot.wim\n";
echo "boot\n";

?>
