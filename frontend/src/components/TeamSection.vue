<template>
  <section class="team-section">
    <h2 class="section-title">Nosso time</h2>
    <div class="team-cards">
      <div class="team-card">
        <img src="../img/team1.png" alt="Caroline Washington" class="team-member-image" />
        <h3 class="team-member-name">Caroline Washington</h3>
        <p class="team-member-role">Seller</p>
      </div>
      <div class="team-card">
        <img src="../img/team2.png" alt="Gerald Ferguson" class="team-member-image" />
        <h3 class="team-member-name">Gerald Ferguson</h3>
        <p class="team-member-role">Seller</p>
      </div>
      <div class="team-card">
        <img src="../img/team4.png" alt="Averi Maddox" class="team-member-image" />
        <h3 class="team-member-name">Averi Maddox</h3>
        <p class="team-member-role">Seller</p>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'PetShopTeamSection',
};
</script>

<style scoped>
.team-section {
  padding: 60px 72px 120px;
  text-align: center;
}

.section-title {
  font-size: 40px;
  font-weight: 600;
  margin-bottom: 40px;
}

.team-cards {
  display: flex;
  justify-content: center;
  gap: 24px;
  flex-wrap: wrap;
}

.team-card {
  width: 416px;
}

.team-member-image {
  width: 100%;
  height: auto;
  border-radius: 20px;
  margin-bottom: 24px;
}

.team-member-name {
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 20px;
}

.team-member-role {
  font-size: 16px;
  color: rgba(0, 0, 0, 0.6);
}

@media (max-width: 991px) {
  .team-section {
    padding: 40px 20px 80px;
  }

  .team-card {
    width: 100%;
    max-width: 416px;
  }
}
</style>