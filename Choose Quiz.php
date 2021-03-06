<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Quiz Page</title>
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

    <div class = "SolverTable">
        <h1>Choose Quiz</h1>
        <table>
            <tr>
                <a href="Quiz.html">
                <th>Number</th>
                <th>Name</th>
                <th>No. of Questions</th>
                <th>Time</th>
                </a>
            </tr>
            <tr>
                <a href="Quiz.html">
                <td>1</td>
                <td>Geometry</td>
                <td>4</td>
                <td>30 mins</td>
                <td><button id = "selectQuiz"><a href="Quiz.html">Select</a></button></td>

            </a>

            </tr>
            <tr>
                <td>2</td>
                <td>Algebra</td>
                <td>3</td>
                <td>30 mins</td>
                <td><button><a href="Quiz.html">Select</a></button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Cirlce Theorem</td>
                <td>3</td>
                <td>30 mins</td>
                <td><button><a href="Quiz.html">Select</a></button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Arithmetic</td>
                <td>3</td>
                <td>30 mins</td>
                <td><button><a href="Quiz.html">Select</a></button></td>
            </tr>
        </table>
    </div>

    <script>
        let btnBack = document.querySelector('span');
    
        btnBack.addEventListener('click', () =>
        {
            window.history.back();
        });
    </script>
</body>
</html>