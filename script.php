<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script> -->
<!-- bootstrap -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script> -->



<script>
    // flag
    function opendrop_n() {
        $(".dropup-content_n").css("display","block");
    }
    // document.addEventListener("mouseup", function (z) {
    //         $(".dropup-content_n").css("display","none");
    // })

    document.addEventListener("mouseup", function (z) {
            var remove21 = document.getElementsByClassName("dropup-content")[0];
            if (!remove21.contains(z.target)) {
                remove21.style.display = "none"
            }
        }
        );

    // flag value change 

    function change_n(res_n) {
        document.getElementById("val1_n").innerHTML = res_n.innerHTML;
        var flag=document.getElementById("flag");
        if(document.getElementsByTagName("body")[0].contains(flag)){

            document.getElementById("flag").innerHTML = res_n.innerHTML;
        }
       
        document.getElementById("val1_n_d").innerHTML = res_n.innerHTML;
        $('.dropup-content_n').hide(this);



        sessionStorage.setItem("ses",res_n.innerHTML);
        let personName = sessionStorage.getItem("ses");
        document.getElementById("val2").innerHTML = personName;
        
    };

    // profile
    function navopen() {
        var a = document.getElementById("navbarSupportedContent");
        if (a.classList.contains("show")) {
            a.classList.remove("show");

        }
        else {
            a.classList.add("show");
        }
    }
</script>
<!-- index -->
 <script>
    function navopen() {
    var a = document.getElementById("navbarSupportedContent");
    if (a.classList.contains("show")) {
        a.classList.remove("show");
         }
        else {
            a.classList.add("show");
        }
    }
</script>
<script>
    // footer 1drop
    function opendrop(ele) {
            ele.getElementsByClassName("dropup-content")[0].style.display = "block";
        }
        document.addEventListener("mouseup", function (ele) {
            var remove = document.getElementsByClassName("dropup-content")[0];
            if (!remove.contains(ele.target)) {
                remove.style.display = "none"
            }
        })
        // footer 2drop
        function opendrop2(ele1) {
            ele1.getElementsByClassName("dropup-content2")[0].style.display = "block";
        }
        document.addEventListener("mouseup", function (ele1) {
            var remove2 = document.getElementsByClassName("dropup-content2")[0];
            if (!remove2.contains(ele1.target)) {
                remove2.style.display = "none"
            }
        }
        );

        /* */

        function change(ele) {
            var q = document.getElementById("val2").innerHTML = ele.innerHTML;
            $('.dropup-content2').hide(this);

            sessionStorage.setItem("ses_f",q);
        let personName_f = sessionStorage.getItem("ses_f");
        document.getElementById("val1_n_d").innerHTML = personName_f;
        }
        function change1(res) {
          var final_res = document.getElementById("val1").innerHTML = res.innerHTML;
            $('.dropup-content').hide(this);

        
        // alert("foot");
        }

        
    </script>

<script>
        //    $(document).ready(function () {
            $('.navbar-toggler').click(function () {
                // $('#mob_close').toggle("slide");
                // $('.mob_view').toggle("slide");
                // alert("hiii");
                // $('#mob_close2').toggle("slide");
                document.getElementById("mob_close2").style.transform="translateX(0%)";
                document.getElementById("mob_close").style.opacity="1";
                document.getElementById("mob_close").style.visibility="visible";
              if (head.style.display == "block"){
            
              }
            else{
              
            }
        
            });
        // });

        function close_n(){
            document.getElementById("mob_close").style.opacity = "0";
            document.getElementById("mob_close").style.visibility = "hidden";
            document.getElementById("mob_close2").style.transform = "translateX(100%)";
            // alert("yes");
            
        }
        </script>
  