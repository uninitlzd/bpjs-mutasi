<div class="row mB-40">
    <div class="col-sm-8">
        <div class="bgc-white p-20 bd">

            @if(isset($submission))
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">User: </label>
                            <p>{{ $submission->user->name }}</p>
                        </div>
                        <div class="col-md-4">
                            <label for="">Satker: </label>
                            <p>{{ $submission->user->satker->nama}}</p>
                        </div>
                        <div class="col-md-4">
                            <label for="">Jenis Data: </label>
                            <p>{{ App\Models\Submission::$codes[$submission->code] }}</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">File Asli</label>
                                <div>
                                    <a class="btn btn-info" href="{{ asset(config('variables.submissions.public').$submission->file) }}"
                                       download>Lihat File</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">File Feedback</label>
                                <div>
                                    <input type="file" name="feedback_file" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Feedback Message</label>
                    <textarea name="feedback" id="" cols="30" rows="10" class="form-control" required></textarea>
                </div>
            @else
                {!! Form::mySelect('code', 'Jenis Form', App\Models\Submission::$codes) !!}
            @endif
        </div>
    </div>
</div>
