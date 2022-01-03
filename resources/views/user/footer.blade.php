<!-- Start footer section-->


<div class="d-md-block d-none">
    <footer id="footer-section">
        <div class="container-fluid">
            <div class="footer-content pt-5 pb-3">
                <div class="row justify-content-center my-5">
                    <div class="col-xl-2 col-lg-3 col-md-12 mb-50 text-lg-center text-md-left align-self-center">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="{{route('user.dashboard')}}"><img src="{{asset('image/logo.png')}}" width="190px"></a>
                            </div>                           
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-11  align-self-center mb-lg-5 mb-2 ff-sub-details mt-0 mt-md-3">
                        <div class="footer-widget">
                            <div class="footer-text ">
                                <div class="ff-mid-text">Customer Center 1588-5682 </div>
                                <div class="ff-mid-text">Representative Hong Gil-dong</div>
                                <div class="ff-mid-text">Business registration number 123-45-678910 </div>
                                <div class="ff-mid-text">Room 301, Donghwa Building, 3 Gyeongbok-daero 17an-gil, Onam-eup, Namyangju-si, Gyeonggi-do</div>
                                <div class="ff-mid-text">© 2021 ElimBot. All Rights Reserved.</div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="footer-widget-heading mt-sm-0 mt-4">
                                <h3>About Us</h3>
                            </div>
                            <ul class="ff-abt-head">
                                <li><a href="#">Revenue inquiry</a></li><br>
                                <li><a href="#">point transfer</a></li><br>
                                <li><a href="#">T-point conversion</a></li><br>
                                <li><a href="#">notice board</a></li>  
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Service</h3>
                            </div>
                            <ul class="ff-abt-head">
                                <li><a href="#">customer service center</a></li><br>
                                <li><a href="{{route('user.firstinquiry')}}">1:1 inquiryr</a></li><br>
                                <li><a href="">T-point conversion</a></li><br>
                                <li><a href="#">Kakao Talk</a></li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </footer>
</div>
    
<!---------- end footer section------------>

<!----------  footer section mobile view start------------>
<div class="d-md-none d-block">
    <div id="ff-mob-view">
        <div class="container-fluid">
            <div class="d-flex justify-content-between p-sm-3 p-2">
                <a href="{{route('user.dashboard')}}" class="align-self-center ff-log-img"><img src="{{asset('image/logo.png')}}" ></a>
                <div class="ff-tds-text pt-2">Room 301, Donghwa Building, 3 Gyeongbok-daero 17an-gil, Onam-eup, Namyangju-si, Gyeonggi-do</div>
            </div>
            <div class="ff-cod-text mb-2">© 2021 ElimBot. All Rights Reserved.</div>
            <div class="ff-cent-sec">
                <div class="ff-detail">
                    <ul class="ff-spac-list">
                        <li>
                            <a href="{{route('user.dashboard')}}" class="ff-bottm-img"><img src="{{asset('image/footer-icon/f01.png')}}" ></a>
                            <!-- <div class="ff-home-text"></div> -->
                        </li>
                        <li>
                            <a href="{{route('user.trading')}}" class="ff-bottm-img"><img src="{{asset('image/footer-icon/f02.png')}}" ></a>
                            <!-- <div class="ff-home-text">Create Route Plan</div> -->
                        </li>
                        <li>
                            <a href="{{route('user.mypoint')}}" class="ff-bottm-img"><img src="{{asset('image/footer-icon/f03.png')}}"></a>
                            <!-- <div class="ff-home-text">Route Plan</div> -->
                        </li>
                        <li>
                            <a href="{{route('user.profile')}}" class="ff-bottm-img"><img src="{{asset('image/footer-icon/f04.png')}}" ></a>
                            <!-- <div class="ff-home-text">Profile</div> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!----------  footer section mobile view end------------>