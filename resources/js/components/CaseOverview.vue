<template>
    <div class="bg-gray-100 rounded-2xl pb-8 shadow-box-one shadow-box-two">
        <h1 class="page-title">View all Cases here</h1>
        <Cases :articles="posts"></Cases>
    </div>
</template>

<script>
    import Cases from "./Cases";
    export default {
        name: "CaseOverview",
        components: {Cases},

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
