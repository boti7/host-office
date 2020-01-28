<template>
  <div class="footer-wrapper">
    <div class="container footer">Host Office Kft. © 2020</div>
  </div>
</template>

<script>
  export default {
    name: "Footer"
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  $footer-bg-color: #191919;

  .footer-wrapper {
    background-color: $footer-bg-color;
  }

  .footer {
    padding: 60px 0;
    text-align: center;
    font-size: 12px;
  }
</style>
