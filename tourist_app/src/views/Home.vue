<template>
  <div class="home container">
    <MainApp></MainApp>
    <Loader></Loader>
  </div>
</template>

<script>
import MainApp from "@/components/MainApp.vue";
import Loader from "@/components/Loader.vue";

export default {
  name: "Home",
  components: {
    MainApp,
    Loader,
  },
};
</script>
