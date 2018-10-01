<div class="btn-group">
              <a href="{{ route('book.create') }}" class="btn btn-info" >Nuevo Libro</a>
            </div>
<table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
             </thead>
             <tbody>
             
              @foreach($libros as $libro)  
              <tr>
                <td>{{$libro->name}}</td>
               </tr>
               @endforeach 
              
            </tbody>
 
          </table>
<div>
{{ $libros->links() }}
</div>