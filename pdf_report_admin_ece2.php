<?php
////////////// string clean up
$dirty=array("&rsquo;","&nbsp;");
$clean=array("'"," ");

$a1_pre_clean = mb_convert_encoding($e_student_a1, "HTML-ENTITIES", 'UTF-8');
$a1_clean=str_replace($dirty, $clean, $a1_pre_clean);

$a2_pre_clean = mb_convert_encoding($e_student_a2, "HTML-ENTITIES", 'UTF-8');
$a2_clean=str_replace($dirty, $clean, $a2_pre_clean);

$a3_pre_clean = mb_convert_encoding($e_student_a3, "HTML-ENTITIES", 'UTF-8');
$a3_clean=str_replace($dirty, $clean, $a3_pre_clean);

$a5_pre_clean = mb_convert_encoding($e_student_a5, "HTML-ENTITIES", 'UTF-8');
$a5_clean=str_replace($dirty, $clean, $a5_pre_clean);

$a6_pre_clean = mb_convert_encoding($e_student_a6, "HTML-ENTITIES", 'UTF-8');
$a6_clean=str_replace($dirty, $clean, $a6_pre_clean);

$a7_pre_clean = mb_convert_encoding($e_student_a7, "HTML-ENTITIES", 'UTF-8');
$a7_clean=str_replace($dirty, $clean, $a7_pre_clean);

$a8_pre_clean = mb_convert_encoding($e_student_a8, "HTML-ENTITIES", 'UTF-8');
$a8_clean=str_replace($dirty, $clean, $a8_pre_clean);

$a9_pre_clean = mb_convert_encoding($e_student_a9, "HTML-ENTITIES", 'UTF-8');
$a9_clean=str_replace($dirty, $clean, $a9_pre_clean);

$a10_pre_clean = mb_convert_encoding($e_student_a10, "HTML-ENTITIES", 'UTF-8');
$a10_clean=str_replace($dirty, $clean, $a10_pre_clean);

$s11_pre_clean = mb_convert_encoding($school_a11, "HTML-ENTITIES", 'UTF-8');
$s11_clean=str_replace($dirty, $clean, $s11_pre_clean);

$e1_pre_clean = mb_convert_encoding($e_school_a1, "HTML-ENTITIES", 'UTF-8');
$e1_clean=str_replace($dirty, $clean, $e1_pre_clean);

$l1_pre_clean = mb_convert_encoding($liaison_a1, "HTML-ENTITIES", 'UTF-8');
$l1_clean=str_replace($dirty, $clean, $l1_pre_clean);

/////////////

///placement info
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,$p1."                      ".$p2."                  "."           ".$p3,1,0,'L');// FIX THIS!!! ****************
//*****
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(0,5,'Site Context',1,'L',false);
$pdf->SetFont('Courier','',9);
$pdf->WriteTag(0,5,$q1,1,"L",0,0.5);

$pdf->Ln(0.5);
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(0,5,'Pre-service teacher statement',1,'L',false);
$pdf->SetFont('Courier','',9);






//$txt=$row['e_student_a1'];
$pdf->WriteTag(0,5,$a1_clean,1,"L",0,0.5);
$pdf->Ln(0.5);


$dont_need2=array("<br>");
$result2 = str_replace($dont_need2,"\n",$q1);



$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(0,5,$q14,1,'L',false);


$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(0,5,$h2,1,'L',false);

$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$t1."\n".$q2,1,'L',false);


$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(0,5,'Comments',1,'L',false);


$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$a2_clean,1,'L',false);


$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(0,5,$h2,1,'L',false);

$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$t2."\n".$q3,1,'L',false);

$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(0,5,'Comments',1,'L',false);

$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$a3_clean,1,'L',false);

////////////
$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(0,5,$h3,1,'L',false);

$pdf->SetFont('Courier','',9);//eg APST3 question
$pdf->MultiCell(0,5,$t4."\n".$q5,1,'L',false);

$pdf->SetFont('Arial','B',9);//eg answer
$pdf->MultiCell(0,5,'Comments',1,'L',false);

$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$a5_clean,1,'L',false);

/////////////
$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(0,5,$h3,1,'L',false);

$pdf->SetFont('Courier','',9);//eg APST4 question
$pdf->MultiCell(0,5,$t5."\n".$q6,1,'L',false);

$pdf->SetFont('Arial','B',9);//eg answer
$pdf->MultiCell(0,5,'Comments',1,'L',false);

$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$a6_clean,1,'L',false);

/////////////
$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(0,5,$h3,1,'L',false);

$pdf->SetFont('Courier','',9);//eg APST5 question
$pdf->MultiCell(0,5,$t6."\n".$q7,1,'L',false);

$pdf->SetFont('Arial','B',9);//eg answer
$pdf->MultiCell(0,5,'Comments',1,'L',false);

$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$a7_clean,1,'L',false);

/////////////
$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(0,5,$h4,1,'L',false);

$pdf->SetFont('Courier','',9);//eg APST6 question
$pdf->MultiCell(0,5,$t7."\n".$q8,1,'L',false);

$pdf->SetFont('Arial','B',9);//eg answer
$pdf->MultiCell(0,5,'Comments',1,'L',false);

$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$a8_clean,1,'L',false);

/////////////
$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(0,5,$h4,1,'L',false);

$pdf->SetFont('Courier','',9);//eg APST7 question
$pdf->MultiCell(0,5,$t8."\n".$q9,1,'L',false);

$pdf->SetFont('Arial','B',9);//eg answer
$pdf->MultiCell(0,5,'Comments',1,'L',false);

$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$a9_clean,1,'L',false);
//*******







//$t1_new = str_replace("P","p",$row5['t1']);



$pdf->SetFont('Courier','',9);
$pdf->SetWidths(array(195));
$pdf->Row(array(strtoupper($t9)."\n".$q10,$a10_clean));



$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(0,5,'Mentor teacher: Summary Statement',1,'L',false);
$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$e1_clean,1,'L',false);

$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(0,5,'University Liaison: Summary statement',1,'L',false);
$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$l1_clean,1,'L',false);

$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(0,5,'School Coordinator: Final Comments (optional)',1,'L',false);
$pdf->SetFont('Courier','',9);
$pdf->MultiCell(0,5,$s11_clean,1,'L',false);

$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(0,5,'School Coordinator: ',1,'L',false);
$pdf->SetFont('Courier','',9);

$dont_need=array("&#10003;","&#10060;","<strong>", "</strong>");
switch ($school_a14) {
case '1':
    //$result = '&#10003;'.$row5['q11'].' SATISFACTORY';//satisfactory
$result = str_replace($dont_need,"",$q11.' <g>SATISFACTORY</g>');
break;	
case '0': 
	//$result = '&#10060;'.$row5['q12'].' UNSATISFACTORY';//unsatisfactory
	$result = str_replace($dont_need,"",$q12.' <r>UNSATISFACTORY');
	$reason ='<p>Reason(if unsatisfactory):<b>'.$school_a15.'';
break;	

}


$pdf->Ln(0);


// Stylesheet
$pdf->SetStyle("p","courier","N",9,"0,0,0",0);
$pdf->SetStyle("b","courier","B",9,"0,0,0",0);
$pdf->SetStyle("g","courier","B",12,"0,200,0",0);
$pdf->SetStyle("r","courier","B",12,"255,0,0",0);




// Text

$txt="<p>The pre-service teacher may wish to submit this report with an application for  employment. Please avoid the use of acronyms as student reports are often viewed by interstate and international employers who are not always familiar with South Australian nomenclature </p> <p>Name of School Mentor Teacher(s): <b>".$mentor1." ".$mentor2." ".$mentor3." ".$mentor4." <p>"."Date: <b>".$school_a12."</b><p>Name of School coordinator: <b>".$school_coordinator." <p>"."Date: <b>".$school_a13."</b><p>Consideration has been given to the complexities and degree of challenge of the professional experience context in evaluating the pre-service teacher's ability to meet the assessment criteria for the professional experience.</p><p>In our opinion, the pre-service teacher - <p></p> <b>".$result."</b> ".$reason ."";
//$pdf->SetMargins(30,15,25);
$pdf->SetLineWidth(0.2);
$pdf->SetFillColor(255,255,255);
$pdf->SetDrawColor(0,0,0);
$pdf->WriteTag(0,5,$txt,1,"L",0,0.5);



?>