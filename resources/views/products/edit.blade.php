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
					<textarea class="form-control" name="description" id="exampleFormControlTextarea1" value="" rows="2">{{$product->description}}</textarea>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Price</label>
					<input type="number" name="price" class="form-control w-25" id="exampleFormControlInput1" value="{{$product->price}}" placeholder="JD">
				</div>
				<div class="form-group">
					<label for="exampleFormControlFile1">Upload an Image</label>
					<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" value="test">
				</div>
				<div class="modal-footer p-3">
					
					<form action="/products">
						<button type="submit" href="/products" class="btn btn-secondary bg-secondary">Close</button>
					</form>
					<button type="submit" name="edit" class="btn btn-primary bg-success">Save changes</button>
				</div>
			</form>
		</div>
	</div>

@endsection