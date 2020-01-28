<template>
  <div class="container section">
    <h2>Partnereink</h2>

    <div class="partners">
      <div v-for="partner in partners" :key="partner.name" class="partner-card">
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
    justify-content: space-evenly;

    .partner-card {
      width: 200px;
      height: 200px;
      text-align: center;
      cursor: pointer;
      opacity: 0.6;
      transition: opacity 300ms;
    }
    .partner-card:hover {
      opacity: 1;
    }
  }
</style>
