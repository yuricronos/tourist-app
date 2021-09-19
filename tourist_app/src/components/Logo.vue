<template>
  <!-- row -->
  <div class="row logo-description mt-1 mb-1">
    <div class="col-md-12">
      <img
        class="pin-logo"
        alt="Vue logo"
        src="@/assets/pin-1976106_1280.png"
      />
      <p>
        This platform will give the tourist spot information from a certain
        place in japan.
      </p>
    </div>
  </div>
  <!-- .// row -->
</template>

<script>
export default {
  name: "Logo",
};
</script>

<style scoped lang="scss">
.logo-description {
  color: rgb(183, 183, 183);
  .pin-logo {
    min-width: 70px;
    max-width: 100px;
    width: 7vw;
  }
}
</style>