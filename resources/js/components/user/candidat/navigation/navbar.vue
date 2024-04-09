<template>
  
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

     
        <button data-mdb-ripple-init type="button" class="btn btn-primary me-3" @click="logout">
         LOG OUT
        </button>
       
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item ">
        <router-link class="nav-link " to="/client/exams"  :class="{ 'collapsed': $route.path !== '/client/exams'  }">
          <i class="bi bi-grid"></i>
          <span>Exams</span>
        </router-link>
      </li><!-- End Dashboard Nav -->

     
    
      <li class="nav-item ">
        <router-link class="nav-link " to="/client/callender"  :class="{ 'collapsed': $route.path !== '/client/callender'  }">
          <i class='bx bx-credit-card-front'></i>
          <span>Calendar</span>
        </router-link>
      </li><!-- End Dashboard Nav -->
         
   

      <li class="nav-item">
        <router-link to="/client/settings" class="nav-link " :class="{ 'collapsed': $route.path !== '/clinet/settings'  }">
          <i class="bi bi-gear"></i>
          <span>Settings</span>
        </router-link>
      </li><!-- End Dashboard Nav -->
</ul>
  </aside><!-- End Sidebar-->

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
    
    logout() {
      localStorage.clear();
      this.$router.push('/home');
    },
  },
};
</script>
<style scoped src="../css/style.css"></style>