<?php 
    include "../../model/connection.php";
    include "../../model/phim_sql.php";
    
    // phần này dùng để test user đã đăng nhập
    session_start();
    //$_SESSION['user'] = "user123";

    if (!isset($_SESSION['user'])) {
        header("Location: ../../view/login.php");
        exit(0);
    }

    if (isset($_GET['idphim'])) {
        $idphim = $_GET['idphim'];
        $sosao = $_POST['rate']; 
        $tennguoidanhgia = $_SESSION['user'];

        add_rating($tennguoidanhgia, $idphim, $sosao);
        header("Location: ../../view/detail.php?idphim=$idphim");
    } 
?>