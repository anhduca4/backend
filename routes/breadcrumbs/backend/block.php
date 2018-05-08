<?php

Breadcrumbs::register('admin.block.welcome.get', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.access.block.welcome.management'), route('admin.block.welcome.get'));
});

Breadcrumbs::register('admin.block.introduce.get', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.access.block.introduce.management'), route('admin.block.introduce.get'));
});

Breadcrumbs::register('admin.block.product.get', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.access.block.product.management'), route('admin.block.product.get'));
});

Breadcrumbs::register('admin.block.scopes.get', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.access.block.scopes.management'), route('admin.block.scopes.get'));
});

