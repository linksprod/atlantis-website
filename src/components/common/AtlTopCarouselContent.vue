<template>

<img :src="image.src" class="carousel-fixed-image" :alt="image.alt">
<div class="form-row justify-content-center">
<div class="form-group col-md-12">
          
<div class="input-group">
<div class="col-md-2"></div>
  <div class="input-group-prepend col-md-1">
<img style="width: 40px; height: 40px; border-radius: 100%; border: 3px solid #fff;" src="@/assets/img/images/flag-of-tunisia-2.svg" />
</div>

  <input
    type="search"
    class="col-md-6 rounded-pill border-1"
    placeholder="Search for flights, hotels & resorts, activities"
    aria-label="Search for flights, hotels & resorts, activities"
    aria-describedby="basic-addon1"
  />
 
</div>
</div>
</div>


</template>
<script>

export default{
    name:"AltTopCarouselContent",
    data(){
        return {
        image: {src:"/src/assets/img/images/travel_to_tunisia.svg", alt:"travel to tunisia"}
        }
    }
}
</script>

<style type="scss">
.carousel-fixed-image{
    width: 40vw;
    margin-bottom: 48px;
}
</style>