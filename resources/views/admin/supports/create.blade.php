<h1>Novo Suporte</h1>

<form action="{{ route('supports.store') }}" method="POST">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
    @csrf()
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="30" rows="5" placeholder="Mensagem"></textarea>
    <button type="submit">Enviar</button>
</form>