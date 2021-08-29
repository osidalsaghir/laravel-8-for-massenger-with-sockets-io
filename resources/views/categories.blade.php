@extends('layout.main')

@section('content')

    <?php
    $cookie_name = 'userconversationname';
    $cookie_value = $name;
    setcookie($cookie_name, $cookie_value);
    
    ?>

    <div class="alert alert-success mt-4" role="alert">
        You logged in as {{ $name }}
    </div>


    <div id="conversation" class="overflow-auto p-3 mb-3 mb-md-0 mr-md-3 bg-light" style=" max-height: 400px; ">



    </div>
 

        <div class="input-group">

            <input type="text" class="form-control" id="chatplace" autocomplete="false"
                placeholder="what do you want to say" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary " onclick="addelement()" type="button"
                id="button-addon2">Button</button>


        </div>


@stop
