<template>
  <footer class="footer">
    <div class="footer-content">
      <div class="company-info">
        <div class="logo">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/45b83347f408061aeae396380f2b2a2136727a94a40263737976a96f344c9732?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" class="logo-image" alt="Pet Shop Logo" />
          <h2 class="company-name">Pet Shop</h2>
        </div>
        <p class="company-description">
          Sed viverra eget fames sit varius. Pellentesque mattis libero viverra dictumst ornaresed justo convallis vitae
        </p>
        <div class="social-icons">
          <a href="#" aria-label="Facebook"><img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9594335a867a6a4e42d597b3ba1b9e242a10538c58339f3d4e7613a89969501f?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" class="social-icon" alt="" /></a>
          <a href="#" aria-label="Twitter"><img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c6d6e83021803d754a2f01567106cb54668406ab4ca6c5946153a164b3d917b8?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" class="social-icon" alt="" /></a>
          <a href="#" aria-label="Instagram"><img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d6c962890eb06f48b00313ac0f2333a051526fc64140f899c1cf1f034a7dca06?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" class="social-icon" alt="" /></a>
          <a href="#" aria-label="LinkedIn"><img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a09c0e98834b59b71f1a7ea6c0204dfa73f227f093b893f7d700c7331316f26d?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" class="social-icon" alt="" /></a>
        </div>
      </div>
      <nav class="footer-nav">
        <section class="nav-section">
          <h3 class="nav-title">Company</h3>
          <ul class="nav-list">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Gift cards</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </section>
        <section class="nav-section">
          <h3 class="nav-title">Useful Links</h3>
          <ul class="nav-list">
            <li><a href="#">New products</a></li>
            <li><a href="#">Best sellers</a></li>
            <li><a href="#">Discount</a></li>
            <li><a href="#">F.A.Q</a></li>
          </ul>
        </section>
        <section class="nav-section">
          <h3 class="nav-title">Customer Service</h3>
          <ul class="nav-list">
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Order tracking</a></li>
          </ul>
        </section>
        <section class="nav-section">
          <h3 class="nav-title">Store</h3>
          <address class="store-address">
            8592 Fairground St.<br />
            Tallahassee, FL 32303
          </address>
          <div class="contact-info">
            <p class="phone">+775 378-6348</p>
            <p class="email">rgarton@outlook.com</p>
          </div>
        </section>
      </nav>
    </div>
    <p class="copyright">© Copyright Nexgen Arch 2024.</p>
  </footer>
</template>

<style scoped>
.footer {
  display: flex;
  padding: 100px;
  padding-left: 200px;
  flex-direction: column;
  background: var(--Gray-100, #f8f9fa);
  position: relative;
  width: 100%;
  overflow: hidden;
}

.footer-image {
  aspect-ratio: 2.32;
  object-fit: contain;
  width: 211px;
  position: absolute;
  right: -53px;
  bottom: 0;
  height: 219px;
}

.footer-content {
  display: flex;
  max-width: 1296px;
  width: 100%;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 40px 100px;
}

.company-info {
  display: flex;
  min-width: 240px;
  flex-direction: column;
  width: 349px;
}

.logo {
  display: flex;
  width: 125px;
  align-items: center;
  gap: 8px;
  color: var(--Default-Black, #000);
  font: 700 20px Poppins, sans-serif;
}

.logo-image {
  aspect-ratio: 1.21;
  object-fit: contain;
  width: 29px;
}

.company-name {
  margin: 0;
}

.company-description {
  color: #000;
  margin-top: 20px;
  font: 400 16px/21px Poppins, sans-serif;
}

.social-icons {
  display: flex;
  margin-top: 20px;
  gap: 20px;
}

.social-icon {
  width: 24px;
  height: 24px;
}

.footer-nav {
  display: flex;
  flex-wrap: wrap;
  gap: 40px;
}

.nav-section {
  display: flex;
  flex-direction: column;
  color: #000;
  font: 16px Poppins, sans-serif;
}

.nav-title {
  font-weight: 600;
  margin: 0 0 20px;
}

.nav-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.nav-list li {
  margin-top: 16px;
}

.nav-list li:first-child {
  margin-top: 0;
}

.nav-list a {
  color: inherit;
  text-decoration: none;
}

.store-address {
  font-style: normal;
  line-height: 20px;
  margin: 20px 0;
}

.contact-info {
  line-height: 1;
}

.phone, .email {
  margin: 4px 0;
}

.copyright {
  color: rgba(0, 0, 0, 0.5);
  margin: 20px 0 0;
  font: 400 14px/2 Poppins, sans-serif;
}

@media (max-width: 991px) {
  .footer {
    padding: 40px 20px;
  }

  .copyright {
    margin-left: 10px;
  }
}
</style>