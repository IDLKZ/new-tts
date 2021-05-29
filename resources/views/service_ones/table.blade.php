<div class="table-responsive-sm">
    <table class="table table-striped" id="serviceOnes-table">
        <thead>
            <tr>
                <th>Icon</th>
        <th>Content</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($serviceOnes as $serviceOne)
            <tr>
                <td><img src="{{$serviceOne->getImage()}}" width="45" height="45" alt=""></td>
            <td>{{ $serviceOne->content }}</td>
                <td>
                    {!! Form::open(['route' => ['serviceOnes.destroy', $serviceOne->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('serviceOnes.show', [$serviceOne->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('serviceOnes.edit', [$serviceOne->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
