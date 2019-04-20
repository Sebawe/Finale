@extends('products.index')

@section('stuff')
<div class="col-lg-4 col-md-6 mb-4 filterDiv laptop" data-toggle="modal"
data-target="#exampleModal1">
<div class="card h-100">
    <a href="#"><img class="card-img-top" src="img/works/130-1200x1200.jpg" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#">Item One</a>
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

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel1" aria-hidden="true">
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
                <a href="#"><img class="card-img-top" src="img/works/130-1200x1200.jpg"
                        alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Item One</a>
                    </h4>
                    <h5>$24.99</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Amet numquam aspernatur!</p>
                </div>

            </div>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>
</div>

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