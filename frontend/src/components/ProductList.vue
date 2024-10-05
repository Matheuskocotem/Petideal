<template>
  <section class="product-grid">
    <article v-for="(product, index) in products" :key="index" class="product-card">
      <figure>
        <img :src="product.image" :alt="product.name" class="product-image" loading="lazy" :aria-label="`Image of ${product.name}`" />
        <figcaption class="product-details">
          <div class="product-info">
            <h3 class="product-name">{{ product.name }}</h3>
            <p class="product-price">${{ product.price }}</p>
          </div>
          <button class="add-to-cart-btn" aria-label="Add to cart" @click="addToCart(product)">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/60638718b3ac9269712cb5ab2ed29e039ee5b889d9e7c2029e0688e5b06ca7be?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Cart Icon" class="cart-icon" />
          </button>
        </figcaption>
      </figure>
    </article>
  </section>
</template>

<script>
export default {
  name: 'ProductGrid',
  data() {
    return {
      products: [
        { name: 'Pet Carrier', price: '29.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/98c27122722598be38f2e187546b040983c31f5e683eb6809cb245f3aa3aaf77?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        { name: 'Cat Bowl', price: '20.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/a93a4480c9267799c881bd6e912b340b5a9df585977b9dfbe37836dff9a352be?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        { name: 'Cat Bowl', price: '19.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/9459dfe9d2f09aaabc94f61a80dee6b1c28031f8e78d6bb5c043802caed48c3c?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        { name: 'Premium Cat Food', price: '20.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/289c77cc341dec24fa27770abbd79e19ff783f13f1432aa1d4e03d449e015c41?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        { name: 'Dog Bowl', price: '4.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/8797d6834e654d7937b9d99c209b9803badec368dec3ad9dbed29df501b8f4c9?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        { name: 'Cat Bed', price: '49.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/95a2f4404bd99018ff94e3e4ef256c99727591ebef59626b4133e3fb9c933dad?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        { name: 'Dog Leash', price: '9.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/30406946d57f655c74ebbdcd1b4bcfd0ecdb3d9b74bb9a75cea3b94716ef5ada?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        { name: 'Dog Bed', price: '49.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/08cf4ef8cc1ee4403bdba6371f48526b4e7b3d0d6be74f9ce182965682807766?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        { name: 'Pet Food', price: '20.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/ebfc6b5b47f9a815c4292e98db488d849d48c6edf494480b9a83f3ccf19fade6?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        { name: 'Premium Dog Food', price: '29.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/42f3435ae60e865c573ad698c0f34456b28876558e6bb6820c001843f119f689?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        { name: 'Dog Bowl', price: '19.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/f8eeffa0a36055bcdd50bc8a2be8d6df8ee103da7fdbde202f83aed839501bcc?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
        { name: 'Premium Dog Food', price: '24.99', image: 'https://cdn.builder.io/api/v1/image/assets/TEMP/5f48e63d16401c54196e239b488493358cbf0b1d49e9d91056989b02dd42cecc?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c' },
      ],
    };
  },
  methods: {
    addToCart(product) {
      console.log(`Added ${product.name} to cart`);
    }
  }
};
</script>

<style scoped>
.product-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: flex-start;
  align-items: flex-start;
  padding: 30px 40px 0 0;
}

.product-card {
  border-radius: 20px;
  border: 1px solid var(--Gray-100, #f8f9fa);
  display: flex;
  flex-direction: column;
  overflow: hidden;
  flex-grow: 1;
  width: 245px;
  min-width: 240px;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
  margin-bottom: 16px;
}

.product-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.product-image {
  aspect-ratio: 1;
  object-fit: contain;
  width: 100%;
  max-width: 306px;
  transition: transform 0.2s ease;
}

.product-card:hover .product-image {
  transform: scale(1.05);
}

.product-details {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 20px;
  gap: 40px;
  background-color: #ffffff;
}

.product-info {
  font-family: Poppins, sans-serif;
  color: #000;
}

.product-name {
  font-size: 20px;
  font-weight: 600;
  line-height: 1.2;
  margin: 0 0 12px;
  transition: color 0.2s ease;
}

.product-card:hover .product-name {
  color: #007bff;
}

.product-price {
  font-size: 16px;
  font-weight: 400;
  line-height: 1;
  margin: 0;
  color: #28a745;
}

.add-to-cart-btn {
  background: var(--Gray-100, #f8f9fa);
  border: none;
  border-radius: 50%;
  width: 36px;
  height: 36px;
  padding: 8px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.2s ease, transform 0.2s ease;
}

.add-to-cart-btn:hover {
  background-color: #007bff;
  transform: scale(1.1);
}

.add-to-cart-btn:hover .cart-icon {
  filter: brightness(0) invert(1);
}

.cart-icon {
  width: 20px;
  height: 20px;
  transition: filter 0.2s ease;
}

@media (max-width: 991px) {
  .product-grid {
    justify-content: center;
    padding: 20px;
  }
  
  .product-card {
    width: calc(50% - 15px);
  }
}

@media (max-width: 576px) {
  .product-grid {
    gap: 20px;
  }
  
  .product-card {
    width: 100%;
  }
}
</style>