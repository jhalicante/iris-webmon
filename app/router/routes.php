<?php
    include './app/router/router.php';
    
    include './app/config/app-config.php';   
    
    /* (Sign In) route */ 
    $router->get('/', function () {
        include './pages/sign-in.php';
    });
    /* (Sign Up) route */ 
    $router->get('/signup', function () {
        include './pages/sign-up.php';
    });

    /* Dashboard route */ 
    $router->get('/dashboard', function () {
        include './pages/authorize/admin/dashboard.php';
    });

    /* (Notification) route */ 
    $router->get('/dashboard/notifications', function () {
        include './pages/authorize/admin/notifications.php';
    });

    /* (Notification) route */ 
    $router->get('/dashboard/inbox', function () {
        include './pages/authorize/admin/inbox.php';
    });

    /* (Notification) route */ 
    $router->get('/dashboard/area-boundary', function () {
        include './pages/authorize/admin/LosBanosMapBoundary.php';
    });    
    
?>