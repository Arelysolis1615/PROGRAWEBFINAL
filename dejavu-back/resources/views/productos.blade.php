<div>

    @foreach($productosLista as $productos)
    {{ $productos->id }} - {{ $productos->name }} {{ $productos->precio }}<br/>
    @endforeach
</div>
