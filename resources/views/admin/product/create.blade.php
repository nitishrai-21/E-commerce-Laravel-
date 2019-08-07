@extends('admin.layout.admin')

@section('content')
    <h1> Add Product</h1>
    {!! Form::open(['action'=> 'ProductsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title','',['class' => 'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description','',['class' => 'form-control','placeholder'=>'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('size', 'Size')}}
            {{Form::select('size',['small'=>'Small', 'medium'=>'Medium', 'large'=>'Large'],'',['class' => 'form-control','placeholder'=>'--select--'])}}
        </div>
        <div class="form-group">
            {{Form::label('category_id', 'Category')}}
            {{Form::select('category_id',$categories,'',['class' => 'form-control','placeholder'=>'--select--'])}}
        </div>
        <div class="form-group">
            {{Form::label('image', 'Image')}}
            {{Form::file('image',['class' => 'form-control'])}}
        </div>
        {{Form::submit('Add Product',['class'=>'btn btn-primary'])}}
    {{ Form::close() }}

@endsection