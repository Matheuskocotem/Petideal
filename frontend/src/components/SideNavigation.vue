<template>
    <nav class="side-navigation">
      <ul class="nav-list">
        <li v-for="item in navItems" :key="item.name" class="nav-item">
          <router-link :to="item.route" class="nav-link">
            <img :src="item.icon" alt="" class="nav-icon" />
            <span class="nav-text">{{ item.name }}</span>
          </router-link>
        </li>
      </ul>
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/752a9d0d-d2ac-4988-9ab3-7137a5eecdf1?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" alt="Navigation footer image" class="nav-footer-image" />
    </nav>
  </template>
  
  <script>
  export default {
    name: 'SideNavigation',
    data() {
      return {
        navItems: [
          {
            name: 'Dashboard',
            icon: 'https://cdn.builder.io/api/v1/image/assets/TEMP/0ad64107b0c5b9377fa39b879714833ea2dad3b829a2101d9f10d9debe5ff07e?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c',
            route: '/homepage',
          },
          {
            name: 'Stock In',
            icon: 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ccf33c9816b13e3f1932f7e4ec91ea3a2818d1ef20cf621d347455c58feafff?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c',
            route: '/stock-in', 
          },
          {
            name: 'Stock Out',
            icon: 'https://cdn.builder.io/api/v1/image/assets/TEMP/e0613bb7bf88ee03ac499ba5d4886bb1f8e51b4815cf603ea8751d3b9f2d454e?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c',
            route: '/stock-out', 
          },
          {
            name: 'Accounting',
            icon: 'https://cdn.builder.io/api/v1/image/assets/TEMP/6bb9769eeaf531dfb078a496988d707ad948ef1efba6e9f91900a590b85bd2cd?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c',
            route: '/accounting', 
          },
          {
            name: 'Users',
            icon: 'https://cdn.builder.io/api/v1/image/assets/TEMP/c91e68192a05ac62d13b6f4096391195c420a58d9b9eb13acd5a82c14f265a53?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c',
            route: '/users', 
          },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  .side-navigation {
    border-radius: 10px;
    background-color: rgba(255, 153, 51, 0);
    box-shadow: 0 2px 4px rgba(20, 17, 17, 0.71);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px 12px;
    margin-left: 4px; /* Aumenta a distância da esquerda */
    border: 2px solid #ffae35;
  }
  
  .nav-list {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }
  
  .nav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 18px;
  }
  
  .nav-link {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none; /* Remove o sublinhado padrão */
    color: inherit; /* Herda a cor do texto */
    cursor: pointer; /* Muda o cursor para pointer ao passar o mouse */
  }
  
  .nav-icon {
    width: 70px;
    height: 70px;
    object-fit: contain;
  }
  
  .nav-text {
    color: #000;
    font-weight: 600;
    font-size: 15px;
    font-family: Montserrat, sans-serif;
    margin-top: 5px;
  }
  
  .nav-footer-image {
    width: 100%;
    margin-top: 10px;
  }
  
  @media (max-width: 991px) {
    .side-navigation {
      padding-bottom: 100px;
    }
  
    .nav-footer-image {
      margin-bottom: 10px;
    }
  }
  </style>
  