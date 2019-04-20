@extends('products.admin')

@section('mytable')
<br>
<div class="d-flex justify-content-end ml-auto">
	<button class="btn bg-success mt-5 text-white" data-toggle="modal" data-target="#new">Add a new
		item</button>
</div>
<!-- Modal -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="new"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="new">Add a new item</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="/products" enctype="multipart/form-data">


					{{csrf_field()}}
					<div class="form-group">
						<label for="exampleFormControlInput1">Item Title</label>
						<input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Category</label>
						<select class="form-control" name="category" id="exampleFormControlSelect1">
							<option>Desktop</option>
							<option>Laptop</option>
							<option>Printer</option>
							<option>UPS</option>
							<option>Cabinet</option>
							<option>Storage</option>
							<option>Cable</option>
							<option>Toner</option>
							<option>Accessory</option>
						</select>
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Description</label>
						<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Price</label>
						<input type="number" name="price" class="form-control w-25" id="exampleFormControlInput1" placeholder="JD">
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Upload an Image</label>
						<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
					<div class="modal-footer p-3">
							<button type="button" class="btn btn-secondary bg-secondary" data-dismiss="modal">Close</button>
							<button type="submit" name="new" class="btn btn-primary bg-success">Save changes</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>



<!-- Modal -->




<br>
<br>
<br>
<table class="table mt-3">
	<thead class="thead-light">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Title</th>
			<th scope="col">Description</th>
			<th scope="col">Price</th>
			<th scope="col">Image</th>
			<th scope="col-2">Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($product as $i)
		
		<tr>
			<th scope="row">{{$i->id}}</th>
			<td>{{$i->title}}</td>
			<td>{{$i->description}}</td>
			<td>{{$i->price}}</td>
			<td style="line-height: 1px;">
				<div  style="width:50px; height:60px">
				<img src="{{Storage::url($i->id) .'?'. time()}}" alt="" style="width:100%; height:100%; object-fit:cover;">
				</div>
			</td>
			<td>
			
				
				
				<a href="/products/{{$i->id}}/edit" class="fa fa-pencil p-1 bg-warning"
					style="width: 25px; height:25px;box-shadow: 0.5px 01px 1px black; text-decoration:none; color:black;"></a>
				
					
				<button type="submit" class="fa fa-trash-o p-1 bg-danger"
					style="width: 25px; height:25px;box-shadow: 0.5px 01px 1px black; text-decoration:none; color:black;" data-toggle="modal" data-target="#delete"></button>
				
					<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="delete">Are you sure ?</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
									<form method="POST" action="/products/{{$i->id}}">
										{{method_field('DELETE')}}
										{{ csrf_field() }}
										
										<button type="submit" name="delete" class="btn btn-primary bg-danger" style="float:right; margin:0 0 0 5px;">Delete</button>
										<button type="button" class="btn btn-secondary bg-secondary" style="float:right; margin:0 0 0 5px;" data-dismiss="modal">Not sure</button>
									
									</form>
							</div>
							
						</div>
					</div>
				</div>
				
				
					
					
					
					
					
					
					
					
					
					
					
					
					
					
			</td>
			</tr>
			@endforeach


	</tbody>
</table>

@endsection
