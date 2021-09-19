<template>
  <div id="app">
    <router-view />
  </div>
</template>

<script>

export default {
  name: "Home"
};
</script>

<style lang="scss">
#app {
  @import "@/scss/general.scss";

  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #6f757a;
  min-height: 100vh;
  background-color: rgba(0, 0, 0, 0.88);
  background: url('assets/japan-3776118_1280.jpg') center no-repeat;
  background-size: auto 100vh;
  background-position: 0px 0px;
  background-attachment: fixed;
  font-size: 1.2em;

  #nav {
    padding: 30px;

    a {
      font-weight: bold;
      color: #2c3e50;

      &.router-link-exact-active {
        color: #42b983;
      }
    }
  }
}

#app:before {
  content: '';
  position: fixed;
  left:0px;
  top: 0px;
  width: 100vw;
  min-height: 100vh;
  background: rgba(2, 0, 21, 0.88);
}

</style>
