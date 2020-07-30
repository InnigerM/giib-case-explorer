<template>
    <div class="relative">
        <button
            class="nav-aligned"
            @click="goToPage('')"
            :style="{ backgroundImage: 'url(' + ('../../images/explore.png') + ')' }">
        </button>
        <div class="bg-local bg-cover bg-center rounded-2xl pt-4 pb-24"
             :style="{ backgroundImage: 'url(' + require('../../images/House_Detailed_Day'+'.png') + ')' }">
            <div
                class="primary flex flex-wrap justify-center pb-64 pt-48 px-10 mb-32 mx-64 mt-16 bg-no-repeat bg-center bg-contain"
                :style="{ backgroundImage: 'url(' + require('../../images/House'+'.png') + ')' }">
                <div class="case-window"
                     v-for="post in posts"
                     :style="{ backgroundImage: 'url(' + require('../../images/Window'+'.png') + ')' }"
                     @click="showPost(post.id)">
                    <span v-text="post.title" class="text-2xl text-white ml-auto mr-auto mb-auto mt-auto"></span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Explore",

        data() {
            return {
                post: {
                    title: '',
                    content: '',
                    image_link: '',
                    tag: ''
                },
                tags: [
                    'BIM',
                    'Nachhaltig',
                    'VR',
                    'Drohnen',
                    'Roche'
                ],
                posts: []
            }
        },

        methods: {
            showPost(id) {
                this.$router.push({path: `/cases/${id}`});
            },
            goToPage(link) {
                this.$router.push({path: `/${link}`});
            },
            filter(tag) {
                axios.get(`http://giibTest.test/api/posts/byTag/${tag}`)
                    .then(response => {
                        let {data} = response;
                        this.posts = data;
                    })
            }
        },

        created() {
            axios.get('http://giibTest.test/api/posts/favorite')
                .then(response => {
                    let {data} = response;
                    this.posts = data;
                })
        }
    }
</script>

<style scoped>

</style>
