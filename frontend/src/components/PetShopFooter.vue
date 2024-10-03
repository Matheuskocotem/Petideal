<template>
    <footer class="footer">
      <img loading="lazy" src="http://b.io/ext_96-" class="img-60" alt="Footer decoration" />
      <div class="icons-text-2">
        <div class="logo-text-icons">
          <div class="logo-2">
            <img loading="lazy" src="http://b.io/ext_97-" class="img-61" alt="Pet Shop logo" />
            <div class="pet-shop">Pet Shop</div>
          </div>
          <p class="sed-viverra-eget-fames-sit-varius-pellentesque-mattis-libero-viverra-dictumst-ornaresed-justo-convallis-vitae">
            Sed viverra eget fames sit varius. Pellentesque mattis libero viverra dictumst ornaresed justo convallis vitae
          </p>
          <div class="social-icons">
            <img v-for="(icon, index) in socialIcons" :key="index" loading="lazy" :src="icon" class="img" :alt="`Social icon ${index + 1}`" />
          </div>
        </div>
        <div class="text-26">
          <div class="company">Company</div>
          <div class="text-27">
            <div>About Us</div>
            <div class="blog">Blog</div>
            <div class="gift-cards">Gift cards</div>
            <div class="careers">Careers</div>
          </div>
        </div>
        <div class="text-28">
          <div class="useful-links">Useful Links</div>
          <div class="text-29">
            <div>New products</div>
            <div class="best-sellers">Best sellers</div>
            <div class="discount">Discount</div>
            <div class="f-a-q">F.A.Q</div>
          </div>
        </div>
        <div class="text-30">
          <div class="customer-service">Customer Service</div>
          <div class="text-31">
            <div>Contact Us</div>
            <div class="shipping">Shipping</div>
            <div class="returns">Returns</div>
            <div class="order-tracking">Order tracking</div>
          </div>
        </div>
        <div class="text-32">
          <div class="store">Store</div>
          <div class="text-33">
            <div class="address">
              8592 Fairground St. <br />Tallahassee, FL 32303
            </div>
            <div class="text-34">
              <div class="phone">+775 378-6348</div>
              <div class="email">rgarton@outlook.com</div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-icons-2">
        <div>© Copyright Pet Shop 2024. Design by Figma. guru</div>
        <img loading="lazy" src="http://b.io/ext_98-" class="img-62" alt="Payment methods" />
      </div>
    </footer>
  </template>
  
  <script>
  export default {
    data() {
      return {
        socialIcons: [
          'http://b.io/ext_99-',
          'http://b.io/ext_100-',
          'http://b.io/ext_101-',
          'http://b.io/ext_102-',
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  .footer {
    background: var(--Gray-100, #f8f9fa);
    background-color: var(--Gray-100, #f8f9fa);
    align-self: center;
    position: relative;
    display: flex;
    width: 100%;
    max-width: 1440px;
    flex-direction: column;
    overflow: hidden;
    justify-content: start;
    padding: 72px;
  }
  @media (max-width: 991px) {
    .footer {
      max-width: 100%;
      padding: 0 20px;
    }
  }
  .img-60 {
    aspect-ratio: 2.32;
    object-fit: contain;
    object-position: center;
    width: 211px;
    position: absolute;
    z-index: 0;
    max-width: 100%;
    right: -53px;
    bottom: 0px;
    height: 219px;
  }
  .icons-text-2 {
    z-index: 0;
    display: flex;
    width: 100%;
    align-items: start;
    gap: 40px 100px;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  .logo-text-icons {
    align-self: stretch;
    display: flex;
    min-width: 240px;
    flex-direction: column;
    align-items: start;
    justify-content: start;
    width: 349px;
  }
  .logo-2 {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--Default-Black, #000);
    justify-content: start;
    font: 700 20px Poppins, sans-serif;
  }
  .img-61 {
    aspect-ratio: 1.21;
    object-fit: contain;
    object-position: center;
    width: 29px;
    align-self: stretch;
    margin: auto 0;
  }
  .pet-shop {
    align-self: stretch;
    margin: auto 0;
  }
  .sed-viverra-eget-fames-sit-varius-pellentesque-mattis-libero-viverra-dictumst-ornaresed-justo-convallis-vitae {
    color: rgba(0, 0, 0, 1);
    align-self: stretch;
    margin-top: 20px;
    font: 400 16px/21px Poppins, sans-serif;
  }
  .social-icons {
    display: flex;
    margin-top: 20px;
    align-items: center;
    gap: 20px;
    justify-content: start;
  }
  .img {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 24px;
  }
  .text-26 {
    display: flex;
    flex-direction: column;
    color: rgba(0, 0, 0, 1);
    justify-content: start;
    font: 16px Poppins, sans-serif;
  }
  .company {
    font-weight: 600;
  }
  .text-27 {
    display: flex;
    margin-top: 20px;
    flex-direction: column;
    font-weight: 400;
    justify-content: start;
  }
  .blog {
    margin-top: 16px;
  }
  .gift-cards {
    margin-top: 16px;
  }
  .careers {
    margin-top: 16px;
  }
  .text-28 {
    display: flex;
    flex-direction: column;
    color: rgba(0, 0, 0, 1);
    justify-content: start;
    font: 16px Poppins, sans-serif;
  }
  .useful-links {
    font-weight: 600;
  }
  .text-29 {
    display: flex;
    margin-top: 20px;
    flex-direction: column;
    font-weight: 400;
    justify-content: start;
  }
  .best-sellers {
    margin-top: 16px;
  }
  .discount {
    margin-top: 16px;
  }
  .f-a-q {
    margin-top: 16px;
  }
  .text-30 {
    display: flex;
    flex-direction: column;
    color: rgba(0, 0, 0, 1);
    justify-content: start;
    font: 16px Poppins, sans-serif;
  }
  .customer-service {
    font-weight: 600;
  }
  .text-31 {
    align-self: start;
    display: flex;
    margin-top: 20px;
    flex-direction: column;
    font-weight: 400;
    justify-content: start;
  }
  .shipping {
    margin-top: 16px;
  }
  .returns {
    margin-top: 16px;
  }
  .order-tracking {
    margin-top: 16px;
  }
  .text-32 {
    display: flex;
    flex-direction: column;
    font-size: 16px;
    color: rgba(0, 0, 0, 1);
    justify-content: start;
  }
  .store {
    font-family: Poppins, sans-serif;
    font-weight: 600;
  }
  .text-33 {
    display: flex;
    margin-top: 20px;
    flex-direction: column;
    font-weight: 500;
    justify-content: start;
  }
  .address {
    font-family: Poppins, sans-serif;
    line-height: 20px;
  }
  .text-34 {
    display: flex;
    margin-top: 20px;
    flex-direction: column;
    line-height: 1;
    justify-content: start;
  }
  .phone {
    font-family: Poppins, sans-serif;
  }
  .email {
    font-family: Inter, sans-serif;
    margin-top: 4px;
  }
  .text-icons-2 {
    z-index: 0;
    display: flex;
    margin-top: 60px;
    width: 100%;
    align-items: end;
    gap: 40px 100px;
    color: rgba(0, 0, 0, 0.5);
    justify-content: space-between;
    flex-wrap: wrap;
    font: 400 14px/2 Poppins, sans-serif;
  }
  @media (max-width: 991px) {
    .text-icons-2 {
      max-width: 100%;
      margin-top: 40px;
    }
  }
  .img-62 {
    aspect-ratio: 10.53;
    object-fit: contain;
    object-position: center;
    width: 263px;
    min-width: 240px;
  }
  </style>