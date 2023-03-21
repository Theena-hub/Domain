// index //
/* letter effect */
var TxtType = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function () {
        that.tick();
    }, delta);
};

window.onload = function () {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};
//ac-info//
/* button toggle */
$(".view_show").css("display", "none");
function open_nav(ele) {
    console.log("open");
    var t = ele.getElementsByTagName("div")[0];
    if (t.style.display == "none") {
        t.style.display = "block ";
    }
    /********/
    document.addEventListener('mouseup', function (e) {
        var t = ele.getElementsByTagName("div")[0];
        if (!t.contains(e.target)) {
            t.style.display = 'none';
        }
    });
} 
// new //
$(".dropdown img.flag").addClass("flagvisibility");
$(".dropdown dt a").click(function() {
    $(".dropdown dd ul").toggle();
});         
$(".dropdown dd ul li .dropdown-content").click(function() {
    var text = $(this).html();
    $(".dropdown dt a span").html(text); 

    $(".dropdown dd ul").hide();
});           
function getSelectedValue(id) {
    return $("#" + id).find("dt a span.value").html();
}
$(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (! $clicked.parents().hasClass("dropdown"))
        $(".dropdown dd ul").hide();
});

