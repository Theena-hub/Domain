

<div class="footer">
    <div class="container-fluid">
        <div class="container">
            <div class="row" id="foot">
                    <div class="col-md-4 col-lg-4 logo">
                        <p>LOGO</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus at nobis consectetur
                            repellat
                            eos ad, exercitationem quo enim quam officia quibusdam laboriosam odio harum quaerat
                            excepturi,
                            commodi repudiandae praesentium dolor.</p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 link">
                        <p>Useful Links</p>
                        <div id="Links">
                            <div>
                                <a href="">Home</a>
                            </div>
                            <div>
                                <a href="">FAQs</a>
                            </div>
                            <div>
                                <a href="">Contact us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2 account">
                        <p>Account</p>
                        <div id="account">
                            <div>
                                <a href="">My account</a>
                            </div>
                            <div>
                                <a href="">Billing</a>
                            </div>
                            <div>
                                <a href="">Get help</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4" id="dd-div">
                        <div onclick="opendrop(this)" class="dropup">
                            <button class="dropbtn">
                                <div id="val1">
                                Country
                                </div>
                                <i class="fa-solid fa-angle-up"></i>
                            </button>
                            <div class="dropup-content">
                                <div class="dd-cont">
                                    <a class="result" onclick="change1(this)">IND_ENG</a>
                                    <a class="result" onclick="change1(this)">USA_ENG</a>
                                    <a class="result" onclick="change1(this)">IND_ENG</a>
                                    <a class="result" onclick="change1(this)">USA_ENG</a>
                                    <a class="result" onclick="change1(this)">IND_ENG</a>
                                </div>
                            </div>
                        </div>
                        <div onclick="opendrop2(this)" class="dropup2">
                            <button class="dropbtn2" value="">
                                <div id="val2">
                                INR
                                </div>
                                <i class="fa-solid fa-angle-up"></i>
                            </button>
                            <div class="dropup-content2">
                                <div class="dd-cont">
                                    <a class="result" onclick="change(this)">USD $</a>
                                    <a class="result" onclick="change(this)">IND $</a>
                                    <a class="result" onclick="change(this)">AUS $</a>
                                    <a class="result" onclick="change(this)">UAE $</a>
                                    <a class="result" onclick="change(this)">NZ $</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <style>
    .footer .container{
        padding:10px;
    }
    @media(min-width:768px){
        .footer .container{
        padding:20px;
    }
    }
    @media(min-width:768px){
        .footer .container{
        padding:40px 20px;
    }
    }
    .logo{
        margin-bottom:20px;
    }
    @media(min-width:992px){
        .logo{
        margin-bottom:40px;
    }
    }
    .account{
        margin-bottom: 46px;
    }
    @media(min-width:768px){
        .account{
        margin-top:20px;
    }
    }
    </style>
    
</div>

