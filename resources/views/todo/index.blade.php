@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

<table>
    <thead>
        <tr>
        @foreach ($statuses as $status )
            <th>{{$status['name']}}</th>
        @endforeach
        </tr>
    </thead>

    <tbody>
        <tr>
        @foreach ($statuses as $status )
            <td>
                <ul>
                    @foreach ($todos[$status['id']] as $todo )
                        <li>{{$todo['title']}}
                            <a href="{{ route('todo.show', $todo['id']) }}">show</a>
                            @if ($todo['status'] == 10)
                                <a href="{{ route('todo.finish', $todo['id']) }}">finish</a>
                            @elseif ($todo['status'] == 20)
                                <a href="{{ route('todo.delete', $todo['id']) }}">delete</a>
                            @else
                                <a href="{{ route('todo.inprogress', $todo['id']) }}">in progress</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </td>
        @endforeach
        </tr>
    </tbody>
</table>


<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('todo.create')}}">
@csrf
    <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" id="title" name="title" class="form-control">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea name="task" class="form-control" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
