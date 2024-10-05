<template>
    <aside class="product-filters">
      <section class="filter-section">
        <h2 class="filter-title">Filter by categories</h2>
        <ul class="filter-list">
          <li v-for="(category, index) in categories" :key="index" class="filter-item">
            <label class="filter-label">
              <input type="checkbox" class="filter-checkbox" />
              <span class="category-name">{{ category.name }}</span>
            </label>
            <span class="category-count">{{ category.count }}</span>
          </li>
        </ul>
      </section>
  
      <section class="filter-section">
        <h2 class="filter-title">Filter by Price</h2>
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7d56aa458d4ea2f5119e2d27ac462a2fe9a7d6a0616ad14c30b4b8e1ae78cd72?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Price range slider" class="price-slider" />
        <div class="price-range">
          <span class="price-text">Price: $9 - $399</span>
          <button class="apply-button">Apply</button>
        </div>
      </section>
  
      <section class="filter-section">
        <h2 class="filter-title">Filter by brands</h2>
        <ul class="filter-list">
          <li v-for="(brand, index) in brands" :key="index" class="filter-item">
            <label class="filter-label">
              <input type="checkbox" class="filter-checkbox" />
              <span class="brand-name">{{ brand.name }}</span>
            </label>
            <span class="brand-count">{{ brand.count }}</span>
          </li>
        </ul>
      </section>
  
      <section class="filter-section">
        <h2 class="filter-title">Filter by tags</h2>
        <div class="tag-container">
          <button v-for="(tag, index) in tags" :key="index" class="tag-button">{{ tag }}</button>
        </div>
      </section>
  
      <section class="filter-section">
        <h2 class="filter-title">Popular products</h2>
        <ul class="popular-products-list">
          <li v-for="(product, index) in popularProducts" :key="index" class="popular-product">
            <img :src="product.image" :alt="product.name" class="product-image" />
            <div class="product-info">
              <h3 class="product-name">{{ product.name }}</h3>
              <span class="product-price">${{ product.price }}</span>
            </div>
          </li>
        </ul>
      </section>
    </aside>
  </template>
  
  <script>
  export default {
    data() {
      return {
        categories: [
          { name: 'Furniture', count: 21 },
          { name: 'Bowls', count: 28 },
          { name: 'Clothing', count: 12 },
          { name: 'Food', count: 80 },
          { name: 'Toys', count: 90 },
          { name: 'Sale', count: 24 },
        ],
        brands: [
          { name: 'Natural food', count: 28 },
          { name: 'Pet care', count: 18 },
          { name: 'Dogs friend', count: 16 },
          { name: 'Pet food', count: 40 },
          { name: 'Favorite pet', count: 28 },
          { name: 'Green line', count: 18 },
        ],
        tags: ['Dog food', 'Cat food', 'Natural', 'Parrot', 'Small dog', 'Cat'],
        popularProducts: [
          { name: 'Premium Dog Food', price: 99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/5cb6a6577e1b30346cbd9662243314f4384cb0aeb6c1976c5f38424cac3afb43?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Premium Cat Food', price: 220, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/3a3f9dc8c535dbe8340ba3798d155f8b5264dfbc216f40472153d85d10e025ce?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Cat Bed', price: 50, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/fdc619519b2da745a49e5945ce23c5cc7f8f37f077bf1ca9c53e2e40973e952b?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Dog Leash', price: 220, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/7e01575f1267ffc0cb3c1fe331331113af3943cb7c52032dffc2bd46d88b02b3?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Cat Bowl', price: 220, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/cab23302d5c3c9b83afc9b49babfc4fc2aa7fefbc0f92679dae70c4ad8a6e38a?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  .product-filters {
    width: 245px;
    font-family: Poppins, sans-serif;
    padding-left: 40px; 
    padding-right: 40px; 
  }
  
  .filter-section {
    margin-bottom: 28px;
  }
  
  .filter-title {
    font-size: 20px;
    font-weight: 600;
    color: #000;
    margin-bottom: 16px;
  }
  
  .filter-list {
    list-style: none;
    padding: 0;
  }
  
  .filter-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
  }
  
  .filter-label {
    display: flex;
    align-items: center;
    cursor: pointer;
  }
  
  .filter-checkbox {
    margin-right: 8px;
    width: 16px;
    height: 16px;
  }
  
  .category-name,
  .brand-name {
    font-size: 16px;
    font-weight: 500;
    color: #000;
  }
  
  .category-count,
  .brand-count {
    font-size: 14px;
    color: #fd7e14;
    background-color: #f8f9fa;
    padding: 5px 8px;
    border-radius: 12px;
  }
  
  .price-slider {
    width: 100%;
    margin-bottom: 20px;
  }
  
  .price-range {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .price-text {
    font-size: 16px;
    font-weight: 500;
    color: #000;
  }
  
  .apply-button {
    background-color: #000;
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 7px 17px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
  }
  
  .tag-container {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
  }
  
  .tag-button {
    background-color: #f8f9fa;
    border: 2px solid #f8f9fa;
    border-radius: 12px;
    padding: 15px 12px;
    font-size: 16px;
    font-weight: 600;
    color: #000;
    cursor: pointer;
  }
  
  .popular-products-list {
    list-style: none;
    padding: 0;
  }
  
  .popular-product {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
  }
  
  .product-image {
    width: 86px;
    height: 56px;
    object-fit: cover;
    margin-right: 12px;
  }
  
  .product-info {
    flex-grow: 1;
  }
  
  .product-name {
    font-size: 16px;
    font-weight: 500;
    color: #000;
    margin: 0 0 5px;
  }
  
  .product-price {
    font-size: 14px;
    font-weight: 600;
    color: #000;
  }
  
  @media (max-width: 991px) {
    .product-filters {
      width: 100%;
    }
  }
  </style>