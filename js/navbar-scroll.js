window.onscroll = function() {scrollFunction()};

//change size and opacity of banner and logo when scrolled
//code adapted from https://www.w3schools.com/howto/howto_js_navbar_shrink_scroll.asp

function scrollFunction() {
  if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
    document.getElementById("navbar").style.height = "40px";
    document.getElementById("navbar").style.backgroundColor = "rgba(0, 181, 229, 0.6)";
    document.getElementById("logo").style.fontSize = "20px";
    document.getElementById("logo").style.top = "4px";

    
    if (document.getElementById("login") == null) {
        document.getElementById("logout").style.top = "-6px";
        document.getElementById("logout").style.fontSize = "25px";

        document.getElementById("reset").style.top = "-6px";
        document.getElementById("reset").style.fontSize = "20px";

        document.getElementById("modify").style.top = "-6px";
        document.getElementById("modify").style.fontSize = "20px";

        document.getElementById("logout-reset").style.width = "440px";
    }
    else{
        document.getElementById("login").style.top = "-6px";
        document.getElementById("login").style.fontSize = "25px";
    }

  } else {
    document.getElementById("navbar").style.height = "70px";
    document.getElementById("navbar").style.backgroundColor = "rgba(0, 181, 229, 1)";
    document.getElementById("logo").style.fontSize = "35px";
    document.getElementById("logo").style.top = "8px";



    if (document.getElementById("login") == null) {

        document.getElementById("logout").style.top = "5px";
        document.getElementById("logout").style.fontSize = "30px";

        document.getElementById("reset").style.top = "5px";
        document.getElementById("reset").style.fontSize = "22px";

        document.getElementById("modify").style.top = "5px";
        document.getElementById("modify").style.fontSize = "22px";

        document.getElementById("logout-reset").style.width = "490px";
    }
    else{
        document.getElementById("login").style.top = "5px";
        document.getElementById("login").style.fontSize = "30px";
    }
  }
}
