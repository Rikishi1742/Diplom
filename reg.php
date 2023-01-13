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

        <form action="save_user.php" method="post">
            <h2>Authorization</h2>
            <input name="login" type="text" size="15" maxlength="15" placeholder="Email">

            <div>
                <input name="password" type="password" size="15" maxlength="15" placeholder="Password" style=" background: #FFFFFF; border-radius: 111px; width: 340px; height: 45px; border: none; text-align: center; font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 20px; line-height: 0%; color: #2E2E2E; outline:none;">
                <p>Forgot your password?</p>
            </div>

            <input type="submit" value="Log in" name="submit">

            <div class="regBtn">
                <a href="auto.html"><h2>Registration</h2></a>
            </div>
        </form>

    </main>
</body>
</html>