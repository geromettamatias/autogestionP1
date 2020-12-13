$('#formLogin').submit(function(e){
   e.preventDefault();
   var usuario = $.trim($("#usuario").val());    
   var password =$.trim($("#password").val());    
    
   if(usuario.length == "" || password == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un usuario y/o password',
      });
      return false; 
    }else{
        $.ajax({
           url:"bd/loginAdministrador.php",
           type:"POST",
           datatype: "json",
           data: {usuario:usuario, password:password}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario y/o password incorrecta',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡Conexión exitosa!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           //window.location.href = "vistas/pag_inicio.php";
                           window.location.href = "administrador/index.php";
                       }
                   })
                   
               }
           }    
        });
    }     
});




$('#formProfesor').submit(function(e){
   e.preventDefault();
   var dni = $.trim($("#dniP").val());    
   var registro =$.trim($("#registroP").val());    
    
   if(dni.length == "" || registro == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un dni y/o registro',
      });
      return false; 
    }else{

      
        $.ajax({
           url:"bd/loginProfesor.php",
           type:"POST",
           datatype: "json",
           data: {dni:dni, registro:registro}, 
           success:function(data){ 
                       
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario y/o registro incorrecta',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡Conexión exitosa!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           //window.location.href = "vistas/pag_inicio.php";
                           window.location.href = "profesor/index.php";
                       }
                   })
                   
               }
           }    
        });
    }     
});







$('#formEstudiante').submit(function(e){
   e.preventDefault();
   var dni = $.trim($("#dni").val());    
   var cuil =$.trim($("#cuil").val());    
    
   if(dni.length == "" || cuil == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un DNI y/o CUIL',
      });
      return false; 
    }else{
        $.ajax({
           url:"bd/loginEstudiante.php",
           type:"POST",
           datatype: "json",
           data: {dni:dni, cuil:cuil}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'DNI y/o CUIL incorrecta',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡Conexión exitosa!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           //window.location.href = "vistas/pag_inicio.php";
                           window.location.href = "alumno/index.php";
                       }
                   })
                   
               }
           }    
        });
    }     
});


