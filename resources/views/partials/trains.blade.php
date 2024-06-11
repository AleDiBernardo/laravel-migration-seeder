
<div class="container">

<table class="table">
    <h2 class="text-center fw-bold mb-3">Partenze</h2>
    <thead>
      <tr>
        <th scope="col">#</th>
        @foreach ($columns as $colName)
            @if ($colName !== 'created_at' && $colName !== 'updated_at')
                <th scope="col">{{ ucfirst(str_replace('_',' ',$colName)) }}</th>
            @endif
        @endforeach
        
      </tr>
    </thead>
    <tbody>
        @foreach ($trainsList as $index => $train)
            <tr>
                <th scope="row">{{$index + 1}}</th>
                @foreach ($columns as $column)
                @if ($column !== 'created_at' && $column !== 'updated_at')
                    <td>
                            @if($column === 'orario_di_partenza' || $column === 'orario_di_arrivo' )
                                {{ substr($train->$column, 0, 5) }}
                            @elseif($column === 'in_orario' || $column === 'cancellato')
                                {{ $train->$column === 1 ? 'YES' : 'NO'}}
                            @else
                                {{ $train->$column}}
                            @endif

                            </td>
                        @endif
                @endforeach
            </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
