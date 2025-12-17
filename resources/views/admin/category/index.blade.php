<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Categories</h4>
                            @if (!$category)
                                <a href="{{ route('admin.category.create') }}" class="btn btn-primary ml-auto">Add New</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($categories as $category)
                                            <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                {{ $category->title }}

                                            </td>

                                            <td>
                                                {{ $category->slug }}
                                            </td>
                                            <td>
                                                {{ $category->status }}
                                            </td>
                                            <td></td>
                                                <form action="{{ route('admin.company.destroy') }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{route('admin.company.edit',$category->id)}}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                        </tr>

                                       @endif

                                      @endforeach
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
