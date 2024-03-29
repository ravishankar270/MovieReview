<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Quiz App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="quiz.css" />
    
  </head>
  <body>
      <br>
      <br>
   
    <div class="home-box custom-box">
        <h3>Instructions:</h3>
        <p>Total number of questions:<span class="total-question"> 5 </span></p>
        <button type="button" class="btn-quiz" onclick="startQuiz()">Start Quiz</button>
    
    </div>

    <div class="quiz-box custom-box hide">
        <div class="question-number">
            <!-- Question 1 of 5 -->
        </div>
        <div class="question-text">
            <!-- Which month comes right after june? -->
        </div>
        <div class="option-container">
            <!-- <div class="option">July</div>
            <div class="option">May</div>
            <div class="option">Feb</div>
            <div class="option">Oct</div> -->

        </div>
        <div class="next-question-btn">
            <button type="button" class="btn-quiz" onclick=next() >Next</button>
        </div>
        <div class="answers-indicator">
            <!-- <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div> -->

        </div>
    </div>
    <div class="result-box custom-box hide">
        <h1>Quiz Result</h1>
        <table>
            <tr>
                <td>Total Question</td>
                <td><span class="total-Question"></span></td>
            </tr>
            <tr>
                <td>Attempt</td>
                <td><span class="total-attempt"></span></td>
            </tr>
            <tr>
                <td>Correct</td>
                <td><span class="total-correct"></span></td>
            </tr>
            <tr>
                <td>Wrong</td>
                <td><span class="total-wrong"></span></td>
            </tr>
            <tr>
                <td>Percentage</td>
                <td><span class="total-percentage"></span></td>
            </tr>
            <tr>
                <td>Your Total Score</td>
                <td><span class="total-score"></span></td>
            </tr>
        </table>
        <button type="button" class="btn-quiz" onclick="tryAgainQuiz()">Try again</button>
        <button type="button" class="btn-quiz" onclick="goToHome()">Go to Home</button>

    </div>
    <script src="quiz.js"></script>
    <script src="question.js"></script>
    <script src="tab.js?v=<?php echo time(); ?>"></script>

</body>
</html>