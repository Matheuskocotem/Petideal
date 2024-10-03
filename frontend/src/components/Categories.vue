<template>
    <section class="categories">
      <div class="text-icons">
        <h2 class="browse-by-category">Browse by category</h2>
        <div class="icons-2">
          <div class="icon-bg">
            <img loading="lazy" src="http://b.io/ext_67-" class="img-11" alt="Left arrow" />
          </div>
          <div class="icon-bg">
            <img loading="lazy" src="http://b.io/ext_68-" class="img-12" alt="Right arrow" />
          </div>
        </div>
      </div>
      <div class="cards">
        <div v-for="(category, index) in categories" :key="index" class="card">
          <img :src="category.image" :alt="category.name" class="category-image" />
          <div class="text-icon">
            <div class="text-5">
              <div class="category-name">{{ category.name }}</div>
              <div class="product-count">{{ category.productCount }} products</div>
            </div>
            <div class="icon-bg-2">
              <img loading="lazy" src="http://b.io/ext_69-" class="img-14" alt="Arrow icon" />
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
        categories: [
          { name: 'Accessories', productCount: 84, image: 'http://b.io/ext_70-' },
          { name: 'Food', productCount: 64, image: 'http://b.io/ext_71-' },
          { name: 'Furniture', productCount: 22, image: 'http://b.io/ext_72-' },
          { name: 'Bags', productCount: 16, image: 'http://b.io/ext_73-' },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  .categories {
    display: flex;
    width: 100%;
    flex-direction: column;
    justify-content: start;
    padding: 60px 72px;
  }
  @media (max-width: 991px) {
    .categories {
      max-width: 100%;
      padding: 0 20px;
    }
  }
  .text-icons {
    display: flex;
    width: 100%;
    align-items: start;
    gap: 40px 100px;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  @media (max-width: 991px) {
    .text-icons {
      max-width: 100%;
    }
  }
  .browse-by-category {
    color: rgba(0, 0, 0, 1);
    font: 600 40px/0.5 Poppins, sans-serif;
  }
  .icons-2 {
    display: flex;
    align-items: start;
    gap: 40px;
    justify-content: start;
  }
  .icon-bg {
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    background: var(--Default-Black, #000);
    background-color: var(--Default-Black, #000);
    display: flex;
    min-height: 40px;
    flex-direction: column;
    overflow: hidden;
    width: 40px;
    height: 40px;
    padding: 0 8px;
  }
  .img-11,
  .img-12 {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 24px;
  }
  .cards {
    display: flex;
    margin-top: 60px;
    width: 100%;
    align-items: end;
    gap: 24px;
    justify-content: start;
    flex-wrap: wrap;
  }
  @media (max-width: 991px) {
    .cards {
      max-width: 100%;
      margin-top: 40px;
    }
  }
  .card {
    border-radius: 20px;
    display: flex;
    min-width: 240px;
    flex-direction: column;
    overflow: hidden;
    justify-content: start;
    flex-grow: 1;
    width: 245px;
  }
  .category-image {
    aspect-ratio: 1.42;
    object-fit: contain;
    object-position: center;
    width: 306px;
    max-width: 100%;
  }
  .text-icon {
    justify-content: space-between;
    align-items: start;
    background: var(--Gray-100, #f8f9fa);
    background-color: var(--Gray-100, #f8f9fa);
    display: flex;
    max-width: 100%;
    width: 306px;
    gap: 40px 100px;
    overflow: hidden;
    padding: 20px 16px;
  }
  .text-5 {
    display: flex;
    flex-direction: column;
    font-family: Poppins, sans-serif;
    justify-content: start;
  }
  .category-name {
    color: rgba(0, 0, 0, 1);
    font-size: 20px;
    font-weight: 600;
    line-height: 1;
  }
  .product-count {
    color: rgba(0, 0, 0, 0.6);
    font-size: 16px;
    font-weight: 400;
    line-height: 1;
    margin-top: 12px;
  }
  .icon-bg-2 {
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    background: var(--Default-White, #fff);
    background-color: var(--Default-White, #fff);
    display: flex;
    min-height: 24px;
    flex-direction: column;
    overflow: hidden;
    width: 24px;
    height: 24px;
    padding: 0 4px;
  }
  .img-14 {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 16px;
  }
  </style>