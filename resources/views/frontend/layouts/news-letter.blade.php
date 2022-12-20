<!DOCTYPE html>
<html>
  <head>
   
    <style>
        .marquee {
    margin: 0 auto;
    width: 100%;
    height: 30px;
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
    position: relative;
    box-shadow: inset 0 0 7px rgba(69, 78, 140, 0.5);
}
.marquee:after,
.marquee:before {
    position: absolute;
    top: 0;
    width: 50px;
    height: 30px;
    content: "";
    z-index: 1;
}
.marquee:before {
    left: 0;
    background: linear-gradient(to right, #ccc 10%, transparent 80%);
}
.marquee:after {
    right: 0;
    background: linear-gradient(to left, #ccc 10%, transparent 80%);
}
.marquee__content {
    width: 300%;
    display: flex;
    line-height: 30px;
    animation: marquee 50s linear infinite forwards !important;
}
.marquee__content:hover {
    animation-play-state: paused !important;
    transition: 0.5s !important;
}
.list-inline {
    display: flex;
    justify-content: space-around;
    width: 33.33%;
    list-style: none;
    padding: 0;
    margin: 0;
}
@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-66.6%);
    }
}
.news {
    display: flex;
}
.sharif button {
    border: none;
    height: 20px!important;
    width: 244px;
    background-color: #b6107a !important;
    transition: 0.5s;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.5);

}
.sharif h3 {
    text-align: center;
    color: #fff;
    margin-top: -25px;
    margin-left: -15px;
    
}

.list-inline li {
    color: #000;
    font-size: 18px;
    font-weight: bolder;
    letter-spacing: 1.2px;
    cursor: pointer;
    padding: 0 10px;
}
.list-inline li:hover {
    color: #fff;
    background-color: #336699 !important;
    border-radius: 10px;
    border: none;
    text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.5);
}
@media (max-width: 768px) {
    .list-inline li {
        font-size: 15px;
    }
    .sharif button {
        height: 30px;
        width: 150px;
    }

}
@media (max-width: 576px) {
    .list-inline {
        width: 100%;
    }
}
@media (max-width: 360px) {
    .list-inline li {
        font-size: 10px;
    }
    .sharif button {
        height: 30px;
        width: 100px;
    }

    .list-inline {
        width: 100%;
    }
}

    </style>
    
  </head>
  <body>
    
      <div class="news" style="display: flex">
        {{-- <div class="sharif"> --}}
            <button style="height: 30px;background-color: #336699 !important;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);border: none;border-radius: 10px 0px 0px 10px;
            z-index: 9;"><h4 style="color: white;line-height:27px">KhalifaMediTech</h4></button>
        {{-- </div> --}}
        
        <div class="marquee">
        <div class="marquee__content">
        <ul class="list-inline">
          <li>khalifa KhalifaMediTech Bangladesh Helpline Number +8801726780432</li>
          <li>Trust Our Online Services</li>
          <!--<li>Text 3</li>-->
          <!--<li>Text 4</li>-->
          <!--<li>Text 5</li>-->
        </ul>
        <ul class="list-inline">
          <li>Our First Priority "QUALITY FIRST"</li>
          <!--<li></li>-->
          <!--<li>Home Delivery inside Dhaka 100tk & Outside Dhaka 150tk</li>-->
          <!--<li>Text 3</li>-->
          <!--<li>Text 4</li>-->
          <!--<li>Text 5</li>-->
        </ul>
        <ul class="list-inline">
          <li>KhalifaMediTech helpline Number +8801726780432</li>
          <!--<li>Trust Our Online Services</li>-->
          <!--<li>Text 3</li>-->
          <!--<li>Text 4</li>-->
          <!--<li>Text 5</li>-->
        </ul>
      </div>
    </div>
          
      </div>
    
  </body>
</html>