<?php
session_start();
session_unset();
/* احذف المعلومات الي ب سيشسن */
session_destroy();
/* اوقف السيشين */
header("location: login.php");
