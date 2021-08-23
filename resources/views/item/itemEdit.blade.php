@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Item</h4>
                    </div>
                    <p class="text-success">{{ Session::get('message') }}</p>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateItem') }}">

                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $item->name }}" placeholder="Enter email">
                                <input type="hidden" name="id" class="form-control" value="{{ $item->id }}" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" name="type" class="form-control" value="{{ $item->type }}" placeholder="Enter type">
                            </div>

                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" name="qty" class="form-control" value="{{ $item->qty }}" placeholder="Enter qty">
                            </div>

                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                            {{-- </form> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create new item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>

    @endsection
