<?php

//if($_REQUEST())
var_dump(($_REQUEST['page']));

switch ($_REQUEST["page"]) {
    case "table" :
        include_once(ROOT_DIRECTORY . '/pages/table.php');
    default :
        include_once(ROOT_DIRECTORY . '/layouts/master.php');
}
?>

