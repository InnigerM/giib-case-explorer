<template>
    <div class="tag"
         v-text="tag"
         :style="{ backgroundImage: 'url(' + require('../../images/tag'+'.png') + ')' }">
    </div>
</template>

<script>
    export default {
        name: "Tag",

        props: {
            tag: String,
        },

        data() {
            return {
                posts: []
            }
        },
    }
</script>

<style scoped>

</style>
