<template>
  <div id="kapcsolat" class="section-wrapper">
    <div class="container section">
      <h2>Kapcsolat</h2>

      <form @submit="onSubmit">
        <div v-if="isSent && isSuccess" class="msg msg-success">Üzenet elküldve!</div>
        <div v-else-if="isSent" class="msg msg-error">Hiba történt, próbáld újra később.</div>

        <input type="text" placeholder="Neved" v-model="formData.name" :disabled="isLoading" />
        <input type="text" placeholder="Email címed" v-model="formData.email" :disabled="isLoading" />
        <textarea rows="7" placeholder="Üzenet" v-model="formData.message" :disabled="isLoading"></textarea>
        <input type="submit" value="Küldés" :disabled="!isValid || isLoading" />
      </form>
    </div>
  </div>
</template>

<script>
  import axios from 'axios';

  export default {
    name: 'SectionContact',
    data: () => ({
      formData: {
        name: null,
        email: null,
        message: null
      },
      isLoading: false,
      isSent: false,
      isSuccess: false,
      isValid: false
    }),
    methods: {
      onSubmit(evt) {
        evt.preventDefault();

        this.isLoading = true;
        this.isSent = false;

        axios.post('http://hboti.luzsiadam.hu/api.php?action=message', this.formData)
          .then(() => this.clearForm(true))
          .catch(() => this.clearForm(false));
      },
      clearForm(isSuccess) {
        this.isSent = true;
        this.isSuccess = isSuccess;
        this.formData.name = null;
        this.formData.email = null;
        this.formData.message = null;
        this.isLoading = false;
      }
    },
    created() {
      this.$watch('formData', (newVal, oldVal) => {
        this.isValid = newVal.name && newVal.email && newVal.message;
      }, { deep: true }
      );
    }
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

    .msg {
      width: 100%;
      margin: 10px 0;
      padding: 20px;
      border-radius: 4px;
      color: $text-color-light;
    }
    .msg-success {
      background-color: $color-success;
    }
    .msg-error {
      background-color: $color-error;
    }

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
    input[type="submit"]:hover:not([disabled]) {
      background-color: scale_color($color-success, $lightness: -10%);
    }
    input[type="submit"][disabled] {
      cursor: default;
      background-color: scale_color($color-success, $lightness: 30%);
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
