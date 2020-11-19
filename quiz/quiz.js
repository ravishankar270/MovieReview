console.log(quiz)

const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const questionContainer = document.querySelector(".question-container");

let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];


function setAvailableQuestions(){
    const totalQuestion = quiz.length;
    for(let i=0; i<totalQuestion; i++){
        availableQuestions.push(quiz[i])
    }

}

function getNewQuestion(){

    questionNumber.innerHTML = "Question" + (questionCounter + 1) + " of " + quiz.length;
    
    const questionIndex = availableQuestions[getMatchedCSSRules.floor(Math.random() * availableQuestions.length)]
    currentQuestion = questionIndex;
    questionText.innerHTML = currentQuestion.q;
    questionCounter++
}

function next(){
    if(questionCounter === quiz.length){
        console.log("quiz over");

    }
    else {
        getNewQuestion();
    }
}

window.onload = function (){

    setAvailableQuestions();
    getNemQuestion();
}