<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>
    <link rel = "stylesheet" href = "styleSheet.css">
</head>
<body class = "WelcomeInfo">
    <h1 style="text-align: center;">Quiz Name</h1>


    <div class="QuizBackground">
        <p class = "Quiztime">1:30:42</p>


        <div class="QuizQuestions">
            <h3>Question 1</h3>
            <p>What is the sum of 1 + 1?</p>
            <button>A. 1</button>
            <button>B. 2</button>
            <button>C. 3</button>
            <button>D. 5</button>
        </div>

        <div class="QuizQuestions">
            <h3>Question 2</h3>
            <p>What is the sum of 1 + 2?</p>
            <input type="text">
        </div>

        <div class="QuizQuestions">
            <h3>Question 3</h3>
            <p>Is the sum of 1 + 2 = 5?</p>
            <button> True </button>
            <button>False</button>
        </div>

        <button id = "finishButton" onclick="showCustom()"> Finish Quiz </button>
        <div id = "customAlert">
            <div id = "box">
                <div class="heading">
                    Warning
                </div>
                <div class = "content">
                    <p>Are you sure you want to submit? </p>
                    <button type = "button" id = "confirmBtn" onclick="hideAlert()">No</button>
                    <button type = "button" id = "confirmBtn1"><a href="results.html">Yes</button>
                </div>     
            </div>
        </div>
    </div>

<Script>
    var customalert = document.getElementById("customAlert");
    function showCustom()
    {
        customalert.style.display = 'block';
    }

    function hideAlert()
    {
        customalert.style.display = 'none';
    }
</Script>
</body>
</html>