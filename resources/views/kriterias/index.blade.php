<x-layout>

    <div class="card mt-5">
        <h2 class="card-header">Data Kriteria</h2>
        <div class="card-body">

            @session('session')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{ route('kriterias.create') }}"> <i class="fa fa-plus"></i>
                    Add Kriteria</a>
            </div>

            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th width="80px">No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Tipe</th>
                        <th>Bobot</th>
                        <th width="250px">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($kriterias as $kriteria)
                    <?php $i =1 ?>
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $kriteria->kode_kriteria }}</td>
                        <td>{{ $kriteria->nama_kriteria }}</td>
                        <td>{{ $kriteria->tipe_kriteria }}</td>
                        <td>{{ $kriteria->bobot }}</td>
                        <td>
                            <form action="{{ route('kriterias.destroy',$kriteria->id) }}" method="POST">

                                <a class="btn btn-info btn-sm" href="{{ route('kriterias.show',$kriteria->id) }}"><i
                                        class="fa-solid fa-list"></i> Show</a>

                                <a class="btn btn-primary btn-sm" href="{{ route('kriterias.edit',$kriteria->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i> Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>
                                    Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody>

            </table>


        </div>
    </div>
</x-layout>