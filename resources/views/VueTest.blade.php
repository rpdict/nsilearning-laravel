<!DOCTYPE html>
<html xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>VueTest</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.min.js"></script>
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
    <button v-on:click="show">Say Hi</button>
    <div v-if="show" transition="expand">hello</div>
    <div v-if="show" :transition="transitionName">hello</div>
</div>

    <script>
        new Vue({
            el: '#example-2',
            data: {
                show: true,
                transitionName: 'fade'
            },
            methods: {
                show: function () {
                    show: false
                }
            }
        })
    </script>
</body>
</html>
