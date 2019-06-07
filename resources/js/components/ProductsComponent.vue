<template>
    <div>
        <polaris-page>
            <polaris-card
                sectioned
                title="My Shopify Vue App">
                Uses EastsideCo port of Polaris to Vue
            </polaris-card>
            <polaris-card sectioned>
                <polaris-layout-section>
                    <polaris-resource-list :items="apidata">
                        <template slot="item" slot-scope="props">
                            <polaris-resource-list-item
                                :attribute-one="props.item.title"
                                :attribute-two="props.item.created_at"
                                :media="props.item.image">
                            </polaris-resource-list-item>
                        </template>
                    </polaris-resource-list>
                </polaris-layout-section>
            </polaris-card>
        </polaris-page>
    </div>
</template>

<script>
    import PolarisResourceListItem from "@eastsideco/polaris-vue/src/components/PolarisResourceListItem";
    import PolarisHeading from "@eastsideco/polaris-vue/src/components/PolarisHeading";
    export default {
        components: {PolarisHeading, PolarisResourceListItem},
        mounted() {
            console.log('Component loaded')
        },
        created() {
            this.fetchProducts()
        },
        data() {
            return {
                apidata: ""
            }
        },
        methods: {
            fetchProducts() {
                axios.get('/api/products').then(response => {
                    this.apidata = response.data.products
                })
            }
        }
    }
</script>
