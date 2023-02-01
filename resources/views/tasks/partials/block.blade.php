<h1>All Tasks</h1>
<hr>
<ol style="margin-left: -30px">
    @foreach ($tasks as $task)
        <li>
            <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
        </li>
    @endforeach
</ol>
