<template>
    <section class="featured-products">
      <h2 class="featured-products-2">Produtos em destaque</h2>
      <div class="cards-2">
        <div v-for="(product, index) in featuredProducts" :key="index" class="card-2">
          <img :src="product.image" :alt="product.name" class="product-image" />
          <div class="text-icon-2">
            <div class="text-9">
              <div class="product-name">{{ product.name }}</div>
              <div class="product-price">${{ product.price.toFixed(2) }}</div>
            </div>
            <div class="icon-bg-6">
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
        featuredProducts: [
          { name: '', price: 19.99, image: '../Img/feature_product-1.webp' },
          { name: '', price: 19.99, image: '../Img/feature_product-2.webp' },
          { name: '', price: 19.99, image: '../Img/feature_product-3.webp' },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  .featured-products {
    display: flex;
    width: 100%;
    flex-direction: column;
    justify-content: start;
    padding: 60px 72px 120px;
  }
  @media (max-width: 991px) {
    .featured-products {
      max-width: 100%;
      padding: 0 20px 100px;
    }
  }
  .featured-products-2 {
    color: rgba(0, 0, 0, 1);
    text-align: center;
    align-self: center;
    font: 600 40px/0.5 Poppins, sans-serif;
  }
  .cards-2 {
    display: flex;
    margin-top: 60px;
    width: 100%;
    align-items: start;
    gap: 24px;
    justify-content: center;
    flex-wrap: wrap;
  }
  @media (max-width: 991px) {
    .cards-2 {
      max-width: 100%;
      margin-top: 40px;
    }
  }
  .card-2 {
    border-radius: 20px;
    border: 1px solid var(--Gray-100, #f8f9fa);
    display: flex;
    min-width: 240px;
    flex-direction: column;
    overflow: hidden;
    justify-content: start;
    flex: 1;
    flex-basis: 0%;
  }
  .product-image {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 100%;
  }
  .text-icon-2 {
    display: flex;
    width: 100%;
    align-items: start;
    gap: 40px 100px;
    justify-content: space-between;
    padding: 20px;
  }
  .text-9 {
    display: flex;
    flex-direction: column;
    font-family: Poppins, sans-serif;
    color: rgba(0, 0, 0, 1);
    font-weight: 600;
    justify-content: start;
  }
  .product-name {
    font-size: 20px;
    line-height: 1;
  }
  .product-price {
    font-size: 16px;
    line-height: 1;
    margin-top: 12px;
  }
  .icon-bg-6 {
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
  .img-22 {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 20px;
    align-self: stretch;
    margin: auto 0;
  }
  </style>