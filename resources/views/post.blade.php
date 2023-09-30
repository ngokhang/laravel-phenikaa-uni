<table>
  <thead>
    <th>ID</th>
    <th>Title</th>
    <th>Content</th>
    <th>Author</th>
    <th>Option</th>
  </thead>
  <tbody>
    @foreach ($postList as $post)
    <tr>
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->content}}</td>
      <td>{{$post->user->name}}</td>
      <td>
        <a href="{{route('posts.show', $post)}}">View</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
