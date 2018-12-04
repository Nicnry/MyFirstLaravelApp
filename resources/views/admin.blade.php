@extends('layout')
    @section('content')

            <div class="content">
                <div class="title m-b-md">
                    Admin
                </div>

                <div class="links">
                    <a href="{{ url('/') }}">Back</a>
                </div>
                @if(count($data))
                    <form method="post" action="/">
                        @csrf
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
                                    <td><button>Supprimer</button></td>
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
                    </form>
                @else
                    <div>On a {{ count($data) }} choses</div>
                @endif
            </div>
@endsection
