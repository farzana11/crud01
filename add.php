<?php
$track  = $_POST['track'];
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$fatherName  = $_POST['fatherName'];
$motherName  = $_POST['motherName'];
$phoneNumber  = $_POST['phoneNumber'];
$emailAddress  = $_POST['emailAddress'];
$alternativeEmailAddress  = $_POST['alternativeEmailAddress'];
$nationalIdNumber  = $_POST['NationalIdNumber'];
$birthCertificateNo  = $_POST['birthCertificateNo'];
$presentAddress  = $_POST['presentAddress'];
$permanentAddress  = $_POST['permanentAddress'];
$village  = $_POST['village'];
$postOffice  = $_POST['postOffice'];
$policeStation  = $_POST['policeStation'];
$district  = $_POST['district'];
$educationalQualification  = $_POST['educationQualification'];
$university  = $_POST['university'];
$subject  = $_POST['subject'];
$result  = $_POST['result'];
$passingYear  = $_POST['passingYear'];
$careerObjective  = $_POST['careerObjective'];
$jobExperience  = $_POST['jobExperience'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "INSERT INTO `students`.`users` (
`track`, `first_name` ,`last_name`, `father_name`, `mother_name`, `phone_number`, `email_address`, `alternative_email`, `national_id_number`, `birth_certificate_no`, `present_address`, `permanent_address`, `village`, `post_office`, `police_station`, `district`, `education_qualification`, `university`, `subject`, `result`, `passing_year`, `career_objective`, `job_experience`
)
VALUES (
    '".$_POST['track']."', '".$_POST['firstName']."' , '".$_POST['lastName']."' , '".$_POST['fatherName']."' , '".$_POST['motherName']."' ,'".$_POST['phoneNumber']."' , '".$_POST['emailAddress']."' , ''".$_POST['alternativeEmailAddress']."' , '".$_POST['nationalIdNumber']."' , '".$_POST['birthCertificateNo']."' , '".$_POST['presentAddress']."' , '".$_POST['permanentAddress']."' , '".$_POST['village']."' , '".$_POST['postOffice']."' , '".$_POST['policeStation']."'' ,'".$_POST['district']."' , '".$_POST['educationalQualification']."' , '".$_POST['university']."' , '".$_POST['subject']."' , '".$_POST['result']."' , '".$_POST['passingYear']."','".$_POST['careerObjective']."' , '".$_POST['jobExperience']."'
 );";

mysqli_query($link, $query);
header('location:list.php');
?>
