<div class="header">
    <div class="headertop_desc">
        <div class="call">
            <p><span>{{trans('portal.help')}}</span> {{trans('portal.call')}} <span class="number">{{config('portal.telefone')}}</span></span></p>
        </div>
        <div class="account_desc">
            <ul>
                <li><a href="#">Register</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Delivery</a></li>
                <li><a href="#">Checkout</a></li>
                <li><a href="#">My Account</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_top">
        <div class="logo">
            <a href="index.html">
                {!! HTML::image('midia/images/logo.png', 'Portal Pravaler') !!}
            </a>
        </div>
        <div class="cart">
            <p>{{ trans('portal.welcomeStore') }} <span>{{ trans('portal.cart') }}</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
                <ul class="dropdown">
                    <li>{{ trans('portal.cartItems') }}</li>
                </ul></div></p>
        </div>
        <script type="text/javascript">
            function DropDown(el) {
                this.dd = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents: function () {
                    var obj = this;

                    obj.dd.on('click', function (event) {
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    });
                }
            }

            $(function () {

                var dd = new DropDown($('#dd'));

                $(document).click(function () {
                    // all dropdowns
                    $('.wrapper-dropdown-2').removeClass('active');
                });

            });

        </script>
        <div class="clear"></div>
    </div>
    <div class="header_bottom">
        <div class="menu">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="delivery.html">Delivery</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="contact.html">Contact</a></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="search_box">
            <form>
                <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
            </form>
        </div>
        <div class="clear"></div>
    </div>	     
    <div class="header_slide">
        <div class="header_bottom_left">				
            <div class="categories">
                <ul>
                    <h3>{{trans('portal.categories')}}</h3>
                    <li><a href="#">Mobile Phones</a></li>
                    <li><a href="#">Desktop</a></li>
                    <li><a href="#">Laptop</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Software</a></li>
                    <li><a href="#">Sports &amp; Fitness</a></li>
                    <li><a href="#">Footwear</a></li>
                    <li><a href="#">Jewellery</a></li>
                    <li><a href="#">Clothing</a></li>
                    <li><a href="#">Home Decor &amp; Kitchen</a></li>
                    <li><a href="#">Beauty &amp; Healthcare</a></li>
                    <li><a href="#">Toys, Kids &amp; Babies</a></li>
                </ul>
            </div>					
        </div>
        <div class="header_bottom_right">					 
            <div class="slider">					     
                <div id="slider">
                    <div id="mover">
                        <div id="slide-1" class="slide">			                    
                            <div class="slider-img">
                                <a href="preview.html">
                                    {!! HTML::image('midia/images/slide-1-image.png', 'Portal Pravaler') !!}
                                </a>
                            </div>
                            <div class="slider-text">
                                <h1>Clearance<br><span>SALE</span></h1>
                                <h2>UPTo 20% OFF</h2>
                                <div class="features_list">
                                    <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
                                </div>
                                <a href="preview.html" class="button">Shop Now</a>
                            </div>			               
                            <div class="clear"></div>				
                        </div>	
                        <div class="slide">
                            <div class="slider-text">
                                <h1>Clearance<br><span>SALE</span></h1>
                                <h2>UPTo 40% OFF</h2>
                                <div class="features_list">
                                    <h4>Get to Know More About Our Memorable Services</h4>							               
                                </div>
                                <a href="preview.html" class="button">Shop Now</a>
                            </div>		
                            <div class="slider-img">
                                <a href="preview.html">
                                    {!! HTML::image('midia/images/slide-3-image.png', 'Portal Pravaler') !!}
                                </a>
                            </div>						             					                 
                            <div class="clear"></div>				
                        </div>
                        <div class="slide">						             	
                            <div class="slider-img">
                                <a href="preview.html">
                                    {!! HTML::image('midia/images/slide-2-image.png', 'Portal Pravaler') !!}
                                </a>
                            </div>
                            <div class="slider-text">
                                <h1>Clearance<br><span>SALE</span></h1>
                                <h2>UPTo 10% OFF</h2>
                                <div class="features_list">
                                    <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
                                </div>
                                <a href="preview.html" class="button">Shop Now</a>
                            </div>	
                            <div class="clear"></div>				
                        </div>												
                    </div>		
                </div>
                <div class="clear"></div>					       
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>