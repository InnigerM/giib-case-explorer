<template>
  <button
      class="nav-aligned"
      @click="goHome"
      :style="{ backgroundImage: 'url(' + require('../../images/home.png') + ')' }">
  </button>
</template>
<script>
export default {
  name: 'goHome',
  methods: {
      goHome() {
          this.$router.push({path: '/'});
      },
  }
}
</script>
