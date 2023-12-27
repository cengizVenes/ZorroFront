<!DOCTYPE html>
<html lang="en">

<head>
    <title>ZORRO-CHECKOUT-2</title>
    <meta name="description" content="Home page 2">
    <meta name="author" content="stagedijital">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../assets/images/logo.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../../assets/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
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
                    <h1 class="fw-semibold text-white">CHECKOUT</h1>
                    <nav>
                        <ul class="dotNone d-flex align-items-center justify-content-center text-white m-0 p-0">
                            <li class="d-flex align-items-center h-100">
                                <a class="text-decoration-none text-white fs12px" href="#">Home</a>
                            </li>
                            <li class="d-flex align-items-center h-100">
                                <i class="fa-solid fa-chevron-right fs7px px-2"></i>
                            </li>
                            <li class="d-flex align-items-center h-100">
                                <a class="text-decoration-none text-white fs12px" href="#">Checkout</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-xl">
                <div class="row ">
                    <div class="col-12 col-md-8 col-lg-9">
                        <div class=" p-4 pt-5">
                            <h1 class="color676970 fw-light fs-2">
                                Billing Details
                            </h1>
                            <form class="checkoutForm" action="">
                                <div class="d-flex flex-column flex-sm-row justify-content-between my-0 my-sm-3">
                                    <div class="maxw425px w-100 mb-4 mb-sm-0">
                                        <label class="mb-2" for="firstName">First Name <span class="darkPink">*</span></label>
                                        <input class="w-100 py-2" type="text" name="firstName" id="firstName">
                                    </div>
                                    <div class="maxw425px w-100 mb-4 mb-sm-0 ms-0 ms-sm-4 ms-md-5 ms-xxl-0">
                                        <label class="mb-2" for="lastName">Last Name</label>
                                        <input class="w-100 py-2" type="text" name="lastName" id="lastName">
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-sm-row justify-content-between my-0 my-sm-3">
                                    <div class="maxw425px w-100 mb-4 mb-sm-0">
                                        <label class="mb-2" for="CompanyName">Company Name</label>
                                        <input class="w-100 py-2" type="text" name="CompanyName" id="CompanyName">
                                    </div>
                                    <div class="maxw425px w-100 mb-4 mb-sm-0  ms-0 ms-sm-4 ms-md-5 ms-xxl-0">
                                        <label class="mb-2" for="eMail">Email Address <span class="darkPink">*</span></label>
                                        <input class="w-100 py-2" type="email" name="eMail" id="eMail">
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-sm-row justify-content-between my-0 my-sm-3">
                                    <div class="maxw425px w-100 mb-4 mb-sm-0">
                                        <label class="mb-2" for="streetAddress">Street Address <span class="darkPink">*</span></label>
                                        <input class="w-100 py-2" type="text" name="streetAddress" id="streetAddress">
                                    </div>
                                    <div class="maxw425px w-100 mb-4 mb-sm-0  ms-0 ms-sm-4 ms-md-5 ms-xxl-0">
                                        <label class="mb-2" for="Apartment">Apartment, Suite Unit etc.<span class="darkPink">*</span></label>
                                        <input class="w-100 py-2" type="text" name="Apartment" id="Apartment">
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-sm-row justify-content-between my-0 my-sm-3">
                                    <div class="maxw425px w-100 mb-4 mb-sm-0">
                                        <label class="mb-2" for="Apartment">Town / City <span class="darkPink">*</span></label>
                                        <input class="w-100 py-2" type="text" name="Apartment" id="Apartment">
                                    </div>
                                    <div class="maxw425px w-100 mb-4 mb-sm-0  ms-0 ms-sm-4 ms-md-5 ms-xxl-0">
                                        <label class="mb-2" for="Apartment">State / Country<span class="darkPink">*</span></label>
                                        <input class="w-100 py-2" type="text" name="Apartment" id="Apartment">
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-sm-row justify-content-between my-0 my-sm-3">
                                    <div class="maxw425px w-100">
                                        <label class="mb-2" for="Apartment">Postcode / ZIP<span class="darkPink">*</span></label>
                                        <input class="w-100 py-2" type="text" name="Apartment" id="Apartment">
                                    </div>
                                    <div class="maxw425px w-100  ms-0 ms-sm-4 ms-md-5 ms-xxl-0">
                                        <label class="mb-2" for="Apartment">Phone No.<span class="darkPink">*</span></label>
                                        <input class="w-100 py-2" type="text" name="Apartment" id="Apartment">
                                    </div>
                                </div>
                                <label class="mb-2" for="otherNotes">Other Notes</label><br>
                                <textarea class="w-100" rows="8" name="otherNotes" id="otherNotes"></textarea>
                            </form>
                            <div class="d-flex align-items-center justify-content-end mt-4">
                                <input id="checkout" class="ceked " type="checkbox">
                                <label for="checkout">Ship to a different address?</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="">
                            <div class="bgf7f7f7 p-3 rounded-top-1 mt-4 mt-md-0">
                                <h2 class="fs-6 color676970 fw-600 ps-lg-4">Order Summary</h2>
                                <div class="p-lg-4">
                                    <table class=" w-100 table miniCard">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p class="color676970">Subtotal</p>
                                                </td>
                                                <td class="text-end">
                                                    <p class="text-black"><sup>$</sup>1191</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="color676970">Shipping</p>
                                                </td>
                                                <td class="text-end">
                                                    <p class="text-black"><sup>$</sup>1191</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="color676970">Tax</p>
                                                </td>
                                                <td class="text-end">
                                                    <p class="text-black"><sup>$</sup>1191</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="bgf7f7f7 p-3 p-lg-4  rounded-bottom-1">
                                <div>
                                    <h3 class="text-center fs-6 liteGrey">Total</h3>
                                    <p class="liteGrey fs-1 text-center"><sup class="fs14px top-18">$</sup>648.12</p>
                                    <p class="liteGrey fw-light fs14px text-center mb-3">Including VAT 10%</p>
                                    <div class="paymentCheckout border-top">
                                        <form action="">
                                            <div class=" my-4 ">
                                                <input id="DirectBankTransfer" class="paymentRadio " checked name="qwe" type="radio">
                                                <label class="color676970" for="DirectBankTransfer">Direct Bank
                                                    Transfer</label>
                                                <p class="paymentActive ps-4 color676970 fs12px">
                                                    Make your payment directly into our bank account. Please use your
                                                    Order ID as the payment reference.
                                                </p>
                                            </div>
                                            <div class=" my-4 ">
                                                <input id="CheckPayments" class="paymentRadio " name="qwe" type="radio">
                                                <label class="color676970" for="CheckPayments">Check Payments</label>
                                                <p class="paymentActive ps-4 color676970 fs12px">
                                                    Make your payment directly into our bank account. Please use your
                                                    Order ID as the payment reference.
                                                </p>
                                            </div>
                                            <div class=" my-4 ">
                                                <input id="CashOnDelivery" class="paymentRadio " name="qwe" type="radio">
                                                <label class="color676970" for="CashOnDelivery">Cash On Delivery</label>
                                                <p class="paymentActive ps-4 color676970 fs12px">
                                                    Make your payment directly into our bank account. Please use your
                                                    Order ID as the payment reference. Your order will not be shipped
                                                    until the funds have cleared in our account.
                                                </p>
                                            </div>
                                            <div class=" my-4 ">
                                                <input id="Paypal" class="paymentRadio " name="qwe" type="radio">
                                                <label class="color676970" for="Paypal">Paypal</label>
                                                <p class="paymentActive ps-4 color676970 fs12px">
                                                    Make your payment directly into our bank account. Please use your
                                                    Order ID as the payment reference.
                                                </p>
                                            </div>
                                            <a class="darkPink text-decoration-none hovertext fs14px ms-4" href="#">
                                                What is Paypal?
                                            </a>
                                        </form>
                                    </div>
                                    <button class="productButon rounded-1 border-0 fs-6  py-2 mx-auto text-nowrap fw-bold w-100  d-flex align-items-center justify-content-center fsr mt-4">
                                        PLACE OLDER
                                    </button>
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
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="../../assets/js/style.js"></script>

</html>