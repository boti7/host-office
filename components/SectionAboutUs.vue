<template>
  <div class="container section">
    <h2>Rólunk</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dignissim nisl dignissim elit pellentesque, in iaculis augue molestie. Ut sollicitudin magna in lacinia mattis. Phasellus gravida quam vitae tempor accumsan. Praesent quam dui, molestie sit amet tristique at, pretium non risus. Morbi varius nisi blandit euismod hendrerit. Suspendisse finibus ipsum mi, eget porta urna vehicula sed. Phasellus tempor lacus purus, sit amet hendrerit est pharetra nec. Sed eu quam dolor. Maecenas vestibulum, nunc et laoreet rhoncus, sapien nulla vestibulum purus, nec finibus urna enim sed enim. Ut dictum eget velit nec porttitor. </p>
  </div>
</template>

<script>
  export default {
    name: 'SectionAboutUs'
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  .section {
    padding: 40px 0;
  }
  h2 {
    font-weight: 300;
    font-size: 40px;
    color: $title-color;
    text-align: center;
  }
</style>
