<template>
    <div class="column-10">
      <div class="todays-reports">
        <div class="todays-report">Gráfico de hoje</div>
        <div class="div-35"></div>
        <div class="div-36">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/3d14458400d302b21a2c26f816a7a9d178a8ca8dd2b0f2a59ad910d3834c9ddc?placeholderIfAbsent=true&apiKey=d4a7c2ebb0b24556b026be03e1ca8f9c" class="img-26" />
          <div class="div-37">
            <div class="div-38">
              <div class="total-sale">
                <div class="total-earning">Total Vendas</div>
                <div class="5098-00">$5098.00</div>
              </div>
              <div class="35">35%</div>
            </div>
            <div class="total-purchase">Compra total</div>
            <div class="cash-received">Dinheiro recebido</div>
            <div class="bank-services">Lucro</div>
            <div class="total-service">custo</div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'TodayChart'
  };
  </script>
  
  <style scoped>
  .column-10 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 37%;
    margin-left: 20px;
  }
  @media (max-width: 991px) {
    .column-10 {
      width: 100%;
    }
  }
  .todays-reports {
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 1);
    display: flex;
    width: 100%;
    flex-direction: column;
    overflow: hidden;
    font-family: Manrope, sans-serif;
    margin: 0 auto;
    padding: 25px 0;
  }
  @media (max-width: 991px) {
    .todays-reports {
      margin-top: 40px;
    }
  }
  .todays-report {
    color: var(--Natural-Color, #262626);
    font-size: 20px;
    font-weight: 200;
    line-height: 1.3;
    align-self: start;
    margin-left: 30px;
  }
  @media (max-width: 991px) {
    .todays-report {
      margin-left: 10px;
    }
  }
  .div-35 {
    background-color: rgba(239, 239, 239, 0.6);
    display: flex;
    margin-top: 10px;
    height: 1px;
  }
  .div-36 {
    align-self: center;
    display: flex;
    margin-top: 23px;
    width: 350px;
    max-width: 100%;
    gap: 20px;
    justify-content: space-between;
  }
  .img-26 {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 196px;
    max-width: 100%;
  }
  .div-37 {
    align-self: start;
    display: flex;
    flex-direction: column;
    align-items: start;
  }
  .div-38 {
    align-self: stretch;
    display: flex;
  }
  @media (max-width: 991px) {
    .div-38 {
      margin-right: 3px;
    }
  }
  .total-sale {
    display: flex;
    flex-direction: column;
    justify-content: start;
  }
  .total-earning {
    color: var(--Natural-5, #9ea3a7);
    font-size: 16px;
    font-weight: 500;
  }
 
  .total-purchase {
    align-self: stretch;
    margin-top: 30px;
    gap: 6px;
    font-size: 14px;
    color: var(--Gray, #757b82);
    font-weight: 400;
    line-height: 1;
  }
  .cash-received {
    align-self: stretch;
    margin-top: 6px;
    gap: 6px;
    font-size: 14px;
    color: var(--Gray, #757b82);
    font-weight: 400;
    line-height: 1;
  }
  .bank-services {
    align-self: stretch;
    margin-top: 6px;
    gap: 6px;
    font-size: 14px;
    color: var(--Gray, #757b82);
    font-weight: 400;
    white-space: nowrap;
    line-height: 1;
  }
  @media (max-width: 991px) {
    .bank-services {
      white-space: initial;
    }
  }
  .total-service {
    align-self: stretch;
    margin-top: 6px;
    gap: 6px;
    font-size: 14px;
    color: var(--Gray, #757b82);
    font-weight: 400;
    white-space: nowrap;
    line-height: 1;
  }
  @media (max-width: 991px) {
    .total-service {
      white-space: initial;
    }
  }
  </style>