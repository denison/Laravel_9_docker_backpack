@extends(backpack_view('blank'))

@section('content')
    Ola Aluno, {{backpack_user()->name}}
@endsection