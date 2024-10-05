<template>
  <section class="about-store">
    <div class="store-info">
      <h2 class="section-title">About our store</h2>
      <div class="store-description">
        <div class="description-item">
          <p>
            At et vehicula sodales est proin turpis pellentesque sinulla a aliquam amet rhoncus quisque eget sit. Sociis blandit et pellentesque aliquet at quisque tortor lacinia nullam. Mattis aenean scelerisque dui libero cras arcu in egestas sagittis.
          </p>
        </div>
        <div class="description-item">
          <p>
            Aliquet ultrices risus dolor gravida. Faucibus sodales semper a magnis sapien viverra purus sed tortor. Amet risus blandit nunc odio rutrum. Adipiscing tincidunt imperdiet at cursus ipsum vulputate pharetra. Tellus nulla commodo ut ut auctor orci blandit at elit. Turpis pulvinar sagittis tristique aliquam vitae ipsum dui. Amet tempor posuere mi amet vel lobortis bibendum. Commodo purus tincidunt cursus tellus massa vel viverra.
          </p>
        </div>
      </div>
    </div>
    <div class="store-stats">
      <div class="stat-item">
        <span class="stat-number">2k+</span>
        <span class="stat-label">Happy Clients</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">72</span>
        <span class="stat-label">Brands</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">1.8k+</span>
        <span class="stat-label">Products</span>
      </div>
      <div class="stat-item">
        <span class="stat-number">28</span>
        <span class="stat-label">Years in business</span>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'PetShopAboutStore',
};
</script>

<style scoped>
.about-store {
  padding: 60px 0;
  padding-left: 100px;
  padding-right: 100px;
}

.section-title {
  font-size: 40px;
  font-weight: 600;
  margin-bottom: 40px;
}

.store-description {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* Colunas para os textos */
  gap: 40px; /* Espaçamento entre os textos */
  font-size: 16px;
  line-height: 26px;
  color: rgba(0, 0, 0, 0.8);
}

.description-item {
  padding: 20px;
  border: 1px solid #e0e0e0; /* Borda para o texto */
  border-radius: 10px;
  background-color: #fff; /* Fundo branco */
}

.store-stats {
  display: grid;
  grid-template-columns: repeat(4, 1fr); /* Dividido em 4 colunas iguais */
  gap: 20px; /* Espaçamento entre os quadrados */
  margin-top: 47px;
}

.stat-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 20px;
  border: 1px solid #e0e0e0; /* Adicionada borda */
  border-radius: 10px; /* Bordas arredondadas */
  background-color: #fff; /* Fundo branco para destaque */
}

.stat-number {
  color: var(--Orange-500, #fd7e14);
  font-size: 32px;
  font-weight: 600;
}

.stat-label {
  color: rgba(0, 0, 0, 0.8);
  font-size: 16px;
  margin-top: 16px;
  text-align: center;
}

@media (max-width: 991px) {
  .about-store {
    padding: 40px 20px;
  }

  .store-description {
    grid-template-columns: 1fr;
  }

  .store-stats {
    grid-template-columns: repeat(2, 1fr); 
  }

  .stat-item {
    width: 100%; 
  }
}

@media (max-width: 600px) {
  .store-stats {
    grid-template-columns: 1fr; 
  }
}
</style>
