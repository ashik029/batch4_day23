<?php

require_once 'vendor/autoload.php';

Use App\classes\Studentinfo;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
} elseif (isset($_POST['btn']))
{
    $studentInfo = new Studentinfo();
    $studentInfo->index();
}




