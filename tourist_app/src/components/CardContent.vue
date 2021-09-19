<template>
  <!-- card -->
  <div class="card main-card">
    <div class="card-body">
      <div class="row search-header">
        <div class="col-lg-3 col-md-3 col-sm-0"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="input-group">
            <input
              type="text"
              class="form-control"
              placeholder="Please search city in japan"
              v-model="Input.City"
              v-on:keyup.enter="searchPlace()"
              v-on:click="clearInput()"
            />
            <button class="btn btn-default" v-on:click="searchPlace()">
              <i class="fas fa-search-location"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- weather information -->
      <div v-if="Object.keys(City.Weather).length != 0" class="row mt-1 mb-1">
        <div class="col-md-12 text-center">
          <CardCityInfo v-bind:cityInfo="City.Weather"></CardCityInfo>
        </div>
      </div>

      <hr />

      <div v-if="City.Venues.length > 0">
        <CardVenueList v-bind:cityVenues="City.Venues"></CardVenueList>
      </div>
    </div>
  </div>
  <!-- .// card -->
</template>

<script>
import request from "@/js/request.js";

import CardCityInfo from "@/components/CardCityInfo.vue";
import CardVenueList from "@/components/CardVenueList.vue";

export default {
  name: "CardContent",
  components: {
    CardCityInfo,
    CardVenueList,
  },
  data() {
    return {
      City: {
        Weather: {},
        Venues: [],
      },
      Input: {
        City: "",
      },
    };
  },
  methods: {
    searchPlace() {
      let params = {
        do: "place_info",
        _token: this.token,
        y: this.Input.City,
        z: "jp",
      };

      this.City.Weather = {};
      this.City.Venues = [];

      request.get(params, (response) => {
        this.City.Venues = response.response.venues;
        console.log("Venues", this.City.Venues);
      });

      params.do = "weather";
      request.get(params, (response) => {
        this.City.Weather = response;
        console.log("Weather", this.City.Weather);
      });
    },
    clearInput() {
      this.Input.City = "";
    },
  },
};
</script>

<style scoped lang="scss">
.main-card {
  background: rgba(255, 255, 255, 0.626);
  // border-color: rgb(48, 48, 48);
  // border: none;
  border-radius: 30px 30px 0px 0px;
  height: auto;

  .search-header {
    .btn-default {
      height: 38px;
      background: rgb(218, 217, 217);
      i {
        font-size: 1.5em;
      }
    }
    .btn-default:hover {
      background: rgb(234, 234, 234);
    }
  }
}
</style>