<template>
  <nuxt />
</template>

<style lang="scss">
  @import '@/assets/_variables.scss';

  html {
    font-family: Roboto, 'Helvetica Neue', Arial, sans-serif;
    font-size: 16px;
    word-spacing: 1px;
    line-height: 1.75;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    color: $text-color;
    box-sizing: border-box;
  }

  *,
  *:before,
  *:after {
    box-sizing: border-box;
    margin: 0;
  }

  h2 {
    font-weight: 300;
    font-size: 32px;
    color: $title-color;
    text-align: center;

    @media (min-width: $breakpoint-tablet) {
      font-size: 40px;
    }
  }

  .container {
    width: 100%;
    max-width: 1024px;
    margin: 0 auto;
  }

  .section {
    padding: 80px 0;
  }
</style>
