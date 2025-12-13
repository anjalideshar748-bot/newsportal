<x-app-layout>
     <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <h4>Company Detail</h4>
                    <a href="{{route('admin.company.create')}}" class="btn btn-primary ml-auto">Add New</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Company Name</th>
                            <th>Logo</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Anjali</td>
                            <td>
                              <img alt="image" src="/assets/img/users/user-5.png" width="35">
                            </td>
                            <td>
                                anjalideshar748@gmail.com
                            </td>
                            <td>
                              9876543210
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </section>
</x-app-layout>
