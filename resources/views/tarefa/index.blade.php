@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Minhas lista de tarefas <a href="{{route('tarefa.create')}}" class="float-end">Novo</a></div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tarefa</th>
                                    <th scope="col">Data limite conclusão</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($tarefas as $key => $t)
                                    <tr>
                                        <th scope="row">{{ $t['id'] }}</th>
                                        <td>{{ $t['tarefa'] }}</td>
                                        <td>{{ date('d/m/Y', strtotime($t['data_limite_conclusao'])) }} </td>
                                        <td> <a href="{{ route('tarefa.edit', $t['id']) }}">Editar</a> </td>
                                        <td>
                                            <form id="form_{{$t['id']}}" method="POST" action="{{ route('tarefa.destroy', ['tarefa' => $t['id']]) }}">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            <a class="text-danger" href="#" onclick="document.getElementById('form_{{$t['id']}}').submit()">Excluir</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <div class="justify-content-center">
                            {{ $tarefas->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
