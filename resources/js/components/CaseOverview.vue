<template>
    <div class="relative">
        <button
            class="nav-aligned"
            @click="goToPage('')"
            :style="{ backgroundImage: 'url(' + ('../../images/view.png') + ')' }">
        </button>
        <div class="py-12 px-4 bg-gray-100 rounded-2xl pb-8 shadow-box-one shadow-box-two">
            <div class="box-gradient">
                <h1 class="ml-0 pt-0 page-title">View all Cases here</h1>
                <form>
                    <label>
                        <input class="px-2 py-2 rounded-full text-gray-900" v-model="query" placeholder="Search..." @input="searchCases()">
                    </label>
                    <button class="px-4 py-2 rounded-full bg-secondary-900 text-white" @click="searchCases()">Suchen</button>
                </form>
            </div>
            <Cases :articles="posts"></Cases>
        </div>
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
                posts: [],
                query: ''
            }
        },

        methods: {
            goToPage(link) {
                this.$router.push({path: `/${link}`});
            },
            searchCases() {
                if(this.query === ''){
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
        }
    }
</script>

<style scoped>

</style>
