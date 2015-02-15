<?php

require_once('params.php');

$isset  = "";
$chain  = "kernel {$url}bin/install_centos6/vmlinuz ip=\${ks_ipaddr} netmask=\${ks_netmask} ";
$chain .= "gateway=\${ks_gateway} dns=\${ks_dns} KS_HOSTNAME=\${ks_hostname} ks=\${ks_file}\n";
$chain .= "initrd {$url}bin/install_centos6/initrd.img\n";
$chain .= "boot\n";

echo "set ks_dns 10.0.0.1,10.0.0.2\n";
echo "set ks_file http://path/to/kickstart/file.cfg\n";
echo ":submenu\n";
echo $header;

title("CentOS 6 Kickstart Installation", "p");

foreach ($network_info as $k => $v) {
    echo "item --gap iPXE {$v}" . str_repeat(".", ($offset - 1 - strlen($v))) . ks_get_value($k) . "\n";
}
echo "item --gap\n";

item("...", "up", "menu.php", "p");
foreach ($ks_cfg as $k => $v) {
    item_ks(ks_name_offset($v, $k), $k, "echo -n Set {$v}: \${} && read {$k} && goto submenu", "p");
    $isset .= "isset \${{$k}} && ";
}
echo "item --gap\n";
item_ks("Start Installation", "install_centos6", "{$isset} goto install || goto submenu", "p");

echo $default;

foreach ($entries as $i) {
    echo "{$i}\n";
}

echo ":install\n";
echo $chain;

?>
