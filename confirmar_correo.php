<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
font-family: Arial, Helvetica, sans-serif;
    background-color: #ff0000;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #FF0000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>


<div id="id01" class="modal">
  
  <div class="modal-content animate">
    <div class="imgcontainer">  
    </div>

    <div class="container">
      <label for="uname"><b>Correo</b></label>
      <input type="text" id='correo_incompleto' value="cargando..." name="uname" readonly>
      <label for="psw"><b>Confirmar Correo</b></label>
      <input type="text" id='correo_completo' placeholder="Complete su correo" name="psw">
        
      <button id='enviar_correo'>Enviar correo de recuperaci&oacute;n</button>

    </div>

  </div>
</div>

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<script>
document.getElementById('id01').style.display='block';
	$.ajax({
		url: '/obtener_pista_correo.php',
		type: 'GET',
		success: function(resultado){ 
			$('#correo_incompleto').val(resultado);
		},
		error: function(data) {
			alert('Error de red, favor intente cargar la pagina otra vez.');
		}
	});
$("#enviar_correo").on("click",function(){

   var correo = $("#correo_completo").val();
   
	$.ajax({
		url: 'correo.php?correo=' + correo,
		type: 'GET',
		success: function(resultado){ 
			alert(resultado);
		},
		error: function(data) {
			alert('Error de red, favor intente cargar la pagina otra vez.');
		}
	});

});
</script>

</body>
</html>
