
	<div class = "text-center"><h3>新闻列表</h3></div>
	<table class = "table table-striped table-condensed" >
		<tr>
		<th>id</th>
	    <th>标题</th>
	    <th>图片</th>
		<th>内容</th>
		<th>顺序</th>
		<th>时间</th>
		<th>操作</th>
		</tr>
		<tr ng-repeat="newdata in newdatas">
        <td>{{newdata.id}}</td>
        <td style ="width:120px;"><img style ="width:100px;height: 50px;" src="{{newdata.pic}}" alt="" /></td>
		<td>{{newdata.title}}</td>
		<td>{{newdata.content}}</td>
		<td>{{newdata.content}}</td>
		<td>{{newdata.top}}</td>
		<td>{{newdata.create_time}}</td>
		<td>
			<button class="btn-sm btn-primary">修改</button>
			<button class="btn-sm btn-danger">删除</button>
			<button class="btn-sm btn-danger">停止</button>


		</td>
		</tr>
		
	</table>
	<h1>Route 1</h1>
	<hr/>
	<a ui-sref="">Show List</a>
	<div ui-view></div>