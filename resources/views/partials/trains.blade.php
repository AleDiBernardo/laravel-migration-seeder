
<div class="container-fluid">

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        @foreach ($columns as $colName)
            @if ($colName !== 'created_at' && $colName !== 'updated_at')
                <th scope="col">{{ $colName }}</th>
            @endif
        @endforeach
        
      </tr>
    </thead>
    <tbody>
        @foreach ($trainsList as $index => $train)
        <tr>
          <th scope="row">{{$index + 1}}</th>
          <td>{{ $train->codice_treno }}</td>
          <td>{{ $train->azienda}}</td>
          <td>{{ $train->stazione_di_partenza}}</td>
          <td>{{ $train->stazione_di_arrivo}}</td>
          <td>{{ $train->orario_di_partenza}}</td>
          <td>{{ $train->orario_di_arrivo}}</td>
          <td>{{ $train->numero_carrozze}}</td>
          <td>{{ $train->in_orario }}</td>
          <td>{{ $train->cancellato}}</td>
          <td>{{ $train->data}}</td>

        </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
