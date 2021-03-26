<body>
    <?php
    error_reporting(0)['img'];
    if (session_id() === '') session_start();
    $smartphone = $_SESSION['phone'];
    //add
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addProduct'])) {
        $temp =  array(
            'img' => $_POST['imgp'],
            'name' => $_POST['namep'],
            'price' => $_POST['pricep'],
            'vote' => floatval($_POST['votep'])
        );
        $smartphone['hot'][] = $temp;
        $_SESSION['phone'] = $smartphone;
        echo "<script>window.location = 'admin.php'</script>";
    };
    //delete
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['deleteProduct'])) {
        $k = $_POST['deleteProduct'];
        unset($smartphone['hot'][$k]);
        $smartphone['hot'] = array_values($smartphone['hot']);
        $_SESSION['phone'] = $smartphone;
        echo "<script>window.location = 'admin.php'</script>";
    };
    //update
    // if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['updateProduct'])) {
    //     $key = $_POST['idd'];
    //     echo "<script>console.log()</script>";
    //     $temp =  array(
    //         'img' => $_POST['imgd'],
    //         'name' => $_POST['named'],
    //         'price' => $_POST['priced'],
    //         'vote' => floatval($_POST['voted'])
    //     );
    //     array_splice($smartphone['hot'], $key , 1, $temp);
    //     $_SESSION['phone'] = $smartphone;
    //     echo "<script>window.location = 'admin.php'</script>";
    // };

    ?>
</body>