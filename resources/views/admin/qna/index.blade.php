@extends('admin.default')

@section('page-header')
    QNA <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.qna.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>
                    <th>Actions</th>
                </tr>
            </tfoot>

            <tbody>
                @foreach ($qna as $item)
                    <tr>
                        <td><a href="{{ route(ADMIN . '.qna.edit', $item->id) }}">{{ $item->pertanyaan}}</a></td>
                        <td>{{ $item->jawaban }}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.qna.destroy', $item->id),
                                        'method' => 'DELETE',
                                        ])
                                    !!}

                                        <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>

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
