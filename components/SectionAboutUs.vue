<template>
  <div id="rolunk" class="container section">
    <h2>{{ $t('nav.aboutUs') }}</h2>

    <div class="aboutus">
      <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dignissim nisl dignissim elit pellentesque, in iaculis augue molestie. Ut sollicitudin magna in lacinia mattis. Phasellus gravida quam vitae tempor accumsan. Praesent quam dui, molestie sit amet tristique at, pretium non risus. Morbi varius nisi blandit euismod hendrerit. Suspendisse finibus ipsum mi, eget porta urna vehicula sed. Phasellus tempor lacus purus, sit amet hendrerit est pharetra nec. Sed eu quam dolor. Maecenas vestibulum, nunc et laoreet rhoncus, sapien nulla vestibulum purus, nec finibus urna enim sed enim. Ut dictum eget velit nec porttitor. </div>
      <img class="team-photo" src="../static/campaign-creators-e6n7uoEnYbA-unsplash.jpg">
    </div>
  </div>
</template>

<script>
  export default {
    name: 'SectionAboutUs'
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  .aboutus {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
    width: 100%;

    div {
      width: 100%;
      margin: 20px;

      @media (min-width: $breakpoint-tablet) {
        width: calc(60% - 40px);
      }
    }

    .team-photo {
      display: block;
      width: 100%;
      margin: 20px;
      border-radius: 10px;

      @media (min-width: $breakpoint-tablet) {
        width: calc(40% - 40px);
      }
    }
  }
</style>
