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
  },
  created() {
    this.checkConID();
  },
  methods: {
    checkConID() {
      const MonId = localStorage.getItem('MonID');
      if (!MonId) {
        this.$router.push('/home');
      }
    },
  },
};
</script>
