<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../inc/meta.php'); ?>
    <?php include('../inc/rem.php'); ?>
    <link rel="stylesheet" href="../css/galleryDetail.css">
    <title>Digital Display Screens | LED Digital Signs, Commercial LED Screen</title>
    <meta name="description" content="Cinstar LED displays are highly qualified for any weather condition operation like high temperature and humidity, raining and snowing etc. They can be customized to meet any complicated installations." />
    <meta name="keywords" content="digital display screens, LED digital signs, commercial LED screens, advertising LED display screen, advertising LED screen price, outdoor commercial LED billboard, advertising LED billboard" />
</head>
<body class="page-index .menu-open">
    <!-- 头部开始 -->
    <?php include('../inc/top.php'); ?>
    <!-- 头部结束 -->
    <div class="container gallery-container">
            <div class="head-title">
            <h2>FIXED INSTALL CASES</h2>
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
                line2: 'New Zealand Shopping Mall',
                line3: 'Cinstar DB6 65sqm',
                imgSrc: '../images/fixed/1-fixed-case.jpg'
            },
            {
                line1: '2018',
                line2: 'US Retail Store',
                line3: 'Cinstar EI3.9 30sqm',
                imgSrc: '../images/fixed/2-fixed-case.jpg'
            },
            {
                line1: '2018',
                line2: 'UK Shopping Center Creative Columns',
                line3: 'Cinstar LM3.9 260sqm',
                imgSrc: '../images/fixed/3-fixed-case.jpg'
            },
            {
                line1: '2018',
                line2: "Western Sydney University",
                line3: 'Cinstar TS7.8 24.5sqm',
                imgSrc: '../images/fixed/4-fixed-case.jpg'
            },
            {
                line1: '2017',
                line2: "Finland Shopping Mall Crown Screen",
                line3: 'Cinstar MC31 144sqm',
                imgSrc: '../images/fixed/5-fixed-case.jpg'
            },
            {
                line1: '2017',
                line2: "Norway Mobile Trailer Screen",
                line3: 'Cinstar FT6.67 20sqm',
                imgSrc: '../images/fixed/6-fixed-case.jpg'
            },
            {
                line1: '2017',
                line2: "New Zealand Auckland Airport",
                line3: 'Cinstar EI5.9 36sqm',
                imgSrc: '../images/fixed/7-fixed-case.jpg'
            },
            {
                line1: '2017',
                line2: "Finland Shopping Center",
                line3: 'Cinstar CR5.95 60sqm',
                imgSrc: '../images/fixed/8-fixed-case.jpg'
            },
            {
                line1: '2017',
                line2: "Australia Fair Entrance",
                line3: 'FT6.67 18sqm',
                imgSrc: '../images/fixed/9-fixed-case.jpg'
            },
            {
                line1: '2016',
                line2: "Sweden Ice Hockey Arena ",
                line3: 'Cinstar MC15 36sqm',
                imgSrc: '../images/fixed/10-fixed-case.jpg'
            },
            {
                line1: '2016',
                line2: "Australia Collins Street",
                line3: 'Cinstar EI3.9 16sqm',
                imgSrc: '../images/fixed/11-fixed-case.jpg'
            },
            {
                line1: '2016',
                line2: "Impact-Church Double Sides",
                line3: 'Cinstar FT6.67 15sqmx2',
                imgSrc: '../images/fixed/12-fixed-case.jpg'
            },
            {
                line1: '2015',
                line2: "Italy Shopping Center",
                line3: 'Cinstar EI3.9 45sqm',
                imgSrc: '../images/fixed/13-fixed-case.jpg'
            },
            {
                line1: '2015',
                line2: "Adelaide Festival Centre",
                line3: 'Cinstar FT6.67 52sqm',
                imgSrc: '../images/fixed/14-fixed-case.jpg'
            },
            {
                line1: '2014',
                line2: "Finland Shopping Mall",
                line3: ' Cinstar 6mm 21sqm',
                imgSrc: '../images/fixed/15-fixed-case.jpg'
            },
            {
                line1: '2014',
                line2: "Turku Commercial Advertising",
                line3: 'Cinstar P10 11sqmx5',
                imgSrc: '../images/fixed/16-fixed-case.jpg'
            },
            {
                line1: '2014',
                line2: "Finland Shopping Center Goodman",
                line3: 'Cinstar DB10 35sqm',
                imgSrc: '../images/fixed/17-fixed-case.jpg'
            },
            {
                line1: '2013',
                line2: "Russia Mosco Airport",
                line3: 'Cinstar DB10 112sqm',
                imgSrc: '../images/fixed/18-fixed-case.jpg'
            },
            {
                line1: '2012',
                line2: "China Chengdu Shopping Center",
                line3: 'Cinstar FT10 430sqm',
                imgSrc: '../images/fixed/19-fixed-case.jpg'
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