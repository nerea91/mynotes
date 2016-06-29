<?php
foreach (glob(__DIR__ . "/../controllers/*.php") as $filename)
{
    include $filename;
}
foreach (glob(__DIR__ . "/../helpers/*.php") as $filename)
{
    include $filename;
}


include(__DIR__ . '/../views/header.php');
(new \Controllers\MainController)->index();
include(__DIR__ . '/../views/footer.php');
