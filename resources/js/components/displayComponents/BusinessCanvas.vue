<template>
    <div class="box-gradient">
        <h2 class="text-xl text-gray-900">Business Model Canvas</h2>
        <div class="grid grid-cols-10 grid-rows-3 border-gray-900 border-2 mb-8">

            <div class="row-span-2 col-span-2 business-canvas-item">
                <h2 class="text-lg text-gray-900">Key Partners</h2>
                <ul class="business-canvas-list">
                    <li v-for="keyPartners in canvas.key_partners.split(',')">
                        {{keyPartners}}
                    </li>
                </ul>
            </div>

            <div class="row-span-1 col-span-2 business-canvas-item">
                <h2 class="text-lg text-gray-900">Key Activities</h2>
                <ul class="business-canvas-list">
                    <li v-for="keyActivities in canvas.key_activities.split(',')">
                        {{keyActivities}}
                    </li>
                </ul>
            </div>

            <div class="row-span-2 col-span-2 business-canvas-item">
                <h2 class="text-lg text-gray-900">Value Propositions</h2>
                <ul class="business-canvas-list">
                    <li v-for="valuePropositions in canvas.value_proposition.split(',')">
                        {{valuePropositions}}
                    </li>
                </ul>
            </div>

            <div class="row-span-1 col-span-2 business-canvas-item">
                <h2 class="text-lg text-gray-900">Customer Relationships</h2>
                <ul class="business-canvas-list">
                    <li v-for="customerRelationships in canvas.customer_relationship.split(',')">
                        {{customerRelationships}}
                    </li>
                </ul>
            </div>

            <div class="row-span-2 col-span-2 business-canvas-item">
                <h2 class="text-lg text-gray-900">Customer Segments</h2>
                <ul class="business-canvas-list">
                    <li v-for="customerSegments in canvas.customer_segments.split(',')">
                        {{customerSegments}}
                    </li>
                </ul>
            </div>

            <div class="row-span-1 col-span-2 business-canvas-item">
                <h2 class="text-lg text-gray-900">Key Resources</h2>
                <ul class="business-canvas-list">
                    <li v-for="keyResources in canvas.key_resources.split(',')">
                        {{keyResources}}
                    </li>
                </ul>
            </div>

            <div class="row-span-1 col-span-2 business-canvas-item">
                <h2 class="text-lg text-gray-900">Channels</h2>
                <ul class="list-disc pl-8">
                    <li v-for="channels in canvas.channels.split(',')">
                        {{channels}}
                    </li>
                </ul>
            </div>

            <div class="col-span-2 col-span-5 business-canvas-item">
                <h2 class="text-lg text-gray-900">Cost Structure</h2>
                <ul class="business-canvas-list">
                    <li v-for="costStructure in canvas.cost_structure.split(',')">
                        {{costStructure}}
                    </li>
                </ul>
            </div>

            <div class="col-span-3 col-span-5 business-canvas-item">
                <h2 class="text-lg text-gray-900">Revenue Stream</h2>
                <ul class="business-canvas-list">
                    <li v-for="revenueStream in canvas.revenue_stream.split(',')">
                        {{revenueStream}}
                    </li>
                </ul>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "BusinessCanvas",

        props: {
            canvas: Object
        }
    }
</script>

<style scoped>

</style>
