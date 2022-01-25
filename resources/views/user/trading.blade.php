@extends('layouts.userlayout')

@section('content')
    <!-- Start trading  section-->

<div id="trad-section">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0 ">Trading</h3>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    @livewire('user.trading')
</div>
                
<!-- End trading  section-->




<!--Trad section  Modal start -->



<!--Trad section  Modal end -->
@endsection



