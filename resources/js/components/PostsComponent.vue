<template>
   <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
        </thead>
        <tbody >
                <tr v-for="post in posts" :key = "post">
                    <td>{{ post.id }}</td>
                    <td>{{ post.title }}</td>
                    <td style="display: block; max-width: 150px;" class=" text-truncate">{{ post.body }}</td>
                    <td>{{ post.created_at }}</td>
                    <td>{{ post.updated_at }}</td>
                </tr>
        </tbody>
    </table>
</template>

<script>
    export default {

        data (){
            return {
                posts:[]
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios.get('api/posts')
            .then(response=>{
                this.posts = response.data.data;
                console.log('this.posts');
            });
        }
    }
</script>
