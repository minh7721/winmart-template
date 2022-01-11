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
        body{
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" style="font-size: 26px; color: white; margin-right: 5px;"><path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"></path></svg>
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
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" style="font-size: 30px; color: white; margin-right: 5px;"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path></svg>
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