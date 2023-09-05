<template>
  
  <v-app>
    <v-navigation-drawer v-model="sidebar" app>
      <v-list>
        <v-list-tile
          v-for="item in menuItems"
          :key="item.title">
          <v-list-tile-action>
          </v-list-tile-action>
          <v-list-tile-content>{{ item.title }}</v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>

    <v-toolbar app>
      <span class="hidden-sm-and-up">
        <v-toolbar-side-icon @click="sidebar = !sidebar">
        </v-toolbar-side-icon>
      </span>
      <v-toolbar-title>
        <img :src="sidebar_logo" class="main_logo"/>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-xs-only">
        <v-btn
          flat
          v-for="item in menuItems"
          :key="item.title"
          :to="item.path">
          {{ item.title }}
        </v-btn>
        <v-btn class="master-primary-button" to="/reservation">예약</v-btn>
      </v-toolbar-items>
    </v-toolbar>
    
    <v-content>
    </v-content>
    
  </v-app>

</template>

<script>
//import HelloWorld from "./components/HelloWorld";

export default {
  name: "App",
  data(){
    return {
      appTitle: 'Awesome App',
      sidebar: false,
      sidebar_logo: './assets/img/main_logo.png', 
      menuItems: [
          { title: '튀니지에 관한 정보', path: '/information_about_tunisia'},
          { title: '관광 정보', path: '/tourist_information'},
          { title: '여행하다', path: '/travel'},
          { title:'블로그', path: '/blog'}
     ]
    }
  },
};
</script>
<style>
.main_logo {
  width: 47px;
  height: 50px;
  flex-shrink: 0;
}

.master-primary-button{
  display: flex;
width: 77px;
height: 39px;
padding: 18px 24px;
justify-content: flex-end;
align-items: center;
gap: 8px;
flex-shrink: 0;
border-radius: 12px;
border: 1px solid #000;
background: #3BAEFF;
}

</style>