<template>
  <div>
    <Navbar />

    <Hero />

    <SectionAboutUs />

    <SectionDomains />

    <SectionPartners />

    <SectionContact />

    <Footer />
  </div>
</template>

<script>
import Navbar from '~/components/Navbar.vue';
import Hero from '~/components/Hero.vue';
import SectionAboutUs from '~/components/SectionAboutUs.vue';
import SectionDomains from '~/components/SectionDomains.vue';
import SectionPartners from '~/components/SectionPartners.vue';
import SectionContact from '~/components/SectionContact.vue';
import Footer from '~/components/Footer.vue';

export default {
  components: {
    Navbar,
    Hero,
    SectionAboutUs,
    SectionDomains,
    SectionPartners,
    SectionContact,
    Footer
  }
}
</script>

<style>

</style>
