@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
<br/>
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Upload photo
</button>
<br><br><br>

</table>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload photo form</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/post" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="file" name="image"/>
<div class="form-group">
  <label for="caption">Caption:</label>
  <textarea name="caption" class="form-control" rows="2" id="comment"></textarea>
</div>
<div class="form-group">
  <label for="hashtag">hashtag:</label>
  <textarea name="hashtag" class="form-control" rows="2" id="comment"></textarea>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Upload"/>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
                </div>
              
            </div>
        </div>
    </div>
</div>


@endsection
