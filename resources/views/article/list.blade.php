@extends('layouts.app')
@section('content')
<h1>Danh sach bai viet</h1>


<div>
    <table border="1">
        <thead>
            <th>Tieu de</th>
            <th>Noi dung</th>
        </thead>
        <tbody>
            @foreach($articles as $c)
            <tr>
                <td>{{$c->title}}</td>
                <td>
                    {{$c->content}}
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
<div>{{$articles->links()}}</div>
@endsection