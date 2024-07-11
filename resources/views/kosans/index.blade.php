<x-layout>

    <div class="card mt-5">
        <h2 class="card-header">Data Alternatif Kosan</h2>
        <div class="card-body">

            @session('session')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{ route('kosans.create') }}"> <i class="fa fa-plus"></i>
                    Add Kosan</a>
            </div>

            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th width="80px">No</th>
                        <th>Nama</th>
                        <th>Kode Alternatif</th>
                        <th width="250px">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($kosans as $kosan)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $kosan->nama }}</td>
                        <td>{{ $kosan->alamat }}</td>
                        <td>
                            <form action="{{ route('kosans.destroy',$kosan->id) }}" method="POST">

                                <a class="btn btn-info btn-sm" href="{{ route('kosans.show',$kosan->id) }}"><i
                                        class="fa-solid fa-list"></i> Show</a>

                                <a class="btn btn-primary btn-sm" href="{{ route('kosans.edit',$kosan->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i> Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>
                                    Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>


        </div>
    </div>
</x-layout>