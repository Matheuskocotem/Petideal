<template>
    <section class="promo-banners">
      <img src="../img/gatinholeft.png" alt="Special offer for dog food" class="promo-banner" />
      <img src="../img/dognhoright.png" alt="Discount on cat accessories" class="promo-banner" />
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