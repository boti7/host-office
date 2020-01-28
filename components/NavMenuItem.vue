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

<style scoped>
  a {
    display: block;
    padding: 20px 10px;
    color: #39424E;
    font-size: 18px;
    text-decoration: none;
  }
</style>
