<html>

<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?php
    include_once "./config.php";
    echo "all ok ";

    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        ?>
        <script>
            swal({
                title: <?php echo $_SESSION['status']; ?>,
                
                icon: "<?php echo $_SESSION['status_code']; ?>",
                button: "OK",
            });
        </script>
        <?php
        unset($_SESSION['status']);
    }
    ?>


</body>

</html>