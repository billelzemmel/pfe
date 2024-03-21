<template>
    <div class="app " :class="(mode==='dark') ? 'dark':''">
      <meta charset="utf-8" />
      <link rel="icon" href="/favicon.ico" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="theme-color" content="#000000" />
      <title>Landing Page</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400%2C500%2C600%2C700"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A100%2C400%2C500%2C600%2C700"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue%3A700"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C400%2C500%2C700"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
      
     
    <div class="landing-page-QXg">
      <div class="frame-1849-EFp">
        <div class="header-7D8">
          <div class="desktop-top-navbar-1-c9t">
            <div class="logo-gQe">
              <svg class="favicon-Ppr"  version="1.0" xmlns="http://www.w3.org/2000/svg" width="120.000000pt" height="120.000000pt" viewBox="0 0 120.000000 120.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,120.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M297 1152 c-15 -128 -121 -234 -249 -249 l-50 -6 5 -196 c3 -137 10 -214 21 -255 56 -204 223 -368 426 -421 82 -22 225 -22 304 0 257 69 437 303 438 570 2 275 -174 505 -445 582 -34 10 -121 17 -248 20 l-196 5 -6 -50z m331 -252 c97 0 223 -98 257 -199 23 -70 17 -179 -13 -238 -28 -53 -80 -106 -135 -135 -35 -19 -58 -23 -137 -23 -79 0 -102 4 -137 23 -88 47 -149 132 -160 223 l-6 49 -141 1 c-108 1 -128 3 -86 9 140 19 253 74 350 170 97 98 165 242 172 366 1 22 4 -25 5 -103 l4 -143 27 0z"/></g></svg>
              <p class="brand-name-WuU">Auto ecole</p>
            </div>
            <div class="text-large-text-button--L1L">Home</div>
            <div class="text-large-text-button--ZPt">Futures</div>

            <div class="text-large-text-button--ZPt">About</div>
            <div class="text-large-text-button--dee">Contact</div>
            <div class="text-large-text-button--WyL">Blog</div>
            <i id="theme-toggle" class='bx bx-sun'  @click="toggleMode"></i>
    
            <router-link class="filled-medium-filled-button--Dcr" to="/login">Login</router-link>

            
          </div>
          <!--HOME SECTION-->
          <div class="auto-group-uasz-rQv">
            <div class="epilogue-inter-N8N">
              <p class="welcome-to-our-driving-school-USJ">
                <span class="welcome-to-our-driving-school-USJ-sub-0">
                Welcome To our 
                <br/>
                
                </span>
                <span class="welcome-to-our-driving-school-USJ-sub-1">Driving school</span>
              </p>
              <p class="embrace-lifes-vastness-venture-forth-and-discover-the-wonders-waiting-beyond-the-world-beckons-seize-its-grand-offerings-now-SpN">Embrace life&#39;s vastness, venture forth, and discover the wonders waiting beyond. The world beckons; seize its grand offerings now!</p>
            </div>
            <div class="filled-large-filled-button--J5t">Join Us</div>
            <div class="outlined-large-outlined-button-left-icon-XjL">
                <svg class="ph-car-CqU" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
              <p class="button-Xsk">Sign up</p>
            </div>
            <svg class="gg-check-o-3LJ" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z"></path></svg>
            <!-- <img class="gg-check-o-3LJ" src="./assets/check2.png"/> -->
            <svg class="gg-check-o-yDx" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z"></path></svg>
    
           <!--  <img class="gg-check-o-yDx" src="./assets/check2.png"/> -->
            <div class="frame-1-WUn">
              <p class="learn-driving-2T8">Learn driving</p>
              <p class="get-in-touch-with-the-best-instructors-wa6">Get in touch with  the best instructors</p>
            </div>
            <div class="ellipse-1-ToL">
            </div>
            <img class="card-ABx" src="../../images/card.png"/>
            <div class="frame-1846-GVt">
            </div>
            <img class="frame-1845-QMC" src="../../images/frame-1845.png"/>
          </div>
        </div>
                  <!--FUTURES SECTIONS-->

        <div class="featurs-v4e">
          <div class="filled-tonal-small-filled-tonal-button--SYn">FUTURE FOR YOU</div>
          <p class="key-features-fwL">Key Features</p>
          <p class="duis-aute-irure-dolor-in-reprehenderit-in-voluptate-velit-esse-cillum-dolore-eu-fugiat-nulla-pariatu-B8z">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu</p>
          <div class="auto-group-7gra-ck6">
            <div class="features-center-K8i">
              <img class="icon-box-RhY" src="../../images/icon-box-7j4.png"/>
              <p class="h3-feature-title-NMt">Daily Check</p>
              <p class="paragraph-feature-description-tLE">
              The gradual accumulation of 
              <br/>
              information about atomic.
              </p>
            </div>
            <div class="features-center-eii">
              <img class="icon-box-Nuc" src="../../images/icon-box-trJ.png"/>
              <p class="h3-feature-title-886">Payment stats</p>
              <p class="paragraph-feature-description-qYJ">
              The gradual accumulation of 
              <br/>
              information about atomic.
              </p>
            </div>
            <div class="features-center-7Ev">
              <img class="icon-box-38a" src="../../images/icon-box.png"/>
              <p class="h3-feature-title-yY2">Exams tracking</p>
              <p class="paragraph-feature-description-hU2">
              The gradual accumulation of 
              <br/>
              information about atomic.
              </p>
            </div>
            <div class="features-center-NKG">
              <img class="icon-box-6WA" src="../../images/icon-box-CVL.png"/>
              <p class="h3-feature-title-S4E">Instructors Check</p>
              <p class="paragraph-feature-description-k4v">
              The gradual accumulation of 
              <br/>
              information about atomic.
              </p>
            </div>
          </div>
          <div class="frame-1846-EEz">
          </div>
        </div>
                  <!--ABOUT SECTION-->

        <div class="call-to-action-MaW">
          <div class="auto-group-mcbx-TtS">
            <div class="shape-pills-bUr">
              <div class="rectangle-1-vX8">
              </div>
              <div class="rectangle-2-FJW">
              </div>
              <div class="rectangle-3-AgN">
              </div>
            </div>
            <div class="mockup-iphone-75p">
              <div class="rectangle-21-dZx">
              </div>
              <div >
               
                <img class="mockup-iphone-75p" src="../../images/image2.png"/>
                <div class="rectangle-8-u9Q">
                </div>
                <div class="ellipse-5-pXG">
                </div>
              </div>
            </div>
          </div>
          <div class="auto-group-wanr-tn2">
            <p class="get-access-from-phone-anywhere-today-2tE">
            Get Access 
            <br/>
            From Phone 
            <br/>
            Anywhere Today 
            </p>
            <p class="sed-ut-perspiciatis-unde-omnis-iste-natus-error-sit-voluptatem-accusantium-doloremque-laudantium-to-Ltv">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, to</p>
            <div class="auto-group-iiea-oXc">
              <div class="store-app-store-JzA">
                <img class="vector-PEv" src="../../images/vector.png"/>
                <div class="text-button-uDG">
                  <p class="download-on-the-EFY">
                  Download on the
                  <br/>
                  
                  </p>
                  <p class="app-store-iwQ">
                  App Store
                  <br/>
                  
                  </p>
                </div>
              </div>
              <div class="store-google-play-C5t">
                <img class="icn-svg-icn-icn-lg-ia2" src="../../images/icn-svg-icn-icn-lg.png"/>
                <div class="text-button-2Kp">
                  <p class="download-on-the-acE">
                  Download on the
                  <br/>
                  
                  </p>
                  <p class="google-play-7cA">
                  Google Play
                  <br/>
                  
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
                  <!--CONTACT SECTION-->

        <div class="frame-1847-kv2">
          <div class="frame-1848-tWS">
            <div class="auto-group-hx1g-cxE">
                <img src="../../images/pic.png" class="shape-pills-LdL">
               
              <div class="elevated-small-elevated-button-3w4">Get in touch</div>
              <p class="subscribe-to-our-newsletter-get-company-news-574">
              Subscribe to our Newsletter
              <br/>
              &amp; Get Company News 
              </p>
            </div>
            <div class="email-list-8r2">
              <div class="background-dnn">
              </div>
              <img class="interface-externallink-kMc" src="../../images/interface-externallink.png"/>
              <p class="enter-email-address-1oL">Enter Email Address</p>
              <div class="filled-large-filled-button--u82">Subscribe</div>
            </div>
          </div>
        </div>
                  <!--BLOG SECTION-->

        <div class="footer-1-UKY">
          <div class="div-Qyt">
            <div class="container-9ga">
              <div class="row-K5G">
                <div class="col-md-3-FDp">
                  <p class="h3-mhx">Get In Touch</p>
                  <p class="paragraph-W9k">
                  the quick fox jumps over the 
                  <br/>
                  lazy dog
                  </p>
                  <div class="social-media-dkA">
                    <img class="facebook-a9c" src="../../images/facebook.png"/>
                    <img class="instagram-WZ4" src="../../images/instagram.png"/>
                    <img class="twitter-3ot" src="../../images/twitter.png"/>
                  </div>
                </div>
                <div class="col-md-3-ySe">
                  <p class="h3-7ok">Company info</p>
                  <div class="div-e2z">
                    <p class="link-axE">About Us</p>
                    <p class="link-Kev">Carrier</p>
                    <p class="link-ruk">We are hiring</p>
                    <p class="link-oKC">Blog</p>
                  </div>
                </div>
                <div class="col-md-3-wRQ">
                  <p class="h3-5nW">Features</p>
                  <div class="div-RLa">
                    <p class="link-mvE">Business Marketing</p>
                    <p class="link-vHL">User Analytic</p>
                    <p class="link-4eS">Live Chat</p>
                    <p class="link-DGS">Unlimited Support</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="div-vwY">
            <div class="container-feE">
              <div class="row-qHp">
                <div class="col-md-6-PaE">Made With Love By  ElyosDigital</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
    </template>
    
    
        <script>
        export default {
          data() {
            return {
              mode: ''
            };
          },
          methods: {
            toggleMode() {
              this.mode = (this.mode === 'dark') ? '' : 'dark';
            }
          }
        };
        </script>
        <style>
    html  {
    font-size: 62.5%;
  }
      
      
      </style>
        <style scoped  src="../../css/Home.css" id="home"></style>
    