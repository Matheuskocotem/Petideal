<template>
  <div class="pet-shop">
    <PetShopHeader />
    <main>
      <PetShopHero />
      <ShopByPet />
      <div class="shop-content">
        <ProductFilters />
        <ProductList />
        <ProductGrid />
      </div>
      <PromoBanners />
    </main>
    <Footer />
  </div>
</template>
<script>
import PetShopHeader from "../components/PetShopHeader.vue";
import PetShopHero from "../components/PetShopHero.vue";
import ShopByPet from "../components/ShopByPet.vue";
import ProductFilters from "../components/ProductFilters.vue";
import ProductList from "../components/ProductList.vue";
import PromoBanners from "../components/PromoBanners.vue";
import Footer from "../components/Footer.vue";

export default {
  name: "PetShop",
  components: {
    PetShopHeader,
    PetShopHero,
    ShopByPet,
    ProductFilters,
    ProductList,
    PromoBanners,
    Footer,
  },
};
</script>

<style scoped>
.pet-shop {
  width: 100%;
  background-color: #fff;
}

.shop-content {
  display: flex;
  gap: 24px;
  padding: 0;
  justify-content: center;
}

@media (max-width: 991px) {
  .shop-content {
    flex-direction: column;
    padding: 0 20px;
  }
}
</style>
