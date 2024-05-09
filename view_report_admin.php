<?php 
include('boot1s.html');
    //require('admin_check.php');   new May 2024
	include('database_connect.php'); 
    //include('ldap_connect2.php');
	$watermark='1';
?>
  <title>View report</title>
  
  </head>

  <body>



<!-- Static navbar -->
<?php //include('nav_admin.html'); ?>


<!-- sidebar nav -->
<div id="wrapper"> 
 
<!-- Sidebar -->
<div id="sidebar-wrapper">    
<?php //include('sidebar_admin.html'); ?>
</div>
        <!-- /#sidebar-wrapper -->
<!-- Page Content -->
 <div class="col-md-8">
<!--  body content begins GF -->     
<?php  

	//$sql3="SELECT * FROM pers_students  WHERE student_fan='".$_GET['student_fan']."'";
    //$result3 = $conn->query($sql3);  //new sql
///////
$student_fan=$_GET['student_fan'];	 
$stmt3 = $conn->prepare('SELECT * FROM pers_students  WHERE student_fan=:student_fan');
$stmt3->bindParam(':student_fan', $student_fan, PDO::PARAM_STR);	
$stmt3->execute();
 
////// 
//if ($row3 = $result3->fetch_assoc()) {
if ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) { 	
//echo "<p>sql3=".$sql3;
$student_first_name = $row3['student_first_name'];
$student_last_name = $row3['student_last_name'];
$student_number=$row3['student_number'];	
}

	 
	//$sql="SELECT * FROM pers_reports  WHERE report_id=".$_GET['report_id']." AND student_fan='".$_GET['student_fan']."'";
	//$result = $conn->query($sql);  //new sql
///
$report_id=$_GET['report_id'];	
$student_fan=$_GET['student_fan'];	 
$stmt = $conn->prepare('SELECT * FROM pers_reports  WHERE report_id=:report_id AND student_fan=:student_fan');
$stmt->bindParam(':report_id', $report_id, PDO::PARAM_STR);	
$stmt->bindParam(':student_fan', $student_fan, PDO::PARAM_STR);	
$stmt->execute();	 
///	 
	 
	 
	//while ($row = $result->fetch_assoc()) {
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
	
$report_id=$_GET['report_id'];
$report_subject=$row['report_subject'];
$school_code=$row['school_code'];
$school_coordinator=$row['school_coordinator'];
$uni_liaison=$row['uni_liaison'];	
$mentor1=$row['mentor1'];
$mentor2=$row['mentor2'];
$mentor3=$row['mentor3'];
$mentor4=$row['mentor4'];	
$year_level=$row['year_level'];
$age_group=$row['age_group'];
$school_a1=$row['school_a1'];
$school_a2=$row['school_a2'];
$school_a3=$row['school_a3'];
$school_a4=$row['school_a4'];
$school_a5=$row['school_a5'];
$school_a6=$row['school_a6'];
$school_a7=$row['school_a7'];
$school_a8=$row['school_a8'];
$school_a9=$row['school_a9'];
$school_a10=$row['school_a10'];		
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
$liaison_a2=$row['liaison_a2'];	
$liaison_a3=$row['liaison_a3'];	
$question_set=$row['question_set'];
$section1_signoff=$row['section1_signoff'];
$section2_signoff=$row['section2_signoff'];
$section3_signoff=$row['section3_signoff'];	
$report_level=$row['report_level'];	//new fix		
$report_type=$row['report_type'];			
 }	
	//$sql5="SELECT * FROM pers_questions  WHERE question_id=".$question_set." ";
	//$result5 = $conn->query($sql5);  //new sql
////
$question_id=$question_set;	 
$stmt5 = $conn->prepare('SELECT * FROM pers_questions  WHERE question_id=:question_id');
$stmt5->bindParam(':question_id', $question_id, PDO::PARAM_STR);	
$stmt5->execute();	 
////	 
	 
	 
	 
	 
//while ($row5 = $result5->fetch_assoc()) {	 	
while ($row5 = $stmt5->fetch(PDO::FETCH_ASSOC)) { 
$report_year=$row5['report_year'];
$title1=$row5['title1'];
$title2=$row5['title2'];
//$title3=$row5['title3'];
	
$report_stream=$row5['report_stream'];	
//$report_type=$row5['report_type'];
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
$q13=$row5['q13'];
$q14=$row5['q14'];	
}
//echo $sql;	
	//$sql2="SELECT * FROM pers_schools  WHERE school_code='".$school_code."'";
	//$result2 = $conn->query($sql2);  //new sql
///
	 
$stmt2 = $conn->prepare('SELECT * FROM pers_schools  WHERE school_code=:school_code');
$stmt2->bindParam(':school_code', $school_code, PDO::PARAM_STR);	
$stmt2->execute();	 
///
	 
	 
	 
	//while ($row2 = $result2->fetch_assoc()) {
while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) { 		
//echo "<br>sql2=".$sql2;
$school_name=$row2['school_name'];	
}
	 
//$sql4="SELECT * FROM pers_liaison_staff  WHERE liaison_fan='".$uni_liaison."'";
//$result4 = $conn->query($sql4);  //new sql
///
$liaison_fan=$uni_liaison;	 
$stmt4 = $conn->prepare('SELECT * FROM pers_liaison_staff  WHERE liaison_fan=:liaison_fan');
$stmt4->bindParam(':liaison_fan', $liaison_fan, PDO::PARAM_STR);	
$stmt4->execute();	 
///	 
//while ($row4 = $result4->fetch_assoc()) {
while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) { 	
$liaison_first_name=$row4['liaison_first_name'];
$liaison_last_name=$row4['liaison_last_name'];	
} 
//echo $sql4;
echo "<table border=0 cellspacing=0 cellpadding=2><td rowspan='2'>";

include('view_report.php'); 

echo"</td>";
if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) 
$height=20;
else
$height=150;

echo "<td valign='top' height=".$height."></td><tr>";
echo "<td valign='top'>";



//echo "<a href=view_report_liaison_colour.php?student_fan=".$_SESSION['student_fan']."&report_id=".$_SESSION['report_id'].">Who fills in what on this form?</a><p>";
echo "<form name='edit' method='post' action='edit_report_admin.php?student_fan=".$_GET['student_fan']."&report_id=".$_GET['report_id']."'>";
//if IE use alternate button
//if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) 
//echo "<input type='submit' name='Edit school section' value='Edit report'>";
//else
echo "<a class='btn btn-primary' href='edit_report_admin.php?student_fan=".$_GET['student_fan']."&report_id=".$_GET['report_id']."'>Edit report</a>"; 
//echo "<div class='btn-toolbar' role='toolbar'><div class='btn-group' role='group'><button type='button' class='btn btn-primary' href='edit_report_admin.php?student_fan=".$_GET['student_fan']."&report_id=".$_GET['report_id']."'>Edit report</button></div>";  
echo "</form>";	
//echo "</form>";

//echo "<a href=../../../pers/view_report_colour.php>Who fills in what on this report?</a><p>";
//echo "<form name='print' method='post' action='print_report_liaison.php?student_fan=".$_SESSION['student_fan']."&report_id=".$_SESSION['report_id']."'>";
//echo  "<input type='submit' name='Print my report' value='Printer-friendly version'>";
//echo "</form>";
//echo "<form name='print' method='post' action='print_report_admin.php?report_id=".$_GET['report_id']."'>";
//echo  "<input type='submit' name='Print this report' value='Printer-friendly version'>";
//echo "</form>";	
//echo "<form name='print' method='post' action='pdf_report_admin.php?report_id=".$_GET['report_id']."'>";
//echo  "<input type='submit' name='PDF this report' value='Save PDF'>";
//echo "</form>";
echo "<div class='btn-group' role='group'><a href='pdf_report_admin.php?report_id=".$_GET['report_id']."' target='_blank' class='btn btn-default'>Save as PDF</button></a></div>"; 
echo "</td>";
echo "</table>";

 ?>

<!--  body content ends GF --> 
<?php include('footer_js.html'); ?>
</body>
</html>
