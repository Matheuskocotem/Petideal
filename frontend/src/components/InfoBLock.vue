<template>
  <div class="info-block">
    <div class="text-button">
      <div class="text">
        <div class="div">
          <div class="pet-shop">Pet Ideal</div>
          <h2 class="the-smarter-way-to">
            The smarter way to shop <br />for your pet
          </h2>
        </div>
        <p class="text-wrapper">
          Lorem ipsum dolor sit amet consectetur. At et vehicula sodales est proin turpis pellentesque sinulla a aliquam amet rhoncus quisque eget sit
        </p>
      </div>
      <button class="button">
        Learn More
      </button>
    </div>
    <div>
      <img loading="lazy" src="../Img/dogdeitadinho.png" class="image" alt="Pet shop illustration" />
    </div>
  </div>
</template>

<script>
export default {
  name: "InfoBlock",
  data() {
    return {
      // image1: require("../Img/image.png"),
    };
  },
};
</script>

<style scoped>
.info-block {
  background-color: rgba(248, 249, 250, 1);
  position: relative;
  display: flex;
  width: 100%;
  align-items: flex-start;
  overflow: hidden;
  font-family: Poppins, sans-serif;
  justify-content: flex-start;
  padding: 120px 72px;
}

.info-block .text-button {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  gap: 60px;
  margin-left: 10px;
  position: relative;
  width: 696px;
}

.info-block .text {
  align-items: flex-start;
  display: inline-flex;
  flex-direction: column;
  gap: 40px;
  position: relative;
}

.info-block .div {
  align-items: flex-start;
  display: inline-flex;
  flex-direction: column;
  gap: 20px;
  position: relative;
}

.info-block .pet-shop {
  color: var(--orange-500);
  font-family: "Poppins-Bold", Helvetica;
  font-size: 16px;
  font-weight: 700;
  width: fit-content;
}

.info-block .the-smarter-way-to {
  color: #000000;
  font-family: "Poppins-Bold", Helvetica;
  font-size: 40px;
  font-weight: 700;
  width: 587px;
}

.info-block .text-wrapper {
  color: #000000cc;
  font-family: "Poppins-Bold", Helvetica;
  font-size: 16px;
  font-weight: 400;
  line-height: 25.6px;
  width: 479px;
}

.info-block .button {
  all: unset;
  align-items: center;
  background-color: var(black);
  border-radius: 12px;
  display: inline-flex;
  justify-content: center;
  padding: 17px 40px;
  height: 60px;
}

.info-block .image {
  height: 539px;
  object-fit: cover;
  width: 737px; /* Corrigido */
  margin-left: 300px; 
}
</style>
