<template>
    <div class="admin-view">
      <SideNavigation />
      <main class="main-content">
        <header class="header">
          <h1 class="title">Adicionar Produtos</h1>
          <div class="action-buttons">
            <button class="btn btn-secondary">Add Category</button>
            <button class="btn btn-primary">Add New Item</button>
          </div>
        </header>
        <CategoryFilter />
        <ProductGrid />
      </main>
    </div>
  </template>
  
  <script>
  import SideNavigation from '../components/SideNavigation.vue';
  import CategoryFilter from '../components/CategoryFilter.vue';
  import ProductGrid from '../components/ProductGrid.vue'; 
  
  export default {
    name: 'Admin',
    components: {
      SideNavigation,
      CategoryFilter,
      ProductGrid,
    },
  };
  </script>
  
  <style scoped>
  .admin-view {
    display: flex;
    width: 100%;
    height: 100vh;
    background-color: #fff;
    overflow: hidden;
  }
  
  .main-content {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    padding: 35px 44px;
  }
  
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
  }
  
  .title {
    color: #000;
    font-size: 40px;
    font-weight: 600;
    font-family: Montserrat, sans-serif;
  }
  
  .action-buttons {
    display: flex;
    gap: 12px;
  }
  
  .btn {
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(20, 17, 17, 0.71);
    padding: 14px 50px;
    font-size: 16px;
    font-weight: 600;
    font-family: Montserrat, sans-serif;
    border: 1px solid #cbcbcb;
    cursor: pointer;
  }
  
  .btn-secondary {
    background-color: #fff;
    color: #000;
  }
  
  .btn-primary {
    background-color: #ffae35;
    color: #fff;
  }
  
  @media (max-width: 991px) {
    .main-content {
      padding: 20px;
    }
  
    .btn {
      padding: 14px 20px;
    }
  }
  </style>
  