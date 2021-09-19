<template>
  <div class="card card-city-info">
    <div class="card-body">
      <!-- {{ cityInfo }} -->
      <h4>{{ cityInfo.name + ", Japan" }}</h4>
      <p class="mb-0"> {{ cityInfo.weather[0].description }} </p>
      <p class="celsius text-center">{{ toCelsius }} <sup>o</sup>C</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "CardCityInfo",
  props: ["cityInfo"],
  computed: {
    toCelsius() {
      let kelvin = this.cityInfo.main.temp;
      return Math.round((kelvin - 273.15) * 100) / 100;
    },
  },
};
</script>

<style scoped lang="scss">
.card-city-info {
  min-width: 100px;
  max-width: 500px;
  min-height: 200px;
  left: 50%;
  transform: translateX(-50%);
  border-radius: 30px;
  background: rgb(230, 230, 230);

  h4 {
    color: rgb(82, 82, 82);
  }

  .celsius {
    color: black;
    font-size: 3em;
    font-weight: 900;
  }
}
</style>