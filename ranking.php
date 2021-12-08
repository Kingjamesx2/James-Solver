<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Page</title>
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
    <h1>Ranking</h1>
    <table>
        <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Experience</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
       
    </table>
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