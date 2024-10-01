<template>
  <div class="header-container">
    <div class="logo-container">
      <div class="icon-container">
        <img src="../assets/Group.svg" alt="Icon" />
      </div>
      <div class="logo-text">Pet Ideal</div>
    </div>
    <nav class="nav-links">
      <div
        class="nav-link"
        v-for="link in navLinks"
        :key="link.label"
        :class="{ active: link.isActive }"
        @click="handleLinkClick(link.label)"
      >
        {{ link.label }}
      </div>
    </nav>
    <div class="search-cart-container">
      <div class="search-bar">
        <div class="search-placeholder">Search products...</div>
        <div class="search-icon">
          <i class="fas fa-search"></i>
        </div>
      </div>
      <div class="favorites-icon">
        <i class="fas fa-heart"></i>
      </div>
      <div class="cart-icon">
        <i class="fas fa-shopping-cart cart-icon-img"></i>
        <div class="cart-item-count">0</div>
      </div>
      <div class="notification-icon">
        <div class="notification-inner">
          <i class="fas fa-bell notification-icon-img"></i>
          <div class="notification-item-count">0</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Nav",
  data() {
    return {
      navLinks: [
        { label: "Home", isActive: true },
        { label: "Shop", isActive: false },
        { label: "About Us", isActive: false },
        { label: "Contact Us", isActive: false },
      ],
    };
  },
  methods: {
    handleLinkClick(label) {
      this.navLinks = this.navLinks.map((link) => ({
        ...link,
        isActive: link.label === label,
      }));
    },
  },
};
</script>

<style scoped>
.header-container {
  width: 100%;
  padding: 16px 40px;
  background: white;
  box-shadow: 0px 16px 12px rgba(0, 0, 0, 0.03);
  border-radius: 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo-container {
  display: flex;
  align-items: center;
  gap: 8px;
}

.icon-container {
  width: 29.27px;
  height: 24px;
  position: relative;
}

.icon-part {
  width: 21.59px;
  height: 14.24px;
  position: absolute;
}

.icon-part img {
  width: 100%;
  height: auto;
}

.logo-text {
  color: black;
  font-size: 20px;
  font-family: 'Poppins', sans-serif;
  font-weight: 700;
}

.nav-links {
  display: flex;
  gap: 24px;
}

.nav-link {
  padding: 8px 12px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: black;
  font-size: 18px;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  cursor: pointer;
}

.nav-link.active {
  border-bottom: 2px #FD7E14 solid;
  color: #FD7E14;
  font-weight: 600;
}

.search-cart-container {
  display: flex;
  align-items: flex-start;
  gap: 24px;
}

.search-bar {
  width: 280px;
  height: 40px;
  background: #F8F9FA;
  border-radius: 20px;
  display: flex;
  align-items: center;
  padding: 9px 16px 9px 5px;
}

.search-placeholder {
  flex: 1;
  color: rgba(0, 0, 0, 0.6);
  font-size: 16px;
  font-family: 'Poppins', sans-serif;
  font-weight: 400;
}

.search-icon {
  width: 28px;
  height: 28px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.favorites-icon {
  width: 24px;
  height: 24px;
}

.favorites-icon i {
  font-size: 24px;
  color: black;
}

.cart-icon {
  position: relative;
  width: 24px;
  height: 24px;
}

.cart-icon-img {
  font-size: 24px;
}

.cart-item-count {
  color: white;
  font-size: 10px;
  font-family: 'Inter', sans-serif;
  font-weight: 400;
  text-align: center;
  position: absolute;
  top: 0;
  right: 0;
}

.notification-icon {
  width: 24px;
  height: 24px;
  position: relative;
}

.notification-inner {
  width: 24px;
  height: 24px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.notification-icon-img {
  font-size: 24px;
}

.notification-item-count {
  color: white;
  font-size: 10px;
  font-family: 'Inter', sans-serif;
  font-weight: 400;
  text-align: center;
  position: absolute;
  top: 0;
  right: 0;
}
</style>
