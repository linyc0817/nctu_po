<template>
    <div>Hello Vue Template {{ foo }}</div>
</template>
<script>
    export default {
        data() {
            return {
                foo: 'hey regulations'
            }
        }
    }
</script>

<style lang="scss" scoped>
div {
    color: #f00;
}
</style>
