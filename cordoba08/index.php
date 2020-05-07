<!DOCTYPE html PUBLIC 
           "-//W3C//DTD XHTML 1.0 Transitional//EN" 
           "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <head>
    <meta name="verify-v1" content="qdriWngB5m+zqExgQL4Mlr6nLcPHvvNC6vaOslBWUA4=" /> 
    <meta name="description" content="Home Page of Carlos Areces" />
    <meta name="keywords" content="logic, hybrid logic, computational logics, modal logics" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <link rel="stylesheet" href="../css/general.css" type="text/css" />	  
    <title>Home Page of Carlos Areces</title>
  </head>

  <body class="index">

  <a name="top"></a>

    <div class="container"><!-- Header Starts Here -->
      <div class="header">
	  <img src="../images/menu-left.gif" alt="" width="743" height="23" />
	    <img src="../images/links-left.gif" 
                   alt="" width="743" height="25" />
      </div>
      <!-- Header Ends Here -->
       <div class="content">
	<!--main content starts here-->

   	   <div id="rightcontent"><div class="blog">
  <h1>Logica y Demostracion Automatica</h1>
  <div class="blogbody">

    <p>
     En este curso vamos
a dar una presentacion de distintas logicas (logica proposicional,
logicas hibridas, logicas para la descripcion, logica de primer
orden) y de distintos problemas de inferencia y metodos de solucion.
</p>

<p>
El curso consistira de clases teoricas y practicas.
Durante las clases practicas se haran demos de demostradores
para cada uno de los problemas de inferencia introducidos y se propondran
tareas a resolver para obtener experiencia `hands-on.'
    </p>

<dl>
<dt>
<strong>Miercoles: Logica Proposicional, Metodos Completos e Incompletos</strong>.
</dt>
<dd>
 Introduciremos la Logica Proposicional (LP) y el problema SAT: dada una formula
de LP decidir si existe una valuacion que la satisfaga.  Analizaremos la
complejidad del problema.  Introduciremos el metodo de David-Putnam como
metodo correcto y completo para SAT.  Haremos una demo del demostrador
<i>zchaff</i>. Introduciremos distintos metodos incompletos para SAT. Haremos una
demo del demostrador <i>walksat</i>.
</dd>

<dt>
<strong>Jueves: Logicas Hibridas y Model Checking</strong>
</dt>
<dd>
Introduciremos
la Logica Hibrida Basica y el problema de model checking: dada una formula y un modelo hibrido,
decidir que elementos del dominio del modelo satisfacen la formula.  Analizaremos la
complejidad del problema.  Daremos un algoritmo bottom-up para model checking
del lenguaje hibrido.  Haremos una demo del model checker <i>mcheck</i>.
</dd>

<dt>
<strong>Viernes: Description Logics y Tableaux</strong>
</dt>
<dd>
 Introduciremos
la Logica de Descripcion ALC y distintos problemas de inferencia
estandard en logicas para la descripcion (subsumption, instance checking, etc).
Analizaremos la complejidad de los distintos problemas.  Introdiciremos el
algoritmo de tableaux etiquetado para resolverlos.  Haremos una demo del
demostrador <i>racer</i>.
</dd>

<dt>
<strong>Sabado: Logica de Primer Orden y Resolucion</strong>
</dt>
<dd>
Introduciremos
la Logica de Primer Orden (LPO) y el problema de SAT para LPO.  Discutiremos la
no computabilidad del problema.  Introduciremos el metodo de resolucion como
metodo correcto y completo para decidir satisfacibilidad de formulas de LPO.
Haremos una demo del demostrador <i>spass</i>.
</dd>
</dl>
  </div>
</div>

<div class="blog">
  <h2>Slides</h2>
  <div class="blogbody">
  <p>
     El material del curso esta linkeado mas abajo.  Doy tambien versiones
     de los slides preparadas para imprimir (2x4 sin pausas), pero algunas
     animaciones funcionaran mal en esta presentacion.  En el siguiente
     link se dan todos los handouts en <a href="handout.pdf">un solo archivo</a>.
  </p>

      <div class="myul">
         <ul>
            <li><a href="cordoba08-1.pdf">Miercoles [draft]</a><br/>
                <a href="cordoba08-1-h.pdf">Handout #1 [draft]</a>
            </li>
            <li><a href="cordoba08-2.pdf">Jueves [draft]</a><br/>
                <a href="cordoba08-2-h.pdf">Handout #2 [draft]</a>
            </li>
            <li><a href="cordoba08-3.pdf">Viernes #3 [draft]</a><br/>
                <a href="cordoba08-3-h.pdf">Handout #3 [draft]</a>
            </li>
            <li><a href="cordoba08-4.pdf">Sabado #4 [draft]</a><br/>
                <a href="cordoba08-4-h.pdf">Handout #4 [draft]</a>
            </li>
        </ul>
      </div>

  <p>
    El siguiente material se usara en las secciones practicas.  Descargar
    <a href="cordoba08.tgz">el archivo .tgz</a> con el software y 
    <a href="ejercicios.pdf">el archivo .pdf</a> con los ejercicios.
  </p>

   </div>
</div>

<div class="blog">
  <h2>Bibliografia Adicional</h2>
  <div class="blogbody">
  <p>Los siguientes articulos pueden resultar interesantes.
  </p>

     <div class="myul">
         <ul>
            <li>"Seventy-Five Problemas for Testing Automatic Theorem Provers", F. Pelletier, Journal of Automated Reasoning 2 (1986) 191--216.<br/> <a href="Bib/75ATPproblems86.pdf">[pdf]</a>
            </li>
<!--            <li><a href="Bib/chap8.pdf">XXX</a>
            </li>-->
            <li>"The Search for Satisfaction", I. Gent and T. Walsh. Draft, 1999.<br/><a href="Bib/gent99search.pdf">[pdf]</a>
            </li>
            <li>"The SAT Phase Transition", I. Gent and T. Walsh, ECAI 94.<br/><a href="Bib/gent94sat.pdf">[pdf]</a>
            </li>
            <li>"On the stupid algorithm for satisfiability", I. Gent, Technical report, APES-03-1998.<br/><a href="Bib/apes-03-1998.pdf">[pdf]</a>
            </li>
            <li>"Common Syntax of the DFG-Schwerpunktprogramm `Deduktion'", R. Hahnle, M. Kerber, C. Weidenbach. Technical Report.<br/><a href="Bib/KA-96-10.pdf">[pdf]</a>
            </li>
            <li>"Resolution Strategies as Decision Procedures", W. Joyner, Journal
            of the ACM, Vol 23, No 3, 1976, 398--417.</br><a href="Bib/joyner.pdf">[pdf]</a>
            </li>
            <li>"Basic Description Logics", F. Baader and W. Nutt. Handbook of Description Logics.<br/><a href="Bib/dlhb-02.pdf">[pdf]</a>
            </li>
            <li>"Representation, Reasoning, and Relational Structures: a Hybrid Logic manifesto", P. Blackburn, Logic Journal of the IGPL, Vol 8, No 3, 2000, 339--365. <br/><a href="Bib/representation.pdf">[pdf]</a>
            </li>
            <li>"Model checking for hybrid logics (with an application to semistructured data)", M. Franceschet and M. de Rijke, Journal of Applied Logic, Vol 4, No 3, 2006, 279--304.<br/><a href="Bib/.pdf">[pdf]</a>
            </li>
        </ul>
      </div>

  </div>
</div>

<div id="copyright">
             <br />


<hr width="100%" size="-2"  />

<div style="text-align:right; font-size:xx-small; padding-bottom: 3px;">
&copy; 2004 Maintained by Carlos Areces. Last updated: 01-07-2019.
</div>

          </div>

        </div><!--rightcontent-->
      <!-- Leftcontent Starts Here -->
      <div class="leftcontent">
	    <center>
	        <a href="http://www.cs.famaf.unc.edu.ar/~careces"><img src="../images/carlos.jpg" alt= "[ -Myself- ]"/></a>
        </center>
        <center>
            <a class="side" href="../content/whoiam.php">Who I am</a>
	    </center>
	
	    <!-- Leftmenu Start Here -->
	    <div class="leftmenu">
	        <div class="sidetitle">Academic</div>
   	            <a class="side" href="http://liis.famaf.unc.edu.ar/">My Research Group</a><br />
                <a class="side" href="../content/papers/sort_date.php">My Papers</a><br />
              
            <div class="sidetitle">Things I'm doing</div>
                <a class="side" href="../infinis.php">INFINIS</a><br />
                <a class="side" href="http://www.meals-project.eu/">MEALS</a><br />
                <a class="side" href="http://hylo.loria.fr">Hybrid Logics Web Page</a><br />
                <a class="side" href="http://www.cs.famaf.unc.edu.ar/~careces/M4M">Methods for Modalities</a><br />
                
            <div class="sidetitle">Courses</div>
                <a class="side" href="http://cs.famaf.unc.edu.ar/~careces/ml18">Modal Logics @ Stanford</a><br />
                <a class="side" href="http://www.famaf.proed.unc.edu.ar/course/view.php?id=12">introalg</a><br />
                <a class="side" href="http://cs.famaf.unc.edu.ar/~careces/lm17">L&oacute;gicas Modales</a><br />
                <a class="side" href="../content/courses.php">Old Courses</a><br />

	    </div>
	    <!-- Leftmenu Ends Here -->
	    <br />
	</div>
    <!-- Leftcontent Ends Here -->   </div>
<p>
&nbsp;<br />
</p>
    </div>

  </body>
</html>
