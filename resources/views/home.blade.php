<!doctype html>
<html lang="zh-hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>燒烤店</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.esm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.esm.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color:PapayaWhip">
<div>
<div style="text-align:right">
    <a href="/login">登入</a>
    <a>/</a>
    <a href="/signup">註冊</a>
</div>

    <div class="_left">
    <span>
    <a href="/home">
        <img  src="/招牌.png" />
    </a>
    </span>
        <ul class="drop-down-menu" >
            <li><a href="/aboutus">品牌</a></li>
            <li><a href="/newinfo">最新消息</a></li>
            <li><a href="">菜色種類</a>
                <ul>
                    <li><a href="/dish/beef">牛肉</a></li>
                    <li><a href="/dish/pig">豬肉</a></li>
                    <li><a href="/dish/chicken">雞肉</a></li>
                    <li><a href="/dish/lamb">羊肉</a></li>
                    <li><a href="/dish/seafood">海鮮</a></li>
                    <li><a href="/dish/vegetables">蔬菜</a></li>
                    <li><a href="/dish/agaricus">菇類</a></li>
                </ul>
            </li>
            <li><a href="/contactus">聯絡我們</a></li>
        </ul>
    </div>
</div>

<div class="img_ex" >
    <div>
        <img  src="images/店內/菜色1.jpg" />
    </div>
    <div>
        <img  src="images/店內/菜色2.jpg" />
    </div>
</div>

<div class="swiper-container">
    <div class="swiper-wrapper">
            <div class="swiper-slide"><img  src="images/店內/菜色1.jpg" /></div>
            <div class="swiper-slide"><img  src="images/店內/菜色2.jpg" /></div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>


<script>
    var mySwiper = new Swiper ( ".swiper-container", {
        autoplay: {
            delay: 3000,
            stopOnLastSlide: false,
            disableOnInteraction: false,
        },
        direction: "horizontal",
        loop: true,
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        }
    })
</script>

<div id="footer" style="text-align:center; margin-top:10%">
    &copy;Copyright 2021 Pang Ger 胖哥燒烤
</div>

</body>
</html>
