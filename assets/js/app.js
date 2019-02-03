/*
import TweenMax from "gsap/TweenMax";
import Draggable from "gsap/Draggable";
 */
function interface () {
    let compteur = 100;
    let nivDepth = 60;
    let progressBar02 = $('#bar');
    let percent02 = $('#percentO2');
    let depthTxt = $('#nbDepth');
    let heightDepth = $('#heightDepth');

    percent02.html(compteur + '%');
    progressBar02.addClass("meterbar--green");

    let refreshIntervalId = setInterval(
        function () {
            compteur -= 1;

            percent02.html(compteur + '%');
            progressBar02.width(compteur + "%");

            if (compteur === 20) {
                progressBar02.removeClass("meterbar--green");
                progressBar02.addClass("meterbar--yellow");
                percent02.addClass("percentO2--yellow");
            }
            if (compteur === 10) {
                percent02.addClass("percentO2--red");
                progressBar02.addClass("colorblink");
            }

            if (compteur === 0) {
                alert('You have no more oxygen!');
                clearInterval(refreshIntervalId);
            }
        },
        8000
    );

    depthTxt.html(nivDepth + '%');
    heightDepth.height(nivDepth + "%");

    var sonar = document.getElementById('sonar'); // on récupère l'élément qui sera survolé pour jouer le son
    var son = document.getElementById('son'); // on récupère l'élément <audio>

    sonar.onmouseover = function(){ // lorsque le div est survolé
        son.play(); // on joue le son
    };

    sonar.onmouseout = function() { // lorsque la souris quitte le div
        son.pause(); // on met en pause le son
        son.currentTime = 0;
    }
}



