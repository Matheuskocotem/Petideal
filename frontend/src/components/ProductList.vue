<template>
    <section class="product-list">
      <div class="product-list-header">
        <p class="results-count">Showing 12-12 of 14 results</p>
        <div class="sort-dropdown">
          <span class="sort-label">Sort by latest</span>
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/17ce40b4511ebf36c6d84f68c3803edc3b42d1f5a90f667b174a2108e81e32c0?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Dropdown arrow" class="dropdown-arrow" />
        </div>
      </div>
  
      <div class="product-grid">
        <article v-for="(product, index) in products" :key="index" class="product-card">
          <img :src="product.image" :alt="product.name" class="product-image" />
          <div class="product-details">
            <h3 class="product-name">{{ product.name }}</h3>
            <p class="product-price">${{ product.price.toFixed(2) }}</p>
            <button class="add-to-cart" aria-label="Add to cart">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/78df9a51326351a1457c6376f21690c09d9225ecb428b737907e62c78b41bacb?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="" class="cart-icon" />
            </button>
          </div>
        </article>
      </div>
  
      <nav class="pagination" aria-label="Product page navigation">
        <button class="page-button active">1</button>
        <button class="page-button">2</button>
        <button class="next-button">
          Next
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/646f373294ed98e77f74715bfc0b9adb72634fe87a280e006b1e5a7cf076808d?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="" class="next-icon" />
        </button>
      </nav>
    </section>
  </template>
  
  <script>
  export default {
    data() {
      return {
        products: [
          { name: 'Pet Carrier', price: 29.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/199e607493effb317294c22ea4f029a03d173c08448e890db071eae7364c9cfc?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Cat Bowl', price: 20.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/c051d4e95c3ab0403d1666d5720e35f928b74fb172cc7cdd268e01b801669978?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Cat Bowl', price: 19.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/764d265da419b0b36d0c638d7dc3dbee931581451fe7e58253fdf5220098b777?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Premium Cat Food', price: 20.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/0c8b2376a133e47ace7298a13a0789070192cda8b837453bc67e8610c292ba01?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Dog Bowl', price: 4.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/3e806885d555d3c2d6306d28f4b4fb3ae384ffc9df4f625f68fbdac5517f8014?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Cat Bed', price: 49.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/1333dadc9bfd02d1587097b7fc7f3b6d981f2c264cc109ee3bd9765e9cddf601?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Dog Leash', price: 9.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/83b30b694e307d0ae8e9706aa77824f154080e0430b323185cf6176ff0f1f6cf?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Dog Bed', price: 49.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/2284d677a3b89d8ea1f6d7725841f67a4ffca8da7cc1bc9b06d613e5ef2efb4b?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Premium Dog Food', price: 20.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/f459863d64a95d08e4353de6310bbdc5c40a707844342ae3273c370c615c7757?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Premium Dog Food', price: 29.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/f5a2b39f43edaf050cdb966a9e8e15fe62f333773693b5aacdb9f161a500ea76?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Dog Bowl', price: 19.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/056f23b03f440517283dce8c1e2f00bdd7ea20c03d7d60bd476d492ea9ebc8c7?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
          { name: 'Premium Dog Food', price: 24.99, image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/1ee4ca29f7af12783eb28e9e7bb0c5d46c46342d1f3c6a04c5ba6d98a4d0894e?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  .product-list {
    flex-grow: 1;
    font-family: Poppins, sans-serif;
  }
  
  .product-list-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 60px;
  }
  
  .results-count {
    font-size: 20px;
    font-weight: 500;
    color: #6c757d;
  }
  
  .sort-dropdown {
    display: flex;
    align-items: center;
    border: 1.5px solid #6c757d;
    border-radius: 6px;
    padding: 8px 12px;
    cursor: pointer;
  }
  
  .sort-label {
    font-size: 20px;
    font-weight: 500;
    color: #6c757d;
    margin-right: 10px;
  }
  
  .dropdown-arrow {
    width: 24px;
    height: 24px;
  }
  
  .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    gap: 24px;
    margin-bottom: 60px;
  }
  
  .product-card {
    border: 1px solid #f8f9fa;
    border-radius: 20px;
    overflow: hidden;
  }
  
  .product-image {
    width: 100%;
    height: auto;
    object-fit: cover;
  }
  
  .product-details {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
  }
  
  .product-name {
    font-size: 20px;
    font-weight: 600;
    color: #000;
    margin: 0;
  }
  
  .product-price {
    font-size: 16px;
    font-weight: 400;
    color: #000;
    margin: 0;
  }
  
  .add-to-cart {
    background-color: #f8f9fa;
    border: none;
    border-radius: 50%;
    width: 28px;
    height: 28px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }
  
  .cart-icon {
    width: 20px;
    height: 20px;
  }
  
  .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 24px;
  }
  
  .page-button {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    border: 2px solid #6c757d;
    background-color: transparent;
    color: #6c757d;
    font-size: 20px;
    font-weight: 600;
    cursor: pointer;
  }
  
  .page-button.active {
    background-color: #fd7e14;
    border-color: #fd7e14;
    color: #fff;
  }
  
  .next-button {
    display: flex;
    align-items: center;
    gap: 8px;
    border: 2px solid #6c757d;
    border-radius: 8px;
    background-color: transparent;
    color: #6c757d;
    font-size: 20px;
    font-weight: 500;
    padding: 8px 16px;
    cursor: pointer;
  }
  
  .next-icon {
    width: 24px;
    height: 24px;
  }
  
  @media (max-width: 991px) {
    .product-list-header {
      flex-direction: column;
      align-items: flex-start;
      gap: 20px;
    }
  
    .product-grid {
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }
  }
  </style>