<div>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <!-- Basic table card start -->
                        <div class="card ml-md-5">
                            <div class="card-header">
                                <h5>Elim Point Application Details</h5>
                                <div class="">
                                    <a href="#" class="btn btn-enrollment mt-3" onclick="exportData()">EXCEL Download</a>
                                </div>

                            </div>

                            <div class="card-block table-border-style overflow-auto">
                                <div class="container-fluid">
                                    <form>
                                        <div class="row justify-content-md-end px-2">
                                            <div class="">
                                                <div class="start-end-date-group d-inline-block d-flex justify-content-end mb-4">
                                                    <label class="text-black pr-3 fontweight500">Search by date of application</label>
                                                    <div class="start-date-input">
                                                        <input type="date" class="form-control" id="startdate" aria-describedby="date-design-prepend">
                                                    </div>
                                                    <div class="exchage-icon align-items-center d-flex justify-content-center">
                                                        ~
                                                    </div>
                                                    <div class="end-date-input">
                                                        <input type="date" class="form-control" id="enddate" aria-describedby="date-design-prepend">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row justify-content-md-end">
                                            <div class="col-12 d-flex justify-content-md-end">
                                                <div class="select-main-group ml-1 ">
                                                    <div class="first-select-option mr-1 float-left mb-2">
                                                        <select class="custom-select" id="type">
                                                            <option value="" selected>
                                                                =Member Type=
                                                            </option>
                                                            <option value="0" class="text-left">
                                                                General Membership
                                                            </option>
                                                            <option value="1" class="text-left">
                                                                MLM member
                                                            </option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="select-main-group">
                                                    <div class="first-select-option mr-1 float-left mb-2">
                                                        <select class="custom-select" id="status">
                                                            <option value="" selected>
                                                                =Deposit Status=
                                                            </option>
                                                            <option value="2" class="text-left">
                                                                Approval
                                                            </option>
                                                            <option value="0" class="text-left">
                                                                atmosphere
                                                            </option>
                                                            <option value="1" class="text-left">
                                                                cancellation
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="input-group float-left w-auto mb-2">
                                                        <div class="input-group-prepend">
                                                            <select class="custom-select" id="field">
                                                                <option value="" selected>
                                                                    =Search Options=
                                                                </option>
                                                                <option value="user_id" class="text-left">
                                                                    Id
                                                                </option>
                                                                <option value="nickname" class="text-left">
                                                                    nickname
                                                                </option>

                                                            </select>
                                                        </div>
                                                        <input type="search" id="fieldvalue" class="form-control" placeholder="Please select a search option.">
                                                    </div>

                                                    <div class="btn-group mb-2 ml-2">
                                                        <button type="button" class="btn btn-search" onclick="searchpointrecharge()">Search</button>
                                                        <button type="button" class="btn btn-reset" onclick="clearsearchfield()">Initialization</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="row">
                                        <div class="col-12 table-start">
                                            <p class="count-list">Total : {{$historycount}} Count (1/1)Page</p>
                                            <table class="table table-bordered table-hover dt-responsive border-bottom-0 border-remove" id="point_recharge_detail">
                                                <thead class="table-header-bg">
                                                    <tr>
                                                        <th class="border-bottom-0">No.</th>
                                                        <th class="border-bottom-0">PK</th>
                                                        <th class="border-bottom-0">Member type</th>
                                                        <th class="border-bottom-0">ID</th>
                                                        <th class="border-bottom-0">Nickname</th>
                                                        <th class="border-bottom-0">application amount</th>
                                                        <th class="border-bottom-0">state</th>
                                                        <th class="border-bottom-0">View deposit information</th>
                                                        <th class="border-bottom-0">Approval Confirmation</th>
                                                        <th class="border-bottom-0">Application date and time</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="elim_recharge_detail_data">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
            <!-- Main-body end -->
        </div>
    </div>

    @livewire('admin.modals.elim-point-application-approve')
    @livewire('admin.modals.elim-point-application-decline')
</div>