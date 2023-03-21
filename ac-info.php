
<!DOCTYPE html>
<html lang="en">
<?php include ("head.php")?>
<?php include("nav1.php")?> 
<body class="ac-info">  
    <div class="container-fluid" style="background:#03a9f40d;">
        <div class="row">
            <div class="col-lg-2 col-xl-2" style="background:#03a9f40d;">
                <div class="nav nav-pills me-3" style="border-bottom: 1px solid #afafad;    padding: 10px;" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <hr>
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">
                    
                        <div class="user">
                            <i id="usericon" class="fa-solid fa-user"></i>
                            <label for="">Account Info</label>
                        </div>
                       
                    </button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">
                        
                        <div class="bill">
                            <i id="cardicon" class="fa-solid fa-credit-card"></i>
                            <label>Billing</label>
                        </div>
                        
                    </button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false">
                     
                        <div class="help">
                            <div id="qmark">?</div>
                            <label for="">Help</label>
                        </div>
                       
                    </button>
                </div>
            </div>
            <style>
                .para2{
                    font-size: 14px;
                    font-weight: 300;
                    color: rgba(94, 94, 94, 1);
                }
            </style>
            <div class="col-lg-10 col-xl-10" id="center-column" style="background:#03a9f40d">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="personal-info">
                            <div id="main">
                                <div id="pi">
                                    <p id="pi-para1">Personal information</p>
                                    <p class="para2">This information provided below will reflect on your invoices</p>
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button id="accord-btn" class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                    <div class="accord">
                                                        <div class="lt">Name</div>
                                                        <div class="rt">Krishna Krishna</div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingOne"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div>
                                                                <label for="">First Name</label>
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div>
                                                                <label for="">Last Name</label>
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div id="can-con">
                                                            <div id="can-con-inner">
                                                                <div>
                                                                    <a href="">Cancel</a>
                                                                </div>
                                                                <div>
                                                                    <a id="confirm" href="">Confirm</a>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button  class="accordion-button collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                        aria-controls="flush-collapseTwo">
                                                        <div class="accord">
                                                            <div class="lt">Address</div>
                                                            <div class="rt">No : 1 sarathi nagar 1st cross street,
                                                                chennai,
                                                                India</div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingTwo"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="col-12">
                                                            <label for="">Country</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="">Address</label>
                                                            <textarea name="address" id="" cols="20" rows="5"
                                                                class="form-control"></textarea>
                                                        </div>
                                                        <div id="ci-pi" class="row">
                                                            <div class="col-6">
                                                                <label for="City">City</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="Pin">Pin</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div id="can-con">
                                                            <div id="can-con-inner">
                                                                <div>
                                                                    <a href="">Cancel</a>
                                                                </div>
                                                                <div>
                                                                    <a id="confirm" href="">Confirm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingThree">
                                                        <button  class="accordion-button collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                            aria-controls="flush-collapseThree">
                                                            <div class="accord">
                                                                <div class="lt">Phone Number</div>
                                                                <div class="rt">+91 9003214657</div>
                                                            </div>
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingThree"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body " id="body">
                                                            <div class="row">
                                                                <div class="col-3 col-md-2">
                                                                    <label for="">Phone</label>
                                                                    <input type="text" value="+91"
                                                                        style="text-align: center;"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="col-9 col-md-10">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div id="can-con">
                                                                <div id="can-con-inner">
                                                                    <div>
                                                                        <a href="">Cancel</a>
                                                                    </div>
                                                                    <div>
                                                                        <a id="confirm" href="">Confirm</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingfour">
                                                        <button  class="accordion-button collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapsefour" aria-expanded="false"
                                                            aria-controls="flush-collapsefour">
                                                            <div class="accord">
                                                                <div class="lt">Company</div>
                                                                <div class="rt">-</div>
                                                            </div>
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapsefour" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingfour"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="col-lg-12">
                                                                <div>
                                                                    <label for="">Company</label>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="row" id="gstinp">
                                                                <div class="col-lg-6">
                                                                    <div>
                                                                        <label for="">GST</label>
                                                                    </div>
                                                                    <input type="text"
                                                                        placeholder="GST code must start with IN"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label for="">
                                                                        CIN (Corporate Indication Number) of Two
                                                                        Digits
                                                                    </label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div id="can-con">
                                                                <div id="can-con-inner">
                                                                    <div>
                                                                        <a href="">Cancel</a>
                                                                    </div>
                                                                    <div>
                                                                        <a id="confirm" href="">Confirm</a>
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

                                <div id="ai">
                                    <p id="ai-para1">Account information</p>
                                    <div class="accordion accordion-flush" id="accordionFlushExample1">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingfive">
                                                <button onclick="accordopen()" id="accord-btn" class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapsefive"
                                                    aria-expanded="false" aria-controls="flush-collapsefive">
                                                    <div class="accord">
                                                        <div class="lt">Email</div>
                                                        <div class="rt">@gmail.com</div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingfive"
                                                data-bs-parent="#accordionFlushExample1">
                                                <div class="accordion-body">
                                                    <div class="col-12">
                                                        <p>Create New Email Password</p>
                                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Officiis, qui
                                                            eius placeat pariatur provident aliquid labore
                                                            voluptates at, eos quam
                                                            ratione quidem! Aperiam voluptate, unde fugit dolor
                                                            impedit est esse?
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" placeholder="New email">
                                                    </div>
                                                    <div id="can-con">
                                                        <div id="can-con-inner">
                                                            <div>
                                                                <a href="">Cancel</a>
                                                            </div>
                                                            <div>
                                                                <a id="confirm" href="">Confirm</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingsix">
                                                    <button id="accord-btn" class="accordion-button collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapsesix" aria-expanded="false"
                                                        aria-controls="flush-collapseTwo">
                                                        <div class="accord">
                                                            <div class="lt">Change Password</div>
                                                            <div class="rt">***********</div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapsesix" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingsix"
                                                    data-bs-parent="#accordionFlushExample1">
                                                    <div class="accordion-body">
                                                        <div class="col-12">
                                                            <p>Change Password</p>
                                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                elit. Officiis, qui
                                                                eius placeat pariatur provident aliquid labore
                                                                voluptates at, eos quam
                                                                ratione quidem! Aperiam voluptate, unde fugit dolor
                                                                impedit est esse?
                                                            </p>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="">Change Password</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="">New Password</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="">New Password</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div id="can-con">
                                                            <div id="can-con-inner">
                                                                <div>
                                                                    <a href="">Cancel</a>
                                                                </div>
                                                                <div>
                                                                    <a id="confirm" href="">Confirm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                                <div id="si">
                                    <p id="si-para1">Social Login</p>
                                    <div id="si-btn" style="background-color:rgba(255, 255, 255, 1);padding: 10px;">
                                        <div id="google">
                                            <div id="gimg">
                                                <img class="img-fluid" src="assets/img/google-logo.png" alt="">
                                            </div>
                                            <div>
                                                <p>Google</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="">

                                                <input type="button" value="Unlink">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="da">
                                    <p id="da-para1">Delete account</p>
                                    <!-- <div id="da-div" style="align-items: center;
                                        padding: 10px;
                                    
                                        display: flex;
                                        background:rgba(255, 255, 255, 1)">
                                          </div> -->
                                          <div class="" style="background:white;padding:20px; display: flex;justify-content: space-between;flex-wrap: wrap;
    margin-bottom: 30px;">
                                                <div>
                                                    <p id="da-para2" style="margin:0">Delete account</p>
                                                </div>
                                                <div id="dlt-btn">
                                                    <input  style="margin:0" type="button" value="Delete Account">
                                                </div>
                                                <div class="">

                                                    <p id="da-para3" style="padding-top: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing
                                                        elit. Ea aperiam
                                                        cupiditate
                                                        ex illo esse. Non dolores recusandae, praesentium sed nihil ab eum
                                                        facere tenetur
                                                        obcaecati
                                                        magnam nulla veritatis blanditiis voluptatem.
                                                    </p>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        #da-para3{
                            padding-top:20px;
                            font-size: 14px;

                            font-weight: 400;
                            color: rgba(94, 94, 94, 1); 
                        }
                    </style>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <div id="right">
                            <div id="top">
                                <div>
                                    <p>Billing & Invoice</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Curabitur ullamcorper quisque vestibulum vitae. </p>
                                </div>
                                <div id="searchbox">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <div>
                                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <nav>
                                    <div class="nav nav-tabs" id="bill-tab" role="tablist">
                                        <button style="background-color: transparent !important;" class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#all-invoices" type="button" role="tab"
                                            aria-controls="nav-home" aria-selected="true">All invoices</button>
                                        <button style="background-color: transparent !important;" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#paid-invoices" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Paid invoices</button>
                                        <button style="background-color: transparent !important;" class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#unpaid-invoices" type="button" role="tab"
                                            aria-controls="nav-contact" aria-selected="false">Unpaid
                                            invoices</button>
                                    </div>
                                </nav>
                                <div class="tab-content" style="margin-bottom: 30px;" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="all-invoices" role="tabpanel"
                                        aria-labelledby="nav-home-tab" tabindex="0">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead id="head1">
                                                    <tr>
                                                        <th scope="col">Domain</th>
                                                        <th scope="col">Invoice ID</th>
                                                        <th scope="col">Expired on</th>
                                                        <th scope="col">Invoice amount</th>
                                                        <th scope="col">Status</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <style>
                                                        .unpaidbtn{
                                                            color: rgba(224, 64, 72, 1);
                                                            background-color: rgba(224, 64, 72, 0.15);
                                                            border-radius: 15px;
                                                            font-size: 14px;
                                                            font-weight: 500;
                                                            padding: 3px;
                                                            height: 30px;
                                                            width: 90px;
                                                            border:none;
                                                        }
                                                        .paybtn{
                                                            display: flex;
                                                            /* padding: 4px; */
                                                            line-height: 20px;
                                                            justify-content: center;
                                                            align-items: center;
                                                            height: 30px;
                                                            color: #fff;
                                                            background-color: rgba(12, 98, 175, 1);
                                                            font-size: 14px;
                                                            font-weight: 500;
                                                            width: 90px;
                                                            border: none;
                                                            border-radius: 4px;
                                                        }
                                                        .view{
                                                            
                                                        }
                                                    </style>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            
                                                            <div class="ac-info">
                                                            <button type="button" class="paybtn">pay</button>
                                                            </div>
                                                        </td>
                                                        <td id="vi-div">
                                                        <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                           
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            
                                                            <div class="ac-info">
                                                            <button type="button" class="paybtn">pay</button>
                                                            </div>
                                                        </td>
                                                        <td id="vi-div">
                                                            <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            <!-- <div id="unpaid" class="btn">Unpaid</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- <div id="pay" class="btn">Pay</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="paybtn">pay</button>
                                                            </div>
                                                        </td>
                                                        <td id="vi-div">
                                                            <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                                <button type="button" class="view">View Info</button></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            <!-- <div id="unpaid" class="btn">Unpaid</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- <div id="pay" class="btn">Pay</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="paybtn">pay</button>
                                                            </div>
                                                        </td>
                                                        <td id="vi-div">
                                                            <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            <!-- <div id="unpaid" class="btn">Unpaid</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- <div id="pay" class="btn">Pay</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="paybtn">pay</button>
                                                            </div>
                                                        </td>
                                                        <td id="vi-div">
                                                            <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <style>
                                            .view {
                                                border: none;
                                                background-color: #fff;
                                             
                                            }
                                            .view_b{
                                                border:none!important;
                                                background-color: #fff;
                                                /* box-shadow: rgba(86, 86, 86, 0.38) 0px 0px 10px 0px; */
                                            }
                                            .view_b .view{
                                                align-items: center;
                                                border: 1px solid grey;
                                                padding:12px;
                                                width:90px;
                                                height: 30px;
                                                color: rgba(12, 98, 175, 1);
                                                border-radius: 6px;
                                                display: flex;
                                                
                                                    font-size: 14px;
                                                    font-weight: 500;
                                            }
                                        </style>
                                        <div class="table-1">
                                            <div class="card alt-table">
                                                <div class="alt-table-left">
                                                    <p id="text_p">Srii krishna...com</p>
                                                    <p>#804820</p>
                                                    <p>05/05/2022</p>
                                                   
                                                    <div class="ac-info">
                                                        <button type="button" class="unpaidbtn">unpaid</button>
                                                        </div>
                                                </div>
                                                <div class="alt-table-right">
                                                    <p>199.00</p>
                                                    <!-- <div class="btn paid">pay</div> -->
                                                    <div class="btn view_b">
                                                    <button type="button" class="view">View Info</button></div>
                                                    <td id="vi-div">
                                                        
                                                        <div class="ac-info">
                                                                <button type="button" class="paybtn">pay</button>
                                                                </div>
                                                        </td>
                                                </div>

                                            </div>
                                            <div class="card alt-table">
                                                <div class="alt-table-left">
                                                    <p id="text_p">Srii krishna...com</p>
                                                    <p>#804820</p>
                                                    <p>05/05/2022</p>
                                                    <!-- <div class="btn unpaid">Unpaid</div> -->
                                                    <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                </div>
                                                <div class="alt-table-right">
                                                    <p>199.00</p>
                                                    <!-- <div class="btn paid">pay</div> -->
                                                    <div class="btn view_b">
                                                    <button type="button" class="view">View Info</button></div>
                                                    <td id="vi-div">
                                                        
                                                        <div class="ac-info">
                                                                <button type="button" class="paybtn">pay</button>
                                                                </div>
                                                        </td>
                                                </div>
                                            </div>
                                            <div class="card alt-table">
                                                <div class="alt-table-left">
                                                    <p id="text_p">Srii krishna...com</p>
                                                    <p>#804820</p>
                                                    <p>05/05/2022</p>
                                                    <!-- <div class="btn unpaid">Unpaid</div> -->
                                                    <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                </div>
                                                <div class="alt-table-right">
                                                    <p>199.00</p>
                                                    <!-- <div class="btn paid">pay</div> -->
                                                    <div class="btn view_b">
                                                        <button type="button" class="view">View Info</button></div>
                                                        <td id="vi-div">
                                                                <div class="ac-info">
                                                                        <button type="button" class="paybtn">pay</button>
                                                                        </div>
                                                           
                                                        </td>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="paid-invoices" role="tabpanel"
                                        aria-labelledby="nav-profile-tab" tabindex="0">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead id="head2">
                                                    <tr>
                                                        <th scope="col">Domain</th>
                                                        <th scope="col">Invoice ID</th>
                                                        <th scope="col">Expired on</th>
                                                        <th scope="col">Invoice amount</th>
                                                        <th scope="col">Status</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            <!-- <div id="unpaid" class="btn">Unpaid</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- <div id="pay" class="btn">Pay</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="paybtn">pay</button>
                                                            </div>
                                                        </td>
                                                        <td id="vi-div">
                                                            <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            <!-- <div id="unpaid" class="btn">Unpaid</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- <div id="pay" class="btn">Pay</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="paybtn">pay</button>
                                                            </div>
                                                        </td>
                                                        <td id="vi-div">
                                                            <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            <!-- <div id="unpaid" class="btn">Unpaid</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- <div id="pay" class="btn">Pay</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="paybtn">pay</button>
                                                            </div>
                                                        </td>
                                                        <td id="vi-div">
                                                            <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            <!-- <div id="unpaid" class="btn">Unpaid</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- <div id="pay" class="btn">Pay</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="paybtn">pay</button>
                                                            </div>
                                                        </td>
                                                        <td id="vi-div">
                                                            <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-1">
                                            <div class="card alt-table">
                                                <div class="alt-table-left">
                                                    <p id="text_p">Sri.com</p>
                                                    <p>#804820</p>
                                                    <p>05/05/2022</p>
                                                    
                                                    <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                </div>
                                                <div class="alt-table-right">
                                                    <p>199.00</p>
                                                    
                                                     <div class="btn view_b">
                                                     <button type="button" class="view">View Info</button></div>
                                                    
                                                    <td id="vi-div">
                                                        <div class="ac-info">
                                                            <button type="button" class="paybtn">pay</button>
                                                        </div>
                                                    </td>
                                                </div>
                                            </div>
                                            <div class="card alt-table">
                                                <div class="alt-table-left">
                                                    <p id="text_p">Srii krishna...com</p>
                                                    <p>#804820</p>
                                                    <p>05/05/2022</p>
                                                  
                                                    <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                </div>
                                                <div class="alt-table-right">
                                                    <p>199.00</p>
                                                    <div class="btn view_b">
                                                    <button type="button" class="view">View Info</button></div>
                                                    <!-- <div class="btn paid">pay</div> -->
                                                    <td id="vi-div">
                                                                <div class="ac-info">
                                                                        <button type="button" class="paybtn">pay</button>
                                                                        </div>
                                                            
                                                        </td>
                                                </div>
                                            </div>
                                            <div class="card alt-table">
                                                <div class="alt-table-left">
                                                    <p id="text_p">Srii krishna...com</p>
                                                    <p>#804820</p>
                                                    <p>05/05/2022</p>
                                                    <!-- <div class="btn unpaid">Unpaid</div> -->
                                                    <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                </div>
                                                <div class="alt-table-right">
                                                    <p>199.00</p>
                                                    <div class="btn view_b">
                                                    <button type="button" class="view">View Info</button></div>
                                                    <!-- <div class="btn paid">pay</div> -->
                                                    <td id="vi-div">
                                                                <div class="ac-info">
                                                                    <button type="button" class="paybtn">pay</button>
                                                                </div>
                                                            
                                                    </td>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="unpaid-invoices" role="tabpanel"
                                        aria-labelledby="nav-contact-tab" tabindex="0">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead id="head3">
                                                    <tr>
                                                        <th scope="col">Domain</th>
                                                        <th scope="col">Invoice ID</th>
                                                        <th scope="col">Expired on</th>
                                                        <th scope="col">Invoice amount</th>
                                                        <th scope="col">Status</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- <div id="pay" class="btn">Pay</div> -->
                                                            
                                                        <div class="ac-info">
                                                        <button type="button" class="paybtn">pay</button>
                                                        </div>
                                                        </td>
                                                        <td id="vi-div">
                                                        <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            <!-- <div id="unpaid" class="btn">Unpaid</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        
                                                    <div class="ac-info">
                                                    <button type="button" class="paybtn">pay</button>
                                                    </div>
                                                        </td>
                                                        <td id="vi-div">
                                                        <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                          
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            <!-- <div id="unpaid" class="btn">Unpaid</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                       
                                                    <div class="ac-info">
                                                    <button type="button" class="paybtn">pay</button>
                                                    </div>
                                                            <!-- <div id="pay" class="btn">Pay</div> -->
                                                        </td>
                                                        <td id="vi-div">
                                                        <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                          
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Srii krishna...com</th>
                                                        <td>#804820</td>
                                                        <td>05/05/2022</td>
                                                        <td>&#8377; 199.00</td>
                                                        <td>
                                                            <!-- <div id="unpaid" class="btn">Unpaid</div> -->
                                                            <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                    
                                                    <div class="ac-info">
                                                        <button type="button" class="paybtn">pay</button>
                                                        </div>
                                                            </td>
                                                            <td id="vi-div">
                                                            <i onclick="open_nav(this)" class="fa-solid fa-ellipsis"></i>
                                                            <div class="btn view_show">
                                                            <button type="button" class="view">View Info</button></div>
                                                           
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-1">
                                            <div class="card alt-table">
                                                <div class="alt-table-left">
                                                    <p id="text_p">Srii krishna...com</p>
                                                    <p>#804820</p>
                                                    <p>05/05/2022</p>
                                                    <!-- <div class="btn unpaid">Unpaid</div> -->
                                                    <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                </div>
                                                <div class="alt-table-right">
                                                    <p>199.00</p>
                                                    <div class="btn view_b">
                                                    <button type="button" class="view">View Info</button></div>
                                                    <td id="vi-div">
                                                     
                                                        <div class="ac-info">
                                                               <button type="button" class="paybtn">pay</button>
                                                               </div>
                                                    </td>
                                                </div>
                                            </div>
                                            <div class="card alt-table">
                                                <div class="alt-table-left">
                                                    <p id="text_p">Srii krishna...com</p>
                                                    <p>#804820</p>
                                                    <p>05/05/2022</p>
                                                    <!-- <div class="btn unpaid">Unpaid</div> -->
                                                    <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                </div>
                                                <div class="alt-table-right">
                                                    <p>199.00</p>
                                                    <!-- <div class="btn paid">pay</div> -->
                                                    <div class="btn view_b">
                                                    <button type="button" class="view">View Info</button></div>
                                                    <td id="vi-div">
                                                                <div class="ac-info">
                                                                        <button type="button" class="paybtn">pay</button>
                                                                        </div>
                                                          
                                                        </td>
                                                </div>
                                            </div>
                                            <div class="card alt-table">
                                                <div class="alt-table-left">
                                                    <p id="text_p">Srii krishna...com</p>
                                                    <p >#804820</p>
                                                    <p>05/05/2022</p>
                                                    <!-- <div class="btn unpaid">Unpaid</div> -->
                                                    <div class="ac-info">
                                                            <button type="button" class="unpaidbtn">unpaid</button>
                                                            </div>
                                                </div>
                                                <div class="alt-table-right">
                                                    <p>199.00</p>
                                                    <div class="btn view_b">
                                                    <button type="button" class="view">View Info</button></div>
                                                    <!-- <div class="btn paid">pay</div> -->
                                                    <!-- <div class="btn v-info">view info</div>-->
                                                    <td id="vi-div"> 
                                                       
                                                        <div class="ac-info">
                                                                <button type="button" class="paybtn">pay</button>
                                                                </div>
                                                        </td>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, vero obcaecati. Tenetur
                            soluta dicta itaque quaerat quam possimus dignissimos perferendis natus voluptates
                            nobis!
                            Expedita deleniti odio, ea omnis laborum quae
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
    <?php include ("script.php")?>
    <script src="assets/js/domain.js"></script>
<script>

    $(".view_show").css("display", "none");
function open_nav(ele) {
    console.log("open");
    var t = ele.parentElement.getElementsByClassName("view_show")[0];
    if (t.style.display == "none") {
        t.style.display = "block ";
    }
    /********/
} 

document.addEventListener('mouseup', function (e) {
        // var t =document.getElementsByClassName("view_show");
        
            // t.style.display = 'none';
            $(".view_show").css("display","none");
      
    });
</script>
</body>
</html>