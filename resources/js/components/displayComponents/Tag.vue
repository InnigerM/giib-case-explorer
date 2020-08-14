<template>
    <button class="tag"
         v-text="tag.name"
        @click="showTagOverview(tag.id)"
         :style="{ backgroundImage: 'url(' + require('../../../images/tag'+'.png') + ')' }">
    </button>
</template>

<script>
    export default {
        name: "Tag",

        props: {
            tag: Object,
        },

        data() {
            return {
                posts: []
            }
        },

        methods: {
            showTagOverview(id){
                this.$router.push({path: `/cases/tags/${id}`});
            }
        }
    }
</script>

<style scoped>

</style>
