<?php
include 'auth.php';
session_start();

if (isset($_GET['login']) && isset($_GET['passwd'])) {
        if (auth($_GET['login'], $_GET['passwd']) == true) {
                $_SESSION['loggued_on_user'] = $_GET['login'];
                echo "OK\n";
        } else
                echo "ERROR\n";
}
