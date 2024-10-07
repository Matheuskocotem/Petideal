<template>
    <section class="founder-info">
      <img src="../Img/Avatar.png" alt="Taylor Joshua, Founder" class="founder-image" />
      <div class="founder-content">
        <h2 class="founder-name">Taylor Joshua</h2>
        <p class="founder-title">Founder</p>
        <p class="founder-description">
          Nisl nunc vitae integer ridiculus ultrices quam a scelerisque est. Sollicitudin volutpat blandit maecenas ornare dictum tempor. Amet sem non rutrum et duis. Id nisi ac vitae enim neque sapien. Eu arcu consectetur etiam bibendum fermentum sed lobortis fringilla imperdiet. Aliquet ultrices risus dolor gravida. Faucibus sodales semper a magnis sapien viverra purus sed tortor. Amet risus blandit nunc odio rutrum. Adipiscing tincidunt imperdiet at cursus ipsum vulputate pharetra. Tellus nulla commodo ut ut auctor orci blandit at elit. Turpis pulvinar sagittis tristique aliquam vitae ipsum dui. Amet tempor posuere mi amet vel lobortis bibendum. Commodo purus tincidunt cursus tellus massa vel viverra.
        </p>
      </div>
    </section>
  </template>
  <script>
  export default {
    name: 'FounderInfo',
  };
  </script>
  
  <style scoped>
  .founder-info {
    display: flex;
    align-items: center;
    padding: 60px 0;
    position: relative;
  }
  
  .founder-image {
    width: 550px;
    height: auto;
    border-radius: 20px;
    object-fit: cover;
    padding-left: 100px;
  }
  
  .founder-content {
    margin-left: 72px;
    max-width: 636px;
  }
  
  .founder-name {
    font-size: 40px;
    font-weight: 600;
    margin-bottom: 20px;
  }
  
  .founder-title {
    font-size: 16px;
    color: rgba(0, 0, 0, 0.6);
    margin-bottom: 40px;
  }
  
  .founder-description {
    font-size: 16px;
    line-height: 26px;
    color: rgba(0, 0, 0, 0.8);
  }
  
  .founder-signature {
    position: absolute;
    bottom: 60px;
    right: 0;
    width: 186px;
    height: auto;
  }
  
  @media (max-width: 991px) {
    .founder-info {
      flex-direction: column;
      padding: 40px 20px;
    }
  
    .founder-image {
      width: 100%;
      max-width: 550px;
      margin-bottom: 40px;
    }
  
    .founder-content {
      margin-left: 0;
    }
  
    .founder-signature {
      position: static;
      margin-top: 40px;
    }
  }
  </style>