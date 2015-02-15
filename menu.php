<?php

require_once('params.php');

echo ":menu\n";
echo $header;

title("Disk Utilities", "hp");
item("GNOME Partition Editor (GParted)", "gparted", "gparted.php", "hp");
item("Clonezilla", "clonezilla", "clonezilla.php", "hp");
item("Acronis ...", "acronis", "submenu_acronis.php", "hp");

title("Diagnostics Utilities", "hp");
item("Memtest86+", "memtest86plus", "memtest86plus.php", "hp");
item("Hardware Detection Tool", "hdt", "hdt.php", "hp");
item_cmd("Config iPXE", "configipxe", "config", "p");
item_cmd("iPXE shell", "ipxeshell", "shell", "p");

title("Windows Preinstallation Environment", "hp");
item("Windows 7 PE", "win7pe", "win7pe.php", "hp");
item("Windows 7 PE [reboot.pro]", "win7pe_reboot_pro", "win7pe_reboot_pro.php", "hp");

title("Windows Deployment Services", "hp");
item("Deploy", "wdsdeploy", "wdsdeploy.php", "hp");
item("Capture", "wdscapture", "wdscapture.php", "hp");

title("Installation of Operating Systems", "p");
item("CentOS 6 x86_64", "install_centos6", "install_centos6.php", "p");

title("Live OS", "p");
item("CentOS 7 Live", "centos7live", "centos7live.php", "p");

title("VMware", "p");
item("Install VMware ESXi for HP server", "esxihp", "esxihp.php", "p");
item("Install VMware ESXi for Fujitsu server", "esxifujitsu", "esxifujitsu.php", "p");

echo "item --gap\n";
echo "item backtotop Back to top\n";
echo "item signin Sign in as a different user\n";
echo $default;

foreach ($entries as $i) {
    echo "{$i}\n";
}
echo ":backtotop\n";
echo "goto menu\n";
echo ":signin\n";
echo "chain --replace --autofree {$url}boot.php\n";

?>
