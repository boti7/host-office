<template>
  <div class="hero-wrapper">
    <div class="hero-content">
      <h1 class="title">Domain regisztrációs szolgáltatások</h1>

      <DomainSearch />
    </div>
  </div>
</template>

<script>
  import DomainSearch from './DomainSearch';

  export default {
    name: 'Hero',
    components: { DomainSearch }
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  $hero-bg-color: #4D84C7;

  .hero-wrapper {
    width: 100%;
    height: calc(100vh - 240px);
    min-height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('../static/taylor-vick-M5tzZtFCOfs-unsplash.jpg');
    background-size: cover;
  }

  .hero-content {
    width: 100%;
    max-width: 1024px;
    text-align: center;
  }

  .title {
    font-weight: bold;
    font-size: 32px;
    color: $text-color-light;
    text-shadow: 0 0 6px #000;

    @media (min-width: $breakpoint-tablet) {
      font-size: 40px;
    }
  }
</style>
