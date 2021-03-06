<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="product-status-wrap">
          <form action="{{ route('customers.update',$customer->id) }}" method="post" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Customer Name</label><span style="color:red"> *</span>
                      <input type="text" id="name" class="form-control" name="name" value="{{old('name',$customer->name)}}" placeholder="Customer Name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="tax">Tax %</label><span style="color:red"> *</span>
                      <input type="number" step="0.01" id="tax" class="form-control" name="tax" value="{{old('tax',$customer->tax)}}" placeholder="Tax" required>
                    </div>
                  </div>
                </div>

                

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email</label><span style="color:red"> *</span>
                      <input type="email" id="email" class="form-control" name="email" value="{{old('email',$customer->email)}}" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                      <label for="phone">Phone</label><span style="color:red"> *</span>
                      <input type="text" id="phone" class="form-control" name="phone" value="{{old('phone',$customer->phone)}}" placeholder="Phone" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="address">Address</label><span style="color:red"> *</span>
                  <textarea id="address" name="address" class="form-control" required>{{old('address',$customer->address)}}</textarea>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlFile1">Image</label>
                  <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                </div>

                @if($customer->image != '' && file_exists(public_path('customers/').$customer->image))
                  <div class="form-group">
                    <img src="{{ url('public/customers/') }}/{{ $customer->image }}" style="max-width: 80px" >
                  </div>
                @endif
                
                <div class="col-md-12">
                  <div class="modal-footer justify-content-between" id="quickViewModalFooter">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
