<template>
  <div>
    <Header/>
    <ShopCategory/>
    <ShopPet/>
  </div>
</template>

<script>
import Header from '@/components/Header.vue';
import ShopCategory from '@/components/ShopCategory.vue';
import ShopPet from '@/components/ShopPet.vue';

export default {
components: {
  Header,
  ShopCategory,
  ShopPet
}

}
</script>

<style>

</style>