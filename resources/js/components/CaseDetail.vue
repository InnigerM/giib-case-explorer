<template>
    <div>
        <h1 class="page-title" v-text="post.title"></h1>
        <div>
            <div class="mb-8">
                <div class="case-image" v-bind:style="{ backgroundImage: 'url(' + post.image_link + ')' }"></div>
                <p v-text="post.content" class="mb-6"></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CaseDetail",

        data() {
            return {
                post: {
                    title: '',
                    content: '',
                    image_link: ''
                }
            }
        },

        created() {
            axios.get(`http://giibTest.test/api/posts/${this.$route.params.id}`)
                .then(response => {
                    this.post.title = response.data.title;
                    this.post.content = response.data.content;
                    this.post.image_link = response.data.image_link;
                })
        }
    }
</script>

<style scoped>

</style>
