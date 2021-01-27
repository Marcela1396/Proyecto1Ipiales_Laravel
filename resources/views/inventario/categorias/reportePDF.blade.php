<div>
    <h1> Categorias de productos </h1>
</div>
<br>
<table class="table" border='1' align="center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Categoria</th>
            <th scope="col">Descripción </th>
        </tr>
    </thead>
    <tbody>
    @foreach($categorias as $c)
            <tr>
                <td> {{ $c->id }} </td>
                <td> {{ $c->nombreCategoria }} </td>
                <td> {{ $c->descripcion }}</td>
                
            </tr>
    @endforeach
    </tbody>
</table

