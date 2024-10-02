<template>
  <div class="hero">
    <img class="shape" src="#" />
    <div class="header">
      <div class="icons-text">
        <div class="icon-text">
          <img class="phone" src="../Img/Telefoninho.png" />
          <div class="_379-871-8371">+379 871-8371</div>
        </div>
        <div class="icon-text">
          <img class="mail" src="../Img/carta.png" />
          <div class="rgarton-outlook-com">rgarton@outlook.com</div>
        </div>
      </div>
      <div class="icon-text2">
        <img class="map-pin" src="../Img/location.png" />
        <div class="_8592-fairground-st-tallahassee-fl-32303">
          8592 Fairground St. Tallahassee, FL 32303
        </div>
      </div>
    </div>
    <div class="header-2">
      <div class="logo">
        <img class="group" src="../Img/patinnha.png" />
        <div class="pet-shop">Pet Shop</div>
      </div>
      <div class="menu">
        <div class="text">
          <div class="home">Home</div>
        </div>
        <div class="text2">
          <div class="shop">Shop</div>
        </div>
        <div class="text">
          <div class="about-us">About Us</div>
        </div>
        <div class="text">
          <div class="contact-us">Contact Us</div>
        </div>
      </div>
      <div class="input-icons">
        <div class="input">
          <div class="search-products">Search products...</div>
          <div class="icon-bg">
            <img class="search" src="../Img/search.png" />
          </div>
        </div>
        <div class="icons">
          <div class="heart">
            <i class="fas fa-heart"></i> 
            <div class="frame-11">
              <div class="_0">0</div>
            </div>
          </div>
          <div class="shopping-cart">
            <i class="fas fa-shopping-cart"></i> 
            <div class="frame-11">
              <div class="_0">0</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="frame-422">
      <div class="text3">
        <div class="text4">
          <div class="pet-shop2">Pet shop</div>
          <div class="the-friendly-and-caring-small-pet-store">
            The friendly and
            <br />
            caring small pet store
          </div>
        </div>
        <div
          class="at-et-vehicula-sodales-est-proin-turpis-pellentesque-sinulla-a-aliquam-amet-rhoncus-quisque-eget-sit"
        >
          At et vehicula sodales est proin turpis pellentesque sinulla a aliquam
          amet rhoncus quisque eget sit
        </div>
      </div>
      <div class="frame-421">
        <img class="shapes" src="#" />
        <img class="pattern-paws" src="#" />
        <img class="img" src="#" />
      </div>
    </div>
    <img class="shape2" src="#" />
    <img class="shape3" src="#" />
    <img class="img2" src="#" />
  </div>
</template>
<script>
export default {
  name: "Hero",
  components: {},
  props: {},
  data() {},
};
</script>
<style scoped>
.hero,
.hero * {
  box-sizing: border-box;
}
.hero {
  background: var(--gray-100, #f8f9fa);
  padding: 0px 72px 0px 72px;
  display: flex;
  flex-direction: column;
  gap: 0px;
  align-items: flex-start;
  justify-content: flex-start;
  flex-shrink: 0;
  position: relative;
  overflow: hidden;
}
.shape {
  flex-shrink: 0;
  width: 122.99px;
  height: 130.93px;
  position: absolute;
  left: 669.28px;
  top: 193.42px;
  transform: translate(-149.21px, -102.82px);
  overflow: visible;
}
.header {
  background: var(--gray-100, #f8f9fa);
  padding: 24px 0px 24px 0px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  align-self: stretch;
  flex-shrink: 0;
  position: relative;
}
.icons-text {
  display: flex;
  flex-direction: row;
  gap: 24px;
  align-items: flex-start;
  justify-content: flex-start;
  flex-shrink: 0;
  position: relative;
}
.icon-text {
  display: flex;
  flex-direction: row;
  gap: 8px;
  align-items: center;
  justify-content: flex-start;
  flex-shrink: 0;
  position: relative;
}
.phone {
  flex-shrink: 0;
  width: 24px;
  height: 24px;
  position: relative;
  overflow: visible;
}
._379-871-8371 {
  color: #000000;
  text-align: left;
  font-family: "Poppins-Medium", sans-serif;
  font-size: 16px;
  line-height: 20px;
  font-weight: 500;
  position: relative;
}
.mail {
  flex-shrink: 0;
  width: 24px;
  height: 24px;
  position: relative;
  overflow: visible;
}
.rgarton-outlook-com {
  color: #000000;
  text-align: left;
  font-family: "Poppins-Medium", sans-serif;
  font-size: 16px;
  line-height: 20px;
  font-weight: 500;
  position: relative;
}
.icon-text2 {
  display: flex;
  flex-direction: row;
  gap: 24px;
  align-items: flex-start;
  justify-content: flex-start;
  flex-shrink: 0;
  position: relative;
}
.map-pin {
  flex-shrink: 0;
  width: 24px;
  height: 24px;
  position: relative;
  overflow: visible;
}
._8592-fairground-st-tallahassee-fl-32303 {
  color: #000000;
  text-align: left;
  font-family: "Poppins-Medium", sans-serif;
  font-size: 16px;
  line-height: 20px;
  font-weight: 500;
  position: relative;
}
.header-2 {
  background: #ffffff;
  border-radius: 40px;
  padding: 24px 40px 24px 40px;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  align-self: stretch;
  flex-shrink: 0;
  position: relative;
  box-shadow: 0px 16px 12px 0px rgba(0, 0, 0, 0.03);
}
.logo {
  display: flex;
  flex-direction: row;
  gap: 8px;
  align-items: center;
  justify-content: flex-start;
  flex-shrink: 0;
  position: relative;
}
.group {
  flex-shrink: 0;
  width: 29.27px;
  height: 24px;
  position: relative;
  overflow: visible;
}
.pet-shop {
  color: var(--default-black, #000000);
  text-align: left;
  font-family: "Poppins-Bold", sans-serif;
  font-size: 20px;
  font-weight: 700;
  position: relative;
}
.menu {
  display: flex;
  flex-direction: row;
  gap: 24px;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  position: relative;
}
.text {
  padding: 4px 10px 4px 10px;
  display: flex;
  flex-direction: row;
  gap: 10px;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  position: relative;
}
.home {
  color: var(--default-black, #000000);
  text-align: left;
  font-family: "Poppins-Medium", sans-serif;
  font-size: 20px;
  font-weight: 500;
  position: relative;
}
.text2 {
  border-style: solid;
  border-color: var(--orange-500, #fd7e14);
  border-width: 0px 0px 2px 0px;
  padding: 4px 10px 4px 10px;
  display: flex;
  flex-direction: row;
  gap: 10px;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  position: relative;
}
.shop {
  color: var(--orange-500, #fd7e14);
  text-align: left;
  font-family: "Poppins-SemiBold", sans-serif;
  font-size: 20px;
  font-weight: 600;
  position: relative;
}
.about-us {
  color: var(--default-black, #000000);
  text-align: left;
  font-family: "Poppins-Medium", sans-serif;
  font-size: 20px;
  font-weight: 500;
  position: relative;
}
.contact-us {
  color: var(--default-black, #000000);
  text-align: left;
  font-family: "Poppins-Medium", sans-serif;
  font-size: 20px;
  font-weight: 500;
  position: relative;
}
.input-icons {
  display: flex;
  flex-direction: row;
  gap: 24px;
  align-items: center;
  justify-content: flex-start;
  flex-shrink: 0;
  position: relative;
}
.input {
  background: #f8f9fa;
  border-radius: 20px;
  padding: 9px 5px 9px 16px;
  display: flex;
  flex-direction: row;
  gap: 8px;
  align-items: center;
  justify-content: flex-start;
  flex-shrink: 0;
  width: 280px;
  height: 40px;
  position: relative;
}
.search-products {
  color: rgba(0, 0, 0, 0.6);
  text-align: left;
  font-family: "Poppins-Regular", sans-serif;
  font-size: 16px;
  line-height: 20px;
  font-weight: 400;
  position: relative;
  flex: 1;
}
.icon-bg {
  background: var(--default-black, #000000);
  border-radius: 50px;
  flex-shrink: 0;
  width: 28px;
  height: 28px;
  position: relative;
  overflow: hidden;
}
.search {
  width: 20px;
  height: 20px;
  position: absolute;
  left: 4px;
  top: 4px;
  overflow: visible;
}
.icons {
  display: flex;
  flex-direction: row;
  gap: 24px;
  align-items: flex-start;
  justify-content: flex-start;
  flex-shrink: 0;
  position: relative;
}
.heart {
  flex-shrink: 0;
  width: 24px;
  height: 24px;
  position: relative;
}
.vector {
  width: 87.1%;
  height: 75.97%;
  position: absolute;
  right: 6.46%;
  left: 6.45%;
  bottom: 11.54%;
  top: 12.49%;
  overflow: visible;
}
.frame-11 {
  background: var(--orange-500, #fd7e14);
  border-radius: 50px;
  border-style: solid;
  border-color: var(--default-white, #ffffff);
  border-width: 1px;
  padding: 10px;
  display: flex;
  flex-direction: row;
  gap: 10px;
  align-items: center;
  justify-content: center;
  width: 50%;
  height: 50%;
  position: absolute;
  right: -25%;
  left: 75%;
  bottom: 75%;
  top: -25%;
}
._0 {
  color: var(--default-white, #ffffff);
  text-align: center;
  font-family: "Inter-Regular", sans-serif;
  font-size: 10px;
  line-height: 20px;
  font-weight: 400;
  position: relative;
}
.shopping-cart {
  flex-shrink: 0;
  width: 24px;
  height: 24px;
  position: relative;
}
.vector2 {
  width: 8.33%;
  height: 8.33%;
  position: absolute;
  right: 58.33%;
  left: 33.33%;
  bottom: 8.33%;
  top: 83.33%;
  overflow: visible;
}
.vector3 {
  width: 8.33%;
  height: 8.33%;
  position: absolute;
  right: 12.5%;
  left: 79.17%;
  bottom: 8.33%;
  top: 83.33%;
  overflow: visible;
}
.vector4 {
  width: 91.67%;
  height: 62.5%;
  position: absolute;
  right: 4.17%;
  left: 4.17%;
  bottom: 33.33%;
  top: 4.17%;
  overflow: visible;
}
.frame-422 {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  flex-shrink: 0;
  width: 1266px;
  position: relative;
}
.text3 {
  display: flex;
  flex-direction: column;
  gap: 45px;
  align-items: flex-start;
  justify-content: center;
  align-self: stretch;
  flex-shrink: 0;
  position: relative;
}
.text4 {
  display: flex;
  flex-direction: column;
  gap: 20px;
  align-items: flex-start;
  justify-content: flex-start;
  flex-shrink: 0;
  position: relative;
}
.pet-shop2 {
  color: var(--orange-500, #fd7e14);
  text-align: left;
  font-family: "Poppins-Bold", sans-serif;
  font-size: 16px;
  font-weight: 700;
  position: relative;
  text-overflow: ellipsis;
  overflow: hidden;
}
.the-friendly-and-caring-small-pet-store {
  color: #000000;
  text-align: left;
  font-family: "Poppins-Bold", sans-serif;
  font-size: 54px;
  font-weight: 700;
  position: relative;
  width: 647px;
  text-overflow: ellipsis;
  overflow: hidden;
}
.at-et-vehicula-sodales-est-proin-turpis-pellentesque-sinulla-a-aliquam-amet-rhoncus-quisque-eget-sit {
  color: rgba(0, 0, 0, 0.8);
  text-align: left;
  font-family: "Poppins-Regular", sans-serif;
  font-size: 16px;
  line-height: 160%;
  font-weight: 400;
  position: relative;
  width: 479px;
  text-overflow: ellipsis;
  overflow: hidden;
}
.frame-421 {
  flex-shrink: 0;
  width: 536px;
  height: 515px;
  position: relative;
}
.shapes {
  width: 633px;
  height: 612px;
  position: absolute;
  left: -29px;
  top: 25px;
  overflow: visible;
}
.pattern-paws {
  width: 149.02%;
  height: 70.95%;
  position: absolute;
  right: -19.35%;
  left: -29.66%;
  bottom: 20.9%;
  top: 8.16%;
  overflow: visible;
}
.img {
  width: 66.04%;
  height: 85.44%;
  position: absolute;
  right: -52.8%;
  left: 86.75%;
  bottom: -0.39%;
  top: 14.95%;
  transform-origin: 0 0;
  transform: rotate(0deg) scale(-1, 1);
  object-fit: cover;
}
.shape2 {
  flex-shrink: 0;
  width: 122.99px;
  height: 130.93px;
  position: absolute;
  left: 318px;
  top: 740.52px;
  transform: translate(4.8px, -124.31px);
  overflow: visible;
}
.shape3 {
  flex-shrink: 0;
  width: 101.31px;
  height: 107.85px;
  position: absolute;
  left: 36.95px;
  top: 488.13px;
  transform: translate(-36.95px, -109.08px);
  overflow: visible;
}
.img2 {
  flex-shrink: 0;
  width: 142px;
  height: 142px;
  position: absolute;
  left: 593px;
  top: 244px;
  object-fit: cover;
}
</style>
