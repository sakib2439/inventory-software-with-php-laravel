
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap" >
                <form action="{{ route('locations.update',$location->id) }}" method="post">
                  {{ method_field('PUT') }}
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name">Location Name</label><span style="color:red"> *</span>
                        <input type="text" id="name" class="form-control" name="name" value="{{old('name',$location->name)}}" placeholder="Edit Location Name">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Update</button>
                      <button data-dismiss="modal" class="btn btn-default">Close</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>