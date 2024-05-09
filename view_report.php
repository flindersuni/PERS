<?php

switch ($report_level) {
case 'mss':
    $report_stream = 'Middle & Secondary Schooling';
	$report_body = 'view_report_mss.php';
break;	
case 'ece': 
	$report_stream = 'Early Childhood Education';
	
switch ($report_type) {
case '2A':
case '2B':		
$report_body = 'view_report_ece_lite.php';	
break;
default:                                
$report_body = 'view_report_ece.php';	
break;	
}
	
break;
}
 
     
           
echo "<table class = 'table table-bordered'>";
echo "<tr><td><img src='images/crest.png' width='100' height='130' /></td><td><span class='style3'>Professional Experience Office<br>College of Education, Psychology and Social Work<br>Telephone: 8201 3330<br>Fax: 8201 2568</span></td><td><span class='style1'>Professional Experience Report ".$report_year."</span><p><span class='style2'>";
 
     
 
echo "".$title1."</span><br><strong>".$report_stream."</strong><br><strong>".$title2."</strong>";

if ($watermark=='1'){
$padded_report_id=sprintf('%06d', $report_id); // pad report id to 6 digits	
echo "<p><h1 style='color:lightgray;'>".$padded_report_id."</h1></p></td></tr>";	
}else{
echo "</td></tr>";
}


echo "</table>";
echo "<table class = 'table table-bordered'>";
echo "<tr><td><strong>Pre-service teacher name</strong></td><td>".$student_first_name." ".$student_last_name."</td><td><strong>Student No.</strong></td><td>".$student_number."</td></tr>";	
echo "<tr><td><strong>Site</strong></td><td>".$school_name."</td>";
// all reports after this one will show age group rather than year taught
if ($report_id>2415) { 
echo "<td><strong>Age group</strong></td><td>".$age_group."</td></tr>";	
}else{
echo "<td><strong>Year Level(s) taught</strong></td><td>".$year_level."</td></tr>";		
}

echo "<tr><td><strong>Site mentor teacher</strong></td><td>".$mentor1."";
if ($mentor2!=NULL){
echo ", ".$mentor2;
}else{
}
if ($mentor3!=NULL){
echo ", ".$mentor3;
}else{
}
if ($mentor4!=NULL){
echo ", ".$mentor4;
}else{
}
            
echo "</td><td><strong>Subject </strong></td><td>".$report_subject."</td></tr>";
echo "<tr><td><strong>Site co-ordinator</strong></td><td>".$school_coordinator."</td><td><strong>University Liaison</strong></td><td>".$liaison_first_name." ".$liaison_last_name."</td></tr>";
echo "</table>";
?>
<?php include ($report_body); ?>
<?php

//uni liaison bit-pink
echo "<tr><td colspan='2' valign='top' height='100'><strong>University Liaison: Summary statement</strong><p>";
switch ($liaison_a3) {
case '1':
    $result_l = '<strong><span class="style2">&#10003; </span></strong>'.$q16.'';//satisfactory
break;	
case '0': 
	$result_l = '<strong><span class="style2">&#10060; </span></strong>'.$q17.'';
break;
default: 
	$result_l = NULL;
break;	

}
echo "".$result_l;
echo "<p>";


echo $liaison_a1."</td></tr>";;

//school coordinator bit-green
echo "<tr><td colspan='2' valign='top' height='100'><strong>Site Coordinator: Final Comments (optional)</strong><p>
".$school_a11."</td></tr>";

//last bit
echo "<tr><td colspan='2'><strong>Site coordinator</strong><p>
The pre-service teacher may wish to submit this report with an application for employment. Please avoid the use of acronyms as student reports are often viewed by interstate and international employers who are not always familiar with South Australian nomenclature<p>
Name of Site Mentor Teacher(s):<strong> ".$mentor1."";
if ($mentor2!=NULL){
echo ", ".$mentor2;
}else{
}
if ($mentor3!=NULL){
echo ", ".$mentor3;
}else{
}
if ($mentor4!=NULL){
echo ", ".$mentor4;
}else{
}

echo "</strong>  Date: <strong>".$school_a12."</strong><p>
Name of Site coordinator: <strong>".$school_coordinator."</strong>  Date: <strong>".$school_a13."</strong><p>
<p>";
echo "Consideration has been given to the complexities and degree of challenge of the professional experience context in evaluating the pre-service teacher's ability to meet the assessment criteria for the professional experience.<p>
In our opinion, the pre-service teacher - <p>";

switch ($school_a14) {
case '1':
    $result = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> '.$q11.'<span style="font-size:large;color:green; font-weight: bold;"> SATISFACTORY</span>';//satisfactory
break;	
case '0': 
	$result = '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> '.$q12.'<span style="font-size:large;color:red; font-weight: bold;"> UNSATISFACTORY</span>';//unsatisfactory
	$reason ='<p><strong>Reason (if unsatisfactory):</strong><br> '.$school_a15.'';
break;
default: 
	$result = NULL;
	$reason = NULL;
break;	

}

echo "".$result." ".$reason;


//echo "<td>".$school_a14."</td>";


echo "</tr>";

echo "</td></tr>";

echo "<tr><td colspan='2'><strong>University Liaison</strong><p>

<table border='0' cellspacing='3' cellpadding='0'>
  <tr>
    <td >Name of University Liaison:&nbsp;</td><td><strong>".$liaison_first_name." ".$liaison_last_name."</strong></td><td></td><td>&nbsp;Date:&nbsp;</td><td><strong>".$liaison_a2."</strong></td>    
  </tr>
</table>";



echo"</td>";

echo "<tr>";
$padded_report_id=sprintf('%06d', $report_id); // pad report id to 6 digits
echo "<td colspan='2'><strong>Report ID: ".$padded_report_id."</td>
</tr>";	   
echo "</table>";
      
           
 
?>