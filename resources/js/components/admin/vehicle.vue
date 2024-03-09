<template>
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->

</head>

  <body >

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <svg class="favicon-Ppr"  version="1.0" xmlns="http://www.w3.org/2000/svg" width="120.000000pt" height="120.000000pt" viewBox="0 0 120.000000 120.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,120.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M297 1152 c-15 -128 -121 -234 -249 -249 l-50 -6 5 -196 c3 -137 10 -214 21 -255 56 -204 223 -368 426 -421 82 -22 225 -22 304 0 257 69 437 303 438 570 2 275 -174 505 -445 582 -34 10 -121 17 -248 20 l-196 5 -6 -50z m331 -252 c97 0 223 -98 257 -199 23 -70 17 -179 -13 -238 -28 -53 -80 -106 -135 -135 -35 -19 -58 -23 -137 -23 -79 0 -102 4 -137 23 -88 47 -149 132 -160 223 l-6 49 -141 1 c-108 1 -128 3 -86 9 140 19 253 74 350 170 97 98 165 242 172 366 1 22 4 -25 5 -103 l4 -143 27 0z"/></g></svg>
        <span class="d-none d-lg-block">Auto Ecole</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn" @click="toggleSidebar"></i>
    </div><!-- End Logo -->

   

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../images/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../images/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../images/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../images/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">

        <router-link class="nav-link collapsed " to="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </router-link>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Students</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <router-link to="/dashboard/addstudent">
              <i class="bi bi-plus"></i><span>Add students</span>
            </router-link>
          </li>
          <li>
            <router-link to="/dashboard/students">
              <i class="bi bi-check"></i><span>Students List</span>
            </router-link>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-badge"></i><span>Instructors</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <router-link to="/dashboard/addinstructors" >
              <i class="bi bi-plus"  ></i><span>Add Instructors</span>
            </router-link>
          </li>
          <li>
            <router-link to="/dashboard/instructors" >
              <i class="bi bi-check"></i><span>Instructor List</span>
            </router-link>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class='bx bx-credit-card-front'></i><span>Exams</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-plus"></i><span>Add Exam</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-check"></i><span>All Exams</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link " data-bs-target="#vechule-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-car-front"></i><span>vehicle</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="vechule-nav" class="nav-content collapse show " data-bs-parent="#sidebar-nav">
          <li>
            <router-link to="/dashboard/addvehicle" >
              <i class="bx bx-plus" ></i><span>Add vehicle</span>
            </router-link>
          </li>
          <li>
            <router-link to="/dashboard/vehicle" class="active">
              <i class="bi bi-check"></i><span>vehicle List</span>
            </router-link>
          </li>
        </ul>
      </li>
      
      <li class="nav-item ">
        <a class="nav-link collapsed " href="index.html">
          <i class="bi bi-gear"></i>
          <span>Settings</span>
        </a>
      </li><!-- End Dashboard Nav -->
</ul>
  </aside><!-- End Sidebar-->
  <main id="main" class="main">

<div class="pagetitlev3">
  <h1>Vehicle List</h1>
  <button class="btnnn">
    <span class="iconnn">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
</svg>
    </span>
    <span class="textee">Add  Vehicle</span>
</button>
</div><!-- End Page Title -->



<br>
    <section class="section dashboard">
    <div class="wrapper">
	<div class="vehicle-card">
		<div class="details">      
      <div class="thumb-gallery">
        <img class="first" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/03/2018-Bugatti-Chiron-119.jpg?crop=1xw:1xh;center,center&resize=480:*" />
        <img class="second" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/03/2018-Bugatti-Chiron-117.jpg?crop=1xw:1xh;center,center&resize=480:*" />        
      </div>
			<div class="info">
    			<h3>Bugatti Chiron</h3>
				<div class="stars" data-stars="1">
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="2">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="3">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="4">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
				</div>
				<div class="price">
					<span>Price Starting at</span>
					<h4>$2,998,000</h4>
				</div>
				<div class="ctas">
					<a href="#" class="btn primary">Model Details</a>
					<a href="#" class="btn secondary">Cars for Sale</a>
			        <div style="clear:both;"></div>
		        </div>
				<div class="desc">
					<p>Leaving the 99.99 percent in its dust, the Chiron is a 1500-hp smackdown of every hypercar.</p>
				</div>
				<div class="specs">
					<div class="spec mpg">
						<span>EPA City/Hwy</span>
						<p>9/14<span>mpg</span></p>
					</div>
					<div class="spec mpg">
						<span>0-60</span>
						<p>2.3<span>sec</span></p>
					</div>
					<div class="spec mpg">
						<span>Horsepower</span>
						<p>1500<span>hp</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <div class="vehicle-card">
		<div class="details">      
      <div class="thumb-gallery">
        <img class="first" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/09/2018-Mercedes-AMG-GT-GTC-116.jpg?crop=1xw:1xh;center,center&resize=480:*" />
        <img class="second" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/09/2018-Mercedes-AMG-GT-GTC-114.jpg?crop=1xw:1xh;center,center&resize=480:*" />        
      </div>
			<div class="info">
    			<h3>Mercedes-AMG GT</h3>
				<div class="stars" data-stars="1">
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="2">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="3">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="4">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
				</div>
				<div class="price">
					<span>Price Starting at</span>
					<h4>$157,995</h4>
				</div>
				<div class="ctas">
					<a href="#" class="btn primary">Model Details</a>
					<a href="#" class="btn secondary">Cars for Sale</a>
			        <div style="clear:both;"></div>
		        </div>
				<div class="desc">
					<p>Sporting an adaptive adjustable suspension, active aerodynamics, and trick rear-axle steering.</p>
				</div>
				<div class="specs">
					<div class="spec mpg">
						<span>EPA City/Hwy</span>
						<p>16/22<span>mpg</span></p>
					</div>
					<div class="spec mpg">
						<span>0-60</span>
						<p>3.5<span>sec</span></p>
					</div>
					<div class="spec mpg">
						<span>Horsepower</span>
						<p>503<span>hp</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <div class="vehicle-card">
		<div class="details">      
      <div class="thumb-gallery">
        <img class="first" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2016/02/2016-Lamborghini-Huracan-LP610-4-Spyder-111.jpg?crop=1xw:1xh;center,center&resize=480:*" />
        <img class="second" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2016/02/2016-Lamborghini-Huracan-LP610-4-Spyder-101.jpg?crop=1xw:1xh;center,center&resize=480:*" />        
      </div>
			<div class="info">
    			<h3>Lamborghini Huracan</h3>
				<div class="stars" data-stars="1">
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="2">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="3">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="4">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
				</div>
				<div class="price">
					<span>Price Starting at</span>
					<h4>$203,295</h4>
				</div>
				<div class="ctas">
					<a href="#" class="btn primary">Model Details</a>
					<a href="#" class="btn secondary">Cars for Sale</a>
			        <div style="clear:both;"></div>
		        </div>
				<div class="desc">
					<p>Nothing on Earth can prepare you for the eyeball-melting performance.</p>
				</div>
				<div class="specs">
					<div class="spec mpg">
						<span>EPA City/Hwy</span>
						<p>14/20<span>mpg</span></p>
					</div>
					<div class="spec mpg">
						<span>0-60</span>
						<p>2.5<span>sec</span></p>
					</div>
					<div class="spec mpg">
						<span>Horsepower</span>
						<p>602<span>hp</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <div class="vehicle-card">
		<div class="details">      
      <div class="thumb-gallery">
        <img class="first" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/06/2018-Ferrari-812-Superfast-115.jpg?crop=1xw:1xh;center,center&resize=480:*" />
        <img class="second" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/06/2018-Ferrari-812-Superfast-101.jpg?crop=1xw:1xh;center,center&resize=480:*" />        
      </div>
			<div class="info">
    			<h3>Ferrari 812 Superfast</h3>
				<div class="stars" data-stars="1">
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="2">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="3">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="4">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
				</div>
				<div class="price">
					<span>Price Starting at</span>
					<h4>$315,000</h4>
				</div>
				<div class="ctas">
					<a href="#" class="btn primary">Model Details</a>
					<a href="#" class="btn secondary">Cars for Sale</a>
			        <div style="clear:both;"></div>
		        </div>
				<div class="desc">
					<p>With a claimed top speed of 211 mph, the name 812 Superfast is not mere hyperbole.</p>
				</div>
				<div class="specs">
					<div class="spec mpg">
						<span>EPA City/Hwy</span>
						<p>12/16<span>mpg</span></p>
					</div>
					<div class="spec mpg">
						<span>0-60</span>
						<p>2.8<span>sec</span></p>
					</div>
					<div class="spec mpg">
						<span>Horsepower</span>
						<p>789<span>hp</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <div class="vehicle-card">
		<div class="details">      
      <div class="thumb-gallery">
        <img class="first" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/05/2018-McLaren-720S-105.jpg?crop=1xw:1xh;center,center&resize=480:*" />
        <img class="second" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/05/2018-McLaren-720S-101.jpg?crop=1xw:1xh;center,center&resize=480:*" />        
      </div>
			<div class="info">
    			<h3>McLaren 720S</h3>
				<div class="stars" data-stars="1">
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="2">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="3">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="4">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
				</div>
				<div class="price">
					<span>Price Starting at</span>
					<h4>$288,845</h4>
				</div>
				<div class="ctas">
					<a href="#" class="btn primary">Model Details</a>
					<a href="#" class="btn secondary">Cars for Sale</a>
			        <div style="clear:both;"></div>
		        </div>
				<div class="desc">
					<p>McLaren’s know-how with lightweight, aerodynamic, ferocious supercars is undeniable.</p>
				</div>
				<div class="specs">
					<div class="spec mpg">
						<span>EPA City/Hwy</span>
						<p>XX/XX<span>mpg</span></p>
					</div>
					<div class="spec mpg">
						<span>0-60</span>
						<p>2.8<span>sec</span></p>
					</div>
					<div class="spec mpg">
						<span>Horsepower</span>
						<p>710<span>hp</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <div class="vehicle-card">
		<div class="details">      
      <div class="thumb-gallery">
        <img class="first" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/04/2018-Porsche-911-GT3-103.jpg?crop=1xw:1xh;center,center&resize=480:*" />
        <img class="second" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/05/2018-porsche-911-gt3-102.jpg?crop=1xw:1xh;center,center&resize=480:*" />        
      </div>
			<div class="info">
    			<h3>Porsche 911 GT3</h3>
				<div class="stars" data-stars="1">
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="2">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="3">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="4">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
					<svg height="22" width="20" class="star rating" data-rating="5">
						<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
					</svg>
				</div>
				<div class="price">
					<span>Price Starting at</span>
					<h4>$144,650</h4>
				</div>
				<div class="ctas">
					<a href="#" class="btn primary">Model Details</a>
					<a href="#" class="btn secondary">Cars for Sale</a>
			        <div style="clear:both;"></div>
		        </div>
				<div class="desc">
					<p>Flaunting a huge rear wing, giant air intakes, and fender-filling wheels and tires.</p>
				</div>
				<div class="specs">
					<div class="spec mpg">
						<span>EPA City/Hwy</span>
						<p>14/20<span>mpg</span></p>
					</div>
					<div class="spec mpg">
						<span>0-60</span>
						<p>3.4<span>sec</span></p>
					</div>
					<div class="spec mpg">
						<span>Horsepower</span>
						<p>500<span>hp</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
 </div>
</section>
</main>

</body>
</html>
</template>
<script>

export default {
  data() {
    return {
      isSidebarOpen: true,
    };
  },
  methods: {
    toggleSidebar() {
      this.isSidebarOpen = !this.isSidebarOpen;

      // If sidebar is open, add 'collapse' class; otherwise, remove it
      const sidebar = document.getElementById('sidebar');
      if (this.isSidebarOpen) {
        sidebar.classList.add('collapse');
      } else {
        sidebar.classList.remove('collapse');
      }
    },
  },
};


</script>
<style src="../../../css/adminDash/vehicle.css"></style>
