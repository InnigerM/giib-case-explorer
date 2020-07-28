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

                    <div v-for="paragraph in paragraphs">
                        <label class="w-full">
                            Paragraphen:
                            <textarea class="w-full border-gray-500 border-2  p-1 mb-5"
                                      placeholder="Paragraph hier hinzufügen..."
                                      v-model="post.content"></textarea>
                        </label>
                    </div>

                    <label class="w-full">
                        Image Link:
                        <input class="w-full border-gray-500 border-2  p-1 mb-5" placeholder="Paste an image link here"
                               v-model="post.image_link">
                    </label>

                    <label class="w-full">
                        Tag:
                        <input class="w-full border-gray-500 border-2  p-1 mb-5" placeholder="Paste an image link here"
                               v-model="post.tag">
                    </label>
                </form>

                <button :disabled="!isValid" class="btn btn-primary m-2" @click="createPost()">Submit</button>
                <button class="btn btn-tertiary-white m-2" @click="viewCases()">Cancel</button>
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
                    image_link: '',
                    tag: ''
                },
                paragraphs: {
                    paragraph_one: '1',
                    paragraph_two: '2',
                    paragraph_three: '3',
                    paragraph_four: '4',
                    paragraph_five: '5',
                    paragraph_six: '6',
                    paragraph_seven: '7',
                    paragraph_eight: '8',
                    paragraph_nine: '9',
                    paragraph_ten: '10'
                }
            }
        },

        methods: {
            createPost() {
                axios.post('http://giibTest.test/api/posts', {
                    title: this.post.title,
                    content: this.post.content,
                    image_link: this.post.image_link,
                    tag: this.post.tag
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
