<template>
  <div id="LoaderVue" class="Loader">
    <img class="loading" src="@/assets/loading.gif" />
  </div>
</template>

<script>
export default {
  name: "Loader",
};
</script>


<style scoped lang="scss">
.Loader {
  display: none;
  background: rgba(255, 255, 255, 0.729);
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100vw;
  height: 100vh;
  z-index: 4;
  .loading {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100px;
  }
}
.show {
  display: block !important;
}
</style>