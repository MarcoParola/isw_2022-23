
<!doctype html>
<html>
<head>
    <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
</head>
<body>

    <script>    
        swal({
            title: "Computation performed!",
            text: "Result:  <?php echo $_GET['result']; ?>",
            type: "success"
        }).then(function() {
            window.location = "../../index.php";
        });
    </script>
</body>
</html>
