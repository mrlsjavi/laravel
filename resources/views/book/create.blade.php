<form method="post" action="{{ route('book.store' )}}">
{{ csrf_field() }}
<label>Libro:</label>
<input type="text" id="name" name="name"/>

<input type="submit" value="Guardar" />
</form>