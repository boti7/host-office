<template>
  <div class="search-box">
    <form @submit="onSubmit">
      <input type="text" class="domain-input" :placeholder="$t('domainSearch.whatDomain')"
             v-model="domainSearch" :disabled="isLoading" />
      <input type="submit" class="domain-search-btn" :value="$t('domainSearch.search')" :disabled="isLoading" />
    </form>

    <div v-if="showResultPane" class="result-pane">
      <div v-if="isError">{{ $t('domainSearch.error') }}</div>
      <div v-else-if="isInvalidDomain">{{ $t('domainSearch.invalidDomain') }}</div>
      <div v-else-if="isDomainAvailable">{{ $t('domainSearch.available', { domain: domainDisplay }) }}
        <br>
        <a href="">{{ $t('domainSearch.buyItNow') }}</a>
      </div>
      <div v-else>{{ $t('domainSearch.notAvailable', { domain: domainDisplay }) }}</div>
    </div>
  </div>
</template>

<script>
  import axios from 'axios';

  export default {
    name: 'DomainSearch',
    data: () => ({
      domainSearch: null,
      domainDisplay: null,
      showResultPane: false,
      isDomainAvailable: null,
      isLoading: false,
      isError: false,
      isInvalidDomain: false
    }),
    methods: {
      onSubmit(evt) {
        evt.preventDefault();

        if (this.domainSearch === null)
          return;

        this.isLoading = true;
        this.hideResult();

        axios.get('https://domain-availability-api.whoisxmlapi.com/api/v1', {
          params: {
            apiKey: 'at_aAo8JZjyURBujTNf1vwtGZqOeTiMo',
            domainName: this.domainSearch
          }
        })
          .then(response => {
            if (response.data.DomainInfo) {
              this.showResult(response.data.DomainInfo.domainAvailability === 'AVAILABLE');
            }
            else if (response.data.ErrorMessage && response.data.ErrorMessage.errorCode === 'WHOIS_01') {
              this.showResult(false, true);
            }
            else {
              this.showError();
            }
          })
          .catch(() => this.showError());
      },
      showResult(isAvailable, isInvalid) {
        this.isLoading = false;
        this.isError = false;
        this.isDomainAvailable = isAvailable;
        this.isInvalidDomain = isInvalid;
        this.domainDisplay = this.domainSearch;
        this.showResultPane = true;
      },
      showError() {
        this.isLoading = false;
        this.isError = true;
        this.showResultPane = true;
      },
      hideResult() {
        this.showResultPane = false;
      }
    }
  }
</script>

<style lang="scss" scoped>
  @import '@/assets/_variables.scss';

  $search-btn-color: #4D84C7;
  $border-radius: 20px;

  .search-box {
    width: calc(100% - 40px);
    max-width: 600px;
    min-height: 50px;
    margin: 20px auto;
    border-radius: $border-radius;
    background-color: $bg-color-light;

    form {
      display: flex;
      justify-content: space-between;
    }

    .domain-input {
      display: block;
      flex: 1;
      padding: 15px;
      border: none;
      border-radius: $border-radius 0 0 $border-radius;
      font-family: inherit;
      font-size: 16px;
    }

    .domain-search-btn {
      display: block;
      margin: 0;
      padding: 15px 30px;
      border: none;
      border-radius: 0 $border-radius $border-radius 0;
      font-family: inherit;
      font-size: 16px;
      text-decoration: none;
      color: $text-color-light;
      cursor: pointer;
      background-color: $search-btn-color;
    }
    .domain-search-btn:hover:not([disabled]) {
      background-color: scale_color($search-btn-color, $lightness: -10%);
    }
    .domain-search-btn[disabled] {
      background-color: scale_color($search-btn-color, $lightness: 30%);
    }

    .result-pane {
      padding: 10px;
      text-align: center;
      color: $text-color-dark;
      font-weight: bold;
    }

    a {
      color: $color-success;
      font-weight: bold;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  }
</style>
