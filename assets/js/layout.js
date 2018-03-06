var plus = document.getElementById("plus");
var accordeon = document.getElementById("accordeon");
var caret = document.getElementById("caret");

plus.onclick = function() {
    var srcVersCaret = caret.src;


    if(srcVersCaret === "http://localhost/mapbox/includes/img/caretdown.png"){
        var caretVersBas = true;
    }



    if(caretVersBas){
        accordeon.style.display = "block";

        caret.src = "includes/img/caretup.png";
    }else{
        accordeon.style.display = "none";

        caret.src = "includes/img/caretdown.png";
    }
};