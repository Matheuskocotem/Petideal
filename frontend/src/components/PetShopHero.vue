<template>
    <section class="hero-section">
      <div class="hero-content">
        <h1 class="hero-title">
          <span class="hero-subtitle">Pet shop</span>
          The friendly and caring small pet store
        </h1>
        <p class="hero-description">
          At et vehicula sodales est proin turpis pellentesque sinulla a aliquam amet rhoncus quisque eget sit
        </p>
      </div>
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/825de0f2c69087b414a28454fb2596fa66f8fc02625df4c9c830902c9582f3fb?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Happy dog" class="hero-image" />
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7f41addfd40dee0ee4d099f25837129b409facf4257ed57826602dea08132f0d?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="" class="decoration-1" />
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/322adf268bf33f735144292e9b16bc68f34b8954a9c529e4d998c5fd35d2db87?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="" class="decoration-2" />
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d12fc05b1e608cae4955b69789a4fbd61774bf141d6723fb2fd5f9cc2b508865?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="" class="decoration-3" />
    </section>
  </template>
  
  <style scoped>
  .hero-section {
    background-color: #f8f9fa;
    padding: 60px 72px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    overflow: hidden;
  }
  
  .hero-content {
    max-width: 647px;
  }
  
  .hero-title {
    font-family: Poppins, sans-serif;
    font-size: 54px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 45px;
  }
  
  .hero-subtitle {
    display: block;
    color: #fd7e14;
    font-size: 16px;
    text-transform: capitalize;
    margin-bottom: 20px;
  }
  
  .hero-description {
    font-family: Poppins, sans-serif;
    font-size: 16px;
    line-height: 26px;
    color: rgba(0, 0, 0, 0.8);
  }
  
  .hero-image {
    width: 536px;
    height: auto;
  }
  
  .decoration-1,
  .decoration-2,
  .decoration-3 {
    position: absolute;
  }
  
  .decoration-1 {
    width: 133px;
    height: 65px;
    left: 318px;
    bottom: 0;
  }
  
  .decoration-2 {
    width: 120px;
    height: 114px;
    left: -70px;
    bottom: 187px;
  }
  
  .decoration-3 {
    width: 142px;
    height: 142px;
    left: 593px;
    top: 244px;
  }
  
  @media (max-width: 991px) {
    .hero-section {
      flex-direction: column;
      padding: 40px 20px;
    }
  
    .hero-content {
      max-width: 100%;
      margin-bottom: 40px;
    }
  
    .hero-title {
      font-size: 40px;
    }
  
    .hero-image {
      max-width: 100%;
      height: auto;
    }
  
    .decoration-1,
    .decoration-2,
    .decoration-3 {
      display: none;
    }
  }
  </style>