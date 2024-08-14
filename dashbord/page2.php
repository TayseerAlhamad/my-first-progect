<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .file-input {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f0f0f0;
        }

        .submit-btn {
            width: calc(100% - 22px);
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-sizing: border-box;
        }

        .submit-btn:hover {
            background-color: #45a049;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inex";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if(isset($_FILES['gum1']) && isset($_POST['gum2']) && isset($_POST['gum3']) && isset($_FILES['gum4']) && isset($_POST['gum5']) && isset($_POST['gum6']) && isset($_FILES['gum7']) && isset($_POST['gum8']) && isset($_POST['gum9'])&& isset($_FILES['gum10'])&& isset($_POST['gum11'])&& isset($_POST['gum12'])&& isset($_FILES['gum13'])&& isset($_POST['gum14'])&& isset($_POST['gum15']) && isset($_FILES['gum16'])&& isset($_POST['gum17'])&& isset($_POST['gum18'])){

    // هنا يجب عليك تعيين قيمة $conn للاتصال بقاعدة البيانات

    // Get file names
    $gum1 = $_FILES['gum1']['name'];
    $gum4 = $_FILES['gum4']['name'];
    $gum7 = $_FILES['gum7']['name'];
    $gum10 = $_FILES['gum10']['name'];
    $gum13 = $_FILES['gum13']['name'];
    $gum16 = $_FILES['gum16']['name'];
    // Temporary file paths
    $gum1_tmp = $_FILES['gum1']['tmp_name'];
    $gum4_tmp = $_FILES['gum4']['tmp_name'];
    $gum7_tmp = $_FILES['gum7']['tmp_name'];
    $gum10_tmp = $_FILES['gum10']['tmp_name'];
    $gum13_tmp = $_FILES['gum13']['tmp_name'];
    $gum16_tmp = $_FILES['gum16']['tmp_name'];

    // Fetch other form data
    $gum2 = $_POST['gum2'];
    $gum3 = $_POST['gum3'];
    $gum5 = $_POST['gum5'];
    $gum6 = $_POST['gum6'];
    $gum8 = $_POST['gum8'];
    $gum9 = $_POST['gum9'];
    $gum11 = $_POST['gum11'];
    $gum12 = $_POST['gum12'];
    $gum14 = $_POST['gum14'];
    $gum15 = $_POST['gum15'];
    $gum17 = $_POST['gum17'];
    $gum18 = $_POST['gum18'];

    $id = 1; // تحديد معرف السجل الذي تريد تحديثه

    // تحديث البيانات في قاعدة البيانات
    $stmt = $conn->prepare("UPDATE program SET gum1=?, gum2=?, gum3=?, gum4=?, gum5=?, gum6=?, gum7=?, gum8=?, gum9=?, gum10=?, gum11=?, gum12=?, gum13=?, gum14=?, gum15=?, gum16=?, gum17=?, gum18=? WHERE id=?");
    $stmt->bind_param("ssssssssssssssssssi", $gum1, $gum2, $gum3, $gum4, $gum5, $gum6,$gum7,$gum8, $gum9,$gum10,$gum11,$gum12,$gum13,$gum14,$gum15,$gum16,$gum17,$gum18, $id);

    if ($stmt->execute() === TRUE) {
        echo "UBDATE SECCUSS";
    } else {
        echo "errer " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<body>
    <form action="page2.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <!-- edit section one -->
            <input type="file" name="gum1" class="file-input"><br>
            <input type="text" name="gum2" placeholder="edit program one" class="input-field">
            <input type="text" name="gum3" placeholder="edit program one" class="input-field">
            <!-- edit section two -->
            <input type="file" name="gum4" class="file-input"><br>
            <input type="text" name="gum5" placeholder="edit program two" class="input-field">
            <input type="text" name="gum6" placeholder="edit program two" class="input-field">
            <!-- edit section three -->
            <input type="file" name="gum7" class="file-input"><br>
            <input type="text" name="gum8" placeholder="edit program three" class="input-field">
            <input type="text" name="gum9" placeholder="edit program three" class="input-field">
            <!-- edit section four -->
            <input type="file" name="gum10" class="file-input"><br>
            <input type="text" name="gum11" placeholder="edit program four" class="input-field">
            <input type="text" name="gum12" placeholder="edit program four" class="input-field">
            <!-- edit section five -->
            <input type="file" name="gum13" class="file-input"><br>
            <input type="text" name="gum14" placeholder="edit program five" class="input-field">
            <input type="text" name="gum15" placeholder="edit program five" class="input-field">
            <!-- edit section six -->
            <input type="file" name="gum16" class="file-input"><br>
            <input type="text" name="gum17" placeholder="edit program six" class="input-field">
            <input type="text" name="gum18" placeholder="edit program six" class="input-field">
            <input type="submit" class="submit-btn">
        </div>
    </form>
</body>
</html>
