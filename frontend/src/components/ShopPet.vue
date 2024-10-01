<template>
  <div>
    <div class="d-flex flex-column align-items-center p-2">
      <h4 class="p-4 text-center title">Compre por Pet</h4>
      <div class="container">
        <div class="row justify-content-center">
          <div
            class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center mb-4 img-hover"
          >
            <img
              src="../Img/dog.webp"
              class="img-fluid"
              style="max-width: 280px"
            />
            <h4 class="text-center">Tudo para Cachorro</h4>
          </div>

          <div
            class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center mb-4 img-hover"
          >
            <img
              src="../Img/cat.webp"
              class="img-fluid"
              style="max-width: 280px"
            />
            <h4 class="text-center">Tudo para Gato</h4>
          </div>

          <div
            class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center mb-4 img-hover"
          >
            <img
              src="../Img/bird.webp"
              class="img-fluid"
              style="max-width: 280px"
            />
            <h4 class="text-center">Tudo para Aves</h4>
          </div>

          <div
            class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center mb-4 img-hover"
          >
            <img
              src="../Img/rabit.webp"
              class="img-fluid"
              style="max-width: 280px"
            />
            <h4 class="text-center">Tudo para Coelho</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="position-relative">
      <img
        src="../Img/segundoBanner.png"
        class="img-fluid"
        alt="Banner Image"
      />
      <div class="txt position-absolute top-0 start-0 text-white p-3">
        <h5>Bio-Organico 30% OFF</h5>
        <h2>Testi & Healthy</h2>
        <h2>Food!</h2>
        <button class="btn btn-primary">Compre agora</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ShopPet",
};
</script>

<style scoped>
.img-hover img {
  transition: transform 0.3s ease;
}

.img-hover img:hover {
  transform: scale(1.2);
}
.title{
  color: #0B050F;
}
</style>
