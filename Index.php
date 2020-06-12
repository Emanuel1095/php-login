<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, name, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!DOCTYPE html>
<html>
	<head>
            <meta charset="utf-8">     
		<title>Trabajos del Futuro Argentina</title>
		<link rel="stylesheet" href="CSS\Pag Trab.css">
            <script src="http://code.jquery.com/jquery-latest.js"></script>	
            <script src="main.js"></script>
            <link rel="icon" type="image/png" href="Pag Imagenes\icono.png" />
	</head>
	<body>
            
            <header>
                  <img src="Pag Imagenes\logo pag.png" class="logo" height="100px" width="100px">
                  <img src="Pag Imagenes\Foto Usuario.png"class="usuario">

                  <?php if(!empty($user)): ?>
                  
                  <a href="CerrarSesion.php" class="cabecera">Cerrar Sesion</a>
                  
                  <?php else: ?>

                  <a href="Registrate.php" class="cabecera">Registrarse</a>
                  <a href="Iniciar Sesion.php" class="cabecera">Iniciar Sesion</a>
                 
                  <?php endif; ?>

                  <p class="ali">Trabajos del Futuro Argentino</p>
                  
            </header>
            
            <section class="main">
			<div class="p1">
				<p>La revolución tecnológica está transformando fuertemente el mercado laboral y promete dejar en el recuerdo a varios empleos que hoy emplean a millones de personas. En efecto, las nuevas tecnologías y su rápida evolución crearon nuevas necesidades de conocimiento y roles en las empresas de todos los tamaños.</p>
				
				<p>Pero lo que la transformación digital quita de un lado, lo da en el otro. Según el último informe de la La red social profesional LinkedIn presentó su informe anual Emerging Jobs sobre las nuevas profesiones que irrumpen en el mercado de trabajo argentino, para lo que analizó los datos de los más de 7 millones de la plataforma.</p> 
            </div>


            <div class="p1" id="indice1">
            	<img src="Pag Imagenes\Linkedin.png" class="img-text">
            	<h1>La Selección de Linkedin</h1><br>

				<p>La red social profesional identificó las profesiones que sobresalieron a lo largo de los últimos cinco años y aquellas habilidades que requieren.</p><br>
				<p>Obviamente, casi la mitad está vinculada a la industria tecnológica, pero el resto se basa en las "habilidades blandas", de comunicación y relaciones interpersonales.</p>
            </div>


            <div class="p1" id="indice2">
            	<img src="Pag Imagenes\Black-End.png" class="img-text">
            	<h1>Desarrollador Back-End</h1><br>

            	<p>Tiene a su cargo la interacción entre el usuario y el sitio web. Es un programador que se ocupa de crear la lógica y las soluciones para que las acciones solicitadas desde una web o app móvil se sincronicen y ejecuten correctamente. Se anticipa a problemas que puedan generarse en la integración de los elementos para que no existan fallas.</p>
            </div>


            <div class="p1" id="indice3">
            	<img src="Pag Imagenes\Scrum-Master.png" class="img-text">
            	<h1>Scrum Master</h1><br>
            	<p>También llamado facilitador de proyectos, es la figura que lidera los equipos. Su misión es que los grupos de trabajo alcancen sus metas hasta llegar a la fase de "sprint final", eliminando cualquier dificultad que puedan encontrar en el camino.</p>

            </div>


            <div class="p1" id="indice4">
            	<img src="Pag Imagenes\Cientifico-de-Datos.jpg" class="img-text">
            	<h1>Científico de Datos</h1><br>
            	<p>Es un campo interdisciplinario que involucra métodos científicos, procesos y sistemas para extraer conocimiento o un mejor entendimiento de la información en sus diferentes formas.</p><br></br>

				<p>Esta especialización es una continuación de algunos campos de análisis de datos como la estadística, la minería de datos, la matemática, la informática y la analítica predictiva.</p><br>

				<p>Se enfoca en el aprendizaje automático y métodos relacionados para comprender e indagar sobre fenómenos reales. En un contexto de abundancia de información, el gran desafío para las organizaciones es cómo usarla eficientemente para agregar valor al negocio.</p>
            </div>


            <div class="p1" id="indice5">
            	<img src="Pag Imagenes\DevOps.png" class="img-text">
            	<h1>Ingeniero DevOps</h1><br>
            	<p>Son los profesionales de la Tecnología de la Información (IT) que trabajan con desarrolladores de software, operadores de sistemas (SysOps) y otros especialistas de IT de producción para supervisar las publicaciones de códigos.</p>
            </div>


            <div class="p1" id="indice6">
            	<img src="Pag Imagenes\Analista-Datos.jpg" class="img-text">
            	<h1>Analista de Datos</h1><br>
            	<p>Este perfil se ha convertido en uno de los más demandados del sector IT. Su función es la de analizar de forma estadística información para establecer estrategias eficaces dentro de una empresa.</p>
            </div>


            <div class="p1" id="indice7">
            	<img src="Pag Imagenes\Desarrollador-JavaScript.jpg" class="img-text">
            	<h1>Desarrollador JavaScript</h1><br>
            	<p>JavaScript es un lenguaje indispensable en el desarrollo de proyectos web y aplicaciones, plataformas que están en el centro de la escena digital hoy en día.</p>
            </div>


            <div class="p1" id="indice8">
            	<img src="Pag Imagenes\4.0.jpg" class="img-text">
				<h1>Líderes en capacitaciones 4.0</h1><br>
            	<p>Está definido por profesionales, en su mayoría, adultos, que apoyan a quienes imparten conocimientos en instituciones educativas de distintos niveles.  La evidencia sugiere que estos perfiles pueden tener un impacto positivo en el logro académico ya que abren el camino para los nuevos empleos que está generando la economía del conocimiento.</p>
            </div>


            <div class="p1" id="indice9">
            	<img src="Pag Imagenes\inspector-calidad.jpg" class="img-text">
				<h1>Inspector de Control de Calidad</h1><br>
            	<p>Supervisan que los productos cumplan con las normas de calidad y seguridad, comprueban y examinan las muestras regularmente, además de realizar inspecciones visuales o controlar los procesos. Son quienes velan por entregar la mejor versión de un bien a los consumidores.  </p>
            </div>


            <div class="p1" id="indice10">
            	<img src="Pag Imagenes\Soporte.jpg" class="img-text">
				<h1>Especialista de Soporte de mesa de Ayuda</h1><br>
            	<p>Este profesional suele proporcionar soporte a los usuarios a través de varios canales, como números de teléfono gratuitos, sitios web, chat o mensajería instantánea, correo electrónico. Y lo hace con un doble foco: la asistencia puede apuntar al público externo como a empleados, de manera de brindar un asesoramiento integral.</p>
            </div>


            <div class="p1" id="indice11">
                  <img src="Pag Imagenes\customer-service-leader.jpg" class="img-text">
                        <h1>Customer service leader</h1><br>
                  <p>La atención al consumidor una de las especialidades más requeridas por las empresas en el ámbito local. Los roles de servicio al usuario son principalmente reactivos, giran en torno a atender quejas y reaccionar ante los desafíos impuestos por un cliente que está cada vez más informado y que, por ende, es más exigente.</p>
            </div>


            <div class="p1" id="indice12">
            	<img src="Pag Imagenes\ventas-online.jpg" class="img-text">
				<h1>Ejecutivo para ventas online</h1><br>
            	<p>En todo el mundo, los representantes de comercializar un producto o servicio son muy demandados. Son el eslabón clave en la cadena de valor: el que logra la compra efectiva. Y toda empresa necesita los necesita para:<br>
* Buscar clientes y compradores potenciales<br>
* Explicar a nuevos consumidores los beneficios de los productos, bienes y servicios<br>
* Brindar servicio a los clientes actuales<br>
* Guiar los en todas las fases del ciclo de ventas<br>
* Comercializar por Internet<br>
* Trabajar con la organización para garantizar la satisfacción del consumidor<br>
* Resolver los reclamos, investigando los problemas, desarrollando soluciones y elaborando informes<br>
* Seguir el volumen, números y márgenes de ventas revisando los informes correspondientes<br>
* Cumplir con márgenes de ventas semanales, trimestrales, mensuales y anuales</p>
            </div>



            <div class="p1">
                  <iframe width="810" height="565" src="https://www.youtube.com/embed/dY0Q7oVEn_U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="p1" id="indice13">
            <h1>Bibliografia</h1><br>
                  <ul>
                        <li ><a href="https://www.iproup.com/empleo/10426-tecnologia-diseno-internet-de-las-cosas-Argentina-2020-las-profesiones-mas-solicitadas-por-empresas"></a>https://www.iproup.com/empleo/10426-tecnologia-diseno-internet-de-las-cosas-Argentina-2020-las-profesiones-mas-solicitadas-por-empresas</li>
                        <li ><a href="https://www.lanacion.com.ar/economia/trabajo-cuales-son-cinco-sectores-mas-empleados-nid2322217">https://www.lanacion.com.ar/economia/trabajo-cuales-son-cinco-sectores-mas-empleados-nid2322217</a></li>
                        <li ><a href="https://www.crowdlending.es/blog/que-es-fintech">https://www.crowdlending.es/blog/que-es-fintech</a></li>
                        <li ><a href="https://www.doofinder.com/es/blog/que-es-e-commerce">https://www.doofinder.com/es/blog/que-es-e-commerce</a></li>
                        <li ><a href="https://www.infotecarios.com/algunos-retos-en-la-economia-del-conocimiento/#.XuJqcCJKjIV">https://www.infotecarios.com/algunos-retos-en-la-economia-del-conocimiento/#.XuJqcCJKjIV</a></li>
                  </ul>
            </div>
      	</section>	
		<aside>
            <div class="contenedor">
                  <nav class="menu">
			<p>Trabajo de Interes </p><br>
				
                        <ul>
                              <li><a href="#indice1">La Selección de LinkedIn</a></li><br>

                              <li><a href="#indice2">Desarrollador Back-End</a></li><br>

                              <li><a href="#indice3">Scrum Master</a></li><br>

                              <li><a href="#indice4">Científico de Datos</a></li><br>

                              <li><a href="#indice5">Ingeniero DevOps</a></li><br>  

                              <li><a href="#indice6">Analista de Datos</a></li><br>
                              
                              <li><a href="#indice7">Desarrollador JavaScript</a></li><br>   

                              <li><a href="#indice8">Líderes en capacitaciones 4.0</a></li><br>
                              
                              <li><a href="#indice9">Inspector de Control de Calidad</a></li><br>

                              <li><a href="#indice10">Especialista de Soporte de mesa de Ayuda</a></li><br>

                              <li><a href="#indice11">Customer service leader</a></li><br> 

                              <li><a href="#indice12">Ejecutivo para ventas online</a></li><br>
                              
                              <li><a href="#indice13">Bibliografia</a></li><br>                            
                        </ul>
                        </nav>
			</div>
            </div>
		</aside>
	</body>
</html>