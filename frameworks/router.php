<?php
if (isset($_REQUEST['page']))
    switch ($_REQUEST["page"]) {
        case "table":
            include_once(ROOT_DIRECTORY . '/pages/table.php');
            break;
        default:
            include_once(ROOT_DIRECTORY . '/layouts/master.php');
    } else include_once(ROOT_DIRECTORY . '/layouts/master.php');
