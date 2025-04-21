
    <footer class="footer">
        <div class="footer-middle">
            <div class="container">
                <div class="bottom-inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-footer our-app">
                                <img src="{{ asset('/website') }}/assets/images/logo/logo.png" alt="#" style="max-width: 250px;">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-footer f-contact">
                                <h3>Get In Touch With Us</h3>
                                <p class="phone">Phone: +1 (900) 33 169 7720</p>
                                <ul>
                                    <li><span>Monday-Friday: </span> 9.00 am - 8.00 pm</li>
                                    <li><span>Saturday: </span> 10.00 am - 6.00 pm</li>
                                </ul>
                                <p class="mail">
                                    <a href="https://demo.graygrids.com/cdn-cgi/l/email-protection#5b282e2b2b34292f1b2833342b3c29323f2875383436">
                                        <span
                                            class="__cf_email__"
                                            data-cfemail="98ebede8e8f7eaecd8ebf0f7e8ffeaf1fcebb6fbf7f5">[email&#160;protected]</span>
                                        </a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6 col-12">

                            <div class="single-footer f-link">
                                <h3>Pages</h3>
                                <ul>
                                    <li class="nav-item">
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('all-products') }}">All Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                    @if (Session::get('customer_id'))
                                        <li class="nav-item">
                                            <a href="{{ route('customer.dashboard') }}">Dashboard</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-footer f-link">
                                <h3>Our Categories</h3>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('product-category', ['id' => $category->id]) }}">
                                                {{ $category->name }} 
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-bottom">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-12">
                            <div class="copyright">
                                <p>Copyright &copy; 2024. Developed by<a href="https://gm-zesan.netlify.app/" rel="nofollow" target="_blank">G.M. Zesan</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <ul class="socila">
                                <li>
                                    <span>Follow Us On:</span>
                                </li>
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>