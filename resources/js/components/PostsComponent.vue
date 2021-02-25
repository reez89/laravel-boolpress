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
            <tr v-for="(post, index) in posts" :key = "index">
                <td>{{ post.id }}</td>
                <td>{{ post.title }}</td>
                <td style="display: block; max-width: 150px;" >{{ post.body }}</td>
                <td>{{ post.created_at }}</td>
                <td>{{ post.updated_at }}</td>

                <!-- Da implementare la visualizzazione dei pulsanti -->
                <!-- <td>
                    <a href="{{ route('posts.show') }}" class="btn btn-info btn-block">View</a>
                    <a href=" {{ route('posts.edit') }}" class="btn btn-warning btn-block">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }} " method="POST">
                    <input type="submit" value="Delete" class="btn btn-danger btn-block">    
                    </form>
                </td> -->
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
