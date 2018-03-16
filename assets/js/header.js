var plus = document.getElementById("plus");
var accordeon = document.getElementById("accordeon");
var caret = document.getElementById("caret");

plus.onclick = function() {
    var classCaret = caret.className;

    if (classCaret == "caretdown") {
        caret.className = "caretup";

        accordeon.style.display = "block";
    } else {
        caret.className = "caretdown";

        accordeon.style.display = "none";
    }
};