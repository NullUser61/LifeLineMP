<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Donors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="viewpatient.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,200&display=swap');
    </style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,200&display=swap');
</style>
</head>
<body>

    <h3>Patient Table</h3>
     
    <div class="table-details">

        <table class="table">
        <tr>
        <th>PAadhaarNumber</th>
        <th>PFName</th>
        <th>PLName</th>
        <th>PAge</th>
        <th>PGender</th>
        <th>PCNumber</th>
        <th>PAddress</th>
        <th>PBType</th>
        <th>TimeStamp</th>
        </tr>
        <?php
        include "conn.php";
        session_start(); 
        error_reporting(0);
        $sql = "SELECT * FROM PATIENT where SID= ".$_SESSION['SID'];
        $result=mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)) {
            echo "<td>" . $row['AadhaarNumber'] . "</td>";
            echo "<td>" . $row['PFName'] . "</td>";
            echo "<td>" . $row['PLName'] . "</td>";
            echo "<td>" . $row['PAge'] . "</td>";
            echo "<td>" . $row['PGender'] . "</td>";
            echo "<td>" . $row['PCNumber'] . "</td>";
            echo "<td>" . $row['PAddress'] . "</td>";
            echo "<td>" . $row['PBType'] . "</td>";
            echo "<td>" . $row['TimeStamp'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </div>
    
</body>
</html>