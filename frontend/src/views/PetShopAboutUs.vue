<template>
    <div class="about-us-container">
      <PetShopHeader />
      <PetShopHeroUs />
      <PetShopAboutStore />
      <PetShopFounderInfo />
      <PetShopTeamSection />
      <PetShopTestimonials />
      <PetShopInstagram />
      <PetShopFooter />
    </div>
  </template>
  
  <script>
  import PetShopHeader from '../components/PetShopHeader.vue';
  import PetShopHeroUs from '../components/PetShopHeroUs.vue';
  import PetShopAboutStore from '../components/AboutStore.vue';
  import PetShopFounderInfo from '../components/FounderInfo.vue';
  import PetShopTeamSection from '../components/TeamSection.vue';
  import PetShopTestimonials from '../components/TestimonialsSection.vue';
  import PetShopInstagram from '../components/InstagramSection.vue';
  import PetShopFooter from '../components/PetShopFooter.vue';
  
  export default {
    name: 'PetShopUs',
    components: {
      PetShopHeader,
      PetShopHeroUs,
      PetShopAboutStore,
      PetShopFounderInfo,
      PetShopTeamSection,
      PetShopTestimonials,
      PetShopInstagram,
      PetShopFooter,
    },
  };
  </script>
  
  <style scoped>
.about-us-container {
  display: flex;
  flex-direction: column;
  padding: 0; 
  width: 100vw;
  max-width: 100%; 
  box-sizing: border-box; 
}
  
  @media (max-width: 991px) {
    .about-us-container {
      padding-left: 20px;
    }
  }
  
  .main-footer {
    background-color: #f8f9fa;
  }
  </style>
  