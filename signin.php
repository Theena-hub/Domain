<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
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


<body class="signin">
    <div class="container-fluid" style="padding:20px;background:#03a9f40d;">
        <div class="row" style="height: calc(100vh - 40px);">
            <div class="col-lg-6" id="signinimg">
            </div>
            <div class="col-lg-6" id="">

                <div id="signin-right">
                    <div id="language">
                        <select style="background-color: transparent;"name="language" id="">
                            <option value="">English (USA)</option>
                            <option value="">Tamil</option>
                            <option value="">Hindi</option>
                        </select>
                    </div>
                    <div class="parasec">
                        <p>Sign In</p>
                        <p>Create a account ?<span> Sign up</span></p>
                    </div>
                    <div id="mail">
                        <label for="">Email</label>
                        <input type="text" placeholder="@gmail.com" class="form-control">
                    </div>
                    <div id="pass">
                        <label for="">Password</label>
                        <input type="text" placeholder="Password" class="form-control">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div id="btns">
                        <div id="btn1" class="btn form-control">Create a account</div>
                        <p id="para-or">OR</p>
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