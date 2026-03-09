$(document).ready(function() {
    let isCentered = false;
    
    $("#btn-align").click(function() {
        if (!isCentered) {
            $(".text-lines").css("text-align", "center"); 
            isCentered = true;
        } else {
            $(".text-lines").css("text-align", "left");
            isCentered = false;
        }
    });

    $("#btn-color").click(function() {
        $(".l2-side-box, .l1-footer-box").toggleClass("bg-warna-baru");
    });
});