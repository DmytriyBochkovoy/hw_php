<?php
$countCar = 1;
$name = 'Jon';
$car = true;
$driveLicense = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw_1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous">
    </script>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container-xxl">
            <div class="row">
                <div class="col-4 d-flex align-items-center">
                    <a class="" href="#">
                        <img
                                class="d-block w-100 p-3 logo"
                                src="@/assets/logo.png"
                                alt="Company`s logo"
                        />
                    </a>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <a class="navbar-brand fw-bolder сompany_name" href="#"
                    >Прокат авто в Краматорске</a
                    >
                </div>
                <div class="col-4 col-md-4 d-flex align-items-center justisy-content-end">
                    <div class="d-flex justify-content-center pb-3 pb-md-0 w-100 align-items-center justify-content-sm-end">
                        <button class="btn btn-light btn-outline-primary fs-7 mx-2">
                            Регистрация
                        </button>
                        <button class="btn btn-primary fs-7 mx-2">
                            Войти
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg_navbar">
            <div class="container-xxl">
                <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-2">Главная</li>
                        <li class="nav-item mx-2">Автопарк</li>
                        <li class="nav-item mx-2">Отзывы</li>
                        <li class="nav-item mx-2">Услуги</li>
                        <li class="nav-item mx-2">Обратная связь</li>
                        <li class="nav-item mx-2">О нас</li>
                    </ul>
                </div>
            </div>
        </nav>
    </header
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php
                if(is_string($name)) {
                    echo $name . ' - является строкой';
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
