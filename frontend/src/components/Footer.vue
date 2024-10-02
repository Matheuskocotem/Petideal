<template>
    <footer class="site-footer">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7fe34686b855dce8264e2c69ffecb25552e076e65cd39cc3aa9bbb00fff70140?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="" class="footer-decoration" />
      <div class="footer-content">
        <div class="footer-column">
          <div class="footer-logo">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/704f9731df0a74470008a02973fc419b1c146349aeeef6fbe0338db4deb3a21a?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Pet Shop logo" class="logo-image" />
            <span class="logo-text">Pet Shop</span>
          </div>
          <p class="footer-description">
            Sed viverra eget fames sit varius. Pellentesque mattis libero viverra dictumst ornaresed justo convallis vitae
          </p>
          <div class="social-icons">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/5b5ef3b0a653aa48895bde6f65d47701f39ab768dcd2f12807b59fddd8e16283?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Facebook" class="social-icon" />
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/882f8c526bc1c41b0a231dcd5b1b2b5fe9508ec797cbf42834d3a500c6d393e9?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Twitter" class="social-icon" />
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8d7cab0d89f8d1ad71cfa55e59840b561ec2252735af430821f2de6b2910e998?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Instagram" class="social-icon" />
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6ed0d4d0a2532626efc126335d351503b6158238d2ec819aced141c3911d9cc9?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="YouTube" class="social-icon" />
          </div>
        </div>
        <div class="footer-column">
          <h3 class="footer-heading">Company</h3>
          <ul class="footer-links">
            <li><a href="#" class="footer-link">About Us</a></li>
            <li><a href="#" class="footer-link">Blog</a></li>
            <li><a href="#" class="footer-link">Gift cards</a></li>
            <li><a href="#" class="footer-link">Careers</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3 class="footer-heading">Useful Links</h3>
          <ul class="footer-links">
            <li><a href="#" class="footer-link">New products</a></li>
            <li><a href="#" class="footer-link">Best sellers</a></li>
            <li><a href="#" class="footer-link">Discount</a></li>
            <li><a href="#" class="footer-link">F.A.Q</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3 class="footer-heading">Customer Service</h3>
          <ul class="footer-links">
            <li><a href="#" class="footer-link">Contact Us</a></li>
            <li><a href="#" class="footer-link">Shipping</a></li>
            <li><a href="#" class="footer-link">Returns</a></li>
            <li><a href="#" class="footer-link">Order tracking</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3 class="footer-heading">Store</h3>
          <address class="store-address">
            8592 Fairground St.<br />
            Tallahassee, FL 32303
          </address>
          <p class="store-contact">
            +775 378-6348<br />
            rgarton@outlook.com
          </p>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="copyright">&copy; Copyright Pet Shop 2024. Design by Figma. guru</p>
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a68a999bcba7eb9bdb7ba54032de856c27b2f70e35542fdae2d7ddbe49aa8f90?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Payment methods" class="payment-methods" />
      </div>
    </footer>
  </template>
  
  <style scoped>
  .site-footer {
    background-color: #f8f9fa;
    padding: 72px;
    font-family: Poppins, sans-serif;
    position: relative;
  }
  
  .footer-decoration {
    position: absolute;
    right: -53px;
    bottom: 0;
    width: 211px;
    height: 219px;
  }
  
  .footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 40px;
  }
  
  .footer-column {
    flex: 1;
    min-width: 200px;
  }
  
  .footer-logo {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .logo-image {
    width: 29px;
    height: 35px;
    margin-right: 8px;
  }
  
  .logo-text {
    font-size: 20px;
    font-weight: 700;
    color: #000;
  }
  
  .footer-description {
    font-size: 16px;
    line-height: 21px;
    color: #000;
    margin-bottom: 20px;
  }
  
  .social-icons {
    display: flex;
    gap: 20px;
  }
  
  .social-icon {
    width: 24px;
    height: 24px;
  }
  
  .footer-heading {
    font-size: 16px;
    font-weight: 600;
    color: #000;
    margin-bottom: 20px;
  }
  
  .footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .footer-link {
    color: #000;
    text-decoration: none;
    font-size: 16px;
    line-height: 32px;
  }
  
  .store-address,
  .store-contact {
    font-style: normal;
    font-size: 16px;
    line-height: 20px;
    color: #000;
    margin-bottom: 20px;
  }
  
  .footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 60px;
    padding-top: 20px;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
  }
  
  .copyright {
    font-size: 14px;
    color: rgba(0, 0, 0, 0.5);
  }
  
  .payment-methods {
    height: 24px;
  }
  
  @media (max-width: 991px) {
    .site-footer {
      padding: 40px 20px;
    }
  
    .footer-decoration {
      display: none;
    }
  
    .footer-content {
      flex-direction: column;
    }
  
    .footer-bottom {
      flex-direction: column;
      gap: 20px;
    }
  }
  </style>