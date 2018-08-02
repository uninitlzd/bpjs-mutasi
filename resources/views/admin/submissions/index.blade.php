@extends('admin.default')

@section('page-header')
    Data Yang Telah Dikirim
@endsection

@section('content')

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Satker</th>
                <th>Data</th>
                <th>Status</th>
                <th>File</th>
                <th>Tanggal</th>
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
