<template>
  <div id="kapcsolat" class="section-wrapper">
    <div class="container section">
      <h2>Kapcsolat</h2>

      <form>
        <input type="text" placeholder="Neved" />
        <input type="text" placeholder="Email címed">
        <textarea rows="7" placeholder="Üzenet" />
        <input type="submit" value="Küldés">
      </form>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'SectionContact'
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  $section-bg-color: #39424E;

  h2 {
    color: $text-color-light;
  }

  .section-wrapper {
    width: 100%;
    background-color: $section-bg-color;
  }

  form {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: calc(100% - 40px);
    max-width: 700px;
    margin: 20px auto;

    input[type="text"] {
      width: 100%;
      margin: 10px 0;
      padding: 10px;
      border: none;
      border-radius: 4px;
      font-family: inherit;
      font-size: 16px;

      @media (min-width: $breakpoint-tablet) {
        width: calc(50% - 10px);
      }
    }

    input[type="submit"] {
      display: inline-block;
      margin: 10px auto;
      padding: 10px 30px;
      border: none;
      border-radius: 4px;
      font-family: inherit;
      font-size: 16px;
      text-decoration: none;
      color: $text-color-light;
      cursor: pointer;
      background-color: $color-success;
    }
    input[type="submit"]:hover {
      background-color: scale_color($color-success, $lightness: -10%);
    }

    textarea {
      width: 100%;
      margin: 10px 0;
      padding: 10px;
      border: none;
      border-radius: 4px;
      font-family: inherit;
      font-size: 16px;
      resize: vertical;
    }
  }
</style>
