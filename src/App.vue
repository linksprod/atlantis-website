<template>
  <header>
  <TopNavBar />
</header>
<main>
<section>
 <AtlCarousel :images="images" has_indicators="true" cr_id="top" :center_component="AtlTopCarouselContent"></AtlCarousel>
</section>
</main>
</template>

<script setup>
import TopNavBar from "./components/common/TopNavBar.vue";
import AtlCarousel from "./components/common/AtlCarousel.vue";
import AtlTopCarouselContent from "./components/common/AtlTopCarouselContent.vue";

const images = [
  {src: "/src/assets/img/images/test-11.svg", alt:"test 11"},
  {src: "/src/assets/img/images/test-11.svg", alt:"test 11"},
  {src: "/src/assets/img/images/test-11.svg", alt:"test 11"},
]

</script>


<style lang="scss">

</style>