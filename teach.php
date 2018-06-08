<?php 
$subone=0;
$subtwo=0;
$subthree=0;
$subfour=0;
$subfive=0;
//now we read the input from  the form
$FName=$_POST['fname'];
$Sname=$_POST['sname'];
$ID=$_POST['id'];
$subone=$_POST['English'];
$subtwo=$_POST['Math'];
$subthree=$_POST['Swahili'];
$subfour=$_POST['Science'];
$subfive=$_POST['Computer'];
$mean=($subone+$subtwo+$subthree+$subfour+$subfive)/5;
echo "<table border='2px solid black'>
 	<tr>
 		<th>First Name</th>
 		<th>Surname</th>
 		<th>Students ID</th>
 		<th>English</th>
 		<th>Math</th>
 		<th>Swahili</th>
 		<th>Science</th>
 		<th>Computer</th>
 		<th>Mean Grade</th>
 	</tr>
 	<tr>
 		<td>$FName</td>
 		<td>$Sname</td>
 		<td>$ID</td>
 		<td>$subone</td>
 		<td>$subtwo</td>
 		<td>$subthree</td>
 		<td>$subfour</td>
 		<td>$subfive</td>
 		<td>$mean</td>
	</tr>
 </table>";
 echo"<b><i>Status:";
 $status=array("<h4>Fail</h4F", "Almost there", "Passed", "error");
 if ($mean>=0 && $mean<=29) {
 	# code...
 	echo $status[0];
 }elseif ($mean>=29 && $mean<=65) {
 	# code...
 	echo $status[1];
 }elseif ($mean>=65 && $mean<=100) {
 	# code...
 	echo $status[2];
 }
 else {
 	echo $status[3];
}
 
 

 ?>
