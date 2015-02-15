<?php

function authenticated() {
    global $username;
    global $password;
    global $access;
    global $USERS;

    $cred = "{$username}:{$password}";
    switch($cred) {
        case array_key_exists($cred, $USERS):
            $authenticated = True;
            $access = $USERS[$cred];
            break;
        default:
            $authenticated = False;
            break;
    }
    return $authenticated;
}

function title($name, $accesses) {
    global $access;
    if (strpos($accesses, $access) !== False) {
        # the max number of characters for resolution 1024 x 768 is 107
        $total_length = 107;
        $name_length = strlen($name);
        $start = intval(($total_length - $name_length) / 2);
        $end = $total_length - $start - $name_length;
        $title = str_repeat("-", $start) . $name . str_repeat("-", $end);
        echo "item --gap -- {$title}\n";
    }
}

function hotkey($item) {
    global $index;
    $index++;
    $hotkey = (($index < 10) ? $index : sprintf("%c", $index + ord('A') - 10));
    return $hotkey;
}

function item($item_name, $item, $ipxe_file, $accesses) {
    global $entries;
    global $url;
    global $access;
    if (strpos($accesses, $access) !== False) {
        $i = hotkey($item);
        echo "item --key {$i} {$item} ({$i}) {$item_name}\n";
        $i = ":{$item}\nchain --replace --autofree {$url}{$ipxe_file}##params";
        array_push($entries, $i);
    }
}

function item_cmd($item_name, $item, $ipxe_cmd, $accesses) {
    global $entries;
    global $url;
    global $access;
    if (strpos($accesses, $access) !== False) {
        $i = hotkey($item);
        echo "item --key {$i} {$item} ({$i}) {$item_name}\n";
        $i = ":{$item}\n{$ipxe_cmd} && chain --replace --autofree {$url}menu.php##params";
        array_push($entries, $i);
    }
}

function item_ks($item_name, $item, $ipxe_cmd, $accesses) {
    global $entries;
    global $url;
    global $access;
    if (strpos($accesses, $access) !== False) {
        $i = hotkey($item);
        echo "item --key {$i} {$item} ({$i}) {$item_name}\n";
        $i = ":{$item}\n{$ipxe_cmd}";
        array_push($entries, $i);
    }
}

function ks_get_value($var) {
    ob_start();
    echo "echo \${{$var}}\n";
    list(, $value) = split("echo ", ob_get_contents());
    ob_end_clean();
    return $value;
}

function ks_name_offset($name, $ks_var) {
    global $offset;
    return $name . str_repeat(".", ($offset - strlen($name))) . ks_get_value($ks_var);
}

?>
