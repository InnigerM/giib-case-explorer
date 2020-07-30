<template>
    <div class="relative">
        <goHome></goHome>
        <div class="bg-local bg-cover bg-center rounded-2xl pt-4 pb-24"
             :style="{ backgroundImage: 'url(' + require('../../images/House_Detailed_Day'+'.png') + ')' }">
            <div class="grid grid-cols-2 justify-center pt-20 px-10 bg-darkgray rounded-t-2xl
                        lg:mb-24 lg:mx-64 mt-16 md:mb-12 md:mx-32 sm:mb-6 sm:mx-16">
                <img class="col-span-2 w-auto h-auto mx-auto mb-12" :src="require('../../images/logo.png')" alt="FHNW">
                <button class="case-window hover:bg-secondary-700 shadow-box-one shadow-box-two"
                        v-for="post in posts"
                        :style="{ backgroundImage: 'url(' + require('../../images/Window'+'.png') + ')' }"
                        @click="showPost(post.id)">
                    <span v-text="post.title" class="text-2xl text-white ml-auto mr-auto mb-auto mt-auto"></span>
                </button>
                <img class="col-span-2 w-auto h-auto mx-auto mt-12 mb-0" :src="require('../../images/door.png')" alt="DOOR">
            </div>
        </div>
    </div>
</template>

<script>
import GoHome from "./GoHome";
export default {
    name: "Explore",
    components: {GoHome},
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
