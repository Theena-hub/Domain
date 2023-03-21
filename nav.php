
<?php include ("head.php")?>
<div class="container-fluid" id="navsection" style="">
    <style>
        .nav_container{
            padding-right:0 !important;
            /* margin-right:0 !important; */
        }
    </style>
        <div class="container nav_container">
            <nav class="navbar navbar-expand-lg">
                <div>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <button style="border:none" id="test" class="navbar-toggler tog"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" ></span>
                </button>
                <!-- <div> -->
                    
                <div class="collapse navbar-collapse mob_collapse" id="navbarSupportedContent">
                    <i style="position: absolute;top: 0; right: 0;font-size: 20px;color: white; " class="fa-solid fa-xmark" onclick="close_n()"></i>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQs</a>
                        </li>
                       
                        <li class="nav-item">
                            <!-- <div class="btn" id="sign"> </div> -->
                            <button class="btn_s form-control" id="sign" type="button" style="color: rgba(12, 98, 175, 1);background-color:#fff;padding: 5px 10px;">Sign in</button>
                        </li>
                    </ul>
                </div>

                <!-- mobile view -->
                <style>
                   .mob_view{
                    row-gap: 20px;
                    margin-top: 40px;
                    background: rgba(12, 98, 175, 1);
                    padding: 20px;
                    /* display:none; */
                   }
                   #sign_m{
                    color: rgba(12, 98, 175, 1);
                     background-color: #fff;
  
                     width: 80%;
                   }
                    
                </style>
            <div id="mob_close" style="position:fixed; right:0; top:0;height:100vh; width:100%;background:rgba(0,0,0,.4); z-index:200; display:flex; justify-content:end; opacity:0;transition:.5s;visibility:hidden">
                <div id="mob_close2" style="background:rgba(12, 98, 175, 1); width:300px;transform:translateX(100%); transition:.25s">
                <i style="position: absolute;top: 10px; right: 10px;font-size: 20px; " class="fa-solid fa-xmark" onclick="close_n()"></i>
                <ul class="navbar-nav mob_view">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#section-6">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact </a>
                    </li>
                    <li class="nav-item">
                        <!-- <div class="btn" id="sign"> </div> -->
                        <button class="btn_s form-control" id="sign_m" type="button" style="color: rgba(12, 98, 175, 1);background-color:#fff;padding:10px;font-weight: 600;font-size:16px;">sign out</button>
                    </li>
                 </ul>
               </div>   
                             
            </div>

            </nav>
        </div>
       
    </div>
    <style>
        /* .tog{
            :0;
            position:absolute;
        } */
    </style>