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
        document.getElementById("reset").style.fontSize = "25px";

        document.getElementById("add-new").style.top = "3px";
        document.getElementById("add-new").style.fontSize = "25px";

        document.getElementById("logout-reset").style.width = "16%";
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
        document.getElementById("logout").style.fontSize = "25px";

        document.getElementById("add-new").style.top = "10px";
        document.getElementById("add-new").style.fontSize = "30px";

        document.getElementById("reset").style.top = "5px";
        document.getElementById("reset").style.fontSize = "30px";

        document.getElementById("logout-reset").style.width = "20%";
    }
    else{
        document.getElementById("login").style.top = "5px";
        document.getElementById("login").style.fontSize = "30px";
    }
  }
}
