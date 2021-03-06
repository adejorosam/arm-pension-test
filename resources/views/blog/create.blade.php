@extends('layouts.app')
@section('title')
    Post Blog | ARM Pension
@endsection
@section('content')
<div class="container">
    <h1>Create Blog</h1>
    {!! Form::open(['action'=>'BlogController@store', 'method' => 'POST','enctype'=>"multipart/form-data"]) !!}

        <div class="form-group">
            {{Form::label('Title',  'Title')}}
            {{Form::text('title','', ['class' =>'form-control', 'placeholder' => "Title"])}}
        </div>

        
        <div class="form-group">
            <label> Body </label>
            <textarea style="height:250px;" class="form-control" name="body"></textarea>
        </div>

        
    <div class="form-group">
        <label for="file">Upload images</label>
        <input required type="file" class="form-control" name="image">
    </div>




        {{Form::submit('Create', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea',
        width: 900,
        height: 300
    });
</script>


