<?php

function xoops_module_uninstall_album_link(&$module)
{
    global $xoopsDB;
    $date = date('Ymd');

    rename(XOOPS_ROOT_PATH . '/uploads/album_link', XOOPS_ROOT_PATH . "/uploads/album_link_bak_{$date}");

    return true;
}
