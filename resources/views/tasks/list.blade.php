@extends('home')
@section('title', 'Danh sách công viêc')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>{!! __('language.task') !!}</h2>
        </div>
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
        </div>
        <a class="btn btn-outline-success" href="{!! route('change-language', ['en']) !!}">en</a>
        <a class="btn btn-outline-info" href="{!! route('change-language', ['vi']) !!}">vi</a>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{!! __('language.name') !!}</th>
                    <th scope="col">{!! __('language.content') !!}</th>
                    <th scope="col">{!! __('language.image') !!}</th>
                    <th scope="col">{!! __('language.dua_date') !!}</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $key => $task)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->due_date }}</td>
                        <td>
                            @if($task->image)
                                <img src="{{ asset('storage/'.$task->image) }}" alt="" style="width: 100px; height: 100px">
                            @else
                                {!! __('language.no_image') !!}
                            @endif
                        </td>
                        <td><a href="{{ route('tasks.edit', $task->id) }}">{!! __('language.edit') !!}</a></td>
                        <td><a href="{{ route('tasks.destroy', $task->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">{!! __('language.delete') !!}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">{!! __('language.create') !!}</a>
        </div>
    </div>
@endsection