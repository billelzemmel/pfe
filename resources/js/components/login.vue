<template>
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

      <div class="app1" :class="(mode==='dark') ? 'dark':''">
        
        <div class="header-7D8">

        <div class="desktop-top-navbar-1-c9t">
            <div class="logo-gQe">
              <svg class="favicon-Ppr"  version="1.0" xmlns="http://www.w3.org/2000/svg" width="120.000000pt" height="120.000000pt" viewBox="0 0 120.000000 120.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,120.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M297 1152 c-15 -128 -121 -234 -249 -249 l-50 -6 5 -196 c3 -137 10 -214 21 -255 56 -204 223 -368 426 -421 82 -22 225 -22 304 0 257 69 437 303 438 570 2 275 -174 505 -445 582 -34 10 -121 17 -248 20 l-196 5 -6 -50z m331 -252 c97 0 223 -98 257 -199 23 -70 17 -179 -13 -238 -28 -53 -80 -106 -135 -135 -35 -19 -58 -23 -137 -23 -79 0 -102 4 -137 23 -88 47 -149 132 -160 223 l-6 49 -141 1 c-108 1 -128 3 -86 9 140 19 253 74 350 170 97 98 165 242 172 366 1 22 4 -25 5 -103 l4 -143 27 0z"/></g></svg>
              <p class="brand-name-WuU">Auto ecole</p>
            </div>
            <div class="text-large-text-button--L1L">Home</div>
            <div class="text-large-text-button--ZPt">About</div>
            <div class="text-large-text-button--dee">Contact</div>
            <div class="text-large-text-button--WyL">Blog</div>
            <i id="theme-toggle" class='bx bx-sun'  @click="toggleMode"></i>
    
        
            <div class="filled-medium-filled-button--Dcr">Sign up</div>
            
          </div>
          
  <div class="session">
    <div class="left">

      <svg class="favicon-Ppr"  version="1.0" xmlns="http://www.w3.org/2000/svg" width="120.000000pt" height="120.000000pt" viewBox="0 0 120.000000 120.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,120.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M297 1152 c-15 -128 -121 -234 -249 -249 l-50 -6 5 -196 c3 -137 10 -214 21 -255 56 -204 223 -368 426 -421 82 -22 225 -22 304 0 257 69 437 303 438 570 2 275 -174 505 -445 582 -34 10 -121 17 -248 20 l-196 5 -6 -50z m331 -252 c97 0 223 -98 257 -199 23 -70 17 -179 -13 -238 -28 -53 -80 -106 -135 -135 -35 -19 -58 -23 -137 -23 -79 0 -102 4 -137 23 -88 47 -149 132 -160 223 l-6 49 -141 1 c-108 1 -128 3 -86 9 140 19 253 74 350 170 97 98 165 242 172 366 1 22 4 -25 5 -103 l4 -143 27 0z"/></g></svg>

      
    </div>
    
    <form method="post"> 
      
      <h4>We are <span>Auto ecole</span></h4>
      <p>Welcome back! Log in to your account to view today's clients:</p>
      <div class="floating-label">

        <input placeholder="Email" type="email" v-model="email" name="email" id="email" autocomplete="off">
        <label for="email">Email:</label>
          <div class="icons"> 
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
        </div>
      </div>
      <div class="floating-label">
        <input placeholder="Password" type="password" v-model="password" name="password" id="password" autocomplete="off">
        <label for="password">Password:</label>
          <div class="icons"> 

          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
        </div>
        
      </div>
      <button type="submit" @click.prevent.stop="login">Log in</button>
    </form>
  </div>
</div>
</div>

</template>
<script>
import axios from 'axios';

export default {
  data() {
  return {
    mode: '',
    email: '',
    password: '',
  };
},
  methods: {
    toggleMode() {
      this.mode = (this.mode === 'dark') ? '' : 'dark';
    },
   
    async login() {
  try {
    const response = await axios.post('/api/administrateurs/login', {
    email: this.email,
    password: this.password,
});
  
console.log(response , 'response')


  console.log(response.data);
    const token = response.data.token;

    localStorage.setItem('token', token);
    localStorage.setItem('AdminId',response.data.admin.id);
    this.$router.push({ path: '/dashboard/home' });
  } catch (error) {
    try {
    const response = await axios.post('/api/users/login', {
    email: this.email,
    password: this.password,
});
  
console.log(response , 'response')


  console.log(response.data);
    const token = response.data.token;

    localStorage.setItem('token', token);
    if (response.data.role=="candidat") {
      localStorage.setItem('ConID',response.data.typeid);
    this.$router.push({ path: '/client/exams' });
    }
    else{
      localStorage.setItem('MonID',response.data.typeid);
    this.$router.push({ path: '/moniteur/home' });
    }
    
  } catch (error) {
    alert("error password or email");
    console.error('Login failed', error);
  }
  }
}

  
  }
  
};
</script>

<style scoped>
@import url('/public/css/login.scss');
</style>
<style>
html  {
font-size: 62.5%;
}
  
  
  </style>