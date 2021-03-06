<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grids fgd1">
            <a href="{{url('/')}}"><img src="{{ asset($fe_global_settings['footer_logo']) }}" alt=" " /><h3>FASHION<span>CLUB</span></h3></a>
            <ul>
                <li>1234k Avenue, 4th block,</li>
                <li>New York City.</li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd2">
            <h4>Information</h4>
            <ul>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="icons.html">Web Icons</a></li>
                <li><a href="typography.html">Typography</a></li>
                <li><a href="faq.html">FAQ's</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd3">
            <h4>Shop</h4>
            <ul>
                <li><a href="jewellery.html">Jewellery</a></li>
                <li><a href="cosmetics.html">Cosmetics</a></li>
                <li><a href="Shoes.html">Shoes</a></li>
                <li><a href="deos.html">Deos</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd4">
            <h4>My Account</h4>
            <ul>
                @guest
                    <li><a href="{{url('/login')}}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{url('/register')}}">Register</a></li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest


                <li><a href="recommended.html">Recommended </a></li>
                <li><a href="payment.html">Payments</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <p class="copy-right">© 2019 Fashion Club . All rights reserved | Design by <a href="https://www.facebook.com/duonglv98hihi"> Duong LV</a></p>
    </div>
</div>
