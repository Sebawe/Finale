@extends('products.admin')
@section('title', 'Admin Page')
@section('mytable')
<br>


{{-- New item Modal --}}
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="new" aria-hidden="true">
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
						<input type="text" name="title" class="form-control" id="exampleFormControlInput1"
							placeholder="">
					</div>
					
					<div class="form-group">
						<label for="exampleFormControlSelect1">Category</label>
						<select class="form-control" name="category" id="exampleFormControlSelect1">
							@foreach ($category as $c)
								<option>{{$c->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Description</label>
						<textarea class="form-control" name="description" id="exampleFormControlTextarea1"
							rows="4"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Price</label>
						<input type="number" name="price" class="form-control w-25" id="exampleFormControlInput1"
							placeholder="JD">
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Upload an Image</label>
						<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
					<div class="form-group">
						<label for="hot">Hot item</label>
						<input name="hot" type="checkbox" value="yes">
					</div>
					<div class="form-group">
						<label for="slider">Slider item</label>
						<input name="slider" type="checkbox" value="yes">
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
<table class="table mt-5">
	<thead class="thead-light">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Hot</th>
			<th scope="col">Slider</th>
			<th scope="col">Title</th>
			<th scope="col-2">Description</th>
			<th scope="col">Price</th>
			<th scope="col">Image</th>
			<th class="d-flex justify-content-end">
						<button class="btn fa fa-plus d-flex bg-success text-white justify-content-end" data-toggle="modal" data-target="#new">
							
						</button>
					
			</th>
		</tr>
	</thead>
	<tbody>

		@foreach ($product as $i)

		<tr>
			<th scope="row">{{$i->id}}</th>
			<td>
				@if($i->hot == 1)
					<i href="" class="fa fa-check"></i>
				@endif
			</td>
			<td>
				@if($i->slider == 1)
					<i href="" class="fa fa-check"></i>
				@endif
			</td>
			<td>{{$i->title}}</td>
			<td>{{$i->description}}</td>
			<td>{{$i->price}}</td>
			<td style="line-height: 1px;">
				<div style="width:50px; height:60px">
					<img src="{{Storage::url($i->id) .'?'. time()}}" alt=""
						style="width:100%; height:100%; object-fit:cover;">
				</div>
			</td>
			<td class="d-flex justify-content-end">



				<a href="/products/{{$i->id}}/edit" class="mr-1 fa fa-pencil p-1 bg-warning"
					style="width: 25px; height:25px;box-shadow: 0.5px 01px 1px black; text-decoration:none; color:black;text-align:center;"></a>


				<a type="submit" class="fa fa-trash-o p-1 bg-danger"
					style="width: 25px; height:25px;box-shadow: 0.5px 01px 1px black; text-decoration:none; color:black; text-align:center;"
					data-toggle="modal" data-target="#delete"></a>

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

									<button type="submit" name="delete" class="btn btn-primary bg-danger"
										style="float:right; margin:0 0 0 5px;">Delete</button>
									<button type="button" class="btn btn-secondary bg-secondary"
										style="float:right; margin:0 0 0 5px;" data-dismiss="modal">Not sure</button>

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



{{-- Category Table + Modal --}}
<table class="table mt-3 col-6" style="border-right: 4px solid white">
	<thead class="thead-light">
		<tr>
			<th scope="col">#</th>
			<th scope="col-2">Category</th>

			<th class="d-flex justify-content-end">
				<button class="btn fa fa-plus d-flex bg-success text-white justify-content-end" data-toggle="modal"
					data-target="#newCategory">
					
				</button>
			</th>
			<div class="modal fade" id="newCategory" tabindex="-1" role="dialog" aria-labelledby="newCategory"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="newCategory">Category Name</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form method="POST" action="/admin">
							<div class="modal-body">
								<input type="text" name="category" class="form-control" id="exampleFormControlInput1"
							placeholder="Type Here!"> 
							</div>
							<div class="modal-footer">
								
									{{ csrf_field() }}
									<button type="submit" name="submitNewCategory" class="btn btn-primary bg-success"
										style="float:right; margin:0 0 0 5px;">Submit</button>
									<button type="button" class="btn btn-secondary bg-secondary"
										style="float:right; margin:0 0 0 5px;" data-dismiss="modal">Not sure</button>

								
							</div>
						</form>
						</div>
					</div>
				</div>


		</tr>
	</thead>
	<tbody>

		@foreach ($category as $x)

		<tr>
			<th scope="row">{{$x->id}}</th>
			<td>{{$x->name}}</td>
			<td class="justify-content-end d-flex">

				<p type="submit" class="fa fa-trash-o p-1 bg-danger"
					style="width: 25px; height:25px;box-shadow: 0.5px 01px 1px black; text-decoration:none; color:black; text-align:center;"
					data-toggle="modal" data-target="#deleteCategory"></p>

				<div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="deleteCategory"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="deleteCategory">Are you sure ?</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" action="/admin/{{$x->id}}">
									{{method_field('DELETE')}}
									{{ csrf_field() }}

									<button type="submit" name="delete" class="btn btn-primary bg-danger"
										style="float:right; margin:0 0 0 5px;">Delete</button>
									<button type="button" class="btn btn-secondary bg-secondary"
										style="float:right; margin:0 0 0 5px;" data-dismiss="modal">Not sure</button>

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




{{-- Brands Table + Modal --}}
<table class="table mt-3 col-6">
		<thead class="thead-light">
			<tr>
				<th scope="col">#</th>
				<th scope="col-2">Brand</th>
	
				<th class="d-flex justify-content-end">
					<button class="btn fa fa-plus d-flex bg-success text-white justify-content-end" data-toggle="modal"
						data-target="#newCategory">
						
					</button>
				</th>
				<div class="modal fade" id="newCategory" tabindex="-1" role="dialog" aria-labelledby="newCategory"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="newCategory">Category Name</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form method="POST" action="/admin">
								<div class="modal-body">
									<input type="text" name="category" class="form-control" id="exampleFormControlInput1"
								placeholder="Type Here!"> 
								</div>
								<div class="modal-footer">
									
										{{ csrf_field() }}
										<button type="submit" name="submitNewCategory" class="btn btn-primary bg-success"
											style="float:right; margin:0 0 0 5px;">Submit</button>
										<button type="button" class="btn btn-secondary bg-secondary"
											style="float:right; margin:0 0 0 5px;" data-dismiss="modal">Not sure</button>
	
									
								</div>
							</form>
							</div>
						</div>
					</div>
	
	
			</tr>
		</thead>
		<tbody>
	
			@foreach ($category as $x)
	
			<tr>
				<th scope="row">{{$x->id}}</th>
				<td>{{$x->name}}</td>
				<td class="justify-content-end d-flex">
	
					<p type="submit" class="fa fa-trash-o p-1 bg-danger"
						style="width: 25px; height:25px;box-shadow: 0.5px 01px 1px black; text-decoration:none; color:black; text-align:center;"
						data-toggle="modal" data-target="#deleteCategory"></p>
	
					<div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="deleteCategory"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deleteCategory">Are you sure ?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form method="POST" action="/admin/{{$x->id}}">
										{{method_field('DELETE')}}
										{{ csrf_field() }}
	
										<button type="submit" name="delete" class="btn btn-primary bg-danger"
											style="float:right; margin:0 0 0 5px;">Delete</button>
										<button type="button" class="btn btn-secondary bg-secondary"
											style="float:right; margin:0 0 0 5px;" data-dismiss="modal">Not sure</button>
	
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
