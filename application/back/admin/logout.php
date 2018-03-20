<?php
unset($_SESSION[_ss . 'username']);
unset($_SESSION[_ss . 'id']);

header('location:'.$baseUrl);
