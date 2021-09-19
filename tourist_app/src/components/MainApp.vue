<template>
  <div class="main-app">
    <!-- row -->
    <div class="row">
      <div class="col-md-12 text-center">
        <Logo></Logo>

        <CardContent></CardContent>
      </div>
    </div>
    <!-- .// row -->
  </div>
</template>

<script>

import Logo from "@/components/Logo.vue";
import CardContent from "@/components/CardContent.vue";

export default {
  name: "MainApp",
  components: { Logo, CardContent }
};
</script>

<style scoped lang="scss">
.main-app {
  position: relative;
}
</style>
