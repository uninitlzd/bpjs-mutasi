@extends('admin.default')

@section('page-header')
    Berita <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.news.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Actions</th>
                </tr>
            </tfoot>

            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <td>
                            <img src="{{ asset(config('variables.news.public').$item->image) }}" width="400px" alt="">
                        </td>
                        <td>
                            {{ $item->title }}
                        </td>
                        <td>
                            {{ str_limit($item->content, 50) }}
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route(ADMIN . '.news.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm">Edit</a></li>
                                <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.news.destroy', $item->id),
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
