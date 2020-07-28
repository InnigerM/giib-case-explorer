<template>

    <div class="bg-gray-100 rounded-2xl pb-8 shadow-box-one shadow-box-two">
        <h1 class="page-title">All {{tag.name}} Cases</h1>
        <Cases :articles="tag.articles"></Cases>
    </div>
</template>

<script>
    import Cases from "./Cases";
    export default {
        name: "TagOverview",
        components: {Cases},
        data() {
            return {
                tag: {
                    id: 0,
                    name: '',
                    articles: []
                }
            }
        },

        methods: {
            showPost(id) {
                this.$router.push({path: `/cases/${id}`});
            }
        },

        created() {
            axios.get(`http://giibTest.test/api/tags/${this.$route.params.id}/articles`)
                .then(response => {
                    this.tag.articles = response.data;
                })
            axios.get(`http://giibTest.test/api/tags/${this.$route.params.id}`)
                .then(response => {
                    this.tag.id = response.data.id;
                    this.tag.name = response.data.name;
                })
        }
    }
</script>

<style scoped>

</style>
