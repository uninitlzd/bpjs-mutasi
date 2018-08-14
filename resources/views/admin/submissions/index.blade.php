@extends('admin.default')

@section('page-header')
    Data Yang Telah Dikirim
@endsection

@section('content')

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="row">
            <div class="col-md-4">
                <form action="" method="get">

                    <div class="form-group">
                        <label for="">Status Data</label>
                        <div class="input-group mb-3">
                            <select name="status" id="" class="form-control">
                                <option value="">Semua Data</option>
                                <option value="1" <?=($filter == 1 ? 'selected' : '')?>>Diproses</option>
                                <option value="2" <?=($filter == 2 ? 'selected' : '')?>>Diterima</option>
                                <option value="3" <?=($filter == 3 ? 'selected' : '')?>>Ditolak</option>
                            </select>
                            <div class="input-group-append">
                                <input type="submit" class="form-control btn btn-outline-dark" value="Submit">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Satker</th>
                <th>Data</th>
                <th>Status</th>
                <th>File</th>
                <th>Tanggal</th>
                <th>Status Periksa</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>Satker</th>
                <th>Data</th>
                <th>Status</th>
                <th>File</th>
                <th>Tanggal</th>
                <th>Status Periksa</th>
                <th>Actions</th>
            </tr>
            </tfoot>

            <tbody>
            @foreach ($submissions as $item)
                <tr>
                    <td>{{ $item->user->satker->nama }} <br> {{ $item->user->satker->kode  }}</td>
                    <td>
                        <a href="{{ route(ADMIN . '.submission_history.edit', $item->id) }}">{{ App\Models\Submission::$codes[$item->code]}}</a>
                    </td>

                    @switch($item->status)
                        @case(1)
                        <td>Dalam Proses</td>
                        @break
                        @case(2)
                        <td>Diterima</td>
                        @break
                        @case(3)
                        <td>Ditolak</td>
                        @break
                    @endswitch

                    <td><a class="btn btn-info" href="{{ asset(config('variables.submissions.public').$item->file) }}" download>Lihat File</a></td>

                    <td>{{ $item->created_at }}</td>

                    @if($item->admin_id == 0)
                    <td><a class="btn btn-info" href="{{ route('admin.submission.periksa',$item) }}" >Periksa File</a></td>
                    @else
                        <td>sudah diperiksa</td>
                        @endif
                    <td>
                        <ul class="list-inline">
                            @if($item->status == 1)
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Set Status
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item c-green-400" href="{{ route('admin.submission.approve', $item->id) }}"><i class="ti ti-check"></i>
                                                Approve</a>
                                            <a class="dropdown-item c-red-400" href="{{ route('admin.submission.view.reject', $item->id) }}"><i class="ti ti-close"></i>
                                                Reject</a>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection
