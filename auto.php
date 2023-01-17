<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceland&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main class="bgWrapper">
        <div class="bg">

        </div>

        <form action="testreg.php" method="post">
            <h2>Authorization</h2>

            <input type="text" name="login" id="" placeholder="Email" maxlength="15">

            <div>
                <input type="text" name="password" id="" placeholder="Password" maxlength="15">
                <p>Forgot your password?</p>
            </div>
            
            
            <input type="submit" value="Log in">

            <div class="regBtn">
                <a href="reg.php"><h2>Registration</h2></a>
            </div>
        </form>
    </main>
</body>
</html>