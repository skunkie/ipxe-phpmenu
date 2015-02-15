<?php

require_once('params.php');

echo "kernel {$url}bin/centos7live/vmlinuz root=live:{$url}bin/centos7live/squashfs.img rootfstype=auto ro rd.live.image quiet rhgb rd.luks=0 rd.md=0 rd.dm=0\n";
echo "initrd {$url}bin/centos7live/initrd.img\n";
echo "boot\n";

?>
