<?php
include('./function.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <!-- Font Awesome -->
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Siêu thị Vinmart</title>
    <style>
        body {
            font-family: Roboto, sans-serif;
            font-size: 14px;
        }

        .border-input-info {
            border: 1px solid #616568;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <!-- Start header dòng 1 -->
    <div id="header" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="logo col-md-2">
                    <a href="./index.php">
                        <img src="./img/logo.png" alt="" class="rounded">
                    </a>
                </div>

                <div class="col-md-6 header__search d-flex align-items-center me-5">
                    <input class="form-control me-2 col-md-11" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn text-white col-md" type="submit"><i class="fas fa-search"></i></button>
                </div>

                <div class="header__menu d-flex align-items-center justify-content-around text-white col">
                    <div class="d-flex align-items-center">
                        <!-- Icon -->
                        <a href="./cart.php" class="me-3 text-white" style="font-weight: 500;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" style="font-size: 26px; color: white; margin-right: 5px;">
                                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"></path>
                            </svg>
                            Giỏ hàng
                        </a>

                        <!-- Notifications -->
                        <!-- <a class="fs-4 me-5 text-reset dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                        <ul class="ms-1 dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">Some news</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another news</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul> -->

                        <!-- Avatar -->
                        <a href="./login.php" class="ms-3 text-white" style="font-weight: 500;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" style="font-size: 30px; color: white; margin-right: 5px;">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                            </svg>
                            Tài khoản
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End header dòng 1 -->
    <!-- Start header dòng 2 -->
    <div class="container-fluid" style="background-color: #f1f0f1; border-bottom: 1px solid #ccc; height: 40px;">
        <div class="container">
            <div class="row">
                <div class="header__menu1 col-md-6">
                    <!-- Start modal -->
                    <!-- Button trigger modal -->
                    <button class="menu-btn btn d-flex shadow-none" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars mt-1"></i>
                        <p style="font-size: 14px; margin-left: 8px;">Danh mục sản phẩm</p>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End modal -->
                    <!-- <div class="collapse" id="navbarToggleExternalContent">
                        <div class="p-4">
                            <h5 class="text-dark h4">Collapsed content</h5>
                            <span class="text-dark">Toggleable via the navbar brand.</span>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <button class="menu-btn btn d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                            <p style="font-size: 14px; margin-left: 8px; margin-top: 16px;">Danh mục sản phẩm</p>
                        </button>
                    </div> -->
                </div>

                <div class="header__menu2 col">
                    <div class="row d-flex justify-content-around flex-row">
                        <div class="dropdown col-md-4 mt-2">
                            <p class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Sản phẩm đã xem
                            </p>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="header__news col-md-4 d-flex mt-2">
                            <i class="fas fa-envelope mt-1"></i>
                            <p class="ms-2">Tin tức VinMart</p>
                        </div>

                        <div class="header__tel col d-flex mt-2">
                            <i class="fas fa-headphones-alt mt-1"></i>
                            <p class="ms-2">Tư vấn mua hàng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End header dòng 2 -->

    <!-- Start content -->

    <div class="container-fluid" style="background-color: #f7f7f7">
        <div class="container">
            <!-- <form method="POST"> -->
            <div class="row">
                <p class="mt-3" style="font-size: 25px; font-weight: 500;">Thanh toán</p>
                <p class="mt-2" style="font-weight: 500; text-transform: uppercase;">LỰA CHỌN HÌNH THỨC THANH TOÁN</p>
                <div class="mt-2 bg-white p-3" style="border: 1px solid #ccc;">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Thanh toán bằng ví MOMO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Thanh toán bằng ngân hàng
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Thanh toán sau khi nhận hàng
                        </label>
                    </div>
                </div>
                <p class="mt-3" style="font-weight: 500; text-transform: uppercase;">ĐỊA CHỈ NHẬN HÀNG</p>
                <!-- Nhập thông tin nhận hàng -->
                <div class="mt-2 bg-white p-3" style="border: 1px solid #ccc;">
                    <div class="row">
                        <div class="d-flex justify-content-between" style="height: 34px;">
                            <p class="col-3 mt-2">Họ tên<span style="color: red;">*</span>
                            </p>
                            <input maxlength="30" minlength="1" required class="hoTen col-9 p-2 border-input-info" type="text" placeholder="Nhập họ tên đầy đủ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="d-flex justify-content-between mt-3" style="height: 34px;">
                            <p class=" col-3 mt-2">Số điện thoại<span style="color: red;">*</span></p>
                            <input maxlength="12" minlength="1" required class="soDienThoai col-9 p-2 border-input-info" type="tel" placeholder="Nhập số điện thoại">
                        </div>
                    </div>

                    <div class="row">
                        <div class="d-flex justify-content-between mt-3" style="height: 34px;">
                            <p class="col-3 mt-2">Địa chỉ<span style="color: red;">*</span></p>
                            <input required class="diaChi col-9 p-2 border-input-info" type="text" placeholder="Nhập địa chỉ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="d-flex justify-content-between mt-3" style="">
                            <p class="col-3 mt-2">Ghi chú</p>
                            <div class="col-9">
                                <textarea class="w-100 p-2 border-input-info" placeholder="Khách hàng có những yêu cầu khác vui lòng nhập vào đây để cửa hàng có thể phục vụ tốt nhất" id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tóm tắt -->
                <div class="mt-3 bg-white p-3 mb-5" style="border: 1px solid #ccc;">
                    <p>Tóm tắt: Khách hàng đặt đơn hàng giá trị 152.562 ₫ gồm 2 sản phẩm với số điện thoại chọn thanh toán khi nhận hàng, giao hàng tận nơi</p>
                    <div class="d-flex justify-content-center">
                        <input name="btnThanhToan" type="submit" value="Thanh toán" class="btnThanhToan btn text-white mb-3 border-0" style="font-size: 18px; font-weight: 500; background-color: rgb(237, 28, 36); height: 40px; width: 300px;" data-bs-toggle="modal" data-bs-target="#modalMuaOK">
                        <!-- Modal -->
                        <div class="modal fade" id="modalMuaOK" tabindex="-1" aria-labelledby="modalMuaOKLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalMuaOKLabel">Thông báo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn có chắc muốn mua 2 sản phẩm này với giá 100.000đ chưa;
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" style="font-size: 18px; font-weight: 500; height: 40px;" data-bs-dismiss="modal">Hủy</button>
                                        <button data-bs-toggle="modal" data-bs-target="#thongBaoThanhCong" type="button" class="btnXacNhan btn text-white" style="font-size: 18px; font-weight: 500; background-color: rgb(237, 28, 36); height: 40px;">Xác nhận</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="showThongBao">

                        </div>
                    </div>
                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>

    <!-- End content -->

  <!-- Footer -->
  <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Đăng ký nhận thông tin mới nhất từ chúng tôi</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example21" class="form-control" />
                                <label class="form-label" for="form5Example21">Địa chỉ Email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Đăng ký
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Công Ty Cổ Phần Dịch Vụ Thương Mại Tổng Hợp WinCommerce
                    Mã số doanh nghiệp: 0104918404 Đăng ký lần đầu ngày 20 tháng 09 năm 2010, đăng ký thay đổi lần thứ 44, ngày 15 tháng 09 năm 2021
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="#">Nhóm 19</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
            $('.btnXacNhan').click(function() {
                $('.showThongBao').html(
                    `
                        <!-- Modal -->
                        <div class="modal fade" id="thongBaoThanhCong" tabindex="-1" aria-labelledby="thongBaoThanhCongLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-body text-center" style="font-size: 18px;">
                            <i class="fas fa-check-circle text-success"></i> Mua hàng thành công!
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <a href="./index.php" type="button" class="btnMuaOK btn text-white" style="font-size: 18px; font-weight: 500; background-color: rgb(237, 28, 36); height: 40px; width:200px;">Trang chủ</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    `
                );
            })
        })
    </script>