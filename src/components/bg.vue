<template>
    <div class="bg__image d-flex flex-row align-center justify-center ">
        <div>
        <slot></slot>
        </div>
    </div>
    
</template>

<script>
export default {
    name: "SiteBg",
}
</script>

<style scoped>
.bg__image {
  background: url('../assets/bg2.jpg');
  background-size: cover;
  height: 100vh;

}
</style>