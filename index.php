<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C.V - RodrigoSantillan</title>
  <link rel="shortcut icon" href="./assets/img/icono-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!-- Header -->
  <header>
    <div class="logo">Rodrigo Santillan <span>•</span> Programador Web</div>
  </header>
  <!-- Fin Header -->
  
  <!-- Section -->
  <div id="contenedor">
    <div class="item">
      <a href="#" class="btn" ventana="uno"><h2>¿Quién Soy?</h2></a>
    </div>    
    <div class="item">
      <a href="#" class="btn" ventana="dos"><h2>Experiencias Laborales</h2></a>
    </div>
    <div class="item">
      <a href="#" class="btn" ventana="tres"><h2>Educación</h2></a>
    </div>
    <div class="item">
      <a href="#" class="btn" ventana="cuatro"><h2>Habilidades - Idiomas</h2></a>
    </div>
    <div class="item">
      <a href="#" class="btn" ventana="cinco"><h2>Contactame</h2></a>
    </div>
  </div>
  <!-- Fin Section -->
  
  <!-- Ventanas Modales -->
  <div class="modal_fondo fondo1">
    <div class="modal">
      <div class="modal_cerrar" modal="uno">
        <span>X</span>
      </div>
      <div class="modal_titulo">¿Quién Soy?</div>
      <div class="modal_mensaje mensaje1">
        <p>Hace algunos meses me embarqué en el maravilloso mundo de la Programación Web gracias a Leo, quién es un gran Programador de la Argentina. Actualmente soy un novato en el área, cada día estoy aprendiendo más conceptos y adquiriendo un poco más de experiencia.</p>
        <p>Uno de mis sueños que más anhelo es poder acceder a un mejor futuro. Realmente me gustaría poder cambiar mi estilo de vida, ya que provengo de una familia con muy bajos recursos económicos. Siento que Dios me acompaña en cada paso que doy en mi vida y me ayuda a seguir creciendo.</p>
      </div>
    </div>
  </div>
  
  <div class="modal_fondo fondo2">
    <div class="modal">
      <div class="modal_cerrar" modal="dos">
        <span>X</span>
      </div>
      <div class="modal_titulo">Experiencias Laborales</div>
      <div class="modal_mensaje mensaje2">
        <p><i><u>DESARROLLADOR DE PÁGINAS WEB</u></i>
          <br> Proyectos Freelance, (Junio 2022 - Actual)
          <br>- HTML5 - CSS3 (Bootstrap).
          <br>- JavaScript: JQuery.
          <br>- Base de datos: PHP, MySQL. 	
        </p>
        <br>
        <p><i><u>ADMINISTRATIVO GENERALISTA</u></i>
          <br> 3D PARTS S.R.L, (Marzo 2021 - Actual)
          <br>• Coordinador del equipo de trabajo.
          <br>• Asistencia a las áreas de administración, facturación, depósito y paquetería de Mercado Libre.
        </p>
        <!-- <p><i><u>ADMINISTRATIVO DE CRÉDITOS Y COBRANZAS</u></i>
          <br>Compañía Petrolera COPSA S.A, (2017 - 2019)
          <br>• Responsable de análisis y seguimiento de cuentas corrientes. 
          <br>• Conciliador de cuentas contables e ingresos de cobranzas.
          <br>• Colaborador con el área de contaduría.
          <br>• Manejo del Sistema Operativo Tango Gestión.
        </p> -->
      </div>
    </div>
  </div>
  
  <div class="modal_fondo fondo3">
    <div class="modal">
      <div class="modal_cerrar" modal="tres">
        <span>X</span>
      </div>
      <div class="modal_titulo">Educación</div>
      <div class="modal_mensaje mensaje3">
        <p><i><u>ACADEMIA NUMEN - EDUCACIÓN REMOTA</u></i>
          <br>• Desarrollo Web Full Stack, (2022 - Actual)
        </p>
        <br>
        <p><i><u>INSTITUTO NUESTRA SEÑORA DE LA PAZ</u></i>
          <br>• Analista de Sistemas, (2022 - Actual)
        </p>
        <br>
        <p><i><u>UNIVERSIDAD DE BUENOS AIRES (UBA)</u></i>
          <br>• Actuario en Economía, (2016-2020)
          <br>• Incompleto - 13 materias aprobadas de 33.
        </p>
      </div>
    </div>
  </div>
  
  <div class="modal_fondo fondo4">
    <div class="modal">
      <div class="modal_cerrar" modal="cuatro">
        <span>X</span>
      </div>
      <div class="modal_titulo">Habilidades - Idiomas</div>
      <div class="modal_mensaje mensaje4">
        <p><i><u>INGLÉS</u></i>
          <br>• Nivel Oral Básico.
          <br>• Nivel Escrito Básico.
        </p><br>
        <p><i><u>SERVICIO A LA COMUNIDAD - IGLESIA ECO</u></i>
          <br>• Me desempeño en el área de enseñanza y cuidado de niños y niñas que concurren a la iglesia local de la edad de cinco a diez años.
        </p>     
      </div>
    </div>
  </div>
  
  <div class="modal_fondo fondo5">
    <div class="modal">
      <div class="modal_cerrar" modal="cinco">
        <span>X</span>
      </div>
      <div class="modal_titulo">Contactame</div>
      <div class="modal_mensaje mensaje5">
        <form method="POST" action="enviarmail.php">
          <div><input type="text" name="name" id="name" placeholder="Nombre"/></div>
          <div><input type="email" name="email" id="email" placeholder="Email"/></div>
          <div><textarea name="message" id="message" placeholder="Mensaje" rows="4" cols="19"></textarea></div>
          <div>
            <button type="submit" value="Enviar Mensaje" class="primary" name="enviarmensaje" id="enviarmensaje">Enviar Mensaje</button>
          </div>
        </form>
        
      <!-- Redes -->
        <div class="pdf_cv">
          <a href="https://drive.google.com/file/d/1KDPszOHaXW1H3Rtf_VkqdPTHiZ1s1Uel/view" target="_blank">
            <img alt="Curriculum en PDF" src="./assets/img/icono-pdf.png" title="Curriculum en PDF" widht="auto" height="50">
          </a>
        </div>
        <div class="linkedin">
          <a href="https://www.linkedin.com/in/rodrigo-santillan-300209253/" target="_blank">
            <img alt="Linkedin" src="./assets/img/icono-linkedin.png" title="Linkedin" widht="auto" height="45">
          </a>
        </div>
        <div class="whatsapp">
          <a href="https://wa.me/541165961022/?text=Hola%20Rodrigo!%20Estoy%20interesado/a%20en%20tu%20perfil" target="_blank">
            <img alt="WhatsApp" src="./assets/img/whatsapp-logo.svg" title="WhatsApp" widht="50" height="50">
          </a>
        </div>
      <!-- Fin Redes -->
      </div>
    </div>
  </div>
  <!-- Fin Ventanas Modales -->
  
  <!-- Footer -->
  <footer>
    <div class="copyright">Rodrigo Santillan Web  &copy; <?php echo date('Y'); ?></div>
  </footer>
  <!-- Fin Footer -->
  
  <script src="./assets/js/jquery-3.6.3.min.js"></script>
  <script src="./assets/js/index.js"></script>

</body>
</html>