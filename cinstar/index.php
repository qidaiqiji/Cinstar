<?php 
    // Adding check to redirect all pages other than homepage that are being opened using homepage index.php file (use less pages)
    $explodedURL = explode('/',$_SERVER['REQUEST_URI']);

    if(count($explodedURL) > 2)
    {
        header("HTTP/1.1 301 Moved Permanently"); 
        header("Location: https://www.cinstar-led.com/404.html"); 
        exit();            
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('inc/meta.php'); ?>
    <?php include('inc/rem.php'); ?>
    <meta name="description" content="As a leading LED display manufacturer, Outdoor Led Display, indoor Led Display and trusted LED solution provider, Cinstar offers wide range of LED screen display products and integrated services. We have stage LED screen, LED advertising screen and creative LED video display for a variety of applications." />
    <meta name="keywords" content="LED screen display, rental LED display, LED video display, stage LED screen, LED advertising screen, LED display manufacturer" />  
    <meta name="p:domain_verify" content="55405faff2c022df8ded4e9440511b8f"/>
    <meta name="msvalidate.01" content="05393303A9AC7E2D8DCF3B48AD511318" />
    <title>LED Display Manufacturer | Indoor & Outdoor LED Display - Cinstar</title>
    <link rel="stylesheet" href="css/main.css">

<!-- Google Search Console Code -->
<meta name="google-site-verification" content="5VpQfVL4IAimwfIxD84H_qAfILvJMiW-ho8P7s6oce4" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142629338-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142629338-1');
</script>

</head>
<body class="page-index">
    <!-- ???? -->
    <?php include('inc/top.php'); ?>
    <!-- ???? -->
    <div class="container">
        <!-- ???? -->
        <div class="banner"> 
            <ul>
                <li>
                    <a href="product-detail/ec-series.php">
                        <img src="images/bg.jpg" alt="ec-series"/>
                        <span class="view-more bg" style="right:33%;bottom:22%">View More</span>
                    </a>
                </li>
                <li>
                    <a href="product-detail/cr-series.php">
                        <img src="images/bg1-1.jpg" alt="cr-series"/>
                        <span class="view-more bg1">View More</span>
                    </a>
                </li>
                <li>
                    <a href="product-detail/lm-series.php">
                        <img src="images/bg2-1.jpg" alt="lm-series"/>
                        <span class="view-more bg2" style="right:30%;bottom:27%">View More</span>
                    </a>
                </li>
                <li>
                    <a href="product-detail/hd-series.php">
                        <img src="images/bg3-1.jpg" alt="hd-series"/>
                        <span class="view-more bg3" style="right:24%">View More</span>
                    </a>
                </li>
                
            </ul>
        </div>
        <!-- ???? -->
        <!-- ???? -->
        <div class="product">
    
            <div class="head-title">
                <h2>FEATURED PRODUCTS</h2>
            </div>
            <div class="product-container">
                <div class="product-item">
                    <a class="thumb" href="/product-detail/ec-series.php">
                        <img src="images/products/Rental-LED/EC-SERIS.jpg" alt="ec-series"/>
                    </a>
                    <a class="list-title" href="/product-detail/ec-series.php">
                        <span class="current">EC SERIES</span><span class="more">View More</span>
                    </a>
                </div>
                <div class="product-item">
                    <a class="thumb" href="/product-detail/cr-series.php">
                        <img src="images/home/CR SERIES.jpg" alt="cr-series"/>
                    </a>
                    <a class="list-title" href="product-detail/cr-series.php">
                        <span class="current">CR SERIES</span><span class="more">View More</span>
                    </a>
                </div>
                <div class="product-item">
                    <a class="thumb" href="product-detail/lm-series.php">
                        <img src="images/home/LM SERIES.jpg" alt="lm-series"/>
                    </a>
                    <a class="list-title" href="product-detail/lm-series.php">
                        <span class="current">LM SERIES</span><span class="more">View More</span>
                    </a>
                </div>
                <div class="product-item">
                    <a class="thumb" href="product-detail/hd-series.php">
                        <img src="images/home/HD SERIES.jpg" class="short" alt="hd-series"/>
                    </a>
                    <a class="list-title" href="product-detail/hd-series.php">
                        <span class="current">HD SERIES</span><span class="more">View More</span>
                    </a>
                </div>
                <div class="product-item">
                    <a class="thumb" href="product-detail/tr-series.php">
                        <img src="images/home/TR SERIES.jpg"  class="short" alt="tr-series"/>
                    </a>
                    <a class="list-title" href="product-detail/tr-series.php">
                        <span class="current">TR SERIES</span><span class="more">View More</span>
                    </a>
                </div>
                <div class="product-item">
                    <a class="thumb" href="product-detail/mc-series.php">
                        <img src="images/home/MC SERIES.jpg" alt="mc-series"/>
                    </a>
                    <a class="list-title" href="product-detail/mc-series.php">
                        <span class="current">MC SERIES</span><span class="more">View More</span>
                    </a>
                </div>
                <div class="product-item">
                    <a class="thumb" href="product-detail/fantasy.php">
                        <img src="images/home/FANTASY.jpg" alt="fantasy"/>
                    </a>
                    <a class="list-title" href="product-detail/fantasy.php">
                        <span class="current">FANTASY</span><span class="more">View More</span>
                    </a>
                </div>
                <div class="product-item">
                    <a class="thumb" href="product-detail/ft-series.php">
                        <img src="images/home/FT SERIES.jpg" class="short" alt="ft-series"/>
                    </a>
                    <a class="list-title" href="product-detail/ft-series.php">
                        <span class="current">FT SERIES</span><span class="more">View More</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- ???? -->
        <!-- who we do?? -->
        <div class="text">
            <div class="head-title">
                <h2>Who We Are</h2>
            </div>
            <div class="seo-container">
                <div class="seo-item">
                    <div class="img-cover">
                        <img src="images/about/1 Reception.jpg" />
                    </div>
                    <div class="content-box">
                        <p>Our company is a globally leading LED video display screen manufacturer that creates durable LED screens to fit the precise demands of our vast and diverse customer range. To adhere to the exact expectations of our client base, we have established a modern manufacturing facility with all the latest and modern technology infused tools and equipment for the fabrication of both indoor LED display and outdoor LED display.</p>
                        <p>As a well-known LED display manufacturer, outdoor led display our entire LED video screen manufacturing process takes place under the strict supervision of industry specialists. Our defined excellent manufacturing process is constantly evaluated and tested to rule out any possible problem. Furthermore, we periodically update our Indoor and Outdoor LED display fabrication methods in order to incorporate the latest traits in tune with the international practices.</p>
                    </div>
                </div>
                <div class="seo-item">
                    <div class="content-box">
                        <p>Our manufactured indoor LED display and outdoor LED display are being heavily employed in retails businesses, corporate clients, brand promotion, malls, etc. They can also be used for advertising and product display reasons. Our made LED screen display are popular among a vast range of clients mostly because of their reliable operational life, quality display, lower power consumptions, slim in size, light weight, compact packaging, bright display in daylight, durable for all weather conditions, and affordable rates.</p>
                        <p>We take pride in being the authorized and sole solution provider of LED screen display. We are playing a leading role in this industry by providing excellent quality LED video displays for both medium and high-end enterprises.</p>
                        <p>Transforming your world with an illuminated digital display experience.</p>
                    </div>
                    <div class="img-cover">
                        <img src="images/home/EC2.9-rental-events.jpg"></img>
                    </div>
                </div>
            </div>
        </div>
        <!-- what we do?? -->
        <div class="what-we-do">
            <div class="head-title">
                <h2><a href="products">WHAT WE DO</a></h2>
            </div>
            <div class="what-container">
                <a class="left"><i class="iconfont">&#xe604;</i></a>
                <div class="img-container">
                    <ul class="imgList">
                        <li>
                            <a href="products/rental-led.php">
                                <img src="images/home/rental-market.jpg" alt="rental-market"/>
                                <div class="what-banner">
                                    Rental LED Display
                                </div>
                                <div class="imgCover">
                                    <div class="title">Rental LED Display</div>
                                    <p class="content">
                                        LED screen display is now playing a critical role in entertainment industry. Wherever we go to concert, theater or night club, we can always see the wide application of LED video display showing excellent effect and superb visual impact. Along with huge market demand on LED screen display, each LED display manufacturer is facing more rigorous test since the customers are asking for more practical LED Screen display and sharper image rental LED display to deliver better visual experience.
                                        Cinstar, a LED display manufacturer with more than 8-year experience in LED video display industry, has a sophisticated understanding of LED screen display trend. After thorough investigations and researches on AV industry, Cinstar offers several rental LED display for different segments of AV industry. For instance, we have rental LED display CR series for live production and LM series LED screen display for wedding, events and touring etc. 
                                        Cinstar is capable of supplying high quality LED screen display for your next event no matter what you need is rental LED display, LED video display or LED screen display.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="products/fine-pitch.php">
                                <img src="images/home/fine-pitch-market.jpg" alt="fine-pitch-market"/>
                                <div class="what-banner">
                                    Fine Pitch LED Display
                                </div>
                                <div class="imgCover">
                                    <div class="title">Fine Pitch LED Display</div>
                                    <p class="content">
                                        Thanks to breakthrough of LED screen display technology, more and more LED video display walked into TV studio and conference room where once dominated by LCD video walls. Fine pitch LED video display is different from rental LED display and stage LED screen, it requires lower tolerance on LED screen display uniformity and better image reproduction.
                                        When comes to LED screen display application, except being used at control rooms, it has also been installed as LED advertising screen at metro station and airports to deliver crystal clear advertisement content to passing-by. 
                                        As an experienced professional LED display manufacturer, Cinstar fine pitch LED screen display meets any kinds of LED video display installations. It can be wall mounted as LED video display and ground support as a TV LED screen display for home cinema. It achieves 2K and 4K UHD resolution with 16:9 ratio LED panel board. No matter what you need is high end fine pitch LED screen display or budget LED video display, Cinstar LED display can always beyond your expectations. 
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="products/creative-led.php">
                                <img src="images/home/creative-market.jpg" alt="creative-market"/>
                                <div class="what-banner">
                                    Creative LED Display
                                </div>
                                <div class="imgCover">
                                    <div class="title">Creative LED Display</div>
                                    <p class="content">
                                    When the market is flooding with almost-same LED screen display, how to stand out from ordinaries and be unique is what most LED display manufacturers thinking about, especially when customers facing so many choices than ever. Driven by strong LED screen display market demand, Cinstar launched several creative LED video display to provide multiple choice and competitive LED screen display solution for customers.  For rental LED display market, we have transparent LED video display TR series for LED backdrop curtain. For commercial advertising market, we have TS series LED advertising screen to give better visual experience for the new era retails. Besides, Cinstar Xposter LED screen display and 3D hologram LED video display bring brand new purchasing experience for customers.
                                    Cinstar is with strong willing to be a value added LED screen display partner to our customers by supplying creative LED video display and helping create more business value for them. If you are looking for reliable LED display manufacturer for rental LED display, stage LED screen or LED advertising screen, Cinstar will be right choice for you.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="products/commercial-led.php">
                                <img src="images/home/commercial-market.jpg" alt="commercial-market"/>
                                <div class="what-banner">
                                    Commercial LED Display
                                </div>
                                <div class="imgCover">
                                    <div class="title">Commercial LED Display</div>
                                    <p class="content">
                                    With the arrival of digital era, DOOH is one of the key market segments of LED screen display for its high brightness, better image quality and intelligent advertisement management. The traditional printing outdoor billboard is gradually losing its advantage and the market share. Comparing with rental LED display and stage LED screen requires light weight and better user friendly operation, LED advertising screen cares more on the stability and durability since such LED advertising screen will be permanently installed at one location and may suffer severe weather conditions. 
                                    As a customer satisfaction oriented LED display manufacturer, Cinstar has comprehensive LED video display solutions to cater to customer's need on different kind of LED advertising screen. For example, Cinstar FT series LED video display can show high definition image quality and customized to any required shapes. Cinstar MC series LED advertising screen is perfect for huge building facades advertising. Besides, high end DB series LED advertising screen is with light weight, better uniformity and energy saving. EI series LED video display can be used as both rental LED display and LED advertising screen.
                                    Cinstar promised to offer best LED screen display solution and cost-effective LED video display products for each of your LED display project.
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <a class="right"><i class="iconfont">&#xe605;</i></a>
            </div>
            
        </div>
        
        <!-- why choose cinstar?? -->
        <div class="choose">
            <div class="head-title choose-header">
                <h2><a href="about/">WHY CHOOSE CINSTAR</a></h2>
            </div>
            <div class="iconList">
                <div class="iconItem">
                    <div class="iconCricle">
                        <i class="fa fa-diamond"></i>
                    </div>
                    <div class="desc">
                        <div class="title">
                                LED EXPERTS
                        </div>
                        <div class="content">
                            As industry veterans, our team have managed thousands of LED projects and passionate about fulfilling customer's ideas by high quality visual LED landscapes.
                        </div>
                    </div>
                </div>
                <div class="iconItem">
                    <div class="iconCricle">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="desc">
                        <div class="title">
                                TRUSTWORTHY
                        </div>
                        <div class="content">
                            Cinstar is committed to be a reliable partner behind customers by providing quality LED products and integrated services. We do our part and never compete with them.
                        </div>
                    </div>
                </div>
                <div class="iconItem">
                    <div class="iconCricle">
                        <i class="fa fa-signal"></i>
                    </div>
                    <div class="desc">
                        <div class="title half-title">
                                DIVERSITY 
                        </div>
                        <div class="content">
                            We have highly comprehensive product lines which cover very wide range of applications and equipped qualified certificates which compatible with EU or US standards
                        </div>
                    </div>
                </div>
                <div class="iconItem">
                    <div class="iconCricle">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <div class="desc">
                        <div class="title">
                                MANUFACTURING
                        </div>
                        <div class="content">
                            We believe that quality is critical to satisfying customers. By using a variety of top-class equipment, we are the manufacturer of indoor and outdoor led display the finest products with the highest quality of standards.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- why choose cinstar?? -->
        <!-- what our customer say?? -->
        <div class="customer">
            <div class="head-title">
                <h2>what our customers say</h2>
            </div>
            <div id="customer-box">
                <ul>
                    <li>
                        <div class="quote">
                            <p class="quote-content">
                                <i class="iconfont left-icon">&#xe6a1;</i>
                                I have known Jason for some years. Right from the start, Jason impressed me with his professional manner and consummate business acumen. He has a no nonsense approach, with always a focus on what are the best solutions to meet both short term and long term business objectives. He has an outstanding understanding of customer service and client retention and is trusted by many to always be honest and give the best advice.
                                I would have no hesitation in recommending prospective customers to use Cinstar LED screen display and their excellent services.
                                <i class="iconfont">&#xe6a2;</i>
                            </p>
                            <p class="author">– Garrett Henderson – Complete AV Solutions</p>
                        </div>
                    </li>
                    <li>
                        <div class="quote">
                            <p class="quote-content">
                                <i class="iconfont left-icon">&#xe6a1;</i>
                                I'd like to say a massive thank you-the big LED screen display looks so great at my event site and I think it just adds an extra touch for our participants! Working with you again this year has been excellent, your service and technician team have been incredible too!
                                <i class="iconfont">&#xe6a2;</i>
                            </p>
                            <p class="author">– Anthony Van Andel – AV Direct CC</p>
                        </div>
                    </li>
                    <li>
                        <div class="quote">
                            <p class="quote-content">
                                <i class="iconfont left-icon">&#xe6a1;</i>
                                Cinstar LED video display exceeded all expectations. We were extremely happy with every aspect from the initial design and consultations, right through to the commissioning. Their expertise and technical knowledge proved to be invaluable and the dedication they showed right through the project was relentless. I would have absolutely no hesitation in recommending them.
                                <i class="iconfont">&#xe6a2;</i>
                            </p>
                            <p class="author">– Matthew Shankle – ADTI Media</p>
                        </div>
                    </li>
                    
                    <li>
                        <div class="quote">
                            <p class="quote-content">
                                <i class="iconfont left-icon">&#xe6a1;</i>
                                I wanted to thank you for supplying the LED video display at the last minute, the event went very well as scheduled and the LED video display worked with zero-defect for three days, it was really amazing!!! We highly appreciated your great efforts and services on this case and look forward to working with you again in the not too distant future.
                                <i class="iconfont">&#xe6a2;</i>
                            </p>
                            <p class="author">– Jens Løvaas – Hove West</p>
                        </div>
                    </li>
                    <li>
                        <div class="quote">
                            <p class="quote-content">
                                <i class="iconfont left-icon">&#xe6a1;</i>
                                Alex and Sharon have provided my business with a fantastic service over the past year. They are always at the end of the phone when I need them and offer a service which goes above and beyond any other service provider I have used. I can highly recommend doing business with Cinstar team as they are reliable, knowledgeable and full of integrity.
                                <i class="iconfont">&#xe6a2;</i>
                            </p>
                            <p class="author">– Patrick Herveille – Highlite international BV</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- what our customer say?? -->
        <!-- case?? -->
        <div class="caseStudy">
            <div class="head-title gallery-title">
                <h2><a href="gallery/">PROJECTS GALLERY</a></h2>
            </div>
            <div class="case-list">
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="/images/home/Campbell Park 4.8mm.jpg" alt="Campbell Park 4.8mm"/>
                    </span>
                    <span class="case-title">
                        <span class="current">Campbell Park 4.8mm LED Video Display</span>
                    </span>
                </div>
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="/images/home/ESPN Conference Room 1.56mm.jpg" alt="ESPN Conference Room 1.56mm"/>
                    </span>
                    <span class="case-title">
                        <span class="current">ESPN 1.56mm LED Screen Display</span>
                    </span>
                </div>
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="/images/home/Mosco Airport 10mm.jpg" alt="Mosco Airport 10mm"/>
                    </span>
                    <span class="case-title">
                        <span class="current">Mosco Airport 10mm LED Video Display</span>
                    </span>
                </div>
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="/images/home/New Zealand Shopping Mall 6mm.jpg" alt="New Zealand Shopping Mall 6mm"/>
                    </span>
                    <span class="case-title">
                        <span class="current">New Zealand 6mm LED Screen Display</span>
                    </span>
                </div>
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="/images/home/Strickly Star 3.9mm.jpg" alt="Strickly Star 3.9mm"/>
                    </span>
                    <span class="case-title">
                        <span class="current">Strickly Star 3.9mm LED Video Display</span>
                    </span>
                </div>
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="/images/home/Swizerland Conference room 1.2mm.jpg" alt="Swizerland Conference room 1.2mm"/>
                    </span>
                    <span class="case-title">
                        <span class="current">Swizerland 1.2mm LED Screen Display</span>
                    </span>
                </div>
            </div>
            
        </div>
        <!-- case?? -->
        <!-- news?? -->
        <div class="news">
            <div class="head-title">
                <h2><a href="news/">LATEST NEWS</a></h2>
            </div>
            <div class="news-list">
                <div class="news-item">
                    <a class="news-thumb" href="news-detail/2019-11-6.php">
                        <img src="/images/news/EC2.9-150sqm-1.jpg" alt="EC2.9-150sqm-1"/>
                    </a>
                    <div class="news-detail">
                        <div class="news-title">
                            <h3>150SQM EC2.9 rental LED kit ready for shipment to Sweden</h3>
                            <p class="date">2019-11-06</p>
                        </div>
                        <div class="news-desc">
                        Recently, our Swedish customer placed their second purchasing order with Cinstar for their fast growing event production business. It was just 6 months after their first purchase of 100sqm of our EC4.8 outdoor rental kit. All these 150sqm LED display will be applied to a large scale concert touring for its virgin show in January, 2020...
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <a class="news-thumb" href="news-detail/2019-10-11.php">
                        <img src="/images/news/Cinstar-HD2.3-2.jpg" alt="Cinstar-HD2.3-2"/>
                    </a>
                    <div class="news-detail">
                        <div class="news-title">
                            <h3>80 panels of HD2.3 installed at Christ Lutheran Church in USA</h3>
                            <p class="date">2019-10-11</p>
                        </div>
                        <div class="news-desc">
                        During Chinese National Day festival, our customer delivered 80 panels of Cinstar HD series 2.3mm to Christ Lutheran Church in California, USA. Before that, the church was using projector for the visual delivering, but they were tired of the inaccuracy brightness of projector and finally decided to replace it with high quality image performance LED display solution. The screen...
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <a class="news-thumb" href="news-detail/2019-8-20.php">
                        <img src="/images/news/28sqm-EC3.9.jpg" alt="28sqm-EC3.9"/>
                    </a>
                    <div class="news-detail">
                        <div class="news-title">
                            <h3>Stunning performance of EC 3.9 on mini-concert in Germany</h3>
                            <p class="date">2019-8-20</p>
                        </div>
                        <div class="news-desc">
                            Weeks ago, our customer delivered 28sqm EC 3.9mm LED video screen wall (they invested 100sqm for their growing rental business) for one mini concert in Germany. Both our customer and the host were very pleased to the excellent visual performance of the LED wall.It was their first show with our EC series display since they received the equipment,but it turned out to be a big success...
                        </div>
                    </div>
                </div>
                <!-- <div class="news-item">
                    <a class="news-thumb" href="news-detail/2019-7-4.php">
                        <img src="/images/news/EC2.9-200sqm-1.jpg" alt="EC2.9-200sqm-1"/>
                    </a>
                    <div class="news-detail">
                        <div class="news-title">
                            <h3>200sqm Cinstar EC2.9 rental LED video display ready for shipment to USA </h3>
                            <p class="date">2019-7-4</p>
                        </div>
                        <div class="news-desc">
                        Half a month ago, Cinstar confirmed one deal with our USA customer for 200sqm of our EC 2.9 indoor rental LED video display. The whole display will be needed on large scale events and live productions months later. It was the first big order since its launch, but which by no accident, we earned the customer’s trust by high performance of our product and promised service quality...
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
        <!-- new?? -->
        <?php include('inc/foot.php'); ?>
    </div>
    <?php include('inc/js.php'); ?>
    <script>GetCurStyle("home");</script>
    <script src="utils/unslider.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".banner").unslider({
                speed: 500,
                delay: 5000,
                dots:true,
                fluid:true,
            })
            $('#customer-box').unslider({
                fluid:true,
                dots:true,
                speed: 500,
                delay: 20000,
            })
            let screenWidth = $(window).width();
            console.log("screenWidth",screenWidth)
            // ???????????
            if(screenWidth>1200) {
                $('.imgList li').css('width',screenWidth*0.93*0.32)
                let length = $('.imgList li').length;
                let liWidth = $('.imgList li').outerWidth(true);
                $('.imgList').css('width',Math.ceil(liWidth*length));
                let num = 0;
            
                $('.left').click(function(){
                    $(".right i").css("color",'#bc261a')
                    if($('.imgList').css('left') == '0px') {
                        return;
                    }else{
                        $('.imgList').css('left',num*liWidth);
                        $(".left i").css("color",'#fff')
                    }
                })
                $('.right').click(function(){
                    $(".left i").css("color",'#bc261a')
                    if($('.imgList').css('left') == `${-liWidth}px`) {
                        return;
                    }else{
                        num --;
                        $('.imgList').css('left',num*liWidth);
                        $(".right i").css("color",'#fff')
                        num = 0;
                    }
                })
            }else if(screenWidth<767){
                $('.imgList li').css({
                    'width':screenWidth*0.9,
                    'height': '200px'
                })
                $('.img-container').css('height','900px')
            }
        })
        // $('.imgList').css('left',Math.ceil(-liWidth));
    </script>
<script type="application/ld+json">
		{
		      "@context": "http://schema.org",
		      "@type": "Organization",
		      "address": {
		        "@type": "PostalAddress",
		        "addressLocality": "Baoan district",
		        "addressRegion": "Shenzhen, China",
		        "postalCode": "518000",
		        "streetAddress": "Building A, Hengchangrong technology park,

Shiyan street"
		         
		      },
	  			
		      "name": "cinstar",
		      "alternateName": ["cinstar-led"],
		      "telephone": "+86-183 2088 9297",
		      "logo":"https://www.cinstar-led.com/images/logo.png",
		      "email": "sales@cinstar-led.com",
		      "url": "https://www.cinstar-led.com",
		      "sameAs":["https://www.facebook.com/Cinstarled"]
		    },
		}
    </script>


    
</body> 
</html>