<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table> 
        <tr>
        <th> StudentID </th>
        <th> FullName </th>
        <th> Section </th>
    </tr>

    <?php
    
        $conn = mysqli_connect("localhost", "root", "", "wd33p");
// Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT StudentID, Fullname, Section FROM student";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["StudentID"]. "</td><td>" . $row["Fullname"] . "</td><td>"
. $row["Section"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>


    </table>
</body>
</html>