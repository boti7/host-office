<template>
  <div id="kapcsolat" class="section-wrapper">
    <div class="container section">
      <h2>{{ $t('nav.contact') }}</h2>

      <form @submit="onSubmit">
        <div v-if="isSent && isSuccess" class="msg msg-success">{{ $t('sectionContact.messageSent') }}</div>
        <div v-else-if="isSent" class="msg msg-error">{{ $t('sectionContact.error') }}</div>

        <input type="text" :placeholder="$t('sectionContact.name')" v-model="formData.name" :disabled="isLoading" />
        <input type="text" :placeholder="$t('sectionContact.email')" v-model="formData.email" :disabled="isLoading" />
        <textarea rows="7" :placeholder="$t('sectionContact.message')" v-model="formData.message" :disabled="isLoading"></textarea>
        <input type="submit" :value="$t('sectionContact.send')" :disabled="!isValid || isLoading" />
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

        // axios.post('URL to send the message', this.formData)
        //   .then(() => this.clearForm(true))
        //   .catch(() => this.clearForm(false));
        setTimeout(() => this.clearForm(true), 1000);
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
