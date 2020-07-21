<template>
        <div class="justify-content-center">
            <!-- <h2>{{ this.$root.sample = token }}</h2> -->
            <!-- <p class="hidden">{{ this.$parent.sample = token }}</p> -->
            <h2>Login</h2>
            <form @submit.prevent="login" class="mb-3">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="email" v-model="user.email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="password" v-model="user.password" required>
                </div>
                <button type="submit" class="btn btn-info text-white btn-block">Login</button>
            </form>
        </div>
</template>

<script>
export default {
    data () {
        return {
            user: {
                id: '',
                email: '',
                password: ''
            },
            token: '',
        }
    }, 


    methods : {
        login(){
            const self = this;
            var user = this.user;
            
            axios.post('api/login', user).then(function (response) {
                // assign token for sanctum authorization
                self.token = response.data['token'];
                
            });
                //set cookie value
                document.cookie = "sample="+ self.token;

                window.location.href = "/"
                // var cookie = this.getCookie('sample');
                // console.log(self.token); 
                // console.log(cookie);
        },

        getCookie (name){
            let a = `; ${document.cookie}`.match(`;\\s*${name}=([^;]+)`);
            return a ? a[1] : '';

        }


    }
}
</script>