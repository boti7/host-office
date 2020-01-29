<template>
  <div :class="{ 'navbar': true, 'navbar-bg': isBackground }">
    <nav class="container">
      <div class="brand">
        <a href="/">Host Office kft.</a>
      </div>

      <div class="menu">
        <NavMenuItem href="#rolunk">Rólunk</NavMenuItem>
        <NavMenuItem href="#domain">Domain nevek</NavMenuItem>
        <NavMenuItem href="#partnerek">Partnerek</NavMenuItem>
        <NavMenuItem href="#kapcsolat">Kapcsolat</NavMenuItem>
      </div>
    </nav>
  </div>
</template>

<script>
  import NavMenuItem from "./NavMenuItem";
  export default {
    name: 'Navbar',
    components: { NavMenuItem },
    data: () => ({
      isBackground: false
    }),
    methods: {
      onScroll() {
        const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        this.isBackground = currentScrollPosition > 100;
      }
    },
    mounted() {
      window.addEventListener('scroll', this.onScroll)
    },
    beforeDestroy() {
      window.removeEventListener('scroll', this.onScroll)
    }
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  .navbar {
    position: fixed;
    width: 100%;
    color: $text-color-light;
    text-shadow: 0 0 5px $text-color-dark;
    z-index: 999;
    transition: color, background-color 300ms;
  }

  .navbar-bg {
    color: $title-color;
    background-color: $bg-color-light;
    text-shadow: none;
    box-shadow: 0 0 3px #637381;
  }

  nav {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;

    .brand a {
      display: block;
      padding: 20px 10px;
      color: inherit;
      font-size: 24px;
      text-decoration: none;
    }

    .menu {
      display: flex;
      justify-content: right;
    }
  }
</style>
