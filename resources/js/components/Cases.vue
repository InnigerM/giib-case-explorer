<template>
    <div class="primary flex flex-wrap justify-center">
        <div class="case-item shadow-inner-one shadow-inner-two bg-gray-100 flex-none" @click="showPost(post.id)" v-for="post in articles">
            <div class="card-image"
                 v-bind:style="{ backgroundImage: 'url(' + post.image_link + ')' }"></div>
            <h5 v-text="post.title" class="mt-2 mb-4 text-2xl"></h5>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Cases",

        props: {
            articles: [Object]
        },

        data() {
            return {
                post: {
                    title: '',
                    content: '',
                    image_link: '',
                    tag: ''
                },
                posts: []
            }
        },

        methods: {
            showPost(id) {
                this.$router.push({path: `/cases/${id}`});
            }
        },
    }
</script>

<style scoped>

</style>
