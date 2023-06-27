const quizDB = [
    {
        question: "Q1: You don't feel particularly pleased with the way I am. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    },
    {
        question: "Q2: You am intensely interested in other people.   ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q3: You feel that life is very rewarding. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q4: You have very warm feelings towards almost everyone.    ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q5: You rarely wake up feeling rested. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    },
    {
        question: "Q6: . You are not particularly optimistic about the future.",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    },
    {
        question: "Q7: You find most things amusing. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q8: You are always committed and involved.  ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q9: Life is good.  ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q10: You do not think that the world is a good place. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    },
    {
        question: "Q11: You laugh a lot. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q12: You are well satisfied about everything in your life. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q13: You don't think You look attractive. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    },
    {
        question: "Q14: There is a gap between what You would like to do and what You have done. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    },
    {
        question: "Q15: You am very happy. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q16: You find beauty in some things. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q17: You always have a cheerful effect on others. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q18: You can fit in (find time for) everything I want to. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q19: You feel that I am not especially in control of my life. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    },
    {
        question: "Q20: You feel able to take anything on. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q21: You feel fully mentally alert. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q22: You often experience joy and elation. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q23: You don't find it easy to make decisions. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    },
    {
        question: "Q24: . You don't have a particular sense of meaning and purpose in my life.",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    },
    {
        question: "Q25: I feel I have a great deal of energy. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q26: I usually have a good influence on events. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "1"
    },
    {
        question: "Q27: I don't have fun with other people. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    },
    {
        question: "Q28: I don't feel particularly healthy. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    },
    {
        question: "Q29: I don't have particularly happy memories of the past. ",
        a:"",
        b:"",
        c:"",
        d:"",
        e:"",
        ans: "2"
    }
];

const question = document.querySelector('.question');
const submit =  document.querySelector('#submit');

const answers = document.querySelectorAll('.answer');

const showScore = document.querySelector('#showScore');

const nextPage = document.querySelector('#nextPage');

let questionCount = 0;
let score = 0;

const loadQuestion = () => {

    console.log(quizDB[questionCount]);
    const questionList = quizDB[questionCount];

    question.innerText = questionList.question;
};

loadQuestion();

const getCheckAnswer = () => {
    let answer;

    answers.forEach((curAnsElem) => {
        if(curAnsElem.checked){
            answer = curAnsElem.id;
        }
    });
    return answer;
};

const deselectAll = () => {
    answers.forEach((curAnsElem) => curAnsElem.checked = false );
};

submit.addEventListener('click', () => {
    
    console.log(questionCount);
    
    test();


    questionCount++;

    deselectAll();

    if (questionCount == quizDB.length) {
        score =  Math.round((score*100)/29).toFixed(2);
       
        showScore.innerHTML =`
        <h3> Your Hapiness Index is ${score}/${100} </h3>
        <button class = "btn" onclick="location.reload()"> Take again</button>
    `;

        if (score >= 75){
            nextPage.innerHTML =`
            <button class="bttn" 
            onclick="window.location.href = 'score1.php';"> submit </button>
        `;
        }
        else if (score < 45){
            nextPage.innerHTML =`
            <button class="bttn" 
            onclick="window.location.href = 'score3.php';"> submit </button>
        `;
        }
        else if (45 < score < 75){
            nextPage.innerHTML =`
            <button class="bttn" 
            onclick="window.location.href = 'score2.php';"> submit </button>
        `;
        };
       


    showScore.classList.remove('scoreArea');

    }
        

    else if (questionCount < quizDB.length){

        console.log(score);
        loadQuestion();

    }
});

const test = () => {

    const checkedAnswer = getCheckAnswer();
    if (questionCount < quizDB.length){
    if ( "1" === quizDB[questionCount].ans  ) {
        
        if (checkedAnswer == "ans1") {
            score=score+1;
        }

        else if (checkedAnswer == "ans2") {
            score=score+0.75;
        }

        else if (checkedAnswer == "ans3") {
            score=score+0.5;
        }

        else if (checkedAnswer == "ans4") {
            score=score+0.25;
        }
        else if (checkedAnswer == "ans5") {
            score=score+0;
        }

    }

    else if ( "2" === quizDB[questionCount].ans ) {
        
        if (checkedAnswer == "ans1") {
            score=score+0;
        }

        else if (checkedAnswer == "ans2") {
            score=score+0.25;
        }

        else if (checkedAnswer == "ans3") {
            score=score+0.5;
        }

        else if (checkedAnswer == "ans4") {
            score=score+0.75;
        }
        else if (checkedAnswer == "ans5") {
            score=score+1;
        }

    };
    };
}