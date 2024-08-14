<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.input-field {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.submit-btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

.submit-btn:hover {
    background-color: #45a049;
}


</style>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inex";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['vidou1']) && isset($_POST['vidou2'])){
    // Fetch other form data
    $vidou1 = $_POST['vidou1'];
    $vidou2 = $_POST['vidou2'];
   
    $id = 1;

    // تحديث البيانات في قاعدة البيانات
    $stmt = $conn->prepare("UPDATE welcome SET vidou1=?, vidou2=? WHERE id=?");
    $stmt->bind_param("ssi", $vidou1, $vidou2, $id);

    if ($stmt->execute() === TRUE) {
        echo "update success";
    } else {
        echo "error " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="vidou1" placeholder="Edit Text One" class="input-field">
        <input type="text" name="vidou2" placeholder="Edit Text Two" class="input-field">
        <input type="submit" value="Submit" class="submit-btn">
    </form>
</div>
</body>
</html>
