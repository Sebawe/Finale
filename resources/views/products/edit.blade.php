@extends('products.admin')

@section('mytable')


<div class="container">
		<div class="col-xl-9 col-md-10 col-sm-11 col-xs-12 mx-auto">
		<br>
			<h3 class="modal-title" id="edit">Edit an item</h3>
			
		
		<br>
		<form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
				{{method_field('PATCH')}}
				{{csrf_field()}}
				<input type="hidden" name="mine" value="{{$product->id}}">
				
				<div class="form-group">
					<label for="exampleFormControlInput1">Item Title</label>
					<input type="text" name="title" class="form-control" id="item-title" value="{{$product->title}}">
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
					<textarea class="form-control" name="description" id="exampleFormControlTextarea1" value="" rows="2">{{$product->description}}</textarea>
				</div>
				<div class="d-flex justify-content-start">
				<div class="form-group d-flex justify-content-start">
					<label for="exampleFormControlInput1">Price</label>
					<input type="number" name="price" class="form-control w-50 ml-4" id="exampleFormControlInput1" value="{{$product->price}}" placeholder="JD">
				</div>
				<div class="form-group mx-3">
						<label for="hot">Hot item</label>
						<input 
							@if($product->hot == 1)
								checked
							@endif
						 name="hot" type="checkbox" value="yes">
					</div>
					<div class="form-group mx-3">
						<label for="slider">Slider item</label>
						<input 
							@if($product->slider == 1)
								checked
							@endif
						 name="slider" type="checkbox" value="yes">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleFormControlFile1">Upload an Image</label>
					<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" value="test">
				</div>
				<div class="modal-footer p-3">
					
					<form action="/products">
						<button type="submit" href="/admin" class="btn btn-secondary bg-secondary">Close</button>
					</form>
					<button type="submit" name="edit" class="btn btn-primary bg-success">Save changes</button>
				</div>
			</form>
		</div>
	</div>

@endsection