<?php
 $servername = "localhost";
 $username = "tassnem";
 $password = "12345678";
 $dbname = "reservations";
  
     // Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
 
                
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

$result = mysqli_query($conn,"SELECT * FROM data2");
echo "<h2><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Reservations </h2>";
echo "<div><table>
<thead>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Number of people</th>
        <th>Date</th>
        <th>Massege</th>
    </tr>
</thead>
<div>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['number'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['massege'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
<style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
div {
    background-color: #cb8c8c;
    color: #ffffff;
    text-align: left;
}
 th,
 td {
    padding: 12px 88px;
}
 tr {
    border-bottom: 1px solid #dddddd;
}

tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

 tr {
    border-bottom: 2px solid #980d00;
}
 tr.active-row {
    font-weight: bold;
    color:  #cb8c8c;
}
</style>