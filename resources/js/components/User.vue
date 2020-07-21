<template>
    <h2>This is a user</h2>
</template>

<script>
export default {
    data() {
        return {
            token_shit: '',
        }
    },

    //run when page is load
    created (){
        var cookie = this.getCookie('sample');
        // token_shit = cookie;
        console.log(cookie);
    },

    methods: {
        getCookie (name){
            let a = `; ${document.cookie}`.match(`;\\s*${name}=([^;]+)`);
            return a ? a[1] : '';

        }
    }
}
</script>