@include('include.header')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Sales Management</a>
        </li>
        <li class="breadcrumb-item active">Sales Report</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Sales Report</div>
           @if(\Session::has('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success')}}</p>
        </div>
        @endif
        <div class="card-body">
        	<div align="right">
        		<a href="{{ route('sale.create')}}" class="btn btn-primary">ADD</a>
        	</div>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Location</th>
                  <th>Date Of Meeting</th>
                  <th>Time</th>
                  <th>Discussion</th>
                  <th>Current Work</th>
                  <th>Sell Our Destination</th>
                  <th>Throughput</th>
                  <th>Created Date</th>
                  <th>Updated Date</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Location</th>
                  <th>Date Of Meeting</th>
                  <th>Time</th>
                  <th>Discussion</th>
                  <th>Current Work</th>
                  <th>Sell Our Destination</th>
                  <th>Throughput</th>
                  <th>Created Date</th>
                  <th>Updated Date</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>
              	@foreach($sales as $row)
                <tr>
                  <td>{{ $row['location']}}</td>
                  <td>{{ $row['date_of_meeting']}}</td>
                  <td>{{ $row['time']}}</td>
                  <td>{{ $row['discussion']}}</td>
                  <td>{{ $row['current_work']}}</td>
                  <td>{{ $row['sell_our_destination']}}</td>
                  <td>{{ $row['throughput']}}</td>
                  <td>{{ $row['created_at']}}</td>
                  <td>{{ $row['updated_at']}}</td>
                  <td><a href="{{action('SaleController@edit',$row['id'])}}">Edit</a></td>
                   <td>
                   	<form method="POST"  action="{{action('SaleController@destroy',$row['id'])}}">
                   		 {{ csrf_field() }}
                   		  <input type="hidden" name="_method" value="DELETE">
                   		  <button type="submit" class="btn btn-danger">Delete</button>
                   	</form>
                   </td>
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </div>
       
      </div>
    </div>
    <!-- /.container-fluid-->
   @include('include.footer')
