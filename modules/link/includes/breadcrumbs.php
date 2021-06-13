<?php

Breadcrumbs::for('link.admin.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Liên kết', route('link.admin.index'));
});

Breadcrumbs::for('link.admin.create', function ($trail) {
    $trail->parent('link.admin.index');
    $trail->push('Thêm liên kết', route('link.admin.create'));
});

Breadcrumbs::for('link.admin.edit', function ($trail, $id) {
    $trail->parent('link.admin.index');
    $trail->push('#' . $id, route('link.admin.edit', $id));
});
