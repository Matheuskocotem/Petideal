<template>
    <section class="product-grid">
      <ProductCard v-for="product in products" :key="product.id" :product="product" />
    </section>
  </template>
  
  <script>
  import ProductCard from '../components/ProductCard.vue';
  
  export default {
    name: 'ProductGrid',
    components: {
      ProductCard,
    },
    data() {
      return {
        products: [
          {
            id: 1,
            name: 'Coleira',
            price: 'R$20,00',
            image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/903e60d7a15151d7fcc3b4a0b9d03d14d8c8b8df83303d8589b7ff5b85b5d109?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c',
          },
          {
            id: 2,
            name: 'AAAA',
            price: 'R$20,00',
            image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/903e60d7a15151d7fcc3b4a0b9d03d14d8c8b8df83303d8589b7ff5b85b5d109?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c',
          },
          {
            id: 3,
            name: 'antipulgas',
            price: 'R$20,00',
            image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/903e60d7a15151d7fcc3b4a0b9d03d14d8c8b8df83303d8589b7ff5b85b5d109?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c',
            category: 'cachorro',
          },
          {
            id: 4,
            name: 'ração para caes',
            price: 'R$20,00',
            image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/903e60d7a15151d7fcc3b4a0b9d03d14d8c8b8df83303d8589b7ff5b85b5d109?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c',
            category: 'Ice cream test',
          },
          {
            id: 5,
            name: 'ração para gatos',
            price: 'R$20,00',
            image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/903e60d7a15151d7fcc3b4a0b9d03d14d8c8b8df83303d8589b7ff5b85b5d109?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c',
            category: 'Ice cream test',
          },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  .product-grid {
    display: flex;
    justify-content: space-between;
    margin-top: 40px;
    gap: 20px;
  }
  
  @media (max-width: 991px) {
    .product-grid {
      flex-wrap: wrap;
    }
  }
  </style>