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
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .submit-btn {
            width: calc(100% - 20px);
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-sizing: border-box;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #45a049;
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
    if(isset($_POST['text1']) && isset($_POST['text2']) && isset($_POST['text3']) && isset($_POST['text4']) && isset($_POST['text5']) && isset($_POST['text6'])&& isset($_POST['text7'])&& isset($_POST['text8']) && isset($_POST['text9'])){
    
       $text1=$_POST['text1'];
       $text2=$_POST['text2'];
       $text3=$_POST['text3'];
       $text4=$_POST['text4'];
       $text5=$_POST['text5'];
       $text6=$_POST['text6'];
       $text7=$_POST['text7'];
       $text8=$_POST['text8'];
       $text9=$_POST['text9'];
    
    
        $id = 1; // تحديد معرف السجل الذي تريد تحديثه
    
        // تحديث البيانات في قاعدة البيانات
        $stmt = $conn->prepare("UPDATE footer SET text1=?,text2=?,text3=?,text4=?,text5=?,text6=?,text7=?,text8=?,text9=? WHERE id=?");
        $stmt->bind_param("sssssssssi", $text1,$text2,$text3,$text4,$text5,$text6, $text7,$text8,$text9,$id);
        if ($stmt->execute() === TRUE) {
            echo "UPDATE SUCCESS";
        } else {
            echo "error " . $conn->error;
        }
    
        $stmt->close();
        $conn->close();
    }
    ?>
<form action="page4.php" method="post">
        <div class="container">
            <input type="text" name="text1" placeholder="Edit Text One"><br>
            <input type="text" name="text2" placeholder="Edit Text Two"><br>
            <input type="text" name="text3" placeholder="Edit Text Three"><br>
            <input type="text" name="text4" placeholder="Edit Text Four"><br>
            <input type="text" name="text5" placeholder="Edit Text Location One"><br>
            <input type="text" name="text6" placeholder="Edit Text Location Two"><br>
            <input type="text" name="text7" placeholder="Edit Link Facebook"><br>
            <input type="text" name="text8" placeholder="Edit Link X"><br>
            <input type="text" name="text9" placeholder="Edit Text Location instagram"><br>

           
            <input type="submit" class="submit-btn" value="Submit">
        </div>
    </form>
</body>
</html>