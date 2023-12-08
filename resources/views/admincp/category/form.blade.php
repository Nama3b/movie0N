@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 mt-5">
            <div class="card-header">
                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {!! Form::open(['url' => 'category.store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {!! Form::label('cat_name', 'Name', []) !!}
                        {!! Form::text('cat_name', null, ['class' => 'form-control', 'placeholder' => 'Fill a field', 'id' => 'cat_name']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('cat_name', 'Name', []) !!}
                        {!! Form::text('cat_name', null, ['class' => 'form-control', 'placeholder' => 'Fill a field', 'id' => 'cat_name']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('cat_name', 'Name', []) !!}
                        {!! Form::text('cat_name', null, ['class' => 'form-control', 'placeholder' => 'Fill a field', 'id' => 'cat_name']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="card-body"></div>
        </div>
    </div>
</div>
@endsection
