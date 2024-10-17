<?php

include_dir_. '/config.php';
include base_path. '/helpers/appmanager.php';

$sm = appmanager::getsm();
$username = getattribute("username");

if (isset($username)) {
    header('location: dashboard.php');
} else {
    header('location: login.php');
}