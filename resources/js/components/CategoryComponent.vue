<template>
    
    <ul>
        <li 
            v-for="(category, index) in categories" :key="index">
                {{ category.title }} : {{ category.body }}
        </li>
    </ul>

</template>

<script>
    export default {
        data(){
            return {
                categories:[]
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios
            .get('api/category')
            .then(response =>{
                this.categories = response.data.data;
                console.log('this.category');
            })

        }
    }
</script>
