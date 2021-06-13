<?php

Breadcrumbs::for('activity.admin.list', function ($trail) {
    $trail->parent('dashboard');
    $trail->push(trans('activity::admin.activity_management'), route('activity.admin.list'));
});

Breadcrumbs::for('activity.admin.create', function ($trail) {
    $trail->parent('activity.admin.list');
    $trail->push(trans('activity::admin.create'), route('activity.admin.create'));
});

Breadcrumbs::for('activity.admin.edit', function ($trail, $id) {
    $trail->parent('activity.admin.list');
    $trail->push(trans('activity::admin.edit') . " #" . $id, route('activity.admin.edit', $id));
});
