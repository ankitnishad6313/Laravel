@extends('layout.main') {{-- Extends Paraent Page --}}
@push('title')
    <title>Index Page</title>
@endpush
@section('main-section') {{-- section start --}}
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.pexels.com/videos/14637339/fog-forest-forest-trees-snow-14637339.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/videos/14637339/fog-forest-forest-trees-snow-14637339.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/videos/14637339/fog-forest-forest-trees-snow-14637339.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Title</h3>
                <p class="card-text">Text</p>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Title</h3>
                <p class="card-text">Text</p>
            </div>
        </div>
    </div>
  </div>

  <div
    class="modal fade"
    id="exampleModalToggle"
    aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel"
    tabindex="-1"
  >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">
                    Modal 1
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                Show a second modal and hide this one with the button
                below.
            </div>
            <div class="modal-footer">
                <button
                    class="btn btn-primary"
                    data-bs-target="#exampleModalToggle2"
                    data-bs-toggle="modal"
                >
                    Open second modal
                </button>
            </div>
        </div>
    </div>
  </div>
  <div
    class="modal fade"
    id="exampleModalToggle2"
    aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1"
  >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">
                    Modal 2
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                Hide this modal and show the first with the button below.
            </div>
            <div class="modal-footer">
                <button
                    class="btn btn-primary"
                    data-bs-target="#exampleModalToggle"
                    data-bs-toggle="modal"
                >
                    Back to first
                </button>
            </div>
        </div>
    </div>
  </div>
  <a
    class="btn btn-primary"
    data-bs-toggle="modal"
    href="#exampleModalToggle"
    role="button"
    >Open first modal</a
  >
  
  {{-- section end --}}
@endsection