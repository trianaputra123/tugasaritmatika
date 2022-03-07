@extends('layout.v_template')
@section('title','Tugas 1')

@section('content')
    <h1>Hasil deret bilangan</h1>
    <table>
        <thhead>
            <tr>
                <td>Index</td>
                <td>Value</td>
            </tr>
        </thead>
        <tbody>
            @foreach($deret as $key=>$val)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$val}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection