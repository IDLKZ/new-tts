<!-- Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icon', 'Icon:') !!}
    {!! Form::file('icon', null) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('advantageBlocks.index') }}" class="btn btn-secondary">Cancel</a>
</div>
