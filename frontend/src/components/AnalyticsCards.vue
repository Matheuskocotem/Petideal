<template>
    <div class="div-9">
      <div class="div-10">
        <div class="column">
          <div class="div-11">
            <div class="analytics">Analytics</div>
            <div class="card">
              <div class="text">
                <div class="icon">
                  <div class="pepole">
                    <img loading="lazy" src="http://b.io/ext_20-" class="img-7" />
                  </div>
                </div>
                <div class="total-customer">
                  <div class="total-customer-2">Total de clientes</div>
                  <div class="120">120</div>
                </div>
              </div>
              <div class="show-details">Show Details</div>
            </div>
          </div>
        </div>
        <div class="column-2">
          <div class="frame">
            <div class="text">
              <div class="icon-2">
                <div class="pepole-2">
                  <img loading="lazy" src="http://b.io/ext_21-" class="img-8" />
                </div>
              </div>
              <div class="total-customer">
                <div class="total-customer-3">Total de Vendas</div>
                <div class="120-2">234</div>
              </div>
            </div>
            <div class="show-details">Show Details</div>
          </div>
        </div>
        <div class="column-3">
          <div class="frame">
            <div class="text">
              <div class="icon-3">
                <div class="pepole-3">
                  <img loading="lazy" src="http://b.io/ext_22-" class="img-9" />
                </div>
              </div>
              <div class="total-customer-4">
                <div class="total-customer-5">Total de Lucro</div>
                <div class="120-3">R$10.000,00</div>
              </div>
            </div>
            <div class="show-details">Show Details</div>
          </div>
        </div>
        <div class="column-4">
          <div class="frame">
            <div class="text">
              <div class="icon-4">
                <div class="pepole-4">
                  <img loading="lazy" src="http://b.io/ext_23-" class="img-10" />
                </div>
              </div>
              <div class="total-customer">
                <div class="total-customer-6">Fora de estoqueh</div>
                <div class="120-4">56</div>
              </div>
            </div>
            <div class="show-details">Show Details</div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'AnalyticsCards'
  };
  </script>
  
  <style scoped>
  .div-9 {
    width: 100%;
    max-width: 1170px;
  }
  @media (max-width: 991px) {
    .div-9 {
      max-width: 100%;
    }
  }
  .div-10 {
    gap: 20px;
    display: flex;
  }
  @media (max-width: 991px) {
    .div-10 {
      flex-direction: column;
      align-items: stretch;
      gap: 0px;
    }
  }
  .column {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 25%;
    margin-left: 0px;
  }
  @media (max-width: 991px) {
    .column {
      width: 100%;
    }
  }
  .div-11 {
    display: flex;
    flex-grow: 1;
    flex-direction: column;
  }
  @media (max-width: 991px) {
    .div-11 {
      margin-top: 32px;
    }
  }
  .analytics {
    color: rgba(0, 0, 0, 1);
    align-self: start;
    font: 600 40px Montserrat, sans-serif;
  }
  .card {
    justify-content: center;
    border-radius: 10px;
    background: var(--Demo-White, #fff);
    box-shadow: 0px 4px 4px 0px rgba(0, 1, 9, 0.1);
    background-color: var(--Demo-White, #fff);
    display: flex;
    margin-top: 19px;
    flex-direction: column;
    padding: 16px 27px 16px 20px;
  }
  @media (max-width: 991px) {
    .card {
      padding-right: 20px;
    }
  }
  .text {
    display: flex;
    align-items: center;
    gap: 16px;
    justify-content: start;
  }
  .icon {
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    background: var(--B4, #edeffe);
    background-color: var(--B4, #edeffe);
    align-self: stretch;
    display: flex;
    min-height: 54px;
    gap: 10px;
    width: 54px;
    height: 54px;
    margin: auto 0;
    padding: 0 5px;
  }
  .pepole {
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    background: var(--Blue, #5065f6);
    background-color: var(--Blue, #5065f6);
    align-self: stretch;
    display: flex;
    width: 44px;
    gap: 10px;
    height: 44px;
    margin: auto 0;
    padding: 0 10px;
  }
  .img-7 {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 24px;
    align-self: stretch;
    margin: auto 0;
  }
  .total-customer {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    font-family: Manrope, sans-serif;
    justify-content: start;
    width: 149px;
    margin: auto 0;
  }
  .total-customer-2 {
    color: var(--Demo-Demo-3, #323343);
    font-size: 18px;
    font-weight: 500;
    line-height: 1;
  }
  .show-details {
    color: var(--Green, #28b95e);
    margin-top: 26px;
    font: 400 12px Rubik, sans-serif;
  }
  .column-2 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 25%;
    margin-left: 20px;
  }
  @media (max-width: 991px) {
    .column-2 {
      width: 100%;
    }
  }
  .frame {
    justify-content: center;
    border-radius: 10px;
    background: var(--Demo-White, #fff);
    box-shadow: 0px 4px 4px 0px rgba(0, 1, 9, 0.1);
    background-color: var(--Demo-White, #fff);
    display: flex;
    margin-top: 68px;
    flex-direction: column;
    width: 100%;
    padding: 16px 27px 16px 20px;
  }
  @media (max-width: 991px) {
    .frame {
      margin-top: 40px;
      padding-right: 20px;
    }
  }
  .icon-2 {
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    background: var(--G4, #e9f9ef);
    background-color: var(--G4, #e9f9ef);
    align-self: stretch;
    display: flex;
    min-height: 54px;
    gap: 10px;
    width: 54px;
    height: 54px;
    margin: auto 0;
    padding: 0 5px;
  }
  .pepole-2 {
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    background: var(--Green, #28b95e);
    background-color: var(--Green, #28b95e);
    align-self: stretch;
    display: flex;
    width: 44px;
    gap: 10px;
    height: 44px;
    margin: auto 0;
    padding: 0 10px;
  }
  .img-8 {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 24px;
    align-self: stretch;
    margin: auto 0;
  }
  .total-customer-3 {
    color: var(--Demo-Demo-3, #323343);
    font-size: 18px;
    font-weight: 500;
    line-height: 1;
  }
  .column-3 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 25%;
    margin-left: 20px;
  }
  @media (max-width: 991px) {
    .column-3 {
      width: 100%;
    }
  }
  .icon-3 {
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    background: var(--Y-4, #fff8da);
    background-color: var(--Y-4, #fff8da);
    align-self: stretch;
    display: flex;
    min-height: 54px;
    gap: 10px;
    width: 54px;
    height: 54px;
    margin: auto 0;
    padding: 0 5px;
  }
  .pepole-3 {
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    background: var(--Yellow, #ffdb45);
    background-color: var(--Yellow, #ffdb45);
    align-self: stretch;
    display: flex;
    width: 44px;
    gap: 10px;
    height: 44px;
    margin: auto 0;
    padding: 0 10px;
  }
  .img-9 {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 24px;
    align-self: stretch;
    margin: auto 0;
  }
  .total-customer-4 {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    font-family: Manrope, sans-serif;
    justify-content: start;
    margin: auto 0;
  }
  .total-customer-5 {
    color: var(--Demo-Demo-3, #323343);
    font-size: 18px;
    font-weight: 500;
    line-height: 1;
  }
  .column-4 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 25%;
    margin-left: 20px;
  }
  @media (max-width: 991px) {
    .column-4 {
      width: 100%;
    }
  }
  .icon-4 {
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    background: var(--Red-4, #fdedf0);
    background-color: var(--Red-4, #fdedf0);
    align-self: stretch;
    display: flex;
    min-height: 54px;
    gap: 10px;
    width: 54px;
    height: 54px;
    margin: auto 0;
    padding: 0 5px;
  }
  .pepole-4 {
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    background: var(--Red, #f04b69);
    background-color: var(--Red, #f04b69);
    align-self: stretch;
    display: flex;
    width: 44px;
    gap: 10px;
    height: 44px;
    margin: auto 0;
    padding: 0 10px;
  }
  .img-10 {
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center;
    width: 24px;
    align-self: stretch;
    margin: auto 0;
  }
  .total-customer-6 {
    color: var(--Demo-Demo-3, #323343);
    font-size: 18px;
    font-weight: 500;
    line-height: 1;
  }
  </style>