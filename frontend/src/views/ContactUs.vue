<template>
    <div class="contact-us-container">
      <div class="contact-us-content">
        <PetShopHeader />
        <section class="hero-section">
          <div class="hero-content">
            <h1 class="hero-title">
              <span class="highlight">Pet shop</span>
              If animals could talk, they'd talk about us!
            </h1>
            <p class="hero-description">
              At et vehicula sodales est proin turpis pellentesque sinulla a aliquam amet rhoncus quisque eget sit
            </p>
            <button class="cta-button">Shop Now</button>
          </div>
          <div class="hero-images">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/45b16cce959d8f48794d9da55f8dddce11b15175889614827d9f66842edc04af?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Happy dog" class="main-image" />
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d12fc05b1e608cae4955b69789a4fbd61774bf141d6723fb2fd5f9cc2b508865?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Decorative element" class="decorative-image" />
          </div>
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/49d56da7f8cc94907c79496656548e93fb18b4bf2e1b277febdcaa18e770cac7?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Decorative paw print" class="paw-print" />
        </section>
        <section class="contact-section">
          <form class="contact-form">
            <div class="form-row">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" placeholder="First name" />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" placeholder="Last name" />
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" placeholder="E-mail address" />
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" placeholder="Your message..."></textarea>
            </div>
            <button type="submit" class="submit-button">Send Message</button>
          </form>
          <div class="contact-info">
            <h2 class="contact-title">Feel free to contact us</h2>
            <p class="contact-description">
              At et vehicula sodales est proin turpis pellentesque sinulla a aliquam
              amet rhoncus quisque eget sit. Sociis blandit et pellentesque aliquet at quisque tortor lacinia nullam
            </p>
            <ul class="contact-list">
              <li class="contact-item">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/bccb8054ec2192f17f289da1d8db5b50f548e7934bb90c1a85a4095c43a4fde1?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Location icon" class="contact-icon" />
                <span>8592 Fairground St.Tallahassee, FL 32303</span>
              </li>
              <li class="contact-item">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/91cd3d36c89b65cd7388314b34d1f2d661942a3f33e184035f19f6104f71c24a?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Email icon" class="contact-icon" />
                <span>rgarton@outlook.com</span>
              </li>
              <li class="contact-item">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/57376997f94c38c724ea802862929cce3c610559e15226729bb45b8cdb299004?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Phone icon" class="contact-icon" />
                <span>+775 378-6348</span>
              </li>
              <li class="contact-item">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6599f9b09d908046a191f01b7ffb63389d440c7ae502a6af73cc7e16b9dde90c?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Clock icon" class="contact-icon" />
                <span>Mon - Fri: 10AM - 10PM</span>
              </li>
            </ul>
          </div>
        </section>
        <PetShopFooter />
      </div>
    </div>
  </template>

<script>
  import PetShopHeader from '../components/PetShopHeader.vue';
  import PetShopFooter from '../components/PetShopFooter.vue';

  
  export default {
    name: 'PetShop',
    components: {
      PetShopHeader,
      PetShopFooter,
    },
  };
  </script>
  
  <style scoped>
  .contact-us-container {
    display: flex;
    flex-direction: column;
    padding: 0 70px;
    font-family: Poppins, sans-serif;
    padding: 0;
  }
  
  .contact-us-content {
    background-color: #fff;
    display: flex;
    width: 100%;
    flex-direction: column;
    overflow: hidden;
  }
  
  .top-header {
    background: #f8f9fa;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 24px 0;
    color: #000;
    font-size: 16px;
    font-weight: 500;
  }
  
  .contact-info {
    display: flex;
    align-items: center;
    gap: 24px;
  }
  
  .contact-item {
    display: flex;
    align-items: center;
    gap: 8px;
  }
  
  .contact-icon {
    width: 24px;
    height: 24px;
    object-fit: contain;
  }
  
  .main-nav {
    border-radius: 40px;
    background-color: #fff;
    box-shadow: 0 16px 12px rgba(0, 0, 0, 0.03);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 24px 40px;
  }
  
  .logo {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #000;
    font-weight: 700;
    font-size: 20px;
  }
  
  .logo-icon {
    width: 29px;
    height: 24px;
    object-fit: contain;
  }
  
  .nav-menu {
    display: flex;
    list-style-type: none;
    gap: 24px;
    font-size: 20px;
    font-weight: 500;
  }
  
  .nav-item {
    padding: 4px 10px;
  }
  
  .nav-item.active {
    border-bottom: 2px solid #fd7e14;
    color: #fd7e14;
    font-weight: 600;
  }
  
  .search-cart {
    display: flex;
    align-items: center;
    gap: 24px;
  }
  
  .search-bar {
    display: flex;
    align-items: center;
    background-color: #f8f9fa;
    border-radius: 20px;
    padding: 6px 16px;
  }
  
  .search-input {
    border: none;
    background: transparent;
    color: rgba(0, 0, 0, 0.6);
    font-size: 16px;
    width: 200px;
  }
  
  .search-icon {
    width: 28px;
    height: 28px;
    object-fit: contain;
  }
  
  .cart-icons {
    display: flex;
    gap: 24px;
  }
  
  .cart-icon {
    width: 24px;
    height: 24px;
    object-fit: contain;
  }
  
  .hero-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 60px 0;
    position: relative;
  }
  
  .hero-content {
    max-width: 647px;
    margin-left: 200px;
  }
  
  .hero-title {
    font-size: 54px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 20px;
  }
  
  .highlight {
    display: block;
    color: #fd7e14;
    font-size: 16px;
    text-transform: capitalize;
    margin-bottom: 20px;
  }
  
  .hero-description {
    color: rgba(0, 0, 0, 0.8);
    font-size: 16px;
    line-height: 26px;
    margin-bottom: 45px;
  }
  
  .cta-button {
    background-color: #090706;
    color: #fff;
    border: none;
    border-radius: 12px;
    padding: 23px 40px;
    font-size: 20px;
    font-weight: 600;
    cursor: pointer;
  }
  
  .hero-images {
    position: relative;
  }
  
  .main-image {
    width: 536px;
    height: auto;
  }
  
  .decorative-image {
    position: absolute;
    top: 42px;
    right: -23px;
    width: 142px;
    height: 142px;
  }
  
  .paw-print {
    position: absolute;
    left: -70px;
    bottom: 187px;
    width: 120px;
    height: 114px;
  }
  
  .contact-section {
    display: flex;
    justify-content: space-between;
    gap: 110px;
    padding: 60px 72px;
  }
  
  .contact-form {
    flex: 1;
    background-color: #f8f9fa;
    border-radius: 20px;
    padding: 40px;
  }
  
  .form-row {
    display: flex;
    gap: 24px;
    margin-bottom: 24px;
  }
  
  .form-group {
    display: flex;
    flex-direction: column;
    flex: 1;
  }
  
  .form-group label {
    color: #000;
    font-weight: 600;
    margin-bottom: 6px;
  }
  
  .form-group input,
  .form-group textarea {
    border: none;
    border-radius: 6px;
    padding: 9px 16px;
    font-size: 16px;
  }
  
  .form-group textarea {
    height: 178px;
    resize: vertical;
  }
  
  .submit-button {
    background-color: #fd7e14;
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 15px 20px;
    font-size: 16px;
    font-weight: 600;
    text-transform: capitalize;
    cursor: pointer;
    margin-top: 40px;
    width: 100%;
  }
  
  .contact-info {
    flex: 1;
  }
  
  .contact-title {
    font-size: 40px;
    font-weight: 600;
    margin-bottom: 40px;
  }
  
  .contact-description {
    color: rgba(0, 0, 0, 0.8);
    font-size: 16px;
    line-height: 26px;
    margin-bottom: 40px;
  }
  
  .contact-list {
    list-style-type: none;
    padding: 0;
  }
  
  .contact-list .contact-item {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 40px;
    font-size: 20px;
    font-weight: 600;
  }
  
  .contact-list .contact-icon {
    width: 40px;
    height: 40px;
  }
  
  .map-section {
    padding: 60px 72px;
  }
  
  .map-container {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    height: 420px;
  }
  
  .map-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .location-pin {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100px;
    height: 100px;
  }
  
  @media (max-width: 991px) {
    .contact-us-container {
      padding: 0 20px;
    }
  
    .main-nav {
      padding: 24px 20px;
    }
  
    .hero-title {
      font-size: 40px;
    }
  
    .hero-images {
      display: none;
    }
  
    .contact-section {
      flex-direction: column;
      gap: 60px;
      padding: 60px 20px;
    }
  
    .map-section {
      padding: 60px 20px;
    }
  
    .map-container {
      height: 300px;
    }
  }
  </style>