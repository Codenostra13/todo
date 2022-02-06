
<a href="{{ route('todo.index') }}">back</a><br />
Title: <br />
{{$todo['title']}}[{{$todo['status']}}]<br/>
Description: <br />
{{$todo['task']}}<br/>
Created: <br />
{{$todo['created_at']}}<br/>
Updated: <br />
{{$todo['updated_at']}}<br/>
