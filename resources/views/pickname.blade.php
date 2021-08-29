@extends('layout.auth')

@section('content')

    <div class="m-auto container">


        <div class="card m-4 position-absolute top-50 start-50 translate-middle" >
            <div class="row g-0 m-4">
                <div class="col-md-12 m-auto ">
                    <img src="https://www.assessteam.com/wp-content/uploads/2020/09/face_to_face_3.png" style="width: 100%" class="img-fluid rounded-start" alt="...">
                </div>
                
                </div>
                <div class="row g-0 m-4">
                <div class="col-md-12">
                    <div class="card-body m-auto">
                        <form action="pickdone" method="POST" autocomplete="off" class="col-12" id="textform">
                            {{ csrf_field() }}
                            <div class="form-floating mb-3">
                                <input type="name" name="name" class="form-control" id="floatingInput" placeholder="John">
                                <label for="floatingInput">Your Name</label>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>


@stop
