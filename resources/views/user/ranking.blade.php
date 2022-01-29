@extends('layouts.userlayout') 

@section('content')
    
<!-- Start ELIM point change  section-->

<div id="rank-sect">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0 ">Ranking</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>

@livewire('user.ranking')
</div>




                
<!-- End ELIM point change  section-->
@endsection