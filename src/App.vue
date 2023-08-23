<template>
  <v-app class="scroll-auto">
    <v-main>
      <router-view />
    </v-main>
  </v-app>
</template>

<script>

export default {
  name: 'App',

  data: () => ({
    //
  }),
}
</script>

<style>
html,
body,
.v-application,
#app {
  overflow: auto !important;
}
</style>
