<template>
    <section class="shop-by-pet">
      <div class="section-header">
        <h2 class="section-title">Shop by pet</h2>
        <div class="navigation-buttons">
          <button class="nav-button" aria-label="Previous">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e81c68f5cf947c57fabc3eb4d44dd6d01d019c148b3f6007709f63071fda0911?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="" />
          </button>
          <button class="nav-button" aria-label="Next">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e62a2f0dfe32fef272f88a4628802b0ead234b8276035d9390952bebe29b3f20?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="" />
          </button>
        </div>
      </div>
      <div class="pet-categories">
        <div class="pet-category">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8f447bdeed0d1c067e1b67200a362d8b87b77b02d2c6561a0f4fff2d4c806053?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Cat" class="category-image" />
          <h3 class="category-name">Cat</h3>
        </div>
        <div class="pet-category">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a91b7ba05f00e611f459ce9a9c551a9d35e16c621c6c6ff704d684162d66737c?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Hamster" class="category-image" />
          <h3 class="category-name">Hamster</h3>
        </div>
        <div class="pet-category">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/00d069144698d1b7031b2af45bdf50a2e00fc253d35dbda0bc30f9cabc952d66?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Dog" class="category-image" />
          <h3 class="category-name">Dog</h3>
        </div>
        <div class="pet-category">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/53fd6ef8453d4b8ed4a7bc6baf82d3016a12fa51d745060ba22fabc7ee99bbb9?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Parrot" class="category-image" />
          <h3 class="category-name">Parrot</h3>
        </div>
        <div class="pet-category">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a538da06a7b1a9cd497fcafb6d4d0242e2fc7e70c83425023af24cd548804367?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Rabbit" class="category-image" />
          <h3 class="category-name">Rabbit</h3>
        </div>
        <div class="pet-category">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/132335c5279033046ec5c3109042b18fa54d09268f3bbdf7186617ba51873bbb?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Turtle" class="category-image" />
          <h3 class="category-name">Turtle</h3>
        </div>
      </div>
    </section>
  </template>
  
  <style scoped>
  .shop-by-pet {
    padding: 60px 72px;
    font-family: Poppins, sans-serif;
  }
  
  .section-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 60px;
  }
  
  .section-title {
    font-size: 40px;
    font-weight: 600;
    color: #000;
  }
  
  .navigation-buttons {
    display: flex;
    gap: 40px;
  }
  
  .nav-button {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #000;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }
  
  .pet-categories {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 22px;
  }
  
  .pet-category {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .category-image {
    width: 100%;
    max-width: 220px;
    height: auto;
    margin-bottom: 26px;
  }
  
  .category-name {
    font-size: 20px;
    font-weight: 600;
    color: #000;
  }
  
  @media (max-width: 991px) {
    .shop-by-pet {
      padding: 40px 20px;
    }
  
    .section-header {
      flex-direction: column;
      align-items: flex-start;
      gap: 20px;
    }
  
    .pet-categories {
      justify-content: center;
    }
  }
  </style>