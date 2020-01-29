<template>
  <div class="hero-wrapper">
    <div class="hero-content">
      <h1 class="title">Domain regisztrációs szolgáltatások</h1>

      <div class="search-box"></div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Hero'
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
    max-width: 1024px;
    text-align: center;
  }

  .title {
    font-weight: bold;
    font-size: 40px;
    color: $text-color-light;
    text-shadow: 0 0 6px #000;
  }

  .search-box {
    width: calc(100% - 40px);
    max-width: 700px;
    min-height: 60px;
    margin: 20px;
    border-radius: 10px;
    background-color: $bg-color-light;
  }
</style>
