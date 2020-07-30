<template>
    <div class="relative">
        <go-home></go-home>
        <div class="py-12 px-4 bg-gray-100 rounded-2xl pb-8 shadow-box-one shadow-box-two">
            <div class="box-gradient">
                <h1 class="page-title">View all Cases here</h1>
                <Tag v-for="tag in tags" :key="tag.name" class="ml-0 mb-6 w-auto" :tag="tag"></Tag>
                <form>
                    <label>
                        <input class="px-2 py-2 rounded-full text-gray-900" v-model="query" placeholder="Search..."
                               @input="searchCases()">
                    </label>
                    <button class="px-4 py-2 rounded-full bg-secondary-900 text-white" @click="searchCases()">Suchen
                    </button>
                </form>
            </div>
            <Cases :articles="posts"></Cases>
        </div>
    </div>
</template>

<script>
    import Cases from "./Cases";
    import Tag from "./Tag";
    import GoHome from "./GoHome";

    export default {
        name: "CaseOverview",
        components: {GoHome, Tag, Cases},

        data() {
            return {
                post: {
                    title: '',
                    content: '',
                    image_link: '',
                    tag: ''
                },
                posts: [],
                tags: [{
                    id: 0,
                    name: '',
                    description: '',
                    articles: []
                }],
                query: ''
            }
        },

        methods: {
            goToPage(link) {
                this.$router.push({path: `/${link}`});
            },
            searchCases() {
                if (this.query === '') {
                    axios.get('http://giibTest.test/api/posts')
                        .then(response => {
                            let {data} = response;
                            this.posts = data;
                        })
                } else {
                    axios.get(`http://giibTest.test/api/posts/search/${this.query}`)
                        .then(response => {
                            let {data} = response;
                            this.posts = data;
                        })
                }
            }
        },

        created() {
            axios.get('http://giibTest.test/api/posts')
                .then(response => {
                    let {data} = response;
                    this.posts = data;
                })
            axios.get('http://giibTest.test/api/tags')
                .then(response => {
                    this.tags = response.data;
                })
        }
    }
</script>

<style scoped>

</style>
