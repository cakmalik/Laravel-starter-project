<?php
//dashboard

use Sentry\Breadcrumb;

Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('About', route('about'));
});

// Home > Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});


// Bit > Dokumentasi > Komponen
Breadcrumbs::for('bit', function ($trail) {
    $trail->parent('home');
    $trail->push('Bit', route('bit'));
});

Breadcrumbs::for('bit.doc.component', function ($trail) {
    $trail->parent('bit');
    $trail->push('Bit > Dokumentasi > Komponen', route('bit.doc.component'));
});

//Not Found
Breadcrumbs::for('not-found', function ($trail) {
    $trail->push('Not Found', route('not-found'));
});

// User
Breadcrumbs::for('user.table', function ($trail) {
    $trail->parent('home');
    $trail->push('User', route('user.table'));
});
