<template>
    <GMapMap
        :center = "center"
        :options = "options"
        :zoom = 6.7
        style = "width: 80vw; height: 40rem">
    <GMapCluster :zoomOnClick="true">
      <GMapMarker
        :key="index"
        v-for="(m, index) in markers"
        :position="m.position"
        :clickable="true"
        :draggable="true"
        :icon= '{
          url: "https://image.flaticon.com/teams/slug/google.jpg",
          scaledSize: {width: 77, height: 77},
          labelOrigin: {x: 16, y: -10}
        }'
        @click="center = m.position"
      />
    </GMapCluster>
    </GMapMap>
</template>
<script>
    export default {
        data() {
            return {
            center: {lat: 34.47203157696662, lng: 9.2871860800931 },
            options:{
                mapId: "cf3a5783010f1770",
                lang: "kr"
            },
            markers:[
                {
                    position:{
                        lat:36.79712245183939, lng:10.17024116138042
                    },
                    position:{
                        lat:34.734405, lng:10.761342
                    }
                }
            ]
        }
        }
    }
</script>