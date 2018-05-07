<?php

Breadcrumbs::register('admin.block.welcome.get', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.access.block.welcome.management'), route('admin.block.welcome.get'));
});
