
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .output-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            border:2px solid black;
        }

        .success {
            color: #4CAF50;

        }

        .error {
            color: #FF0000;
        }
    </style>
    <title>Output</title>
</head>
<body>

<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_grocery';
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die('could not connect:' . mysqli_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["catid"];
    $name = $_POST["cat_name"];
    $item = $_POST["items"];
}

$sql = "INSERT INTO categories(`catid`,`cat_name`,`items`) VALUES ('$id','$name','$item')";

echo '<div class="output-container">';
if ($conn->query($sql) === TRUE) {
    echo '<p class="success">New Category Added successfully</p>';
} else {
    echo '<p class="error">Error: ' . $sql . '<br>' . $conn->error . '</p>';
}
echo '</div>';

$conn->close();
?>

</body>
</html>
