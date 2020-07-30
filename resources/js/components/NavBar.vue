<template>
    <header class="flex bg-secondary-900 rounded-b-lg z-10">
        <h1 class="w-1/2 pl-32 text-4xl text-white font-bold">GIIB</h1>
        <div id="nav-bar" class="flex w-full pt-4 justify-end bg-secondary-900 rounded-b-lg">
            <section class="relative w-1/6">
                <button @click="goToPage('explore')"
                        class="uppercase font-bold text-white mb-5 text-base">
                    Entdecken
                </button>
            </section>

            <section class="relative w-1/6">
                <button @click="goToPage('cases')" class="uppercase font-bold text-white mb-5 text-base">
                    Alles ansehen
                </button>
            </section>
        </div>
    </header>
</template>

<script>
    export default {
        name: "nav-bar",

        methods: {
            goToPage(link) {
                this.$router.push({path: `/${link}`});
            }
        }
    }
</script>

<style scoped>

</style>
