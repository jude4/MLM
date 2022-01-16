  <div class="pvm-request">
      <div class="pvm-application">
          <div class="card-block table-border-style table-responsive">
              <div class="container-fluid px-md-5 px-1">
                  <div class="row justify-content-center mb-20">
                      <div class="col-md-11 col-sm-12 col-12 table-start">
                          <div class="table-top-head mb-5">Application List</div>
                          <table class="table table-hover dt-responsive  ">
                              <thead class="table-header-bg">
                                  <tr>
                                      <th class="borders-0">No</th>
                                      <th class="border-bottom-0">Withdrawal request amount</th>
                                      <th class="borders-0">State</th>
                                      <th class="borders-0">Application Date</th>
                                      <th class="borders-0">Detail</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @forelse($withdrawalLists as $item)

                                      <tr>
                                          <td>{{ ++$count }}</td>
                                          <td>{{ $item->amount }}</td>
                                          <td>{{ $item->status }}</td>
                                          <td>{{ $item->created_at }}</td>
                                          <td><a href="#" class="look-btn" data-toggle="modal" data-target="#look"><u>Look</u></a></td>
                                      </tr>

                                @empty
                                    <tr>
                                        <td colspan="5">No Record</td>
                                    </tr>
                                @endforelse
                           
                              </tbody>
                              <tfoot>

                              </tfoot>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

