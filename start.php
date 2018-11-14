<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>vue instance</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div id="app">
		first name is : {{fname}}

		<input type="text" v-model="fname">
	</div>
</body>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<script>
	var _obj = {fname:'aung',lname:'khant'};

	var vm = new Vue({
		data:_obj
	}).$mount('#app');

	console.log(vm.$data.fname);
	
</script>
</html>