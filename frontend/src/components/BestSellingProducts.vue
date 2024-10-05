<template>
    <section class="best-selling-products">
      <h2 class="best-selling-products-2">Best selling products</h2>
      <div class="cards-3">
        <div v-for="(product, index) in bestSellingProducts" :key="index" class="card-5">
          <img :src="product.image" :alt="product.name" class="product-image" />
          <div class="text-icon-5">
            <div class="text-14">
              <div class="product-name">{{ product.name }}</div>
              <div class="product-price">${{ product.price.toFixed(2) }}</div>
            </div>
            <div class="icon-bg-9">
              <img loading="lazy" src="http://b.io/ext_84-" class="img-34" alt="Add to cart icon" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    data() {
      return {
        bestSellingProducts: [
          { name: 'Cat Bowl', price: 20.99, image: 'http://b.io/ext_85-' },
          { name: 'Cat Bowl', price: 49.99, image: 'http://b.io/ext_86-' },
          { name: 'Dog Leash', price: 9.99, image: 'http://b.io/ext_87-' },
          { name: 'Premium Cat Food', price: 19.99, image: 'http://b.io/ext_88-' },
          { name: 'Dog Bowl', price: 19.99, image: 'http://b.io/ext_89-' },
          { name: 'Premium Dog Food', price: 29.99, image: 'http://b.io/ext_90-' },
          { name: 'Dog Bed', price: 49.99, image: 'http://b.io/ext_91-' },
          { name: 'Premium Dog Food', price: 19.99, image: 'http://b.io/ext_92-' },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
.best-selling-products {
  display: flex;
  width: 100%;
  flex-direction: column;
  overflow: hidden;
  justify-content: start;
  padding: 60px 72px;
}
  @media (max-width: 991px) {
    .best-selling-products {
      max-width: 100%;
      padding: 0 20px;
    }
  }
  
  .best-selling-products-2 {
    color: rgba(0, 0, 0, 1);
    align-self: center;
    font: 600 40px/0.5 Inter, sans-serif;
  }
  
  .card-5 {
  border-radius: 20px;
  border: 1px solid var(--Gray-100, #f8f9fa);
  display: flex;
  flex-direction: column;
  overflow: hidden;
  justify-content: start;
  flex-grow: 1;
  flex-basis: calc(25% - 16px);
  max-width: calc(25% - 16px); 
  padding: 20px; 
}

.cards-3 {
  display: flex; 
  margin-top: 60px;
  width: 100%;
  align-items: start;
  gap: 16px; 
  justify-content: start; 
  flex-wrap: wrap; 
}
  .product-image {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 306px;
    max-width: 100%;
  }
  .text-icon-5 {
    display: flex;
    width: 100%;
    max-width: 306px;
    align-items: start;
    gap: 40px 100px;
    justify-content: space-between;
    padding: 20px;
  }
  .text-14 {
    display: flex;
    flex-direction: column;
    font-family: Poppins, sans-serif;
    color: rgba(0, 0, 0, 1);
    justify-content: start;
  }
  .product-name {
    font-size: 20px;
    font-weight: 600;
    line-height: 1;
  }
  .product-price {
    font-size: 16px;
    font-weight: 400;
    line-height: 1;
    margin-top: 12px;
  }
  .icon-bg-9 {
    justify-content: space-between;
    align-items: center;
    border-radius: 50px;
    background: var(--Gray-100, #f8f9fa);
    background-color: var(--Gray-100, #f8f9fa);
    display: flex;
    min-height: 28px;
    overflow: hidden;
    width: 28px;
    height: 28px;
    padding: 4px;
  }
  .img-34 {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 20px;
    align-self: stretch;
    margin: auto 0;
  }
  </style>