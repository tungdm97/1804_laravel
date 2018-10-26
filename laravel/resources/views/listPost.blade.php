
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>title</th>
			<th>description</th>
			<th>status</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
		<tr>
			<td>{{$post->id}}</td>
			<td>{{$post->title}}</td>
			<td>{{$post->description}}</td>
			<td>{{$post->status}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
