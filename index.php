<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
            integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>WONDERS OF THE DEEP</title>
    <meta name="robots" content="noindex, nofollow">
</head>
<body onload="loader()" style="margin:0;">
        <div class="mobile-container">
            <div class="image">
                <img src="assets/img/logofinalblanc.png" id="logo" alt="">
            </div>
            <p id="mobileText">For a better immersion, please use the desktop version!</p>
        </div>
        <div class="page-container">

            <div id="loader"></div>

    <div class="landing-page-container">
        <video id="scene1">
            <source id="scene1video" src="https://bap-awwwards.guillaumedouceron.com/assets/video/scene1.mp4" type="video/mp4">
        </video>
        <button onclick="playVid()" id="startBtn">START</button>
    </div>
    <div class="window">
        <div id="vision"></div>
        <div id="progress">
            <div class="O2">
                <span>O2</span>
            </div>
            <div class="meter">
                <span id="bar"></span>
            </div>
            <div class="percent">
                <span id="percentO2"></span>
            </div>
        </div>
        <div id="progressDepth">
            <div id="depth"></div>
            <div class="lvl">
                <span id="heightDepth" "></span>
                <div id="pointer"></div>
                <div id="nbDepth"></div>
            </div>
        </div>
        <a href="#ex2" id="infoBtn" rel="modal:open"><i class="fas fa-info-circle"></i></a>
        <div id="ex2" class="modal">
            <h2 class="titleModal">About</h2>
            <p><em>Wonders of the Deep</em> was built by a group of students from the Institute of Internet & Multimedia (Paris, France) in their final year of undergraduate degree studies.
                Composed of four project managers, three graphic designers, one web developer and one communication assistant, this team of digital specialists had three and a half months to submit their website to the Awwwards competition.
                Wonders of the Deep offers an immersive experience for every enthusiast of the mysterious underwater world. During this journey, you will get to meet legendary sea creatures that have been fostering myths for years, as well as discover surprising monuments buried deep in the oceans, that you probably did not even know existed.
            </p>
            <p>
                So, curious about the underwater world ? Pluck up your courage and dip into the vastness !
                Scroll down to move forward and click on the items for more information.
                Enjoy your visit :)
            </p>
        </div>

        <div id="sonar">
            <div class="sonar">
                <div class="blip blip-1"></div>
                <div class="blip blip-2"></div>
                <div class="blip blip-3"></div>
                <div class="blip blip-4"></div>
                <div class="sweep"></div>
            </div>
        </div>
        <audio src="assets/sounds/sonar-bip.mp3" id="son"></audio>
    </div>
    </div>
    <div class="back">
        <div id="scene2">
            <div id="set-height"></div>
            <p id="time"></p>
            <video id="v0" tabindex="0" autobuffer preload >
                <source type="video/ogg; codecs=&quot;theora, vorbis&quot;" src="https://bap-awwwards.guillaumedouceron.com/assets/video/scene.ogv">
                <source type="video/webm; codecs=&quot;vp8, vorbis&quot;" src="https://bap-awwwards.guillaumedouceron.com/assets/video/scene.webm">
                <source type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;" src="https://bap-awwwards.guillaumedouceron.com/assets/video/scene.mp4">
                <p>Sorry, your browser does not support the &lt;video&gt; element.</p>
            </video>

            <div class="christ m1"><a href="#ex1" rel="modal:open"><i class="fas fa-question-circle"></i></a></div>
            <div id="ex1" class="modal">
                <h2 class="titleModal">Christ of the Abyss</h2>
                <p>You avoided the frightful mermaid, but don’t think it has anything to do with what you’re about to see.
                    What you’re looking at now is not Jesus Christ coming back to life, but a gigantic statue called Christ
                    of the Abyss, nearly as tall as 2 meters and a half. This monument is dedicated to all who perished at sea.
                </p>
            </div>
            <div class="scyllia m1"><a href="#ex3" id="m1" rel="modal:open"><i class="fas fa-question-circle"></i></a></div>
            <div id="ex3" class="modal">
                <h2 class="titleModal">Scylla</h2>
                <p>Now, you’re getting deeper and deeper into the ocean. Watch out ! You’re about to bump into Scylla : a hideous
                    monster with 12 heads. Scylla used to be a beautiful young nymph. But she was transformed by an evil magician who
                    wanted her revenge against the sea god Glaucos. Glaucos was crazy in love with Scylla and the magician could not
                    have been more jealous.
                </p>
            </div>
            <div class="shicheng m1"><a href="#ex4" id="m1" rel="modal:open"><i class="fas fa-question-circle"></i></a></div>
            <div id="ex4" class="modal">
                <h2 class="titleModal">Shi Cheng, the Lion City</h2>
                <p>You are now getting closer to a surprising underwater city called Shi Cheng, or the Lion City. It dates back more
                    than 2 000 years ! Despite the monument’s striking beauty, we strongly advise you not to stay here for too long…
                    You might regret it soon...
                </p>
            </div>
            <div class="leviathan m1"><a href="#ex5" id="m1" rel="modal:open"><i class="fas fa-question-circle"></i></a></div>
            <div id="ex5" class="modal">
                <h2 class="titleModal">Leviathan</h2>
                <p>Too late ! You’ve grabbed the attention of a dreadful sea monster who was roaming the ancient city :
                    the Leviathan. Is he a snake, a crocodile, a dragon ? We’re not even sure.
                    Let’s hope he’s not hungry, because if he is, he’s going to send forth from his mouth a heat so great as to
                    make all the waters of the deep boil. No living creature can endure the smell of him.

                </p>
            </div>
            <div class="wreck m1"><a href="#ex6" id="m1" rel="modal:open"><i class="fas fa-question-circle"></i></a></div>
            <div id="ex6" class="modal">
                <h2 class="titleModal">The oldest wreck in the world</h2>
                <p>Once again, you’re pretty lucky. With the Leviathan gone, the surroundings are safer. If you go down a bit more,
                    you’ll see a shipwreck, surprisingly in very good shape. You might not know it yet, but you’re actually in
                    front of the world’s oldest intact shipwreck, going back to -400 B.C. The depth at which the wreck lays makes it
                    remain intact because of the lack of oxygen.
                </p>
            </div>
            <div class="cthulhu m1"><a href="#ex6" id="m1" rel="modal:open"><i class="fas fa-question-circle"></i></a></div>
            <div id="ex6" class="modal">
                <h2 class="titleModal">Cthulhu</h2>
                <p>You have never been so close to a monster and yet you are now facing one of the most dangerous ever : Cthulhu!
                    Looking like an octopus, Cthulhu is the typical evil cosmic god. He even banished some of the most famous ancient gods.
                    This gigantic entity is worshipped by many cultists around the world.
                </p>
            </div>
        </div>
    </div>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/loader.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/bodymovin.js"></script>
<script src="assets/js/landing.js"></script>
<script src="assets/js/sirene1.js"></script>


</body>
</html>