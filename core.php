<?php

function base_url() {
    return "http://chinhosting.com/web/AppManagement";
}

function base_path() {
    return $_SERVER['DOCUMENT_ROOT'] . "/web/AppManagement";
}

function salt_pass($pass) {
    //return md5("itoffside.com" . $pass);
    return $pass;
}
