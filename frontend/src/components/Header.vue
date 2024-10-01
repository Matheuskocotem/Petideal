<template>
  <div>
    <nav class="navbar bg-body-tertiary header">
      <div class="container-fluid mx-5">
        <div class="navbar-brand">
          <img
            src="../Img/logo.webp"
            alt="Logo"
            class="img-fluid"
            style="max-width: 120px"
          />
        </div>
        <form class="d-flex" role="search" style="width: 35%">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Buscar Produtos"
            aria-label="Search"
          />
          <button class="btn customBtn" type="submit">Buscar</button>
        </form>
        <div>
          <i class="bi bi-cart4 icon px-2"></i>
          <i class="bi bi-person-fill icon px-2"></i>
        </div>
      </div>
    </nav>
    <div>
      <img src="../Img/boaimg.webp" class="img-fluid"/>
    </div>
  </div>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style scoped>
.header {
  border: solid 1px #622d89;
}
.customBtn {
  background-color: white;
  color: #622d89;
  border: solid 1px #622d89;
}
.customBtn:hover {
  background-color: #622d89;
  color: white;
}
.icon {
  color: #622d89;
  font-size: 30px;
}
</style>
