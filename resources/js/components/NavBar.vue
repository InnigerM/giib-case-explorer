<template>
    <header class="flex bg-green-900 rounded-b-lg">
        <h1 class="w-1/2 pl-32 text-4xl text-white font-bold">GIIB</h1>
        <div class="absolute m-4 mt-3 h-20 w-24 rounded-full bg-green-700 bg-contain bg-no-repeat bg-center border-white border-4"
             :style="{ backgroundImage: 'url(' + require('../../images/' + `${status}` +'.png') + ')' }">

        </div>
        <div id="nav-bar" class="flex w-full pt-4 justify-end bg-green-900 rounded-b-lg">
            <section class="relative w-1/6">
                <button @hover="exploreIsOpen= !exploreIsOpen" @click="exploreIsOpen = !exploreIsOpen"
                        class="uppercase font-bold text-white mb-5 text-base">
                    Explore
                </button>
                <button v-if="exploreIsOpen"
                        @click="exploreIsOpen = false"
                        class="fixed left-0 right-0 bottom-0 top-0 h-full w-full bg-black opacity-25 cursor-default">
                </button>
                <div v-if="exploreIsOpen" class="absolute w-full rounded-md bg-green-700 p-2 text-sm">
                    <router-link @click="ExploreIsOpen=false" class="text-black" to="/" exact>Explore Cases
                    </router-link>
                </div>
            </section>

            <section class="relative w-1/6">
                <button @click="viewIsOpen = !viewIsOpen" class="uppercase font-bold text-white mb-5 text-base">
                    View
                </button>
                <button v-if="viewIsOpen"
                        @click="viewIsOpen = false"
                        class="fixed left-0 right-0 bottom-0 top-0 h-full w-full bg-black opacity-50 cursor-default">
                </button>
                <div v-if="viewIsOpen" class="absolute flex flex-wrap w-auto rounded-md bg-green-700 text-sm">
                    <router-link @click="viewIsOpen=false" class="text-black w-full p-2" to="/cases" exact>View Cases
                    </router-link>
                    <router-link @click="viewIsOpen=false" class="text-black w-full p-2" to="/cases/create" exact>Create
                        new Case
                    </router-link>
                </div>
            </section>
        </div>
    </header>
</template>

<script>
    export default {
        name: "nav-bar",

        data() {
            return {
                viewIsOpen: false,
                exploreIsOpen: false,
                status: "explore"
            }
        }
    }
</script>

<style scoped>

</style>
