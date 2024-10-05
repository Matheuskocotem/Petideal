<template>
  <section class="testimonials-section">
    <div class="testimonial-content">
      <div class="testimonial-header">
        <h2 class="section-title">Testimonials</h2>
        <p class="section-subtitle">O que as pessoas dizem sobre</p>
      </div>
      <div class="testimonial-rating">
        <div class="stars">
          <img src="../img/starsolo.png" alt="Star" class="star-icon" v-for="n in 5" :key="n" />
        </div>
      </div>
      <p class="testimonial-text">
        Morbi viverra eleifend in cras orci a leo tellus. Nunc purus adipiscing diam aliquet lorem nunc. Ipsum euismod risus amet eget non. Pulvinar condimentum ultricies tellus a non pellentesque odio pellentesque blandit. Aliquet et massa eget vitae justo tellus donec ac enim. Rhoncus adipiscing cursus cras suspendisse duis consectetur volutpat. Sed varius et phasellus ac scelerisque dignissim.
      </p>
      <div class="testimonial-author">
        <div class="author-info">
          <h3 class="author-name">Gerald Ferguson</h3>
          <p class="author-role">Customer</p>
        </div>
        <div class="testimonial-navigation">
        </div>
      </div>
    </div>
    <div class="testimonial-image">
      <img src="../img/avatarInsta.png" alt="Happy customer with pet" />
    </div>
  </section>
</template>

<script>
export default {
  name: 'PetShopTestimonials',
};
</script>

<style scoped>
.testimonials-section {
  display: flex;
  padding: 60px 72px;
  background-color: #f8f9fa;
  padding-left: 200px;
}

.testimonial-content {
  flex: 1;
  max-width: 680px;
}

.section-title {
  font-size: 16px;
  font-weight: 700;
  color: var(--Orange-500, #fd7e14);
  text-transform: capitalize;
}

.section-subtitle {
  font-size: 40px;
  font-weight: 600;
  margin-top: 20px;
}

.testimonial-rating {
  margin-top: 40px;
}

.stars {
  display: flex;
  gap: 12px;
}

.star-icon {
  width: 24px;
  height: 24px;
}

.testimonial-text {
  font-size: 20px;
  line-height: 32px;
  color: rgba(0, 0, 0, 0.8);
  margin-top: 24px;
}

.testimonial-author {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 40px;
}

.author-name {
  font-size: 24px;
  font-weight: 600;
}

.author-role {
  font-size: 16px;
  color: rgba(0, 0, 0, 0.6);
  margin-top: 20px;
}

.testimonial-navigation {
  display: flex;
  gap: 40px;
}

.nav-button {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #000;
  border: none;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.testimonial-image {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.testimonial-image img {
  max-width: 70%; 
  height: auto;
  border-radius: 20px;
}

@media (max-width: 991px) {
  .testimonials-section {
    flex-direction: column;
    padding: 40px 20px;
  }

  .testimonial-content {
    max-width: 100%;
  }

  .testimonial-image {
    margin-top: 40px;
  }

  .testimonial-image img {
    max-width: 60%; 
  }
}
</style>
