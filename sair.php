<?php

session_destroy();
unset($_SESSION['login']);
header('Location:login.html');