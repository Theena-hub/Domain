<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>
<?php include("nav1.php")?>
<body class="filter" style="background:#03a9f40d;">
<style>
        .cartbtn{
    background-color: rgba(12, 98, 175, 1);
    color: #ffff;
    font-size: 14px;
    font-weight: 500;
    border:none;
    padding: 8px;
    border-radius: 4px;
        }
    </style>
    <style>
                    .pillbtn{
                        border: none;
                        background: transparent;
                        color: white;
                        font-size: 16px;
                    }
                    /*  */
                    .des_com{
                        width:50px;
                        height:30px;
                        background-color:red;
                    }  
                .tester{
                    display:flex;
                    column-gap:10px;
                    row-gap:10px;
                    flex-wrap: wrap;
                }
                @media(min-width:576px){
                    .tester {
                    display: flex;
                    column-gap: 10px;
                    row-gap: 10px;
                    flex-wrap: wrap;
                }
                }
                .cb1{
                    display:flex;
                    flex-direction:column;

                }
                    </style>
 
    <div class="container-fluid" id="section-1" style="padding:0px">
        <div class="container">
            <div id="normal-view">
                <div id="filter">
                    <input type="search" value="" class="form-control" placeholder="Type in your favourite domain....">
                    <input type="button" value="Search" class="form-control">
                    <i id="search" class="fa-solid fa-magnifying-glass"></i>
                    <div id="sec1right">
                        <i id="slider" class="fa-solid fa-sliders slider" onclick="open_pop()"></i>
                    </div>
                </div>
                <div class="tester">
                    <div id="pill1">                      
                        <button type="button" class="pillbtn">.com only</button>  
                        <a id="close" onclick="closed(this)"><i class="fa-sharp fa-solid fa-xmark"></i> </a>
                    </div>
                </div>
            </div>
            <!-- mobile-view -->
            <div id="mobile-view">
                <div id="filter1">
                    <input type="search" value="" class="form-control" placeholder="Type in your favourite domain....">
                    <input type="button" value="Search" class="form-control">
                </div>
                <div id="filter2">
                    <div id="sec1right">
                        <i id="slider" class="fa-solid fa-sliders slider" onclick="open_pop()"></i>
                    </div>
                </div>
                <div class="tester">
                    <div id="pill1">                      
                        <button type="button" class="pillbtn">.com only</button>  
                        <a id="close" onclick="closed(this)"><i class="fa-sharp fa-solid fa-xmark"></i> </a>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- filter -->
<form>        
        <div class="col-md-3" id="filterdiv">
            <div class="filter-main">
                <div id="filter_inner">
                    <div id="filter_inner_set">
                        <p>Filter</p>
                        <div id="searchcontent">
                            <input type="search" value="" class="form-control" placeholder="Search">
                            <i id="search" class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                    <div class="card" id="filtercard">
                        <div id="cb">
                            <label class="cb1">
                                <input type="checkbox" name="checkbox" value=".com">
                                <span>.com</span>
                            </label>
                            <label class="cb1">
                                <input type="checkbox" name="checkbox" value=".in">
                                <span>.in</span>
                            </label>
                            <label class="cb1">
                                <input type="checkbox" name="checkbox" value=".co">
                                <span>.co</span>
                            </label>
                            <label class="cb1">
                                <input type="checkbox" name="checkbox" value=".sa">
                                <span>.sa</span>
                            </label>
                            <label class="cb1">
                                <input type="checkbox" name="checkbox" value=".info">
                                <span>.info</span>
                            </label>
                            <label class="cb1">
                                <input type="checkbox" name="checkbox" value=".co.in">
                                <span>.co.in</span>
                            </label>
                            <label class="cb1">
                                <input type="checkbox" name="checkbox" value=".ac">
                                <span>.ac</span>
                            </label>
                            <label class="cb1">
                                <input type="checkbox" name="checkbox" value=".ac.in">
                                <span>.ac.in</span>
                            </label>
                            <label class="cb1">
                                <input type="checkbox" name="checkbox" value=".ma">
                                <span>.ma</span>
                            </label>
                            <label class="cb1">
                                <input type="checkbox" name="checkbox" value="">
                                <span>.com</span>
                            </label>

                        </div>
                    </div>
                </div>
                <div id="price">
                    <p>Price</p>
                    <div id="range">
                        <input type="range" name="price" min="0" max="5000" step="1" oninput="showVal(this.value)">
                        <!-- <input type="button" value="" id ="valBox"> -->
                          <div class="">

                              <span style="background: rgba(12, 98, 175, 1);padding: 10px 28px;color:#fff;border-radius: 5px;" id="valBox">1000</span>
                          </div>

                    </div>
                    <div id="footer">
                        <input style="border:none"type="reset" value="Reset">
                        <div id="feet">
                            <input style="border:none;" type="button" value="Cancel" id="cancel">
                            <input style="border:none;" id="cancel_app" type="button" onclick="getValue()" value="Apply">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  -->
   
    <div class="container" id="section-3">
        <div class="card" id="card1">
            <div id="p1">sri<span class="com">.com</span></div>
            <div id="cardright">
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span>
                    <p class="p3">For the first year</p>
                </div>
                <div>
                    <button type="button" class="cartbtn">Add cart</button>
                </div>

            </div>
        </div>
        <div class="card" id="card2">
            <div id="p1">sri<span class="com">.in</span></div>
            <div id="cardright">
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span>
                    <p class="p3">For the first year</p>
                </div>
                <!-- <div class="btn">Add cart</div> -->
                <div>
                    <button type="button" class="cartbtn">Add cart</button>
                </div>
            </div>
        </div>
        <div class="card" id="card3">
            <div id="p1">sri<span class="com">.co.in</span></div>
            <div id="cardright">
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span>
                    <p class="p3">For the first year</p>
                </div>
                <!-- <div class="btn">Add cart</div> -->
                <div>
                    <button type="button" class="cartbtn">Add cart</button>
                </div>
            </div>
        </div>
        <div class="card" id="card4">
            <div id="p1">sri<span class="com">.com</span></div>
            <div id="cardright">
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span>
                    <p class="p3">For the first year</p>
                </div>
                <!-- <div class="btn">Add cart</div> -->
                <div>
                    <button type="button" class="cartbtn">Add cart</button>
                </div>
            </div>
        </div>
        <div class="card" id="card5">
            <div id="p1">sri<span class="com">.co</span></div>
            <div id="cardright">
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span>
                    <p class="p3">For the first year</p>
                </div>
                <!-- <div class="btn">Add cart</div> -->
                <div>
                    <button type="button" class="cartbtn">Add cart</button>
                </div>
            </div>
        </div>
        <div class="card" id="card6">
            <div id="p1">sri<span class="com">.co.in</span></div>
            <div id="cardright">
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span>
                    <p class="p3">For the first year</p>
                </div>
                <!-- <div class="btn">Add cart</div> -->
                <div>
                    <button type="button" class="cartbtn">Add cart</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        @media(max-width:575px){
            #section-3{
                display:none;
            }
            .filter #section-4 {
            margin-top: 20px;   
            }
            .filter #section-4 .card {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    align-items: center;
    border: 1px solid rgba(12, 98, 175, 1);
    margin-bottom: 15px;
}
#section-4 #p1 {
    font-size: 14px;
    font-weight: 500;
    color: #333;
}
#section-4 #p2 {
    font-size: 16px;
    font-weight: 600;
    color: rgba(12, 98, 175, 1);
}
.filter #section-4 .card #p1 span {
    font-size: 18px;
    font-weight: 500;
    color: rgba(12, 98, 175, 1);
}
.filter #section-4 .card #p2 span {
    font-size: 16px;
    font-size: 14px;
    font-weight: 400;
    color:#333;

}
#section-4 .p3{
    font-size: 12px;
    color: #333;
}
.filter #section-4 .card #cardright {
    text-align: center;
    align-items: center;
    display: flex;
    flex-direction: row;
}
filter #section-4 .card {
    padding: 30px;
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    align-items: center;
    border: 1px solid rgba(12, 98, 175, 1);
    margin-bottom: 15px;
}

        }


        @media(min-width:576px){
            #section-4{
                display:none;
            }

        }
    </style>
    <div class="container" id="section-4">
    <div class="card" id="card2">
            <div>
                <div id="p1">sri<span class="com">.in</span></div>
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span></div>
                <div class="p3">For the first year</div>                 
                <!-- </div> -->
            </div>
            <div>
                    <button type="button" class="cartbtn">Add cart</button>
            </div>
        </div>
        <div class="card" id="card2">
            <div>
                <div id="p1">sri<span class="com">.in</span></div>
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span></div>
                <div class="p3">For the first year</div>                 
                <!-- </div> -->
            </div>
            <div>
                    <button type="button" class="cartbtn">Add cart</button>
            </div>
        </div>
        <div class="card" id="card2">
            <div>
                <div id="p1">sri<span class="com">.in</span></div>
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span></div>
                <div class="p3">For the first year</div>                 
                <!-- </div> -->
            </div>
            <div>
                    <button type="button" class="cartbtn">Add cart</button>
            </div>
        </div>
        <div class="card" id="card2">
            <div>
                <div id="p1">sri<span class="com">.in</span></div>
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span></div>
                <div class="p3">For the first year</div>                 
                <!-- </div> -->
            </div>
            <div>
                    <button type="button" class="cartbtn">Add cart</button>
            </div>
        </div>
        <div class="card" id="card2">
            <div>
                <div id="p1">sri<span class="com">.in</span></div>
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span></div>
                <div class="p3">For the first year</div>                 
                <!-- </div> -->
            </div>
            <div>
                    <button type="button" class="cartbtn">Add cart</button>
            </div>
        </div>
        <div class="card" id="card2">
            <div>
                <div id="p1">sri<span class="com">.in</span></div>
                <div id="p2">&#8377 200.00 <span><s>&#8377 6,000.00</s></span></div>
                <div class="p3">For the first year</div>                 
                <!-- </div> -->
            </div>
            <div>
                    <button type="button" class="cartbtn">Add cart</button>
            </div>
        </div>
    </div>
    <!--  -->
    <div id="pop_slider" class="pop_slider">
        <div class="main">

        </div>
    </div>
</form> 
 
    <?php include("footer.php") ?>
    <?php include ("script.php")?>
    <script>
        $(document).ready(function () {
            $('.slider').click(function () {
                $('#filterdiv').toggle("slide");
                document.getElementById("pop_slider").style.visibility = "visible";
                var pri_hei = document.getElementById("price").offsetHeight;
                var fil_inner_hei = document.getElementById("filter_inner_set").offsetHeight;
                document.getElementById("filter_inner").style.height = "calc(100% - " + pri_hei + "px)";
                document.getElementById("filtercard").style.height = "calc(100% - " + fil_inner_hei + "px - 30px)";

            });
        });
        document.addEventListener('mouseup', function (f) {
            var x = document.getElementById("filterdiv");
            var y = document.getElementById("pop_slider");
            if (!x.contains(f.target)) {
                x.style.display = 'none';
                y.style.visibility = 'hidden';
            }
        });
        /* cancel*/
        $(document).ready(function () {
            $('#cancel').click(function () {
                document.getElementById("pop_slider").style.visibility = "hidden";
                document.getElementById("filterdiv").style.display = "none";
            });
        });
        // apply cancel

        $(document).ready(function () {
            $('#cancel_app').click(function () {
                document.getElementById("pop_slider").style.visibility = "hidden";
                document.getElementById("filterdiv").style.display = "none";
            });
        });

        // pill close
        function closed(ele,res){
            var check=document.getElementById('cb').getElementsByTagName("input");
            for(i=0;i< check.length;i++){
                // console.log(check[i].value);
                if(check[i].value ==res){
                    check[i].checked = 
                    false;
                }
            }
            ele.parentElement.style.display="none";

        }
        // input range
        
        function showVal(newVal){
            // console.log(newVal);
        // document.getElementById("valBox").value= newVal;
        document.getElementById("valBox").innerHTML= newVal;

        }
        // check box
        // function display() {
        // var x = document.getElementById("myCheck").value;
        // alert("The value of the checkbox is: " + x);
        // }

        // var pill_1 = document.getElementById("pill1");
        function getValue() {
            var checkboxes = document.getElementsByName('checkbox');
            var result = ""; 
            var inner="";
            document.getElementsByClassName("tester").innerHTML=" ";
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    result = checkboxes[i].value;
                    // var pill_1 = document.getElementById("tester");
                // var d1 = document.createElement("div");
                // d1.setAttribute("class","des_com");       
                // d1.innerHTML=result;
                // pill_1.append(d1);
                inner+='<div id="pill1"><button type="button" class="pillbtn">'+result+'</button>  <a id="close" onclick="closed(this,`'+result+'`)"><i class="fa-sharp fa-solid fa-xmark"></i> </a></div>';
            }
            $(".tester").html(inner);
            }
          

        }
      
        // pill_1.append(d1);

    
    </script>
</body>
</html>