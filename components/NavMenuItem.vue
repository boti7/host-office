<template>
  <div class="menu-item">
    <a :href="href" @click="$emit('click', href)">{{ label }}</a>
  </div>
</template>

<script>
  export default {
    name: 'NavMenuItem',
    props: {
      href: {
        type: String,
        default: '#'
      },
      label: {
        type: String
      }
    }
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  a {
    display: block;
    padding: 20px 10px;
    color: $title-color;
    font-size: 18px;
    text-decoration: none;
  }
</style>
