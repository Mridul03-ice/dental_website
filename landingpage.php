<!DOCTYPE html>
<html>
<head>
    <title>Button Example</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

        pre{
            font-family: Georgia, serif;
            font-size: 3rem;
        }
        body{
            background:  #79efff;
        }
    .button-container {
    text-align: center;
    margin-top: 50px;
}


.register,
.database {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 10px;
    margin:20px;
}

.register:hover,
.database:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    <h1 style="text-align:center;font-size:4rem;font-family: Georgia, serif;margin: 10px">Lab Test</h1>
    <p align="center">
        <img src="12.jpg" alt="" height="200px" weight="200px">
    </p>
    <pre align="center">
    Md: Abdul wahab   ID:20105003
    Year:4th          Semeter:1st
        Department Of ICE
    </pre>
    <div class="button-container">
    <img src="logo.png" alt=""><br>
        <a href="form.php" class="register">Get Register</a>

        <a href="data.php" class="database">Database</a>
    </div>
</body>
</html>