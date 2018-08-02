<div class="row mB-40">
    <div class="col-sm-8">
        <div class="bgc-white p-20 bd">
            {!! Form::myInput('file', 'image', 'Gambar') !!}

            {!! Form::myInput('text', 'title', 'Judul') !!}

            <div class="form-group">
                <label for="">Konten</label>
                @if(isset($news))
                    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ $news->content }}</textarea>
                @else
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                @endif
            </div>
        </div>
    </div>
</div>
