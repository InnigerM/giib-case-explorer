<template>
    <div>
        <h1 class="page-title">View all Cases here</h1>
        <div class="primary flex flex-wrap justify-center">
            <div class="case-item flex-none" v-for="post in posts">
                <div class="card-image" v-bind:style="{ backgroundImage: 'url(' + post.image_link + ')' }"></div>
                <h5 v-text="post.title" class="mb-4 text-2xl"></h5>
                <span class="btn btn-tertiary-blue m-12" v-text="post.tag"></span>
                <button class="btn btn-primary mt-8" @click="showPost(post.id)">See more</button>
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
