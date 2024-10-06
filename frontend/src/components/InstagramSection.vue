<template>
  <section class="instagram-section">
    <h2 class="section-title">Follow our instagram</h2>
    <div class="instagram-grid">
      <img src="../img/followinsta1.png" alt="Instagram post 1" class="instagram-image" />
      <img src="../img/followinsta2.png" alt="Instagram post 2" class="instagram-image" />
      <img src="../img/followinsta3.png" alt="Instagram post 3" class="instagram-image" />
      <img src="../img/followista4.png" alt="Instagram post 4" class="instagram-image" />
    </div>
  </section>
</template>

<script>
export default {
  name: 'PetShopInstagram',
};
</script>

<style scoped>
.instagram-section {
  padding: 60px 72px;
  text-align: center;
}

.section-title {
  font-size: 40px;
  font-weight: 600;
  margin-bottom: 60px;
}

.instagram-grid {
  display: flex;
  justify-content: center;
  gap: 24px;
  flex-wrap: wrap;
}

.instagram-image {
  width: 306px;
  height: 306px;
  object-fit: cover;
  border-radius: 20px;
}

@media (max-width: 991px) {
  .instagram-section {
    padding: 40px 20px;
  }

  .instagram-image {
    width: calc(50% - 12px);
    height: auto;
  }
}
</style>