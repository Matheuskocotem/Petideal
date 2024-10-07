<template>
  <section class="pet-ideal-section">
    <div class="content-wrapper">
      <div class="text-container">
        <h1 class="main-title">Sobre o Pet Ideal</h1>
        <p class="description">
          Pet Ideal, é a maior rede brasileira de prestadores de serviços de
          cuidados para animais de estimação 5 estrelas
        </p>
      </div>
      <img
        loading="lazy"
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/7d9265e70f58caa2bfda5ef7ac068d790e7be6a2b7fdeb40ee13d509a5fcbb36?placeholderIfAbsent=true&apiKey=db42f2bbbb7f446a998f49938c3fa6c4"
        class="background-image"
        alt="Pet Ideal background"
      />
    </div>
  </section>
</template>

<style scoped>
.pet-ideal-section {
  background-color: #e6e6e6;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  font-family: Tahoma, sans-serif;
  color: #000;
  padding: 0 80px;
}

.content-wrapper {
  display: flex;
  flex-direction: row;
  position: relative;
  min-height: 372px;
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  align-items: center;
  justify-content: space-between;
  padding: 115px 0;
}

.text-container {
  flex: 1;
  display: flex;
  flex-direction: column;
  max-width: 50%;
}

.main-title {
  font-size: 63px;
  font-weight: 700;
  margin-bottom: 20px;
}

.description {
  font-size: 30px;
  font-weight: 400;
}

.background-image {
  position: absolute;
  inset: 0;
  height: 100%;
  width: 100%;
  object-fit: cover;
  object-position: right;
  
}

@media (max-width: 991px) {
  .pet-ideal-section {
    padding: 0 20px;
  }

  .content-wrapper {
    flex-direction: column;
    padding: 60px 0;
  }

  .text-container {
    max-width: 100%;
    margin-bottom: 40px;
  }

  .main-title {
    font-size: 40px;
  }

  .description {
    font-size: 24px;
  }

  .background-image {
    max-width: 100%;
  }
}
</style>