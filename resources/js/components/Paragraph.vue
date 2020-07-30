<template>
    <div>
        <h3 v-text="paragraph.title"
            @click="toggleCollapse"
            class="text-gray-900 pl-8 mb-4 text-xl bg-no-repeat bg-contain"
            :style="{ backgroundImage: 'url(' + ('../../images/arrow_right.png') + ')' }"></h3>
        <p v-show="visible" v-text="paragraph.content" class="pb-8"></p>
    </div>
</template>

<script>
    export default {
        name: "Paragraph",

        props: {
            paragraph: Object,
            visible: Boolean,
        },

        methods: {
            toggleCollapse(){
                this.visible = !this.visible;
            }
        }
    }
</script>

<style scoped>

</style>
