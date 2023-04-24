<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Project Planner</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    </head>
      
    <body>
        <!-- header -->
        <header>
            <div class="text-center bg-image">
                <div class="mask">
                    <div class="p-5 justify-content-center align-items-center h-100">
                        <div class="text-white">
                            <h4 class="title-light">Project Planner</h4>
                            <h1 class="mb-3 title-bold">StarterPack</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- accordion -->
        <div class="container mt-5 mb-5">
            <div class="text-center mb-4">
                <img src="./images/start-up.png" alt="start-up" class="img-fluid mb-2 title-image">
                <span class="ms-2 title-with-image">Get Started</span>
            </div>
            <div class="accordion" id="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Project Planner Fundamentals
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                    <div class="accordion-body">
                        @if (($data && $data['fundamentals']))
                            <ul class="nav nav-tabs nav-fill" id="tab" role="tablist">
                                @foreach ($data['fundamentals'] as $key => $fundamental)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{ $key == 1 ? 'active' : ''}}" id="home-tab" data-bs-toggle="tab" data-bs-target="#tb{{$fundamental['id']}}" type="button" role="tab" aria-controls="tb{{$fundamental['id']}}" aria-selected="{{ $key == 1 ? 'true' : 'false'}}">{{$fundamental['name']}}</button>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content" id="tabContent">
                                @foreach ($data['fundamentals'] as $key => $fundamental)
                                    <div class="tab-pane fade p-3 {{ $key == 1 ? 'show active' : ''}}" id="tb{{$fundamental['id']}}" role="tabpanel" aria-labelledby="tb{{$fundamental['id']}}-tab">
                                        {!! $fundamental['content'] !!}
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-right">No Content</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Working with Projects and Tasks
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">...</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Saving and Rusing Content
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">...</div>
                </div>
            </div>
        </div>
        <!-- thumbnails -->
        <div class="container">
            <div class="text-center mb-4">
                <img src="./images/start-up.png" alt="start-up" class="img-fluid mb-2 title-image">
                <span class="ms-2 title-with-image">Dive Deeper</span>
            </div>
            <div class="row">
                @if (($data && $data['drives']))
                    @foreach ($data['drives'] as $key => $drive)
                        <div class="col-md-3 mb-5">
                            <div class="thumbnail text-center shadow">
                                <img src="./images/1200x600.png" alt="Thumbnail 1" class="img-fluid">
                                <div class="caption p-4 {{ $key % 2 == 0 ? 'thumbnail-body-blue text-white' : 'thumbnail-body-light-green' }}">
                                    <h6><span class="text-uppercase">{{ $drive['sub_title'] }}</span> - {{ $drive['time'] }}</h6>
                                    <h4>{{ $drive['title'] }}</h4>
                                    <p>{{ $drive['description'] }}</p>
                                    <a class="readmore btn btn-primary btn-readmore text-blue">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <!-- footer -->
        <footer>
            <div class="container p-5 mt-3">
                <span class="text-white">Your footer content goes here.</span>
            </div>
        </footer>
        <!-- model -->
        <div id="profileModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hello..</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                            <div class=" image d-flex flex-column justify-content-center align-items-center">
                                <img src="./images/profile.png" height="100" width="100" />
                                <h4 class="name mt-3">I'm <span id="name"></span></h4>
                            <div class="text-center mt-3">
                                <p id="bio"></p>
                            </div>
                            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                                <a href="#" target="_blank" id="twitter"><span><i class="fa fa-twitter"></i></span></a>
                                <a href="#" target="_blank" id="facebook"><span><i class="fa fa-facebook"></i></span>
                                <a href="#" target="_blank" id="instagram"><span><i class="fa fa-instagram"></i></span>
                                <a href="#" target="_blank" id="linkedin"><span><i class="fa fa-linkedin"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        // api call using ajax
        $(function () {
            $('.readmore').click(() => {
                $('#name').html();
                $('#bio').html();
                $('#twitter').attr('href', '');
                $('#facebook').attr('href', '');
                $('#instagram').attr('href', '');
                $('#linkedin').attr('href', '');

                $.ajax({
                    url: "{{ config('app.url') }}/api/profile/1",
                    method: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#name').html(data['name']);
                        $('#bio').html(data['biography']);
                        $('#twitter').attr('href', data['twitter']);
                        $('#facebook').attr('href', data['facebook']);
                        $('#instagram').attr('href', data['instagram']);
                        $('#linkedin').attr('href', data['linkedin']);
                        $("#profileModal").modal("show");
                    },
                    error: function(error) {
                        console.error(error);
                    }
                })
            });
        });
    </script>  
</html>