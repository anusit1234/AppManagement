<?php

function base_url() {
    return "http://localhost/AppManagementSystemMaster";
}

function base_path() {
    return $_SERVER['DOCUMENT_ROOT'] . "/AppManagementSystemMaster";
}

function salt_pass($pass) {
    //return md5("itoffside.com" . $pass);
    return $pass;
}
