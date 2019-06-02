<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../inc/meta.php'); ?>
    <?php include('../inc/rem.php'); ?>
    <link rel="stylesheet" href="../css/contact.css">
    <title>Contact us | Cinstar LED display, screen, LED display manufacturer</title>
    <meta name="description" content="CONTACT US. Headquater: Building A, Hengchangrong technology park,Shiyan street, Boan district, Shenzhen, China  PHONE CALL+86-183 2088 9297 E-MAIL: sales@cinstar-LED.com" />
    <meta name="keywords" content="Cinstar LED display, Cinstar electronics, LED screen company, LED display manufacturer, LED screen supplier, LED display supplier" />
</head>
<body class="page-index .menu-open">
    <!-- 头部开始 -->
    <?php include('../inc/top.php'); ?>
    <!-- 头部结束 -->
    <div class="container">
        <div class="contact-box">
            <h1>Cinstar is a professional experienced Cinstar LED display, Cinstar electronics, LED screen company, LED display manufacturer, LED screen supplier, LED display supplier, LED screen, LED display, LED video screen, LED video wall, LED video display, LED screen display, LED display screen, LED screen wall, LED display wall, LED wall display, LED wall video, rental LED display, commercial LED display, creative LED display manufacturer.</h1>
            <div class="head-title">
                <h2>CONTACT US</h2>
            </div>
            <div class="contact-head">
                <div class="contact-item">
                    <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                    <p class="title">Address</p>
                    <p>Building A, Hengchangrong technology park,  </p>
                    <p>Shiyan street, Boan district, Shenzhen, China</p>
                </div>
                <div class="contact-item">
                    <div class="icon-box"><i class="fa fa-phone"></i></div>
                    <p class="title">Phone call</p>
                    <p>+86-183 2088 9297 </p>
                </div>
                <div class="contact-item">
                    <div class="icon-box"><i class="fa fa-envelope-o"></i></div>
                    <p class="title">E-mail</p>
                    <p>Hongkong Cinstar Electronics Co., Limited</p>
                    <p>sales@cinstar-led.com </p>
                </div>
            </div>
        </div>
        <div class="contact-detail">
            <div class="head-title">
                <h2>Leave A Message</h2>
            </div>
            <form id="myforms" name="myforms" method="post" action="/quotes/Index/index" onSubmit="return Checks()">
                <div class="contact-body">
                    <p class="input-contact">
                        <input type="text" placeholder="Name" maxlength="50" name="name" class="contact-input">
                        <input type="text" placeholder="Company" maxlength="50" name="company" class="contact-input">
                    </p>
                    <p class="input-contact">
                        <input type="text" placeholder="E-mail" maxlength="50" name="email" class="contact-input">
                        <input type="text" placeholder="Telephone" maxlength="50" name="tel" class="contact-input">
                    </p>
                    <textarea placeholder="Message" name="contents" maxlength="1000" class="contact-textarea"></textarea>
                    <div class="btn">
                        <button class="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
<script language="javascript">
function Checks()
{
    if (document.myforms.name.value.length==""){
        alert ("Your name is null");
        document.myforms.name.focus();
        return false;
    }
 if (document.myforms.company.value.length==""){
        alert ("Company name is null");
        document.myforms.company.focus();
        return false;
    }
    if (document.myforms.email.value.length==""){
        alert ("Email is null");
        document.myforms.email.focus();
        return false;
    }
    if (document.myforms.tel.value.length==""){
        alert ("Telephone is null");
        document.myforms.tel.focus();
        return false;
    }
    if (document.myforms.contents.value.length==""){
        alert ("Message is null");
        document.myforms.contents.focus();
        return false;
    }	
}
</script>
        <?php include('../inc/foot.php'); ?>
            <!-- 底部结束 -->
    </div>
    <?php include('../inc/js.php'); ?>
    <script>GetCurStyle("contact");</script>
</body> 
</html>