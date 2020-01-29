<template>
  <div id="partnerek" class="container section">
    <h2>Partnereink</h2>

    <div class="partners">
      <div v-for="partner in partners" :key="partner.name" class="partner-card">
        <img class="logo" src="../static/placeholder.com-logo1.png" />
        <div class="name">{{ partner.name }}</div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'SectionPartners',
    data: () => ({
      partners: [
        {
          name: 'Példa Kft.'
        },
        {
          name: 'Példa Kft.'
        },
        {
          name: 'Példa Kft.'
        }
      ]
    })
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  .partners {
    width: 100%;
    margin-top: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;

    .partner-card {
      width: 200px;
      padding: 20px;
      text-align: center;
      cursor: pointer;
      opacity: 0.6;
      transition: opacity 300ms;
    }
    .partner-card:hover {
      opacity: 1;
    }

    .logo {
      width: 100%;
    }
  }
</style>
