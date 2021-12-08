<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results Page</title>
    <link rel = "stylesheet" href = "styleSheet.css">

</head>
<body class = "WelcomeInfo">
    <div class = "LevelBar">
        <div class = "userPic">
        <img src="./images/user.png" alt="user image" width = "20px">
        <p>Lvl 1</p>
        </div>
        <h4>Username</h4>
        <p>--------------</p>
    </div>

    <h1 style="text-align: center;">Results</h1>

    <div class="resultGrid">

        <div class="resultQuestions">
            <h3>Question 1</h3>
            <p>What is the sum of 1 + 1?</p>
            <button>A. 1</button>
            <button style="border: 5px Solid rgb(45, 245, 45);">B. 2</button>
            <button>C. 3</button> 
            <button>D. 5</button>

            <hr>

            <div class = "resultExplanation">
                <p><b>Explanation</b></p>
                <p>2 + 2 = 4</p>
                <p>1 + 1 + 1 + 1 = 4</p>
            </div>

            <hr>

            <div class = "resultLink">
                <p>Try link to further understand</p>
                <button style="background-color: rgb(56, 255, 56);">Link</button>
            </div>
        </div>

        

     <div class="resultQuestions">
            <h3>Question 2</h3>
            <p>What is the sum of 1 + 2?</p>
            <span style="border: 3px solid rgb(64, 250, 64);"><input type="text" value="3"></span>
            
            <hr>
            
            <div>
                <p><b>Explanation</b></p>
                <P>1 + 2 = ?</P>
                <p>1 + (1 + 1) = ?</p>
                <p>1 + 1 + 1 = 3</p>
            </div>
            
            <hr>

            <div>
                <P> No Link Available</P>
            </div>
        </div>

        <div class="resultQuestions">
            <h3>Question 3</h3>
            <p>Is the sum of 1 + 2 = 5?</p>
            <button style="border: 3px Solid rgb(47, 255, 64);"> True </button>
            <button style="border: 3px Solid red;">False</button>

            <hr>

            <div>
                <p>True is correct answer</p>
            </div>

            <hr>


            <div class = "resultLink">
                <p>Try link to further understand</p>
                <button style="background-color: rgb(56, 255, 56);">Link</button>
            </div>
        </div>

        <button id = "finishButton"><a href="Welcome.html"> Finish Quiz </a></button>
    </div>
</body>
</html>