@extends('admin.default')

@section('page-header')
    Data Yang Telah Dikirim
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.submissions.create') }}" class="btn btn-info">
            Upload Form
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Data</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>Data</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Actions</th>
            </tr>
            </tfoot>

            <tbody>
            @foreach ($submissions as $item)
                <tr>
                    <td>
                        <a href="{{ route(ADMIN . '.submissions.edit', $item->id) }}">{{ App\Models\Submission::$codes[$item->code]}}</a>
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

                    <td>{{ $item->created_at }}</td>

                    <td>
                        <ul class="list-inline">
                            @if($item->status == App\Models\Submission::REJECTED)
                            <li class="list-inline-item"><a href="{{ route('admin.submissions.feedback', $item->id) }}" class="btn btn-info">Lihat Feedback</a></li>
                            <li class="list-inline-item"><a href="{{ route('admin.submissions.edit', $item->id) }}" class="btn btn-info">Upload Ulang</a></li>
                            @endif
                            <li class="list-inline-item">
                                {!! Form::open([
                                    'class'=>'delete',
                                    'url'  => route(ADMIN . '.submissions.destroy', $item->id),
                                    'method' => 'DELETE',
                                    ])
                                !!}

                                <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i
                                        class="ti-trash"></i></button>

                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection
