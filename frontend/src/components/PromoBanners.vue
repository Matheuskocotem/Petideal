<template>
    <section class="promo-banners">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c8401b15b6215d983d31b121a9a0dccf3a778f5a22d9b5eab11c6dcaa36f0fc1?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Special offer for dog food" class="promo-banner" />
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1fdfd8dfc24d9e0bc098bc23bb3223eddd91ad6ff43bbc44801ec0f3b155087f?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Discount on cat accessories" class="promo-banner" />
    </section>
  </template>
  
  <style scoped>
  .promo-banners {
    display: flex;
    justify-content: center;
    gap: 24px;
    padding: 60px 0;
  }
  
  .promo-banner {
    width: 100%;
    max-width: 636px;
    height: auto;
    border-radius: 20px;
  }
  
  @media (max-width: 991px) {
    .promo-banners {
      flex-direction: column;
      align-items: center;
      padding: 40px 20px;
    }
  
    .promo-banner {
      max-width: 100%;
    }
  }
  </style>