<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/recGestionFrais.php';
if($etat){
?>


<head> <style type="text/css" media="all">
	.cachediv {
display: none;
}
</style>
<script type="text/javascript">

	function DivStatus( nom, numero )
		{
			var divID = nom + numero;
			if ( document.getElementById && document.getElementById( divID ) ) // Pour les navigateurs récents
				{
					Pdiv = document.getElementById( divID );
					PcH = true;
		 		}
			else if ( document.all && document.all[ divID ] ) // Pour les veilles versions
				{
					Pdiv = document.all[ divID ];
					PcH = true;
				}
			else if ( document.layers && document.layers[ divID ] ) // Pour les très veilles versions
				{
					Pdiv = document.layers[ divID ];
					PcH = true;
				}
			else
				{
					
					PcH = false;
				}
			if ( PcH )
				{
					Pdiv.className = ( Pdiv.className == 'cachediv' ) ? '' : 'cachediv';
				}
		}
		
	
	function MontreTout( nom,NumDiv )
		{	
			
			if ( document.getElementById ) // Pour les navigateurs récents
				{
							SetDiv = document.getElementById( nom + NumDiv );
							if ( SetDiv && SetDiv.className != '' )
								{
									DivStatus( nom, NumDiv );
									
									for (NumDi = 1; NumDi < 5; NumDi++)
						{ 
						
						if(NumDi==NumDiv){
						NumDi++;
						}
							SetDiv = document.getElementById( nom + NumDi );
							if ( SetDiv && SetDiv.className != 'cachediv' )
								{
									DivStatus( nom, NumDi );
								}
							
						}
								}
						
						
				}
			
		}
		//
			function Monnaie(){
    var Monnaiexh = null;
        if(window.XMLHttpRequest) 
        Monnaiexh = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        Monnaiexh = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        Monnaiexh = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    Monnaiexh= false;
    }
    return Monnaiexh;
    }
  
    function changemonnaie(abr){
    var Monnaiexh = Monnaie();

    Monnaiexh.onreadystatechange = function(){
	
    if(Monnaiexh.readyState == 4 && Monnaiexh.status == 200)
        {
    leselect = Monnaiexh.responseText;
	mdiv=document.getElementById(message);
	
	}
    }
	
    // Ici on va voir comment faire du post
    Monnaiexh.open("POST","verification_donne.php",true);
	
    Monnaiexh.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	
abs=document.getElementById(abr.id).value ;
    Monnaiexh.send("Monnaie="+abs);
    }

		
	function findordre(){
    var ordre = null;
        if(window.XMLHttpRequest) 
        ordre = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        ordre = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        ordre = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    ordre= false;
    }
    return ordre;
    }
  
    function findordr(c,b){
	
    var ordre = findordre();

    ordre.onreadystatechange = function(){
	
    if(ordre.readyState == 4 && ordre.status == 200)
        {
	
    leselect = ordre.responseText;
   document.getElementById("centent").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    ordre.open("POST","verification_donne2.php",true);
	
    ordre.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	
	cb=document.getElementById("search").value;
	indice=c;
	max=document.getElementById("max").value;
	
ordre.send("search_Tax="+cb+"&indice="+indice+"&ordre="+b+"&max="+max);

    }
		function findfraise(){
    var frais = null;
        if(window.XMLHttpRequest) 
        frais = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        frais = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        frais = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    frais= false;
    }
    return frais;
    }
  
    function findfrais(c,b){
	
    var frais = findfraise();

    frais.onreadystatechange = function(){
	
    if(frais.readyState == 4 && frais.status == 200)
        {
	
    leselect = frais.responseText;
   document.getElementById("centente").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    frais.open("POST","verification_donne2.php",true);

    frais.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	
	cb=document.getElementById("searche").value;
	indice=c;
	max=document.getElementById("maxx").value;
	
frais.send("search_frais="+cb+"&indice="+indice+"&ordre="+b+"&max="+max);
    }
</script></head>
<?php
include ("Connection.php");
$s=mysql_query("select * from default_billing ");
require'views/viewGestionFrais.php';

?>
	
<?php }  else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>