/**
 * Frame-by-frame video animation with ScrollMagic and GSAP
 *
 * Note that your web server must support byte ranges (most do).
 * Otherwise currentTime will always be 0 in Chrome.
 * See here: http://stackoverflow.com/a/5421205/950704
 * and here: https://bugs.chromium.org/p/chromium/issues/detail?id=121765
 */


var video = document.getElementById('video');
var long = document.getElementById('long');
var scrollpos = 0;
var lastpos = void 0;
var controller = new ScrollMagic.Controller();
var scene = new ScrollMagic.Scene({
    triggerElement: long,
    triggerHook: "onEnter" });

var startScrollAnimation = function startScrollAnimation() {
    scene.
    addTo(controller).
    duration(long.clientHeight).
    on("progress", function (e) {
        scrollpos = e.progress;
    });

    setInterval(function () {
        if (lastpos === scrollpos) return;
        requestAnimationFrame(function () {
            video.currentTime = video.duration * scrollpos;
            video.pause();
            lastpos = scrollpos;
            // console.log(video.currentTime, scrollpos);
        });
    }, 50);
};

var preloadVideo = function preloadVideo(v, callback) {
    var ready = function ready() {
        v.removeEventListener('canplaythrough', ready);

        video.pause();
        var i = setInterval(function () {
            if (v.readyState > 3) {
                clearInterval(i);
                video.currentTime = 0;
                callback();
            }
        }, 50);
    };
    v.addEventListener('canplaythrough', ready, false);
    v.play();
};


var scene1 = document.getElementById("scene1");
scene1.width = window.innerWidth;
scene1.height = window.innerHeight;

// startScrollAnimation();