<template>
    <div class="relative h-screen">
        <goHome></goHome>
        <div class="py-12 px-4 bg-gray-100 rounded-2xl pb-8 shadow-box-one shadow-box-two">
            <div class="box-gradient">
                <h1 class="page-title">Geschäftsinnovation im Bauwesen</h1>
                <p class="mb-8">Hier sind alle Informationen rund um die Website beschrieben</p>
                <div class="grid grid-cols-2">
                    <div
                        class="row-span-1 box-gradient m-2 bg-center bg-cover bg-no-repeat h-128 hover:font-semibold relative"
                        @click="goToPage('explore')"
                        :style="{ backgroundImage: 'url(' + require('../images/House_Detailed_Day.png') + ')' }">
                        <div class="p-4 absolute left-0 bottom-0 bg-secondary-700 rounded-b-2xl">
                            <h2 class="text-2xl text-white">Entdecken</h2>
                            <p class="text-white">Du weisst (noch) nicht genau, wo dich dein Weg hinführen soll? Lass
                                dich hier inspirieren</p>
                        </div>
                    </div>
                    <div
                        class="row-span-1 box-gradient m-2 bg-center bg-cover bg-no-repeat h-128 hover:font-semibold relative"
                        @click="goToPage('cases')"
                        :style="{ backgroundImage: 'url(' + ('../../images/House_Detailed_Day_Cover.png') + ')' }">
                        <div class="p-4 absolute left-0 bottom-0 bg-secondary-700 rounded-b-2xl">
                            <h2 class="text-2xl text-white">Alles Ansehen</h2>
                            <p class="text-white">Du warst schon mal hier? Oder du weisst genau wonach du suchst?
                                Dann bist du hier richtig aufgehoben</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import GoHome from "./components/GoHome";

export default {
    name: "Home.vue",

    components: {GoHome},

    methods: {
        goToPage(link) {
            this.$router.push({path: `/${link}`});
        },
    },
}
</script>

