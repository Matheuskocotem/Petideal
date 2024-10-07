<template>
  <div class="shop-by-pet">
    <div class="pets-container">
      <div class="pet-card">
        <div class="image-wrapper">
          <div class="overlay-group">
            <img class="pet-image" src="../Img/dog.webp" alt="Cachorro" />
          </div>
        </div>
        <div class="pet-name">Cachorro</div>
      </div>

      <div class="pet-card">
        <div class="image-wrapper">
          <img class="pet-image" src="../Img/turtle.png" alt="Tartaruga" />
        </div>
        <div class="pet-name">Tartaruga</div>
      </div>

      <div class="pet-card">
        <div class="image-wrapper">
          <div class="overlay-group">
            <img class="pet-image" src="../Img/cat.webp" alt="Gato" />
          </div>
        </div>
        <div class="pet-name">Gato</div>
      </div>

      <div class="pet-card">
        <div class="image-wrapper">
          <div class="overlay-group">
            <img class="pet-image" src="../Img/bird.webp" alt="Pássaro" />
          </div>
        </div>
        <div class="pet-name">Pássaro</div>
      </div>

      <div class="pet-card">
        <div class="image-wrapper">
          <div class="overlay-group">
            <img class="pet-image" src="../Img/rabit.webp" alt="Coelho" /> <!-- Corrected 'rabit' to 'rabbit' -->
          </div>
        </div>
        <div class="pet-name">Coelho</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ShopByPet",
  data() {
    return {};
  },
};
</script>

<style>
.shop-by-pet {
  display: flex;
  flex-direction: column;
  gap: 40px; 
  height: 100%;
  padding: 100px;
  padding-left: 200px;
  width: 100%;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  width: 90%;
}

.title-wrapper {
  display: inline-flex;
  flex-direction: column;
  gap: 10px;
  align-items: flex-start;
  padding-left: 200px;
}

.title {
  color: #000;
  font-family: "Poppins-SemiBold", Helvetica, sans-serif;
  font-size: 30px;
  font-weight: 600;
  line-height: 36px;
  white-space: nowrap;
  padding-left: px;
}

.pets-container {
  display: flex;
  justify-content: space-between;
  width: 90%; 
  gap: 8px;
}

.pet-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 4px;
  width: 192px;
}

.image-wrapper {
  height: 196.35px;
  width: 192px;
  position: relative;
}

.overlay-group {
  height: 196px;
  position: absolute;
  top: 0; 
  width: 100%;
}

.pet-image {
  height: 192px;
  width: 192px;
}

.pet-name {
  color: #000;
  font-family: "Poppins-SemiBold", Helvetica, sans-serif;
  font-size: 18px;
  font-weight: 600;
  white-space: nowrap;
}
</style>
