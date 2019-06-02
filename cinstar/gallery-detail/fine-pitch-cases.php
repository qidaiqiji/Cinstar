<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../inc/meta.php'); ?>
    <?php include('../inc/rem.php'); ?>
    <link rel="stylesheet" href="../css/galleryDetail.css">
    <title>Narrow pixel pitch LED screen | Cinstar, fine pitch LED wall</title>
    <meta name="description" content="Cinstar direct view LED display is ideal for high-end installations at conference room, meeting room, board room, control room, monitor room and TV studios where superb image quality is a must." />
    <meta name="keywords" content="Narrow pixel pitch LED screen, fine pitch LED wall, LED display factory, LED display price, LED screen for sale, LED signage screen, big LED display wall" />
</head>
<body class="page-index .menu-open">
    <!-- 头部开始 -->
    <?php include('../inc/top.php'); ?>
    <!-- 头部结束 -->
    <div class="container gallery-container">
        <h1 style="color:#010101">Cinstar is a professional experienced narrow pixel pitch LED screen, fine pitch LED wall, LED display factory, LED display price, LED screen for sale, LED signage screen, big LED display wall, LED screen, LED display, LED video screen, LED video wall, LED video display, LED screen display, LED display screen, LED screen wall, LED display wall, LED wall display, LED wall video, rental LED display, commercial LED display, creative LED display manufacturer.</h1>
        <div class="head-title">
            <h2>FINE PITCH CASES</h2>
        </div>
        <div class="gallery-wrap">
            <div class="gallery-list">
            </div>
        </div>
            <!-- 底部开始 -->
        <?php include('../inc/foot.php'); ?>
        <!-- 底部结束 -->
    </div>

    <?php include('../inc/js.php'); ?>
    <script>
        let data = [
            {
                line1: '2018',
                line2: 'US ESPN Conference Room',
                line3: 'Cinstar HD1.56 12sqm',
                imgSrc: '../images/fine/1-fine-pitch-case.jpg'
            },
            {
                line1: '2018',
                line2: 'Swizerland Conference Room',
                line3: 'Cinstar NL1.2 10sqm',
                imgSrc: '../images/fine/2-fine-pitch-case.jpg'
            },
            {
                line1: '2018',
                line2: 'India Lecture Theater Installation',
                line3: 'Cinstar NL1.2 16sqm',
                imgSrc: '../images/fine/3-fine-pitch-case.jpg'
            },
            {
                line1: '2018',
                line2: "US ESB Lobby",
                line3: 'Cinstar HD1.56 15sqm',
                imgSrc: '../images/fine/4-fine-pitch-case.jpg'
            },
            {
                line1: '2018',
                line2: "China Traffic Control Center",
                line3: 'Cinstar HD1.2 38sqm',
                imgSrc: '../images/fine/5-fine-pitch-case.jpg'
            },
            {
                line1: '2018',
                line2: "Australia Sports Bar Launch",
                line3: 'Cinstar 3.9mm 130sqm',
                imgSrc: '../images/fine/6-fine-pitch-case.jpg'
            },
            {
                line1: '2018',
                line2: "Sigapore Painting Exibition",
                line3: 'Cinstar NL1.2 10sqm',
                imgSrc: '../images/fine/7-fine-pitch-case.jpg'
            },
            {
                line1: '2018',
                line2: "US Hotel Dining Room",
                line3: 'Cinstar NL1.56 32sqm',
                imgSrc: '../images/fine/8-fine-pitch-case.jpg'
            },
            {
                line1: '2017',
                line2: "UK Heathrow International Airport",
                line3: 'Cinstar NL1.92 16sqm',
                imgSrc: '../images/fine/9-fine-pitch-case.jpg'
            },
            {
                line1: '2017',
                line2: "France Control Room",
                line3: 'Cinstar HD1.87 20sqm',
                imgSrc: '../images/fine/10-fine-pitch-case.jpg'
            },
            {
                line1: '2017',
                line2: "India Wedding Ceremony Backdrop",
                line3: 'Cinstar HD2.3 21sqm',
                imgSrc: '../images/fine/11-fine-pitch-case.jpg'
            },
            {
                line1: '2016',
                line2: "UK European Investment Bank",
                line3: 'Cinstar HD1.56 21sqm',
                imgSrc: '../images/fine/12-fine-pitch-case.jpg'
            },
            {
                line1: '2016',
                line2: "Australia Sydney Airport",
                line3: 'Cinstar NL1.66 24sqm',
                imgSrc: '../images/fine/13-fine-pitch-case.jpg'
            },
            {
                line1: '2015',
                line2: "France Fitness Club",
                line3: 'Cinstar 2.5mm 15sqm',
                imgSrc: '../images/fine/14-fine-pitch-case.jpg'
            },
            {
                line1: '2014',
                line2: "UK Luxury Store",
                line3: 'Cinstar 2.5mm 18sqm',
                imgSrc: '../images/fine/15-fine-pitch-case.jpg'
            }
        ];
        let htms = "";
        data.map(item=>{
            htms += `<div class="gallery-item">
                        <div class="gallery-left">
                            <p>${item.line1}</p>
                            <h3>${item.line2}</h3>
                            <p>${item.line3}</p>
                        </div>
                        <div class="gallery-img">
                            <img src=${item.imgSrc} alt=${item.line3}/>
                        </div>
                </div>`
        })
        $(function(){
            $(".gallery-list").append(htms)
        })
    </script>
    <script>GetCurStyle("gallery");</script>
    
</body> 
</html>