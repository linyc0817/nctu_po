<template>
	<div>
		<div>Hello Vue Template {{ foo }}</div>
		<router-view></router-view>
	</div>
</template>
<script>
    export default {
        data() {
            return {
                foo: 'hey home'
            }
        }
    }
</script>

<style lang="scss" scoped>
div {
    color: #f00;
}
</style>
