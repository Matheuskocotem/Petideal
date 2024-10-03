<template>
    <section class="info-block">
      <div class="text-button-2">
        <div class="text-12">
          <div class="text-13">
            <div class="pet-shop-3">Pet shop</div>
            <h2 class="the-smarter-way-to-shop-for-your-pet">
              The smarter way to shop <br />for your pet
            </h2>
          </div>
          <p class="lorem-ipsum-dolor-sit-amet-consectetur-at-et-vehicula-sodales-est-proin-turpis-pellentesque-sinulla-a-aliquam-amet-rhoncus-quisque-eget-sit">
            Lorem ipsum dolor sit amet consectetur. At et vehicula sodales est proin turpis pellentesque sinulla a aliquam amet rhoncus quisque eget sit
          </p>
        </div>
        <button class="button-2">Learn More</button>
      </div>
      <img loading="lazy" src="http://b.io/ext_78-" class="img-27" alt="Pet shop illustration" />
    </section>
  </template>
  
  <style scoped>
  .info-block {
    background-color: rgba(248, 249, 250, 1);
    position: relative;
    display: flex;
    width: 100%;
    align-items: flex-start;
    overflow: hidden;
    font-family: Poppins, sans-serif;
    justify-content: end;
    padding: 120px 72px;
  }
  @media (max-width: 991px) {
    .info-block {
      max-width: 100%;
      padding: 100px 20px;
    }
  }
  .text-button-2 {
    z-index: 0;
    display: flex;
    min-width: 240px;
    flex-direction: column;
    justify-content: start;
    width: 587px;
    margin: auto 0;
  }
  @media (max-width: 991px) {
    .text-button-2 {
      max-width: 100%;
    }
  }
  .text-12 {
    display: flex;
    max-width: 100%;
    width: 587px;
    flex-direction: column;
    justify-content: start;
  }
  .text-13 {
    display: flex;
    width: 100%;
    flex-direction: column;
    font-weight: 700;
    justify-content: start;
  }
  .pet-shop-3 {
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    color: var(--Orange-500, #fd7e14);
    text-overflow: ellipsis;
    font-size: 16px;
    text-transform: capitalize;
  }
  .the-smarter-way-to-shop-for-your-pet {
    color: rgba(0, 0, 0, 1);
    font-size: 40px;
    margin-top: 20px;
  }
  @media (max-width: 991px) {
    .the-smarter-way-to-shop-for-your-pet {
      max-width: 100%;
    }
  }
  .lorem-ipsum-dolor-sit-amet-consectetur-at-et-vehicula-sodales-est-proin-turpis-pellentesque-sinulla-a-aliquam-amet-rhoncus-quisque-eget-sit {
    color: rgba(0, 0, 0, 0.8);
    font-size: 16px;
    font-weight: 400;
    line-height: 26px;
    margin-top: 40px;
  }
  @media (max-width: 991px) {
    .lorem-ipsum-dolor-sit-amet-consectetur-at-et-vehicula-sodales-est-proin-turpis-pellentesque-sinulla-a-aliquam-amet-rhoncus-quisque-eget-sit {
      max-width: 100%;
    }
  }
  .button-2 {
    leading-trim: both;
    text-edge: cap;
    align-self: start;
    border-radius: 12px;
    background: var(--Default-Black, #000);
    background-color: var(--Default-Black, #000);
    margin-top: 60px;
    min-height: 60px;
    gap: 10px;
    overflow: hidden;
    font-size: 20px;
    color: var(--Default-White, #fff);
    font-weight: 600;
    padding: 23px 40px;
  }
  @media (max-width: 991px) {
    .button-2 {
      margin-top: 40px;
      padding: 0 20px;
    }
  }
  .img-27 {
    aspect-ratio: 1.36;
    object-fit: contain;
    object-position: center;
    width: 799px;
    align-self: start;
    position: absolute;
    z-index: 0;
    min-width: 240px;
    left: -41px;
    top: 0px;
    height: 590px;
  }
  @media (max-width: 991px) {
    .img-27 {
      max-width: 100%;
    }
  }
  </style>