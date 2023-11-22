<?php

function set_value($key) {
    if(!empty($_POST[$key])) {
        return $_POST[$key];
    } else {
        return "";
    }
}

function redirect($page) {
    header("Location: ".ROOT."/".$page);
    die;
}

?>