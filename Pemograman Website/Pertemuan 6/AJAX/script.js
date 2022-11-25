var ngetik = document.getElementById("ngetik");
var data = document.getElementById("data");

ngetik.addEventListener("keyup",function () {
    var ObjAjax = new XMLHttpRequest();

    ObjAjax.onreadystatechange = function(){
        if ((ObjAjax.readyState = 4 && ObjAjax.status == 200)) {
            data.innerHTML = ObjAjax.responseText;
        }
    };

    ObjAjax.open("get", "./data.php?ngetik=" + ngetik.value, true);
    ObjAjax.send();
});