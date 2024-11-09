@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" style="overflow-x: auto;">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>District</th>
                            <th>Package Name</th>
                            <th>Speed</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Assigned Time</th>
                            <th>Delivered Time</th>
                            <th>Status</th>
                            <th>Assigned</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            @if (Auth::user()->role || Auth::user()->id == $order->user_id)
                                <tr>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->mobile }}</td>
                                    <td>{{ $order->address }}</td>
                                    <td>{{ $order->district }}</td>
                                    <td>{{ $order->package->name ?? 'Deleted' }}</td>
                                    <td>{{ $order->package->speed ?? 'Deleted' }} MB</td>
                                    <td>{{ $order->package->price ?? 'Deleted' }} Tk.</td>
                                    <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                                    <td>{{ $order->updated_at->format('d-m-Y H:i') }}</td>
                                    {{-- <td>{{ $order->delivered_at->format('d-m-Y H:i') }}</td> --}}
                                    <td>
                                        @if ($order->status == 'pending')
                                            <span class="badge badge-warning">{{ $order->status }}</span>
                                        @elseif ($order->status == 'completed')
                                            <span class="badge badge-success">{{ $order->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($order->user_id)
                                            <span class="badge badge-success">{{ $order->user->name }}</span>
                                        @else
                                            <span class="badge badge-danger">Not Assigned</span>
                                        @endif
                                    </td>

                                    <td>
                                        {{-- <button class="btn btn-info btn-sm">Doc</button> --}}

                                        @if ($order->status == 'pending')
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                @if (Auth::user()->role)
                                                    <button class="btn btn-success btn-sm orderAssign" type="button"
                                                        data-id="{{ $order->id }}">Assign</button>
                                                    <form action="{{ route('orderDelete', $order->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                @endif
                                                <a href="{{ route('assignOrderComplete', $order->id) }}"
                                                    class="btn btn-warning btn-sm"
                                                    onclick="return confirm('Are you sure?')">Done</a>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                {{ $orders->links() }}
            </div>
        </div>

    </div>
    <div class="modal fade" id="assignUserModal" tabindex="-1" role="dialog" aria-labelledby="createSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createSectionModalLabel">Create User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" id="assignForm">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="order_id" id="editorder_id" value="">
                            <label>Employee Name</label>
                            <select name="user_id" class="form-control">
                                <option value="">Select Employee</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }} - {{ $user->email }}
                                    </option>
                                @endforeach
                            </select>
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

@endsection

@push('scripts')
    <script>
        $('.orderAssign').on('click', function() {
            let orderId = $(this).data('id');
            console.log(orderId);
            $.ajax({
                url: '{{ route('orderAssign', ':id') }}'.replace(':id', orderId),
                type: 'GET',
                success: function(response) {
                    console.log(response);
                    $('#assignForm').attr('action', '{{ route('orderAssignUser') }}');
                    $('#editorder_id').val(response.id);
                    $('#assignUserModal').modal('show');
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    </script>
@endpush
