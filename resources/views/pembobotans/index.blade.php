<x-layout>

    <div class="card mt-5">
        <h2 class="card-header">Data Pembobotan</h2>
        <div class="card-body">

            @session('session')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{ route('pembobotans.create') }}"> <i class="fa fa-plus"></i>
                    Add Pembobotan</a>
            </div>

            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th width="80px">No</th>
                        <th>Alternatif Kosan</th>
                        <th>Kriteria</th>
                        <th>Kode Kriteria</th>
                        <th>Nilai</th>
                        <th width="250px">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($pembobotans as $pembobotan)
                    <?php $i =1 ?>
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $pembobotan->nama }}</td>
                        <td>{{ $pembobotan->nama_kriteria }}</td>
                        <td>{{ $pembobotan->kode_kriteria }}</td>
                        <td>{{ $pembobotan->nilai }}</td>
                        <td>
                            <form action="{{ route('pembobotans.destroy',$pembobotan->id) }}" method="POST">

                                <a class="btn btn-info btn-sm" href="{{ route('pembobotans.show',$pembobotan->id) }}"><i
                                        class="fa-solid fa-list"></i> Show</a>

                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('pembobotans.edit',$pembobotan->id) }}"><i
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