<template>
    <div>
        <h1 class="page-title" v-text="post.title"></h1>
        <div>
            <div class="mb-8">
                <div class="relative case-image shadow-2xl mb-8"
                     v-bind:style="{ backgroundImage: 'url(' + post.image_link + ')' }">

                    <div class="absolute bottom-0 left-0 right-0 flex flex-wrap bg-secondary-900 bg-opacity-75 rounded-b-lg">
                        <div v-text="post.title" class="w-1/3 p-4 mt-auto mb-auto text-left text-white text-2xl">
                        </div>
                        <div class="w-2/3 justify-end flex flex-wrap">
                            <div v-for="tag in tags" class="w-1/4 mt-auto mb-auto">
                                <Tag :tag="tag.name"></Tag>
                            </div>
                        </div>
                    </div>
                </div>
                <p v-text="post.content" class="mb-6"></p>
            </div>
        </div>
    </div>
</template>

<script>
    import Tag from "./Tag";

    export default {
        name: "CaseDetail",
        components: {Tag},
        data() {
            return {
                post: {
                    title: '',
                    content: '',
                    image_link: ''
                },
                tags: [{
                    id: '',
                    name: ''
                }]
            }
        },

        created() {
            axios.get(`http://giibTest.test/api/posts/${this.$route.params.id}`)
                .then(response => {
                    this.post.title = response.data.title;
                    this.post.content = response.data.content;
                    this.post.image_link = response.data.image_link;
                })
            axios.get(`http://giibTest.test/api/posts/${this.$route.params.id}/tags`)
                .then(response => {
                    this.tags = response.data
                })
        }
    }
</script>

<style scoped>

</style>
