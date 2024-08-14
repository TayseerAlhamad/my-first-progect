<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.navbar {
    overflow: hidden;
    background-color: #333;
}

.navbar a {
    float: right;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

@media screen and (max-width: 600px) {
    .navbar a {
        float: none;
        display: block;
        text-align: right;
    }
}

    </style>

<body>
<div class="navbar">
        <a href="page1.php">welcome page</a>
        <a href="page2.php">shoose program</a>
        <a href="page3.php">our class</a>
        <a href="page4.php">footer section </a>
    </div>

    <div style="padding: 20px;">
        <h2>welcome </h2>
        <p>how are you admain</p>
    </div>
</body>
</html>