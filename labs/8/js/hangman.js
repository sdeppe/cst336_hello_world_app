// VARIABLES
var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 
                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 
                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

var words = [{ word: "snake", hint: "It's a reptile" }, 
             { word: "monkey", hint: "It's a mammal" }, 
             { word: "beetle", hint: "It's an insect" }];

var selectedWord = "";
var selectedHint = "";
var board = [];
var remainingGuesses = 6;
            
// LISTENERS
window.onload = startGame();

$(".letter").click(function() {
    console.log($(this).attr("id"));
    checkLetter($(this).attr("id"));
    disableButton($(this));
});

$("#letterBtn").click(function() {
    var boxVal = $("#letterBox").val();
    console.log("You pressed the button and it had the value: " + boxVal);
})

$("#hint").on("click", function() {
    remainingGuesses -= 1;
    updateMan();
    $("#word").append("<span class = 'hint'>Hint: " + selectedHint + "</span>");
})

$(".replayBtn").on("click", function() {
    location.reload();
});

// FUNCTIONS
function startGame() {
    pickWord();
    createLetters();
    initBoard();
    updateBoard();
}

function pickWord() {
    let randInt = Math.floor(Math.random() * words.length);
    selectedWord = words[randInt].word.toUpperCase();
    selectedHint = words[randInt].hint;
}

function createLetters() {
    for (var letter of alphabet) {
        let letterInput = '"' + letter + '"';
        $("#letters").append("<button class='btn btn-success letter' id='" + letter + "'>" + letter + "</button>");
    }
}

function initBoard() {
    for (var letter in selectedWord) {
        board.push("_");
    }
}

function updateBoard() {
    $("#word").empty();
    
    for (var i=0; i < board.length; i++) {
        $("#word").append(board[i] + " ");
    }
    
    $("#word").append("<br />");
    // $("#word").append("<span class='hint'>Hint: " + selectedHint + "</span>")
}

function updateWord(positions, letter) {
    for (var pos of positions) {
        board[pos] = letter;
    }
    
    updateBoard(board);
    
    if (!board.includes('_')) {
        endGame(true);
    }
}

function checkLetter(letter) {
    var positions = new Array();
    
    for (var i = 0; i < selectedWord.length; i++) {
        if (letter == selectedWord[i]) {
            positions.push(i);
        }
    }
    
    if (positions.length > 0) {
        updateWord(positions, letter);
    } else {
        remainingGuesses -= 1;
        updateMan();
        
        if (remainingGuesses <= 0) {
            endGame(false);
        }
    }
}
function updateMan() {
    $("#hangImg").attr("src", "img/stick_" + (6 - remainingGuesses) + ".png");
}

function endGame(win) {
    $("#letters").hide();
    
    if (win) {
        $('#won').show();
    } else {
        $('#lost').show();
    }
}

function disableButton(btn) {
    btn.prop("disabled",true);
    btn.attr("class", "btn btn-danger")
}