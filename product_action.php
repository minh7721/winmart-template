<?php
    include('function.php');
    function addCart(){
        $p_id = $_POST['p_id'];
        $k_id = $_POST['k_id'];
        $soLuong = 1;
        $giaBan = $_POST['giaBan'];
        addSPtoCart($p_id, $k_id, $soLuong, $giaBan);
    }

    if(isset($_POST['action'])){
        if($_POST['action'] == 'addSPtoCart'){
            addCart();
        }
    }
?>