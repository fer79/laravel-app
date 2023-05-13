<div class="table-responsive">
  <table class="table table-hover table-dark">
    <thead>
      <tr class="table-dark">
        <th class="text-center">Name</th>
        <th class="text-center">E-mail</th>
        <th class="text-center">Phone</th>
        <th class="text-center">Company</th>
        <th class="text-center">Messege</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($data as $row)

        <tr>
          <td class="text-center">{{ $row->name }}</td>
          <td class="text-center">{{ $row->email }}</td>
          <td class="text-center">{{ $row->phone }}</td>
          <td class="text-center">{{ $row->company }}</td>
          <td class="text-center">{{ $row->messege }}</td>
          <td class="text-center">
              @if( empty($row->responded))
                <div class="btn-group">
                  <form method="POST" action="{{ route('contact.respond') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $row->id }}">
                    <button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check-square"></i></button>
                  </form>
                </div>
              @endif
          </td>
        </tr>

      @endforeach

      @if(empty($data))
        <tr class="bg-light">
          <td class="text-center text-danger" colspan="6"><b>No results were found for the search parameters</b></td>
        </tr>
      @endif
    </tbody>
  </table>
  {!! $data->links() !!}
</div>