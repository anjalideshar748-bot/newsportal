<x-app-layout>
     <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <h4>Company Create</h4>
                    <a href="{{route('admin.company.index')}}" class="btn btn-primary ml-auto">Go back</a>
                  </div>
                  <div class="card-body">
                   <form action="{{route('admin.company.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                       <div class="row">
                        <div class="col-6 pb-2">
                        <label for="name">Enter Company Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="col-6 mb-6">
                        <label for="email">Enter Company Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                     <div class="col-6 pb-2">
                        <label for="phone">Enter Company Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                     <div class="col-6 pb-2">
                        <label for="youtube">Enter Youtube Link</label>
                        <input type="text" name="youtube" id="youtube" class="form-control">
                    </div>
                     <div class="col-6 pb-2">
                        <label for="facebook">Enter Facebook Link</label>
                        <input type="text" name="facebook" id="facebook" class="form-control">
                    </div>
                     <div class="col-6 pb-2">
                        <label for="instagram">Enter Instagram Link</label>
                        <input type="text" name="instagram" id="instagram" class="form-control">
                    </div>
                     <div class="col-6 pb-2">
                        <label for="logo">Upload Company logo</label>
                        <input type="file" name="logo" id="logo" class="form-control">
                    </div>
                    <div class="col-12 ">
                        <button type="submit" class="btn btn-success">Save Record</button>
                       </div>

                   </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </section>
</x-app-layout>
