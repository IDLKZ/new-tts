@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('mainBlocks.index') !!}">Main Block</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Main Block</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($mainBlock, ['route' => ['mainBlocks.update', $mainBlock->id], 'method' => 'patch', 'files' => true]) !!}

                              @include('main_blocks.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
{{--@push('scripts')--}}
{{--    <script src="https://cdn.ckeditor.com/4.16.1/full-all/ckeditor.js"></script>--}}
{{--    <script>--}}
{{--        CKEDITOR.replace( 'content' );--}}
{{--    </script>--}}
{{--@endpush--}}
