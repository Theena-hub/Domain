
<!DOCTYPE html>
<html lang="en">
<?php include ("head.php")?>
<?php include('nav1.php') ?>
<body class="cart" style="background:#03a9f40d;" >

</div>
    <div class="container" id="section-1">
        <div id="head">
            <p>Your cart <span id="cart-span">( 2 items )</span></p>
            <!-- <div class="btn" id="flag"> -->
                <button type="button" class="btn" id="flag">INR</button>

                
                <!-- <div> -->
                    <!-- <img class="img-fluid" src="assets/img/india.png" alt=""> -->
                </div>
                <div>
                    <!-- <p>IN &#8377;</p> -->
                </div>
            </div>
        </div>
    </div>
    <style>
        #card-head .com{
            color:rgba(12, 98, 175, 1); 
            font-size: 20px ;
            font-weight: 600 ;
        }
        @media(min-width:992px){
            #card-head .com{
            color:rgba(12, 98, 175, 1); 
            font-size: 24px ;
            font-weight: 700 ;
        }  
        }
        #card-one img{
            width:20px;
        }
        @media(min-width:992px){
            #card-one img{
            width:30px;
        }
        }
        #card-two img{
            width:20px;
        }
        @media(min-width:992px){
            #card-two img{
            width:30px;
        }
        }
        #section-2{
            padding:10px;
            margin-bottom:20px;

        }
    </style>
    <div class="container" id="section-2">
        <div class="row">
            <div class="col-lg-6">
                <div class="card" id="card-one">
                    <div id="card-contents">
                        <div id="card-head">
                            <p>srii<span  style=""class="com">.in
                    </span></p>
                            <!-- <i class="fa-sharp fa-solid fa-trash"></i> -->
                            <img class="img-fluid" src="assets/img/trash.png" alt="">
                        </div>
                        <div id="regrow">
                            <p>Registration</p>
                            <div class="btn" id="regright">
                                <select name="" id="">
                                    <option value="1year">1 year</option>
                                    <option value="2year">2 year</option>
                                    <option value="3year">3 year</option>
                                </select>
                            </div>
                        </div>
                        <div id="pricerow">
                            <p>Price</p>
                            <div id="priceright">
                                <p id="p1">&#8377; 200000.00<s>6,000.00</s></p>
                                <p id="p2">for the first year</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="card-two">
                    <div id="card-contents">
                        <div id="card-head">
                            <p>srii<span  style=""class="com">.in</span></p>
                            <!-- <i class="fa-sharp fa-solid fa-trash"></i> -->
                            <img class="img-fluid" src="assets/img/trash.png" alt="">
                        </div>
                        <div id="regrow">
                            <p>Registration</p>
                            <div class="btn" id="regright">
                                <select name="" id="">
                                    <option value="1year">1 year</option>
                                    <option value="2year">2 year</option>
                                    <option value="3year">3 year</option>
                                </select>
                            </div>
                        </div>
                        <div id="pricerow">
                            <p>Price</p>
                            <div id="priceright">
                                <p id="p1">&#8377; 199.00<s>6,000.00</s></p>
                                <p id="p2">for the first year</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card" id="card-three">
                    <div id="card-contents">
                        <div id="card-head3">
                            <p>Total cost:</p>
                            <p>&#8377; 199.00</p>
                        </div>
                        <div id="gst">
                            <p>GST Tax</p>
                            <p>&#8377;199.00</p>
                        </div>
                        <div id="row-2">
                            <label id="cb1">
                                <input type="checkbox" name="checkbox" value="com" checked />
                                <span>Protect personal information with Domain Privacy Protection. 
                                </span>
                            </label>
                            <p> 299.00/yr.</p>
                        </div>
                        <div id="row-3">
                            <label class="toggle">
                                <input class="toggle-checkbox" type="checkbox">
                                <div class="toggle-switch"></div>
                                <span class="toggle-label">Auto-renew</span>
                                <p>This domain will be auto-renewed around <span id="date-span">August 29 </span>every
                                    year.
                                    You will automatically be billed when the renewal occurs</p>
                            </label>
                        </div>
                        <div id="btn1" class="btn form-control">
                             <a style="color: white;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;"href="checkout.php">Check out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <?php include('footer.php') ?>
    <?php include ("script.php")?>
    <script src="assets/js/domain.js"></script>
</body>
</html>