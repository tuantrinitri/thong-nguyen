<?php

Breadcrumbs::for('tour.admin.list', function ($trail) {
    $trail->parent('dashboard');
    $trail->push(trans('tour::admin.tour_management'), route('tour.admin.list'));
});
