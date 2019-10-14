var userScore = 0;
var computerScore = 0;
const userScore_span = document.getElementById("user-score");
const computerScore_span = document.getElementById("computer-score");
const scoreBoard_div = document.querySelector("#score");
const result_p = document.querySelector(".result > p");
const rock_div = document.getElementById("r");
const paper_div = document.getElementById("p");
const scissor_div = document.getElementById("s");

function getComputerChoice() {
    const choices = ['r', 'p', 's'];
    const randomNumber = Math.floor(Math.random() * 3);
    return choices[randomNumber];
}

function convertToWord(letter) {
    if (letter === "r") return "Rock";
    if (letter === "p") return "Paper";
    return "Scissor";
}

function win(userChoice, computerChoice) {
    const smallUserWorld = "user".fontsize(3).sub();
    const smallCompWorld = "comp".fontsize(3).sub();
    const userChoice_div = document.getElementById(userChoice);
    userScore++;
    userScore_span.innerHTML = userScore;
    computerScore_span.innerHTML = computerScore;
    result_p.innerHTML = `${convertToWord(userChoice)} ${smallUserWorld} beats ${convertToWord(computerChoice)}${(smallCompWorld)}. You win!`;
    userChoice_div.classList.add('green-glow');
    setTimeout(function () {
        userChoice_div.classList.remove('green-glow')
    }, 300);
}

function lose(userChoice, computerChoice) {
    const smallUserWorld = "user".fontsize(3).sub();
    const smallCompWorld = "comp".fontsize(3).sub();
    const userChoice_div = document.getElementById(userChoice);
    computerScore++;
    userScore_span.innerHTML = userScore;
    computerScore_span.innerHTML = computerScore;
    result_p.innerHTML = `${convertToWord(userChoice)} ${smallUserWorld} loses to ${convertToWord(computerChoice)}${(smallCompWorld)}. You lose!`;
    userChoice_div.classList.add('red-glow');
    setTimeout(() => {
        userChoice_div.classList.remove('red-glow')
    }, 300);
}

function draw(userChoice, computerChoice) {
    const smallUserWorld = "user".fontsize(3).sub();
    const smallCompWorld = "comp".fontsize(3).sub();
    const userChoice_div = document.getElementById(userChoice);
    result_p.innerHTML = `${convertToWord(userChoice)}${smallUserWorld} Equals ${convertToWord(computerChoice)}${(smallCompWorld)}. It's Draw! `;
    userChoice_div.classList.add('gray-glow');
    setTimeout(function () {
        userChoice_div.classList.remove('gray-glow')
    }, 300);
}

function game(userChoice) {
    const computerChoice = getComputerChoice();
    switch (userChoice + computerChoice) {
        case "rs":
        case "pr":
        case "sp":
            win(userChoice, computerChoice);
            break;
        case "rp":
        case "ps":
        case "sr":
            lose(userChoice, computerChoice);
            break;
        case "rr":
        case "pp":
        case "ss":
            draw(userChoice, computerChoice);
            break;

    }
}

function main() {


    rock_div.addEventListener('click', function () {
        game("r")
    });

    paper_div.addEventListener('click', function () {
        game("p")
    });

    scissor_div.addEventListener('click', function () {
        game("s")
    });

}


main();
