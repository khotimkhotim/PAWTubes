<?php 
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root", "","pro_intermedia");
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
		<title>PKL GO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="css/slicknav.css">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="js/camera.min.js"></script>
		<script type="text/javascript" src="js/myscript.js"></script>
		<script src="js/sorting.js" type="text/javascript"></script>
		<script src="js/jquery.isotope.js" type="text/javascript"></script>
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->
		

		<script>
			jQuery(function(){
					jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 3000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>
		
	</head>
	<body>
    
    <!--home start-->
    
    <div id="home">
    	<div class="headerLine">
	<div id="menuF" class="default">
		<div class="container">
			<div class="row">
				<div class="logo col-md-4">
					<div>
						<img src="images/pklgologo1.png" style="float:center;position: relative;">
					</div>
				</div>
				<div class="col-md-8">
					<div class="navmenu"style="text-align: center;">

						<ul id="menu">
							<li class="active" ><a href="#home">Home</a></li>
							<li><a href="#profil">Partner</a></li>
							<li><a href="#work">Pekerjaan</a></li>
							<li class="last"><a href="#contact">Contact</a></li>
                            <li class="last"><a href="home.php">Sig In</a></li>
							<!--li><a href="#features">Features</a></li-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row wrap">
				<div class="col-md-12 gallery" style="text-align: center;"> 
						<div class="camera_wrap camera_white_skin" id="camera_wrap_1">
							<div data-thumb="" data-src="images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>Praktik Kerja Lapangan?</h2>
								</div>
							</div>
							<div data-thumb="" data-src="images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>Daftar Menjadi Member Kami</h2>
								</div>
							</div>
							<div data-thumb="" data-src="images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>Lebih Mudah dan Nyaman</h2>
								</div>
							</div>
						</div><!-- #camera_wrap_1 -->
				</div>
			</div>
		</div>
	</div>
        
    <div id="profil">    
    <div class="container">
			<div class="row">
				<div class="col-md-12 wwa">
					<span name="about" ></span>
					<h3>Profil Kami</h3>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row team">
				<div class="col-md-4 b1">
						<img class="img-responsive" src="images/picTeam/picT1.png">
						<h4>Tom Simpson</h4>						
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit <br/>quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
				</div>
			
			
				<div class="col-md-4">
						<img class="img-responsive" src="images/picTeam/picT2.png">
						<h4>John Doe</h4>						
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br/> quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
				</div>
		
			
				<div class="col-md-4 b3">
						<img class="img-responsive" src="images/picTeam/picT3.png">
						<h4>Anna White</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br/> quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
				</div><div class="col-md-4 b1">
						<img class="img-responsive" src="images/picTeam/picT1.png">
						<h4>Tom Simpson</h4>						
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit <br/>quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
				</div>
			
			
				<div class="col-md-4">
						<img class="img-responsive" src="images/picTeam/picT2.png">
						<h4>John Doe</h4>						
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br/> quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
				</div>
		
			
				<div class="col-md-4 b3">
						<img class="img-responsive" src="images/picTeam/picT3.png">
						<h4>Anna White</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br/> quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
				</div>
			</div>
		</div>   
        </div>
        
    <!--project start-->    
    <div id="work">    	
		<div class="line3">
			<div class="container">
				<div id="project1" ></div>
				<div class="row Ama">
					<div class="col-md-12">
					<span name="projects" id="projectss"></span>
					<h3>Pekerjaan Kami</h3>
					</div>
				</div>
			</div>
		</div>          
    
    
       <div class="container">
		
		<div class="row">
			<!-- filter_block -->
				<div id="options" class="col-md-12" style="text-align: center;">	
					<ul id="filter" class="option-set" data-option-key="filter">
						<li><a class="selected" href="#filter" data-option-value="*" class="current">Semua Konten</a></li>
						<li><a href="#filter" data-option-value=".game">Game Development</a></li>
						<li><a href="#filter" data-option-value=".web">Web Development</a></li>
						<li><a href="#filter" data-option-value=".media">Media Pembelajaran</a></li>
					</ul>
				</div><!-- //filter_block -->
			<div class="portfolio_block columns3   pretty" data-animated="fadeIn">	
                
                <!--game development-->
					<div class="element col-sm-4   gall game">
						<div class="view project_descr ">
							<h3>Pembuatan Game berbasis Android</h3>
							<ul>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
                
                <!--web development-->
					<div class="element col-sm-4   gall web">
						<div class="view project_descr ">
							<h3>Pembuatan Web dinamis dan statis</h3>
							<ul>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
                
                <!--media-->
					<div class="element col-sm-4   gall media">
						<div class="view project_descr ">
							<h3>Media Pembelajaran Interaktif</h3>
							<ul>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
			</div>
		</div>
		</div>
    </div>    
    
    <!--news start-->
    
    
    <div id="contact">
    	<div class="line5">					
			<div class="container">
				<div class="row Ama">
					<div class="col-md-12">
					<h3>Konsultasi dengan kami? Kami beri balasan via email!</h3>					
                    <p> Kami beri jawaban via email anda</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-xs-12 forma">
					<form>
						<input type="text" class="col-md-6 col-xs-12 name" name='name' placeholder='Name *'/>
						<input type="text" class="col-md-6 col-xs-12 Email" name='Email' placeholder='Email *'/>
						<input type="text" class="col-md-12 col-xs-12 Subject" name='Subject' placeholder='Subject'/>
						<textarea type="text" class="col-md-12 col-xs-12 Message" name='Message' placeholder='Message *'></textarea>
						<div class="cBtn col-xs-12">
							<ul>
								<li class="clear"><a href="#"><i class="fa fa-times"></i>clear form</a></li>
								<li class="send"><a href="#"><i class="fa fa-share"></i>Send Message</a></li>
							</ul>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="lineBlack">
			<div class="container">
				<div class="row downLine">
					<div class="col-md-6 text-left copy">
						<p>Copyright &copy; .</p>
					</div>
				</div>
			</div>
		</div>
    </div>		
		
		
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script>
			$(document).ready(function(){
			$(".bhide").click(function(){
				$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
			$(".bhide2").click(function(){
				$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});
				
			$('.heart').mouseover(function(){
					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
				}).mouseout(function(){
					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
				});
				
				function sdf_FTS(_number,_decimal,_separator)
				{
				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
				var separator=(typeof(_separator)!='undefined')?_separator:'';
				var r=parseFloat(_number)
				var exp10=Math.pow(10,decimal);
				r=Math.round(r*exp10)/exp10;
				rr=Number(r).toFixed(decimal).toString().split('.');
				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
				r=(rr[1]?b+'.'+rr[1]:b);

				return r;
}
				
			setTimeout(function(){
					$('#counter').text('0');
					$('#counter1').text('0');
					$('#counter2').text('0');
					setInterval(function(){
						
						var curval=parseInt($('#counter').text());
						var curval1=parseInt($('#counter1').text().replace(' ',''));
						var curval2=parseInt($('#counter2').text());
						if(curval<=707){
							$('#counter').text(curval+1);
						}
						if(curval1<=12280){
							$('#counter1').text(sdf_FTS((curval1+20),0,' '));
						}
						if(curval2<=245){
							$('#counter2').text(curval2+1);
						}
					}, 2);
					
				}, 500);
			});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();
		
	});
	</script>
	
	<script type="text/javascript">
    $(document).ready(function(){
       
        var $menu = $("#menuF");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
	});
    //jQuery
	</script>
	<script>
		/*menu*/
		function calculateScroll() {
			var contentTop      =   [];
			var contentBottom   =   [];
			var winTop      =   $(window).scrollTop();
			var rangeTop    =   200;
			var rangeBottom =   500;
			$('.navmenu').find('a').each(function(){
				contentTop.push( $( $(this).attr('href') ).offset().top );
				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
			})
			$.each( contentTop, function(i){
				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
					$('.navmenu li')
					.removeClass('active')
					.eq(i).addClass('active');				
				}
			})
		};
		
		$(document).ready(function(){
			calculateScroll();
			$(window).scroll(function(event) {
				calculateScroll();
			});
			$('.navmenu ul li a').click(function() {  
				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
				return false;
			});
		});		
	</script>	
	<script type="text/javascript" charset="utf-8">

		jQuery(document).ready(function(){
			jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
			
		});
	</script>
	</body>
	
</html>