
<head>
    <meta charset="UTF-8" />
    <title>Rideshare Service</title>
    <link rel="stylesheet" href="Userstyle.css" />
    <style>
        body {
            background-image: url('Profilebg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Muli, sans-serif;
            font-size: 16px;
        }

        h1 {
            font-family: "Space Mono", monospace;
            font-size: 68px;
            padding: 3px;
            text-align: center;
            color: white;
        }

        h2 {
            font-family: "Space Mono", monospace;
            font-size: 36px;
            padding: 3px;
            color: white;
        }

        header {
            font-size: 36px;
        }
        p {
            color: white;
        }
    </style>
</head>
<body>
    <div class="page">
        <div id="head">
            <h1> UserName </h1>
            <header>
                <nav>
                    <a href="FindRide.php"><strong>Find A Ride</strong></a>
                    <a href="Home.php"><strong>Home</strong></a>
                </nav>
            </header>
            <h2> Edit Info </h2>

            <form action="databaseconn.php" method="post">
            <p>ID:</p> <input type="text" name="id"> <br>
            <p>PASSWORD:</p>  <input type ="text" name="psw"> <br>
            <p>EMAIL:</p>  <input type ="text" name="email"> <br>
            <p>ADDRESS:</p>  <input type ="text" name="address"> <br>
            <input type="submit">
            </form>
        </div>
</body>

                
