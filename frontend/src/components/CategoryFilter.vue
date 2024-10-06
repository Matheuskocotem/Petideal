<template>
    <section class="category-filter">
      <button class="filter-btn active">All</button>
    </section>
  </template>
  
  <script>
  export default {
    name: 'CategoryFilter',
  };
  </script>
  
  <style scoped>
  .category-filter {
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0);
    box-shadow: 0 2px 4px rgba(20, 17, 17, 0.71);
    display: flex;
    margin-top: 25px;
    border: 1px solid rgba(0, 0, 0, 0.15);
  }
  
  .filter-btn {
    border-radius: 5px;
    background-color: #ffae35;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    font-family: Montserrat, sans-serif;
    padding: 12px 21px;
    border: none;
    cursor: pointer;
  }
  
  @media (max-width: 991px) {
    .category-filter {
      max-width: 100%;
    }
  
    .filter-btn {
      padding: 12px 20px;
    }
  }
  </style>