<template>
    <div id="main">
      <div id="main-container">
        <div id="logoArea">
          <!-- Substitua o caminho da imagem pelo correto -->
          <img id="logo" src="../assets/logo.webp" alt="Pet Shop Logo">
        </div>
        <div id="titleArea">
          <h1 class="h1s">Fazer Login</h1>
          <p>Entre com suas credenciais para continuar com a compra</p>
        </div>
        <form id="form" @submit.prevent="loginUser">
          <input type="email" v-model="form.email" placeholder="Email" required>
          <input type="password" v-model="form.password" placeholder="Senha" required>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <div id="linkForm">
            <router-link class="link" to="/register">Não tem uma conta? Crie uma.</router-link>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Login',
    data() {
      return {
        form: {
          email: '',
          password: ''
        }
      };
    },
    methods: {
      async loginUser() {
        try {
          const response = await fetch('/backend/login.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify(this.form)
          });
          
          if (response.ok) {
            alert('Login bem-sucedido!');
            this.$router.push('/cart'); // Substitua com a rota do carrinho ou checkout
          } else {
            alert('Email ou senha incorretos.');
          }
        } catch (error) {
          console.error('Erro:', error);
          alert('Erro ao fazer login. Tente novamente.');
        }
      }
    }
  }
  </script>
  
  <style scoped>
#main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh; 
    margin: 0; 
    background-size: cover;
    background-position: center;
}
  
  #main-container {
      width: 500px; 
      padding: 30px; 
      background-color: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2),  0 4px 12px rgba(0, 0, 0, 0.3);
      text-align: center;
  }
  
  #logoArea img {
      width: 200px; 
      height: auto;
      margin-bottom: 20px;
  }
  
  #titleArea .h1s {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 20px; 
      color: #333;
      margin-bottom: 10px;
  }
  
  #titleArea p {
      font-family: 'Poppins', sans-serif;
      font-size: 14px; 
      color: #555;
  }
  
  #form {
      display: flex;
      flex-direction: column;
      align-items: center;
  }
  
  #form input {
      width: 100%;
      padding: 10px; 
      margin: 8px 0;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 14px; 
      font-family: 'Poppins', sans-serif;
  }
  
  #linkForm {
      display: flex;
      justify-content: center;
      width: 100%;
      margin: 10px 0;
  }
  
  #linkForm .link {
      font-family: 'Poppins', sans-serif;
      font-size: 12px; 
      color: #007BFF;
      text-decoration: none;
      transition: color 0.3s ease;
  }
  
  #linkForm .link:hover {
      color: #0056b3;
  }
  
  #form button {
      width: 100%;
      padding: 10px; 
      border: none;
      border-radius: 8px;
      background-color: #28a745;
      color: white;
      font-size: 14px; 
      font-family: 'Poppins', sans-serif;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 15px;
  }
  
  #form button:hover {
      background-color: #218838;
  }
  </style>
  