<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Video Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url_video', 'Url Video:') !!}
    {!! Form::text('url_video', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Bg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bg', 'Bg:') !!}
    {!! Form::file('bg', null) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mainBlocks.index') }}" class="btn btn-secondary">Cancel</a>
</div>

