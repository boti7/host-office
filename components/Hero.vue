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
    height: calc(100vh - 70px);
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: $hero-bg-color;
  }

  .hero-content {
    max-width: 1024px;
    text-align: center;
  }

  .title {
    font-weight: 300;
    font-size: 40px;
    color: $text-color-light;
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
