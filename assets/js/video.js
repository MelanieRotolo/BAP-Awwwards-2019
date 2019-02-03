var frameNumber = 0, // start video at frame 0
    // lower numbers = faster playback
    playbackConst = 1000,
    // get page height from video duration
    setHeight = document.getElementById("set-height"),
    // select video element
    vid = document.getElementById('v0');
// var vid = $('#v0')[0]; // jquery option

// dynamically set the page height according to video length
vid.addEventListener('loadedmetadata', function() {
    setHeight.style.height = Math.floor(vid.duration) * playbackConst + "px";
});


// Use requestAnimationFrame for smooth playback
function scrollPlay(){
    var frameNumber  = window.pageYOffset/playbackConst;
    vid.currentTime  = frameNumber;
    vid.pause();
    console.log(Math.round(frameNumber*10)/10);


    if(Math.round(frameNumber*10)/10 > 8.2 && Math.round(frameNumber*10)/10 < 10.8) {
        $('.christ').css('display', 'block');
    } else {
        $('.christ').css('display', 'none');
    }
    if(Math.round(frameNumber*10)/10 > 14.8 && Math.round(frameNumber*10)/10 < 16.3) {
        $('.scyllia').css('display', 'block');
    } else {
        $('.scyllia').css('display', 'none');
    }
    if(Math.round(frameNumber*10)/10 > 21.6 && Math.round(frameNumber*10)/10 < 24.9) {
        $('.shicheng').css('display', 'block');
    } else {
        $('.shicheng').css('display', 'none');
    }
    if(Math.round(frameNumber*10)/10 > 30.9 && Math.round(frameNumber*10)/10 < 36.5) {
        $('.leviathan').css('display', 'block');
    } else {
        $('.leviathan').css('display', 'none');
    }
    if(Math.round(frameNumber*10)/10 > 48.5 && Math.round(frameNumber*10)/10 < 53.2) {
        $('.wreck').css('display', 'block');
    } else {
        $('.wreck').css('display', 'none');
    }
    if(Math.round(frameNumber*10)/10 > 66.4 && Math.round(frameNumber*10)/10 < 73.3) {
        $('.cthulhu').css('display', 'block');
    } else {
        $('.cthulhu').css('display', 'none');
    }
    if(Math.round(frameNumber*10)/10 > 73.4) {
        $('.window').removeClass('show');
    }

    $('#heightDepth').css('height', (window.pageYOffset/200)/1.271);
    $('#nbDepth').text(Math.round(((window.pageYOffset/200)/1.3)*10) + 'm');
    window.requestAnimationFrame(scrollPlay);
}

window.requestAnimationFrame(scrollPlay);


/* END VIDEO 1 */
document.getElementById('scene1').addEventListener('ended',myHandler,false);
function myHandler(e) {
    $('.landing-page-container').removeClass('show');
    $('#scene1').removeClass('show');
    $('.back').addClass('show');
    $('.window').addClass('show');
    interface();
}

$("#custom-close").modal({
    closeClass: 'icon-remove',
    closeText: '!'
});

