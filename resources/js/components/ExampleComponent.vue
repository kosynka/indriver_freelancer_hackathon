<template>
    <div>
        <div v-for="reply in items">
            <reply :data="reply"></reply>
        </div>
    </div>
</template>

<script>
    import Reply from './Reply.vue';

    export default {
        props: ['data'], // accepts data for replies

        components: {Reply},

        data() {
            return {
                items: this.data
            }
        }
    }
</script>


var vm = new Vue({
    el: "#app",
    data: {
        labels: [ new Date("2018-07-07 00:00:00"), new Date("2018-07-08 00:00:00") ],
        values: [
            [ new Date("2018-07-07 00:00:00"), 55 ],
            [ new Date("2018-07-07 12:42:33"), 30 ],
            [ new Date("2018-07-07 15:11:12"), 70 ],
            [ new Date("2018-07-07 19:12:00"), 90 ],
            [ new Date("2018-07-07 22:55:55"), 45 ]
        ]
    }
});