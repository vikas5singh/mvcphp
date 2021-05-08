<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $result;
    ?>
    <form action="" method="post">
        <p>
            <label for="">Username</label>
            <input type="text" name="username" id="username" required="required">
            <br> 
        </p>
        <p>
            <label for="">Password</label>
            <input type="password" name="password" id="password" required="required">

        </p>
        <br>
        <p>
            <button type="submit"><span>Login</span></button>
            <button type="reset"><span>Cancel</span></button>
        </p>
    </form>
</body>
</html>