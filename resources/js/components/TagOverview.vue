<template>
    <div class="relative">
        <go-home></go-home>
        <div class="py-12 px-4 bg-gray-100 rounded-2xl pb-8 shadow-box-one shadow-box-two">
            <div class="box-gradient">
                <h1 class="ml-0 pt-0 page-title">Alle "{{tag.name}}" Cases</h1>
                <p v-text="tag.description" class="text-gray-900"></p>
            </div>
            <Cases :articles="tag.articles"></Cases>
        </div>
    </div>
</template>

<script>
    import Cases from "./Cases";
    import GoHome from "./GoHome";

    export default {
        name: "TagOverview",
        components: {GoHome, Cases},
        data() {
            return {
                tag: {
                    id: 0,
                    name: '',
                    description: '',
                    articles: []
                }
            }
        },

        methods: {
            showPost(id) {
                this.$router.push({path: `/cases/${id}`});
            },
            goToPage() {
                this.$router.go(-1);
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
                    this.tag.description = response.data.description;
                    this.tag.name = response.data.name;
                })
        }
    }
</script>

<style scoped>

</style>
