<template>
  <SiteBg >
    <SiteComing/>
    <CounterCards/>
    <SubscribeUs/>

  </SiteBg>

</template>

<script>
import { defineComponent } from 'vue';

// Components
import SiteComing from '../components/comingsoon.vue';
import SiteBg from '../components/bg.vue';
import CounterCards from '../components/Counter.vue';
import SubscribeUs from '../components/subscribe.vue';

export default defineComponent({
  name: 'HomeView',
  components: {
    SiteComing,
    SiteBg,
    CounterCards,
    SubscribeUs,
  },
});
</script>
