@include('include.header')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Sales Management</a>
        </li>
        <li class="breadcrumb-item active">Add Sales Details</li>
      </ol>
      <div class="row">
        <div class="col-12">
        <div class="card mt-12">
      <div class="card-header">Add A Sales Details</div>
      <div class="card-body">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)

            <li>{{$error}}</li>
            @endforeach
          </ul>

        </div>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success')}}</p>
        </div>
        @endif
        <form method="POST" action="{{ url('sale')}}">
           {{ csrf_field() }}
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Location</label>
                <textarea class="form-control" id="exampleTextarea" rows="3" name="location" required="required"></textarea>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Discussion</label>
                <textarea class="form-control" id="exampleTextarea" rows="3" name="discussion" required="required"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Current Work</label>
            <textarea class="form-control" id="exampleTextarea" rows="3" name="current_work" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Through Put</label>
           <textarea class="form-control" id="exampleTextarea" rows="3" name="throughput" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Sell Our Destination</label>
         <select class="form-control form-control-lg" name="sell_our_des" required="required">
          <option value=""> Select Option</option>
          <option value="dubai"> Dubai</option>
          <option value="india">India</option>
          <option value="delhi">Delhi</option>
        </select>
        </div>
         <div class="form-group">
            
           <input type="submit" class="btn btn-primary btn-block" name="Submit">
          </div>

          
        </form>
        
      </div>
    </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
@include('include.footer')
