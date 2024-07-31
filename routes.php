<?php

return [
    "/" => "controllers/index.php",
    "/project" => "controllers/projects.php",
    "/service" => "controllers/service.php",
    "/contact" => "controllers/contact.php",
    "/about" => "controllers/about.php",
    "/admin" => "controllers/admin/index.php",
    "/accounts" => "controllers/admin/accounts.php",
    "/quotation" => "controllers/admin/quotation.php",
    "/login" => "controllers/accounts/login.php",
    "/logout" => "controllers/accounts/logout.php",
    // projects actions routes 
    "/project/create" => "controllers/projects/create.php",
    "/project/delete" => "controllers/projects/delete.php",
    "/project/update" => "controllers/projects/update.php",
    // accounts actions 
    "/accounts/create" => "controllers/accounts/create.php",
    "/accounts/delete" => "controllers/accounts/delete.php",
    "/accounts/update" => "controllers/accounts/update.php",
    //request quotation
    "/quotation/submit" => "controllers/quote/submit.php",
    "/quotation/delete" => "controllers/quote/delete.php",

];
