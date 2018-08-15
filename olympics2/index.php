<html>
<style>
.btn	{
		background-color:#4CAF50;
		border:none;
		color:#fff;
		padding:10px 20px;
		text-align:center;
		text-decoration:none;
		display:inline-block;
		font-size:15px;
		cursor:pointer;
		outline:none;
		border-radius:5px;
		box-shadow:0 9px #999;
		
}
* {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
    }

    .header, .mapSec {
        overflow: hidden;
        width: 100%;
    }

    ul {
        list-style: none;
    }

    li {
        float: right;
        margin-right: 10px;
    }


    .video {
        width: 530;
        height: 320;
    }

    div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 300;
        background-color: 669999;
    }

    div.gallery:hover {

        border: 5px solid #777;
        border-bottom-color: green;
        border-top-color: yellow;
        border-right-color: red;
        border-left-color: blue;

    }

    div.gallery img {
        width: 300;
        height: 200;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }


    div.start {
        position: absolute;
        top: 9.2%;
        left: 0%;
    }

    div.start img {
        width: 100%;
        height: 350;
    }

    


    div.findimage {
        height: 350;
    }


    div.contact {
        text-align: center;
        font-family: bold;
        font-size: 30;
        color: gray;

    }

    .infoSec {
        margin-top: 400px;
        font-size: 24px;
    }
</style>




<script>
    var i = 0; // Start point
    var images = [];
    var time = 3000;
    // Image List
    images[0] = 'img/start3.jpg';
    images[1] = 'img/start1.jpg';
    images[2] = 'img/start2.jpg';
    images[3] = 'img/start3.jpg';
    images[4] = 'img/start1.jpg ';
    images[5] = 'img/start2.jpg ';
    images[6] = 'img/start3.jpg';
    // Change Image
    function changeImg() {
        document.slide.src = images[i];

        if (i < images.length - 1) {
            i++;
        } else {
            i = 0;
        }

        setTimeout("changeImg()", time);
    }
    window.onload = changeImg;


    //var video = document.getElementById('video');
    //video.addEventListener('click',function(){
    //                                         video.play();
    //											  },false);
</script>

<body background="img/background.jpg">

    <div class="header">
        <ul>
            <?php 
            ob_start();
            session_start();
            if (isset($_SESSION['user'])!="") {
            ?>
            <li><a class="btn" href="logout.php">Logout</a></li>
            <li><a class="btn" href="result.php">Result</a></li>
            <li> <a class="btn" href="schedule.php">Schedule</a> </li>
            <li> <a class="btn" href="players.php">Players</a> </li>
            
            <?php
        } else {
            ?>
            <li> <a class="btn" href="admin.php">Admin Login</a> </li>
            <li><a class="btn" href="userSignup.php"> Signup</a></li>
             <li> <a class="btn" href="userlogin.php">Login</a> </li>
            
            

            <?php
        }
        ?>
        </ul>
    </div>
    <div class="carousal">
        <div class="start">
            <img name="slide">
        </div>
    </div>
    <div class="infoSec">
        <div style="width: 50%;float: left;padding: 10px">
            <h3 style="text-align: center;">Summer Olympics</h3>
      
<video width="500" height="240" controls>
  <source src="project/London 2012 Olympic Games - Trailer - BBC Sport.mp4" type="video/mp4">

</video>
        </div>
        <div style="float:left;width:50%;padding: 10px;text-align: center;">
            <h3 style="text-align: center;">Winter olympics</h3>
            <div>Once every four years since 1924, the Winter </br>
                Olympics have been held in various cities around</br>
                the globe. In 1901 the first international </br>
                multi-sport winter event held was the Nordic</br>
                Games in Sweden. These games, held every few years,</br>
                eventually evolved into the Winter Olympics. </br>
                Prior to being given a separate event called </br>
                the Winter Olympics, some competitions such as speed</br>
                skating, ice hockey, Nordic skiing and figure skating</br>
                had been held as a winter sports week.
            </div>


        </div>
    </div>
    <div style="overflow: hidden;clear: both;padding: 10px;font-size: 20px;">
        <h3>

            Olympic Games
        </h3>
        <div class="">
            The Olympic Games are an important international event featuring summer and winter sports. Summer Olympic Games and Winter Olympic Games are held every four years. Originally, the ancient Olympic Games were held in Ancient Greece at Olympia. The first games were in 776 BC. They were held every four years until the 5th century AD. The first "modern" Olympics happened in 1896 in Athens, Greece. People play in the Olympics to represent their country. Over time the Olympics have become bigger. In old times, women were not allowed, but now there are women's events. The Winter Games were created for ice and snow sports. The Paralympic Games were created for athletes with physical disabilities. As well, the Olympics became bigger with the addition of the Youth Olympic Games for teenage athletes. World War I and World War II led to the cancellation of the 1916, 1940, and 1944 Games. As the decision-making body, the International Olympic Committee (IOC) is responsible for choosing the host city for each Olympic Games. The IOC is also responsible for choosing what sports are in the games.
        </div>
    </div>
    <div class="popularEvent">
        <div style="text-align: center;">
            <h3 style="font-size: 24px">POPULAR EVENTS </h3>
        </div>
        <div class="img">

            <div class="gallery">
                <img src="img/swim.jpg" width="600" height="400" />
                <div class="desc">Competitive swimming is one of the most popular Olympic sports , with varied distance events in </br> butterfly, backstroke, breaststroke, freestyle, individual medley.</div>
            </div>

            <div class="gallery">
                <img src="img/gym.jpg" width="600" height="400">
                <div class="desc"> Gymnastics is usually divided into Men's and Women's Gymnastics. Men compete on six events: Floor Exercise, Pommel Horse, Still Rings, Vault, Parallel Bars, and Horizontal Bar
                </div>
            </div>

            <div class="gallery">
                <img src="img/basketball.jpg" width="600" height="400">
                <div class="desc"> Basketball at the Summer Olympics has been a sport for men consistently since 1936. Prior to its inclusion as a medal sport, basketball was held as a demonstration event in 1904</div>
            </div>

            <div class="gallery">
                <img src="img/vollyball.jpg" width="600" height="400">
                <div class="desc"> Volleyball is a team sport in which two teams of six players are separated by a net. Each team tries to score points by grounding a ball on the other team's court under organized rules.</div>
            </div>


        </div>


    </div>
    
    <div class="mapSec">
        <h3 style="text-align: center;font-size: 24px;">
            FIND US
        </h3>
    <div class="findimage">
        <img src="img/map2.jpg" />

    </div>
    </div>
    <div class="footer">
        <div class="contact">
        Contact us
        </br> Mohit-9606248457

    </div>
    </div>





    
    
</body>

</html>