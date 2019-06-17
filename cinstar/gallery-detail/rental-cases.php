<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../inc/meta.php'); ?>
    <?php include('../inc/rem.php'); ?>
    <link rel="stylesheet" href="../css/galleryDetail.css">
    <title>Indoor LED Wall | Cinstar-led, Indoor Rental LED Display, LED Video Screen</title>
    <meta name="description" content="Cinstar has delivered thousands square meters LED display for live production, corporate event, music festival, awards ceremony and stage rental application. No matter it is high profile show or budget event, you can always find the right product here." />
    <meta name="keywords" content="Indoor LED wall, indoor rental LED display, outdoor rental LED display, fine pitch LED video screen" />
</head>
<body class="page-index .menu-open">
    <!-- 头部开始 -->
    <?php include('../inc/top.php'); ?>
    <!-- 头部结束 -->
    <div class="container gallery-container">
        <h1 style="color:#010101">Cinstar is a professional experienced Indoor LED wall, indoor rental LED display, outdoor rental LED display, fine pitch LED video screen, LED screen, LED display, LED video screen, LED video wall, LED video display, LED screen display, LED display screen, LED screen wall, LED display wall, LED wall display, LED wall video, rental LED display, commercial LED display, creative LED display manufacturer.</h1>
        <div class="head-title">
            <h2>RENTAL EVENT CASES</h2>
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
                line1: '2019',
                line2: 'Norway Telenor Arena',
                line3: 'Cinstar CR4.8 216sqm',
                imgSrc: '../images/rental/1-rental-case.jpg'
            },
            {
                line1: '2019',
                line2: 'Norway Oslo Spektrum Arena',
                line3: 'Cinstar CR3.9 80sqm',
                imgSrc: '../images/rental/2-rental-case.jpg'
            },
            {
                line1: '2019',
                line2: 'India Conference Room',
                line3: 'Cinstar LM3.9 160sqm',
                imgSrc: '../images/rental/3-rental-case.jpg'
            },
            {
                line1: '2018',
                line2: "UK Dale Farm's AGM",
                line3: 'Cinstar LM2.6 45sqm',
                imgSrc: '../images/rental/4-rental-case.jpg'
            },
            {
                line1: '2018',
                line2: "Mercedes Brisbane Show Room",
                line3: 'Cinstar CR3.9 Outdoor 40sqm',
                imgSrc: '../images/rental/5-rental-case.jpg'
            },
            {
                line1: '2018',
                line2: "Norway Concert Touring",
                line3: 'Cinstar CR3.9 130sqm',
                imgSrc: '../images/rental/6-rental-case.jpg'
            },
            {
                line1: '2018',
                line2: "US Jarvis Exhibition Center",
                line3: 'Cinstar CR4.8 128sqm',
                imgSrc: '../images/rental/7-rental-case.jpg'
            },
            {
                line1: '2018',
                line2: "Australia Castle Hill Reception",
                line3: 'Cinstar LM3.9 15sqm',
                imgSrc: '../images/rental/8-rental-case.jpg'
            },
            {
                line1: '2018',
                line2: "UK Shape Europe 2018",
                line3: 'Cinstar VX3.9 48sqm',
                imgSrc: '../images/rental/9-rental-case.jpg'
            },
            {
                line1: '2018',
                line2: "Ireland Annual Review of Employment Law",
                line3: 'Cinstar VX4.8 36sqm',
                imgSrc: '../images/rental/10-rental-case.jpg'
            },
            {
                line1: '2017',
                line2: "Spain Mobile World Congress",
                line3: 'Cinstar LM4.8 Outdoor 60sqm',
                imgSrc: '../images/rental/11-rental-case.jpg'
            },
            {
                line1: '2017',
                line2: "Shanghai Auto Show",
                line3: 'Cinstar CR2.9 150sqm',
                imgSrc: '../images/rental/12-rental-case.jpg'
            },
            {
                line1: '2017',
                line2: "Norway We Love the 90s",
                line3: 'Cinstar LM5.9 100sqm',
                imgSrc: '../images/rental/13-rental-case.jpg'
            },
            {
                line1: '2017',
                line2: "Huawei Video Intelligence Forum",
                line3: 'Cinstar CR2.9 30sqm',
                imgSrc: '../images/rental/14-rental-case.jpg'
            },
            {
                line1: '2017',
                line2: "Iran Astana Future Energy",
                line3: 'Cinstar LM2.9 45sqm',
                imgSrc: '../images/rental/15-rental-case.jpg'
            },
            {
                line1: '2016',
                line2: "UK Campbell Park ",
                line3: 'Cinstar VX4.8 Outdoor 60sqm',
                imgSrc: '../images/rental/16-rental-case.jpg'
            },
            {
                line1: '2016',
                line2: "France Optimize Concert",
                line3: 'Cinstar CR3.9mm 60sqm',
                imgSrc: '../images/rental/17-rental-case.jpg'
            },
            {
                line1: '2016',
                line2: "North Ireland UUP Conference Party",
                line3: 'Cinstar VX3.9 30sqm',
                imgSrc: '../images/rental/18-rental-case.jpg'
            },
            {
                line1: '2015',
                line2: "Italy Lamborghini Stand",
                line3: 'Cinstar CR3.9 20sqm',
                imgSrc: '../images/rental/19-rental-case.jpg'
            },
            {
                line1: '2015',
                line2: "Finland Metso AGM",
                line3: 'Cinstar CR3.9 80sqm',
                imgSrc: '../images/rental/20-rental-case.jpg'
            },
            {
                line1: '2014',
                line2: "UK Strickly Star",
                line3: 'Cinstar LM3.9mm 15sqm',
                imgSrc: '../images/rental/21-rental-case.jpg'
            },
            {
                line1: '2014',
                line2: "Stockholm Zinzino Annual Event",
                line3: 'Cinstar LM3.9 180sqm',
                imgSrc: '../images/rental/22-rental-case.jpg'
            },
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