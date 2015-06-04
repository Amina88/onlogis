<?php
require('fpdf17/fpdf.php');
include('fpdf17/font/courier.php');
include('fpdf17/font/helvetica.php');include('fpdf17/font/times.php');
class PDF_Invoice extends FPDF
{


var $colonnes;
var $format;
var $angle=0;
	var $ProcessingTable=false;
	var $aCols=array();
	var $TableX;
	var $HeaderColor;
	var $RowColors;
	var $ColorIndex;
	
	var $col = 0;
	var $etat = 0;

function SetCol($col)
{

    $this->col = $col;
    $x = 10+$col*65;
    $this->SetLeftMargin($x);
    $this->SetX($x);
}

function AcceptPageBreak()
{
    if($this->col<2)
    
    {

		
        $this->SetCol(0);
		$etat=1;
        return true;
    }
}



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


function addSociete( $nom, $adresse )
{
	$x1 = 15;
	$y1 = 30;

	$this->SetXY( $x1, $y1 );
	$this->SetFont('times','B',12);
	$length = $this->GetStringWidth( $nom );
	$this->Cell( $length, 2, $nom);
	$this->SetXY( $x1, $y1 + 4 );
	$this->SetFont('times','',10);
	$length = $this->GetStringWidth( $adresse );

	$lignes = $this->sizeOfText( $adresse, $length) ;
	$this->MultiCell($length, 4, $adresse);
}


function addProvider( $nom, $adresse )
{
	$x1 = $this-> w - 70;
	$y1 = 30;
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

function fact_dev( $libelle, $num )
{
    $r1  = $this->w - 140;
    $r2  = $r1 + 68;
    $y1  = 80;
    $y2  = $y1 - 71;
    $mid = ($r1 + $r2 ) / 2;
    
    $texte  = $libelle . "  " . $num;    
    $szfont = 12;
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

    $this->SetLineWidth(0.1);
    $this->SetFillColor(192);
    $this->RoundedRect($r1, $y1, ($r2 - $r1), $y2, 2.5, 'DF');
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1,5, utf8_decode($texte), 0, 0, "C" );
}


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
	$this->Cell(10,5, utf8_decode("Période financier"), 0, 0, "C");
	$this->SetXY( $r1 + ($r2-$r1)/2 - 5, $y1 + 5 );
	$this->SetFont( "times", "", 10);
	$this->Cell(10,5,$date, 0,0, "C");
}

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
	$this->Cell(10,4,utf8_decode("Date"), 0, 0, "C");
	$this->SetXY( $r1 + ($r2-$r1)/2 - 5 , $y1 + 5 );
	$this->SetFont( "times", "", 10);
	$this->Cell(10,5,$date, 0,0, "C");
}

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
		$this->Cell( $pos, 1, $lib, 0, 2, "C");
		$colX += $pos;
		$this->Line( $colX, $y1, $colX, $y1+$y2);
	}
}


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
	$r2  = $r1 + 60;
	$y1  = $this->h - 70;
	$y2  = $y1+20;
	$this->RoundedRect($r1, $y1, ($r2 - $r1), ($y2-$y1), 2.5, 'D');
	$this->Line( $r1+30,  $y1, $r1+30, $y2);
	$this->Line( $r1, $y1+13, $r2, $y1+13);
	$this->Line( $r1+30,  $y1+7, $r2, $y1+7); 
	$this->SetFont( "times", "B", 9);
	$this->SetXY( $r1+42, $y1+3 );
	$this->Cell(15,4, $tva."  ".$m, 0, 0, "R");
	$this->SetFont( "times", "B", 9);
	$this->SetXY( $r1+42, $y1+8 );
	$this->Cell(15,4,$tt."  ".$m, 0, 0, "R");
	
	$this->SetFont( "times", "B", 9);
	$this->SetXY( $r1+42, $y1+14 );
	$this->Cell(15,4,$net."  ".$m, 0, 0, "R");
	
	$this->SetFont( "times", "B", 10);
	$this->SetXY( $r1+4, $y1+3 );
	$this->Cell(20,4, "TOTAL NET", 0, 0, "L");
	$this->SetXY( $r1+4, $y1+8 );
	$this->Cell(20,4, "TOTAL TVA", 0, 0, "L");
	$this->SetXY( $r1+4, $y1+14 );
	$this->Cell(20,4, "NET A PAYER", 0, 0, "L");
}

function temporaire( $texte )
{
	$this->SetFont('times','B',50);
	$this->SetTextColor(203,203,203);
	$this->Rotate(45,55,50);
	$this->Text(55,190,$texte);
	$this->Rotate(0);
	$this->SetTextColor(0,0,0);
}

	function TableHeader()
	{
		$this->SetFont('times','B',10);
		$this->SetXY(10,120);
		$fill=!empty($this->HeaderColor);
		if($fill)
			$this->SetFillColor($this->HeaderColor[0],$this->HeaderColor[1],$this->HeaderColor[2]);
		foreach($this->aCols as $col)
			$this->Cell($col['w'],6,$col['c'],1,0,'C',$fill);
		$this->Ln();
	}

	function Row($data)
	{
		$this->SetX(10);
		$ci=$this->ColorIndex;
		$fill=!empty($this->RowColors[$ci]);
		if($fill)
			$this->SetFillColor($this->RowColors[$ci][0],$this->RowColors[$ci][1],$this->RowColors[$ci][2]);
		foreach($this->aCols as $col)
			$this->Cell($col['w'],5,$data[$col['f']],'LRB',0,$col['a'],$fill);
		$this->Ln();
		$this->ColorIndex=1-$ci;
	}

	function CalcWidths($width,$align)
	{
	
		$TableWidth=0;
		foreach($this->aCols as $i=>$col)
		{
			$w=$col['w'];
			if($w==-1)
				$w=$width/count($this->aCols);
			elseif(substr($w,-1)=='%')
				$w=$w/100*$width;
			$this->aCols[$i]['w']=$w;
			$TableWidth+=$w;
		}
	
		if($align=='C')
			$this->TableX=max(($this->w-$TableWidth)/2,0);
		elseif($align=='R')
			$this->TableX=max($this->w-$this->rMargin-$TableWidth,0);
		else
			$this->TableX=$this->lMargin;
	}

	function AddCol($field=-1,$width=-1,$caption='',$align='L')
	{
	
		if($field==-1)
			$field=count($this->aCols);
		$this->aCols[]=array('f'=>$field,'c'=>$caption,'w'=>$width,'a'=>$align);
	}

	function Table($query,$prop=array())
	{

		$res=mysql_query($query) or die('Erreur: '.mysql_error()."<BR>Requête: $query");

		if(count($this->aCols)==0)
		{
			$nb=mysql_num_fields($res);
			for($i=0;$i<$nb;$i++)
				$this->AddCol();
		}
		
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
	
		$this->CalcWidths($prop['width'],$prop['align']);
		
		$this->TableHeader();
		
		$this->SetFont('times','',9);
		$this->ColorIndex=0;
		$this->ProcessingTable=true;
		while($row=mysql_fetch_array($res))
			$this->Row($row);
		$this->ProcessingTable=false;
		$this->cMargin=$cMargin;
		$this->aCols=array();
	}
function Table1($querye,$propo=array())
	{
		$res=mysql_query($querye) or die('Erreur: '.mysql_error()."<BR>Requête: $querye");
		//Ajoute toutes les colonnes si aucune n'a été définie
		if(count($this->aCols)==0)
		{
			$nb=mysql_num_fields($res);
			for($i=0;$i<$nb;$i++)
				$this->AddCol();
		}
	
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
	
		if(!isset($propo['width']))
			$propo['width']=0;
		if($propo['width']==0)
			$propo['width']=$this->w-$this->lMargin-$this->rMargin;
		if(!isset($propo['align']))
			$propo['align']='C';
		if(!isset($propo['padding']))
			$propo['padding']=$this->cMargin;
		$cMargin=$this->cMargin;
		$this->cMargin=$propo['padding'];
		if(!isset($propo['HeaderColor']))
			$propo['HeaderColor']=array();
		$this->HeaderColor=$propo['HeaderColor'];
		if(!isset($propo['color1']))
			$propo['color1']=array();
		if(!isset($propo['color2']))
			$propo['color2']=array();
		$this->RowColors=array($propo['color1'],$propo['color2']);
		//Calcule les largeurs des colonnes
		$this->CalcWidths($propo['width'],$propo['align']);
		//Imprime l'en-tête
		$this->TableHeader();
	
		$this->SetFont('times','',9);
		$this->ColorIndex=0;
		$this->ProcessingTable=true;
		while($row=mysql_fetch_array($res))
			$this->Row($row);
		$this->ProcessingTable=false;
		$this->cMargin=$cMargin;
		$this->aCols=array();
	}
	
	



// Tableau coloré
function FancyTable($header, $data)
{

    $this->SetFillColor(30,127,203);
    $this->SetTextColor(255);
    $this->SetDrawColor(50,0,0);
    $this->SetLineWidth(0);
	$this->SetFont('','B',10);
  // En-tête
    $w = array(20,20, 25, 70, 10, 12, 40);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'L',true);
		
    $this->Ln();

    $this->SetFillColor(142,162,198);
    $this->SetTextColor(0);
    $this->SetFont('');
	$this->SetFont('Arial','',8);

    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[1],'L',0,'s',$fill);
        $this->Cell($w[1],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[2],6,$row[2],'LR',0,'l',$fill);
        $this->Cell($w[3],6,$row[3],'LR',0,'l',$fill);
        $this->Cell($w[4],6,$row[4],'LR',0,'l',$fill);
        $this->Cell($w[5],6,$row[5],'LR',0,'l',$fill);
        $this->Cell($w[6],6,$row[6],'LR',0,'l',$fill);
     $this->Ln();
        $fill = !$fill;
    }

    $this->Cell(array_sum($w),0,'','T');
}

function FancyTableResum($header, $data)
{
    // Couleurs, épaisseur du trait et police grasse
    $this->SetFillColor(30,127,203);
    $this->SetTextColor(255);
    $this->SetDrawColor(50,0,0);
    $this->SetLineWidth(0);
	$this->SetFont('','B',10);

    $w = array(45,40, 60,50);
    for($i=0;$i<count($header);$i++)
	if($i==count($header)-1){
        $this->Cell($w[$i],7,$header[$i],1,0,'R',true);
		}else{
        $this->Cell($w[$i],7,$header[$i],1,0,'L',true);
		}
    $this->Ln();

    $this->SetFillColor(142,162,198);
    $this->SetTextColor(0);
    $this->SetFont('');
	$this->SetFont('Arial','',8);
      $fill = false;
	  
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'L',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
        $this->Cell($w[3],6,$row[3],'LR',0,'R',$fill);
        $this->Ln();
		
        $fill = !$fill;
		
		
    }
  
    $this->Cell(array_sum($w),0,'','T');
}



}


