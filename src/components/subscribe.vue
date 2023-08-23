<template>
    <v-form class="pt-16">
        <v-row class="d-flex justify-center align-center">
            <v-col sm="8" md="16" class="d-flex flex-col justify-center ">
                <v-text-field label="SUBSCRIBE US!" placeholder="ENTER YOUR MAIL ADRESS  :)" variant="outlined" class=" bg-black-lighten3">
                </v-text-field>
            </v-col>

        </v-row>
        <v-col>
            <div class=" d-flex justify-center align-center my-n8" >
                <v-btn class="opacitybt" width="150px" href="http://www.atlantisvoyages.com.tn/" target="_blank">SEND</v-btn>
            </div>
        </v-col>
    </v-form>
</template>




<script>
export default {
    name: "SubscribeUs",

}
</script>

<style>
.opacitybt{
    background: rgba(255, 255, 255, 0.7);
}
</style>