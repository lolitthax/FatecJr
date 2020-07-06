@extends('layouts.app')

@section('content')
<h1>Caixa de mensagens</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Email</th>
        <th scope="col">Nome</th>
        <th scope="col">Mensagem</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <th scope="row">{{$contact->id}}</th>
            <td>{{$contact->name_cont}}</td>
            <td>{{$contact->email_cont}}</td>
            <td>{{$contact->msg_cont}}</td>
            <td>
                <form action="{{route('contact.destroy',['contact'=>$contact->id])}}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn-dash">Excluir</button>
                </form>
            </td>
          </tr>
         
        @endforeach
    
    </tbody>
  </table>
  <a href="#">Voltar</a>
@endsection