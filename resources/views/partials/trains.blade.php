
<div class="container-fluid">

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Codice Treno</th>
        <th scope="col">Azienda</th>
        <th scope="col">Stazione Di Partenza</th>
        <th scope="col">Stazione Di Arrivo</th>
        <th scope="col">Orario Di Partenza</th>
        <th scope="col">Orario Di Arrivo</th>
        <th scope="col">Numero Carrozze</th>
        <th scope="col">Treno In Orario</th>
        <th scope="col">Cancellato</th>
        <th scope="col">Data</th>
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
        {{-- <h1>{{ $today }}</h1> --}}
        @endforeach
      
    </tbody>
  </table>
</div>
