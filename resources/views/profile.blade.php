
@extends('layouts.main')

@section('content')             


@include('header')       


<main class="main mt-5 clearfix" role="main ">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Change Password</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Photo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#album" role="tab" aria-controls="contact" aria-selected="false">My Photo Album</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="row m-0 p-5">

                <form     id="profileform"  method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="userName">Name</label>
                            <input type="text" class="form-control" id="userName" name="userName" placeholder="Name" value="{{Auth::user()->name}}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div> 
                            <div class="invalid-feedback">
                                Please input your Name!
                            </div>
                        </div>


                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="userCountry">Country</label>
                            <input type="text" class="form-control" id="userCountry" name="userCountry" value="{{Auth::user()->Country}}" placeholder="Country" required>
                            <div class="invalid-feedback">
                                Please provide a valid Country.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="userCity">City</label>
                            <input type="text" class="form-control" id="userCity" name="userCity" value="{{Auth::user()->City}}" placeholder="City" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="userState">State</label>
                            <input type="text" class="form-control" id="userState" name="userState" value="{{Auth::user()->StateProvince}}" placeholder="State" required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="userZip">Zip</label>
                            <input type="text" class="form-control" id="userZip" name="userZip" value="{{Auth::user()->ZipCode}}" placeholder="Zip" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="userLocation">Location</label>
                            <input type="text" class="form-control" id="userLocation" name="userLocation" value="{{Auth::user()->Location}}" placeholder="Location" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="userCompany">Company</label>
                            <input type="text" class="form-control" id="userCompany" name="userCompany" value="{{Auth::user()->Company}}" placeholder="Company" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg border bg-primary" id="profileSubmit" type="button">Save</button>
                </form>

            </div>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row m-0 p-5">
                <form   id="changePassform"  method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-12 mb-3  ">
                            <label for="CurrentPass">Current Password</label>
                            <input type="password" class="form-control" id="CurrentPass" value="" >
                            <div class="valid-feedback">
                                Looks good!
                            </div> 
                            <div class="invalid-feedback">
                                Please input your Name!
                            </div>
                        </div>


                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="NewPass">New Password</label>
                            <input type="password" class="form-control" id="NewPass" value="" >
                            <div class="valid-feedback">
                                Looks good!
                            </div> 
                            <div class="invalid-feedback">
                                Please input your Name!
                            </div>
                        </div>


                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="ConfirmPass">Confirm Password</label>
                            <input type="password" class="form-control" id="ConfirmPass" value="" >
                            <div class="valid-feedback">
                                Looks good!
                            </div> 
                            <div class="invalid-feedback">
                                Please input your Name!
                            </div>
                        </div>


                    </div>


                    <button class="btn btn-primary btn-lg border bg-primary" type="button" id="btnChangPass">Save</button>
                </form>

            </div>

        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <form id="uploadform"  accept-charset="UTF-8" class="  w-100" role="form" method="POST" enctype="multipart/form-data" style="margin-right:10px;float:right;">
                {{ csrf_field() }}    
                <div class="wrapper__content wrapper__content--small">



                    <div id="image-preview" style="background-image:url('{{Auth::user()->photo}}');">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="image" id="image-upload" />
                    </div>
                </div>
                <button class="btn btn-primary btn-lg border bg-primary" type="button" id="btnUploadPhoto">Save</button>
            </form>
        </div>  
        <div class="tab-pane fade" id="album" role="tabpanel" aria-labelledby="contact-tab">
            <div class="wrapper__content">
                <div style="position: relative">
                    <h2 class="head">
                        <span>My Favorite Photos</span>
                       </h2>
                    
                </div>
                <div class="grid-4_sm-2 gallery highlighted registrations">
                    @foreach($photoalbum as $photo)
                    <div class="col">
                        <div class="gallery-photo">
                            <a href="/photo/{{$photo->id}}" class="gallery-photo__frame">
                                <img src="{{$photo->img_url}}" class="gallery-photo__img" >
                                <div class="gallery-photo__info">
                                    <div class="gallery-photo__section">
                                        <span class="gallery-photo__text">Monica De Guidi</span>
                                        <span class="gallery-photo__text gallery-photo__text--nocrop">I-D001</span>
                                    </div>
                                    <div class="gallery-photo__section">
                                        <span class="gallery-photo__text gallery-photo__text--nocrop">
                                            <span class="icon icon-eye2"></span>
                                            <span>32</span>
                                            <span class="icon icon-star-full2"></span>
                                            <span>0</span>
                                            <span class="icon icon-bubble-dots"></span>
                                            <span>0</span>
                                        </span>
                                        <span class="gallery-photo__text gallery-photo__text--aircraft">Enjoy Biplano</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div>
</main>

<link href="{{ asset('css/fileinput.css') }}" rel="stylesheet">


<script src="{{ asset('js/fileinput.js') }}"></script>
<script src="{{ asset('js/profile.js') }}"></script>       
@include('footer')       

@endsection