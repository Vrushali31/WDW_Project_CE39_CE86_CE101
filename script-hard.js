const cards = document.querySelectorAll('.memory-card');
const music_icon = document.querySelectorAll('.music');
let counter = 0;
let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;

function stopmusic() {
    var x = document.getElementById("song");
    if(x.paused){
        x.play();
        localStorage.setItem("audio","play");
        document.getElementById("music-icon").src="images/music.jpg";
    }
    else{
        x.pause();
        localStorage.setItem("audio","pause");
        document.getElementById("music-icon").src="images/music-stop-3.jpg";
    }
}

function pausemusic() {
    var x = document.getElementById("song");
    x.pause();
}

$(document).ready(function() {
    $("#pop").click(function() {
        $('#pausemodal').modal('show');
    });
});

function resumefunction() {
    $("#pausemodal").modal('hide');
    if(localStorage.getItem("audio")=="play"){
        document.getElementById("song").play();
    }
    else{
        document.getElementById("song").paused();
    }
}

function restartfunction() {
    location.reload();
}

function flipMusic() {
    this.classList.toggle('flip');
}

function flipCard() {
    if (lockBoard) return;
    if (this === firstCard) return;
    this.classList.add('flip');

    if (!hasFlippedCard) {
        hasFlippedCard = true;
        firstCard = this;

        return;

    }

    hasFlippedCard = false;
    secondCard = this;

    checkForMatch();


}

function checkForMatch() {
    let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
    isMatch ? disableCards() : unflipCards();


}

function disableCards() {
    counter = counter + 1;
    if (counter == 1) {
        document.querySelector(".progress-bar").style.height = "8.335%";
    } else if (counter == 2) {
        document.querySelector(".progress-bar").style.height = "16.67%";
    } else if (counter == 3) {
        document.querySelector(".progress-bar").style.height = "25.005%";
    } else if (counter == 4) {
        document.querySelector(".progress-bar").style.height = "33.34%";
    } else if (counter == 5) {
        document.querySelector(".progress-bar").style.height = "41.675%";
    } else if (counter == 6) {
        document.querySelector(".progress-bar").style.height = "50%";
    } else if (counter == 7) {
        document.querySelector(".progress-bar").style.height = "58.345%";
    } else if (counter == 8) {
        document.querySelector(".progress-bar").style.height = "66.68%";
    } else if (counter == 9) {
        document.querySelector(".progress-bar").style.height = "75.015%";
    } else if (counter == 10) {
        document.querySelector(".progress-bar").style.height = "83.35%";
    } else if (counter == 11) {
        document.querySelector(".progress-bar").style.height = "91.685%";
    } else if (counter == 12) {
        document.querySelector(".progress-bar").style.height = "100%";
    }
    firstCard.removeEventListener('click', flipCard);
    secondCard.removeEventListener('click', flipCard);
    resetBoard();
    if (counter == 12) {
        $('#exampleModal').modal('show');
    }
}

function unflipCards() {
    lockBoard = true;
    setTimeout(() => {
        firstCard.classList.remove('flip');
        secondCard.classList.remove('flip');
        resetBoard();
    }, 1500);

}

function resetBoard() {
    [hasFlippedCard, lockBoard] = [false, false];
    [firstCard, secondCard] = [null, null];
}

(function shuffle() {
    cards.forEach(card => {
        let randomPos = Math.floor(Math.random() * 12);
        card.style.order = randomPos;
    });
})();
cards.forEach(card => card.addEventListener('click', flipCard));
