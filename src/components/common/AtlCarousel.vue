<template>

  <div :id="cr_id" class="carousel slide" data-bs-ride="carousel" data-bs-touch="false" data-bs-interval="2">
  <div v-if="has_indicators" class="carousel-indicators">
    <button v-for="(image, index) in images" type="button" :data-bs-target="'#'+cr_id" :data-bs-slide-to="index" :class="{'active': index === 0}" :aria-label="'Slide' + index "></button>
  </div>
  <div class="carousel-inner">
    <div v-for="(image, index) in images" :class="{'carousel-item active': index ===0, 'carousel-item': index > 0}" data-bs-interval="5000">
      <img :src="image.src" class="d-block w-100" :alt="image.alt">
      
    </div>
    <div v-if="center_component !== null" class="carousel-caption content active">
      <component :is="center_component"></component>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" :data-bs-target="'#'+cr_id" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" :data-bs-target="'#'+cr_id" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</template>


<script>

export default {
  name:"AtlCarousel",
  props:{
            center_component: {Type:String, default: null},
            cr_id: {Type: String, required: true},
            images: {Type: Array, required: true},
            has_indicators: {Type:Boolean, default: true}
  },
 }

</script>



<style lang="scss">
.carousel .carousel-indicators button {
  width: 10px;
 height: 10px;
 border-radius: 100%;
 background-color: #fff;
}
.carousel .carousel-indicators .active button {
  width: 10px;
 height: 10px;
 border-radius: 100%;
 background-color: #EE3755;
}

.content{
  margin-bottom: 85px;
}
</style>