@extends('layouts.app')

@section('content')
    <div class="col-md-12 text-right mb-3">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createPackageModal">
            Create Package
        </button>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sl No.</th>
                            <th>Name</th>
                            <th>Speed</th>
                            <th>Price</th>
                            <th>Package Type</th>
                            <th>Image</th>
                            <th>Sort Order</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)
                            <tr>
                                <td>{{ $package->id }}</td>
                                <td>{{ $package->name }}</td>
                                <td>{{ $package->speed }} Mbps</td>
                                <td>{{ $package->price }} TK.</td>
                                <td>
                                    @if ($package->type == 1)
                                        Premium
                                    @elseif ($package->type == 2)
                                        Sohoz
                                    @else
                                        Ek Desh Ek Rate
                                    @endif
                                </td>
                                <td>
                                    <img src="{{ asset('/images/' . $package->image) }}" alt="Image"
                                </td>
                                <td>{{ $package->sort_order }}</td>
                                <td class="text-center">
                                    
                                    <button type="button" class="btn btn-primary btn-sm packageEdit"
                                        data-id="{{ $package->id }}">Edit</button>
                                    <form action="{{ route('packages.destroy', $package->id) }}" method="POST"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="createPackageModal" tabindex="-1" role="dialog" aria-labelledby="createSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createSectionModalLabel">Create Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Speed</label>
                            <input type="number" class="form-control" id="speed" name="speed" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="nymber" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="1">Premium</option>
                                <option value="2">Sohoz</option>
                                <option value="3">Ek Desh Ek Rate</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sort Order</label>
                            <input type="text" class="form-control" id="sort_order" name="sort_order">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input style="padding: 3px;" type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editPackageModal" tabindex="-1" role="dialog" aria-labelledby="editSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSectionModalLabel">Update Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editSectionForm" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="editname" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Speed</label>
                            <input type="number" class="form-control" id="editspeed" name="speed" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="nymber" class="form-control" id="editprice" name="price" required>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" id="edittype" name="type" required>
                                <option value="1">Premium</option>
                                <option value="2">Sohoz</option>
                                <option value="3">Ek Desh Ek Rate</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sort Order</label>
                            <input type="text" class="form-control" id="editsort_order" name="sort_order">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input style="padding: 3px;" type="file" class="form-control" id="image"
                                name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Section</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 50
            });
        });

        $('.packageEdit').on('click', function() {
            let packageId = $(this).data('id');

            $.ajax({
                url: '{{ route('packages.edit', ':id') }}'.replace(':id', packageId),
                type: 'GET',
                success: function(response) {
                    $('#editSectionForm').attr('action', '{{ route('packages.update', ':id') }}'.replace(':id', packageId));
                    $('#editname').val(response.name);
                    $('#editspeed').val(response.speed);
                    $('#editprice').val(response.price);
                    $('#edittype').val(response.type);
                    $('#editsort_order').val(response.sort_order);
                    $('#editPackageModal').modal('show');
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    </script>
@endpush
