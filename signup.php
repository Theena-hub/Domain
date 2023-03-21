<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- google fonts inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .back_img{
        background-image: url(assets/img/signupimg.png);
        background-repeat: no-repeat;
        height:100%;
        background-position: top;
    background-size: cover;
    }
    .parasec p{
        margin-bottom:0 !important;
    }
</style>

<body class="signup">
    <div class="container-fluid" style="    background: #03a9f40d;">
        <div class="row" style="margin:auto">
            <div class="col-lg-6" style="padding:20px">
                <div class="back_img">
                    <!-- <img id="img-col" class="img-fluid" src="assets/img/signupimg.png" alt=""> -->
                </div>
            </div>
            <div class="col-lg-6" style="padding:20px">
                <div id="language">
                    <select name="language" id="">
                        <option value="">English (USA)</option>
                        <option value="">Tamil</option>
                    </select>
                </div>
                <div class="signup-right">
                    <div class="parasec">
                        <p>Sign Up</p>
                        <p style="margin-bottom:20px">Already have a account ? <span style="color:rgba(12, 98, 175, 1);font-weight: 700;"> Sign in
                            </span></p>
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
                        <div id="btn1" class="btn form-control">Create a account</div>
                        <div id="btn2" class="btn form-control"> <img src="assets/img/google-logo.png" alt="">Sign up
                            with Google
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>