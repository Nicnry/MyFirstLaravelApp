@extends('layout')
    @section('content')

            <div class="content">
                <div class="title m-b-md">
                    Admin
                </div>

                <div class="links">
                    <a href="{{ url('/') }}">Back</a>
                </div>
                @isset($data)
                    @if(count($data))
                        <table>
                            <thead>
                                <th>id</th>
                                <th>Name</th>
                                <th>NbBricks</th>
                                <th>Color</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td><a href="/admin/hide/{{$item->getId()}}">{{$item->getName()}}</a></td>
                                    <td>{{$item->getNbBricks()}}</td>
                                    <td>{{$item->getColor()}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>NbBricks</th>
                                    <th>Color</th>
                            </tfoot>
                        </table>
                    @else
                        <div>On a {{ count($data) }} choses</div>
                    @endif
                @endisset
            </div>
@endsection
