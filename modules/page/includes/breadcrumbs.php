<?php

Breadcrumbs::for('page.admin.list', function ($trail) {
    $trail->parent('dashboard');
    $trail->push(trans('page::admin.page_management'), route('page.admin.list'));
});

Breadcrumbs::for('page.admin.create', function ($trail) {
    $trail->parent('page.admin.list');
    $trail->push(trans('page::admin.add_page'), route('page.admin.create'));
});

Breadcrumbs::for('page.admin.edit', function ($trail, $id) {
    $trail->parent('page.admin.list');
    $trail->push(trans('page::admin.edit_page') . " #" . $id, route('page.admin.edit', $id));
});
