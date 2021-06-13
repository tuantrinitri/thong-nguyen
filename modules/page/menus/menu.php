<?php

use Modules\Page\Models\Page;

$pages = Page::get();
$menuitem = [];
foreach ($pages as $page) {
   $menuitem[] = [
      'title_vi' => isset($page->translate('vi', true)->title) ? $page->translate('vi', true)->title : '',
      'title_en' => isset($page->translate('en', true)->title) ? $page->translate('en', true)->title : '',
      'link' => 'trang/' . $page['slug']
   ];
}
