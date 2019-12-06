@extends('msg')


@section('content')
	<p>
		<a href="/add">添加新留言</a>
	</p>
	<div>
		<table border="1" cellpadding="20" cellspacing="0">
			<tr>
				<td>Id</td>
				<td>标题</td>
				<td>发表者</td>
				<td>发表时间</td>
				<td>操作</td>
			</tr>
			@foreach($msgs as $msg)
			<tr>
				<td>{{$msg->id}}</td>
				<td>{{$msg->title}}</td>
				<td>{{$msg->author}}</td>
				<td>{{$msg->updated_at}}</td>
				<td>
					<a href="/view/{{ $msg->id }}">查看</a>
					<a href="/delete/{{ $msg->id }}">删除</a>
					<a href="/edit/{{ $msg->id }}">编辑</a>
				</td>	
			
			</tr>
				@endforeach
		</table>
		
	</div>
	
@endsection


