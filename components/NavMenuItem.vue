<template>
  <div class="menu-item">
    <a :href="href" @click="$emit('click', href)">
      <slot></slot>
    </a>
  </div>
</template>

<script>
  export default {
    name: 'NavMenuItem',
    props: {
      href: {
        type: String,
        default: '#'
      }
    }
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  a {
    display: block;
    margin: 0 5px;
    padding: 20px 10px;
    color: inherit;
    font-size: 18px;
    text-decoration: none;
  }
</style>
