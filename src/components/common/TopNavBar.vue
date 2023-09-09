<template>
  <div class="container">
    <nav class="navbar navbar-expand-sm navbar-light">
      <div class="container" style="padding-left: 14%;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" style="padding-top: 18px;" href="#"><img src="@/assets/img/icons/top_logo.svg"></a>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-50 mb-lg-50 menu">
              <li v-for="(item) in menuItems" class="nav-item">
                <a class="atl-navbar-item" aria-current="page" href="#">{{item.title}}</a>
              </li>
              <!-- Reservation button-->
              <li class="nav-item res">
                <button class="res-navbar-item" aria-current="page">{{reservation.title}}</button>
              </li>
            </ul>		  
          </div>
      
  
    </nav>
  </div>
  </template>

<script>
export default {
  name: "NavBar",
  data(){
    return {
      menuItems: [
          { title: '튀니지에 관한 정보', path: '/information_about_tunisia'},
          { title: '관광 정보', path: '/tourist_information'},
          { title: '여행하다', path: '/travel'},
          { title:'블로그', path: '/blog'}
     ],
     reservation: {title:"예약", path:'/reservation'}
    }
  },
};

</script>
<style lang="scss">

#navbarSupportedContent{
  padding-right: 15%;
}
.atl-navbar-item {
    font-size: $font-size-m;
    text-align: center;
    font-weight: 400;
    font-family: $font-family-aclonica;
    color: $black;
    font-feature-settings: 'clig' off, 'liga';
    display: block ruby;
    padding-right: 28.31px;
    padding-top: 20px;
    text-decoration: none;
    background: none;
    border: 0;
    line-height: 18px;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
.res-navbar-item{
    display: block ruby;
    width: 77px;
    height: 39px;
    align-items: center;
    gap: 8px;
    flex-shrink: 0;
    
    border: 1px solid $black;
    border-radius: 12px;
    background: $master-primary;

    color: #000;
    font-feature-settings: 'clig' off, 'liga' off;
/* Text single/100/Bold */
    font-family: $font-family-dm_sans;
    font-size: $font-size-s;
    font-style: normal;
    font-weight: 700;
    line-height: 18px;
}

.res{
    padding-top: 9px;
}

</style>