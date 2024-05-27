<h1>Novo Suporte</h1>

{{-- 

Isso é uma deritiva de erros, quando vc tentar cadastrar uma mensagem sem nenhum campo preenchido, irá aparecer as seguintes mensagens
    
-  The subject field is required.
-  The body field is required.
    
--}}

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


<form action="{{ route('supports.store') }}" method="POST">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
    @csrf()
    <input type="text" placeholder="Assunto" name="subject" value="{{old('subject')}}">
    <textarea name="body" cols="30" rows="5" placeholder="Mensagem">{{old('body')}}</textarea>
    <button type="submit">Enviar</button>
</form>