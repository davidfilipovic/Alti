
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
                    
                    <span class="sdt_active"></span>
                    <span class="sdt_wrap">
                        <span class="sdt_link">About us</span>
                        <span class="sdt_descr">Get to know us</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    
                    <span class="sdt_active"></span>
                    <span class="sdt_wrap">
                        <span class="sdt_link">Portfolio</span>
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
                    
                    <span class="sdt_active"></span>
                    <span class="sdt_wrap">
                        <span class="sdt_link">Photos</span>
                        <span class="sdt_descr">I like to photograph</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    
                    <span class="sdt_active"></span>
                    <span class="sdt_wrap">
                        <span class="sdt_link">Blog</span>
                        <span class="sdt_descr">I write about design</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    
                    <span class="sdt_active"></span>
                    <span class="sdt_wrap">
                        <span class="sdt_link">Projects</span>
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

        <script type="text/javascript">
            $(function () {
                /**
                 * for each menu element, on mouseenter, 
                 * we enlarge the image, and show both sdt_active span and 
                 * sdt_wrap span. If the element has a sub menu (sdt_box),
                 * then we slide it - if the element is the last one in the menu
                 * we slide it to the left, otherwise to the right
                 */
                $('#sdt_menu > li').bind('mouseenter', function () {
                    var $elem = $(this);
                    $elem.find('img')
                            .stop(true)
                            .animate({
                                'width': '170px',
                                'height': '170px',
                                'left': '0px'
                            }, 400, 'easeOutBack')
                            .andSelf()
                            .find('.sdt_wrap')
                            .stop(true)
                            .animate({'top': '140px'}, 500, 'easeOutBack')
                            .andSelf()
                            .find('.sdt_active')
                            .stop(true)
                            .animate({'height': '170px'}, 300, function () {
                                var $sub_menu = $elem.find('.sdt_box');
                                if ($sub_menu.length) {
                                    var left = '170px';
                                    if ($elem.parent().children().length == $elem.index() + 1)
                                        left = '-170px';
                                    $sub_menu.show().animate({'left': left}, 200);
                                }
                            });
                }).bind('mouseleave', function () {
                    var $elem = $(this);
                    var $sub_menu = $elem.find('.sdt_box');
                    if ($sub_menu.length)
                        $sub_menu.hide().css('left', '0px');

                    $elem.find('.sdt_active')
                            .stop(true)
                            .animate({'height': '0px'}, 300)
                            .andSelf().find('img')
                            .stop(true)
                            .animate({
                                'width': '0px',
                                'height': '0px',
                                'left': '170px'}, 400)
                            .andSelf()
                            .find('.sdt_wrap')
                            .stop(true)
                            .animate({'top': '25px'}, 500);
                });
            });
        </script>
    </div>
	<div class='social'>
                <a><img src='icon/facebook.png' width='33px' height='33px'></a>
                <a><img src='icon/twitter.png' width='33px' height='33px'></a><br>
                <a><img src='icon/google.png' width='33px' height='33px'></a>
                <a><img src='icon/linkedin.png' width='33px' height='33px'></a>
            </div>
</div>