<?php

require('fpdf17/fpdf.php');
include('fpdf17/font/courier.php');
include('fpdf17/font/helvetica.php');
include('fpdf17/font/times.php');

class PDF_Invoice extends FPDF
{

function NbLines($w,$txt)
{
    //Calcule le nombre de lignes qu'occupe un MultiCell de largeur w
    $cw=&$this->CurrentFont['cw'];
    if($w==0)
        $w=$this->w-$this->rMargin-$this->x;
    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
    $s=str_replace("\r",'',$txt);
    $nb=strlen($s);
    if($nb>0 and $s[$nb-1]=="\n")
        $nb--;
    $sep=-1;
    $i=0;
    $j=0;
    $l=0;
    $nl=1;
    while($i<$nb)
    {
        $c=$s[$i];
        if($c=="\n")
        {
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
        }
        if($c==' ')
            $sep=$i;
        $l+=$cw[$c];
        if($l>$wmax)
        {
            if($sep==-1)
            {
                if($i==$j)
                    $i++;
            }
            else
                $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
        }
        else
            $i++;
    }
    return $nl;
}
// variables privées
var $colonnes;
var $format;
var $angle=0;
	var $ProcessingTable=false;
	var $aCols=array();
	var $TableX;
	var $HeaderColor;
	var $RowColors;
	var $ColorIndex;
// fonctions privées
function RoundedRect($x, $y, $w, $h, $r, $style = '')
{
	$k = $this->k;
	$hp = $this->h;
	if($style=='F')
		$op='f';
	elseif($style=='FD' || $style=='DF')
		$op='B';
	else
		$op='S';
	$MyArc = 4/3 * (sqrt(2) - 1);
	$this->_out(sprintf('%.2F %.2F m',($x+$r)*$k,($hp-$y)*$k ));
	$xc = $x+$w-$r ;
	$yc = $y+$r;
	$this->_out(sprintf('%.2F %.2F l', $xc*$k,($hp-$y)*$k ));

	$this->_Arc($xc + $r*$MyArc, $yc - $r, $xc + $r, $yc - $r*$MyArc, $xc + $r, $yc);
	$xc = $x+$w-$r ;
	$yc = $y+$h-$r;
	$this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-$yc)*$k));
	$this->_Arc($xc + $r, $yc + $r*$MyArc, $xc + $r*$MyArc, $yc + $r, $xc, $yc + $r);
	$xc = $x+$r ;
	$yc = $y+$h-$r;
	$this->_out(sprintf('%.2F %.2F l',$xc*$k,($hp-($y+$h))*$k));
	$this->_Arc($xc - $r*$MyArc, $yc + $r, $xc - $r, $yc + $r*$MyArc, $xc - $r, $yc);
	$xc = $x+$r ;
	$yc = $y+$r;
	$this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$yc)*$k ));
	$this->_Arc($xc - $r, $yc - $r*$MyArc, $xc - $r*$MyArc, $yc - $r, $xc, $yc - $r);
	$this->_out($op);
}

function _Arc($x1, $y1, $x2, $y2, $x3, $y3)
{
	$h = $this->h;
	$this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c ', $x1*$this->k, ($h-$y1)*$this->k,
						$x2*$this->k, ($h-$y2)*$this->k, $x3*$this->k, ($h-$y3)*$this->k));
}

function Rotate($angle, $x=-1, $y=-1)
{
	if($x==-1)
		$x=$this->x;
	if($y==-1)
		$y=$this->y;
	if($this->angle!=0)
		$this->_out('Q');
	$this->angle=$angle;
	if($angle!=0)
	{
		$angle*=M_PI/180;
		$c=cos($angle);
		$s=sin($angle);
		$cx=$x*$this->k;
		$cy=($this->h-$y)*$this->k;
		$this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm',$c,$s,-$s,$c,$cx,$cy,-$cx,-$cy));
	}
}

function _endpage()
{
	if($this->angle!=0)
	{
		$this->angle=0;
		$this->_out('Q');
	}
	parent::_endpage();
}

// fonctions publiques
function sizeOfText( $texte, $largeur )
{
	$index    = 0;
	$nb_lines = 0;
	$loop     = TRUE;
	while ( $loop )
	{
		$pos = strpos($texte, "\n");
		if (!$pos)
		{
			$loop  = FALSE;
			$ligne = $texte;
		}
		else
		{
			$ligne  = substr( $texte, $index, $pos);
			$texte = substr( $texte, $pos+1 );
		}
		$length = floor( $this->GetStringWidth( $ligne ) );
		$res = 1 + floor( $length / $largeur) ;
		$nb_lines += $res;
	}
	return $nb_lines;
}

// Cette fonction affiche en haut, a gauche,
// le nom de la societe dans la police times-12-Bold
// les coordonnees de la societe dans la police times-10
function addSociete( $nom, $adresse )
{
	$x1 = 8;
	$y1 = 25;
	//Positionnement en bas
	$this->SetXY( $x1, $y1 );
	$this->SetFont('times','B',12);
	$length = $this->GetStringWidth( $nom );
	$this->Cell( $length, 2, $nom);
	$this->SetXY( $x1, $y1 + 4 );
	$this->SetFont('times','',10);
	$length = $this->GetStringWidth( $adresse );
	//Coordonnées de la société
	$lignes = $this->sizeOfText( $adresse, $length) ;
	$this->MultiCell($length, 4, $adresse);
}

function Footer()
{
include('Connection.php');
$req_cli = mysql_query('select * from entreprise');
$admin= mysql_fetch_array($req_cli);
//Positionnement à 1,5 cm du bas
$this->SetY(-15);
//Police Arial italique 8
$this->SetFont('Arial','I',7);
//Numéro de page
$this->Cell(0,10,"$admin[9]",0,0,'C');
}
//fournisseur
function addProvider( $nom, $adresse)
{
	$x1 = $this-> w -200;
	$y1 = 22;
	//Positionnement en bas
	$this->SetXY( $x1, $y1 );
	$this->SetFont('times','B',12);
	$length = $this->GetStringWidth( $nom );
	$this->Cell( $length, 2, $nom);
	$this->SetXY( $x1, $y1 + 4 );
	$this->SetFont('times','',10);
	$length = $this->GetStringWidth( $adresse );
	//Coordonnées de la société
	$lignes = $this->sizeOfText( $adresse, $length) ;
	$this->MultiCell($length, 4, $adresse);
}
// Affiche en haut, a droite le libelle
// (FACTURE, DEVIS, Bon de commande, etc...)
// et son numero
// La taille de la fonte est auto-adaptee au cadre
function fact_dev( $libelle, $num,$name,$city,$cli,$adr)
{
    $r1  = $this->w - 140;
    $r2  = $r1 + 68;
    $y1  = 90;
    $y2  = $y1 - 60;
    $mid = ($r1 + $r2 ) / 2;
    
    $texte  = $libelle ;    
    $szfont = 21;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
       $this->SetFont( "times", "B", $szfont );
       $sz = $this->GetStringWidth($texte);
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

	$this->SetFont('Arial','',10);
	 $this->SetXY(95, 55);
    $this->Cell(6,5, utf8_decode("$cli :$name"), 0, 0, "C" );
	$this->Ln();
	$this->SetFont('Arial','',10);
	 $this->SetXY(90,60);
	$this->Cell(6,5, utf8_decode("$adr :$city"), 0, 0, "C" );
	$this->Ln();
    $this->SetXY(90, 65);
    $this->Cell(6,5, utf8_decode($texte), 0, 0, "C" );
	 
	 $this->SetXY( 95, 70);
	 $this->SetFont('Arial','',7);
    $this->Cell(6,5, utf8_decode($num), 0, 0, "C" );
}

// Affiche un cadre avec la date de la facture / devis
// (en haut, a droite)
function addDate( $date )
{
	$r1  = 10;
	$r2  = $r1 +60;
	$y1  = 95;
	$y2  = $y1 +10;
	$mid = $y1 + (($y2-$y1) / 2);
	$this->RoundedRect($r1, $y1, ($r2 - $r1), ($y2-$y1), 2.5, 'D');
	$this->Line( $r1, $mid, $r2, $mid);
	$this->SetXY( $r1 + ($r2-$r1)/2 - 5, $y1 );
	$this->SetFont( "times", "B", 10);
	$this->Cell(10,5, "Date de Creation", 0, 0, "C");
	$this->SetXY( $r1 + ($r2-$r1)/2 - 5, $y1 + 5 );
	$this->SetFont( "times", "", 10);
	$this->Cell(10,5,$date, 0,0, "C");
}
// Affiche un cadre avec la date d'echeance
// (en haut, au centre)
function addEcheance( $date )
{
	$r1  = $this-> w- 75;
	$r2  = $r1 + 60;
	$y1  = 95;
	$y2  = $y1+10;
	$mid = $y1 + (($y2-$y1) / 2);
	$this->RoundedRect($r1, $y1, ($r2 - $r1), ($y2-$y1), 2.5, 'D');
	$this->Line( $r1, $mid, $r2, $mid);
	$this->SetXY( $r1 + ($r2 - $r1)/2 - 5 , $y1+1 );
	$this->SetFont( "times", "B", 10);
	$this->Cell(10,4, "DATE D'ECHEANCE", 0, 0, "C");
	$this->SetXY( $r1 + ($r2-$r1)/2 - 5 , $y1 + 5 );
	$this->SetFont( "times", "", 10);
	$this->Cell(10,5,$date, 0,0, "C");
}
// trace le cadre des colonnes du devis/facture
function addCols( $tab )
{
	global $colonnes;
	
	$r1  = 10;
	$r2  = $this->w - ($r1 * 2) ;
	$y1  = 100;
	$y2  = $this->h - 150 - $y1;
	$this->SetXY( $r1, $y1 );
	$this->RoundedRect( $r1, $y1, $r2, $y2, "D");
	$this->Line( $r1, $y1+6, $r1+$r2, $y1+6);
	$colX = $r1;
	$colonnes = $tab;
	while ( list( $lib, $pos ) = each ($tab) )
	{
		$this->SetXY( $colX, $y1+2 );
		$this->Cell( $pos, 1, $lib, 0, 0, "C");
		$colX += $pos;
		$this->Line( $colX, $y1, $colX, $y1+$y2);
	}
}

// mémorise le format (gauche, centre, droite) d'une colonne
function addLineFormat( $tab )
{
	global $format, $colonnes;
	
	while ( list( $lib, $pos ) = each ($colonnes) )
	{
		if ( isset( $tab["$lib"] ) )
			$format[ $lib ] = $tab["$lib"];
	}
}

function addLine( $ligne, $tab )
{
	global $colonnes, $format;

	$ordonnee     = 10;
	$maxSize      = $ligne;

	reset( $colonnes );
	while ( list( $lib, $pos ) = each ($colonnes) )
	{
		$longCell  = $pos -2;
		$texte     = $tab[ $lib ];
		$length    = $this->GetStringWidth( $texte );
		$tailleTexte = $this->sizeOfText( $texte, $length );
		$formText  = $format[ $lib ];
		$this->SetXY( $ordonnee, $ligne-1);
		$this->MultiCell( $longCell, 4 , $texte, 0, $formText);
		if ( $maxSize < ($this->GetY()  ) )
			$maxSize = $this->GetY() ;
		$ordonnee += $pos;
	}
	return ( $maxSize - $ligne );
}
function addtotalfact($tva,$tt,$m,$net)
{
	$r1  = $this->w - 80;
	$r2  = $r1 + 75;
	$y1  = $this->h - 110;
	$y2  = $y1+20;
	$this->RoundedRect($r1, $y1, ($r2 - $r1), ($y2-$y1), 2.5, 'D');
	$this->Line( $r1+30,  $y1, $r1+30, $y2); // ligne vertical 
	$this->Line( $r1, $y1+13, $r2, $y1+13); // avant total TTC
	$this->Line( $r1+30,  $y1+7, $r2, $y1+7); // Entre tva & total
	$this->SetFont( "times", "B", 7);
	$this->SetXY( $r1+42, $y1+3 );
	$this->Cell(15,4, $tva."  ".$m, 0, 0, "R");
	$this->SetFont( "times", "B", 7);
	$this->SetXY( $r1+42, $y1+8 );
	$this->Cell(15,4,$tt."  ".$m, 0, 0, "R");
	
	$this->SetFont( "times", "B", 7);
	$this->SetXY( $r1+42, $y1+14 );
	$this->Cell(15,4,$net."  ".$m, 0, 0, "R");
	
	$this->SetFont( "times", "B", 7);
	$this->SetXY( $r1+4, $y1+3 );
	$this->Cell(10,4, "TOTAL NET", 0, 0, "L");
	$this->SetXY( $r1+4, $y1+8 );
	$this->Cell(10,4, "TOTAL TVA", 0, 0, "L");
	$this->SetXY( $r1+4, $y1+14 );
	$this->Cell(10,4, "NET A PAYER", 0, 0, "L");
}

// Permet de rajouter un commentaire (Devis temporaire, REGLE, DUPLICATA, ...)
// en sous-impression
// ATTENTION: APPELER CETTE FONCTION EN PREMIER
function temporaire( $texte )
{
	$this->SetFont('times','B',50);
	$this->SetTextColor(203,203,203);
	$this->Rotate(45,55,190);
	$this->Text(55,120,$texte);
	$this->Rotate(0);
	$this->SetTextColor(0,0,0);
}
function Header()
	{
		//Imprime l'en-tête du tableau si nécessaire
		if($this->ProcessingTable)
			$this->TableHeader();
	}

	function TableHeader()
	{
		$this->SetFont('times','B',8);
		$this->SetXY(10,75);
		$fill=!empty($this->HeaderColor);
		if($fill)
			$this->SetFillColor($this->HeaderColor[0],$this->HeaderColor[1],$this->HeaderColor[2]);
		foreach($this->aCols as $col)
			$this->Cell($col['w'],7,$col['c'],1,0,'C',$fill);
		$this->Ln();
	}

	function Row($data,$i)
	{
	include('Connection.php');
//$Reff=$data['facture'];
   $f=$data['code'];
   $tfs=mysql_query("select TOTAL_COM from vuepurchasetotale where BonCommande='$f'");
   $tt=mysql_fetch_array($tfs);
   if($tt['TOTAL_COM']<0){
   $rest=$tt['TOTAL_COM']+$data['valeur_payer'] ;
   }else{
   $rest=$tt['TOTAL_COM']-$data['valeur_payer'] ;
   }
  
//$MN=mysql_query("select TVA from  element_purchase where Reference='$Reff'");
//$MN1=mysql_fetch_array($MN);

		$this->SetX(10);
		$ci=$this->ColorIndex;
		$fill=!empty($this->RowColors[$ci]);
		if($fill)
			$this->SetFillColor($this->RowColors[$ci][0],$this->RowColors[$ci][1],$this->RowColors[$ci][2]);
		$x = $this->x;
$y = $this->y;
$nln=0;
$push_right = 0;
$nln1=$this->NbLines(20,$data['code']);
$nln2=$this->NbLines(30,$data['date_lancement']);
$nln3=$this->NbLines(30,$data['date_paiement']);
$nln4=$this->NbLines(30,$data['echue']);
$nln5=$this->NbLines(30,$data['monnaie']);
$nln6=$this->NbLines(50,$rest);
 $nln=max($nln1,$nln2,$nln3,$nln4,$nln5,$nln6);

$this->MultiCell($w = 20,5*$nln,utf8_decode($data['code']),1,'LT',6);

$push_right += $w;
$this->SetXY($x + $push_right, $y);
$this->MultiCell($w = 30,5*$nln,$data['date_lancement'],1,'C',1);

$push_right += $w;
$this->SetXY($x + $push_right, $y);

$this->MultiCell($w = 30,5*$nln,$data['date_paiement'],1,'C',1);

$push_right += $w;
$this->SetXY($x + $push_right, $y);

$this->MultiCell($w = 30,5*$nln,$data['echue'],1,'C',1);

$push_right += $w;
$this->SetXY($x + $push_right, $y);

$this->MultiCell($w = 30,5*$nln,$data['monnaie'],1,'C',1);

$push_right += $w;
$this->SetXY($x + $push_right, $y);

$this->MultiCell(50,5*$nln,number_format($rest*-1,2,',','.'),1,'C',1);

		/*
		foreach($this->aCols as $col)
		if($col['f']=="desig" || $col['f']=="qte"){
			$this->Cell($col['w'],7,$data[$col['f']],'LRB',0,$col['a'],true);
			}else{
			$this->Cell($col['w'],7,utf8_decode($data[$col['f']])." ".$MN1[0],'LRB',0,$col['a'],$fill);
			}
		$this->Ln();
		
		$this->ColorIndex=1-$ci;
		*/
	}

	function CalcWidths($width,$align)
	{
		//Calcule les largeurs des colonnes
		$TableWidth=0;
		foreach($this->aCols as $i=>$col)
		{
			$w=$col['w'];
			if($w==-1)
				$w=$width/count($this->aCols);
			elseif(substr($w,-1)=='%')
				$w=$w/200*$width;
			$this->aCols[$i]['w']=$w;
			$TableWidth+=$w;
		}
		//Calcule l'abscisse du tableau
		if($align=='C')
			$this->TableX=max(($this->w-$TableWidth)/2,0);
		elseif($align=='R')
			$this->TableX=max($this->w-$this->rMargin-$TableWidth,0);
		else
			$this->TableX=$this->lMargin;
	}

	function AddCol($field=-1,$width=-1,$caption='',$align='L')
	{
		//Ajoute une colonne au tableau
		if($field==-1)
			$field=count($this->aCols);
		$this->aCols[]=array('f'=>$field,'c'=>$caption,'w'=>$width,'a'=>$align);
	}

	function Table($query,$prop=array())
	{
		//Exécute la requête
		$res=mysql_query($query) or die('Erreur: '.mysql_error()."<BR>Requête: $query");
		//Ajoute toutes les colonnes si aucune n'a été définie
		if(count($this->aCols)==0)
		{
			$nb=mysql_num_fields($res);
			for($i=0;$i<$nb;$i++)
				$this->AddCol();
		}
		//Détermine les noms des colonnes si non spécifiés
		foreach($this->aCols as $i=>$col)
		{
			if($col['c']=='')
			{
				if(is_string($col['f']))
					$this->aCols[$i]['c']=ucfirst($col['f']);
				else
					$this->aCols[$i]['c']=ucfirst(mysql_field_name($res,$col['f']));
			}
		}
		//Traite les propriétés
		if(!isset($prop['width']))
			$prop['width']=0;
		if($prop['width']==0)
			$prop['width']=$this->w-$this->lMargin-$this->rMargin;
		if(!isset($prop['align']))
			$prop['align']='C';
		if(!isset($prop['padding']))
			$prop['padding']=$this->cMargin;
		$cMargin=$this->cMargin;
		$this->cMargin=$prop['padding'];
		if(!isset($prop['HeaderColor']))
			$prop['HeaderColor']=array();
		$this->HeaderColor=$prop['HeaderColor'];
		if(!isset($prop['color1']))
			$prop['color1']=array();
		if(!isset($prop['color2']))
			$prop['color2']=array();
		$this->RowColors=array($prop['color1'],$prop['color2']);
		//Calcule les largeurs des colonnes
		$this->CalcWidths($prop['width'],$prop['align']);
		//Imprime l'en-tête
		$this->TableHeader();
		//Imprime les lignes
		$this->SetFont('times','B',6);
		$this->ColorIndex=0;
		$this->ProcessingTable=true;
		$i=0;
		while($row=mysql_fetch_array($res)){
		$i++;
			$this->Row($row,$i);
			}
		$this->ProcessingTable=false;
		$this->cMargin=$cMargin;
		$this->aCols=array();
	}

}


