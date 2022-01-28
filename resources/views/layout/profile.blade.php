<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <title>Document</title>
</head>
<body>
  <section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color">About Me</h3>
                    <h6 class="theme-color lead">{{auth()->user()->name}}</h6>
                    {{-- <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p> --}}
                    <div class="row about-list">
                        {{-- <div class="col-md-6"> --}}
                            {{-- <div class="media">
                                <label>Birthday</label>
                                <p>4th april 1998</p>
                            </div>
                            <div class="media">
                                <label>Age</label>
                                <p>22 Yr</p>
                            </div> --}}
                            {{-- <div class="media">
                                <label>Residence</label>
                                <p>Canada</p>
                            </div> --}}
                            {{-- <div class="media">
                                <label>Address</label>
                                <p>California, USA</p>
                            </div> --}}
                        {{-- </div> --}}
                        <div class="col-md-6">
                            <div class="media">
                                <label>E-mail</label>
                                <p>{{auth()->user()->email}}</p>
                            </div>
                            <div class="media">
                                <label>Phone</label>
                                <p>{{auth()->user()->phone}}</p>
                            </div>
                            {{-- <div class="media">
                                <label>Skype</label>
                                <p>skype.0404</p>
                            </div>
                            <div class="media">
                                <label>Freelance</label>
                                <p>Available</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                </div>
            </div>
        </div>
        <div class="foot">
              <button onclick="document.location='/'">Back</button>
        </div>
    </div>
</section>
</body>
</html>