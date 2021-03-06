<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Topic</title>
    <link rel = "stylesheet" href = "styleSheet.css">
</head>
<body class = "WelcomeInfo">
    <span><img src="./images/backArrow.png" alt="backArrow" width="50px"></span>

    <div class = "LevelBar">
        <div class = "userPic">
        <img src="./images/user.png" alt="user image" width = "20px">
        <p>Lvl 1</p>
        </div>
        <h4>Username</h4>
        <p>--------------</p>
    </div>

    <div style="text-align: center;">
    <h1>Solver</h1>
    <h3>Select Topic</h3>
    </div>

    <div class="solverCards">
        <Div class = "card">
            <a href="Choose Quiz.html">
            <img src="./images/geometry.jpg"  alt = "geometry" width="250px">
            <div class = "cardInfo">
            <h2>Geometry</h2>
            </div>
            </a>
        </Div>

        <Div class = "card">
            <a href="Choose Quiz.html">
            <img src="./images/Arithmetic.jpg" alt = "Arithmetic" width="250px">
            <div class = "cardInfo">
            <h2>Arithmetic</h2>
            </div>
        </a>
        </Div>

        <Div class = "card">
            <a href="Choose Quiz.html">
            <img src="./images/Circle_Theorem.jpg" alt = "Circle Theorem" width="250px">
            <div class = "cardInfo">
            <h2>Circle Theorem</h2>
            </div>
        </a>
        </Div>

        <Div class = "card">
            <a href="Choose Quiz.html">
            <img src="./images/algebra.jpg" alt = "algebra" width="250px">
            <div class = "cardInfo">
            <h2>Algebra</h2>
            </div>
        </a>
        </Div>
    </div>
    <button id = "chatBox">Chat</button>
    
    <script>
        let btnBack = document.querySelector('span');
    
        btnBack.addEventListener('click', () =>
        {
            window.history.back();
        });
    </script>
</body>
</html>