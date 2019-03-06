@extends('home')
@section('title', 'Cập nhật công viêc')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>{!! __('language.task') !!}</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('tasks.update', $task->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>{!! __('language.name') !!}</label>
                    <input type="text" class="form-control" name="title" value="{{ $task->title }}" required>
                </div>
                <div class="form-group">
                    <label>{!! __('language.content') !!}</label>
                    <input  type="text" class="form-control" name="content"  value="{{ $task->content }}" required>
                </div>
                <div class="form-group">
                    <label>{!! __('language.image') !!}</label>
                    <input type="file" name="image" class="form-control-file" >
                </div>
                <div class="form-group">
                    <label>{!! __('language.dua_date') !!}</label>
                    <input type="date" name="dua_date" class="form-control"  value="{{ $task->dua_date }}" required>
                </div>
                <button type="submit" class="btn btn-primary">{!! __('language.edit') !!}</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">{!! __('language.cancel') !!}</button>
            </form>
        </div>
    </div>


@endsection