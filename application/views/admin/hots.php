	
	<div class = "text-center"><h3>热点图片列表</h3></div>
	<table class = "table table-striped table-condensed" >
		<tr>
		<th>id</th>
	    <th>图片</th>
		<th>描述</th>
		<th>顺序</th>
		<th>时间</th>
		<th>操作</th>
		</tr>
		<tr ng-repeat="hotdata in hotdatas">
        <td>{{hotdata.id}}</td>
        <td style ="width:120px;"><img style ="width:100px;height: 50px;" src="{{hotdata.path}}" alt="" /></td>
		<td>{{hotdata.des}}</td>
		<td>{{hotdata.top}}</td>
		<td>{{hotdata.create_time}}</td>
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
	<a ui-sref="">Show List</a>
	<div ui-view></div>