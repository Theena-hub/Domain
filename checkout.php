<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>
<?php include("nav1.php")?>
<body>
    <style>
        .sec_head h3{
                margin-bottom:30px; 
                font-weight: 600;
                font-size: 20px;
                line-height: 25px;    
        }
        @media(min-width:992px){
        .check_sec2{
            margin-top:100px;
        }
         }
        @media(max-width:991px){
        .check_sec2{
            /* margin-bottom:30px; */
            padding:40px;
        }
         }
    </style>
<div class="container-fluid">
    <div class="row">
        <!-- <div class="check_sec1 col-md-6">
          <div class="">
            <h6>check out</h6>
            <form>
                <div class="row">

                    <div class="col-md-6">
                        <label for="">First Name</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class=" col-md-6">
                         <label for="">Last Name</label>
                         <input class="form-control" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Country</label>
                        <input class="form-control" type="text">
                     </div>                    
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Country</label>
                        <input class="form-control" type="text">
                     </div>                    
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <label for="">City</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class=" col-md-6">
                        <label for="">Pin</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="row">
                     <div class="col-2">
                        <label for="">Phone</label>
                        <input class="form-control" value="+91" type="text">
                     </div>
                     <div class="col-lg-10 col-10">
                        <label for=""></label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Email</label>
                        <input class="form-control" type="mail">
                     </div>                    
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <label for="">New Password</label>
                        <input class="form-control" type="password">
                    </div>
                    <div class=" col-md-6">
                         <label for="">create password</label>
                         <input class="form-control" type="password">
                    </div>
                </div>
        
            </form>
          </div>  
        
        </div> -->
        <div class="col-lg-6 signup" style="padding:40px">
                    <div class="sec_head">
                        <h3>Check out info</h3>
                    </div>
                    <div id="inputs">
                        <div class="row" id="row1">
                            <div class="col-lg-6">
                                <label for="">First Name</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Last Name</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row" id="row2">
                            <div class="col-lg-12">
                                <label for="">Country</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row" id="row3">
                            <div class="col-lg-12">
                                <label for="">Address</label>
                                <textarea name="" id="" class="form-control" cols="20" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row" id="row4">
                            <div class="col-lg-6">
                                <label for="">City</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Pin</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row" id="row5">
                            <div class=" col-3">
                                <label for="">Phone</label>

                                <select class="form-control" id = "myList" value="+91" onchange = "favTutorial()" >
                                    <option> +91</option>
                                    <option> +91 </option>
                                    <option> +891</option>
                                    <option> +1 </option>
                                    <option> +431</option>
                                </select>
                                
                            </div>
                         
                            <div class="col-lg-9 col-9">
                                <label for=""></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row" id="row6">
                            <div class="col-lg-12">
                                <label for="">Email</label>
                                <input class="form-control" type="text" placeholder="@email.com">
                            </div>
                        </div>
                        <div class="row" id="row7">
                            <div class="col-lg-6">
                                <label for="">New password</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Confirm password</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div id="cb">
                            <label id="cb1">
                            <input type="checkbox" name="checkbox" value="com" checked />
                            <span>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat fugiat minima quasi
                                    optio,
                                    quod commodi consequatur soluta reiciendis molestiae</p>
                            </span>
                             </label>
                        </div>
                        <div id="btns">
                            <div id="btn1" class="btn form-control">Save & countinue</div>
                        </div>
                    </div>
        </div>         
        <div class="check_sec2  cart col-lg-6">
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
                                    <p id="p1">&#8377; 199.00<s>6,000.00</s></p>
                                    <p id="p2">for the first year</p>
                                </div>
                            </div>
                        </div>
                    </div>    
            
            <!-- </div> -->
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
                                <span>Protect personal information with Domain Privacy Protection. Only ₹299.00/yr.
                                </span>
                            </label>
                            <p> 299.00/yr.</p>
                        </div>
                        <div id="row-3">
                            <label class="toggle">
                                <input class="toggle-checkbox" type="checkbox">
                                <div class="toggle-switch"></div>
                                <span class="toggle-label">Auto-renew</span>
                            </label>
                            <p>This domain will be auto-renewed around <span id="date-span">August 29 </span>every
                                year.
                                You will automatically be billed when the renewal occurs</p>
                        </div>
                        
                    </div>
                </div>
            

          
        </div> 

    </div>
</div>    



<?php include("footer.php") ?>
<?php include ("script.php")?>
<script>
function favTutorial() {
var mylist = document.getElementById("myList");
document.getElementById("favourite").value = mylist.options[mylist.selectedIndex].text;
}
</script>

</body>
</html>
