<template>
    <div class="bg-gray-100 rounded-2xl pb-8 shadow-box-one shadow-box-two">
        <h1 class="page-title">View all Cases here</h1>
        <div class="primary flex flex-wrap justify-center">
            <div class="case-item shadow-inner-one shadow-inner-two bg-gray-100 flex-none" v-for="post in posts">
                <div class="card-image" @click="showPost(post.id)" v-bind:style="{ backgroundImage: 'url(' + post.image_link + ')' }"></div>
                <h5 v-text="post.title" class="mt-2 mb-4 text-2xl"></h5>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Cases",

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

        created() {
            axios.get('http://giibTest.test/api/posts')
                .then(response => {
                    let {data} = response;
                    this.posts = data;
                })
        }
    }
</script>

<style scoped>

</style>
