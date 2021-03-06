@extends('master')
@section('title', 'Crud - ADD')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Create Data</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form class="" action="{{route('blog.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group{{ ($errors->has('title')) ? $errors->first('title') : '' }}">
                <input type="text" name="title" class="form-control" placeholder="insira o título">
                {!! $errors->first('title','<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group{{ ($errors->has('description')) ? $errors->first('title') : '' }}">
                <textarea name="description" class="form-control" rows="5" id="description"></textarea>
                {!! $errors->first('description','<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="save">
            </div>
        </form>
    </div>
</div>
@stop