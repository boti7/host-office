<template>
  <nav class="container">
    <div class="brand">
      <a href="/">Host Office kft.</a>
    </div>

    <div class="menu">
      <NavMenuItem href="#rolunk" label="Rólunk" />
    </div>
  </nav>
</template>

<script>
  import NavMenuItem from "./NavMenuItem";
  export default {
    name: 'Navbar',
    components: { NavMenuItem }
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  nav {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .brand a {
    display: block;
    padding: 20px 10px;
    color: $title-color;
    font-size: 24px;
    text-decoration: none;
  }
</style>
