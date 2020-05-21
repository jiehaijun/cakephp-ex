<?php
    function fetchAll() {
        include("conn.php");
        $request = "SELECT * FROM blog";
        $queryResult = mysqli_query($conn, $request);
        $rowList=mysqli_fetch_all($queryResult, MYSQLI_ASSOC);   
        $json = json_encode($rowList);
        echo $json;
    }

    $action = $_GET['action'];
    if ($action === "fetchAll") {
        fetchAll();
    }
?>
