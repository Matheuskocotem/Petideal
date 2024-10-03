<template>
    <div class="pet-shop-home">
      <PetshopHeader />
      <PetshopHero />
      <Categories />
      <FeaturedProducts />
      <InfoBlock />
      <Logos />
      <BestSellingProducts />
      <ShopByPet />
      <NewsBlog />
      <PetShopFooter />
    </div>
  </template>
  
  <script>
  import PetshopHeader from '../components/PetShopHeader.vue';
  import PetshopHero from '../components/PetShopHero.vue';
  import Categories from '../components/Categories.vue';
  import FeaturedProducts from '../components/FeaturedProducts.vue';
  import InfoBlock from '../components/InfoBLock.vue';
  import Logos from '../components/Logos.vue';
  import BestSellingProducts from '../components/BestSellingProducts.vue';
  import ShopByPet from '../components/ShopByPet.vue';
  import NewsBlog from '../components/NewBlog.vue';
  import PetShopFooter from '../components/PetShopFooter.vue';
  
  export default {
    name: 'PetShopHome',
    components: {
      PetshopHeader,
      PetshopHero,
      Categories,
      FeaturedProducts,
      InfoBlock,
      Logos,
      BestSellingProducts,
      ShopByPet,
      NewsBlog,
      PetShopFooter,
    },
  };
  </script>
  
  <style scoped>
  .pet-shop-home {
    display: flex;
    flex-direction: column;
    width: 100%;
    overflow-x: hidden;
  }
  </style>