<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CO WORKING SPACE</title>
	<link rel="stylesheet" href="CoStyle.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

</head>

<body bgcolor="#212F3F">



<header>
	<div class="conteny flex_space">
		<div class="logo">
			<p style="color:white; font-size: 25px;">CO WORKING <span01>SPACE</span01></p>
			<img src="image/logo.png" alt="">
		</div>

		<div class="navlinks">
			<ul id="menulist">
				<li><a href="#home">THAKSIN UNIVERSITY มหาวิทยาลัยทักษิณ วิทยาเขต พัทลุง</a></li>
				<li> <i class="fa fa-search"> </i></li>

				<li> 

					<a href="CoIndex.php">
					<button class="primary-btn"> Login </button></a>
				</li>

			</ul>

			<span class="fa fa-bars"></span>

		</div>
		

	</div>
</header>

	<!-- <script>
		var menulist = document.getElementById('menulist');
		menulist.style.maxHeight ="0px";

		function menutoggle() {
			if(menulist.style.maxHeight == "0px") {
				menulist.style.maxHeight = "100vh";
			}else{
				menulist.style.maxHeight = "0px"
			}
		}



	</-------------script> ----------------->
	<!-- รูปสไลด์หน้าหลัก -->

<section class="home">
		<div class="Content">
			<div class="owl-carousel owl-theme">
			    <div class="item">
			    	<img src="image/R.jpg" alt="">
			    	<div class="text">
			    		<h1>Coworking Space</h1>
			    		<p>ใช้เวลาว่างเพื่อทำงาน หรือทำกิจกรรมที่นี่ Co working Space</p>
			    	<div class="flex">
			    		<a href="CoLogin.php">
			    		<button class="primary-btn">เข้าสู่เว็บไซต์</button>
			  			</a>

			    		<a href="CoContact.html" >
			    		<button class="secondary-btn">Contact Us</button>
			    		</a>
			    	</div>
			    	</div>
					</div>
				<div class="item">
			    	<img src="image/R1.jpg" alt="">
			    	<div class="text">
			    		<h1>Coworking Space</h1>
			    		<p>ใช้เวลาว่างเพื่อทำงาน หรือทำกิจกรรมที่นี่ Co working Space</p>
			    	<div class="flex">
			    		<a href="CoLogin.php">
			    		<button class="primary-btn">เข้าสู่เว็บไซต์</button>
			  			</a>

			    		<a href="CoContact.html" >
			    		<button class="secondary-btn">Contact Us</button>
			    		</a>
			    	</div>
			    	</div>
					</div>
				<div class="item">
			    	<img src="image/R2.jpg" alt="">
			    	<div class="text">
			    		<h1>Coworking Space</h1>
			    		<p>ใช้เวลาว่างเพื่อทำงาน หรือทำกิจกรรมที่นี่ Co working Space</p>
			    	<div class="flex" >
			    		<a href="CoLogin.php">
			    		<button class="primary-btn">เข้าสู่เว็บไซต์</button>
			  			</a>

			    		<a href="CoContact.html" >
			    		<button class="secondary-btn">Contact Us</button>
			    		</a>
			    	</div>
			    	</div>
					</div>
		</div>
	</div>
</section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<script>
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>

</body>
</html>