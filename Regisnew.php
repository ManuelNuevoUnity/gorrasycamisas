<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLOTHING STORE</title>
    <link rel="icon" href="OIP (11).jpg">

  <style>
    body {
      background-color: #f9f9f9;
      color: #333;
      font-family:Verdana, Geneva, Tahoma, sans-serif;
      margin: 0;
      padding: 0;
    }

    .formulario {
      max-width: 400px;
      margin: 65px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 20px;
      background-color: gold;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      float:inline-end;
    }

    .formulario h2 {
      margin-top: 0;
      
    }

    .formulario label {
      display: block;
      margin-bottom: 10px;
    }

    .formulario input[type="text"],
    .formulario input[type="password"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 20px;
      margin-bottom: 20px;
    }

    .formulario button[type="submit"] {
      background-color: #232f3e;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .formulario button[type="submit"]:hover {
      background-color: #1c2331;
    }
    body {
  background-image: url(R.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
#pg{
  text-align: center;
}
#SEGUNDO2 {
    margin: 0;
    padding: 0;
    margin: 10px;
  }
  
  .sidebar {
    background-color:white;
    color: gold;
    width: 280px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: -280px;
    z-index: 999;
    transition: left 0.3s ease;
    border-radius: 20px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    
  }
  
  .sidebar.active {
    left: 0;
    border: 2px solid black;
  }
  
  .toggle-btn {
    background-color: #333;
    color: #fff;
    border: none;
    font-size: 20px;
    padding: 10px;
    cursor: pointer;
    position: fixed;
    top: 20px;
    left: 20px;
    z-index: 999;
    
  }
  
  .toggle-btn:hover {
    background-color: #555;
    
  }
  
  #menu {
    list-style-type: none;
    padding: 0;
    margin-top: 60px;
    
  }
  
  #menu li {
    padding: 10px;
    margin: 10px;
  }
  
  #menu li a {
    color: gold;
    text-decoration: none;
    border: 2px solid black;
    font-weight: bold;
  }
  #MENUDE{
    text-align: center;
    font-size: 30px;
    font-weight: bold;
  }
  </style>
</head>
<body>
  <div  class="formulario" id="registro">
    <h2 id="pg">Registro de UsuarioO1P</h2>
    <form action="" id="formulario-registro" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombrE" id="nombre">
      <br>
      <label for="apellidos">Apellidos:</label>
      <input type="text" name="apellidO" id="apellidos">
      <br>
      <label for="contrasena">Contraseña:</label>
      <input type="password" name="clavE" id="contrasena">
      <input type="submit" value="Guardar">

      <br>
      <button type="submit">Registrarse</button>
    </form>
  </div>

  <div class="formulario" id="inicio-sesion" style="display: none;">
    <h2>Iniciar Sesión</h2>
    <form id="formulario-inicio-sesion">
      <label for="nombre-usuario">Nombre de Usuario:</label>
      <input type="text" id="nombre-usuario" required>
      <br>
      <label for="contrasena-usuario">Contraseña:</label>
      <input type="password" id="contrasena-usuario" required>
      <br>
      <button type="submit">Iniciar Sesión</button>
    </form>
  </div>
  

  <script>
    const formularioRegistro = document.querySelector('#formulario-registro');
    const formularioInicioSesion = document.querySelector('#formulario-inicio-sesion');
    const divRegistro = document.querySelector('#registro');
    const divInicioSesion = document.querySelector('#inicio-sesion');

    formularioRegistro.addEventListener('submit', function(event) {
      event.preventDefault();

      const nombre = document.querySelector('#nombre').value;
      const apellidos = document.querySelector('#apellidos').value;
      const contrasena = document.querySelector('#contrasena').value;

      if (nombre === '' || apellidos === '' || contrasena === '') {
        alert('Por favor ingrese todos los campos');
        return;
      }

      const usuario = {
        nombre: nombre,
        apellidos: apellidos,
        contrasena: contrasena
      };

      let usuarios = localStorage.getItem('usuarios');
      if (usuarios) {
        usuarios = JSON.parse(usuarios);
      } else {
        usuarios = [];
      }

      usuarios.push(usuario);

      localStorage.setItem('usuarios', JSON.stringify(usuarios));

      document.querySelector('#nombre').value = '';
      document.querySelector('#apellidos').value = '';
      document.querySelector('#contrasena').value = '';

      alert('Registro exitoso. ¡Gracias por registrarte!');

      divRegistro.style.display = 'none';
      divInicioSesion.style.display = 'block';
    });

    formularioInicioSesion.addEventListener('submit', function(event) {
      event.preventDefault();

      const nombreUsuario = document.querySelector('#nombre-usuario').value;
      const contrasenaUsuario = document.querySelector('#contrasena-usuario').value;

      let usuarios = localStorage.getItem('usuarios');
      if (usuarios) {
        usuarios = JSON.parse(usuarios);
      } else {
        usuarios = [];
      }

      const usuarioEncontrado = usuarios.find(function(usuario) {
        return usuario.nombre === nombreUsuario && usuario.contrasena === contrasenaUsuario;
      });

      if (usuarioEncontrado) {
        alert('Inicio de sesión exitoso. ¡Bienvenido!');
        window.location.href = 'index.html'; 
      } else {
        alert('Nombre de usuario o contraseña incorrectos. Por favor, intenta de nuevo.');
      }

      document.querySelector('#nombre-usuario').value = '';
      document.querySelector('#contrasena-usuario').value = '';
    });
    function toggleMenu() {
      var sidebar = document.getElementById("sidebar");
      var content = document.getElementById("content");
      
      sidebar.classList.toggle("active");
      content.classList.toggle("active");
    }
    
    document.addEventListener("click", function(event) {
      var sidebar = document.getElementById("sidebar");
      var toggleBtn = document.querySelector(".toggle-btn");
      
      if (!sidebar.contains(event.target) && !toggleBtn.contains(event.target) && sidebar.classList.contains("active")) {
        toggleMenu();
      }
    });
  </script>
</body>
<body id="SEGUNDO2">
  <button class="toggle-btn" onclick="toggleMenu()">☰</button>
  
  <div class="sidebar" id="sidebar">
  <ul id="menu">
  <p id="MENUDE">BIENVENIDO A CLOTHING STORE</p> 
  <li><a href="index.html">INICIO</a></li>
  <li><a href="Regisnew.html">REGISTRARSE</a></li>
  <li><a href="SOPORTE.html">SOPORTE AL CLIENTE</a></li>
  <li><a href="Camisa.html">DISEÑA TU CAMISA</a></li>
  <li><a href="personal.html">DISEÑA TU GORRA</a></li>
  </ul>
  </div>

  </body>
</html>
