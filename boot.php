<?php

header ("Content-type: text/plain");
echo "#!ipxe\n";

function title($name) {
    # the max number of characters for resolution 1024 x 768 is 107
    $total_length = 107;
    $name_length = strlen($name);
    $start = intval(($total_length - $name_length) / 2);
    $end = $total_length - $start - $name_length;
    $title = str_repeat("-", $start) . $name . str_repeat("-", $end);
    echo "item --gap -- {$title}\n";
}

$url = "http://{$_SERVER["SERVER_ADDR"]}:{$_SERVER["SERVER_PORT"]}/";
# set resolution and background
echo "console --x 1024 --y 768 --picture {$url}ipxe.png\n";

echo ":menu\n";
echo "menu Preboot eXecution Environment\n";
echo "set menu-default exit\n";
echo "set menu-timeout 8000\n";

title("Authentication Menu");
echo "item --key 1 login (1) Authentication\n";
echo "item --key 2 exit  (2) Exit iPXE and continue BIOS boot\n";

echo "choose --default \${menu-default} --timeout \${menu-timeout} selected && goto \${selected} || exit 0\n";

echo ":login\n";
echo "login\n";
echo "isset \${username} && isset \${password} || goto menu\n";
echo "params\n";
echo "param username \${username}\n";
echo "param password \${password}\n";
echo "chain --replace --autofree {$url}menu.php##params\n";

echo ":exit\n";
echo "echo Booting from local disks ...\n";
echo "exit 0\n";

?>
