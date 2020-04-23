<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="images/LogoWeb.png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kopicup &mdash; Authentic Coffee Bean</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/form-img.png" alt="">
                    <div class="signup-img-content">
                        <h2>BUY NOW! </h2>
                        <p>While beans are still available !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form action="proses-tambah.php" method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name" >
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name" >
                                </div>
                                <div class="form-input">
                                    <label for="company">Company (optional)</label>
                                    <input type="text" name="company" id="company" >
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" >
                                </div>
                                <div class="form-input">
                                    <label for="phone" class="required">Phone number</label>
                                    <input type="text" name="phone" id="phone" >
                                </div>
                                <div class="form-input">
                                    <label for="code">Coupon Code</label>
                                    <input type="text" name="code" id="code" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="size">Product</label>
                                    </div>
                                    <div class="form-radio-group">
                                      <div class="form-radio-item">
                                          <input type="radio" name="varian" value="Kopicup Espresso" id="cash1">
                                          <label for="cash1">Kopicup Espresso</label>
                                          <span class="check"></span>
                                      </div>
                                      <div class="form-radio-item">
                                          <input type="radio" name="varian" value="Kopicup Organic" id="cheque1">
                                          <label for="cheque1">Kopicup Organic</label>
                                          <span class="check"></span>
                                      </div>
                                      <div class="form-radio-item">
                                          <input type="radio" name="varian" value="Kopicup Dark Roast" id="demand1">
                                          <label for="demand1">Kopicup Dark Roast</label>
                                          <span class="check"></span>
                                      </div>
                                      </div>
                                      <div class="form-radio-group">
                                      <div class="form-radio-item">
                                          <input type="radio" name="varian" value="Kopicup Luwak" id="cash2">
                                          <label for="cash2">Kopicup Luwak</label>
                                          <span class="check"></span>
                                      </div>
                                      <div class="form-radio-item">
                                          <input type="radio" name="varian" value="Kopicup Hazelnut" id="cheque2">
                                          <label for="cheque2">Kopicup Hazelnut</label>
                                          <span class="check"></span>
                                      </div>
                                      <div class="form-radio-item">
                                          <input type="radio" name="varian" value="Kopicup Black Forest" id="demand2">
                                          <label for="demand2">Kopicup Black Forest</label>
                                          <span class="check"></span>
                                      </div>
                                    </div>
                                </div>

                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="size">Product Size</label>
                                    </div>
                                    <div class="form-radio-group">
                                      <div class="form-radio-item">
                                          <input type="radio" name="size" value="460" id="cash">
                                          <label for="cash">460 Gram</label>
                                          <span class="check"></span>
                                      </div>
                                      <div class="form-radio-item">
                                          <input type="radio" name="size" value="750" id="cheque">
                                          <label for="cheque">750 Gram</label>
                                          <span class="check"></span>
                                      </div>
                                      <div class="form-radio-item">
                                          <input type="radio" name="size" value="1300" id="demand">
                                          <label for="demand">1300 Gram</label>
                                          <span class="check"></span>
                                      </div>
                                    </div>
                                </div>

                                <div class="form-input">
                                    <label for="bank_name">Bank Name</label>
                                    <input type="text" name="bank_name" id="bank_name" >
                                </div>
                                <div class="form-input">
                                    <label for="card_number">Card Number</label>
                                    <input type="text" name="card_number" id="card_number" >
                                </div>
                                <div class="form-input">
                                    <label for="region">Region/Country</label>
                                    <input type="text" name="region" id="region" >
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" class="submit" id="submit" name="simpan" >
                            <input type="submit" value="Reset" class="submit" id="submit" name="reset" >
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
