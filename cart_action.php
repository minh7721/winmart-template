<?php
include('./function.php');
function thayDoiSLcart(){
    $p_id = $_POST['p_id'];
    $u_id = $_POST['u_id'];
    $soLuong = $_POST['soLuong'];
    thayDoiSL($p_id, $u_id, $soLuong);
}

function xoaSanPham(){
    $p_id = $_POST['p_id'];
    $u_id = $_POST['u_id'];
    xoaSPtrongGioHang($p_id, $u_id);
}



if(isset($_POST['action'])){
    if($_POST['action'] == "Thay đổi số lượng"){
        thayDoiSLcart();
    }
    if($_POST['action'] == "delete"){
        xoaSanPham();
    }
}
?>

