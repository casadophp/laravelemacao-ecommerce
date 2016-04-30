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
    @if(isset($categorias))
        {{-- CATEGORIAS --}}
        @include('includes.categorias')
    
        {{-- BANNER --}}
        @include('includes.banner')
    @endif
</div>