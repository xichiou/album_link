<?php

use XoopsModules\Album_link\Update;

if (!class_exists('XoopsModules\Album_link\Update')) {
    include dirname(__DIR__) . '/preloads/autoloader.php';
}
function xoops_module_update_album_link(&$module, $old_version)
{
    global $xoopsDB;

    Update::chk_album_link_block();

    return true;
}
