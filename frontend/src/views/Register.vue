<template>
    <div id="main">
      <div id="main-container">
        <div id="logoArea">
          <img id="logo" src="../assets/logo.webp" alt="Pet Shop Logo">
        </div>
        <div id="titleArea">
          <h1 class="h1s">Criar Conta</h1>
          <p>Cadastre-se para ter acesso <br> a todos os recursos do Pet Shop</p>
        </div>
        <form id="form" @submit.prevent="registerUser">
          <input type="text" v-model="formData.name" placeholder="Nome" required>
          <input type="text" v-model="formData.surname" placeholder="Sobrenome" required>
          <input type="email" v-model="formData.email" placeholder="Email" required>
          <input type="password" v-model="formData.password" placeholder="Senha" required>
          <input type="password" v-model="formData.confirmPassword" placeholder="Confirmar Senha" required>
          <input type="text" v-model="formattedCpf" @input="updateCpf" placeholder="CPF" required>
          <input type="text" v-model="formData.address" placeholder="Endereço" required>
          <input type="text" v-model="formData.phoneNumber" placeholder="Número de Telefone" required>
          <button type="submit" class="btn btn-primary" @click="registerUser()">Criar Conta</button>
        </form>
        <div id="linkForm">
            <router-link class="link" to="/login">Já tem uma conta? Faça login.</router-link>
        </div>
      </div>
    </div>
  </template>
  
  <script>
import { registerUser } from '@/services/HttpService';

  export default {
    name: 'Register',
    data() {
      return {
        formData: {
          name: '',
          surname: '',
          email: '',
          password: '',
          confirmPassword: '',
          cpf: '',
          address: '',
          phoneNumber: '',
          role: "cliente", 
        },
        formattedCpf: ''
      };
    },
    methods: {
      formatCpf(cpf) {
        cpf = cpf.replace(/\D/g, '');
        if (cpf.length <= 3) return cpf;
        if (cpf.length <= 6) return `${cpf.slice(0, 3)}.${cpf.slice(3)}`;
        if (cpf.length <= 9) return `${cpf.slice(0, 3)}.${cpf.slice(3, 6)}.${cpf.slice(6)}`;
        return `${cpf.slice(0, 3)}.${cpf.slice(3, 6)}.${cpf.slice(6, 9)}-${cpf.slice(9, 11)}`;
      },
      updateCpf(event) {
        const input = event.target.value;
        this.formattedCpf = this.formatCpf(input);
        this.formData.cpf = this.formattedCpf.replace(/\D/g, '');
      },
      async registerUser() {
        if (this.formData.password !== this.formData.confirmPassword) {
          alert("As senhas não coincidem!");
          return;
        }

        try {
          const response = await registerUser(this.formData);  
          if (response.ok) {
            alert('Conta criada com sucesso!');
            this.$router.push('/login');
          } else {
            alert('Erro ao criar conta. Tente novamente.');
          }
        } catch (error) {
          console.error('Erro:', error);
          alert('Erro ao criar conta. Tente novamente.');
        }
      }
    }
  }
  </script>
  
  <style scoped>
#main {
    padding-top: 100px;
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
      padding-bottom: 20px;
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
  