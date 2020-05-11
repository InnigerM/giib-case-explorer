<template>
    <div>
        <h1 class="page-title">Create a new Business Case</h1>
        <div>
            <div class="mb-8">
                <form>
                    <label class="w-full">
                        Title:
                        <input class="w-full border-gray-500 border-2 p-1 mb-5" placeholder="Case title"
                               v-model="post.title">
                    </label>

                    <label class="w-full">
                        Content:
                        <textarea class="w-full border-gray-500 border-2  p-1 mb-5"
                                  placeholder="Case content goes here..."
                                  v-model="post.content"></textarea>
                    </label>

                    <label class="w-full">
                        Image Link:
                        <input class="w-full border-gray-500 border-2  p-1 mb-5" placeholder="Paste an image link here"
                               v-model="post.image_link">
                    </label>
                </form>

                <button :disabled="!isValid" class="btn btn-primary m-2" @click="createPost()">Submit</button>
                <button class="btn btn-tertiary m-2" @click="viewCases()">Cancel</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CaseCreate",

        data() {
            return {
                post: {
                    title: '',
                    content: '',
                    image_link: ''
                }
            }
        },

        methods: {
            createPost() {
                axios.post('http://giibTest.test/api/posts', {
                    title: this.post.title,
                    content: this.post.content,
                    image_link: this.post.image_link
                })
                    .then(response => {
                        console.log(response);
                        this.$router.push('/cases');
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },

            viewCases() {
                this.$router.push('/cases');
            }
        },

        computed: {
            isValid() {
                return this.post.title !== '' && this.post.content !== '' && this.post.image_link !== '';
            }
        }
    }
</script>

<style scoped>

</style>
