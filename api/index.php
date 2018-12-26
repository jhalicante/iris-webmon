<?php

    header('Content-Type: application/json');

    include '../app/router/router.php'; 

    // App Configuration
    include '../app/config/app-config.php'; 
    include '../app/common/validation.php'; 

    // Class includes
    include './classes/sign-in.php';
    include './classes/incident-reported.php';

    /***********************************
     * ENTRY ROUTES API
     * *********************************/ 
    // Sign In Routes API
    $router->post(API_VERSION.'/signin', function () {
        $signin = new SignIn();
        $signin->authenticate($_POST);
    });
     // Sign In Routes API
     $router->post(API_VERSION.'/signup', function () {
        $signup = new SignUp();
        $signup->authenticate($_POST);
    });

    /***********************************
     * 
     * INCIDENT REPORT ROUTES API
     * *********************************/ 
    // Incident Report Routes API
    $router->post(API_VERSION.'/admin/ir-details', function () {
        $IR = new IncidentReported();
        $IR->IRDetails($_POST);
    });


    // Invalid Routes API 
    $router->get('*', function () {
        echo json_encode(array('errorCode'=>404,'message'=>'Invalid request'));
    });
    
    // Run router
    $router->run();
?>