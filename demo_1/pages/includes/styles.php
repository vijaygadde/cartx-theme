<?php
    switch($actualPage)
    {
        case 'login':
            echo '<!-- core:css -->
                <link rel="stylesheet" href="../../../assets/vendors/core/core.css">
                <!-- endinject -->
                <!-- plugin css for this page -->
                <!-- end plugin css for this page -->
                <!-- inject:css -->
                <link rel="stylesheet" href="../../../assets/fonts/feather-font/css/iconfont.css">
                <!-- endinject -->
                <!-- Layout styles -->  
                <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
                <!-- End layout styles -->
                <link rel="shortcut icon" href="../../../assets/images/favicon.png" />';
        break;
        case 'dashboard':
            echo '<!-- core:css -->
            <link rel="stylesheet" href="../assets/vendors/core/core.css">
            <!-- endinject -->
          <!-- plugin css for this page -->
            <link rel="stylesheet" href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
            <!-- end plugin css for this page -->
            <!-- inject:css -->
            <link rel="stylesheet" href="../assets/fonts/feather-font/css/iconfont.css">
            <!-- endinject -->
          <!-- Layout styles -->  
            <link rel="stylesheet" href="../assets/css/demo_1/style.css">
          <!-- End layout styles -->
          <link rel="shortcut icon" href="../assets/images/favicon.png" />';
        break;
    }
?>