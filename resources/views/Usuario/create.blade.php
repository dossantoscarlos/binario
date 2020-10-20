<form action="{{route('usuarios.store')}}" method='post'>
    @csrf
    <input type="hidden" name='lado_esquerdo' />
    <input type="hidden" name='lado_direito' /> 
    <div class="">
        <label>Nome</label>
        <input type='text' name='nome'/>
    </div>
   @if($opcao->count() > 0 ) 
        <div>
            <label>Indicador</label>
            <select name='indicado'>
                @foreach ($opcao as $key  => $value)
                <option value="{{ $key }}" >{{ $value }} </option>
                @endforeach
            </select>
        </div>  
    @endif
    <input type='submit' name='Gravar'/>
</form>