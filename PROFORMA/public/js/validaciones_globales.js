function validarTexto(e,elemento,n) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    if (tecla==9) return true;
    if (tecla==0) return true;
    if (tecla==32) return true;
    if (tecla==13) return true;
    if (tecla==209) return true;
    if (tecla==241) return true;
    var eleme = elemento.value.length;
    if(eleme >= n){
        return false;
    }
    patron =/^[a-zA-ZñÑ][a-zA-ZñÑ]*/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
function textMayuscula(input){
    var txt = input.value.toUpperCase();
    input.value = txt;    
}
function MaysPrimera(input){
    var txt = input.value;
    input.value = txt.charAt(0).toUpperCase() + txt.slice(1);
}
function MaysAll(input){
    input.value = input.value.toUpperCase();
}
function validarNumero(e,elemento,n) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    if (tecla==9) return true; // 3
    if (tecla==0) return true; // 3
    if (tecla==13) return true; // 3
    var eleme = elemento.value.length;
    if(eleme >= n){
        return false;
    }
    patron =/[0123456789]/; // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}