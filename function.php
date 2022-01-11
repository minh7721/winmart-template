<?php

function showAllProducts(){
    include('./config/db.php');
    $sql = "SELECT * FROM product";
    return mysqli_query($conn, $sql);
}

function showAllProductsbyLH($loaiHang){
    include('./config/db.php');
    $sql = "SELECT * FROM product where loaiHang = '$loaiHang' limit 5";
    return mysqli_query($conn, $sql);
}
function showProduct($p_id){
    include('./config/db.php');
    $sql = "SELECT * FROM product where id = '$p_id'";
    return mysqli_query($conn, $sql);
}


function addSPtoCart($p_id, $u_id,$soLuong, $tongTien){
    include('./config/db.php');
    $sql = "INSERT INTO cart(p_id, u_id, soLuong, tongTien)
            VALUES ($p_id, $u_id, $soLuong, $tongTien)";
    return mysqli_query($conn, $sql);
}

function showCart($k_id){
    include('./config/db.php');
    $sql = "SELECT cart.soLuong as slSPtrongGioHang, product.id as idsp, product.name as nameSP, donViTinh, loaiHang, giaBan, image, product.soLuong as slSP, users.u_id as userID, email
    FROM product, cart, users where product.id = cart.p_id and users.u_id = cart.u_id and users.u_id = 1";
    return mysqli_query($conn, $sql);
}

function thayDoiSL($p_id, $u_id, $soLuong){
    include('./config/db.php');
    $sql = "UPDATE cart SET soLuong = '$soLuong' where p_id = '$p_id' and u_id = '$u_id'";
    return mysqli_query($conn, $sql);
}

function xoaSPtrongGioHang($p_id, $u_id){
    include('./config/db.php');
    $sql = "DELETE FROM cart where p_id = '$p_id' and u_id = '$u_id'";
    return mysqli_query($conn, $sql);
}



?>