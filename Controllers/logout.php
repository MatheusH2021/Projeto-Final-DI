<?php

session_unset();
session_destroy();

header('location:../index.php?status=2');