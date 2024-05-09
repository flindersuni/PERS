
<?php
//school coordinator section-green	
echo "<table class = 'table table-bordered'>";
echo "<tr><td colspan='2'><table width='100%' border='0' cellspacing=0 cellpadding=0><tr>
<td><strong>".$p1."</strong></td>
<td><strong>".$p2."</strong></td>
<td><strong>".$p3."</strong></td>
</tr>
</table></td></tr>";
echo "<tr><td width='300'><strong>".$h1."</strong></td><td align='center'><strong>".$q13."</strong></td></tr>
<tr><td>".$q1."</td>";
echo "<td width='420' valign='top'>".$e_student_a1."</td></tr>";

echo "<tr><td width='300'><strong></strong></td><td align='center'><strong>".$q14."</strong></td></tr>
<tr><td width='300'><strong>".$h2."</strong></td><td align='center'><strong>Comments</strong></td></tr>
<tr><td><em>".$t1."</em><br>
".$q2."
</td><td width='420' valign='top'>".$e_student_a2."</td></tr>";	   

echo "<tr><td width='300'>
<em>".$t2."</em><br>
".$q3."
</td><td width='420' valign='top'>".$e_student_a3."</td></tr>";
//don't show empty row for new ECE form
if (!$q4){ 
}else{
echo "<tr><td width='300'>
<em>".$t3."</em><br>
".$q4."
</td><td width='420' valign='top'>".$e_student_a4."</td></tr>";
}
echo "<tr><td width='300'><strong>".$h3."</strong></td><td align='center'><strong>Comments</strong></td></tr>
<tr><td><em>".$t4."</em><br>
".$q5."
</td><td width='420' valign='top'>".$e_student_a5."</td></tr>";
 
echo "<tr><td width='300'>
<em>".$t5."</em><br>
".$q6."
</td><td width='420' valign='top'>".$e_student_a6."</td></tr>";  

echo "<tr><td width='300'>
<em>".$t6."</em><br>
".$q7."
</td><td width='420' valign='top'>".$e_student_a7."</td></tr>"; 

echo "<tr><td width='300'><strong>".$h4."</strong></td><td align='center'><strong>Comments</strong></td></tr>
<tr><td><em>".$t7."</em><br>
".$q8."
</td><td width='420' valign='top'>".$e_student_a8."</td></tr>"; 

echo "<tr><td width='300'>
<em>".$t8."</em><br>
".$q9."
</td><td width='420' valign='top'>".$e_student_a9."</td></tr>"; 
//don't show empty row for new ECE form
if (!$q10){ 
}else{
echo "<tr><td width='300'>
<em>".$t9."</em><br>
".$q10."
</td><td width='420' valign='top'>".$e_student_a10."</td></tr>";
}
//echo "<tr><td width='300'height='100' valign='top'><strong>School coordinator: summary statement</strong><br>

//</td><td width='420' valign='top'>".$row['school_a11']."</td></tr>"; 

//student bit-yellow
echo "<tr><td colspan='2' valign='top' height='100'><strong>Mentor teacher: Summary Statement</strong><p>
".$e_school_a1."</td></tr>";	   
?>

