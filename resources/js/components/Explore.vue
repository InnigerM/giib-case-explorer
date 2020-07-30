<template>
    <div class="relative">
        <button
            class="nav-aligned"
            @click="goToPage('')"
            :style="{ backgroundImage: 'url(' + ('../../images/explore.png') + ')' }">
        </button>
        <div class="bg-local bg-cover bg-center rounded-2xl pt-4 pb-24"
             :style="{ backgroundImage: 'url(' + require('../../images/House_Detailed_Day'+'.png') + ')' }">
            <div class="flex flex-wrap justify-center pt-20 px-10 mb-24 mx-64 mt-16 bg-darkgray">
                <span class="w-1/3"></span>
                <img class="w-auto h-auto mb-12" :src="require('../../images/logo.png')" alt="FHNW">
                <span class="w-1/3"></span>
                <button class="case-window shadow-box-one shadow-box-two"
                        v-for="post in posts"
                        :style="{ backgroundImage: 'url(' + require('../../images/Window'+'.png') + ')' }"
                        @click="showPost(post.id)">
                    <span v-text="post.title" class="text-2xl text-white ml-auto mr-auto mb-auto mt-auto"></span>
                </button>
                <span class="w-1/4"></span>
                <img class="w-auto h-auto mb-0" :src="require('../../images/door.png')" alt="DOOR">
                <span class="w-1/4"></span>
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
