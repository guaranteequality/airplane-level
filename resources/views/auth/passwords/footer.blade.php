<footer role="contentinfo">            

    <section class="alerts">
        <div id="alert-email-verification" class="alert alert--info hidden" role="alert">
            <div class="wrapper alert__content">
                <div class="alert__text">
                    <span class="icon icon-checkmark3"></span> <span>Thank you for verifying your email address! Your account has been created.</span>
                </div>
                <button class="btn btn--reset alert__btn alert__btn--close" role="button">
                    <span class="icon icon-cross2"></span>
                </button>
            </div>
        </div>
        <div id="alert-comment-success" class="alert alert--info hidden" role="alert">
            <div class="wrapper alert__content">
                <div class="alert__text">
                    <span class="icon icon-checkmark3"></span> <span>Your comment has been submitted.</span>
                </div>
                <button class="btn btn--reset alert__btn alert__btn--close" role="button">
                    <span class="icon icon-cross2"></span>
                </button>
            </div>
        </div>
    </section>
    <div id="footer" class="footer wrapper"  >
        <!--               <div class="footer__seperator"></div>-->
        <div class="grid">
            <div class="col-7_sm-12 grid">
                <div class="col-4 text-center">
                    <ul>
                        <li> Photos

                            <ul>
                                <li>Popular Today</li>
                                <li>Popular All Time</li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-4 text-center">

                    <ul>
                        <li> News

                            <ul>
                                <li>Airlines</li>
                                <li>Airports</li>
                                <li>Other</li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-4 text-center">

                    <ul>
                        <li> Members

                            <ul>
                                <li>Top Photographers</li>
                                <li>Profiles</li>
                                <li>Stats</li>

                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-5_sm-12 grid">
                <div class="col-4_sm-12"></div>
                <div class="col-8_sm-12 align-text-bottom pl-5 pr-5">
                    <img src="{{ asset('imgs/footer-logo.png')}}" alt=""> 
                </div>

            </div>
            <div class="col-12 grid pl-1 pr-1">
                <div class="col-6_sm-12">
                    <span><strong>Copyright 2003-2017 AirlinePics.com</strong></span>
                </div>
                <div class="col-6_sm-12 text-right ">   
                    <span><strong>About Us  -  Advertise  -  Privacy Policy  -  Terms Of Use  -  DMCA / Copyright</strong></span>
                </div>
            </div>
        </div>
    </div>
    <!--script src="{{ asset('scripts.min.js') }}"></script>	
    <script src="{{ asset('templates.js') }}"></script-->		
    <input type="hidden" id="ads-hidden" value="true">

</footer>
