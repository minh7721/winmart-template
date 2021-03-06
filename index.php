<?php
session_start();
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
                        <?php
                        if (isset($_SESSION['muaThanhCong'])) {
                            echo $_SESSION['muaThanhCong'];
                            unset($_SESSION['muaThanhCong']);
                        }
                        ?>
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
    <div class="container-fluid pb-5" style="background-color: #f1f0f1;">
        <!-- Start slider -->
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/img-1.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="./img/img-2.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="./img/img-3.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="./img/img-4.jpg" class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- End slider -->

        <!-- Start content -->
        <div class="container" style="margin-top: 3rem;">
            <div class="content-items">
                <p class="content-text">Rau củ trái cây</p>
                <!-- Trái cây dòng 1 -->
                <div class="row mb-3 mt-2 bg-white">
                    <div class="d-flex justify-content-around chiTietSP">
                        <?php

                        $showAllProductsbyLH = showAllProductsbyLH("Hoa quả");
                        if (mysqli_num_rows($showAllProductsbyLH) > 0) {
                            while ($row = mysqli_fetch_array($showAllProductsbyLH)) {
                        ?>
                                <a href="./chiTietSP.php?idsp=<?php echo $row['id'] ?>" style="text-decoration: none;">
                                    <div class="border-0 shadow-none card-sanpham card col-md me-1">
                                        <img src="./img/img-product/<?php echo $row['image'] ?>" class="card-img-top" alt="...">
                                        <div class="card-body card-fs-14">
                                            <h5 class="fs-5 card-title text-dark"><?php echo $row['name'] ?></h5>
                                            <p class="card-text text-dark mt-3">ĐVT: <?php echo $row['donViTinh'] ?></p>
                                            <p class="card-text text-dark" style="margin-top:-1rem; font-weight: bold;"><span class="giaBanSP"><?php echo $row['giaBan'] ?></span><span> đ</span></p>

                                            <a giaBan="<?php echo $row['giaBan'] ?>" p_id="<?php echo $row['id']; ?>" class="btn btn-outline-danger mt-4 btnAddCart">Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                </a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- End trái cây dòng 1 -->
                <!-- Start Trái cây dòng 2 -->
                <div class="row mt-2 bg-white">
                    <div class="d-flex justify-content-around chiTietSP">
                        <?php
                        $showAllProductsbyLH2 = showAllProductsbyLH("Hoa quả");
                        if (mysqli_num_rows($showAllProductsbyLH2) > 0) {
                            while ($row = mysqli_fetch_array($showAllProductsbyLH2)) {
                        ?>
                                <a href="./chiTietSP.php?idsp=<?php echo $row['id'] ?>" style="text-decoration: none;">
                                    <div class="border-0 shadow-none card-sanpham card col-md me-1">
                                        <img src="./img/img-product/<?php echo $row['image'] ?>" class="card-img-top" alt="...">
                                        <div class="card-body card-fs-14">
                                            <h5 class="fs-5 card-title text-dark"><?php echo $row['name'] ?></h5>
                                            <p class="card-text text-dark mt-3">ĐVT: <?php echo $row['donViTinh'] ?></p>
                                            <p class="card-text text-dark" style="margin-top:-1rem; font-weight: bold;"><span class="giaBanSP"><?php echo $row['giaBan'] ?></span><span> đ</span></p>
                                            <a giaBan="<?php echo $row['giaBan'] ?>" p_id="<?php echo $row['id']; ?>" class="btn btn-outline-danger mt-4 btnAddCart ">Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                </a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- End trái cây dòng 2 -->
            </div>
        </div>
        <!-- End content -->
    </div>

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
            $('.btnAddCart').click(function() {
                p_id = $(this).attr('p_id');
                k_id = 1;
                giaBan = $(this).attr('giaBan');
                action = "addSPtoCart";
                $.ajax({
                    url: "product_action.php",
                    method: "POST",
                    data: {
                        p_id: p_id,
                        k_id: k_id,
                        giaBan: giaBan,
                        action: action
                    },
                    success: function(ketQua) {

                    }
                })
            })
        })
    </script>

    <script>
        const hashPrice = (text) => {
            let arr = text.split('').reverse();
            const newArr = [];
            arr.forEach((e, i) => {
                if ((i) % 3 === 0 && i !== 0) {
                    newArr.push('.');
                    newArr.push(e);
                } else {
                    newArr.push(e);
                }
            });
            return newArr.reverse().join('');
        }
        console.log(hashPrice("1000"));
        const arr = Array.from(document.querySelectorAll(".giaBanSP"));
        arr.forEach((e) => {
            let number = e.textContent;
            e.textContent = hashPrice(number);
        })
    </script>
</body>

</html>