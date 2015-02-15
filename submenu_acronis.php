<?php

require_once('params.php');

echo ":submenu\n";
echo $header;

title("Acronis", "hp");
item("...", "up", "menu.php", "hp");
item("Acronis Backup & Recovery 11.5 Linux", "acronisbr115", "acronisbr115.php", "hp");
item("Acronis Disk Director 11 Advanced", "acronisdd11", "acronisdd11.php", "hp");

echo $default;

foreach ($entries as $i) {
    echo "{$i}\n";
}

?>
