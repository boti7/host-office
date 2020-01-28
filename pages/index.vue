<template>
  <div>
    <Navbar />

    <Hero />

    <SectionAboutUs />

    <SectionDomains />
  </div>
</template>

<script>
import Navbar from '~/components/Navbar.vue';
import Hero from '~/components/Hero.vue';
import SectionAboutUs from '~/components/SectionAboutUs.vue';
import SectionDomains from '~/components/SectionDomains';

export default {
  components: {
    Navbar,
    Hero,
    SectionAboutUs,
    SectionDomains
  }
}
</script>

<style>

</style>
