<div class="table-responsive-sm">
    <table class="table table-striped" id="serviceSeconds-table">
        <thead>
            <tr>
                <th>Icon</th>
        <th>Content</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($serviceSeconds as $serviceSecond)
            <tr>
                <td><img src="{{ $serviceSecond->getImage() }}" alt=""></td>
            <td>{{ $serviceSecond->content }}</td>
                <td>
                    {!! Form::open(['route' => ['serviceSeconds.destroy', $serviceSecond->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('serviceSeconds.show', [$serviceSecond->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('serviceSeconds.edit', [$serviceSecond->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
