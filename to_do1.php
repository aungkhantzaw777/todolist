<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>to do list</title>
	<link rel="stylesheet" href="#">
	<style>
		.show{
			
			width: 500px;
		}
		#app{
			width: 1000px;
			margin: 0 auto;
		}
		h1{
			border-bottom: 1px solid #000;
		}
		li span{
			float: right;
			display: none;
			cursor: pointer;
			font-size: 12px;
		}
		li:hover span{
			display: block;
		}
		li span:hover{
			color:red;
		}
		.hide{
			/*display: none;*/
		}
	</style>
</head>
<body>
	<div id="app">
		<h1>to do list</h1>
		<div id="show" class="show">
			<ul v-for="(todo,index) in task">
				<li title='todo.id'>{{todo.name}} <span v-on:click="Del(index)">x<span></li>
			</ul>
		</div>
		<input type="text" v-model="Newtask.name">	
		<button v-on:click='add'>add more</button>
		<div class='hide'>
			
			{{$data|json}}
		</div>
	</div>
</body>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<script>
	var i = 0;

	var vm = new Vue({
		// this.$http.post('/api.php',this.allData);


		data:{
			allData:[],
			task:[],
			Newtask:{id:'',name:''}
		},
		
		methods:{
			add:function(event){
				i++;
				let name = this.Newtask.name;
				console.log(name);
				if(name.trim() == ''){
					alert('please fill task')
					event.stop();
				}
				this.task.push({id:i,name:name});
				this.Newtask = ({id:'',name:''});
			},
			Del:function(index){
				// alert(index);
				this.task.splice(index,1);
			}
		}
	}).$mount('#app')
</script>
</html>