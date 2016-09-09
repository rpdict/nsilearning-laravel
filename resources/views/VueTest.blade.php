<!DOCTYPE html>
<html xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>VueTest</title>
    <script src="{{ asset("/js/vue.js") }}"></script>
</head>

<body>
<style>
    /* 必需 */
    .expand-transition {
        transition: all .3s ease;
        height: 30px;
        padding: 10px;
        background-color: #eee;
        overflow: hidden;
    }

    /* .expand-enter 定义进入的开始状态 */
    /* .expand-leave 定义离开的结束状态 */
    .expand-enter, .expand-leave {
        height: 0;
        padding: 0 10px;
        opacity: 0;
    }
</style>
<div id="example-2">
    <div v-if="show" transition="expand">hello</div>
    <button v-on:click="show = !show">Say Hi</button>
</div>

{{--<div id="demo">--}}
    {{--<div v-if="show" transition="expand">hello</div>--}}
    {{--<button @click="show = !show">Toggle</button>--}}
{{--</div>--}}
    <script>
        var vm = new Vue({
            el: '#example-2',
            data: {
                show: true,
                transitionName: 'fade'
            },
            methods: {
                greet: function () {
                    vm.$data.show = false
                }
            }
        })


//        new Vue({
//            el: '#demo',
//            data: {
//                show: true,
//                transitionState: 'Idle'
//            },
//            transitions: {
//                expand: {
//                    beforeEnter: function (el) {
//                        el.textContent = 'beforeEnter'
//                    },
//                    enter: function (el) {
//                        el.textContent = 'enter'
//                    },
//                    afterEnter: function (el) {
//                        el.textContent = 'afterEnter'
//                    },
//                    beforeLeave: function (el) {
//                        el.textContent = 'beforeLeave'
//                    },
//                    leave: function (el) {
//                        el.textContent = 'leave'
//                    },
//                    afterLeave: function (el) {
//                        el.textContent = 'afterLeave'
//                    }
//                }
//            }
//        })

    </script>
</body>
</html>
