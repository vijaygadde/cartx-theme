<?php
    switch($actualPage)
    {
        case 'login':
            echo '<!-- core:js -->
            <script src="../../../assets/vendors/core/core.js"></script>
            <!-- endinject -->
          <!-- plugin js for this page -->
            <!-- end plugin js for this page -->
            <!-- inject:js -->
            <script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
            <script src="../../../assets/js/template.js"></script>
            <!-- endinject -->
          <!-- custom js for this page -->
            <!-- end custom js for this page -->';
        break;
        case 'dashboard':
            echo '<!-- core:js -->
            <script src="../assets/vendors/core/core.js"></script>
            <!-- endinject -->
            <!-- plugin js for this page -->
            <script src="../assets/vendors/chartjs/Chart.min.js"></script>
            <script src="../assets/vendors/jquery.flot/jquery.flot.js"></script>
            <script src="../assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
            <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
            <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
            <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
            <!-- end plugin js for this page -->
            <!-- inject:js -->
            <script src="../assets/vendors/feather-icons/feather.min.js"></script>
            <script src="../assets/js/template.js"></script>
            <!-- endinject -->
            <!-- custom js for this page -->
            <script src="../assets/js/dashboard.js"></script>
            <script src="../assets/js/datepicker.js"></script>
            <!-- end custom js for this page -->';
        break;
    }
?>