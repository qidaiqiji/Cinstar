<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript">
//<!CDATA[ 
var box_height  = new Array(405,450,400,370,190,210);
var object = new Array();
function Slide(N,oCont){

	this.N  	= N;
	this.S  	= 1.1;
	this.object = new Array();
	
	this.CObj 	= function (parent,N){
		this.parent = parent;
		this.N = N;
		this.obj = parent.frm[N];
		this.tit = this.obj.firstChild;
		this.div = this.obj.getElementsByTagName("div")[1];
		this.div.style.visibility = "hidden";
		this.y0 = N * 35;
		this.Y1 = this.y0;
		this.obj.style.top = this.y0;
		this.obj.style.height = parent.H - (parent.NF-1) * 35 - 3;
		this.obj.style.visibility = "visible";
		this.obj.parent = this;
		this.run = false;
  		
		this.move = function(){
			with(this){
				dy = (y1-y0)/parent.S;
				if(Math.abs(dy)>.1){
					y0+=dy;
					obj.style.top = Math.round(y0);
					setTimeout("object["+parent.N+"].object["+N+"].move();", 16);
				} else {
					run = false;
					if(dy>0)
						div.style.visibility="hidden";

				}
			}
		}

		this.obj.onmouseover = function(){
			parent.H=box_height[N];
			with(this.parent){
				if(!run){
					run = true;
					div.style.visibility="visible";				
					for(i=0;i<parent.NF;i++){
						document.getElementById("tit"+i).className= "title"+i;
						if(document.getElementById("tit"+N).className=="title"+i) {
							document.getElementById("tit"+i).className="title_o"+i;
						}
					}
					for(i=0;i<=N;i++){
						parent.object[i].y1 = i*35;
						parent.object[i].move();
					}
					for(i=N+1;i<parent.NF;i++){
						parent.object[i].y1 = parent.H-(parent.NF-i)*35;
						parent.object[i].move();
					}
					if(N==0){
						parent.object[5].div.style.visibility="hidden";
					}
				}
			}
		}
	}

	this.frm 	= document.getElementById(oCont);
	this.H 		= parseInt(this.frm.style.height);
	this.frm 	= this.frm.getElementsByTagName("span");
	this.NF 	= this.frm.length;
	for(i=0;i<this.NF;i++) this.object[i] = new this.CObj(this, i);
	this.object[0].obj.onmouseover();
	this.S = 10;
}

onload = function() {
	object[0] = new Slide(0, "frames");
}
//]]>
</script>
</head>
<body style="background:url(../Public/images/blue_2010/left_bg.jpg) repeat-y;">
<div style="height:15px;"></div>
<div class="BodyLeft">
  <div id="frames" style="width:198px;height:600px;overflow:hidden;"> 
  	<span class="link">
    <div class="title" id="tit0">网站管理</div>
    <div class="text">
      <ul>
        <li><a href="<?php echo U('Inquiry/index');?>" target="main">在线留言</a></li>
		<li><a href="<?php echo U('member/index');?>" target="main">密码修改</a></li>
      </ul>
    </div>
    </span> 
	<span class="link" style="display:none;">
    <div class="title" id="tit1"></div>
    <div class="text">
      <ul>
      </ul>
    </div>
    </span> 
	
	<span class="link" style="display:none;">
    <div class="title" id="tit2"></div>
    <div class="text" id="text2">
      <ul>
      </ul>
    </div>
    </span> 
	
	
	<span class="link" style="display:none;">
    <div class="title" id="tit3"></div>
    <div class="text">
      <ul>
      </ul>
    </div>
    </span> 


	<span class="link" style="display:none;">
    <div class="title" id="tit4"></div>
    <div class="text">
      <ul>
      </ul>
    </div>
    </span> 
	
	<span class="link" style="display:none;">
    <div class="title" id="tit5"></div>
    <div class="text">
      <ul>
      </ul>
    </div>
    </span> 
	
		
	<span class="link" style="display:none;">
    <div class="title" id="tit6"></div>
    <div class="text">
      <ul>
      </ul>
    </div>
    </span> 
	
   </div>
</div>
</body>
</html>