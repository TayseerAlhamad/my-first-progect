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

    if(isset($_FILES['trn1']) && isset($_POST['trn2']) && isset($_POST['trn3']) && isset($_FILES['trn4']) && isset($_POST['trn5']) && isset($_POST['trn6']) && isset($_FILES['trn7']) && isset($_POST['trn8']) && isset($_POST['trn9']) && isset($_FILES['trn10']) && isset($_POST['trn11']) && isset($_POST['trn12'])) {

        // Get file names
        $trn1 = $_FILES['trn1']['name'];
        $trn4 = $_FILES['trn4']['name'];
        $trn7 = $_FILES['trn7']['name'];
        $trn10 = $_FILES['trn10']['name'];

        // Temporary file paths
        $trn1_tmp = $_FILES['trn1']['tmp_name'];
        $trn4_tmp = $_FILES['trn4']['tmp_name'];
        $trn7_tmp = $_FILES['trn7']['tmp_name'];
        $trn10_tmp = $_FILES['trn10']['tmp_name'];

        // Move uploaded files to the target directory
      
        // Fetch other form data
        $trn2 = $_POST['trn2'];
        $trn3 = $_POST['trn3'];
        $trn5 = $_POST['trn5'];
        $trn6 = $_POST['trn6'];
        $trn8 = $_POST['trn8'];
        $trn9 = $_POST['trn9'];
        $trn11 = $_POST['trn11'];
        $trn12 = $_POST['trn12'];

        $id = 1; // تحديد معرف السجل الذي تريد تحديثه

        // تحديث البيانات في قاعدة البيانات
        $stmt = $conn->prepare("UPDATE class SET trn1=?, trn2=?, trn3=?, trn4=?, trn5=?, trn6=?, trn7=?, trn8=?, trn9=?, trn10=?, trn11=?, trn12=? WHERE id=?");
        $stmt->bind_param("ssssssssssssi", $trn1, $trn2, $trn3, $trn4, $trn5, $trn6, $trn7, $trn8, $trn9, $trn10, $trn11, $trn12, $id);
        if ($stmt->execute() === TRUE) {
            echo "UPDATE SUCCESS";
        } else {
            echo "Error: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    }

    ?>
    <form action="page3.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <!-- edit section one -->
            <input type="file" name="trn1" class="file-input"><br>
            <input type="text" name="trn2" placeholder="edit program one" class="input-field">
            <input type="text" name="trn3" placeholder="edit program one" class="input-field">
            <!-- edit section two -->
            <input type="file" name="trn4" class="file-input"><br>
            <input type="text" name="trn5" placeholder="edit program two" class="input-field">
            <input type="text" name="trn6" placeholder="edit program two" class="input-field">
            <!-- edit section three -->
            <input type="file" name="trn7" class="file-input"><br>
            <input type="text" name="trn8" placeholder="edit program three" class="input-field">
            <input type="text" name="trn9" placeholder="edit program three" class="input-field">
            <!-- edit section four -->
            <input type="file" name="trn10" class="file-input"><br>
            <input type="text" name="trn11" placeholder="edit program four" class="input-field">
            <input type="text" name="trn12" placeholder="edit program four" class="input-field">
            <!-- edit section five -->
            
           
            <input type="submit" class="submit-btn">
        </div>
    </form>
</body>
</html>
