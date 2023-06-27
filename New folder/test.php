<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-div">
        <div class="inner-div">
            <h2 class="question">Question is here </h2>
            <ul>
                <li>
                   <i> <input type="radio" name="answer" id="ans1" class="answer"></i>
                   <i><input type="radio" name="answer" id="ans2" class="answer"></i>
                    <i> <input type="radio" name="answer" id="ans3" class="answer"></i>
                        <i><input type="radio" name="answer" id="ans4" class="answer"></i>
                            <i><input type="radio" name="answer" id="ans5" class="answer"></i>
                </li>
            </ul>
            <i><h4 id="h7">agree</h4> <h4 id="h8">natural</h4> <h4 id="h9">disagree</h4></i>
            <br>
            <br>
            <div class="center"><button id="submit">next</button></div>
            <div id="showScore" class="scoreArea"> </div>
            <div id="nextPage" class="Next" > </div>
        </div>
        
    </div>
    <script src="script.js"></script>
</body>
</html>