@extends('template.app')

@section('custom-css-js')

@endsection

@section('title')
    Usuários
@endsection

@section('content')
    <div class="row">
        <div class="col-12">

            {{-- Alert --}}
            <div class="card">
                <div class="card-header">
                    <div class="card-actions float-right">

                    </div>
                    alert
                </div>
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert—check it out!
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success" data-toggle="popover" title="Title" data-content="Body content">
                        button
                    </button>
                </div>
            </div>

            {{-- Carousel --}}
            <div class="card">
                <div class="card-header">
                    <div class="card-actions float-right">

                    </div>
                    Carousel
                </div>
                <div class="card-body">

                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/81YDuTWSHyL.png" width="100%"
                                    height="500px" class="d-block w-100" alt="mulher de oculos">
                            </div>
                            <div class="carousel-item">
                                <img src="https://i.ytimg.com/vi/HiOskmnitXI/maxresdefault.jpg" width="100%" height="500px"
                                    class="d-block w-100" alt="astronalta na lua">
                            </div>
                            <div class="carousel-item">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/81R5dZjZ-5L.png" width="100%"
                                    height="500px" class="d-block w-100" alt="mulher tatuada">
                            </div>

                            <div class="carousel-item">
                                <img src="https://cdn.pixabay.com/photo/2015/03/14/15/33/flower-673296__480.jpg"
                                    width="100%" height="500px" class="d-block w-100" alt="arvore">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Progress --}}
            <div class="card">
                <div class="card-header">
                    <div class="card-actions float-right">

                    </div>
                    Progress
                </div>
                <div class="card-body">

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>

            {{-- Toast --}}
            <div class="card">
                <div class="card-header">
                    <div class="card-actions float-right">

                    </div>
                    Toast
                </div>
                <div class="card-body">

                    {{-- <button id="showToast" class="btn btn-primary btn-lg w-25 mx-auto">Show Toast</button> --}}
                    <button class="btn btn-primary showtoast">Show Toast</button>

                    <div class="toast">
                        <div class="toast-header">
                            Toast Header
                        </div>
                        <div class="toast-body">
                            Some text inside the toast body
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('body_end_js')

@endsection


{{-- components --}}
{{-- <div class="toast" role="alert" aria-live="showToast" aria-atomic="true" data-delay="2000"
    style="position: absolute; top: 1rem; right: 1rem;">
    <div class="toast-header">

        <strong class="mr-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message.
    </div>
</div> --}}
