<template>
  <div id="app">
    <Navbar />

    <router-view />
  </div>
</template>

<script>
import Navbar from './navigation/navbar.vue';

export default {
  name: 'App',
  components: {
    Navbar,
  }
  ,
  created() {
    this.checkConID();
  },
  methods: {
    checkConID() {
      const AdminId = localStorage.getItem('AdminId');
      if (!AdminId) {
        this.$router.push('/home');
      }
    },
  },
};

</script>

