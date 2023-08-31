<template>
    <!-- <div class="d-flex justify-space-around">
        <p>{{ years }}</p>
        <p>{{ days % 365 }}</p>
        <p>{{ hours % 24 }}</p>
        <p>{{ minutes % 60 }}</p>
        <p>{{ seconds % 60 }}</p>
    </div> -->


    <div class="container">
        <!-- ---------------- -->
        <v-col>
        <v-card class="opacitybg mx-auto" width="150px" weight="120px" href="http://www.atlantisvoyages.com.tn/" target="_blank">
            <v-card-text>
                <p class="text-h3 text--primary text-center font-weight-regular">
                    {{ days % 365  }}
                </p>
            </v-card-text>
            <v-card-actions>
                <v-btn block text color="deep-purple accent-4">
                    DAYS
                </v-btn>
            </v-card-actions>
        </v-card>
    </v-col>
        <!-- ---------------- -->
        <v-col>
        <v-card class="opacitybg mx-auto" width="150px" weight="120px" href="http://www.atlantisvoyages.com.tn/" target="_blank">
            <v-card-text>
                <p class="text-h3 text--primary text-center font-weight-regular">
                    {{ hours % 24 }}
                </p>
            </v-card-text>
            <v-card-actions>
                <v-btn block text color="deep-purple accent-4">
                    HOURS
                </v-btn>
            </v-card-actions>

        </v-card>
    </v-col>
        <!-- ---------------- -->
        <v-col>
        <v-card class="opacitybg mx-auto" width="150px" weight="120px" href="http://www.atlantisvoyages.com.tn/" target="_blank">
            <v-card-text>
                <p class="text-h3 text--primary text-center font-weight-regular">
                    {{ minutes % 60 }}
                </p>
            </v-card-text>
            <v-card-actions>
                <v-btn block text color="deep-purple accent-4">
                    MINUTES
                </v-btn>
            </v-card-actions>
        </v-card>
    </v-col>
        <!-- ---------------- -->
    <v-col>
        <v-card class="opacitybg mx-auto" width="150px" weight="120px" href="http://www.atlantisvoyages.com.tn/" target="_blank">
            <v-card-text>
                <p class="text-h3 text--primary text-center font-weight-regular">
                    {{ seconds % 60 }}
                </p>
            </v-card-text>
            <v-card-actions>
                <v-btn block text color="deep-purple accent-4">
                    SECONDS
                </v-btn>
            </v-card-actions>
        </v-card>
        </v-col>

    </div>
</template>


<script>
import { ref } from '@vue/reactivity';

export default {
    name: "CounterCards",
    setup() {
        const days = ref(0);
        const hours = ref(0);
        const minutes = ref(0);
        const seconds = ref(0);
        const lunchDate = new Date('15 September 2023');


        setInterval(() => {
            const currentDate = new Date();
            const lunchTime = lunchDate - currentDate;

            seconds.value = parseInt(lunchTime / 1000);
            minutes.value = parseInt(seconds.value / 60);
            hours.value = parseInt(minutes.value / 60);
            days.value = parseInt(hours.value / 24);

        }, 1000);

        return { days, hours, minutes, seconds }
    },

};
</script>



<style>
.opacitybg{
    background: rgba(255, 255, 255, 0.7);
}
.container {
  padding: 40px 80px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}


</style>