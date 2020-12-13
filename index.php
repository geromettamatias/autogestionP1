<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Auto Gestión</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        
    </head>
    
    <body>





<div class="container-fluid">

<div class="row">
    <div class="col-12">


      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="javascript: void(0)">
                <img src="logo.png" style="width: 60px;"> E.E.T. N°16 "1ro de MAYO"</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          AUTO-GESTIÓN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a href="javascript: void(0)" class="dropdown-item" id="autogestionAD"><img class="img-profile rounded-circle" src="img/userADMIN.png" style="width: 50px" > ADMINISTRADOR</a>
          <div class="dropdown-divider"></div>
          <a href="javascript: void(0)" class="dropdown-item" id="autogestionPro"><img class="img-profile rounded-circle" src="img/userPROFE.png" style="width: 50px" > PROFESOR</a>
          <div class="dropdown-divider"></div>
          <a href="javascript: void(0)" class="dropdown-item" id="autogestionEstu"><img class="img-profile rounded-circle" src="img/userESTUDIANTE.png" style="width: 50px" > ALUMNO</a>
               
         

        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DATOS INSTITUCIÓNALES</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a href="javascript: void(0)" class="dropdown-item" id="directivos"><img class="img-profile rounded-circle" src="img/userDIRECT.png" style="width: 50px" > DIRECTIVOS</a>
         
               
         
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INFORMACIÓN</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a href="javascript: void(0)" class="dropdown-item" id="novedadesP"><img class="img-profile rounded-circle" src="img/novedades.png" style="width: 40px" > NOVEDAES</a>
          <a href="javascript: void(0)" class="dropdown-item" id="historiaP"><img  src="img/historia.png" style="width: 30px" > HISTORIA</a>
           
         
        </div>
      </li>
     
    </ul>
   
  </div>
</nav>



</div>
</div>

</div>



   
    <div class="container-login">

        <div id="tablaContenido"></div>



                 <div id="login_prof"> 

                         <div class="container-login-form-btn2">
                    <div class="wrap-login-form-btn2">
                        <div class="login-form-bgbtn2"></div>
                        <button id="regresar1" class="login-form-btn2" >Regresar</button>
                    </div>
                   </div>



                 <br>
        <div class="wrap-login">

    
            <form class="login-form validate-form" id="formProfesor" action="" method="post">
                <span class="login-form-title">PROFESORES <img class="img-profile rounded-circle" src="img/userPROFE.png" style="width: 50px" ></span>
                
                <div class="wrap-input100" data-validate = "DNI incorrecto">
                    <input class="input100" type="text" id="dniP" name="dniP" placeholder="DNI">
                    <span class="focus-efecto"></span>
                </div>
                
                 <div class="wrap-input100" data-validate = "N° Registro de Titulo incorrecto">
                    <input class="input100" type="text" id="registroP" name="registroP" placeholder="N° Registro de Titulo">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn" >CONECTAR</button>
                    </div>
                </div>
            </form>
        </div>
         
        
    </div>  





         <div id="login_docente"> 

                 <div class="container-login-form-btn2">
                    <div class="wrap-login-form-btn2">
                        <div class="login-form-bgbtn2"></div>
                        <button id="regresar2" class="login-form-btn2" >Regresar</button>
                    </div>
                   </div>


                 <br>
    
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action="" method="post">
                <span class="login-form-title">ADMIN <img class="img-profile rounded-circle" src="img/userADMIN.png" style="width: 50px" ></span>
                
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn" >CONECTAR</button>
                    </div>
                </div>
            </form>
        </div>
         
        
    </div>    


     <div id="login_estudiante"> 

        <div class="container-login-form-btn2">
                    <div class="wrap-login-form-btn2">
                        <div class="login-form-bgbtn2"></div>
                        <button id="regresar3" class="login-form-btn2" >Regresar</button>
                    </div>
                   </div>


                 <br>
       
           <div class="wrap-login">
            <form class="login-form validate-form" id="formEstudiante" action="" method="post">
                <span class="login-form-title">ESTUDIANTE <img class="img-profile rounded-circle" src="img/userESTUDIANTE.png" style="width: 50px" ></span>
                
                <div class="wrap-input100" data-validate = "DNI incorrecto">
                    <input class="input100" type="text" id="dni" name="dni" placeholder="DNI">
                    <span class="focus-efecto"></span>
                </div>
                  <div class="wrap-input100" data-validate = "CUIL incorrecto">
                    <input class="input100" type="text" id="cuil" name="cuil" placeholder="CUIL">
                    <span class="focus-efecto"></span>
                </div>
           
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn" >CONECTAR</button>
                    </div>
                </div>
            </form>
        </div>

    </div> 



  
    <div id="inicioPa"> 
        <div class="wrap-login">
            <img src="logo.png" style="width: 96%;">
        </div>

    </div> 

    <div id="datosHistoria"> 
        
        <div class="container-login-form-btn2">
            <div class="wrap-login-form-btn2">
              <div class="login-form-bgbtn2"></div>
              <button id="regresar4" class="login-form-btn2" >Regresar</button>
            </div>
        </div>
            <br>
        <div class="wrap-login">
    
            <h3><u><b>Director <img class="img-profile rounded-circle" src="img/userDIR1.png" style="width: 50px" ></b></u></h3>
                 <h5><b>Nombre y Apellido:</b><div id="nombreDirectivos" style="color:#FF0000";></div></h5>
                 <h5><b>Datos:</b><div id="datosDirectivos" style="color:#FF0000";></div></h5>
       </div>  <br>    
       <div class="wrap-login">
                 <h3><u><b>Vice-Director <img class="img-profile rounded-circle" src="img/userDIR2.png" style="width: 50px" ></b></u></h3>
                 <h5><b>Nombre y Apellido:</b><div id="nombreviceDirector" style="color:#FF0000";></div></h5>
                 <h5><b>Datos:</b><div id="datosviceDirector" style="color:#FF0000";></div></h5>
        </div>   <br>   
       <div class="wrap-login">
                 <h3><u><b>Asesor Pedag.
                  <img class="img-profile rounded-circle" src="img/userDIR3.png" style="width: 50px" ></b></u></h3>
                 <h5><b>Nombre y Apellido:</b><div id="nombreasesora" style="color:#FF0000";></div></h5>
                 <h5><b>Datos:</b><div id="datosasesora" style="color:#FF0000";></div></h5>



        </div>

    </div>



    
    <div id="novedadesPaginaPrincipal"> 
      <div class="container-login-form-btn2">
            <div class="wrap-login-form-btn2">
              <div class="login-form-bgbtn2"></div>
              <button id="regresar5" class="login-form-btn2" >Regresar</button>
            </div>
        </div>
            <br>
        <div class="wrap-informe">
            
            <h1><u><b><p align="center"><img class="img-profile rounded-circle" src="img/novedades.png" style="width: 40px" > NOVEDADES <img class="img-profile rounded-circle" src="img/novedades.png" style="width: 40px" ></p></b></u></h1>
                 <h5><div id="novedadesLeerP" style="color:#FF0000";></div></h5>
        </div>

    </div> 

    <div id="historiaPaginaPrincipal"> 
      <div class="container-login-form-btn2">
            <div class="wrap-login-form-btn2">
              <div class="login-form-bgbtn2"></div>
              <button id="regresar6" class="login-form-btn2" >Regresar</button>
            </div>
        </div>
            <br>
        <div class="wrap-informe">
            <h1><u><b><p align="center">HISTORIA </p></b></u></h1>
                 <h5><div id="historiaLeerP" style="color:#FF0000";></div></h5>
        </div>

    </div> 






        
    </div>    
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="codigo.js"></script>
     <script src="funciones.js"></script>     
    </body>
    <script type="text/javascript">
   $(document).ready(function() {    
    $("#login_docente").hide();
    $("#login_estudiante").hide();
    $("#login_prof").hide();
    $("#inicioPa").slideDown(1100);
    $("#datosHistoria").hide();

    $("#novedadesPaginaPrincipal").hide();
    $("#historiaPaginaPrincipal").hide();

    datosDirectivos();
    novedadesPaginaPr();
    historiaPaginaPr();

     $('#autogestionAD').click(function(){

        $("#login_docente").show(100);
        $("#login_estudiante").hide(50);
        $("#login_prof").hide(50);
        $("#inicioPa").hide(50);
        $("#datosHistoria").hide(50);
        $("#novedadesPaginaPrincipal").hide(50);
        $("#historiaPaginaPrincipal").hide(50);
    });

     $('#autogestionEstu').click(function(){
        $("#login_prof").hide(50);
        $("#login_docente").hide(50);
        $("#login_estudiante").show(100);
        $("#inicioPa").hide(50);
        $("#datosHistoria").hide(50);
        $("#novedadesPaginaPrincipal").hide(50);
        $("#historiaPaginaPrincipal").hide(50);
    });

     $('#autogestionPro').click(function(){
        $("#login_estudiante").hide(50);
        $("#login_docente").hide(50);
        $("#login_prof").show(100);
        $("#inicioPa").hide(50);
        $("#datosHistoria").hide(50);
        $("#novedadesPaginaPrincipal").hide(50);
        $("#historiaPaginaPrincipal").hide(50);
    });

        $('#regresar1').click(function(){
        $("#login_estudiante").hide(50);
        $("#login_docente").hide(50);
        $("#login_prof").hide(50);
        $("#inicioPa").slideDown(1100);
        $("#datosHistoria").hide(50);
        $("#novedadesPaginaPrincipal").hide(50);
        $("#historiaPaginaPrincipal").hide(50);
    });

      $('#regresar2').click(function(){
        $("#login_estudiante").hide(50);
        $("#login_docente").hide(50);
        $("#login_prof").hide(50);
        $("#inicioPa").slideDown(1100);
        $("#datosHistoria").hide(50);
        $("#novedadesPaginaPrincipal").hide(50);
        $("#historiaPaginaPrincipal").hide(50);
    });

      $('#regresar3').click(function(){
        $("#login_estudiante").hide(50);
        $("#login_docente").hide(50);
        $("#login_prof").hide(50);
        $("#inicioPa").slideDown(1100);
        $("#datosHistoria").hide(50);
        $("#novedadesPaginaPrincipal").hide(50);
        $("#historiaPaginaPrincipal").hide(50);

    });

      $('#regresar4').click(function(){
        $("#login_estudiante").hide(50);
        $("#login_docente").hide(50);
        $("#login_prof").hide(50);
        $("#inicioPa").slideDown(1100);
        $("#datosHistoria").hide(50);
        $("#novedadesPaginaPrincipal").hide(50);
        $("#historiaPaginaPrincipal").hide(50);

    });

      $('#regresar5').click(function(){
        $("#login_estudiante").hide(50);
        $("#login_docente").hide(50);
        $("#login_prof").hide(50);
        $("#inicioPa").slideDown(1100);
        $("#datosHistoria").hide(50);
        $("#novedadesPaginaPrincipal").hide(50);
        $("#historiaPaginaPrincipal").hide(50);

    });

      $('#regresar6').click(function(){
        $("#login_estudiante").hide(50);
        $("#login_docente").hide(50);
        $("#login_prof").hide(50);
        $("#inicioPa").slideDown(1100);
        $("#datosHistoria").hide(50);
        $("#novedadesPaginaPrincipal").hide(50);
        $("#historiaPaginaPrincipal").hide(50);

    });
    

     $('#directivos').click(function(){

        $("#datosHistoria").show(100);
        $("#login_prof").hide(50);
        $("#login_docente").hide(50);
        $("#login_estudiante").hide(50);
        $("#inicioPa").hide(50);
        $("#novedadesPaginaPrincipal").hide(50);
        $("#historiaPaginaPrincipal").hide(50);
        
    });


     $('#historiaP').click(function(){

        $("#datosHistoria").hide(50);
        $("#login_prof").hide(50);
        $("#login_docente").hide(50);
        $("#login_estudiante").hide(50);
        $("#inicioPa").hide(50);
        $("#novedadesPaginaPrincipal").hide(50);
        $("#historiaPaginaPrincipal").show(100);
        
    });


     $('#novedadesP').click(function(){

        $("#datosHistoria").hide(50);
        $("#login_prof").hide(50);
        $("#login_docente").hide(50);
        $("#login_estudiante").hide(50);
        $("#inicioPa").hide(50);
        $("#novedadesPaginaPrincipal").show(100);
        $("#historiaPaginaPrincipal").hide(50);
        
    });

    });


 </script>




</html>