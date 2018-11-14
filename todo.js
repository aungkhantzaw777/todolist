var i = 0;

	var vm = new Vue({
		// this.$http.post('/api.php',this.allData);


		data:{
			allData:[],
			task:[],
			Newtask:{id:'',TaskName:''}
		},
		created(){
			fetch('api.php?action=1')
			.then(response => response.json())
			.then(json => {
				this.task = json
			})
		},
		methods:{
			add:function(event){
				i++;
				let TaskName = this.Newtask.TaskName;
				console.log(name);

				if(TaskName.trim() == ''){
					alert('please fill task')
					event.stop();
				}
				// this.task = [];
				// alert(TaskName);

				this.task = [];
				// event.stop();
				fetch('api.php?action=2&task='+TaskName)
				.then(response => response.json())
				.then(json => {
					this.task = json
				})

				// this.task.push({id:i,TaskName:TaskName});
				this.Newtask = ({id:'',TaskName:''});
			},
			Del:function(index){
				
				let id = this.task[index].id;
				this.task = [];



				fetch('api.php?action=3&id='+id)
				.then(response => response.json())
				.then(json => {
					this.task = json
				})
					
			}
			Edit:function(index){
				alert("double click work!");
			}
		}
	}).$mount('#app')