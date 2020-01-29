<template>
  <div id="domain" class="section-wrapper">
    <div class="container section">
      <h2>Megvásárolható domainek</h2>

      <div class="domains-box">
        <div v-for="domain in domains" :key="domain.name" class="domain-item">
          <div class="domain-name">{{ domain.name }}</div>
          <div v-if="domain.price">{{ domain.price }}</div>
          <div class="domain-action">
            <a v-if="domain.price" href="">Megrendelem</a>
            <a v-else href="">Ajánlatot kérek</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'SectionDomains',
    data: () => ({
      domains: [
        {
          name: 'domain1.hu',
          price: '29.990 Ft'
        },
        {
          name: 'domain2.hu'
        }
      ]
    })
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  $section-bg-color: #2CAF5F;

  h2 {
    color: $text-color-light;
  }

  .section-wrapper {
    width: 100%;
    background-color: $section-bg-color;
  }

  .domains-box {
    width: calc(100% - 40px);
    max-width: 700px;
    min-height: 60px;
    margin: 20px auto;
    border-radius: 10px;
    background-color: $bg-color-light;
  }

  .domain-item {
    width: 100%;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #c9cacd;
  }
  .domain-item:last-of-type {
    border-bottom: none;
  }

  .domain-item > div {
    padding: 10px;
    color: $text-color-dark;
  }

  .domain-action a {
    color: $section-bg-color;
    font-weight: bold;
    text-decoration: none;
  }
  .domain-action a:hover {
    text-decoration: underline;
  }
</style>
