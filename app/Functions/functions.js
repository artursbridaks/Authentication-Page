function blackFunction() {
    document.getElementById("white-frame-login").style.animation = "left-animation 1s 1";
    document.getElementById("white-frame-login").style.animationFillMode = "forwards";
    document.getElementById("white-frame-content-login").style.animation = 'hidden-animation 0.3s';
    document.getElementById("white-frame-content-login").style.visibility = 'hidden';
    document.getElementById("white-frame-content-register").style.animation = 'hidden-animation2 0.7s';
    document.getElementById("white-frame-content-register").style.visibility = 'visible';
}

function whiteFunction() {
    document.getElementById("white-frame-login").style.animation = "right-animation 1s 1";
    document.getElementById("white-frame-login").style.animationFillMode = "forwards";
    document.getElementById("white-frame-content-login").style.animation = 'visible-animation 0.3s';
    document.getElementById("white-frame-content-login").style.visibility = 'visible';
    document.getElementById("white-frame-content-register").style.animation = 'visible-animation2 0.7';
    document.getElementById("white-frame-content-register").style.visibility = 'hidden';
}