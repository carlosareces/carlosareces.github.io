<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
                              "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="em">  
      <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <link rel="stylesheet" href="css/v4.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />

            <title>Primera Jornada de Doctorandos de Computacion</title>
      </head>

      <body>
      <div id="pageWrapper">
      
      <hr class="hide" />
      
      <div id="masthead" class="inside">
            <h1>Primera Jornada de Doctorandos de Computaci&oacute;n <br/> FaMAF, Universidad Nacional de C&oacute;rdoba</h1>
            <h2>6 de Diciembre, 2010</h2>
      </div>

      <hr class="hide" />

      <div class="hnav"> 
      
     
      </div> <!-- End HNAV -->
      
      <div id="outerColumnContainer">
            <div id="innerColumnContainer">
            
                  <hr class="hide" />

                  <div id="leftColumn">
                        <div class="inside">
<div class="vnav">
	<h3></h3>
	<ul>
        <li><a href="index.php#introduccion">Introducción</a></li>
        <li><a href="index.php#participantes">Participantes</a></li>
        <li><a href="index.php#programa">Programa</a></li>
        <li><a href="wisdom.php">Wisdom</a></li>
    </ul>
		
        
</div> <!-- End VNAV -->

<br/>

</div> <!-- End INSIDE -->
                        
</div>

<hr class="hide" />

<div id="rightColumn">
<div class="inside">

</div>
</div>
<div id="contentColumn">
	<hr class="hide" />
	<a name="skipToContent"></a>
	<div class="inside">


<br/>


<?php 
function getRandomFromArray($ar) { 
    mt_srand( (double)microtime() * 1000000 ); 
    $num = array_rand($ar); 
    return $ar[$num]; 
} 

function getImagesFromDir($path) { 
    $images = array(); 
    if ( $img_dir = @opendir($path) ) { 
        while ( false !== ($img_file = readdir($img_dir)) ) { 
            // checks for gif, jpg, png 
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) { 
                $images[] = $img_file; 
            } 
        } 
        closedir($img_dir); 
    } 
    return $images; 
} 

$root = ''; 
// If images not in sub directory of current directory specify root  
//$root = $_SERVER['DOCUMENT_ROOT']; 

$path = 'pics/'; 

// Obtain list of images from directory  
$imgList = getImagesFromDir($root . $path); 

$img = getRandomFromArray($imgList); 

?>

<center>
<img src="<?php echo $path . $img ?>" alt="" />
</center>

<br/>
<center>
  Apretar [Reload] para otro. 
</center>
<br/>

<a href="http://www.phdcomics.com/">PhD-comic:</a> una fuente de comprensi&oacute;n en un oc&eacute;ano de 
incertidumbre. 
<br/>
(Se aceptan sugerencias de phd-comics, mandar imagen a carlos.areces AT gmail.com)
<br/>
<br/>

</div>
					</div>
					
          
<div class="clear mozclear"></div>
				</div>
			</div>
			<div class="hide" id="nsFooterClear"><!-- for NS4s sake --></div>
			<hr class="hide" />
			<div id="footer" class="inside">

<p style="margin:0;">
	<span style="color:#cc9;">
<a href="http://validator.w3.org/check/referer">
                 <img src="images/xhtml10.png" align="middle" alt="xhtml" width="80" height="15" style="border-width:0;"/>
             </a>
        &copy; 2010 Maintained by Areces. Last updated: 30-11-2010.
<a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img src="images/css.png"  align="middle" alt="CSS" width="80" height="15" style="border-width:0;"/>
             </a>
        </span>
</p>

			</div>
			<hr class="hide" />
		</div>
	</body>
</html>
