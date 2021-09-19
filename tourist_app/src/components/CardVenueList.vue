<template>
  <div class="card card-venue-information">
    <div class="card-body">
      <table class="table table-bordered">
        <tr v-for="venue in cityVenues" v-bind:key="venue.id">
          <td class="pb-1">
            <span class="venue-category"> {{ venue.categories[0].name }}</span>
            <br />
            <span class="venue-name">
              <a
                v-bind:href="`https://www.google.com/search?q=${venue.name}`"
                target="_blank"
                >{{ venue.name }}</a
              >
            </span>
            <br />
            <span class="address">
              Address: <i>{{ venue.location.formattedAddress.join() }}</i>
            </span>
          </td>
        </tr>
      </table>
      <!-- {{ City.Venues }} -->
    </div>
  </div>
</template>

<script>
export default {
  name: "CardVenueList",
  props: ["cityVenues"]
};
</script>

<style scoped lang="scss">
.card-venue-information {
  overflow: auto;
  height: 52vh;

  .text-right {
    text-align: right;
  }
  .text-left {
    text-align: left;
  }

  .venue-category {
    font-size: 0.8em;
    text-decoration: underline;
  }

  .venue-name {
    font-weight: 900;
  }

  .address {
    font-size: 0.8em;
  }
}
</style>