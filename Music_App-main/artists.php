<?php 

include("navbar.php");

 ?>

<style type="text/css">
.popular_artists {
    width: 90%;
    height: auto;
    /* border: 1px solid #fff; */
    margin: auto;
    margin-top: 15px;
}
.popular_artists .h4{
   display: flex;
   align-items: center;
   justify-content: space-between;
}
.popular_artists .h4 .bi{
   color: #a4a8b4;
   cursor: pointer;
   transition: .3s linear;
}
.popular_artists .h4 .bi:hover{
   color: #fff;
}
.popular_artists .item{
  width: 100%;
  height: auto;
  margin-top: 10px;
  display: flex;
  overflow-x: auto;
  scroll-behavior: smooth;
}
.popular_artists .item::-webkit-scrollbar{
  display: none;
}
.popular_artists .item li{
 list-style-type: none;
 position: relative;
 min-width: 60px;
 height: 60px;
 /* background-color: #fff; */
 border-radius: 50%;
 margin-right: 20px;
 cursor: pointer;
}
.popular_artists .item li img{
 width: 100%;
 height: 100%;
 position: absolute;
}

</style>
<div class="popular_artists">
            <div class="h4">
                <h4>Trending Artists</h4>
                <div class="btn_s">
                    <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
                    <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="item">
                <li>
                    <img src="img/download (3).jpg" alt="Khaligraph Jones" title="Khaligraph Jones">
                </li>
                <li>
                    <img src="img/13.jpg" alt="Ed Sheraan" title="Ed Sheraan">
                </li>
                <li>
                    <img src="img/photo_1_2023-03-13_00-13-23.jpg" alt="Willy Paul" title="Willy Paul">
                </li>
                <li>
                    <img src="img/9.jpg" alt="Sauti Sol" title="Sauti Sol">
                </li>
                <li>
                    <img src="img/5.jpg" alt="Burna Boy" title="Burna Boy">
                </li>
                <li>
                    <img src="img/10.jpg" alt="Ruger" title="Ruger">
                </li>
                <li>
                    <img src="img/photo_2023-03-22_15-00-39.jpg" alt="Ayra Star" title="Ayra Star">
                </li>
                <li>
                    <img src="img/photo_2023-05-17_13-36-53.jpg" alt="Nyashinski" title="Nyashinski">
                </li>
                <li>
                    <img src="img/justin-bieber-lede.jpg" alt="Justin Bieber" title="Justin Bieber">
                </li>
                <li>
                    <img src="img/photo_2023-03-22_14-19-13.jpg" alt="Diamond Platnumz" title="Diamond Platinumz">
                </li>
                <li>
                    <img src="img/Photo_1616341997274.jpg" alt="Jojo" title="Arkwings Cyprian Abala">
                </li>
            </div>
</div>
<?php 

include("footer.php");

 ?>