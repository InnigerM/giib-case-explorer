<template>
    <div class="relative">
        <button
            class="nav-aligned"
            @click="goToPage('')"
            :style="{ backgroundImage: 'url(' + ('../../images/back.png') + ')' }">
        </button>
        <div class="py-12 px-4 bg-gray-100 rounded-2xl pb-8 shadow-box-one shadow-box-two">
            <div class="box-gradient">
                <h1 class="page-title">Geschäftsinnovation im Bauwesen</h1>
                <p>Hier sind alle Informationen rund um die Website beschrieben</p>
            </div>
            <div class="box-gradient flex">
                <div class="w-1/2 box-gradient m-2">
                    <h2 class="text-2xl text-gray-900">Lass dich inspirieren</h2>
                    <Explore></Explore>
                </div>
                <div class="w-1/2 box-gradient m-2">
                    <h2 class="text-2xl text-gray-900">Suchen und Filtern</h2>
                    <CaseOverview></CaseOverview>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Explore from "./components/Explore";
import CaseOverview from "./components/CaseOverview";
export default {
    name: "Home.vue",

    components: {CaseOverview, Explore},

    methods: {
        goToPage(link) {
            this.$router.push({path: `/${link}`});
        },
    },
}
</script>

<style scoped>

</style>
