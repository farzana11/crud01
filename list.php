<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "select * from users;";

$result = mysqli_query($link, $query);


//while( $row = mysqli_fetch_assoc($result) ){
//    print_r($row);
//}

//alternative


//print_r($row);

?>

<ul>
    <li><a href="#">Download as XL</a> </li>
    <li><a href="#">Download as PDF</a> </li>
    <li><a href="create.html">Create New</a> </li>
</ul>

<table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>Track</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Father's Name</td>
        <td>Mother's Name</td>
        <td>Phone Number</td>
        <td>Email Address</td>
        <td>Alternative Email Address</td>
        <td>National Id Number</td>
        <td>Birth certificate No</td>
        <td>Present Address</td>
        <td>Permanent Address</td>
        <td>Village</td>
        <td>Post Office</td>
        <td>Police Station</td>
        <td>District</td>
        <td>Educational Qualification</td>
        <td>University</td>
        <td>Subject</td>
        <td>Result</td>
        <td>Passing Year</td>
        <td>Career Objective</td>
        <td>Job Experience</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['track']?></td>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['father_name']?></td>
            <td><?php echo $row['mother_name']?></td>
            <td><?php echo $row['phone_number']?></td>
            <td><?php echo $row['email_address']?></td>
            <td><?php echo $row['alternative_email']?></td>
            <td><?php echo $row['national_id_number']?></td>
            <td><?php echo $row['birth_certificate_no']?></td>
            <td><?php echo $row['present_address']?></td>
            <td><?php echo $row['permanent_address']?></td>
            <td><?php echo $row['village']?></td>
            <td><?php echo $row['post_office']?></td>
            <td><?php echo $row['police_station']?></td>
            <td><?php echo $row['district']?></td>
            <td><?php echo $row['education_qualification']?></td>
            <td><?php echo $row['university']?></td>
            <td><?php echo $row['subject']?></td>
            <td><?php echo $row['result']?></td>
            <td><?php echo $row['passing_year']?></td>
            <td><?php echo $row['career_objective']?></td>
            <td><?php echo $row['job_experience']?></td>




            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View/Show</a> |


                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>
        </tr>

    <?php
    }
    ?>

</table>

