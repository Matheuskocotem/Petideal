<template>
    <div class="dashboard-container">
      <Nav />
      <div class="dashboard-content">
      </div>
    </div>
  </template>
  
  <script>
    import Nav from '../components/Navlink.vue'; 
  
  export default {
    name: "Dashboard",
    components: {
      Nav, 
    },
  };
  </script>
  
  <style scoped>
  .dashboard-container {
    display: flex;
    height:  100%;
    width: 80%;
    flex-direction: column;
    align-items: center;
  }
  
  .dashboard-content {
    padding: 20px;
    width: 100%;
    max-width: 1200px;
    margin-top: 20px;
  }
  </style>
  