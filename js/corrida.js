function sair(){
    window.location.replace("../VALEMOBI COM ANGULAR/inicial.html");
}

$(document).ready(()=> {
    $("#registrarCorrida").hide();
    $("#dados").hide();

    $("#registrar").click(()=> {

        $("#registrarCorrida").show();
        $("#dados").hide();
        
    });
    
    $("#consultar").click(()=> {

        $("#registrarCorrida").hide();
        $("#dados").show();

    });
});