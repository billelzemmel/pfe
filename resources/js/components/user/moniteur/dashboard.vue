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
};
</script>

