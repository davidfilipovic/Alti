		<div class="header">
			<div class='logo'>
				<img src='alti2.png'>
				<div class='logo_text'>
				<b>Inspirativan test...</b>
			    </div>
		    </div>
		<div class="menu">
		
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="#">
						<!--<img src="images/2.jpg" alt=""/>-->
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Alti grupa</span>
							<span class="sdt_descr">Get to know us</span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="#">Job Board Website</a>
						<a href="#">Shopping Cart</a>
						
					</div>
				</li>
				<li>
					<a href="#">
						<!--<img src="images/1.jpg" alt=""/>-->
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Usluge</span>
							<span class="sdt_descr">My work</span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="#">Websites</a>
							<a href="#">Illustrations</a>
							<a href="#">Photography</a>
					</div>
				</li>
				<li>
					<a href="#">
						<!--<img src="images/4.jpg" alt=""/>-->
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Karijera</span>
							<span class="sdt_descr">I like to photograph</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<!--<img src="menu/images/5.jpg">-->
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Blog</span>
							<span class="sdt_descr">I write about design</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<!--<img src="images/6.jpg" alt=""/>-->
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Kontakt</span>
							<span class="sdt_descr">I like to code</span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="#">Job Board Website</a>
						<a href="#">Shopping Cart</a>
						<a href="#">Interactive Maps</a>
					</div>

				</li>
			</ul>
			
        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="menu/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '270px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-270px';
							$sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'8px'},500);
				});
            });
        </script>
				</div>
			<div class='social'>
			    
			      <a><img class='facebook' src='icon/facebook.png' onmouseover="src='icon/facebook_h.png'" onmouseout="this.src='icon/facebook.png'" width='33px' height='33px'></a>
			      <a><img class='twitter' src='icon/twitter.png' onmouseover="this.src='icon/twitter_h.png'" onmouseout="this.src='icon/twitter.png'" width='33px' height='33px'></a><br>
			      <a><img class='google' src='icon/google.png' onmouseover="this.src='icon/google_h.png'" onmouseout="this.src='icon/google.png'" width='33px' height='33px'></a>
			      <a><img class='linkedin' src='icon/linkedin.png' onmouseover="this.src='icon/linkedin_h.png'" onmouseout="this.src='icon/linkedin.png'" width='33px' height='33px'></a>
				  
		    </div>
				</div>
