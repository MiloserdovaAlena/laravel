@extends('layout')
@section('content')
<table class="table">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Title</th>
                <th scope="col">ShortDesc</th>
                <th scope="col">Desc</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article['datePublic']}}</th>
                <td><a href="/article/{{$article->id}}">{{$article['title']}}</a></td>
                <td>{{$article['shortDesc']}}</td>
                <td>{{$article['desc']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
    <ul class="pagination">
        @if ($articles->onFirstPage())
            <li class="page-item disabled"><span class="page-link" style="background-color: #cccccc; border-color: #cccccc; color: #fff;">Previous</span></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $articles->previousPageUrl() }}" style="background-color: #cccccc; border-color: #cccccc; color: #fff;">Previous</a></li>
        @endif
    </ul>
    <div style="width: 16px;"></div> <!-- Добавляем отступ между кнопками -->
    <ul class="pagination justify-content-end">
        @if ($articles->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $articles->nextPageUrl() }}" style="background-color: #cccccc; border-color: #cccccc; color: #fff;">Next</a></li>
        @else
            <li class="page-item disabled"><span class="page-link" style="background-color: #cccccc; border-color: #cccccc; color: #fff;">Next</span></li>
        @endif
    </ul>
</div>
@endsection