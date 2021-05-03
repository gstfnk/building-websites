<?php

if(!defined("TOKEN")){
    exit;
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

return new mysqli("localhost", "root", "", "bsi_base");
