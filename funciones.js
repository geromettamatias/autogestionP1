function datosDirectivos() {
  

  
    $.ajax({
        url: "bd/datosDirectivos.php",
        type: "POST",
        dataType: "json",
        data: {},
        success: function(data){  
            console.log(data);

            nombreDirectivos = data.director.nombreDirectivos;
            datosDirectivos = data.director.datosDirectivos;

            nombreviceDirector = data.viceDirector.nombreviceDirector;
            datosviceDirector = data.viceDirector.datosviceDirector;

            nombreasesora = data.asesora.nombreasesora;
            datosasesora = data.asesora.datosasesora;

            $("#nombreDirectivos").html(nombreDirectivos);
            $("#nombreDirectivosf").val(nombreDirectivos);  
            $("#datosDirectivos").html(datosDirectivos);
            $("#datosDirectivosf").val(datosDirectivos);

            $("#nombreviceDirector").html(nombreviceDirector);
            $("#nombreviceDirectorf").val(nombreviceDirector);  
            $("#datosviceDirector").html(datosviceDirector);
            $("#datosviceDirectorf").val(datosviceDirector);
            
            $("#nombreasesora").html(nombreasesora);
            $("#nombreasesoraf").val(nombreasesora);  
            $("#datosasesora").html(datosasesora);
            $("#datosasesoraf").val(datosasesora);

                  
        }        
    });
}



function novedadesPaginaPr() {
  

  
     $.ajax({
        url: "bd/novedades.php",
        type: "POST",
        dataType: "json",
        data: {},
        success: function(data){  
            console.log(data);

            informe = data.novedades.informe;
       
            $("#novedadesLeerP").html(informe);
          
                  
        }        
    });
}

function historiaPaginaPr() {
  

  
       $.ajax({
        url: "bd/historia.php",
        type: "POST",
        dataType: "json",
        data: {},
        success: function(data){  
            console.log(data);

            informe = data.historia.informe;
           

            
            $("#historiaLeerP").html(informe);
        
                  
        }        
    });
}
