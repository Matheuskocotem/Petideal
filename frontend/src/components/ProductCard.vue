<template>
  <article class="product-card">
    <img :src="product.image" :alt="product.name" class="product-image" />
    <div class="product-info">
      <h2 class="product-name">{{ product.name }}</h2>
      <span v-if="product.category" class="product-category">{{ product.category }}</span>
      <p class="product-price">{{ product.price }}</p>
    </div>
  </article>
</template>

<script>
export default {
  name: 'ProductCard',
  props: {
    product: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style scoped>
.product-card {
  display: flex;
  gap: 8px;
}

.product-image {
  width: 72px;
  height: 72px;
  border-radius: 5px;
  object-fit: contain;
}

.product-info {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.product-name {
  font-size: 16px;
  font-weight: 600;
  font-family: Montserrat, sans-serif;
  color: #000;
  margin: 0;
}

.product-category {
  font-size: 12px;
  font-weight: 500;
  font-family: Montserrat, sans-serif;
  color: rgba(0, 0, 0, 0.7);
  background-color: rgba(194, 184, 184, 0);
  border: 1px solid rgba(0, 0, 0, 0.3);
  border-radius: 3px;
  padding: 2px 4px;
  margin-top: 8px;
}

.product-price {
  font-size: 14px;
  font-weight: 600;
  font-family: Montserrat, sans-serif;
  color: #000;
  margin: 5px 0 0;
}

@media (max-width: 991px) {
  .product-category {
    padding-right: 20px;
  }
}
</style>