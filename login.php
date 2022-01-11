<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Đăng nhập</title>
    <style>
        .text-dangnhap {
            font-size: 1.5rem;
            font-weight: 400;
            line-height: 1.334;
            font-family: Roboto, Helvetica, "Arial sans-serif";
        }
        .login-template{
            background-color: #f0f8ff;
            
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="d-flex justify-content-center login-template">
            <form style="width: 420px; padding: 32px;" class="bg-white">
                <div class="d-flex p-3">
                    <div style="width: 60px; text-align: left;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" style="font-size: 30px; color: rgb(33, 150, 243);">
                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
                        </svg>
                    </div>
                    <img src="./img/logo-2.png" alt="WinMart" class="img-fluid" style="height: 72px; ">
                </div>
                <div class="text-center mb-3">
                    <span class="text-dangnhap">Đăng nhập</span>
                </div>
                <div class="mt-3">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email hoặc số điện thoại</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="text-end mb-3">
                    <a href="#" style="color: #d42333!important; text-decoration: none;">Quên mật khẩu?</a>
                </div>
                <a href="./index.php" class="btn btn-primary w-100 mb-3 border-0" style="font-size: 14px; font-weight: 500; background-color: rgb(237, 28, 36); height: 40px;">ĐĂNG NHẬP</a>
                <a href="./index.php"><button class="btn btn-primary w-100 mb-3 border-0" style="font-size: 14px; font-weight: 500; background-color: rgb(237, 28, 36); height: 40px;">TRANG CHỦ</button></a>
                <div class="text-center mb-3">
                    <a href="#" style="color: #d42333!important; text-decoration: none;">Tạo tài khoản</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>