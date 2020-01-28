<template>
  <div>
    <Navbar />

    <Hero />

    <SectionAboutUs />
  </div>
</template>

<script>
import Navbar from '~/components/Navbar.vue';
import Hero from '~/components/Hero.vue';
import SectionAboutUs from '~/components/SectionAboutUs.vue';

export default {
  components: {
    Navbar,
    Hero,
    SectionAboutUs
  }
}
</script>

<style>

</style>
