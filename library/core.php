<?php

function base_url() {
    return "http://localhost/AppManagementSystem";
}

function base_path() {
    return $_SERVER['DOCUMENT_ROOT'] . "/AppManagementSystem";
}

function salt_pass($pass) {
    //return md5("itoffside.com" . $pass);
    return $pass;
}
