@extends('products.index')

@section('stuff')

@foreach ($product as $item)
<div class="col-lg-4 col-md-6 mb-4 filterDiv {{strtolower($item->category)}}s" data-toggle="modal"
data-target="#modal{{$item->id}}">
<div class="card mycard h-100">
    <a href="#" class="w-100" style="height:253px;overflow:hidden"><img class="card-img-top" src="{{Storage::url($item->id) .'?'. time()}}" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#">{{$item->title}}</a>
        </h4>
        
    {{-- <p class="card-text">{{$item->description}}</p> --}}
    </div>
    <div class="card-footer">
        {{-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> --}}
        <h5>{{$item->price}}.0 JD</h5>
    </div>
</div>
</div>

<div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog"
aria-labelledby="aria{{$item->modal}}" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$item->title}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <a href="#"><img class="card-img-top" src="{{Storage::url($item->id) .'?'. time()}}"
                        alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">{{$item->title}}</a>
                    </h4>
                <h5>{{$item->price}} JD</h5>
                <p class="card-text">{{$item->description}}</p>
                </div>

            </div>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>
</div>

@endforeach

@endsection