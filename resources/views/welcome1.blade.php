body {
    height: 2000px;
}
#myID1 {
  position: absolute;
    top: 0;
    color: white;
    width: 100%;
    height: 60px;
    border-top: 1px solid #000;
    background: red;
    z-index: 1;
    transition: all .5s;
}
.bottomMenu {
    position: fixed;
    top: 0;
    color: white;
    width: 100%;
    height: 0px;
    border-top: 1px solid #000;
    background: red;
    z-index: 1;
    transition: all .15s;
}
.hide {
    opacity:0;
    height: 0px;
}
.show {
    opacity:1;
  height: 60px
}




<!-- js -->

myID = document.getElementById("myID");

var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= 130) {
        myID.className = "bottomMenu show"
        myID1.className = "bottomMenu hide"
    } else {
        myID.className = "bottomMenu hide"
        myID1.className = "bottomMenu show"
    }
};

window.addEventListener("scroll", myScrollFunc);