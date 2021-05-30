@include('layouts.header')
  @section('content')
  <!-- Header end --> 
  @endsection
  	<!-- Secondary Navigation
    ============================================= -->
    <div class="bg-secondary">
      <div class="container">
        <ul class="nav secondary-nav">
          <li class="nav-item"> <a class="nav-link" href="booking-hotels.html"><span><i class="fas fa-bed"></i></span> Hotels</a></li>
		  <li class="nav-item"> <a class="nav-link active" href="booking-flights.html"><span><i class="fas fa-plane"></i></span> Flights</a> </li>
          <li class="nav-item"> <a class="nav-link" href="booking-trains.html"><span><i class="fas fa-train"></i></span> Trains</a> </li>
          <li class="nav-item"> <a class="nav-link" href="booking-bus.html"><span><i class="fas fa-bus"></i></span> Bus</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="booking-cars.html"><span><i class="fas fa-car"></i></span> Cars</a> </li>
        </ul>
      </div>
    </div><!-- Secondary Navigation end -->
    
  <!-- Content
  ============================================= -->
  <div id="content">
    <section class="container">
        <div class="bg-white shadow-md rounded p-4">
          <div class="row">
            <div class="col-lg-5 mb-4 mb-lg-0">
              <h2 class="text-4 mb-3">Book Domestic and International Flights</h2>
              <form id="bookonlineFlight"  method="post">
                <div class="mb-3">
                  @csrf
                  <div class="custom-control custom-radio custom-control-inline">
                    <input id="oneway" name="flight-trip" value="oneway" class="custom-control-input" checked="" required type="radio">
                    <label class="custom-control-label" for="oneway">One Way</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input id="roundtrip" name="flight-trip" value="roundtrip" class="custom-control-input" required type="radio">
                    <label class="custom-control-label" for="roundtrip">Round Trip</label>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-6 form-group">
                    <input type="text" name="flightfrom" class="form-control" id="flightFrom" required placeholder="From">
                    <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> 
                        <datalist id="pathdepth3">
                       <option value="">

                        </datalist> 

                  </div>
                  <div class="col-lg-6 form-group">
                    <input type="text" name="flightto" class="form-control" id="flightTo" required placeholder="To">
                    <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-6 form-group">
                    <input id="flightDepart" name="flightDepart" type="date" class="form-control" required placeholder="Depart Date">
                    <!-- <span class="icon-inside"><i class="far fa-calendar-alt"></i></span>  -->
                  </div>
                  <div class="col-lg-6 form-group">
                    <input id="flightReturn" type="date" name="flightReturn" class="form-control" required placeholder="Return Date">
                    <!-- <span class="icon-inside"><i class="far fa-calendar-alt"></i></span>  -->
                  </div>
                </div>
                <div class="travellers-class form-group">
                  <input type="text" id="flightTravellersClass" class="travellers-class-input form-control" name="flightClass" placeholder="Travellers, Class" readonly required onkeypress="return false;">
                  <span class="icon-inside"><i class="fas fa-caret-down"></i></span>
                  <div class="travellers-dropdown">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0">Adults <small class="text-muted">(12+ yrs)</small></p>
                      </div>
                      <div class="col-sm-5">
    
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#flightAdult-travellers" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" id="flightAdult-travellers" class="qty-spinner form-control" value="1" readonly>
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#flightAdult-travellers" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-2">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0">Children <small class="text-muted">(2-12 yrs)</small></p>
                      </div>
                      <div class="col-sm-5">
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#flightChildren-travellers" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" id="flightChildren-travellers" class="qty-spinner form-control" value="0" readonly>
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#flightChildren-travellers" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-2">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0">Infants <small class="text-muted">(Below 2 yrs)</small></p>
                      </div>
                      <div class="col-sm-5">
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#flightInfants-travellers" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" id="flightInfants-travellers" class="qty-spinner form-control" value="0" readonly>
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#flightInfants-travellers" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="mt-2">
                    <div class="mb-3">
                      <div class="custom-control custom-radio">
                        <input id="flightClassEconomic" name="flight-class" class="flight-class custom-control-input" value="0" checked="" required type="radio">
                        <label class="custom-control-label" for="flightClassEconomic">Economic</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="flightClassPremiumEconomic" name="flight-class" class="flight-class custom-control-input" value="1" required type="radio">
                        <label class="custom-control-label" for="flightClassPremiumEconomic">Premium Economic</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="flightClassBusiness" name="flight-class" class="flight-class custom-control-input" value="2" required type="radio">
                        <label class="custom-control-label" for="flightClassBusiness">Business</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="flightClassFirstClass" name="flight-class" class="flight-class custom-control-input" value="3" required type="radio">
                        <label class="custom-control-label" for="flightClassFirstClass">First Class</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-block submit-done" type="button">Done</button>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Search Flights</button>
              </form>
            </div>
            <div class="col-lg-7"><img class="img-fluid rounded" src="{{asset('flight/images/slider/booking-banner-1.jpg')}}" alt="Quickai" /></div>
          </div>
        </div>
      </section>
    <div class="container">
      <section class="section px-3 px-md-5 pb-2">
        <h2 class="text-9 font-weight-600 text-center">Why Book Flight with Quickai</h2>
        <p class="lead mb-5 text-center">Book Flight Tickets Online. Save Time and Money!</p>
        <div class="row">
          <div class="col-md-4">
            <div class="featured-box text-center">
              <div class="featured-box-icon text-primary"> <i class="fas fa-dollar-sign"></i> </div>
              <h3>No Booking Charges</h3>
              <p>No hidden charges, no payment fees, and free customer service. So you get the best deal every time!</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="featured-box text-center">
              <div class="featured-box-icon text-primary"> <i class="fas fa-percentage"></i> </div>
              <h3>Cheapest Price</h3>
              <p>Always get cheapest price with the best in the industry. So you get the best deal every time.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="featured-box text-center">
              <div class="featured-box-icon text-primary"> <i class="far fa-times-circle"></i> </div>
              <h3>Easy Cancellation &amp; Refunds</h3>
              <p>Get instant refund and get any booking fees waived off!</p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <section class="container mt-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="bg-white shadow-md rounded p-4">
            <h3 class="text-6 mb-4">Popular Domestic Routes</h3>
			<hr class="mx-n4">
            <p class="d-flex align-items-center">Delhi to Mumbai Flights <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search Flights</span></a></p>
            <hr>
            <p class="d-flex align-items-center">Bangalore to Delhi Flights<a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search Flights</span></a></p>
            <hr>
            <p class="d-flex align-items-center">Hyderabad to Delhi Flights <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search Flights</span></a></p>
            <hr>
            <p class="d-flex align-items-center">Ahmedabad to Mumbai Flights <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search Flights</span></a></p>
            <hr>
            <p class="d-flex align-items-center">Mumbai to Chennai Flights <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search Flights</span></a></p>
            <hr>
            <p class="text-center mb-0"><a href="#" class="d-inline-block">View All</a></p>
          </div>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="bg-white shadow-md rounded p-4">
            <h3 class="text-6 mb-4">Popular International Routes</h3>
			<hr class="mx-n4">
            <p class="d-flex align-items-center">Mumbai to Dubai Flights <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search Flights</span></a></p>
            <hr>
            <p class="d-flex align-items-center">Delhi to Toronto Flights <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search Flights</span></a></p>
            <hr>
            <p class="d-flex align-items-center">Chennai to Singapore Flights <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search Flights</span></a></p>
            <hr>
            <p class="d-flex align-items-center">Delhi to London Flights <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search Flights</span></a></p>
            <hr>
            <p class="d-flex align-items-center">Kolkata to Bangkok Flights <a href="#" class="btn btn-sm btn-outline-primary shadow-none ml-auto"><i class="fas fa-search d-block d-sm-none"></i> <span class="d-none d-sm-block">Search Flights</span></a></p>
            <hr>
            <p class="text-center mb-0"><a href="#" class="d-inline-block">View All</a></p>
          </div>
        </div>
      </div>
    </section>
    <div class="section py-4">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">Book Flights</a> </li>
          <li class="nav-item"> <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Why Quickai?</a> </li>
        </ul>
        <div class="tab-content my-3" id="myTabContent">
          <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
            <p>Online Book Domestic and International flights Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
            <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
          </div>
          <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
            <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
            <p>Instant Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
          </div>
        </div>
      </div>
    </div>
    <section class="container">
      <div class="bg-white shadow-md rounded p-4">
        <h3 class="text-6 mb-4">Our Airlines partner</h3>
		<hr class="mx-n4 mb-4">
        <div class="brands-grid separator-border">
          <div class="row align-items-center">
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-1.png')}}" alt="Brands"></a></div>
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-2.png')}}" alt="Brands"></a></div>
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-3.png')}}" alt="Brands"></a></div>
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-4.png')}}" alt="Brands"></a></div>
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-5.png')}}" alt="Brands"></a></div>
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-6.png')}}" alt="Brands"></a></div>
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-7.png')}}" alt="Brands"></a></div>
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-8.png')}}" alt="Brands"></a></div>
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-9.png')}}" alt="Brands"></a></div>
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-10.png')}}" alt="Brands"></a></div>
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-11.png')}}" alt="Brands"></a></div>
            <div class="col-6 col-sm-3 col-lg-2 text-center"><a href=""><img class="img-fluid" src="{{asset('flight/images/brands/flights/airlines-12.png')}}" alt="Brands"></a></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-lg-6 text-center"> <img class="img-fluid" alt="" src="{{asset('flight/images/app-mobile.png')}}"> </div>
          <div class="col-md-7 col-lg-6">
            <h2 class="text-9 font-weight-600 my-4">Download Our Quickai<br class="d-none d-lg-inline-block">
              Mobile App Now</h2>
            <p class="lead">Download our app for the fastest, most convenient way to send Recharge.</p>
            <p>Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo.</p>
            <ul>
              <li>Recharge</li>
              <li>Bill Payment</li>
              <li>Booking Online</li>
              <li>and much more.....</li>
            </ul>
            <div class="d-flex flex-wrap pt-2"> <a class="mr-4" href=""><img alt="" src="{{asset('flight/images/app-store.png')}}"></a><a href=""><img alt="" src="images/google-play-store.png"></a> </div>
          </div>
        </div>
      </div>
    </section>
  </div><!-- Content end -->
  
  <!-- Footer
  ============================================= -->
  <footer id="footer">
    <section class="section bg-white shadow-md pt-4 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="featured-box text-center">
              <div class="featured-box-icon"> <i class="fas fa-lock"></i> </div>
              <h4>100% Secure Payments</h4>
              <p>Moving your card details to a much more secured place.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="featured-box text-center">
              <div class="featured-box-icon"> <i class="fas fa-thumbs-up"></i> </div>
              <h4>Trust pay</h4>
              <p>100% Payment Protection. Easy Return Policy.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="featured-box text-center">
              <div class="featured-box-icon"> <i class="fas fa-bullhorn"></i> </div>
              <h4>Refer & Earn</h4>
              <p>Invite a friend to sign up and earn up to $100.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="featured-box text-center">
              <div class="featured-box-icon"> <i class="far fa-life-ring"></i> </div>
              <h4>24X7 Support</h4>
              <p>We're here to help. Have a query and need help ? <a href="#">Click here</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4 mb-3 mb-md-0">
          <p>Payment</p>
          <ul class="payments-types">
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('flight/images/payment/visa.png')}}" alt="visa" title="Visa"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('flight/images/payment/discover.png')}}" alt="discover" title="Discover"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('flight/images/payment/paypal.png')}}" alt="paypal" title="PayPal"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('flight/images/payment/american.png')}}" alt="american express" title="American Express"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('flight/images/payment/mastercard.png')}}" alt="discover" title="Discover"></a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <p>Subscribe</p>
          <div class="input-group newsletter">
            <input class="form-control" placeholder="Your Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
            <span class="input-group-append">
            <button class="btn btn-secondary" type="submit">Subscribe</button>
            </span> </div>
        </div>
        <div class="col-md-4 d-flex align-items-md-end flex-column">
          <p>Keep in touch</p>
          <ul class="social-icons">
            <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
            <li class="social-icons-linkedin"><a data-toggle="tooltip" href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
            <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
            <li class="social-icons-instagram"><a data-toggle="tooltip" href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="footer-copyright">
        <ul class="nav justify-content-center">
          <li class="nav-item"> <a class="nav-link active" href="#">About Us</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Faq</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Support</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Terms of Use</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Privacy Policy</a> </li>
        </ul>
        <p class="copyright-text">Copyright © 2020 <a href="#">Quickai</a>. All Rights Reserved.</p>
      </div>
    </div>
  </footer><!-- Footer end -->
  
</div><!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<!-- Login Modal
=========================== -->
<div id="login-modal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0">
      <div class="modal-body py-4 px-0">
        <button type="button" class="close close-outside" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <!-- Login Form
        ====================== -->
        <div class="row">
          <div class="col-11 col-md-10 mx-auto">
            <ul class="nav nav-tabs nav-justified mb-4" role="tablist">
              <li class="nav-item"> <a class="nav-link text-5 line-height-3 active">Login</a> </li>
              <li class="nav-item"> <a class="nav-link text-5 line-height-3" href="" data-toggle="modal" data-target="#signup-modal" data-dismiss="modal">Sign Up</a> </li>
            </ul>
            <p class="text-4 font-weight-300 text-muted text-center mb-4">We are glad to see you again!</p>
            <form id="loginForm" method="post">
              <div class="form-group">
                <input type="email" class="form-control" id="emailAddress" required placeholder="Mobile or Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
              </div>
              <div class="row my-4">
                <div class="col">
                  <div class="form-check text-2 custom-control custom-checkbox">
                    <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                  </div>
                </div>
                <div class="col text-2 text-right"><a class="btn-link" href="" data-toggle="modal" data-target="#forgot-password-modal" data-dismiss="modal">Forgot Password ?</a></div>
              </div>
              <button class="btn btn-primary btn-block my-4" type="submit">Login</button>
            </form>
            <div class="d-flex align-items-center my-3">
              <hr class="flex-grow-1">
              <span class="mx-2 text-2 text-muted">Or Login with Social Profile</span>
              <hr class="flex-grow-1">
            </div>
            <div class="d-flex  flex-column align-items-center mb-3">
              <ul class="social-icons social-icons-colored social-icons-circle">
                <li class="social-icons-facebook"><a href="#" data-toggle="tooltip" data-original-title="Log In with Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-twitter"><a href="#" data-toggle="tooltip" data-original-title="Log In with Twitter"><i class="fab fa-twitter"></i></a></li>
                <li class="social-icons-google"><a href="#" data-toggle="tooltip" data-original-title="Log In with Google"><i class="fab fa-google"></i></a></li>
                <li class="social-icons-linkedin"><a href="#" data-toggle="tooltip" data-original-title="Log In with Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <p class="text-2 text-center mb-0">New to Quickai? <a class="btn-link" href="" data-toggle="modal" data-target="#signup-modal" data-dismiss="modal">Sign Up</a></p>
          </div>
        </div>
        <!-- Login Form End --> 
      </div>
    </div>
  </div>
</div>
<!-- Login Modal End -->

<!-- Sign Up Modal
=========================== -->
<div id="signup-modal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0">
      <div class="modal-body py-4 px-0">
        <button type="button" class="close close-outside" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <!-- Sign Up Form
        ====================== -->
        <div class="row">
          <div class="col-11 col-md-10 mx-auto">
            <ul class="nav nav-tabs nav-justified mb-4" role="tablist">
              <li class="nav-item"> <a class="nav-link text-5 line-height-3" href="" data-toggle="modal" data-target="#login-modal" data-dismiss="modal">Log In</a> </li>
              <li class="nav-item"> <a class="nav-link text-5 line-height-3 active">Sign Up</a> </li>
            </ul>
            <p class="text-4 font-weight-300 text-muted text-center mb-4">Looks like you're new here!</p>
            <form id="signupForm" method="post">
              <div class="form-group">
                <input type="text" class="form-control border-2" id="fullName" required placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control border-2" id="emailAddress" required placeholder="Email Id">
              </div>
              <div class="form-group">
                <input type="password" class="form-control border-2" id="loginPassword" required placeholder="Password">
              </div>
              <div class="form-group my-4">
                <div class="form-check text-2 custom-control custom-checkbox">
                  <input id="agree" name="agree" class="custom-control-input" type="checkbox">
                  <label class="custom-control-label" for="agree">I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.</label>
                </div>
              </div>
              <button class="btn btn-primary btn-block my-4" type="submit">Sign Up</button>
            </form>
            <div class="d-flex align-items-center my-3">
              <hr class="flex-grow-1">
              <span class="mx-2 text-2 text-muted">Or Sign Up with Social Profile</span>
              <hr class="flex-grow-1">
            </div>
            <div class="d-flex  flex-column align-items-center mb-3">
              <ul class="social-icons social-icons-colored social-icons-circle">
                <li class="social-icons-facebook"><a href="#" data-toggle="tooltip" data-original-title="Sign Up with Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-twitter"><a href="#" data-toggle="tooltip" data-original-title="Sign Up with Twitter"><i class="fab fa-twitter"></i></a></li>
                <li class="social-icons-google"><a href="#" data-toggle="tooltip" data-original-title="Sign Up with Google"><i class="fab fa-google"></i></a></li>
                <li class="social-icons-linkedin"><a href="#" data-toggle="tooltip" data-original-title="Sign Up with Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <p class="text-2 text-center mb-0">Already have an account? <a class="btn-link" href="" data-toggle="modal" data-target="#login-modal" data-dismiss="modal">Log In</a></p>
          </div>
        </div>
        <!-- Sign Up Form End --> 
      </div>
    </div>
  </div>
</div>
<!-- Sign Up Modal End -->

<!-- Forgot Password Modal
============================== -->
<div id="forgot-password-modal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0">
      <div class="modal-body py-4 px-0">
        <button type="button" class="close close-outside" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <!-- Forgot Password Form
        =========================== -->
        <div class="row">
          <div class="col-11 col-md-10 mx-auto">
            <h3 class="text-center mt-3 mb-4">Forgot your password?</h3>
            <p class="text-center text-3 text-muted">Enter your Email or Mobile and we’ll help you reset your password.</p>
            <form id="forgotForm" class="form-border" method="post">
              <div class="form-group">
                <input type="text" class="form-control border-2" id="emailAddress" required placeholder="Enter Email or Mobile Number">
              </div>
              <button class="btn btn-primary btn-block my-4" type="submit">Continue</button>
            </form>
            <p class="text-center mb-0"><a class="btn-link" href="" data-toggle="modal" data-target="#login-modal" data-dismiss="modal">Return to Log In</a> <span class="text-muted mx-3">|</span> <a class="btn-link" href="" data-toggle="modal" data-target="#otp-modal" data-dismiss="modal">Request OTP</a></p>
          </div>
        </div>
        <!-- Forgot Password Form End --> 
      </div>
    </div>
  </div>
</div>
<!-- Forgot Password Modal End -->

<!-- OTP Modal
============================== -->
<div id="otp-modal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0">
      <div class="modal-body py-4 px-0">
        <button type="button" class="close close-outside" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <!-- OTP Form
        =========================== -->
        <div class="row">
          <div class="col-11 col-md-10 mx-auto">
            <h3 class="text-center mt-3 mb-4">Two-Step Verification</h3>
            <p class="text-center"><img class="img-fluid" src="images/otp-icon.png" alt="verification"></p>
            <p class="text-muted text-3 text-center">Please enter the OTP (one time password) to verify your account. A Code has been sent to <span class="text-dark text-4">+1*******179</span></p>
            <form id="otp-screen" class="form-border" method="post">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" class="form-control border-2 text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                </div>
                <div class="col form-group">
                  <input type="text" class="form-control border-2 text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                </div>
                <div class="col form-group">
                  <input type="text" class="form-control border-2 text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                </div>
                <div class="col form-group">
                  <input type="text" class="form-control border-2 text-center text-6 px-0 py-2" maxlength="1" required autocomplete="off">
                </div>
              </div>
              <button class="btn btn-primary btn-block shadow-none my-4" type="submit">Verify</button>
            </form>
            <p class="text-2 text-center">Not received your code? <a class="btn-link" href="#">Resend code</a></p>
            <p class="text-2 text-center mb-0"><a class="btn-link" href="#">Call me</a></p>
          </div>
        </div>
        <!-- OTP Form End --> 
      </div>
    </div>
  </div>
</div>
<!-- OTP Modal End -->

<!-- Script -->
<script src="{{asset('flight/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('flight/vendor/jquery-ui/jquery-ui.min.js')}}"></script> 
<script src="{{asset('flight/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('flight/vendor/owl.carousel/owl.carousel.min.js')}}"></script> 
<script src="{{asset('flight/vendor/bootstrap-spinner/bootstrap-spinner.js')}}"></script> 
<script src="{{asset('flight/vendor/daterangepicker/moment.min.js')}}"></script> 
<script src="{{asset('flight/vendor/daterangepicker/daterangepicker.js')}}"></script> 

<script src="{{asset('flight/js/theme.js')}}"></script> 

<script>
$(function() {
 'use strict';
  // Autocomplete
  $('#flightFrom,#flightTo').autocomplete({
	  minLength: 3,
	  delay: 100,
	  source: function (request, response) {
		$.getJSON(
		 'http://gd.geobytes.com/AutoCompleteCity?callback=?&q='+request.term,
		  function (data) {
			 response(data);
		}
	);
	},
  });
  // Depart Date
  $('#flightDepart').daterangepicker({
	singleDatePicker: true,
	autoApply: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#flightDepart').val(chosen_date.format('MM-DD-YYYY'));
  });
  
  // Return Date
  $('#flightReturn').daterangepicker({
	singleDatePicker: true,
	autoApply: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#flightReturn').val(chosen_date.format('MM-DD-YYYY'));
});});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  
  $(document).ready(function(){
    $('#bookonlineFlight').on('submit',function(e){
         event.preventDefault();
         // alert("Asdfasf");
         var formData=new FormData(this);
         console.log(formData);
         // message = $('#message').val();
         $.ajax({
            headers: {
          'X-CSRF-TOKEN': "{{ csrf_token() }}"
          },     
          url: "{{ url('/bookflight') }}",
          type:"POST",
          data: formData,
          cache:false,
          processData: false,
          contentType: false,
          success:function(response){
          console.log(response);
          // search = ;
           window.location.href = "{{ url('/searchflight') }}";
          
          // window.location.redirect="{{ url('/searchflight') }}";
          }, 
          error: function () 
          {
          console.log('error');
           window.location.href = "{{ url('/searchflight') }}";
          }
         });
        });
 


  });
</script>

<script>
  
  $(document).ready(function(){
    $('#flightFrom').change(function(event){
         event.preventDefault();
        data = $(this).val();
         $.ajax({
          url: "{{ url('fromadress') }}/" + data,
          type:"get",
          data:data,
          success:function(response){
          console.log(response);
 
          }, error: function () {
          console.log('error');
          }
         });
        });
 


  });
</script>


</body>
</html>



