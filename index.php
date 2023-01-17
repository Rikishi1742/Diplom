<?php
include("db.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gecko</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceland&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body>
    <div class="LandingPage">
        <img src="img/landing.png" alt="">
    </div>

    <div class="nav">
        <div class="Container" style="display:flex; justify-content: space-between; align-items: center;">
	    <div class="Logo" style="display: flex; align-items: center;">
		<img src="img/logo.png" alt="">
	    </div>
        
            <div class="Items">
                <p>About Us</p>
                <a href="lessons.html"><p>Education</p></a>
                <a href="reg.php"><p>Registration</p></a>
                <p>Settings</p>
            </div>
	    
	    <div class="burger">
		<img src="img/burger.png" alt="">
            </div>
        </div>
    </div>

    <main>
        <div class="Container">
            <div class="Content" style="margin-top: 30px;">
                <div class="L">
                    <h2>Learn to be <br> the  <b style="color: #66CC66;">Best</b></h2> 
                    <p>Educational and methodical <br> complex for testing information <br> systems</p>
                    <div class="btn"><p>Education</p></div>
                </div>

                <div class="R" style="margin-top: 90px;" id="img">
                    <img src="img/Triengle.png" alt="">
                </div>
            </div>
        </div>


        <div class="ContainerWrapper">
            <div class="Container">
                <div class="Content" style="margin-top: 30px; height: auto;">
                    <div class="L">
                       
                    </div>
    
                    <div class="R" style="margin-top: 90px;">
                        <h2>About Us</h2> 
                    </div>
                </div>
            </div>
            <div class="Container">
                <div class="Content" style="margin-top: 30px;">
                    <p style="margin: 0;">
                        Gecko is an <b>online educational platform</b> whose task is to provide an opportunity for each person to test their skills in <b>security testing</b>
                    </p>
                    <div class="Recall">
                        <div class="Comment">
                            <h3>Иванов И.</h3>
                            <p>Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - </p>
                            <img src="img/stars.png" alt="">
                        </div>

                        <div class="CommentBig">    
                            <h3>Иванов И.</h3>
                            <p>Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - </p>
                            <img src="img/stars.png" alt="">
                        </div>

                        <div class="Comment">
                            <h3>Иванов И.</h3>
                            <p>Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - Отзыв - </p>
                            <img src="img/stars.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="Container">
            <div class="Content" style="margin-top: 30px; margin-bottom: 70px; align-items: start;">
                <div class="L" style="margin-top: 90px; width: 45%; justify-content: space-between;">
                    <h2>Education</h2> 
                    <p><b>Gecko</b>  is a tutorial focused on providing testing and security for web applications.
                        The purpose of this complex is to make education in the field of information security accessible, understandable and free</p>
                    <div class="btn"><p>Apply for a course</p></div>
                </div>

                <div class="R" style="margin-top: 90px; width: 45%; width: auto;">
                    <h2>Course program</h2> 
                    <p>Modern Network Security Threats</p>
                    <p>Securing Network Devices</p>
                    <p>Secure Network Management</p>
                    <p>Final control</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="Container">
            <div class="Content" style="height: auto;">
                <div class="Column" style="width: 25%;">
                    <h2>SiteMap</h2>
                    <div class="Line"></div>
                    <p>Index</p>
                    <p>About Us</p>
                    <p>Edication</p>
                </div>

                <div class="Column" style="width: 50%;">

                </div>

                <div class="Column"  style="width: 25%;">
                    <h2>Autor</h2>
                    <div class="Line"></div>
                    <p>Platonov Anton</p>
                    <p>Group IR3-19</p>
                </div>
            </div>
        </div>
        <div class="Container">
            <div class="Content" style="height: auto;">
                <img src="img/logo.png" alt="">
                <p>Email: Gecko123@ggmail.ru   <br> User Care Department: +7 80 333 26 05 <br> Contact Center: +7 800 555 35 35</p>
                <p>Cheboksary, avenue. Mira, 40</p>
                <div class="Line"></div>
                <p style="width: 30%;">© Gecko, 2023</p>
                <p style="width: 70%;">We use <u>cookies</u> to personalize the services and ease of use. <br>
                    If you do not agree to their use, change your browser settings.</p>
            </div>
        </div>
    </footer>

</body>
</html>