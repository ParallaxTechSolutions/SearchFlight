@include('layouts.header')
  @section('content')
  <!-- Header end --> 
  @endsection

  <div id="content" class="mt-5">
    <section class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="bg-white shadow-md rounded p-3 p-sm-4 confirm-details">
              <h2 class="text-6 mb-3 mb-sm-4">Confirm Flight Details</h2>
			  <hr class="mx-n3 mx-sm-n4 mb-4">
              <!-- Departure Flight Detail
              ============================================= -->
              <div class="card">
                <div class="card-header">
                  <div class="row align-items-center trip-title">
                    <div class="col-5 col-sm-auto text-center text-sm-left">
                      <h5 class="m-0 trip-place">New Delhi</h5>
                    </div>
                    <div class="col-2 col-sm-auto text-8 text-black-50 text-center trip-arrow">➝</div>
                    <div class="col-5 col-sm-auto text-center text-sm-left">
                      <h5 class="m-0 trip-place">Sydney</h5>
                    </div>
                    <div class="col-12 mt-1 d-block d-md-none"></div>
                    <div class="col-6 col-sm col-md-auto text-3 date">15 Jun 18, Sat</div>
                    <div class="col-6 col-sm col-md-auto text-right order-sm-1"><a class="text-1" data-toggle="modal" data-target="#fare-rules" href="">Fare Rules</a></div>
                    <div class="col col-md-auto text-center ml-auto order-sm-0"><span class="badge badge-danger py-1 px-2 font-weight-normal text-1">Non Refundable</span></div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-sm-3 text-center text-md-left d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="images/brands/flights/indigo.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-2 text-dark mt-1 mt-lg-0">IndiGo</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                    <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">01:50</span> <small class="text-muted d-block">Indira Gandhi Intl, New Delhi</small> </div>
                    <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-3 text-dark">26h 18m</span> <small class="text-muted d-block">Duration</small> </div>
                    <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">19:38</span> <small class="text-muted d-block">Kingsford Smith Airport, Sydney</small> </div>
                  </div>
                  <!-- Fare Rules (Modal Dialog)
                  ============================================= -->
                  <div id="fare-rules" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Fare Rules</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <ul class="nav nav-tabs" id="departureTab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">Baggage Details</a> </li>
                            <li class="nav-item"> <a class="nav-link" id="fourth-tab" data-toggle="tab" href="#fourth" role="tab" aria-controls="fourth" aria-selected="false">Cancellation Fee</a> </li>
                          </ul>
                          <div class="tab-content my-3" id="departureContent">
                            <div class="tab-pane fade show active" id="third" role="tabpanel" aria-labelledby="third-tab">
                              <div class="table-responsive-md">
                                <table class="table table-hover table-bordered">
                                  <thead>
                                    <tr>
                                      <th>&nbsp;</th>
                                      <td class="text-center">Cabin</td>
                                      <td class="text-center">Check-In</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Adult</td>
                                      <td class="text-center">7 Kg</td>
                                      <td class="text-center">15 Kg</td>
                                    </tr>
                                    <tr>
                                      <td>Child</td>
                                      <td class="text-center">7 Kg</td>
                                      <td class="text-center">15 Kg</td>
                                    </tr>
                                    <tr>
                                      <td>Infant</td>
                                      <td class="text-center">0 Kg</td>
                                      <td class="text-center">0 Kg</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                              <table class="table table-hover table-bordered">
                                <thead>
                                  <tr>
                                    <th>&nbsp;</th>
                                    <td class="text-center">Per Passenger Fee</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>24 hrs - 365 days</td>
                                    <td class="text-center">$250 + $50</td>
                                  </tr>
                                  <tr>
                                    <td>2-24 hours</td>
                                    <td class="text-center">$350 + $50</td>
                                  </tr>
                                  <tr>
                                    <td>0-2 hours</td>
                                    <td class="text-center">$550 + $50</td>
                                  </tr>
                                </tbody>
                              </table>
                              <p class="font-weight-bold">Terms & Conditions</p>
                              <ul>
                                <li>The penalty is subject to 4 hrs before departure. No Changes are allowed after that.</li>
                                <li>The charges are per passenger per sector.</li>
                                <li>Partial cancellation is not allowed on tickets booked under special discounted fares.</li>
                                <li>In case of no-show or ticket not cancelled within the stipulated time, only statutory taxes are refundable subject to Service Fee.</li>
                                <li>No Baggage Allowance for Infants</li>
                                <li>Airline penalty needs to be reconfirmed prior to any amendments or cancellation.</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- Fare Rules end -->
                  
                </div>
              </div><!-- Departure Flight Detail end -->
              
              <!-- Return Flight Detail
              ============================================= -->
              <div class="card mt-4">
                <div class="card-header">
                  <div class="row align-items-center trip-title">
                    <div class="col-5 col-sm-auto text-center text-sm-left">
                      <h5 class="m-0 trip-place">Sydney</h5>
                    </div>
                    <div class="col-2 col-sm-auto text-8 text-black-50 text-center trip-arrow">➝</div>
                    <div class="col-5 col-sm-auto text-center text-sm-left">
                      <h5 class="m-0 trip-place">New Delhi</h5>
                    </div>
                    <div class="col-12 mt-1 d-block d-md-none"></div>
                    <div class="col-6 col-sm col-md-auto text-3 date">24 Jun 18, Sun</div>
                    <div class="col-6 col-sm col-md-auto text-right order-sm-1"><a class="text-1" data-toggle="modal" data-target="#fare-rules-2"  href="">Fare Rules</a></div>
                    <div class="col col-md-auto text-center ml-auto order-sm-0"><span class="badge badge-success py-1 px-2 font-weight-normal text-1">Refundable</span></div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-sm-3 text-center text-md-left d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="images/brands/flights/indigo.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-2 text-dark mt-1 mt-lg-0">IndiGo</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                    <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">12:00</span> <small class="text-muted d-block">Kingsford Smith Airport, Sydney</small> </div>
                    <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-3 text-dark">26h 55m</span> <small class="text-muted d-block">Duration</small> </div>
                    <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">23:50</span> <small class="text-muted d-block">Indira Gandhi Intl, New Delhi</small> </div>
                  </div>
                  <!-- Fare Rules (Modal Dialog)
                  ============================================= -->
                  <div id="fare-rules-2" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Fare Rules</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <ul class="nav nav-tabs" id="returnTab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="false">Baggage Details</a> </li>
                            <li class="nav-item"> <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Cancellation Fee</a> </li>
                          </ul>
                          <div class="tab-content my-3" id="returnContent">
                            <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                              <div class="table-responsive-md">
                                <table class="table table-hover table-bordered">
                                  <thead>
                                    <tr>
                                      <th>&nbsp;</th>
                                      <td class="text-center">Cabin</td>
                                      <td class="text-center">Check-In</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Adult</td>
                                      <td class="text-center">7 Kg</td>
                                      <td class="text-center">15 Kg</td>
                                    </tr>
                                    <tr>
                                      <td>Child</td>
                                      <td class="text-center">7 Kg</td>
                                      <td class="text-center">15 Kg</td>
                                    </tr>
                                    <tr>
                                      <td>Infant</td>
                                      <td class="text-center">0 Kg</td>
                                      <td class="text-center">0 Kg</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                              <table class="table table-hover table-bordered">
                                <thead>
                                  <tr>
                                    <th>&nbsp;</th>
                                    <td class="text-center">Per Passenger Fee</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>24 hrs - 365 days</td>
                                    <td class="text-center">$250 + $50</td>
                                  </tr>
                                  <tr>
                                    <td>2-24 hours</td>
                                    <td class="text-center">$350 + $50</td>
                                  </tr>
                                  <tr>
                                    <td>0-2 hours</td>
                                    <td class="text-center">$550 + $50</td>
                                  </tr>
                                </tbody>
                              </table>
                              <p class="font-weight-bold">Terms & Conditions</p>
                              <ul>
                                <li>The penalty is subject to 4 hrs before departure. No Changes are allowed after that.</li>
                                <li>The charges are per passenger per sector.</li>
                                <li>Partial cancellation is not allowed on tickets booked under special discounted fares.</li>
                                <li>In case of no-show or ticket not cancelled within the stipulated time, only statutory taxes are refundable subject to Service Fee.</li>
                                <li>No Baggage Allowance for Infants</li>
                                <li>Airline penalty needs to be reconfirmed prior to any amendments or cancellation.</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- Fare Rules end -->
                </div>
              </div><!-- Departure Flight Detail end -->
              
              <div class="alert alert-info mt-4"> <span class="badge badge-info">NOTE:</span> This is a special fare given by the airline. Airlines cancellation charges do apply. </div>
              <h2 class="text-6 mb-3 mt-5">Traveller Details - <span class="text-3"><a data-toggle="modal" data-target="#login-signup" href="#" title="Login / Sign up">Login</a> to book faster</span></h2>
              <p class="font-weight-600">Contact Details</p>
              <div class="form-row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" required placeholder="Enter Email" type="text">
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" data-bv-field="number" id="mobileNumber" required placeholder="Enter Mobile Number" type="text">
                </div>
              </div>
              <p class="text-info">Your booking details will be sent to this email address and mobile number.</p>
              <p class="font-weight-600">Adult 1</p>
              <div class="form-row">
                <div class="col-sm-2 form-group">
                  <select class="custom-select" id="title" required="">
                    <option value="">Title</option>
                    <option>Mr</option>
                    <option>Ms</option>
                    <option>Mrs</option>
                  </select>
                </div>
                <div class="col-sm-5 form-group">
                  <input class="form-control" id="firstName" required placeholder="Enter First Name" type="text">
                </div>
                <div class="col-sm-5 form-group">
                  <input class="form-control" data-bv-field="number" id="lastName" required placeholder="Enter Last Name" type="text">
                </div>
              </div>
            </div>
          </div>
          
          <!-- Side Panel (Fare Details)
          ============================================= -->
          <aside class="col-lg-4 mt-4 mt-lg-0">
            <div class="bg-white shadow-md rounded p-3">
              <h3 class="text-5 mb-3">Fare Details</h3>
			  <hr class="mx-n3">
              <ul class="list-unstyled">
                <li class="mb-2">Base Fare <span class="float-right text-4 font-weight-500 text-dark">$980</span><br>
                  <small class="text-muted">Adult : 1, Child : 0, Infant : 0</small></li>
                <li class="mb-2">Taxes & Fees <span class="float-right text-4 font-weight-500 text-dark">$215</span></li>
                <li class="mb-2">Insurance <span class="float-right text-4 font-weight-500 text-dark">$95</span></li>
              </ul>
              <div class="text-dark bg-light-4 text-4 font-weight-600 p-3"> Total Amount <span class="float-right text-6">$1290</span> </div>
              <h3 class="text-4 mb-3 mt-4">Promo Code</h3>
              <div class="input-group form-group">
                <input class="form-control" placeholder="Promo Code" aria-label="Promo Code" type="text">
                <span class="input-group-append">
                <button class="btn btn-secondary" type="submit">APPLY</button>
                </span> </div>
              <ul class="promo-code pre-scrollable">
                <li><span class="d-block text-3 font-weight-600">FLTOFFER</span>Up to $500 Off on your booking. Hurry! Limited period offer. <a class="text-1" href="">Terms & Conditions</a></li>
                <li><span class="d-block text-3 font-weight-600">HOTOFFER</span>Up to $500 Off on your booking. Hurry! Limited period offer. <a class="text-1" href="">Terms & Conditions</a></li>
                <li><span class="d-block text-3 font-weight-600">SUMMEROFFER</span>Up to $500 Off on your booking. Hurry! Limited period offer. <a class="text-1" href="">Terms & Conditions</a></li>
                <li><span class="d-block text-3 font-weight-600">BIGOFFER</span>Up to $500 Off on your booking. Hurry! Limited period offer. <a class="text-1" href="">Terms & Conditions</a></li>
                <li><span class="d-block text-3 font-weight-600">FLTOFFER</span>Up to $500 Off on your booking. Hurry! Limited period offer. <a class="text-1" href="">Terms & Conditions</a></li>
                <li><span class="d-block text-3 font-weight-600">FLTOFFER</span>Up to $500 Off on your booking. Hurry! Limited period offer. <a class="text-1" href="">Terms & Conditions</a></li>
              </ul>
              <button class="btn btn-primary btn-block" onclick="location.href='payment.html';" type="submit">Proceed To Payment</button>
            </div>
          </aside><!-- Side Panel End -->
          
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
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="images/payment/visa.png" alt="visa" title="Visa"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="images/payment/discover.png" alt="discover" title="Discover"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="images/payment/paypal.png" alt="paypal" title="PayPal"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="images/payment/american.png" alt="american express" title="American Express"></a></li>
            <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="images/payment/mastercard.png" alt="discover" title="Discover"></a></li>
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script> 

</body>
</html>