@extends('products.index')

@section('stuff')

@foreach ($product as $item)
<div class="col-lg-4 col-md-6 mb-4 filterDiv {{$item->category}}s" data-toggle="modal"
data-target="#modal{{$item->id}}">
<div class="card mycard h-100">
    <a href="#" class="w-100" style="height:250px;overflow:hidden"><img class="card-img-top" src="{{Storage::url($item->id) .'?'. time()}}" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#">{{$item->title}}</a>
        </h4>
        <h5>{{$item->price}}.0 JD</h5>
    {{-- <p class="card-text">{{$item->description}}</p> --}}
    </div>
    <div class="card-footer">
        {{-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> --}}
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

<div class="col-lg-4 col-md-6 mb-4 filterDiv laptop" data-toggle="modal"
data-target="#exampleModal2">
<div class="card h-100">
    <a href="#"><img class="card-img-top" src="img/works/alienware-1.jpg" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#">Item Two</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
            numquam aspernatur! Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
    </div>
</div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel2" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/works/alienware-1.jpg"
                        alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Item Two</a>
                    </h4>
                    <h5>$24.99</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
        </div>

    </div>
</div>
</div>


<div class="col-lg-4 col-md-6 mb-4 filterDiv desktop" data-toggle="modal"
data-target="#exampleModal3">
<div class="card h-100">
    <a href="#"><img class="card-img-top" src="img/works/desk2.jpg" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#">Item Three</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
            numquam aspernatur!</p>
    </div>
    <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
    </div>
</div>
</div>


<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel3" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <a href="#"><img class="card-img-top" src="img/works/desk2.jpg" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Item Three</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
    </div>

</div>
</div>

<div class="col-lg-4 col-md-6 mb-4 filterDiv printer">
<div class="card h-100">
    <a href="#"><img class="card-img-top" src="img/works/printer.png" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#">Item Four</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
            numquam aspernatur!</p>
    </div>
    <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
    </div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4 filterDiv laptops">
<div class="card h-100">
    <a href="#"><img class="card-img-top"
            src="img/works/21950662_2057645007855898_5035928929776713242_o.jpg" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#">Item Five</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
            numquam aspernatur! Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
    </div>
</div>
</div>

<div class="col-lg-4 col-md-6 mb-4 filterDiv laptop">
<div class="card h-100">
    <a href="#"><img class="card-img-top" src="img/works/spectre.png" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#">Item Six</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
            numquam aspernatur!</p>
    </div>
    <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
    </div>
</div>
</div>
@endsection