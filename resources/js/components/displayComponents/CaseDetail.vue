<template>
    <div class="relative">
        <go-home></go-home>
        <div class="py-12 px-4 rounded-2xl bg-gray-100 shadow-box-one shadow-box-two">
            <div class="relative case-image shadow-2xl mb-8"
                 v-bind:style="{ backgroundImage: 'url(' + post.image_link + ')' }">

                <div
                    class="absolute bottom-0 left-0 right-0 flex flex-wrap bg-secondary-900 bg-opacity-75 rounded-b-lg">
                    <div v-text="post.title" class="w-1/3 p-4 mt-auto mb-auto text-left text-white text-2xl">
                    </div>
                </div>
            </div>
            <div class="box-gradient flex flex-wrap">
                <p v-text="post.description" class="w-3/4 text-gray-900"></p>
                <div class="w-1/4 justify-end flex flex-wrap">
                    <div v-for="tag in tags" class="w-full mt-auto mb-auto">
                        <Tag :tag="tag"></Tag>
                    </div>
                </div>
            </div>
            <div>
                <BusinessCanvas :canvas="businessCanvas"></BusinessCanvas>
            </div>
            <div class="box-gradient">
                <div v-for="paragraph in paragraphs">
                    <Paragraph :paragraph="paragraph" :visible="false"></Paragraph>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Tag from "./Tag";
    import BusinessCanvas from "./BusinessCanvas"
    import Paragraph from "./Paragraph";
    import GoHome from "../navigation/GoHome";

    export default {
        name: "CaseDetail",
        components: {GoHome, Paragraph, BusinessCanvas, Tag},
        data() {
            return {
                post: {
                    title: '',
                    description: '',
                    image_link: ''
                },
                businessCanvas: {
                    key_partners: '',
                    key_activities: '',
                    key_resources: '',
                    value_proposition: '',
                    customer_relationship: '',
                    channels: '',
                    customer_segments: '',
                    cost_structure: '',
                    revenue_stream: ''
                },
                paragraphs: {
                    id: '',
                    title: '',
                    content: ''
                },
                tags: [{
                    id: '',
                    name: ''
                }]
            }
        },

        methods: {
            goToPage() {
                this.$router.go(-1);
            }
        },

        created() {
            axios.get(`http://giibTest.test/api/posts/${this.$route.params.id}`)
                .then(response => {
                    this.post.title = response.data.title;
                    this.post.description = response.data.description;
                    this.post.image_link = response.data.image_link;
                })
            axios.get(`http://giibTest.test/api/posts/${this.$route.params.id}/tags`)
                .then(response => {
                    this.tags = response.data
                })
            axios.get(`http://giibTest.test/api/posts/${this.$route.params.id}/paragraphs`)
                .then(response => {
                    this.paragraphs = response.data
                })
            axios.get(`http://giibTest.test/api/posts/${this.$route.params.id}/bmc`)
                .then(response => {
                    this.businessCanvas.key_partners = response.data.key_partners;
                    this.businessCanvas.key_activities = response.data.key_activities;
                    this.businessCanvas.key_resources = response.data.key_resources;
                    this.businessCanvas.value_proposition = response.data.value_proposition;
                    this.businessCanvas.customer_relationship = response.data.customer_relationship;
                    this.businessCanvas.channels = response.data.channels;
                    this.businessCanvas.customer_segments = response.data.customer_segments;
                    this.businessCanvas.cost_structure = response.data.cost_structure;
                    this.businessCanvas.revenue_stream = response.data.revenue_stream;
                })
        }
    }
</script>

<style scoped>

</style>
