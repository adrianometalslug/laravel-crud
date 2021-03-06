@extends('master')
@section('title', 'Crud - EDIT')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Edit Data</h1>
    </div>
</div>
<div class="row">
    <form class="" action="{{route('blog.update',$blog->id)}}" method="post">
        <input name="_method" type="hidden" value="PATCH">
        {{csrf_field()}}
        <div class="form-group{{ ($errors->has('title')) ? $errors->first('title') : '' }}">
            <input type="text" name="title" class="form-control" placeholder="Enter Title Here" value="{{$blog->title}}">
            {!! $errors->first('title','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('description')) ? $errors->first('title') : '' }}">
            <textarea name="description" class="form-control" rows="5" id="description">{{$blog->description}}</textarea>
            {!! $errors->first('description','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="save">
        </div>
    </form>
</div>
@stop