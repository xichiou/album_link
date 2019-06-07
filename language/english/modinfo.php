<?php
xoops_loadLanguage('modinfo_common', 'tadtools');
define('_MI_ALBUMLINK_NAME', 'Tad Links');
define('_MI_ALBUMLINK_AUTHOR', 'Tad');
define('_MI_ALBUMLINK_CREDITS', 'Michael');
define('_MI_ALBUMLINK_DESC', 'Tad Links Module');
define('_MI_ALBUMLINK_ADMENU1', 'Management');
define('_MI_ALBUMLINK_ADMENU2', 'Category');
define('_MI_ALBUMLINK_ADMENU3', 'Permission');
define('_MI_ALBUMLINK_TEMPLATE_DESC1', 'album_link_index.html template file.');
define('_MI_ALBUMLINK_BNAME1', 'New Links');
define('_MI_ALBUMLINK_BDESC1', 'New Links (album_link_show)');
define('_MI_ALBUMLINK_BNAME2', 'Quick Links');
define('_MI_ALBUMLINK_BDESC2', 'Quick Links (album_link_all)');

define('_MI_ALBUMLINK_SHOW_NUM', 'Links per Page');
define('_MI_ALBUMLINK_SHOW_NUM_DESC', 'Number of links displayed on a page (pagination)');
define('_MI_ALBUMLINK_SHOW_FACEBOOK', 'Use Facebook Message System Tools');
define('_MI_ALBUMLINK_SHOW_FACEBOOK_DESC', 'Set the "Link detail page" whether to show Facebook Message Tools');
define('_MI_ALBUMLINK_SHOW_PUSH', 'Use Tweets Tools');
define('_MI_ALBUMLINK_SHOW_PUSH_DESC', 'Set in the "Link detail page" whether to show Tweets Tools');
define('_MI_ALBUMLINK_PIC_WIDTH', 'Picture width');
define('_MI_ALBUMLINK_PIC_WIDTH_DESC', 'Set the width for a large image (upper limit is 400)');
define('_MI_ALBUMLINK_DIRECT_LINK', 'Direct link thumbnail?');
define('_MI_ALBUMLINK_DIRECT_LINK_DESC', 'If Thumbnail has not been created when adding the link, should we use a remote connection thumbnail? <br/>Choose "Yes" is slow, but perhaps you can see thumbnail. <br/>Choose "No", then will be pre-alternative set of thumbnails, faster, but you can not see thumbnail ');

define('_MI_ALBUMLINK_DIRNAME', basename(dirname(dirname(__DIR__))));
define('_MI_ALBUMLINK_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('_MI_ALBUMLINK_BACK_2_ADMIN', 'Back to Administration of ');

//help
define('_MI_ALBUMLINK_HELP_OVERVIEW', 'Overview');

define('_MI_ALBUM_CAPTURE_FROM', 'Thumbnail source');
define('_MI_ALBUM_CAPTURE_FROM_DESC', '120.115.2.78 may be more unstable');
