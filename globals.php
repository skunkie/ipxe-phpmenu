<?php

header("Content-type: text/plain");
echo "#!ipxe\n";

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];
$url      = "http://{$_SERVER["SERVER_ADDR"]}:{$_SERVER["SERVER_PORT"]}/";
$header   = "menu Preboot eXecution Environment\n";
$access   = null;
$index    = 0;
$entries  = array();
$default  = "choose selected && goto \${selected} || exit 0\n";
$offset   = 20;

$network_info = array(
    'ip'      => 'IP address',
    'netmask' => 'Netmask',
    'gateway' => 'Gateway',
    'dns'     => 'DNS',
);

$ks_cfg = array(
    'ks_ipaddr'   => 'IP address',
    'ks_netmask'  => 'Netmask',
    'ks_gateway'  => 'Gateway',
    'ks_dns'      => 'DNS',
    'ks_hostname' => 'Hostname',
    'ks_file'     => 'Kickstart file',
);

?>
