<?php 
include('boot1s.html');
    //require('admin_check.php');  //////new May 2024
	include('database_connect.php'); 
    //include('ldap_connect2.php');
	
?>
  <title>Browse reports</title> 
  <style>
			.trad-blink { text-decoration: blink; }
			@-webkit-keyframes blinker {  
  			  from { opacity: 1.0; }
			  to { opacity: 0.0; }
			}
			.css3-blink {
			-webkit-animation-name: blinker;  
			-webkit-animation-iteration-count: infinite;  
			-webkit-animation-timing-function: cubic-bezier(1.0,0,0,1.0);
			-webkit-animation-duration: 1s; 
			}
</style> 
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
 <div class="container-fluid">
<!--  body content begins GF -->     
<?php 


echo "<h4>Browse reports</h4>";
echo "Select a report for details<p>";

/*if ($_GET[search]) {
$search=$_GET[search];

$orderby=$_GET[order];
}
else {
$search = $_POST[search];
$orderby="report_id DESC";

}*/
/*if (!$_GET['offset']){
$offset=0;
}else{
$offset=$_GET['offset'];	
}*/
$orderby="report_id DESC"; //new May 2024
$offset=0;		 
switch ($_GET['when']) {
case 'a';
//echo "<a href=admin_browse_reports.php>current year</a> | <a href=admin_browse_reports.php?when=c>current question set(s)</a> | all reports | <a href=admin_browse_reports.php?when=b>all reports 25 per page</a><p>"  ;
$active_status1=NULL;
$active_status2=NULL;
$active_status3='active';
$active_status4=NULL;
$extra=NULL;
//$sql="SELECT * FROM pers_reports  ORDER BY ".$orderby; 
///
		
$stmt = $conn->prepare('SELECT * FROM pers_reports  ORDER BY report_id DESC');	
$stmt->execute();		
///
//$sql="SELECT * FROM pers_reports  ORDER BY ".$orderby; //new May 2024		
break;

case 'b';
//echo "<a href=admin_browse_reports.php>current year</a> | <a href=admin_browse_reports.php?when=c>current question set<s)</a> | <a href=admin_browse_reports.php?when=a>all reports</a> | all reports 25 per page<p>"  ;
$active_status1=NULL;
$active_status2=NULL;
$active_status3=NULL;
$active_status4='active';
$extra=NULL;
$sql="SELECT * FROM pers_reports  ORDER BY ".$orderby." LIMIT 30 OFFSET ".$offset;
break;

case 'c';
//echo "<a href=admin_browse_reports.php>current year</a> | current question set(s)  | <a href=admin_browse_reports.php?when=a>all reports</a> | <a href=admin_browse_reports.php?when=b>all reports 25 per page</a><p>" ;
$active_status1=NULL;
$active_status2='active';
$active_status3=NULL;
$active_status4=NULL;
$extra=NULL;
$sql="SELECT * FROM pers_reports  WHERE  question_set >='35' ORDER BY ".$orderby;
break;

$active_status1='active';
$active_status2=NULL;
$active_status3=NULL;
$active_status4=NULL;
$extra=NULL;
case NULL;
 if (date("n")>3) {
//echo "this year | <a href=admin_browse_reports.php?when=c>current question set(s)</a> | <a href=admin_browse_reports.php?when=a>all reports</a> | <a href=admin_browse_reports.php?when=b>all reports 30 per page</a><p>" ;
$active_status1='active';
$active_status2=NULL;
$active_status3=NULL;
$active_status4=NULL;
//$extra="<a href=admin_browse_reports_excel.php>dump to Excel</a><p>";
$extra="<a class='btn btn-default btn-xs href='admin_browse_reports_excel.php' role='button'>dump to Excel</a>";
$sql="SELECT * FROM pers_reports  WHERE report_year='".date("Y")."' ORDER BY ".$orderby;	
//echo "<a href=admin_browse_reports_excel.php>dump to Excel</a><p>"; 
                  }else{
//if before April, drop down list of questions shows last year and this year
//echo "this year/last year | <a href=admin_browse_reports.php?when=c>current question set(s)</a> | <a href=admin_browse_reports.php?when=a>all reports</a> | <a href=admin_browse_reports.php?when=b>all reports 25 per page</a><p>" ;
$active_status1='active';
$active_status2=NULL;
$active_status3=NULL;
$active_status4=NULL;
$sql="SELECT * FROM pers_reports  WHERE  (report_year='".date("Y")."' OR report_year='".(date('Y')-1)."') ORDER BY ".$orderby;
//changed to show last years too 23-3-15
				  }

break;
}

echo "<div class='btn-toolbar' role='toolbar'>";
echo "<a class='btn btn-primary btn-xs ".$active_status1."' href='admin_browse_reports.php' role='button'>This year</a>";
echo "<a class='btn btn-primary btn-xs ".$active_status2."' href='admin_browse_reports.php?when=c' role='button'>Current question sets</a>";
echo "<a class='btn btn-primary btn-xs ".$active_status3."' href='admin_browse_reports.php?when=a' role='button'>All reports</a>";
echo "<a class='btn btn-primary btn-xs ".$active_status4."' href='admin_browse_reports.php?when=b' role='button'>All reports 30 per page</a>";
echo $extra;
echo "</div>";


//$sql="SELECT * FROM pers_reports WHERE report_year='".date("Y")."' ORDER BY ".$orderby;
//$result = pg_query($sql);
//$nrows = pg_numrows($result);
//$result = $conn->query($sql);  //new sql 
	 
//echo $sql;
/*if ($_GET['when']==b) {
$next=$offset+30;
$previous=$offset-30;
//echo "<a href=https://ehlt.flinders.edu.au/login/pers/admin_browse_reports.php?when=b&offset=$previous>< prev</a> | ";
//echo "<a href=https://ehlt.flinders.edu.au/login/pers/admin_browse_reports.php?when=b&offset=$next>next ></a><p>";

echo "<ul class='pager'>";
echo "<li class='previous'><a href='admin_browse_reports.php?when=b&offset=$previous'>Previous</a></li>";
echo "<li class='next'><a href='admin_browse_reports.php?when=b&offset=$next'>Next</a></li>";
echo "</ul>";	
}else{
//echo "".$nrows." reports<p>";

//echo "<a class='btn btn-primary btn-xs  href='#' role='button'>".$nrows." reports</a><p>";
}
*/
echo "<br>";	

echo "<table class = 'table table-hover'>";
echo "<thead><th><a href=admin_browse_reports.php>Report id.</a></th>
<th><strong>Year </td>
<th><a href=admin_browse_reports.php?search=report_id&order=report_level><strong>Stream</strong></a></th>
<th><a href=admin_browse_reports.php?search=report_id&order=report_type><strong>PEY</strong></a></th>
<th><strong>Mode </th>
<th><a href=admin_browse_reports.php?search=report_id&order=student_fan><strong>Name</strong></a></th>
</strong></a></th>
<th><a href=admin_browse_reports.php?search=report_id&order=school_code><strong>Site</strong></a></th>
<th><strong>Subject</strong></th>
<th><a href=admin_browse_reports.php?search=report_id&order=uni_liaison><strong>Uni liaison</strong></a></th>
<th><span style='color:#5cb85c'>&#9608;</th>
<th><span style='color:#f0ad4e;'>&#9608;</th>
<th><span style='color:#d9534f;'>&#9608;</th>
<th><a href=admin_browse_reports.php?search=report_id&order=student_fan><strong>&#127942;</th>
<th><a href='../../pers/help-tick_status.php'>
 <span class='glyphicon glyphicon-question-sign' aria-hidden='true'></span>
 </a></th>
</tr></thead>";
//echo "<tr bgcolor=#ffffff><td colspan=13></td></tr>\n";
$student_ticks=0;
$school_ticks=0;
$liaison_ticks=0;
//for($j=0;$j<$nrows;$j++)

$count=0;	 
//while($row = $result->fetch_assoc()) {
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 	// new may 2024
$report_id=$row['report_id'];
$student_fan=$row['student_fan'];	
$report_year=$row['report_year'];
//echo $sql;
//echo $sql;	 
	 
echo "<tbody><tr>";
$padded_report_id=sprintf('%06d', $report_id); // pad report id to 6 digits
echo "<td><a href=view_report_admin.php?report_id=".$report_id."&student_fan=".$student_fan.">".$padded_report_id."</td>";
echo "<td>".$report_year."</td>";
echo "<td>".$row['report_level']."</td>";
echo "<td>".$row['report_type']."</td>";

//$sql5="SELECT * FROM pers_questions  WHERE question_id='".$row['question_set']."'";    
//$result5 = $conn->query($sql5);  //new sql	
////
$question_id=$row['question_set'];	
$stmt5 = $conn->prepare('SELECT * FROM pers_questions  WHERE question_id=:question_id');
$stmt5->bindParam(':question_id', $question_id, PDO::PARAM_INT);	
$stmt5->execute();	
	
////	
	
	
	
	
 //if ($row5 = $result5->fetch_assoc()) { 
while ($row5 = $stmt5->fetch(PDO::FETCH_ASSOC)) { 	 
echo "<td>".$row5['report_mode']."</td>";
 }
     
//$sql2="SELECT * FROM pers_students  WHERE student_fan='".$row['student_fan']."'";
//echo $sql2;     
//$result2 = $conn->query($sql2);  //new sql
////
$student_fan=$row['student_fan'];	
$stmt2 = $conn->prepare('SELECT * FROM pers_students  WHERE student_fan=:student_fan');
$stmt2->bindParam(':student_fan', $student_fan, PDO::PARAM_STR);	
$stmt2->execute();	
	
////	
//if ($row2 = $result2->fetch_assoc()) { 
if ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) { 	
echo "<td>".$row2['student_first_name']." ".$row2['student_last_name']."</td>";
}
     
//$sql3="SELECT * FROM pers_schools  WHERE school_code='".$row['school_code']."'";
//$result3 = $conn->query($sql3);  //new sql
////
$school_code=$row['school_code'];	
$stmt3 = $conn->prepare('SELECT * FROM pers_schools  WHERE school_code=:school_code');
$stmt3->bindParam(':school_code', $school_code, PDO::PARAM_STR);	
$stmt3->execute();	
	
////	
//if ($row3 = $result3->fetch_assoc()) {
while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) { 	
echo "<td>".$row3['school_name']."</td>";
echo "<td>".$row['report_subject']."</td>";	
}
     
//$sql4="SELECT * FROM pers_liaison_staff  WHERE liaison_fan='".$row['uni_liaison']."'";
//$result4 = $conn->query($sql4);  //new sql
////
$liaison_fan=$row['uni_liaison'];	
$stmt4 = $conn->prepare('SELECT * FROM pers_liaison_staff  WHERE liaison_fan=:liaison_fan');
$stmt4->bindParam(':liaison_fan', $liaison_fan, PDO::PARAM_STR);	
$stmt4->execute();	
	
////	
//if ($row4 = $result4->fetch_assoc()) {
while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) { 
echo "<td>".$row4['liaison_first_name']." ".$row4['liaison_last_name']."</td>";
//echo "<td></td>";
}

switch ($row['section1_signoff']) { //diff
case '0':
    $school_signoff="<span class='glyphicon glyphicon-remove' aria-hidden='true' ></span>";	
break;	
case '1':
    $school_signoff="<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color:#5cb85c'></span>";
	$school_ticks++;	
break;	
}
echo "<td>".$school_signoff."</td>";

switch ($row['section2_signoff']) { //diff
case '0':
    $student_signoff="<span class='glyphicon glyphicon-remove' aria-hidden='true' ></span>";	
break;	
case '1':
    $student_signoff="<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color:#5cb85c'></span>";
 $student_ticks++;		
break;	
}
echo "<td>".$student_signoff."</td>";

switch ($row['section3_signoff']) { //diff
case '0':
    $liaison_signoff="<span class='glyphicon glyphicon-remove' aria-hidden='true' ></span>";	
break;	
case '1':
    $liaison_signoff="<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color:#5cb85c'></span>";
	$liaison_ticks++;	
break;	
}
echo "<td>".$liaison_signoff."</td>";
switch ($row['school_a16']) { //nominated for award
case '1':
    $award_nomination="&#127942;";	
break;	
default:
	$award_nomination=NULL;			
break;
}
echo "<td class='css3-blink'><strong><div style='text-decoration:blink'>".$award_nomination."</div></strong></td>";		
if ($row['school_a14']==0&&$row['school_a15']!=NULL) { //if rejected
    $rejected="<td class='css3-blink'><span style='color:#d9534f';><strong><div style='text-decoration:blink'>&#9888;</div></strong></span></td>";
		
}else{
    $rejected="<td></td>";	
}
echo $rejected;




$count++;
}
echo "</tr></tbody>";	   
echo "</table>";
echo "<a class='btn btn-primary btn-xs  href='#' role='button'>".$count." reports</a><p>";

 ?>

<!--  body content ends GF --> 
<?php include('footer_js.html'); ?>
</body>
</html>
