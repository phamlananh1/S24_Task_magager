@extends('home')
@section('title', 'Thêm mới công viêc')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>{!! __('language.name') !!}</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>{!! __('language.name') !!}</label>
                    <input type="text" class="form-control ) is-invalid "
                           name="title" required>
                </div>
                <div class="form-group">
                    <label>{!! __('language.content') !!}</label>
                    <input type="text" class="form-control" name="content" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">{!! __('language.image') !!}</label>
                    <input type="file" name="image" class="form-control-file" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">{!! __('language.dua_date') !!}</label>
                    <input type="date" name="dua_date" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">{!! __('language.create') !!}</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">{!! __('language.cancel') !!}</button>
            </form>
        </div>
    </div>

@endsection