@extends('layouts.app')

@section('title')
    Welcome Page
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row row-cols-auto justify-content-evenly ">
            @foreach($products as $product)
                <div class="card my-2" style="width: 18rem;">
{{ $product->name }}
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="200"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect>
                        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
