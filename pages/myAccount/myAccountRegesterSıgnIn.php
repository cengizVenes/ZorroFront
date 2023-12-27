<!DOCTYPE html>
<html lang="en">

<head>
    <title>ZORRO-MYACCOUNTREGESTER</title>
    <meta name="description" content="Home page 2">
    <meta name="author" content="stagedijital">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../assets/images/logo.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../../assets/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>

<body class="position-relative bg-white">
    <header>
        <?php include('../layout/header.html'); ?>
    </header>
    <main>
        <div class="oneBanner h260px">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="fw-semibold text-white">MY ACCOUNT</h1>
                    <nav>
                        <ul class="dotNone d-flex align-items-center justify-content-center text-white m-0 p-0">
                            <li class="d-flex align-items-center h-100"><a class="text-decoration-none text-white fs12px" href="#">Home</a></li>
                            <li class="d-flex align-items-center h-100"><i class="fa-solid fa-chevron-right fs7px px-2"></i></li>
                            <li class="d-flex align-items-center h-100"><a class="text-decoration-none text-white fs12px" href="#">My Account</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid z-3 position-relative ">
            <div class="container-sm">
                <div class="row  pt-4 justify-content-center mx-0 ">
                    <div class="col-12 col-lg-6">
                        <div class="row  pt-4 justify-content-center mx-0 ">
                            <div class=" col-12 col-sm-8 bg-white ">
                                <div class=" d-flex w-100 justify-content-center my-7">
                                    <div class="maxw425px w-100">
                                        <div><a href="#" class="color676970 text-decoration-none fw-600 ">SIGN IN</a>
                                        </div>
                                        <form class=" my-4 myAccountForm" action="">
                                            <label for="Name">Username or Email Address</label><br>
                                            <input type="text" id="Name"> <br>
                                            <label for="password">password</label><br>
                                            <input type="password" id="password"><br>
                                            <div class="d-flex align-items-center mt-2">
                                                <input id="RememberMe" class="ceked" type="checkbox">
                                                <label for="RememberMe">Remember me</label>
                                            </div>
                                        </form>
                                        <button class="productButon rounded-1 border-0 fs-6  py-2 mx-auto text-nowrap fw-bold w-100  d-flex align-items-center justify-content-center fsr mt-4">
                                            SIGN IN
                                        </button>
                                        <div class="d-flex justify-content-center my-4">
                                            <a class="p-2  fs12px liteGrey productLink text-decoration-none d-block " href="#">Lost Your Password ?</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 accountBefore">
                        <div class="row  pt-4 justify-content-center mx-0 ">
                            <div class="col-12 col-sm-8 bg-white ">
                                <div class=" d-flex w-100 justify-content-center my-7">
                                    <div class="maxw425px w-100">
                                        <div>
                                            <a href="#" class=" color676970 text-decoration-none fw-600">REGISTER</a>
                                        </div>
                                        <form class=" my-4 myAccountForm" action="">
                                            <label for="Name">Name</label><br>
                                            <input type="text" id="Name"> <br>
                                            <label for="Email">E mail Address</label><br>
                                            <input type="email" id="Email"><br>
                                            <label for="password">password</label><br>
                                            <input type="password" id="password"><br>
                                            <p class="color676970 fs12px mt-3 mb-5">Your personal data will be used to
                                                support your
                                                experience throughout this website, to manage access to your account,
                                                and
                                                for
                                                other purposes described in our privacy policy.</p>
                                        </form>
                                        <button class="productButon rounded-1 border-0 fs-6  py-2 mx-auto text-nowrap fw-bold w-100  d-flex align-items-center justify-content-center fsr mt-4">
                                            SIGN UP NOW
                                        </button>
                                        <div class="d-flex justify-content-center my-4">
                                            <a class="p-2  fs12px liteGrey productLink text-decoration-none d-block " href="#">Already has an
                                                account</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include('../layout/footer.html'); ?>
    </footer>
    <script src="../../assets/js/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../../assets/js/jquary3.7.0.js"></script>
    <script src="../../assets/owl-carousel/owl.carousel.min.js"></script>
    <script src="../../assets/js/doubleRange.js"></script>
    <script src="../../assets/js/style.js"></script>
    <script>
        picturechange()
        sizeguide()
        coppy()
        heart()
        fancybox()
    </script>

</html>