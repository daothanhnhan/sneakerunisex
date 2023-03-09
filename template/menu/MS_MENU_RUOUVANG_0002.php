<nav class="visible-sm visible-xs mobile-menu-container mobile-nav">
    <div class="menu-mobile-nav">
        <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </div>
    <div id="cssmenu" class="animated">
        <div class="uni-icons-close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <!-- <ul>
            <li><a href="/index.php" class="slide-section">Trang chủ</a></li>
            <li><a href="">Về chúng tôi</a></li>
            <li class="has-sub"><a href="san-pham">Sản phẩm</a>
                <ul>
                    <li>
                        <a href="product/adidas" title="ADIDAS">ADIDAS              </a>
                        <ul>
                            <li>
                                <a href="product/adidas-yeezy-350/" title="Adidas Yeezy 350">Adidas Yeezy 350</a>
                            </li>
                            <li>
                                <a href="product/adidas-human-race/" title="Adidas Human Race">Adidas Human Race</a>
                            </li>
                            <li>
                                <a href="product/adidas-prophere/" title="Adidas Prophere">Adidas Prophere</a>
                            </li>
                            <li>
                                <a href="product/adidas-alphabounce/" title="Adidas Alphabounce">Adidas Alphabounce</a>
                            </li>
                            <li>
                                <a href="product/adidas-ultra-boost/" title="Adidas Ultra Boost">
                                    Adidas Ultra Boost</a>
                            </li>
                            <li>
                                <a href="product/adidas-pure-boost/" title="Adidas Pure Boost">
                                    Adidas Pure Boost                      </a>
                            </li>
                            <li>
                                <a href="product/adidas-city-sock/" title="Adidas City Sock">
                                    Adidas City Sock                      </a>
                            </li>
                            <li>
                                <a href="product/adidas-stan-smith/" title="Adidas Stan Smith">
                                    Adidas Stan Smith                      </a>
                            </li>
                            <li>
                                <a href="" title="Adidas NMD">
                                    Adidas NMD                      </a>
                            </li>
                            <li>
                                <a href="" title="Adidas NMD XR1">
                                    Adidas NMD XR1                      </a>
                            </li>
                            <li>
                                <a href="" title="Adidas NMD R2">
                                    Adidas NMD R2                      </a>
                            </li>
                            <li>
                                <a href="" title="Adidas EQT">
                                    Adidas EQT                      </a>
                            </li>
                            <li>
                                <a href="" title="Adidas Khác">Adidas Khác</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">NIKE</a>
                    </li>
                    <li>
                        <a href="">THƯƠNG HIỆU KHÁC</a>
                    </li>
                    <li>
                        <a href="">SALE OFF</a>
                    </li>
                    <li>
                        <a href="">HÀNG ĐẶT TRƯỚC</a>
                    </li>
                </ul>
            </li>
            <li><a href="">Tư vấn</a></li>
            <li><a href="/tin-tuc">Tin tức sự kiện</a></li>
            <li><a href="lien-he">Liên hệ</a></li>
        </ul> -->
        <?php 
                $list_menu = $menu->getListMainMenu_byOrderASC();
                $menu->showMenu_byMultiLevel_mainMenuTraiCam($list_menu,0,$lang,0);
            ?>
        <div class="clearfix"></div>
    </div>
</nav>

<script>
    $(document).ready(function () {
        //-----------------menu mobile---------------------
        $('.mobile-menu-container .menu-mobile-nav').on('click', function (e) {
            if($(e.target).is('.icon-bar i')){
                $('#cssmenu').slideToggle();
                $('#cssmenu ul').slideToggle();
                $('#cssmenu ul ul').hide();
            }
        });
        $('.uni-icons-close'). on('click', function (e) {
            if($(e.target).is('i')){
                $('#cssmenu').hide( 500);
                $('#cssmenu ul').hide(500);
            }
        });

        (function($) {

            $.fn.menumaker = function(options) {

                var cssmenu = $(this), settings = $.extend({
                    title: "Menu",
                    format: "dropdown",
                    sticky: false
                }, options);

                return this.each(function() {

                    cssmenu.find('li ul').parent().addClass('has-sub');

                    var multiTg = function() {
                        cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                        cssmenu.find('.submenu-button').on('click', function() {
                            $(this).toggleClass('submenu-opened');
                            $(this).toggleClass('active');
                            if ($(this).siblings('ul').hasClass('open')) {
                                $(this).siblings('ul').removeClass('open').slideToggle();
                            }
                            else {
                                $(this).siblings('ul').addClass('open').slideToggle();
                            }
                        });
                    };

                    if (settings.format === 'multitoggle') multiTg();
                    else cssmenu.addClass('dropdown');

                    if (settings.sticky === true) cssmenu.css('position', 'fixed');

                    var resizeFix = function() {
                        if ($( window ).width() > 768) {
                            cssmenu.find('ul').show();
                        }

                        if ($(window).width() <= 768) {
                            cssmenu.find('ul').hide().removeClass('open');
                        }
                    };
                    resizeFix();
                    return $(window).on('resize', resizeFix);

                });
            };
        })(jQuery);

        (function($){
            $(document).ready(function() {
                $("#cssmenu").menumaker({
                    title: "",
                    format: "multitoggle"
                });

                $("#cssmenu").prepend("<div id='menu-line'></div>");

                var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;

                $("#cssmenu > ul > li").each(function() {
                    if ($(this).hasClass('active')) {
                        activeElement = $(this);
                        foundActive = true;
                    }
                });

                if (foundActive === false) {
                    activeElement = $("#cssmenu > ul > li").first();
                }

                defaultWidth = lineWidth = activeElement.width();

                // defaultPosition = linePosition = activeElement.position().left;

                menuLine.css("width", lineWidth);
                menuLine.css("left", linePosition);

                $("#cssmenu > ul > li").on('mouseenter', function () {
                        activeElement = $(this);
                        lineWidth = activeElement.width();
                        linePosition = activeElement.position().left;
                        menuLine.css("width", lineWidth);
                        menuLine.css("left", linePosition);
                    },
                    function() {
                        menuLine.css("left", defaultPosition);
                        menuLine.css("width", defaultWidth);
                    });
            });
        })(jQuery);
    });
</script>