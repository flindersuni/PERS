<?php
	//require('admin_check.php'); //May 2024
	include('database_connect.php'); 
    //include('ldap_connect2.php');
	
//include($pagedetails['javascript']); //temp
//include($pagedetails['header']); //temp
//echo "PDF create feature curently unavailable";	//temp

//$sql="SELECT * FROM pers_reports  WHERE report_id=".$_GET['report_id']."";
///
$report_id=$_GET['report_id'];
$stmt = $conn->prepare('SELECT * FROM pers_reports  WHERE report_id=:report_id');	
$stmt->bindParam(':report_id', $report_id, PDO::PARAM_INT);	
$stmt->execute();
///


//$result = $conn->query($sql);  //new sql 
//while ($row = $result->fetch_assoc()) {
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 	// new may 2024
$report_id=$_GET['report_id'];
$report_level=$row['report_level'];	//new may 2024
$report_subject=$row['report_subject'];
$school_code=$row['school_code'];
$school_coordinator=$row['school_coordinator'];
$uni_liaison=$row['uni_liaison'];	
$mentor1=$row['mentor1'];
$mentor2=$row['mentor2'];	
$mentor3=$row['mentor3'];	
$year_level=$row['year_level'];
$age_group=$row['age_group'];
$school_a11=$row['school_a11'];	
$school_a12=$row['school_a12'];
$school_a13=$row['school_a13'];
$school_a14=$row['school_a14'];
$school_a15=$row['school_a15'];	
$e_school_a1=$row['e_school_a1'];	
$e_student_a1=$row['e_student_a1'];
$e_student_a2=$row['e_student_a2'];		
$e_student_a3=$row['e_student_a3'];	
$e_student_a4=$row['e_student_a4'];	
$e_student_a5=$row['e_student_a5'];	
$e_student_a6=$row['e_student_a6'];	
$e_student_a7=$row['e_student_a7'];	
$e_student_a8=$row['e_student_a8'];
$e_student_a9=$row['e_student_a9'];	
$e_student_a10=$row['e_student_a10'];
$liaison_a1=$row['liaison_a1'];
$liaison2=$row['liaison_a2'];
$liaison3=$row['liaison_a3'];	
$question_set=$row['question_set'];
$section1_signoff=$row['section1_signoff'];
$section2_signoff=$row['section2_signoff'];
$section3_signoff=$row['section3_signoff'];
$student_fan=$row['student_fan'];	
 }
	
//$sql3="SELECT * FROM pers_students  WHERE student_fan='".$student_fan."'";
///
$stmt3 = $conn->prepare('SELECT * FROM pers_students  WHERE student_fan=:student_fan');	
$stmt3->bindParam(':student_fan', $student_fan, PDO::PARAM_INT);	
$stmt3->execute();
///
//$result3 = $conn->query($sql3);  //new sql

//if ($row3 = $result3->fetch_assoc()) {	
if ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) { 	
//echo "<p>sql3=".$sql3;
$student_first_name = $row3['student_first_name'];
$student_last_name = $row3['student_last_name'];
$student_number=$row3['student_number'];	
}
	
//$sql5="SELECT * FROM pers_questions  WHERE question_id=".$question_set." ";
///
$question_id=$question_set;
$stmt5 = $conn->prepare('SELECT * FROM pers_questions  WHERE question_id=:question_id');	
$stmt5->bindParam(':question_id', $question_id, PDO::PARAM_STR);	
$stmt5->execute();
///
//$result5 = $conn->query($sql5);  //new sql 
//while ($row5 = $result5->fetch_assoc()) {	 	
while ($row5 = $stmt5->fetch(PDO::FETCH_ASSOC)) { 
$report_year=$row5['report_year'];
$title1=$row5['title1'];
$title2=$row5['title2'];
//$title3=$row5['title3'];
	
$report_stream=$row5['report_stream'];	
$report_type=$row5['report_type'];
$p1=$row5['p1'];
$p2=$row5['p2'];
$p3=$row5['p3'];	
$t1=$row5['t1'];
$t2=$row5['t2'];
$t3=$row5['t3'];	
$t4=$row5['t4'];
$t5=$row5['t5'];
$t6=$row5['t6'];
$t7=$row5['t7'];
$t8=$row5['t8'];
$t9=$row5['t9'];	
$h1=$row5['h1'];
$h2=$row5['h2'];
$h3=$row5['h3'];	
$h4=$row5['h4'];
$q1=$row5['q1'];	
$q2=$row5['q2'];
$q3=$row5['q3'];
$q4=$row5['q4'];
$q5=$row5['q5'];	
$q6=$row5['q6'];
$q7=$row5['q7'];
$q8=$row5['q8'];
$q9=$row5['q9'];
$q10=$row5['q10'];
$q11=$row5['q11'];	
$q12=$row5['q12'];	
}	

//$sql2="SELECT * FROM pers_schools  WHERE school_code='".$school_code."'";
///
//$school_code='".$school_code.";
$stmt2 = $conn->prepare('SELECT * FROM pers_schools  WHERE school_code=:school_code');	
$stmt2->bindParam(':school_code', $school_code, PDO::PARAM_INT);	
$stmt2->execute();
///
//$result2 = $conn->query($sql2);  //new sql 	
//while ($row2 = $result2->fetch_assoc()) {
while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) { 	
//echo "<br>sql2=".$sql2;
$school_name=$row2['school_name'];	
}
	
//$sql4="SELECT * FROM pers_liaison_staff  WHERE liaison_fan='".$uni_liaison."'";
///
$liaison_fan=$uni_liaison;
$stmt4 = $conn->prepare('SELECT * FROM pers_liaison_staff  WHERE liaison_fan=:liaison_fan');	
$stmt4->bindParam(':liaison_fan', $liaison_fan, PDO::PARAM_INT);	
$stmt4->execute();
///
//$result4 = $conn->query($sql4);  //new sql 	
//while ($row4 = $result4->fetch_assoc()) {
while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) { 	
$liaison_first_name=$row4['liaison_first_name'];
$liaison_last_name=$row4['liaison_last_name'];	
}

//$report_stream=$row5['report_stream'];	
//$report_type=$row5['report_type'];

switch ($report_stream) {
case 'mss':
    $report_stream = 'Middle & Secondary Schooling';
	$report_body = 'pdf_report_admin_mss.php';
break;	
case 'ece': 
	$report_stream = 'Early Childhood Education';
	
switch ($report_type) {
case '2A':
case '2B':		
$report_body = 'pdf_report_admin_ece_lite.php';	
break;
default:                                
$report_body = 'pdf_report_admin_ece2.php';	
break;	
}

break;
}

//$report_year=$row5['report_year'];
////////// PDF bit
require('WriteTag+.php');



// Instanciation of inherited class
$pdf=new PDF_WriteTag();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('images/crest.png',5,5,30);
$pdf->SetLeftMargin(35);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(500,15,'Professional Experience Office');
$pdf->Ln(3);
$pdf->Cell(500,15,'College of Education, Psychology');
$pdf->Ln(3);
$pdf->Cell(500,15,'and Social Work');
$pdf->Ln(3);
$pdf->Cell(500,15,'Telephone: 8201 3330');
$pdf->Ln(3);
$pdf->Cell(500,15,'Fax: 8201 2568');
$pdf->Ln(-3);
$pdf->SetLeftMargin(90);
$pdf->SetFont('Arial','',18);
$pdf->Cell(500,0,'Professional Experience Report'." ".$report_year);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(500,0,$title1);
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(500,0,$report_stream);
$pdf->Ln(5);
//$pdf->SetFont('Arial','',10);
$pdf->Cell(500,0,$title2);
$pdf->SetLeftMargin(5);
$pdf->Ln(10);
//$pdf->Cell(180,0,'',1);
//$pdf->Ln(3);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,5,'Pre service teacher name'." ",1,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(65,5,$student_first_name." ".$student_last_name,1,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(40,5,'Student No.'." ",1,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(40,5,$student_number,1,0,'L');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,5,'Site'." ",1,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(65,5,$school_name,1,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(40,5,'Year level(s) taught'." ",1,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(40,5,$age_group,1,0,'L');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,5,'Site mentor teacher'." ",1,0,'L');
if (!$mentor3){
$pdf->SetFont('Arial','',9);
$pdf->Cell(65,5,$mentor1.",".$mentor2,1,0,'L');	
                     }else{
$pdf->SetFont('Arial','',6);
$pdf->Cell(65,5,$mentor1.",".$mentor2.",".$mentor3.",".$mentor4,1,0,'L');
					 }
$pdf->SetFont('Arial','B',9);
$pdf->Cell(40,5,'Subject'." ",1,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(40,5,$report_subject,1,0,'L');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,5,'Site coordinator'." ",1,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(65,5,$school_coordinator,1,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(40,5,'University liaison'." ",1,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(40,5,$liaison_first_name." ".$liaison_last_name,1,0,'L');
?>
<?php include ($report_body); ?>
<?php
$pdf->Ln(0.5);

$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(0,5,'University Liaison',1,'L',false);
$pdf->SetFont('Courier','',10);
//$pdf->MultiCell(190,5,"Name of University Liaison: ".$row4['liaison_first_name']." ".$row4['liaison_last_name']." "."Date: ".$row['liaison_a2']."",1,'L',false);

$txt="Name of University Liaison: <b>".$liaison_first_name." ".$liaison_last_name." <p>"."Date: <b>".$liaison_a2;
$pdf->WriteTag(0,5,$txt,1,"L",0,0.5);
$pdf->Ln(0.5);

$pdf->SetFont('Arial','B',10);
$padded_report_id=sprintf('%06d', $report_id); // pad report id to 6 digits
$pdf->MultiCell(0,5,"Report ID: ".$padded_report_id,1,'L',false);
$pdf->Output();

?>