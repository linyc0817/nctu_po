<template>
    <div class="container">
      <div class="campus-map-wrapper">
        <div id="campus-map"></div>
      </div>
      <div class="info-bar">
        Hello?
      </div>
    </div>
</template>
<script>
  import L from 'leaflet'
  import BaseImage from './base.png'
  export default {
    data() {
      return {
        foo: 'hey punchclock',
        campusMap: {},
        baseImage: {},
        bounds: [[0,0], [940,1008]],
      }
    },
    mounted() {
      this.campusMap = L.map('campus-map', {
        crs: L.CRS.Simple,
      })
      this.baseImage = L.imageOverlay(BaseImage, this.bounds).addTo(this.campusMap)
      this.campusMap.fitBounds(this.bounds)
    }
  }
</script>

<style lang="scss" scoped>
@import '../../node_modules/leaflet/dist/leaflet.css';
#campus-map {
  height: 100%;
}
.leaflet-container {
  background-color:rgba(255,0,0,0.0);
}
.container {
  background-color: rgba(0, 0, 0, 0.7);
  width: 100%;
  height: 100%;
  display: flex;
}
.campus-map-wrapper {
  flex: 1 1 40%;
  margin: 40px;
}
.info-bar {
  flex: 0 0 50%;
  margin-top: 40px;
}
</style>
