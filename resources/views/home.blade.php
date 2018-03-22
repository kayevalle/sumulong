@extends('layouts.home')

@section('title','Juan Sumulong Memorial School System')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="space-50"> &nbsp; </div>
        <div class="col-md-12" style="">

            <div class="jumbotron jumbotron-fluid" style="background-color: #F6F5F5;">
              <div class="container">
                <div class="row welcome-row" style="">
                    <div class="col-lg-8">
                        <div class="welcome" style="">
                            <br><h3>Welcome</h3><br>

                            <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et congue massa, et lacinia velit. Nam non magna id dolor feugiat convallis vitae id justo. Morbi condimentum ipsum eu ligula lacinia, at tempus mi malesuada. Sed a tempor massa. Donec gravida eu urna nec suscipit. Integer non augue id magna faucibus laoreet.
                            </p>    
                        </div>
                        
                    </div>            
                    <div class="col-lg-4">
                        <div id="carouselWelcome" class="carousel slide" data-ride="carousel" style="border:">
                          <div class="carousel-inner" style="border:;height: 250px">
                            <div class="carousel-item active">
                              <img class="img-fluid w-100" src="{{ asset('images/nav-cover.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="img-fluid w-100" src="{{ asset('images/JSMJC.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="img-fluid w-100" src="{{ asset('images/nav-cover.jpg') }}" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselWelcome" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselWelcome" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>            
                </div>
                
              </div>
            </div>

        </div>
    </div>
</div>



<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-9">
            <br><h3>Welcome</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-deck card-news" style="margin: 0px;">
                      <div class="card">
                        <img class="card-img-top" src="{{ asset('images/placeholder.png') }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Announcement</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                      <div class="card">
                        <img class="card-img-top" src="{{ asset('images/placeholder.png') }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Announcement</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                      <div class="card">
                        <img class="card-img-top" src="{{ asset('images/placeholder.png') }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Announcement</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                    <div class="btn-more">
                        <a href="#" class="button">see more</a>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-3" style="">njen</div>
    </div>
        <div class="space-50"></div>
</div>


@endsection


