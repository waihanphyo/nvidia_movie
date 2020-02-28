@extends('backend')
@section('content1')

<h1 class="h3 mb-2 text-gray-800"></h1>

  
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="row">
                <div class="col-10">
               <h6 class="m-0 font-weight-bold text-primary">List</h6>
                
                </div>
                  <div class="col-2">
                    <a href="movies/create" class="btn btn-outline-primary btn-block"><i class="fas fa-plus"></i>Add New</a>
                  </div>

                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">

<table class="table table-bordered col-lg-10 mx-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User</th>
      <th scope="col">Phone</th>
      <th scope="col">Degree</th>
      <th scope="col">Course</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
  	

      <td><a href="" class="btn btn-info">Detail</a>   
        <a href="" class="btn btn-warning">Edit</a>
            <form method="post" action="" class="d-inline-flex" onsubmit="return confirm('Are You Sure To Want To Delete?')">
            	@csrf
            	@method('DELETE')
            	<button type="submit"class="btn btn-danger">Delete</button>
           </form>
      </td>
      
    </tr>
    
  </tbody>
</table>
</tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
              </div>
            </div>
          </div>
      </div>


@endsection