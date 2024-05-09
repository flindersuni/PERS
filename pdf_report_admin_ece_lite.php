<?php


///placement info
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(190,5,$row5['p1']."                      ".$row5['p2']."                  "."           ".$row5['p3'],1,0,'L');// FIX THIS!!! ****************
$pdf->Ln(5);



$pdf->SetFont('Arial','B',9);
$pdf->SetWidths(array(90,100));
$pdf->Row(array($row5['h1'],$row5['q13']));

$dont_need2=array("<br>");
$result2 = str_replace($dont_need2,"\n",$row5['q1']);

$pdf->SetFont('Courier','',9);
$pdf->SetWidths(array(90,100));
$pdf->Row(array($result2,$row['e_student_a1']));


$pdf->SetFont('Arial','B',9);
$pdf->SetWidths(array(90,100));
$pdf->Row(array($row5['h2'],$row5['q14']));

//$t1_new = str_replace("P","p",$row5['t1']);
$pdf->SetFont('Courier','',9);
$pdf->SetWidths(array(90,100));
$pdf->Row(array(strtoupper($row5['t1'])."\n".$row5['q2'],$row['e_student_a2']));







$pdf->SetFont('Arial','B',9);
$pdf->SetWidths(array(90,100));
$pdf->Row(array($row5['h4'],'Mentor Teacher-Summary Statement'));

$pdf->SetFont('Courier','',9);
$pdf->SetWidths(array(90,100));
$pdf->Row(array(strtoupper($row5['t7'])."\n".$row5['q8'],$row['e_school_a1']));



$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5,'University Liaison: Summary statement',1,'L',false);
$pdf->SetFont('Courier','',10);
$pdf->MultiCell(190,5,$row['liaison_a1'],1,'L',false);

$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5,'School Coordinator: Final Comments (optional)',1,'L',false);
$pdf->SetFont('Courier','',10);
$pdf->MultiCell(190,5,$row['school_a11'],1,'L',false);

$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5,'School Coordinator: ',1,'L',false);
$pdf->SetFont('Courier','',10);

$dont_need=array("&#10003;","&#10060;","<strong>", "</strong>");
switch ($row['school_a14']) {
case '1':
    //$result = '&#10003;'.$row5['q11'].' SATISFACTORY';//satisfactory
$result = str_replace($dont_need,"",$row5['q11'].' <g>SATISFACTORY</g>');
break;	
case '0': 
	//$result = '&#10060;'.$row5['q12'].' UNSATISFACTORY';//unsatisfactory
	$result = str_replace($dont_need,"",$row5['q12'].' <r>UNSATISFACTORY');
	$reason ='<p>Reason(if unsatisfactory):<b>'.$row['school_a15'].'';
break;	

}


$pdf->Ln(0);


// Stylesheet
$pdf->SetStyle("p","courier","N",9,"0,0,0",0);
$pdf->SetStyle("b","courier","B",9,"0,0,0",0);
$pdf->SetStyle("g","courier","B",12,"0,200,0",0);
$pdf->SetStyle("r","courier","B",12,"255,0,0",0);




// Text

$txt="<p>The pre-service teacher may wish to submit this report with an application for  employment. Please avoid the use of acronyms as student reports are often viewed by interstate and international employers who are not always familiar with South Australian nomenclature </p> <p>Name of School Mentor Teacher(s): <b>".$row['mentor1']." ".$row['mentor2']." ".$row['mentor3']." ".$row['mentor4']." <p>"."Date: <b>".$row['school_a12']."</b><p>Name of School coordinator: <b>".$row['school_coordinator']." <p>"."Date: <b>".$row['school_a13']."</b><p>Consideration has been given to the complexities and degree of challenge of the professional experience context in evaluating the pre-service teacher's ability to meet the assessment criteria for the professional experience.</p><p>In our opinion, the pre-service teacher - <p></p> <b>".$result."</b> ".$reason ."";
//$pdf->SetMargins(30,15,25);
$pdf->SetLineWidth(0.2);
$pdf->SetFillColor(255,255,255);
$pdf->SetDrawColor(0,0,0);
$pdf->WriteTag(190,5,$txt,1,"L",0,0.5);



?>