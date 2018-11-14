<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>to do list</title>
	<link rel="stylesheet" href="style.css">
	<style>
		
	</style>
</head>
<body>
	<div id="app">
		<h1>to do list</h1>
		<div id="show" class="show">
			<ul v-for="(todo,index) in task">
				<li title='todo.id' v-on:dbclick="Edit(index)">{{todo.TaskName}}<span @click="Del(index)">&times;</span></li> 
			</ul>
		</div>
		<input type="text" v-model="Newtask.TaskName">	
		<button v-on:click='add'>add more</button>
		<div class='hide'>
			
			{{$data|json}}
		</div>
	</div>
</body>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<script src="todo.js"></script>
</html>