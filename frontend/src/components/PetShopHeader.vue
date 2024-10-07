<template>
  <header class="pet-shop-header">
    <div class="contact-info">
      <div class="contact-item">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c2f9d63fab85b206bc10ae5040360353f1243581ebadde50d05aa9b213830e0d?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Phone icon" class="contact-icon" />
        <span class="contact-text">+379 871-8371</span>
      </div>
      <div class="contact-item">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fcc3b8db244a754e224f661912baca53a1bfef69b0e75d13aa4ab20de03f565e?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Email icon" class="contact-icon" />
        <span class="contact-text">rgarton@outlook.com</span>
      </div>
      <div class="contact-item-rua">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/0459a1766085384576accced4da0e6d1e8a5e9e88191f8dad13bb1d757e0fe77?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Location icon" class="contact-icon location" />
        <span class="contact-text">8592 Fairground St. Tallahassee, FL 32303</span>
      </div>
    </div>
    <nav class="main-nav">
      <div class="logo">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/869d86e3dccbba9781b65c04159b14912e0f9d757366cb45adf59914c32fa3b0?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Pet Shop logo" class="logo-image" />
        <span class="logo-text">Pet Shop</span>
      </div>
      <ul class="nav-links">
  <li><router-link to="/homepage" class="nav-link">Home</router-link></li>
  <li><router-link to="/shop" class="nav-link">Shop</router-link></li>
  <li><router-link to="/aboutus" class="nav-link">About Us</router-link></li>
  <li><router-link to="/contactus" class="nav-link">Contact Us</router-link></li>
</ul>
      <div class="search-cart">
        <form class="search-form" role="search">
          <label for="search-input" class="visually-hidden">Search products</label>
          <input type="search" id="search-input" placeholder="Search products..." class="search-input" />
          <button type="submit" class="search-button">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f54504702ed8a70ca94c77306304e000bffd092436dcd387934a645a88007bc1?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Search" class="search-icon" />
          </button>
        </form>
        <div class="cart-icons">
          <button class="cart-button" aria-label="View wishlist">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/31138e49db62f40a162a9dda3c4bdb382daa754240e0f0e17f2fda7a48eb8e84?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="" class="cart-icon" />
          </button>
          <button class="cart-button" aria-label="View shopping cart">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/45b4a97be78e3927557d72496281145219fc1416258a4802e859df73cb06928a?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="" class="cart-icon" />
          </button>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: 'PetShopHeader',
};
</script>

<style scoped>
.pet-shop-header {
  background-color: #f8f9fa;
  padding: 16px 32px; 
  font-family: Poppins, sans-serif;
  width: 100%;
}

.contact-info {
  display: flex;
  min-width: 240px;
  align-items: center; 
  gap: 16px; 
  padding-bottom: 12px; 
}

.contact-item {
  display: flex;
  align-items: center;
  gap: 6px; 
}

.contact-icon {
  aspect-ratio: 1;
  object-fit: contain;
  object-position: center;
  width: 20px; 
  align-self: stretch;
}

.contact-text {
  align-self: stretch;
  margin: auto 0;
}

.main-nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #fff;
  border-radius: 20px; 
  padding: 16px 24px; 
  box-shadow: 0 8px 8px rgba(0, 0, 0, 0.03); 
  max-width: 100%;
}

.logo {
  display: flex;
  align-items: center;
}

.logo-image {
  width: 24px; 
  height: 30px;
  margin-right: 6px; 
}

.logo-text {
  font-size: 18px; 
  font-weight: 700;
}

.nav-links {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav-link {
  color: #000;
  text-decoration: none;
  font-size: 18px; 
  font-weight: 500;
  padding: 4px 8px; 
  margin: 0 10px; 
}

.nav-link.active {
  color: #fd7e14;
  font-weight: 600;
  border-bottom: 2px solid #fd7e14;
}

.search-cart {
  display: flex;
  align-items: center;
}

.search-form {
  position: relative;
  margin-right: 16px; 
}

.search-input {
  border: none;
  background-color: #f8f9fa;
  border-radius: 20px;
  padding: 8px 30px 8px 12px; 
  font-size: 14px; 
  width: 240px; 
}

.search-button {
  position: absolute;
  right: 5px;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  cursor: pointer;
}

.search-icon {
  width: 24px; 
  height: 24px; 
}

.cart-icons {
  display: flex;
}

.cart-button {
  background: none;
  border: none;
  cursor: pointer;
  padding: 0;
  margin-left: 16px;
}

.cart-icon {
  width: 20px; 
  height: 20px; 
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

@media (max-width: 991px) {
  .pet-shop-header {
    padding: 16px 0; 
  }

  .main-nav {
    flex-wrap: wrap;
    padding: 16px; 
  }

  .nav-links {
    order: 3;
    width: 100%;
    justify-content: center;
    margin-top: 12px;
  }

  .search-cart {
    order: 2;
  }
}
</style>
