<?
setcookie("visited", "1", time()+3600*3); 
 //Wysy�a cookie na komputer u�ytkownika
?>


<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian = strpos($_SERVER['HTTP_USER_AGENT'],"SymbianOS");
if ($iphone || $android || $palmpre || $ipod || $berry || $symbian == true){
echo "<script>window.location='http://m.aumatic.pl'</script>";
}
?>


<script type="text/javascript" src="whcookies.js"></script>

<html style="background: url('grafika/tlo.png');">
<head>
<link rel="shortcut icon" href="grafika/ikona_strony.ico" />
<meta http-equiv="Content-Language" content="pl">
<META NAME="Keywords" CONTENT="
 
Polska, Poland, Polen, Krak�w, Cracovia, Krakow, Krakau, Skawina,
automatyka przemys�owa, automatyka, automation, automatisierung, industrial automation, automatisierungstechnik, autom�tica industrial,
systemy sterowania, sterowanie, steuerung, control, controls,
technika pomiarowa, pomiary, measuring, messen, messung,
technika nap�dowa, nap�dy, projektowanie, designing,
linie monta�owe, technika monta�u, maszyny pomiarowe, maszyny, construcci�n de m�quinas, construcci�n de l�neas de montaje, 
construcci�n de l�neas de producci�n, m�quinas y equipos para la industria,
diseno de m�quinas, sistemas de control, t�cnica de medici�n, 
t�cnica de accionamientos,
prototypy, programowanie, PLC, HMI, SPS, Rob�tica, programaci�n PLC, programaci�n hmi,
plc, sps, hmi, siemens, simatic,
s7-200, s7-300, s7-400, s7-1200, s7-1500, allen-bradley,
micrologix, compactlogix, slc500, controllogix, fanuc,
rexroth, labview, solidworks, inventor, Kinetix, Simotion
">

<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">

<title>Aumatic - Firma</title>

<link rel="stylesheet" href="style.css" type="text/css">
<!------------------STYLE------------------------------>

<script src="js/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!--------------------OBSLUGA JQUERY-------------------------------->

<script src="js/button_bar.js"></script>
<!--------OBSLUGA LATAJACEGO MENU------>


<script type="text/javascript" src="vegas/jquery.vegas.js"></script>
<link rel="stylesheet" href="vegas/jquery.vegas.css" type="text/css" />



<script type="text/javascript">
    $.vegas({
    src:'grafika/vegas/background_firma.png',
    fade:5000 // milliseconds
    });
</script>
<!----------------------------------------------------OBSLUGA T�A VEGAS---------------------------------------------->

</head>
<body>

	<script src="js/modernizr.custom.js"></script>
	<link rel="shortcut icon" href="img/demopage/favicon.ico">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">
	<link rel="stylesheet" href="css/lightbox.css" media="screen"/>

<!-------------------------------------------------------OBSLUGA GALERII---------------------------------------------->

<!---------------DIV BANNER POCZATEK------------------->
<div id="top">
<div class="div_banner" style="background: url('banner.png')">
<div class="flagi" >
<a href="index.php" ><img src="grafika/flags/pl.png"></a>
<a href="index_gb.html"><img src="grafika/flags/gb.png"></a>
<a href="index_de.html"><img src="grafika/flags/de.png"></a>
<a href="index_fr.html"><img src="grafika/flags/fr.png"></a>
<a href="index_es.html"><img src="grafika/flags/es.png"></a>
</div>

<a href="PL/unia.html"><img src="grafika/unia/unia.jpg" class="unia"></a>
<img src="grafika/flags/iso.png" class="iso_banner_unia">

<div class="automatyka">
<div class="automatyka_przemyslowa">Automatyka przemys�owa</div>
<div class="maszyny_montazowe">Maszyny monta�owe, testowe i pomiarowe dla przemys�u</div>
</div>
</div>
<!--<img src="grafika/tuv.png" style="width: 200px; float:right; position:relative; bottom: 190px;">-->

</div>

<!----------------DIV BANNER KONIEC-------------------->




<!------------------------------------------BUTTON BAR POCZATEK---------------------------------------------------->
<div id="menu" class="static">


<center>

 <ul style="width: 970px">
  <li style="background: url('active.png'); height: 41px;"><a href="index.php"><font color='#3a3a3a'>FIRMA</font></a></li>
  <li><a href="PL/struktura.html">STRUKTURA</a></li>
  <li><a href="PL/produkty.html">PRODUKTY</a></li>
  <li><a href="PL/technologie.html">TECHNOLOGIE</a></li>
  <li><a href="PL/klienci.html">KLIENCI</a></li>
  <li><a href="PL/kontakt.html">KONTAKT</a></li>
  <li><a href="PL/kariera.html">KARIERA</a></li>
  <li style="border-right:1px solid black;"><a href="PL/ogloszenia.html">OG�OSZENIA</a></li>
</ul> 

</center>



</div>
<!------------------------------------------BUTTON BAR KONIEC----------------------------------------------------->
<!------------------------------------------CONTAINER POCZATEK---------------------------------------------------->
<div id="bottom" style="opacity: 0.8;">

<div class="txt1"> 

<br>
<p style="text-indent: 8% ; margin-top: 4px; margin-bottom: 8px; line-spacing:single"> 
Aumatic jest firm� zajmuj�c� si� projektowaniem i budow� maszyn oraz linii monta�owych.
Firma wykonuje pojedyncze stanowiska monta�owe oraz kompletne linie technologiczne - projektowane wed�ug wymaga� klienta - na bazie 
w�asnych projekt�w lub zleconej dokumentacji.</p>

<p style="text-indent: 8% ; margin-top: 0px; margin-bottom: 8px; line-spacing:single"> 
Aby sprosta� tym wymaganiom otrzymane zlecenia realizujemy w oparciu o w�asn� kadr� in�yniersk� oraz do�wiadczonych 
i wykwalifikowanych pracownik�w na ka�dym etapie produkcji.
Posiadamy dobrze wyposa�ony warsztat narz�dziowy oraz niezb�dn� powierzchni� do budowania du�ych linii technologicznych.</p>

<p style="text-indent: 8% ; margin-top: 0px; margin-bottom: 8px; line-spacing:single"> 
Oferta nasza skierowana jest g��wnie do producent�w cz�ci i podzespo��w samochodowych, producent�w AGD
oraz przemys�u elektro-mechanicznego - jednocze�nie pozostajemy otwarci na wsp�prac� z firmami z innych ga��zi przemys�u. 
Standardowo do sterowania wykorzystujemy sterowniki PLC / PAC wiod�cych firm a do komunikacji z operatorem panele HMI. </p>

<p style="text-indent: 8% ; margin-top: 0px; margin-bottom: 8px; line-spacing:single"> 
Wykonujemy r�wnie� stanowiska zrobotyzowane, maszyny pomiarowe, testuj�ce i wymagaj�ce inspekcji wizyjnych
na bazie standardowych PLC lub PC w �rodowisku NI LabView, NI LabWindows�/CVI lub NI Measurement Studio.</p>

<p style="text-indent: 8% ; margin-top: 0px; margin-bottom: 12px; line-spacing:single"> 
Dodatkowo proponujemy Pa�stwu ofert� w�asnych system�w Traceability wsp�pracuj�cych z maszynami i liniami technologicznymi.</p>

<center>
<img src="grafika/firma.jpg">
</center>


<br>

Historia i wydarzenia z �ycia Firmy:<br><br>

<b>2003</b> � Powstanie Firmy<br>
<b>2004</b> � Wdro�enie w�asnego programu komputerowego do zarz�dzania zakupami, projektowaniem, produkcj�
i monta�em � SSP2<br>
<b>2005</b> � Pierwszy kontrakt zagraniczny<br>
<b>2006</b> � Uzyskanie Certyfikatu ISO 9001:2001 (obecnie ISO 9001:2008)<br>
<b>2008</b> � Linia monta�owa kolumny kierowniczej Mazda pokazana w TV - TVN Turbo program "Polak Potrafi" <br>(TRW Czechowice-Dziedzice) <a href="http://tvnplayer.pl/programy-online/polak-potrafi-odcinki,250/odcinek-12,S01E12,9374,ogladaj.html" target=_blank><img src="grafika/watch_film.gif"></a>(5:43 - 7:50) <br>
<b>2012</b> � Linia monta�owa modu��w BMW pokazana w TV - TVN Turbo program "Polak Potrafi" (Valeo Skawina) <a href ="http://tvnplayer.pl/programy-online/polak-potrafi-odcinki,250/odcinek-4,S09E04,11708,ogladaj.html"
target=_blank><img src="grafika/watch_film.gif"></a>(7:50 - 10:15)
<br>
<b>2012</b> � Migracja Dzia�u Konstrukcji Mechanicznej z programu Autodesk Inventor do SolidWorks<br>
<b>2013</b> � 10-lecie dzia�ania Firmy <img src="grafika/tort.gif"><br>
<b>2015</b> � Zrealizowali�my zlecenie o numerze A500 co oznacza, �e wyprodukowali�my ju� minimum 500 maszyn lub linii monta�owych<br><br>

<div style="width:700px; float:left">

Nasze Cele:<br><br>

<ul class="normal-list">
<li>Wype�nia� zapisy Ksi�gi Jako�ci ISO 9001.</li>
<li>By� liderem rynku w projektowaniu i budowie Urz�dze� Automatyki Przemys�owej.</li>
<li>W pe�ni zaspokaja� potrzeby klient�w poprzez dostarczanie najlepszych rozwi�za�.</li>
<li>Wdra�a� innowacyjne technologie.</li>
<li>Stale podnosi� jako�� wyrob�w.</li>
<li>Zmienia� Firm� na coraz bardziej przyjazn� �rodowisku.</li>
</ul>

</div>

<img src="grafika/tuv.png" style="width: 200px; float:right;">

<div class="image-row">
<div class="image-set">

<center>
<a class="example-image-link" href="grafika/cert_iso_PL_full_size.png" data-lightbox="example-3"><img class="example-image" src="grafika/iso.gif"
alt="thumb-1" width="332" height="468"/></a>
</center>

</div>
</div>



</div><!--/txt1-->
<br>
</div>
<!-------------------------------------------CONTAINER KONIEC----------------------------------------------------->
<?
if(file_exists("counter.n")) {
 //Sprawdza czy plik istnieje
   $file=fopen("counter.n", "r"); // otwiera plik
   flock($file, 1); // blokuje plik
    $ile=fgets($file, 100); 
 //Odczytuje warto�� z pliku counter.n
 
   flock($file, 3); // odblokowywuje plik
    fclose($file); //zamyka plik
     if($_COOKIE["visited"]!="1") 
 //Sprawdza, czy u�ytkownik by� na stronie
 {
$ile++; 
 //Zwi�ksza warto�� o jeden tylko po pierwszym wej�ciu
 
$plik_ip = fopen('ip.txt','r');
$ip = $_SERVER['REMOTE_ADDR'];
$data = date('Y-m-d H:i:s');
$data = $data."; ";
$ip = $ip."\r\n";
 

 
 
$jezyk = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5);
 
 
 }
}
 else
{
$ile=1; //je�li plik nie istnieje, wy�wietli si� 1
}
 
 //$file=fopen("counter.n", "w"); // otwiera plik do zapisu
  //flock($file, 2); // blokuje do zapisu
   //fwrite($file, $ile); //zapisuje warto��
  //flock($file, 3); // odblokowuje plik
// fclose($file); //zamyka plik
 
//echo($ile); //Wy�wietla warto��
?>
<!----------------------------------------OBSLUGA LICZNIKA------------------------------------------->
<div class="footer" >
<div style=" height:50px;">
Aumatic sp. z o.o.<br>
ul. Pi�sudskiego 22, 32-050 Skawina, Polska / Poland<br>
tel: +48 (12) 256-77-90 fax: +48 (12) 276-31-58<br>
</div>
</div>
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/lightbox-2.6.min.js"></script>
	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
	
<!------------------------------------------GALERIA WA�NE!!!!------------------------------------------------>

</body>
</html>