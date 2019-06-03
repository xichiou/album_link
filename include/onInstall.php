<?php

use XoopsModules\Tadtools\Utility;

if (!class_exists('XoopsModules\Tadtools\Utility')) {
    require XOOPS_ROOT_PATH . '/modules/tadtools/preloads/autoloader.php';
}

function xoops_module_install_album_link(&$module)
{
    Utility::mk_dir(XOOPS_ROOT_PATH . '/uploads/album_link');
    Utility::mk_dir(XOOPS_ROOT_PATH . '/uploads/album_link/thumbs');

    return true;
}
