<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/style.css">
    <title>FreeTrial</title>
</head>
<body>

<div class="bg-gradient">
    <div class="py-4">
        <header class="container max-container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="#" class="text-white fs-45">LOGO</a>
                </div>
                <div class="d-flex">
                    <button class="text-white btn-transparent mx-5">Sign In</button>
                    <button class="btn-red">Sign Up <img src="img/arrow-point-to-right.png" alt="" class="ml-2"></button>
                </div>
            </div>
        </header>
        <main class="container pt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white-whit-shadow">
                        <ul id="tabs" class="nav nav-tabs">
                            <li class="nav-item flex-1"><a href="" data-target="#step1" data-toggle="tab" class="nav-link small text-uppercase active">1 Step</a></li>
                            <li class="nav-item flex-1"><a href="" data-target="#step2" data-toggle="tab" class="nav-link small text-uppercase">2 Step</a></li>
                        </ul>
                        <br>
                        <div id="tabsContent" class="tab-content">
                            <div id="step1" class="tab-pane fade active show">
                                <h2 class="fs-24-bold-black">Sign Up and Start Your Free Trial!</h2>
                                <p class="fs-18-gray">Access Influencer Audience demographic data, Reach, Gender, Location,
                                    <br> Engagement, Direct Contact Information and More</p>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="form-group col-md-6 mb-0">
                                            <label for="name" class="fs-14-gray">Name</label>
                                            <input type="text" class="form-control pr-input" id="name" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6 mb-0">
                                            <label for="surname" class="fs-14-gray">Surname</label>
                                            <input type="text" class="form-control pr-input" id="surname" placeholder="Surname">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 mb-0">
                                            <label for="companyEmail" class="fs-14-gray">Email</label>
                                            <input type="email" class="form-control pr-input" id="companyEmail" placeholder="Company Email">
                                        </div>
                                        <div class="form-group col-md-6 mb-0">
                                            <label for="companyName" class="fs-14-gray">Password</label>
                                            <input type="text" class="form-control pr-input" id="companyName" placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 mb-0 relative">
                                            <label for="companySize" class="fs-14-gray">Company Size</label>
                                            <input type="text" class="form-control pr-input" id="companySize" placeholder="Company Size">
                                            <i class="angle-down"><img src="img/angle-down.png" alt=""></i>
                                        </div>
                                        <div class="form-group col-md-6 mb-0 relative">
                                            <label for="companyType" class="fs-14-gray">Company Type</label>
                                            <input type="text" class="form-control pr-input" id="companyType" placeholder="Company Type">
                                            <i class="angle-down"><img src="img/angle-down.png" alt=""></i>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 relative">
                                        <label for="JobTitle" class="fs-14-gray">Job Title</label>
                                        <select id="JobTitle" class="form-control pr-input">
                                            <option selected disabled>Job Title</option>
                                            <option>...</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                        <i class="angle-down"><img src="img/angle-down.png" alt=""></i>
                                    </div>
                                    <div class="form-group mb-0 relative">
                                        <label for="country" class="fs-14-gray">Country</label>
                                        <select id="country" class="form-control pr-input">
                                            <option selected disabled>Country</option>
                                            <option>...</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                        <i class="angle-down"><img src="img/angle-down.png" alt=""></i>
                                    </div>
                                    <div class="form-group mb-0 relative">
                                        <label for="BusinessFunction" class="fs-14-gray">Business Category</label>
                                        <select id="BusinessFunction" class="form-control pr-input">
                                            <option selected disabled>Business Category</option>
                                            <option>...</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                        <i class="angle-down"><img src="img/angle-down.png" alt=""></i>
                                    </div>
                                    <div class="form-group mb-0 relative">
                                        <label for="byType" class="fs-14-gray">Select by the type</label>
                                        <select id="byType" class="form-control pr-input">
                                            <option selected disabled>Are You Using an Influencer Platform?</option>
                                            <option>...</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                        <i class="angle-down"><img src="img/angle-down.png" alt=""></i>
                                    </div>
                                    <div class="form-group mb-0 relative">
                                        <label for="byType2" class="fs-14-gray">Select by the type</label>
                                        <select id="byType2" class="form-control pr-input">
                                            <option selected disabled>How Advanced is Your Influencer Program?</option>
                                            <option>...</option>
                                            <option>...</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                        <i class="angle-down"><img src="img/angle-down.png" alt=""></i>
                                    </div>
                                    <div class="form-group mb-0 relative">
                                        <label for="byType3" class="fs-14-gray">Select profile type</label>
                                        <select id="byType3" class="form-control pr-input">
                                            <option selected disabled>Select profile type</option>
                                            <option>Company</option>
                                            <option>Brand</option>
                                            <option>Agency</option>
                                        </select>
                                        <i class="angle-down"><img src="img/angle-down.png" alt=""></i>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control pr-input" id="inputPassword4" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputConfirmPassword4">Confirm Password</label>
                                            <input type="password" class="form-control pr-input" id="inputConfirmPassword4" placeholder="Confirm password">
                                        </div>
                                    </div>

                                    <div class="form-group text-center my-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label fs-23-gray" for="gridCheck">
                                                I have read and agreed to the <a href="#" class="color-red">terms of service</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn-red fs-23">Next</button>
                                    </div>
                                </form>
                            </div>
                            <div id="step2" class="tab-pane fade">
                                <h2 class="fs-24-bold-black mb-5">Credit Card Information</h2>
                                <div class="row pb-2">
                                    <div class="col-md-12">
                                        <form action="#">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <p class="mx-2 my-2">
                                                    <input type="radio" id="test1" name="radio-group" checked>
                                                    <label for="test1"><img src="img/visa.png" alt=""></label>
                                                </p>
                                                <p class="mx-2 my-2">
                                                    <input type="radio" id="test2" name="radio-group">
                                                    <label for="test2"><img src="img/master.png" alt=""></label>
                                                </p>
                                                <p class="mx-2 my-2">
                                                    <input type="radio" id="test3" name="radio-group">
                                                    <label for="test3"><img src="img/paypal.png" alt=""></label>
                                                </p>
                                                <p class="mx-2 my-2">
                                                    <input type="radio" id="test4" name="radio-group">
                                                    <label for="test4"><img src="img/maestro.png" alt=""></label>
                                                </p>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <label for="name1" class="fs-14-gray">Name</label>
                                                    <input type="text" class="form-control pr-input" id="name1" placeholder="Name">
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <label for="surname1" class="fs-14-gray">Surname</label>
                                                    <input type="text" class="form-control pr-input" id="surname1" placeholder="Surname">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <label for="cardNumber" class="fs-14-gray">Credit Card Number</label>
                                                    <input type="number" class="form-control pr-input" id="cardNumber" placeholder="****  ****  ****  ****">
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <label for="SecurityCode" class="fs-14-gray">Security Code</label>
                                                    <input type="text" class="form-control pr-input" id="SecurityCode" placeholder="CVV">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0 relative">
                                                    <label for="expirationDate" class="fs-14-gray">Expiration Date</label>
                                                    <input type="date" class="form-control pr-input" id="expirationDate" placeholder="Company Size">
                                                </div>
                                                <div class="form-group col-md-6 mb-0 relative">
                                                    <label for="postalCode" class="fs-14-gray">Postal Code</label>
                                                    <input type="number" class="form-control pr-input" id="postalCode" placeholder="0035">
                                                </div>
                                            </div>
                                            <div class="form-group text-center mt-5 mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                    <label class="form-check-label fs-23-gray" for="gridCheck1">
                                                        Remember these details for future use
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn-red fs-23 w-450">Pay Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>