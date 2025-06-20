<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_grocery";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<style>

           
            h2{
              margin-top:10px;
              text-align:center;
              color:#444;
            }

            table {
                display:flex;
                justify-content:center;
                border-collapse: collapse;
                width: 60%;
                paddin-top:50px;
                padding-left: 600px;
                
                justify-content:center;
                
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

    echo "<h2>Categories List</h2>
    
    <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Item No.</th>
                
            </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["catid"] . "</td>
        <td>" . $row["cat_name"] . "</td>
        <td>" . $row["items"] . "</td>   
      </tr>";
    }
      echo "</table>";
    } else {
        echo "0 results";
    }
    
    
    $conn->close();
    ?>
        
      