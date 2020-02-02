<template>
  <div :class="{ 'navbar': true, 'navbar-bg': isBackground || isMenuOpen }">
    <nav class="container">
      <div class="brand">
        <a href="/">Acme Corp.</a>
      </div>

      <div :class="{ 'menu-toggle': true, 'menu-open': isMenuOpen }" @click="isMenuOpen = !isMenuOpen">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>

      <div :class="{ 'menu': true, 'menu-open': isMenuOpen }">
        <NavMenuItem href="#rolunk" @click="menuItemClick">{{ $t('nav.aboutUs') }}</NavMenuItem>
        <NavMenuItem href="#domain" @click="menuItemClick">{{ $t('nav.domains') }}</NavMenuItem>
        <NavMenuItem href="#partnerek" @click="menuItemClick">{{ $t('nav.partners') }}</NavMenuItem>
        <NavMenuItem href="#kapcsolat" @click="menuItemClick">{{ $t('nav.contact') }}</NavMenuItem>
        <NavMenuItem v-if="$i18n.locale === 'hu'" @click="changeLang('en', $event)">EN</NavMenuItem>
        <NavMenuItem v-else @click="changeLang('hu', $event)">HU</NavMenuItem>
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
      isBackground: false,
      isMenuOpen: false
    }),
    methods: {
      onScroll() {
        const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        this.isBackground = currentScrollPosition > 100;
      },
      menuItemClick() {
        this.isMenuOpen = false;
      },
      changeLang(lang, evt) {
        evt.preventDefault();
        this.$i18n.locale = lang;
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

    .bar1, .bar2, .bar3 {
      background-color: $title-color !important;
    }
  }

  nav {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;

    .brand a {
      display: block;
      padding: 20px 10px;
      color: inherit;
      font-size: 20px;
      text-decoration: none;

      @media (min-width: $breakpoint-tablet) {
        font-size: 24px;
      }
    }

    .menu-toggle {
      padding: 10px;
      cursor: pointer;

      @media (min-width: $breakpoint-tablet) {
        display: none;
      }

      .bar1, .bar2, .bar3 {
        width: 35px;
        height: 5px;
        background-color: $text-color-light;
        margin: 6px 0;
        transition: 0.4s;
      }
    }

    .menu-toggle.menu-open {
      .bar1 {
        -webkit-transform: rotate(-45deg) translate(-8px, 7px);
        transform: rotate(-45deg) translate(-8px, 7px);
      }

      .bar2 {opacity: 0;}

      .bar3 {
        -webkit-transform: rotate(45deg) translate(-8px, -8px);
        transform: rotate(45deg) translate(-8px, -8px);
      }
    }

    .menu {
      display: none;
      flex-direction: column;
      width: 100%;

      @media (min-width: $breakpoint-tablet) {
        display: flex;
        flex-direction: row;
        justify-content: right;
        width: auto;
      }
    }

    .menu.menu-open {
      display: flex;
    }
  }
</style>
