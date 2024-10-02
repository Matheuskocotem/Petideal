<template>
  <div class="d-flex flex-column justify-content-center align-items-center p-2">
    <h4 class="p-4 title">Compre por Categoria</h4>
    <div class="d-flex">
      <div class="card p-3 m-3" style="max-width: 540px">
        <div class="row g-0">
          <div class="col-md-4">
            <img
              src="../Img/dogs_food.webp"
              class="img-fluid rounded-start"
              alt="..."
            />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title title">Comida de Cachorro</h5>
              <h5 class="card-text subtitle">R$14,00</h5>
              <p class="card-text">
                Nutrição completa para cães, rica em proteínas e vitaminas.
                Promove saúde muscular, ossos fortes e um pelo brilhante. Ideal
                para todas as raças e idades.
              </p>
              <button class="btn customBtn" type="submit">
                Adicionar ao Carrinho
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="card p-3 m-3" style="max-width: 540px">
        <div class="row g-0">
          <div class="col-md-4">
            <img
              src="../Img/cats_food.webp"
              class="img-fluid rounded-start"
              alt="..."
            />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title title">Comida de Gato</h5>
              <h5 class="card-text subtitle">R$14,00</h5>
              <p class="card-text">
                Alimento balanceado com taurina e antioxidantes. Ajuda na saúde
                do coração, digestão e manutenção de uma pelagem saudável.
                Perfeito para todas as idades.
              </p>
              <button class="btn customBtn" type="submit">
                Adicionar ao Carrinho
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ShopCategory",
};
</script>

<style scoped>
.customBtn {
  background-color: #622d89;
  color: white;
}
.customBtn:hover {
  background-color: white;
  color: #622d89;
  border: solid 1px #622d89;
}
.card {
  border: solid 1px #AC8FC2;
  background-color: #FDFCFE;
}
.title{
  color: #0B050F;
}
.subtitle{
  color:#622D89;
}
</style>
