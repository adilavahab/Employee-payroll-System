<html lang="en">
<head>
    <title>
        UPDATE OR DELETE
    </title>
    <style>
    table, th, td {
        border: 1px solid lightslategray;
        padding: 15px;
        }
        p {
            color: #1c1124;
        text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);
        font-weight: bolder;
        font-family:serif;
        text-align: center;
        text-decoration: underline;
        font-size: 16%;
        }
        a{color: #96b3b0;}
    body {
        background-color: #5a082d;
        font-family: "Times New Roman", Helvetica, sans-serif;
        font-size: 16em;
        color: 	#CCFF99;
        }
        th{
        color:lightcoral;
    }

    </style>
    

</head>
<body>
        <p><b>UPDATE/DELETE</b></p>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "EMPLOYEE";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    $sql="SELECT*FROM PAYROLL";
    $result= $conn->query($sql);

    ?> 
    <table style="width:100%">
    <tr>
        <th>EMPID</th>
        <th>NAME</th>
        <th>AGE</th>
        <th>DOB</th>
        <th>GENDER</th>
        <th>BLOOD GRP</th>
        <th>MOBILE NO</th>
        <th>DESIGNATION</th>
        <th>SALARY</th>
        <th style="color:lightcyan;">UPDATE</th>
        <th style="color:lightcyan;">DELETE</th>
    </tr>

    <?php
    if($result->num_rows>0) {
        while($row = $result->fetch_assoc()) {
        $id1= $row["EMPID"];
            ?>
        
        <tr>
        <td> <?php echo $row["EMPID"];  ?></td>
        <td> <?php echo $row["NAME"];  ?></td>
        <td> <?php echo $row["AGE"];  ?></td>
        <td> <?php echo $row["DOB"];  ?></td>
        <td> <?php echo $row["GENDER"];  ?></td>
        <td> <?php echo $row["BLOOD_GRP"];  ?></td>
        <td> <?php echo $row["PHONE"];  ?></td>
        <td> <?php echo $row["DESIGNATION"];  ?></td>
        <td> <?php echo $row["SALARY"];  ?></td>
        <td> <a href="update.php?id2=<?php echo $id1; ?>" > UPDATE</a></td>
        <td> <a href="delete.php?id1=<?php echo $id1; ?>" onclick="return confirm('Permanently delete the record?You cannot undo this.')">DELETE</a></td>
        
        
    </tr>
    <?php
    
            
        }
    } else {
        echo "0 result";
    }
    echo"</table>";
    $conn->close();
    
?>

</table>
<script>
            var el_up = document.getElementById("GFG_UP");
              
            el_up.innerHTML = 
                "Click on the LINK for further confirmation."; 
        </script> 
</body>  
</html>    
