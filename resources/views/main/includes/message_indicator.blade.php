@if($errors->any())
    <div class="justify-content-center row">
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
                <button class="close" aria-label="Close" data-dismiss="alert" type="button" style="float: right">
                    <span aria-hidden="true">&#xD7;</span>
                </button>
                <ul class="list-group">
                    @foreach($errors->all() as $err)
                        <li class="list-group-item" style="background-color: transparent; border: none">{{$err}}</li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endif

@if(session('success'))
    <div class="justify-content-center row">
        <div class="col-12">
            <div class="alert alert-success" role="alert">
                <button class="close" aria-label="Close" data-dismiss="alert" type="button" style="float: right">
                    <span aria-hidden="true">&#xD7;</span>
                </button>
                {{session('success')}}
            </div>
        </div>
    </div>
@endif
