<x-layout>
    <x-slot name='title'>
        Home
    </x-slot>
        <section id="about">
            <div class="row">
                <div class="col-lg-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#">
                                    <img src="{{asset('/images/WhatsApp Image 2024-04-25 at 11.09.48 AM.jpeg')}}" class="d-block w-100" style="max-height:auto;" alt="Image 1">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#">
                                    <img src="{{asset('/images/creative.jpg')}}" class="d-block w-100"  style="max-height: 450px;" alt="Image 2">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#">
                                    <img src="{{asset('/images/IMG_9164.JPG')}}" class="d-block w-100" style="max-height: 450px;"  alt="Image 3">
                                </a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="divider text-dark">
                        <p class="text-black fw-bold fs-4 text-start">
                            Beyond the confines of classrooms, our clubs serve as bridges connecting students from all walks of life. Forge meaningful friendships, collaborate on exciting projects, and surround yourself with like-minded individuals who inspire and uplift you.
                        </p>
                            Come, be a part of something extraordinary. Welcome to the College Club Hub, where every moment is a celebration of unity, creativity, and the pursuit of excellence.
                            <br>
                            <br>
                            <div class="text-center">
                            <button type="button" class="btn btn-primary btn-lg">Join Us</button>
                            </div>
                    </div>
              </div>
        </div>
    </section>
    <br>
    <br>
    <hr>
    <div class="text-center fw-bolder">
        <h1>What's On The Comming Calendar ?</h1>
    </div>
    <br>
    <br>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="notice-board-container">
                <div class="notice-board">
                    <div class="notices">
                        <div class="notice">
                            <a href="#" class="text-dark text-decoration-none ">
                                Important notice 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </a>
                        </div>

                        <div class="notice" >
                            <a href="#" class="text-dark text-decoration-none ">
                                
                                Important notice 2: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </a>        
                        </div>
                        <div class="notice" >
                            <a href="#" class="text-dark text-decoration-none ">
                                Important notice 3: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </a>
                        </div>
                        <div class="notice">
                            <a href="#" class="text-dark text-decoration-none ">
                                Important notice 4: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </a>

                        </div>
                        <div class="notice">
                            <a href="#" class="text-dark text-decoration-none ">
                                Important notice 5: Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="image-container">
                <img src="{{asset('https://images.pexels.com/photos/5239917/pexels-photo-5239917.jpeg?auto=compress&cs=tinysrgb&w=&h=750&dpr=1')}}" class="img-fluid" alt="Calendar Image">
            </div>
        </div>
    </div>
    <hr>
    <div class="text-center fw-bolder">
        <h1>Most demanding Clubs</h1>
    </div>
    <br>
    <div class="row row-cols-1 row-cols-md-3">
  <div class="col">
    <div class="card">
      <img src="{{asset('https://images.pexels.com/photos/7594006/pexels-photo-7594006.jpeg?auto=compress&cs=tinysrgb')}}" class="card-img-top" alt="photo">
      <div class="card-body">
        <h5 class="card-title">Camera Club</h5>
        <p class="card-text">If you want to become a better photographer, learn more, get and stay inspired, meet others who share your passion, and make new friends, well, nothing beats a camera club.</p>
        <a href="#" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="/images/music.jpg" class="card-img-top" alt="image">
      <div class="card-body">
        <h5 class="card-title">Music Club</h5>
        <p class="card-text">Foster creativity, community through collaboration, performances, and social events, providing students with opportunities to explore their musical passions.</p>
        <a href="#" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{asset('https://images.pexels.com/photos/2820906/pexels-photo-2820906.jpeg?auto=compress&cs=tinysrgb')}}" class="card-img-top" alt="sports">
      <div class="card-body">
        <h5 class="card-title">Sports Club</h5>
        <p class="card-text">Experience the thrill of victory, the intimacy of teamwork, and the joy of competition with our sports club. Join us for passion-filled matches and moments on the field!</p>
        <a href="#" class="btn btn-primary">More Info</a>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
    <hr>   
</x-layout>

@php
            $styles="
            .image-container {
                position: relative;
                overflow: hidden;
            }
            .image-container img {
                transition: transform 0.5s ease;
            }
            .image-container:hover img {
                transform: scale(1.1);
            }";
            
@endphp
<style>
    {!! $styles !!}
    .notice-board {
                transition: box-shadow 0.3s;
            }
            .notice-board:hover {
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
            }
            .notice {
                padding: 10px;
                margin-bottom: 10px;
                background-color: #f8f9fa;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            .row{
                position:relative;
                overflow:hidden;
            }
            .card{
                transition:transform 0.5s ease;
            }
            .card:hover{
                transform:scale(1.05);
            }

</style>