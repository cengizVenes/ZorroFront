<!DOCTYPE html>
<html lang="en">

<head>
    <title>ZORRO-HOMEPAGE-2</title>
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

<body>
    <header>
        <?php include('../layout/header.html'); ?>
    </header>
    <main>
        <div class="oneBanner h260px">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="fw-semibold text-white">ALL PRODUCTS</h1>
                    <nav>
                        <ul class="dotNone d-flex align-items-center justify-content-center text-white m-0 p-0">
                            <li class="d-flex align-items-center h-100"><a class="text-decoration-none text-white fs12px" href="#">Home</a></li>
                            <li class="d-flex align-items-center h-100"><i class="fa-solid fa-chevron-right fs7px px-2"></i></li>
                            <li class="d-flex align-items-center h-100"><a class="text-decoration-none text-white fs12px" href="#">Products</a></li>
                            <li class="d-flex align-items-center h-100"><i class="fa-solid fa-chevron-right fs7px px-2 "></i></li>
                            <li class="d-flex align-items-center h-100"><a class="text-decoration-none text-white fs12px" href="#">All Products</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-115px z-3 position-relative">
            <div class="container-sm">

                <div class="">
                    <div class=" bg-white shadow rounded-1">
                        <div class="row m-0 brBBottomGray justify-content-between position-relative">
                            <div class="col-7  col-sm-9 col-xl-9 brEndGray">
                                <div class="productHeader p-0 p-sm-3 ">
                                    <div class="d-block d-sm-flex justify-content-between">
                                        <select class="selectProp bg-white fs12px maxWidth100 ">
                                            <option value="Sort_by_Popular">Sort by Popular</option>
                                            <option value="sort_by most_expensive">
                                                sort by most expensive</option>
                                            <option value="sort_by_cheapest">
                                                sort by cheapest</option>
                                            <option value="
                                                Sort_by_most_reviewed">
                                                Sort by most reviewed</option>
                                        </select>
                                        <p class="fs12px">
                                            Showing 1–10 of 120 results
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 col-sm-3 p-0">
                                <div class="d-flex justify-content-around h-100 ">

                                    <button onclick="UpdatemoreLess()" class="d-flex  justify-content-center align-items-center p-0 m-0 h-100 calcWidth bg-transparent border-0">
                                        <img class="disNone" id="btnicon" src="../../assets/images/clear.png" alt="clearicon">
                                        <a id="btnMore" class="text-decoration-none color96979b fsRes ms-1" href="#">Filter</a>
                                    </button>

                                    <div class=" brEndGray h-100"> </div>

                                    <div class="d-flex p-2 p-sm-0 justify-content-center align-items-center p-0 m-0 h-100 calcWidth">
                                        <img src="../../assets/images/GridP.png" alt="">
                                    </div>

                                    <div class=" brEndGray h-100"> </div>

                                    <div class="d-flex p-2 p-sm-0 justify-content-center align-items-center p-0 m-0 h-100 calcWidth">
                                        <img src="../../assets/images/ListP.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute z-3 p-0 mt51">
                                <span id="dots"></span>
                                <div id="more">
                                    <div class="bg-white shadow rounded-bottom-1">
                                        <div class="px-3">
                                            <div class="productFilter py-3 row border-bottom m-0">
                                                <div class="col-12 col-xl-6 mb-5 mb-xl-0 ">
                                                    <div class=" row">
                                                        <div class="col-12 col-sm-6 mb-5 mb-md-0">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="maxWidth285px w-100">
                                                                    <div class="wrapper">
                                                                        <div class="d-flex justify-content-between mb-2">
                                                                            <h3 class="fs14px liteGrey">FILTER BY PRICE
                                                                            </h3>
                                                                        </div>
                                                                        <div class=" position-relative">
                                                                            <div class="slider-track"></div>
                                                                            <input type="range" min="0" max="500" value="0" step="10" id="slider-1" oninput="slideOne()">
                                                                            <input type="range" min="0" max="500" value="500" step="10" id="slider-2" oninput="slideTwo()">
                                                                        </div>
                                                                        <div class="values">
                                                                            <p>
                                                                                $
                                                                                <span id="range1">
                                                                                    0
                                                                                </span>
                                                                                <span> &dash; </span>
                                                                                $
                                                                                <span id="range2">
                                                                                    100
                                                                                </span>
                                                                            </p>
                                                                        </div>
                                                                        <div class=" d-none w-100 justify-content-around mt-3">
                                                                            <div class="w-75">
                                                                                <input class="w35 filterNumber disabledInput" type="text" value="&#36;0" disabled>
                                                                                <span class="px-2">to</span>
                                                                                <input class="w35 filterNumber disabledInput" type="text" value="&#36;500" disabled>
                                                                            </div>
                                                                            <button class="productButon border-0 rounded-1 ">GO</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" col-12 col-sm-6">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="maxWidth285px w-100">
                                                                    <div class="d-flex justify-content-between mb-2">
                                                                        <h3 class="fs14px liteGrey">FILTER BY SIZE</h3>
                                                                    </div>
                                                                    <div class="d-flex flex-wrap sizeFilter">
                                                                        <input id="s" class="opacity-0 ceked position-absolute start-0 brdashed" type="checkbox">
                                                                        <button onclick="isaretleCheckbox('s')" class="m-1 colord7d8da">S</button>
                                                                        <input id="m" class="opacity-0 ceked position-absolute start-0 brdashed" type="checkbox">
                                                                        <button onclick="isaretleCheckbox('m')" class="m-1 colord7d8da">M</button>
                                                                        <input id="l" class="opacity-0 ceked position-absolute start-0 brdashed" type="checkbox">
                                                                        <button onclick="isaretleCheckbox('l')" class="m-1 colord7d8da">L</button>
                                                                        <input id="xl" class="opacity-0 ceked position-absolute start-0 brdashed" type="checkbox">
                                                                        <button onclick="isaretleCheckbox('xl')" class="m-1 colord7d8da">XL</button>
                                                                        <input id="xxl" class="opacity-0 ceked position-absolute start-0 brdashed" type="checkbox">
                                                                        <button onclick="isaretleCheckbox('xxl')" class="m-1 colord7d8da">XXL</button>
                                                                        <input id="3xl" class="opacity-0 ceked position-absolute start-0 brdashed" type="checkbox">
                                                                        <button onclick="isaretleCheckbox('3xl')" class="m-1 colord7d8da">3XL</button>
                                                                        <input id="4xl" class="opacity-0 ceked position-absolute start-0 brdashed" type="checkbox">
                                                                        <button onclick="isaretleCheckbox('4xl')" class="m-1 colord7d8da">4XL</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 col-md-4 mb-5 mb-md-0">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="maxWidth285px">
                                                                    <div>
                                                                        <h3 class="fs14px liteGrey ">FILTER BY
                                                                            CATOGORIES</h3>
                                                                    </div>
                                                                    <div class="accordion accordion-flush catogoriesScrol" id="accordionFlushExample">
                                                                        <div class="accordion-item ">
                                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                                <button class="accordion-button collapsed fs12px p-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                                    Topwear
                                                                                </button>
                                                                            </h2>
                                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                                <div class="superOpportunityHeader2 br2vw ">
                                                                                    <div class="aDblock">
                                                                                        <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                        <a class="text-decoration-none fs12px liteGrey ps-2" href="#">Sports
                                                                                            Shoes</a>
                                                                                        <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                        <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                        <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item mt-2">
                                                                                <h2 class="accordion-header" id="flush-headingTwos">
                                                                                    <button class="accordion-button collapsed fs12px p-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwos" aria-expanded="false" aria-controls="flush-collapseTwos">
                                                                                        Shoes
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="flush-collapseTwos" class="accordion-collapse collapse" aria-labelledby="flush-headingTwos" data-bs-parent="#accordionFlushExample">
                                                                                    <div class="superOpportunityHeader2 br2vw ">
                                                                                        <div class="aDblock">
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">Sports
                                                                                                Shoes</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item mt-2">
                                                                                <h2 class="accordion-header" id="flush-headingThree">
                                                                                    <button class="accordion-button collapsed fs12px p-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                                        Beauty & Grooming
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                                    <div class="superOpportunityHeader2 br2vw ">
                                                                                        <div class="aDblock">
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">Sports
                                                                                                Shoes</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item mt-2">
                                                                                <h2 class="accordion-header" id="flush-headingFor">
                                                                                    <button class="accordion-button collapsed fs12px p-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor" aria-expanded="false" aria-controls="flush-collapseFor">
                                                                                        Fashion Jewellery
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="flush-collapseFor" class="accordion-collapse collapse" aria-labelledby="flush-headingFor" data-bs-parent="#accordionFlushExample">
                                                                                    <div class="superOpportunityHeader2 br2vw ">
                                                                                        <div class="aDblock">
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">Sports
                                                                                                Shoes</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item mt-2">
                                                                                <h2 class="accordion-header" id="flush-headingFive">
                                                                                    <button class="accordion-button collapsed fs12px p-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                                                                        Personal Care
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                                                                    <div class="superOpportunityHeader2 br2vw ">
                                                                                        <div class="aDblock">
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">Sports
                                                                                                Shoes</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item mt-2">
                                                                                <h2 class="accordion-header" id="flush-headingSix">
                                                                                    <button class="accordion-button collapsed fs12px p-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                                                                        Accessories
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                                                                    <div class="superOpportunityHeader2 br2vw ">
                                                                                        <div class="aDblock">
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">Sports
                                                                                                Shoes</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item mt-2">
                                                                                <h2 class="accordion-header" id="flush-headingSeven">
                                                                                    <button class="accordion-button collapsed fs12px p-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                                                                        Clothing
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                                                                    <div class="superOpportunityHeader2 br2vw ">
                                                                                        <div class="aDblock">
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">Sports
                                                                                                Shoes</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item mt-2">
                                                                                <h2 class="accordion-header" id="flush-headingEight">
                                                                                    <button class="accordion-button collapsed fs12px p-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                                                                        Summer Collection
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                                                                    <div class="superOpportunityHeader2 br2vw ">
                                                                                        <div class="aDblock">
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">Sports
                                                                                                Shoes</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                            <a class="text-decoration-none fs12px liteGrey ps-2" href="#">sports</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-md-4 mb-5 mb-md-0">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="maxWidth285px">
                                                                    <div class="d-flex justify-content-between mb-2">
                                                                        <h3 class="fs14px liteGrey">FILTER BY BRANDS
                                                                        </h3>
                                                                    </div>
                                                                    <div class="mt-2 pe-2 BrandsScrol">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands1" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands1">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands2" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands2">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands3" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands3">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands4" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands4">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands5" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands5">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands6" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands6">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands7" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands7">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands8" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands8">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands1" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands1">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands2" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands2">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands3" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands3">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands4" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands4">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands5" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands5">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands6" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands6">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands7" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands7">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <input id="brands8" class="ceked checkboxClr" type="checkbox">
                                                                                <label for="brands8">Casali</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-md-4">
                                                            <h3 class="fs14px liteGrey">COLORS</h3>
                                                            <div class="d-flex flex-wrap">
                                                                <div class="colors">
                                                                    <input id="liteBlue" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('liteBlue')" class="p-2 bg4370e1 rounded-1 border-0"></button>
                                                                    <input id="darkBlue" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('darkBlue')" class="p-2 bg4434ee1 rounded-1 border-0"></button>
                                                                    <input id="darkPurple" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('darkPurple')" class="p-2 bg8243e1 rounded-1 border-0"></button>
                                                                    <input id="litePurple" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('litePurple')" class="p-2 bgb643e1 rounded-1 border-0"></button>
                                                                    <input id="litePink" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('litePink')" class="p-2 bge143b3 rounded-1 border-0"></button>
                                                                    <input id="red" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('red')" class="p-2 bge83758 rounded-1 border-0"></button>
                                                                    <input id="darkYellow" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('darkYellow')" class="p-2 bge89b37 rounded-1 border-0"></button>
                                                                    <input id="orange" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('orange')" class="p-2 bge87137 rounded-1 border-0"></button>
                                                                    <input id="liteYellow" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('liteYellow')" class="p-2 bge8e237 rounded-1 border-0"></button>
                                                                    <input id="liteGreen" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('liteGreen')" class="p-2 bgb0e837 rounded-1 border-0"></button>
                                                                    <input id="darkGreen" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('darkGreen')" class="p-2 bg61e837 rounded-1 border-0"></button>
                                                                    <input id="moreliteGreen" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('moreliteGreen')" class="p-2 bg37e8a3 rounded-1 border-0"></button>
                                                                    <input id="moreLiteBlue" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('moreLiteBlue')" class="p-2 bg37e6e8 rounded-1 border-0"></button>
                                                                    <input id="grey" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('grey')" class="p-2 bg524d4e rounded-1 border-0"></button>
                                                                    <input id="liteGrey" class="opacity-0 ceked checkboxClr  position-absolute start-0 " type="checkbox">
                                                                    <button onclick="isaretleCheckbox('liteGrey')" class="p-2 bge5e5e5 rounded-1 border-0"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" d-block d-sm-flex ms-1 ms-sm-0 ">
                                            <button class="border-0 bg-transparent fs12px liteGrey d-flex align-items-center p-2 p-sm-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13px" height="13px">
                                                    <path fill-rule="evenodd" fill="rgb(103, 105, 112)" d="M6.499,-0.007 C2.906,-0.007 -0.006,2.906 -0.006,6.499 C-0.006,10.092 2.906,13.006 6.499,13.006 C10.094,13.006 13.006,10.092 13.006,6.499 C13.006,2.906 10.094,-0.007 6.499,-0.007 ZM9.296,8.261 L8.260,9.295 C8.260,9.295 6.621,7.537 6.498,7.537 C6.378,7.537 4.738,9.295 4.738,9.295 L3.701,8.261 C3.701,8.261 5.462,6.645 5.462,6.502 C5.462,6.356 3.701,4.740 3.701,4.740 L4.738,3.702 C4.738,3.702 6.391,5.462 6.498,5.462 C6.606,5.462 8.260,3.702 8.260,3.702 L9.296,4.740 C9.296,4.740 7.535,6.379 7.535,6.502 C7.535,6.619 9.296,8.261 9.296,8.261 Z" />
                                                </svg>
                                                <span class="ms-1">Min $20 - Max $500</span>
                                            </button>
                                            <button class="border-0 bg-transparent fs12px liteGrey d-flex align-items-center p-2 p-sm-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13px" height="13px">
                                                    <path fill-rule="evenodd" fill="rgb(103, 105, 112)" d="M6.499,-0.007 C2.906,-0.007 -0.006,2.906 -0.006,6.499 C-0.006,10.092 2.906,13.006 6.499,13.006 C10.094,13.006 13.006,10.092 13.006,6.499 C13.006,2.906 10.094,-0.007 6.499,-0.007 ZM9.296,8.261 L8.260,9.295 C8.260,9.295 6.621,7.537 6.498,7.537 C6.378,7.537 4.738,9.295 4.738,9.295 L3.701,8.261 C3.701,8.261 5.462,6.645 5.462,6.502 C5.462,6.356 3.701,4.740 3.701,4.740 L4.738,3.702 C4.738,3.702 6.391,5.462 6.498,5.462 C6.606,5.462 8.260,3.702 8.260,3.702 L9.296,4.740 C9.296,4.740 7.535,6.379 7.535,6.502 C7.535,6.619 9.296,8.261 9.296,8.261 Z" />
                                                </svg>
                                                <span class="ms-1">Small Size </span>
                                            </button>
                                            <button class="border-0 bg-transparent fs12px liteGrey d-flex align-items-center p-2 p-sm-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13px" height="13px">
                                                    <path fill-rule="evenodd" fill="rgb(103, 105, 112)" d="M6.499,-0.007 C2.906,-0.007 -0.006,2.906 -0.006,6.499 C-0.006,10.092 2.906,13.006 6.499,13.006 C10.094,13.006 13.006,10.092 13.006,6.499 C13.006,2.906 10.094,-0.007 6.499,-0.007 ZM9.296,8.261 L8.260,9.295 C8.260,9.295 6.621,7.537 6.498,7.537 C6.378,7.537 4.738,9.295 4.738,9.295 L3.701,8.261 C3.701,8.261 5.462,6.645 5.462,6.502 C5.462,6.356 3.701,4.740 3.701,4.740 L4.738,3.702 C4.738,3.702 6.391,5.462 6.498,5.462 C6.606,5.462 8.260,3.702 8.260,3.702 L9.296,4.740 C9.296,4.740 7.535,6.379 7.535,6.502 C7.535,6.619 9.296,8.261 9.296,8.261 Z" />
                                                </svg>
                                                <span class="ms-1">Halfman Brand</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="veri-listesi" class="AllProduct content row m-0 justify-content-start position-relative z-0">
                            <div class="col-12 col-sm-6 col-xl-3 itemsPage">
                                <div class="row">
                                    <button class="col-md-4 col-lg-12 col-xl-12 border-0 bg-white productClick" id="productButton1">
                                        <div class=" position-relative">
                                            <div class="d-flex justify-content-center">
                                                <img class=" maxHeight maxWidth100" id="productImage1" src="../../assets/images/productImg/product1.webp" alt="product">
                                            </div>
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="p-4 maxHeight157 ">
                                        <div class="d-none toggleContent text-start color96979b h63">
                                            <p>Availability : <span class="darkPink">In stock</span></p>
                                            <div class="d-flex align-items-center mt-2">
                                                <a class="productButon rounded-1 border-0 fs10  py-2 px-3  text-nowrap text-decoration-none">Add
                                                    to Card</a>

                                                <div class=" mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="picture" src="../../assets/images/Icon Heart.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="copy" src="../../assets/images/Icon Compare.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shortDteal text-start h63">
                                            <div class="">
                                                <div class="">
                                                    <p class="fs12px textGreen">Furniture</p>
                                                    <a href="#" class="color96979b me-3 text-decoration-none productTitle">Modern
                                                        Plastic Armchair
                                                        Rocker
                                                    </a>
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="rating d-flex" id="product1">
                                                            <div class="star" data-rating="1"></div>
                                                            <div class="star" data-rating="2"></div>
                                                            <div class="star" data-rating="3"></div>
                                                            <div class="star" data-rating="4"></div>
                                                            <div class="star" data-rating="5"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-block d-lg-flex d-xl-block align-items-center mt-3 mt-md-0 mt-lg-3 mt-xl-0">
                                            <div class="">
                                                <p class="color96979b text-nowrap w-100">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 itemsPage">
                                <div class="row">
                                    <button class="col-md-4 col-lg-12 col-xl-12 border-0 bg-white productClick" id="productButton2">
                                        <div class=" position-relative">
                                            <div class="d-flex justify-content-center">
                                                <img class=" maxHeight maxWidth100" id="productImage2" src="../../assets/images/productImg/product1.webp" alt="product">
                                            </div>
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="p-4 maxHeight157 ">
                                        <div class="d-none toggleContent text-start color96979b h63">
                                            <p>Availability : <span class="darkPink">In stock</span></p>
                                            <div class="d-flex align-items-center mt-2">
                                                <a class="productButon rounded-1 border-0 fs10  py-2 px-3  text-nowrap text-decoration-none">Add
                                                    to Card</a>

                                                <div class=" mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="picture" src="../../assets/images/Icon Heart.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="copy" src="../../assets/images/Icon Compare.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shortDteal text-start h63">
                                            <div class="">
                                                <div class="">
                                                    <p class="fs12px textGreen">Furniture</p>
                                                    <a href="#" class="color96979b me-3 text-decoration-none productTitle">Modern
                                                        Plastic Armchair
                                                        Rocker
                                                    </a>
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="rating d-flex" id="product1">
                                                            <div class="star" data-rating="1"></div>
                                                            <div class="star" data-rating="2"></div>
                                                            <div class="star" data-rating="3"></div>
                                                            <div class="star" data-rating="4"></div>
                                                            <div class="star" data-rating="5"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-block d-lg-flex d-xl-block align-items-center mt-3 mt-md-0 mt-lg-3 mt-xl-0">
                                            <div class="">
                                                <p class="color96979b text-nowrap w-100">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 itemsPage">
                                <div class="row">
                                    <button class="col-md-4 col-lg-12 col-xl-12 border-0 bg-white productClick" id="productButton1">
                                        <div class=" position-relative">
                                            <div class="d-flex justify-content-center">
                                                <img class=" maxHeight maxWidth100" id="productImage1" src="../../assets/images/productImg/product1.webp" alt="product">
                                            </div>
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="p-4 maxHeight157 ">
                                        <div class="d-none toggleContent text-start color96979b h63">
                                            <p>Availability : <span class="darkPink">In stock</span></p>
                                            <div class="d-flex align-items-center mt-2">
                                                <a class="productButon rounded-1 border-0 fs10  py-2 px-3  text-nowrap text-decoration-none">Add
                                                    to Card</a>

                                                <div class=" mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="picture" src="../../assets/images/Icon Heart.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="copy" src="../../assets/images/Icon Compare.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shortDteal text-start h63">
                                            <div class="">
                                                <div class="">
                                                    <p class="fs12px textGreen">Furniture</p>
                                                    <a href="#" class="color96979b me-3 text-decoration-none productTitle">Modern
                                                        Plastic Armchair
                                                        Rocker
                                                    </a>
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="rating d-flex" id="product1">
                                                            <div class="star" data-rating="1"></div>
                                                            <div class="star" data-rating="2"></div>
                                                            <div class="star" data-rating="3"></div>
                                                            <div class="star" data-rating="4"></div>
                                                            <div class="star" data-rating="5"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-block d-lg-flex d-xl-block align-items-center mt-3 mt-md-0 mt-lg-3 mt-xl-0">
                                            <div class="">
                                                <p class="color96979b text-nowrap w-100">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 itemsPage">
                                <div class="row">
                                    <button class="col-md-4 col-lg-12 col-xl-12 border-0 bg-white productClick" id="productButton1">
                                        <div class=" position-relative">
                                            <div class="d-flex justify-content-center">
                                                <img class=" maxHeight maxWidth100" id="productImage1" src="../../assets/images/productImg/product1.webp" alt="product">
                                            </div>
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="p-4 maxHeight157 ">
                                        <div class="d-none toggleContent text-start color96979b h63">
                                            <p>Availability : <span class="darkPink">In stock</span></p>
                                            <div class="d-flex align-items-center mt-2">
                                                <a class="productButon rounded-1 border-0 fs10  py-2 px-3  text-nowrap text-decoration-none">Add
                                                    to Card</a>

                                                <div class=" mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="picture" src="../../assets/images/Icon Heart.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="copy" src="../../assets/images/Icon Compare.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shortDteal text-start h63">
                                            <div class="">
                                                <div class="">
                                                    <p class="fs12px textGreen">Furniture</p>
                                                    <a href="#" class="color96979b me-3 text-decoration-none productTitle">Modern
                                                        Plastic Armchair
                                                        Rocker
                                                    </a>
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="rating d-flex" id="product1">
                                                            <div class="star" data-rating="1"></div>
                                                            <div class="star" data-rating="2"></div>
                                                            <div class="star" data-rating="3"></div>
                                                            <div class="star" data-rating="4"></div>
                                                            <div class="star" data-rating="5"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-block d-lg-flex d-xl-block align-items-center mt-3 mt-md-0 mt-lg-3 mt-xl-0">
                                            <div class="">
                                                <p class="color96979b text-nowrap w-100">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 itemsPage">
                                <div class="row">
                                    <button class="col-md-4 col-lg-12 col-xl-12 border-0 bg-white productClick" id="productButton1">
                                        <div class=" position-relative">
                                            <div class="d-flex justify-content-center">
                                                <img class=" maxHeight maxWidth100" id="productImage1" src="../../assets/images/productImg/product1.webp" alt="product">
                                            </div>
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="p-4 maxHeight157 ">
                                        <div class="d-none toggleContent text-start color96979b h63">
                                            <p>Availability : <span class="darkPink">In stock</span></p>
                                            <div class="d-flex align-items-center mt-2">
                                                <a class="productButon rounded-1 border-0 fs10  py-2 px-3  text-nowrap text-decoration-none">Add
                                                    to Card</a>

                                                <div class=" mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="picture" src="../../assets/images/Icon Heart.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="copy" src="../../assets/images/Icon Compare.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shortDteal text-start h63">
                                            <div class="">
                                                <div class="">
                                                    <p class="fs12px textGreen">Furniture</p>
                                                    <a href="#" class="color96979b me-3 text-decoration-none productTitle">Modern
                                                        Plastic Armchair
                                                        Rocker
                                                    </a>
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="rating d-flex" id="product1">
                                                            <div class="star" data-rating="1"></div>
                                                            <div class="star" data-rating="2"></div>
                                                            <div class="star" data-rating="3"></div>
                                                            <div class="star" data-rating="4"></div>
                                                            <div class="star" data-rating="5"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-block d-lg-flex d-xl-block align-items-center mt-3 mt-md-0 mt-lg-3 mt-xl-0">
                                            <div class="">
                                                <p class="color96979b text-nowrap w-100">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 itemsPage">
                                <div class="row">
                                    <button class="col-md-4 col-lg-12 col-xl-12 border-0 bg-white productClick" id="productButton1">
                                        <div class=" position-relative">
                                            <div class="d-flex justify-content-center">
                                                <img class=" maxHeight maxWidth100" id="productImage1" src="../../assets/images/productImg/product1.webp" alt="product">
                                            </div>
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="p-4 maxHeight157 ">
                                        <div class="d-none toggleContent text-start color96979b h63">
                                            <p>Availability : <span class="darkPink">In stock</span></p>
                                            <div class="d-flex align-items-center mt-2">
                                                <a class="productButon rounded-1 border-0 fs10  py-2 px-3  text-nowrap text-decoration-none">Add
                                                    to Card</a>

                                                <div class=" mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="picture" src="../../assets/images/Icon Heart.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="copy" src="../../assets/images/Icon Compare.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shortDteal text-start h63">
                                            <div class="">
                                                <div class="">
                                                    <p class="fs12px textGreen">Furniture</p>
                                                    <a href="#" class="color96979b me-3 text-decoration-none productTitle">Modern
                                                        Plastic Armchair
                                                        Rocker
                                                    </a>
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="rating d-flex" id="product1">
                                                            <div class="star" data-rating="1"></div>
                                                            <div class="star" data-rating="2"></div>
                                                            <div class="star" data-rating="3"></div>
                                                            <div class="star" data-rating="4"></div>
                                                            <div class="star" data-rating="5"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-block d-lg-flex d-xl-block align-items-center mt-3 mt-md-0 mt-lg-3 mt-xl-0">
                                            <div class="">
                                                <p class="color96979b text-nowrap w-100">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 itemsPage">
                                <div class="row">
                                    <button class="col-md-4 col-lg-12 col-xl-12 border-0 bg-white productClick" id="productButton1">
                                        <div class=" position-relative">
                                            <div class="d-flex justify-content-center">
                                                <img class=" maxHeight maxWidth100" id="productImage1" src="../../assets/images/productImg/product1.webp" alt="product">
                                            </div>
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="p-4 maxHeight157 ">
                                        <div class="d-none toggleContent text-start color96979b h63">
                                            <p>Availability : <span class="darkPink">In stock</span></p>
                                            <div class="d-flex align-items-center mt-2">
                                                <a class="productButon rounded-1 border-0 fs10  py-2 px-3  text-nowrap text-decoration-none">Add
                                                    to Card</a>

                                                <div class=" mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="picture" src="../../assets/images/Icon Heart.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="copy" src="../../assets/images/Icon Compare.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shortDteal text-start h63">
                                            <div class="">
                                                <div class="">
                                                    <p class="fs12px textGreen">Furniture</p>
                                                    <a href="#" class="color96979b me-3 text-decoration-none productTitle">Modern
                                                        Plastic Armchair
                                                        Rocker
                                                    </a>
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="rating d-flex" id="product1">
                                                            <div class="star" data-rating="1"></div>
                                                            <div class="star" data-rating="2"></div>
                                                            <div class="star" data-rating="3"></div>
                                                            <div class="star" data-rating="4"></div>
                                                            <div class="star" data-rating="5"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-block d-lg-flex d-xl-block align-items-center mt-3 mt-md-0 mt-lg-3 mt-xl-0">
                                            <div class="">
                                                <p class="color96979b text-nowrap w-100">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 itemsPage">
                                <div class="row">
                                    <button class="col-md-4 col-lg-12 col-xl-12 border-0 bg-white productClick" id="productButton1">
                                        <div class=" position-relative">
                                            <div class="d-flex justify-content-center">
                                                <img class=" maxHeight maxWidth100" id="productImage1" src="../../assets/images/productImg/product1.webp" alt="product">
                                            </div>
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="p-4 maxHeight157 ">
                                        <div class="d-none toggleContent text-start color96979b h63">
                                            <p>Availability : <span class="darkPink">In stock</span></p>
                                            <div class="d-flex align-items-center mt-2">
                                                <a class="productButon rounded-1 border-0 fs10  py-2 px-3  text-nowrap text-decoration-none">Add
                                                    to Card</a>

                                                <div class=" mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="picture" src="../../assets/images/Icon Heart.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="copy" src="../../assets/images/Icon Compare.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shortDteal text-start h63">
                                            <div class="">
                                                <div class="">
                                                    <p class="fs12px textGreen">Furniture</p>
                                                    <a href="#" class="color96979b me-3 text-decoration-none productTitle">Modern
                                                        Plastic Armchair
                                                        Rocker
                                                    </a>
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="rating d-flex" id="product1">
                                                            <div class="star" data-rating="1"></div>
                                                            <div class="star" data-rating="2"></div>
                                                            <div class="star" data-rating="3"></div>
                                                            <div class="star" data-rating="4"></div>
                                                            <div class="star" data-rating="5"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-block d-lg-flex d-xl-block align-items-center mt-3 mt-md-0 mt-lg-3 mt-xl-0">
                                            <div class="">
                                                <p class="color96979b text-nowrap w-100">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3 itemsPage">
                                <div class="row">
                                    <button class="col-md-4 col-lg-12 col-xl-12 border-0 bg-white productClick" id="productButton1">
                                        <div class=" position-relative">
                                            <div class="d-flex justify-content-center">
                                                <img class=" maxHeight maxWidth100" id="productImage1" src="../../assets/images/productImg/product1.webp" alt="product">
                                            </div>
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="p-4 maxHeight157 ">
                                        <div class="d-none toggleContent text-start color96979b h63">
                                            <p>Availability : <span class="darkPink">In stock</span></p>
                                            <div class="d-flex align-items-center mt-2">
                                                <a class="productButon rounded-1 border-0 fs10  py-2 px-3  text-nowrap text-decoration-none">Add
                                                    to Card</a>

                                                <div class=" mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="picture" src="../../assets/images/Icon Heart.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="mx-2">
                                                    <a class="text-decoration-none fs12px d-flex align-items-center liteGrey border-0 bg-transparent ps-0 starting">
                                                        <img class="copy" src="../../assets/images/Icon Compare.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shortDteal text-start h63">
                                            <div class="">
                                                <div class="">
                                                    <p class="fs12px textGreen">Furniture</p>
                                                    <a href="#" class="color96979b me-3 text-decoration-none productTitle">Modern
                                                        Plastic Armchair
                                                        Rocker
                                                    </a>
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="rating d-flex" id="product1">
                                                            <div class="star" data-rating="1"></div>
                                                            <div class="star" data-rating="2"></div>
                                                            <div class="star" data-rating="3"></div>
                                                            <div class="star" data-rating="4"></div>
                                                            <div class="star" data-rating="5"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-block d-lg-flex d-xl-block align-items-center mt-3 mt-md-0 mt-lg-3 mt-xl-0">
                                            <div class="">
                                                <p class="color96979b text-nowrap w-100">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav id="sayfalama" class="p-0" aria-label="Page navigation example ">
                                <ul class="pagination justify-content-between stillas m-0 border-top">
                                    <li id="onceki" class="page-item">
                                        <a class="page-link rounded-0 border-top-0 border-bottom-0 still justify-content-center d-flex align-items-center" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="fa-solid fa-angle-left colorcacbcd "></i></span>
                                        </a>
                                    </li>
                                    <div id="sayfa-numarasi" class="d-flex stillas">
                                        <li class="page-item "><a class="justify-content-center page-button d-flex align-items-center page-link rounded-0 border-top-0 border-bottom-0 
                                                changePage1 stillactive " href="#">1</a></li>
                                        <li class="page-item "><a class="justify-content-center page-button d-flex align-items-center page-link rounded-0 border-top-0 border-bottom-0 changePage2 colorcacbcd still" href="#">2</a></li>
                                        <li class="page-item "><a class="justify-content-center page-button d-flex align-items-center page-link rounded-0 border-top-0 border-bottom-0 changePage3  colorcacbcd still" href="#">3</a></li>
                                        <li class="page-item "><a class="justify-content-center page-button d-flex align-items-center page-link rounded-0 border-top-0 border-bottom-0 changePage4 colorcacbcd still" href="#">4</a></li>
                                        <li class="page-item "><a class="justify-content-center page-button d-flex align-items-center page-link rounded-0 border-top-0 border-bottom-0 changePage5 colorcacbcd still" href="#">5</a></li>
                                    </div>
                                    <li id="sonraki" class="page-item">
                                        <a class="page-link rounded-0 border-top-0 border-bottom-0 still justify-content-center d-flex align-items-center" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa-solid fa-angle-right colorcacbcd "></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <div class="bgFooterOn">
            <div class="py-5"></div>
            <div>
                <div class="rpHeader cardHeaderlink">
                    <h2 class="fs-6  rp d-flex justify-content-center">Recomended Products</h2>
                </div>
                <div class="rpBoady">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="Carouselshop owl-carousel owl-theme">
                                <div class="item">
                                    <div>
                                        <div id="resim-container" class="productImg h235 ">
                                            <div id="ana-resim" class="resim resimDesign" onmouseover="gosterResim(1)">
                                            </div>
                                            <div id="ana-resim " class="resim " onmouseover="gosterResim(1)"></div>
                                            <div class="resim" onmouseover="gosterResim(2)"></div>
                                            <div class="resim" onmouseover="gosterResim(3)"></div>
                                        </div>
                                        <div class="productDescription">
                                            <p class="fs12px textGreen">Furniture</p>
                                            <p class="liteGrey">Modern Plastic Armchair
                                                Rocker
                                            </p>
                                            <div class="rating d-flex" id="product1">
                                                <div class="star" data-rating="1"></div>
                                                <div class="star" data-rating="2"></div>
                                                <div class="star" data-rating="3"></div>
                                                <div class="star" data-rating="4"></div>
                                                <div class="star" data-rating="5"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="liteGrey">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                                <div class="d-flex  align-items-center productCard productCartEfect">
                                                    <img class="w-auto w-25 pe-2 border-end " src="../../assets/images/Icon - Cart.png" alt="icon cart">
                                                    <p class="fs10 ps-2 lh12">Add to <br>
                                                        Cart</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="item">
                                    <div>
                                        <div id="resim-container" class="productImg h235">
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                            <div id="ana-resim2" class="resim resimDesign" onmouseover="gosterResim2(1)">
                                            </div>
                                            <div id="ana-resim2" class="resim " onmouseover="gosterResim2(1)"></div>
                                            <div class="resim" onmouseover="gosterResim2(2)"></div>
                                            <div class="resim" onmouseover="gosterResim2(3)"></div>
                                        </div>
                                        <div class="productDescription">
                                            <p class="fs12px textGreen">Furniture</p>
                                            <p class="liteGrey">Modern Plastic Armchair
                                                Rocker
                                            </p>
                                            <div class="rating d-flex" id="product1">
                                                <div class="star" data-rating="1"></div>
                                                <div class="star" data-rating="2"></div>
                                                <div class="star" data-rating="3"></div>
                                                <div class="star" data-rating="4"></div>
                                                <div class="star" data-rating="5"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="liteGrey">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                                <div class="d-flex  align-items-center productCard">
                                                    <img class="w-auto w-25 pe-2 border-end " src="../../assets/images/Icon - Cart.png" alt="icon cart">
                                                    <p class="fs10 ps-2 lh12">Add to <br>
                                                        Cart</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <div id="resim-container" class="productImg h235">
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                            <div id="ana-resim2" class="resim resimDesign" onmouseover="gosterResim2(1)">
                                            </div>
                                            <div id="ana-resim2" class="resim " onmouseover="gosterResim2(1)"></div>
                                            <div class="resim" onmouseover="gosterResim2(2)"></div>
                                            <div class="resim" onmouseover="gosterResim2(3)"></div>
                                        </div>
                                        <div class="productDescription">
                                            <p class="fs12px textGreen">Furniture</p>
                                            <p class="liteGrey">Modern Plastic Armchair
                                                Rocker
                                            </p>
                                            <div class="rating d-flex" id="product1">
                                                <div class="star" data-rating="1"></div>
                                                <div class="star" data-rating="2"></div>
                                                <div class="star" data-rating="3"></div>
                                                <div class="star" data-rating="4"></div>
                                                <div class="star" data-rating="5"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="liteGrey">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                                <div class="d-flex  align-items-center productCard">
                                                    <img class="w-auto w-25 pe-2 border-end " src="../../assets/images/Icon - Cart.png" alt="icon cart">
                                                    <p class="fs10 ps-2 lh12">Add to <br>
                                                        Cart</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <div id="resim-container" class="productImg h235">
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                            <div id="ana-resim2" class="resim resimDesign" onmouseover="gosterResim2(1)">
                                            </div>
                                            <div id="ana-resim2" class="resim " onmouseover="gosterResim2(1)"></div>
                                            <div class="resim" onmouseover="gosterResim2(2)"></div>
                                            <div class="resim" onmouseover="gosterResim2(3)"></div>
                                        </div>
                                        <div class="productDescription">
                                            <p class="fs12px textGreen">Furniture</p>
                                            <p class="liteGrey">Modern Plastic Armchair
                                                Rocker
                                            </p>
                                            <div class="rating d-flex" id="product1">
                                                <div class="star" data-rating="1"></div>
                                                <div class="star" data-rating="2"></div>
                                                <div class="star" data-rating="3"></div>
                                                <div class="star" data-rating="4"></div>
                                                <div class="star" data-rating="5"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="liteGrey">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                                <div class="d-flex  align-items-center productCard">
                                                    <img class="w-auto w-25 pe-2 border-end " src="../../assets/images/Icon - Cart.png" alt="icon cart">
                                                    <p class="fs10 ps-2 lh12">Add to <br>
                                                        Cart</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <div id="resim-container" class="productImg h235">
                                            <div class="clipPath2 rounded-end-1 p-1 ps-3 pe-2 position-absolute top-0 end-0">
                                                <p class="fs10 fw-bold text-white">25% OFF</p>
                                            </div>
                                            <div id="ana-resim2" class="resim resimDesign" onmouseover="gosterResim2(1)">
                                            </div>
                                            <div id="ana-resim2" class="resim " onmouseover="gosterResim2(1)"></div>
                                            <div class="resim" onmouseover="gosterResim2(2)"></div>
                                            <div class="resim" onmouseover="gosterResim2(3)"></div>
                                        </div>
                                        <div class="productDescription">
                                            <p class="fs12px textGreen">Furniture</p>
                                            <p class="liteGrey">Modern Plastic Armchair
                                                Rocker
                                            </p>
                                            <div class="rating d-flex" id="product1">
                                                <div class="star" data-rating="1"></div>
                                                <div class="star" data-rating="2"></div>
                                                <div class="star" data-rating="3"></div>
                                                <div class="star" data-rating="4"></div>
                                                <div class="star" data-rating="5"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="liteGrey">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                                <div class="d-flex  align-items-center productCard">
                                                    <img class="w-auto w-25 pe-2 border-end " src="../../assets/images/Icon - Cart.png" alt="icon cart">
                                                    <p class="fs10 ps-2 lh12">Add to <br>
                                                        Cart</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <div id="resim-container" class="productImg h235 ">
                                            <div id="ana-resim3" class="resim resimDesign" onmouseover="gosterResim3(1)">
                                            </div>
                                            <div id="ana-resim3 " class="resim " onmouseover="gosterResim3(1)"></div>
                                            <div class="resim" onmouseover="gosterResim3(2)"></div>
                                            <div class="resim" onmouseover="gosterResim3(3)"></div>
                                        </div>
                                        <div class="productDescription">
                                            <p class="fs12px textGreen">Furniture</p>
                                            <p class="liteGrey">Modern Plastic Armchair
                                                Rocker
                                            </p>
                                            <div class="rating d-flex" id="product1">
                                                <div class="star" data-rating="1"></div>
                                                <div class="star" data-rating="2"></div>
                                                <div class="star" data-rating="3"></div>
                                                <div class="star" data-rating="4"></div>
                                                <div class="star" data-rating="5"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="liteGrey">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                                <div class="d-flex  align-items-center productCard">
                                                    <img class="w-auto w-25 pe-2 border-end " src="../../assets/images/Icon - Cart.png" alt="icon cart">
                                                    <p class="fs10 ps-2 lh12">Add to <br>
                                                        Cart</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <div id="resim-container" class="productImg h235 ">
                                            <div id="ana-resim4" class="resim resimDesign" onmouseover="gosterResim4(1)">
                                            </div>
                                            <div id="ana-resim4" class="resim " onmouseover="gosterResim4(1)"></div>
                                            <div class="resim" onmouseover="gosterResim4(2)"></div>
                                            <div class="resim" onmouseover="gosterResim4(3)"></div>
                                        </div>
                                        <div class="productDescription">
                                            <p class="fs12px textGreen">Furniture</p>
                                            <p class="liteGrey">Modern Plastic Armchair
                                                Rocker
                                            </p>
                                            <div class="rating d-flex" id="product1">
                                                <div class="star" data-rating="1"></div>
                                                <div class="star" data-rating="2"></div>
                                                <div class="star" data-rating="3"></div>
                                                <div class="star" data-rating="4"></div>
                                                <div class="star" data-rating="5"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="liteGrey">
                                                    <sup class="mt-2">$</sup>199 &nbsp;
                                                    <small class="fs12px"><del>&nbsp;$219&nbsp;</del></small>
                                                </p>
                                                <div class="d-flex  align-items-center productCard">
                                                    <img class="w-auto w-25 pe-2 border-end " src="../../assets/images/Icon - Cart.png" alt="icon cart">
                                                    <p class="fs10 ps-2 lh12">Add to <br>
                                                        Cart</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center mx-5 liteGrey p-5 px-0 px-sm-5">
                <h2 class="fw-light">JOIN OUR NEWSLETTER</h2>
                <p>Subscribe our newsletter to receive the latest news and exclusive offers every week.</p>
                <div class="d-flex justify-content-center mt-3">
                    <input class="dz w400px h45px rounded-start-1 outlineNone p-3 textElipses" placeholder="Enter email address here" type="search">
                    <button class="rounded-end-1 bgDarkPink text-white border-0 fw-bold fs12px w150px">SUBSCRIBE</button>
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
        productImgHover()
        imgchange();
        coppy();
        heart();
        productchange();
        buttonOpenClose();
        checkboxclr();
        pagination();
    </script>
</body>

</html>