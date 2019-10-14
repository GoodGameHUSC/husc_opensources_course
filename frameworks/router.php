<?php
// var_dump($_REQUEST);
if (isset($_REQUEST['page']))
    switch ($_REQUEST["page"]) {
        case "table":
            include_once(ROOT_DIRECTORY . '/pages/table.php');
            break;
        case "form":
            include_once(ROOT_DIRECTORY . '/layouts/form.php');
            break;
        case "ajax":
            include_once(ROOT_DIRECTORY . '/pages/ajax.php');
            break;
        default:
            include_once(ROOT_DIRECTORY . '/layouts/master.php');
    } else include_once(ROOT_DIRECTORY . '/layouts/master.php');
