<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_grocery";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cus_info";
$result = $conn->query($sql);

if ($result-> num_rows > 0) {
    echo "<style>

           
            h2{
              margin-top:10px;
              text-align:center;
              color:#444;
            }

            table {
                border-collapse: collapse;
                width: 100%;
                padding: 10px;
                border:2px solid black;
                
            }

            th, td {
                border: 2px solid black;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #ffb700;
            }
          </style>";

    echo "<h2>Customer List</h2>
    
    
      <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>Pin Code</th>
                <th>Username</th>
                <th>Password</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["uid"] . "</td>
        <td>" . $row["Name"] . "</td>
        <td>" . $row["mob"] . "</td>
        <td>" . $row["address"] . "</td>
        <td>" . $row["pinCode"] . "</td>
        <td>" . $row["username"] . "</td>
        <td>" . $row["password"] . "</td>   
      </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>