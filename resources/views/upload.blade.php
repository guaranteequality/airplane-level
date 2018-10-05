
@extends('layouts.main')

@section('content')             
            

@include('header')    

<main class="main" role="main">

    <section class="main__section">


        <div class="wrapper">

           <!-- <h2 class="head">Upload Photos | 10 daily slots left | 5 queue slots left | <span style="color: red;">0 rejected photos</span> | 14909 photos ahead in queue</h2>-->

            <div class="wrapper__flex">

                <div class="wrapper__flexCol wrapper__flexCol--pad-r-small">
                    <div class="wrapper__content wrapper__content--medium">
                        <h3>Show your aviation photos to the world!</h3>
                        <p>
                            Showcase your photos on the largest aviation photography site on the internet.
                            Have your photos displayed on Flightradar24’s website and mobile apps when you upload the newest photo of an aircraft.
                            Submitting your photos is quick and easy, contribute to the JetPhotos catalog today.
                        </p>
                    </div>

                    <div class="wrapper__content wrapper__content--medium">
                        <div>
                            <strong>General Submission Guidelines</strong>
                        </div>
                        <p>
                            1. Only upload photos that you have taken or own the rights to display. If you are not the original photographer of an image,
                            but own its usage rights, you must create a separate account called [Your Name] Collection and submit the photo via that account.
                        </p>
                        <p>
                            2. The long edge of a photo must be at least 1024 pixels, while the short edge must be at least 576 pixels.
                            Images that are overcropped (very narrow) will be rejected. Currently your maximum approved upload size is 1280 pixels wide.                                                                            </p>
                        <p>
                            3. Over-edited photos will be rejected. Please read our upload guidelines for more details.
                        </p>
                        <p>
                            4. Do not upload photos of the same aircraft at very similar angles en masse; please choose your best images.
                            There is a limit of 2 photos per aircraft registration for any one photographer in the queue at a time.
                        </p>
                    </div>

                    <!--<div class="wrapper__content wrapper__content--small">
                        <p>
                            <a class="link" href="https://forums.jetphotos.com/showthread.php?58983-UPLOAD-GUIDELINES-New-version" target="_blank"><strong>Detailed Photo Upload Guidelines</strong></a> <br>
                            <i>Updated: 8 August 2017</i> <br>
                            <strong>These guidelines are required reading for all JetPhotos.com photo contributors! Please make sure you have read and understand them before attempting to upload photos.</strong>
                        </p>
                        <p>
                            If you are unsure about something or have questions, feel free to visit our active <a href="//forums.jetphotos.com" class="link" target="_blank">Photography Forum</a>.
                        </p>
                        <p>
                            To check the status of your photos in the queue, your photo statistics, re-upload information and your personal photographer info, visit your <a href="/members/index.php" class="link">Photo Area</a>.
                        </p>
                        <p>
                            If you have any technical problems uploading or encounter an error please post it in the <a href="//forums.jetphotos.com" class="link">Site Related Forum</a>.
                        </p>
                    </div>-->
                </div>

                <div class="wrapper__flexCol wrapper__flexCol--pad-l-small">

                    <form method="POST" id="uploadform" action="/upload" accept-charset="UTF-8" class="form-horizontal bordered" role="form" enctype="multipart/form-data" style="margin-right:10px;float:right;">
                        {{ csrf_field() }}    
                        <div class="upload-area">

                            <div class="wrapper__content">
                                <div class="wrapper__content wrapper__content--small">



                                    <div id="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="image" id="image-upload" />
                                    </div>
                                </div>

                                <div id="alert-regexists" class="wrapper__content wrapper__content--small alert alert--relative alert--warning hidden" role="alert">
                                    <div class="wrapper alert__content">
<!--                                        <div class="alert__text">Note: You have <a href="" target="_blank"><span></span></a> of the same registration/airport combination in the database</div>-->
                                        <button class="btn btn--reset alert__btn alert__btn--close" role="button">
                                            <span class="icon icon-cross2"></span>
                                        </button>
                                    </div>
                                </div>

                                <div id="alert-exif-date-changed" class="wrapper__content wrapper__content--small alert alert--relative alert--warning hidden" role="alert">
                                    <div class="wrapper alert__content">
<!--                                        <div class="alert__text">Note: You are changing the automatically set EXIF photo date.</div>-->
                                        <button class="btn btn--reset alert__btn alert__btn--close" role="button">
                                            <span class="icon icon-cross2"></span>
                                        </button>
                                    </div>
                                </div>

                                <div id="alert-noairport" class="wrapper__content wrapper__content--small alert alert--relative alert--warning hidden" role="alert">
                                    <div class="wrapper alert__content">
<!--                                        <div class="alert__text">The airport could not be found. Please use the <a href="/addphotos/addairport.php" target="_blank" class="link">new airport form</a> if needed.</div>-->
                                        <button class="btn btn--reset alert__btn alert__btn--close" role="button">
                                            <span class="icon icon-cross2"></span>
                                        </button>
                                    </div>
                                </div>

                                <div id="alert-noaircraft" class="wrapper__content wrapper__content--small alert alert--relative alert--warning hidden" role="alert">
                                    <div class="wrapper alert__content">
<!--                                        <div class="alert__text">The aircraft could not be found. Please use the <a href="/addphotos/addaircraft.php" target="_blank" class="link">new aircraft form</a> if needed.</div>-->
                                        <button class="btn btn--reset alert__btn alert__btn--close" role="button">
                                            <span class="icon icon-cross2"></span>
                                        </button>
                                    </div>
                                </div>

                                <div id="alert-generic-error" class="wrapper__content wrapper__content--small alert alert--relative alert--error hidden" role="alert">
                                    <div class="wrapper alert__content">
                                        <div class="alert__text"></div>
                                        <button class="btn btn--reset alert__btn alert__btn--close" role="button">
                                            <span class="icon icon-cross2"></span>
                                        </button>
                                    </div>
                                </div>

                                <div class="wrapper__content wrapper__content--small">

                                   
                                        <!--<div class="wrapper__content wrapper__content--small">

                                            <div class="box box--silver">

                                                <h2 class="head">Auto Fill</h2>

                                                <div class="form__group">
                                                    <p>
                                                        By filling in one or both of the fields below, the system will attempt to automatically fill in the Aircraft,
                                                        Airline, Location, and Registration fields for you. Fields which have been completed by the Auto-Fill system
                                                        have a darker background than the rest of the page.
                                                    </p>
                                                </div>
                                                <div class="form__group form__group--last">
                                                    <div class="grid">
                                                        <div class="col-6_sm-12">
                                                            <div class="input-wrapper">
                                                                <input type="text" name="autoFillAircraft" class="input-wrapper__field " placeholder="Aircraft Registration">
                                                            </div>
                                                        </div>
                                                        <div class="col-6_sm-12">
                                                            <div class="input-wrapper">
                                                                <input type="text" name="autoFillLocation" class="input-wrapper__field " placeholder="Airport 4-letter ICAO">
                                                            </div>
                                                        </div>
                                                        <!--      <div class="col-12">
                                                        <button type="submit" class="btn btn--large btn--block btn--picton-blue" role="button">
                                                        <span>Auto-Fill</span>
                                                        </button>
                                                        </div>    
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                            -->


                                        <div class="wrapper__content">

                                            <div class="box box--silver">

                                                <div class="wrapper__content wrapper__content--small">
                                                    <div class="form__group">
                                                        <label class="form__label">Genre</label>
                                                        <div class="radio-wrapper radio-wrapper--inline">
                                                            <div class="radio">
                                                                <input type="radio" id="uploadPhoto-civil" name="genre" class="radio__input" value="0" checked="">
                                                                <label class="radio__label" for="uploadPhoto-civil">Civilian</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" id="uploadPhoto-military" name="genre" class="radio__input" value="1">
                                                                <label class="radio__label" for="uploadPhoto-military">Military</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="wrapper__content wrapper__content--small">
                                                    <label class="form__label">Location</label>
                                                    <div class="form__group form__group--small">
                                                        <p>
<!--                                                            If the airport is not listed, please use the <a href="/addphotos/addairport.php" target="_blank" class="link">new airport form</a>.-->
                                                        </p>
                                                    </div>
                                                    <div class="form__group form__group--small">
                                                        <select class="form-control" id="Country" >
                                                            <option value="0">Please Select Country</option>
                                                            @foreach($countries as $country)
                                                            <option value="{{$country->id}}">{{$country->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form__group form__group--small">
                                                        <select class="form-control" id="Airport" name="Airport">

                                                        </select> 
                                                    </div>
                                                </div>

                                                <div class="wrapper__content wrapper__content--small">
                                                    <label class="form__label">Aircraft</label>
                                                    <div class="form__group form__group--small">
                                                        <p>
<!--                                                            If the aircraft you need is not here please use this <a href="/addphotos/addaircraft.php" target="_blank" class="link">form</a>.-->
                                                        </p>
                                                    </div>
                                                    <div class="form__group form__group--small">
                                                        <select class="form-control" id="aircraftmanu">
                                                            <option value="0">Please Select Aircraft</option>
                                                            @foreach($manus as $manu)
                                                            <option value="{{$manu->id}}">{{$manu->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form__group form__group--small">
                                                        <select class="form-control" id="aircrafttype">
                                                        </select>

                                                    </div>
                                                    <div class="form__group form__group--small">
                                                        <select class="form-control" id="aircraft" name="aircraft">
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="wrapper__content wrapper__content--small">
                                                    <label class="form__label">Operator</label>
                                                    <div class="form__group form__group--small">
                                                     <!--   <p>
                                                            If the Airline you need is not in the menu, or auto-fill,
                                                            please complete this <a href="/addphotos/addairline.php" target="_blank" class="link">form</a> to request it be added.
                                                        </p> -->
                                                    </div>
                                                    <div class="grid-noBottom">
                                                        <div class="col-6_sm-12">
                                                            <select class="form-control" id="AirlineCategory">
                                                                <option value="0">Please Select AirlineCategory</option>
                                                                @foreach($airlinecategory as $category)
                                                                <option value="{{$category->id}}">{{$category->Name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-6_sm-12">
                                                            <div class="select select--block">
                                                                <select class="form-control" id="Airline" name="Airline">
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="grid-noBottom">
                                                    <div class="col-6_sm-12">
                                                        <label for="uploadFormReg" class="form__label">Registration</label>
                                                        <div class="input-wrapper">
                                                            <input type="text" style="text-transform:uppercase;" id="uploadFormReg" name="reg" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-6_sm-12">
                                                        <label for="uploadFormSerial" class="form__label">Serial Number</label>
                                                        <div class="input-wrapper">
                                                            <input type="text" id="uploadFormSerial" name="serial" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="box">

                                            <div class="wrapper__content wrapper__content--small">
                                                <div class="grid">
                                                    <div class="col-6_sm-12">
                                                        <label for="uploadFormMonth" class="form__label">Photo date</label>
                                                        <div class="input-wrapper">
                                                            <input type="text" style="text-transform:uppercase;" id="uploadFormMonth" name="regDate" class="form-control">

                                                        </div>
                                                    </div>
                                                    <div class="col-6_sm-12">
                                                        <label class="form__label">Show exif data</label>
                                                        <div class="radio-wrapper radio-wrapper--inline">
                                                            <div class="radio">
                                                                <input type="radio" id="uploadPhoto-exif-yes" name="showExif" class="radio__input" value="1" checked="">
                                                                <label class="radio__label" for="uploadPhoto-exif-yes">Yes</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" id="uploadPhoto-exif-no" name="showExif" class="radio__input" value="0">
                                                                <label class="radio__label" for="uploadPhoto-exif-no">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wrapper__content wrapper__content--small">
                                               
                                                <div class="form__group">
                                                    <label for="uploadFormRemarks" class="form__label form__label--block">Remarks (displayed below the photo)</label>
                                                    <textarea name="remarks" id="uploadFormRemarks" cols="30" rows="4" class="textarea form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="wrapper__content wrapper__content--small">
                                                <div class="form__group">

                                                    <label class="form__label">Categories (photo specific)</label>

                                                    <div class="grid">

                                                        @foreach($photocategories as $photocategory)

                                                        <div class="col-6_xs-12">

                                                            <div class="checkbox">
                                                                <input type="checkbox" id='photocategory{{$photocategory->id}}' name="photocategory[]" class="checkbox__input photocategory" value="{{$photocategory->id}}">
                                                                <label for="photocategory{{$photocategory->id}}" class="checkbox__label">
                                                                    <span>{{$photocategory->Name}}</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        @endforeach


                                                    </div>

                                                </div>
                                            </div>

                                            <div class="wrapper__content wrapper__content--small">
                                                <div class="form__group">

                                                    <label class="form__label">Categories (aircraft specific)</label>

                                                    <div class="grid">

                                                        @foreach($aircraftcategories as $aircraftcategory)

                                                        <div class="col-6_xs-12">

                                                            <div class="checkbox">
                                                                <input type="checkbox" id='aircraftcategory{{$aircraftcategory->id}}' name="aircraftcategory[]" class="checkbox__input photocategory" value="{{$aircraftcategory->id}}">
                                                                <label for="aircraftcategory{{$aircraftcategory->id}}" class="checkbox__label">
                                                                    <span>{{$aircraftcategory->Name}}</span>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="wrapper__content wrapper__content--small">
                                                <div class="form__group">
                                                    <label for="camera" class="form__label">Camera</label>
                                                    <div class="select select--block">
                                                        <select id="modal-correct-info-camera" name="camera" class="form-control">
                                                            <option value="-1">Leave blank</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form__group">
                                                    <label for="camera" class="form__label">Lens</label>
                                                    <div class="select select--block">
                                                        <select id="modal-correct-info-lens" name="lens" class="form-control">
                                                            <option value="-1">Leave blank</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wrapper__content wrapper__content--small">
                                                <div class="form__group form__group--small">
<!--                                                    <p>Does this photo show a new aircraft type for a particular airline, paint scheme or otherwise warrant being treated with priority? If so, please enter a reason below.</p>-->
                                                </div>
                                                <div class="form__group">
                                                    <label for="uploadFormHot" class="form__label">Hot photo? Enter why:</label>
                                                    <textarea name="hot" id="uploadFormHot" cols="30" rows="4" class="textarea form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="wrapper__content wrapper__content--small">
                                                <div class="form__group">
                                                    <label for="commentsToScreener" class="form__label form__label--block">Comments to screeners</label>
                                                    <textarea name="commentsToScreener" id="commentsToScreener" cols="30" rows="4" class="textarea form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form__group form__group--last">
                                                <button type="button" id="btnUploadPhoto" class="btn btn--block btn--picton-blue  " >
                                                    <span>Upload Photo</span>
                                                </button>
                                            </div>

                                        </div>

                                 
                                </div>

                            </div>

                        </div>


                        <div class="wrapper__content slots-messages hidden">
                            <div class="box box--white box--has-border">
                                <h2 class="head">Upload disabled</h2>
                                <p>Uploading has been disabled due to following reasons: </p>
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>

</main>

<link href="{{ asset('css/fileinput.css') }}" rel="stylesheet">


<script src="{{ asset('js/fileinput.js') }}"></script>
<script src="{{ asset('js/upload.js') }}"></script>



@include('footer')       

@endsection