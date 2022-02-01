@extends('layouts.userlayout')

@section('content')
<!-- Start ELIM point change  section-->

<div id="elim-point-sec">
    <div class="bg07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title text-center">
                        <h3 class="mb-0 ">MY POINT</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="my-point">
            <div class="top-head-poin text-center mb-5">MY POINT</div>
            @livewire('user.point.my-point')
                @livewire('user.send-elim-point')
        </div>
    </div>
</div>
</div>





<!-- End ELIM point change  section-->


<!-- -----------search modal start----------------- -->
@livewire('user.modals.search-member')


<!-- -----------search modal end----------------- -->
@endsection

@section('scrips')
<!--  ==========x==========x========== START DATATABLE  JS ==========x==========x========== -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>


<script>
    $('table').DataTable();  
</script>

<!-- ==========x==========x========== END DATATABLE  JS ==========x==========x========== -->
@endsection