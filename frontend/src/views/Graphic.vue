<template>
    <div class="slide-16-9-5">
      <SideMenu />
      <div class="div-8">
        <AnalyticsCards />
        <div class="div-12">
          <div class="div-13">
            <div class="div-14">
              <ExpiringList />
              <SalesOrder />
            </div>
          </div>
        </div>
        <div class="div-22">
          <div class="div-23">
            <AnnualProgress />
            <TodayChart />
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import SideMenu from '../components/SideNavigation.vue';
  import AnalyticsCards from '../components/AnalyticsCards.vue';
  import ExpiringList from '../components/ExpiringList.vue';
  import SalesOrder from '../components/SalesOrder.vue';
  import AnnualProgress from '../components/AnnualProgress.vue';
  import TodayChart from '../components/TodayChart.vue';
  
  export default {
    name: 'Dashboard',
    components: {
      SideMenu,
      AnalyticsCards,
      ExpiringList,
      SalesOrder,
      AnnualProgress,
      TodayChart
    }
  };
  </script>
  
  <style scoped>
  .slide-16-9-5 {
    background-color: rgba(255, 255, 255, 1);
    display: flex;
    gap: 40px 50px;
    overflow: hidden;
    flex-wrap: wrap;
    padding: 35px 42px 12px;
  }
  @media (max-width: 991px) {
    .slide-16-9-5 {
      padding: 0 20px;
    }
  }
  .div-8 {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    flex-basis: 0;
    width: fit-content;
  }
  @media (max-width: 991px) {
    .div-8 {
      max-width: 100%;
    }
  }
  .div-12 {
    display: flex;
    margin-top: 13px;
    width: 100%;
    padding-left: 6px;
    flex-direction: column;
  }
  @media (max-width: 991px) {
    .div-12 {
      max-width: 100%;
    }
  }
  .div-13 {
  }
  @media (max-width: 991px) {
    .div-13 {
      max-width: 100%;
    }
  }
  .div-14 {
    gap: 20px;
    display: flex;
  }
  @media (max-width: 991px) {
    .div-14 {
      flex-direction: column;
      align-items: stretch;
      gap: 0px;
    }
  }
  .div-22 {
    margin-top: 12px;
    width: 100%;
    max-width: 1181px;
  }
  @media (max-width: 991px) {
    .div-22 {
      max-width: 100%;
    }
  }
  .div-23 {
    gap: 20px;
    display: flex;
  }
  @media (max-width: 991px) {
    .div-23 {
      flex-direction: column;
      align-items: stretch;
      gap: 0px;
    }
  }
  </style>