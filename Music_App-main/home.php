<?php 

include("navbar.php");

 ?>

 <style type="text/css">
    .myhome{
    background-image: url(img/pexels-wendy-wei-1864637.jpg);
    background-size: cover;
    background-position: center;
    min-width: 100%;
    min-height: 100vh;
    max-width: 100%;
    max-height:100%;
    }

    .heading1{
        text-align: center;
    }
    .para{
        text-align: center;
    }
    .mycount{
        justify-content: center;
        justify-content: space-between;
    }
    .mycount ul li{
        list-style-type: none;
    }
    .mybtn{
        text-align: center;
    }

 </style>
<div class="container text-light p-5 myhome">
    <h1 class="heading1">Experience the Beauty of Music</h1>
    <p class="para">Explore new sounds,one beat at a time and join the rhythm revolution</p>

    <div class="container d-sm-flex mt-5 mycount">
        <div>
            <ul>
                <li>Nigeria</li>
                <li>Ghana</li>
                <li>South Africa</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Jamaica</li>
                <li>Latin</li>
                <li>Carribean</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>USA</li>
                <li>Canada</li>
                <li>UK</li>
            </ul>
        </div>
    </div>
    <div class="buttons mt-5 mb-5 mybtn">
        <button><a href="music.php" style="text-decoration: none; color: white;">Download</a></button>
    </div>
</div>
<?php 

include("footer.php");

 ?>