@extends('admin.layouts.app')
@section('title')
    Settings
@endsection

@section('bread')
    <li class="breadcrumb-item active">Settings</li>
@endsection


@section('style')
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px; /* The height is 400 pixels */
            width: 100%; /* The width is the width of the web page */
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }
    </style>
@endsection


@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('admin.settings.store') }}" method="post" enctype="multipart/form-data"
                          class="form-material">

                        {{ csrf_field() }}

                        <div class="form-body">

                            <h3 class="card-title">Modify Site Settings</h3>

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#basics"
                                                        role="tab"><span class="hidden-sm-up"><i
                                                    class="ti-home"></i></span> <span
                                                class="hidden-xs-down">Basics</span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#social"
                                                        role="tab"><span class="hidden-sm-up"><i
                                                    class="ti-user"></i></span> <span class="hidden-xs-down">Social Media</span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contact"
                                                        role="tab"><span class="hidden-sm-up"><i
                                                    class="ti-user"></i></span> <span
                                                class="hidden-xs-down">Contact Us</span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#video"
                                                        role="tab"><span class="hidden-sm-up"><i
                                                class="ti-user"></i></span> <span
                                            class="hidden-xs-down">Video Section</span></a></li>

                            </ul>
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="basics" role="tabpanel">
                                    <div class="row p-t-20">
                                        <div class="col-md-12">
                                            <div class="form-group {{ $errors->has('title') ? 'has-danger' : '' }}">
                                                <label class="control-label">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                       value="{{ $settings->title ?? '' }}">
                                                @if ($errors->has('title'))
                                                    <small class="form-control-feedback">{{ $errors->first('title') }}</small>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('favicon') ? 'has-danger' : '' }}">
                                                <label class="control-label">Site Icon</label>
                                                <input type="file" name="favicon" class="form-control">

                                                @if ($errors->has('favicon'))
                                                    <small class="form-control-feedback">{{ $errors->first('favicon') }}</small>
                                                @endif

                                                @if(isset($settings->favicon) && $settings->favicon != "")
                                                    <div class="col-md-12" style="margin: 10px">
                                                        <div class="row el-element-overlay">
                                                            <div class="el-card-item">
                                                                <div class="el-card-avatar el-overlay-1"><img
                                                                            src="{{ '/storage/'. $settings->favicon }}"
                                                                            alt="Main Page"
                                                                            style="background-color: black; max-width: 150px">
                                                                    <div class="el-overlay">
                                                                        <ul class="el-info">
                                                                            <li>
                                                                                <a class="btn default btn-outline image-popup-vertical-fit"
                                                                                   href="{{ '/storage/'. $settings->favicon }}"
                                                                                   target="_blank"><i
                                                                                            class="icon-magnifier"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('logo') ? 'has-danger' : '' }}">
                                                <label class="control-label">Logo</label>
                                                <input type="file" name="logo" class="form-control">

                                                @if ($errors->has('logo'))
                                                    <small class="form-control-feedback">{{ $errors->first('logo') }}</small>
                                                @endif

                                                @if(isset($settings->logo) && $settings->logo != "")
                                                    <div class="col-md-12" style="margin: 10px">
                                                        <div class="row el-element-overlay">
                                                            <div class="el-card-item">
                                                                <div class="el-card-avatar el-overlay-1"><img
                                                                            src="{{ '/storage/'. $settings->logo }}"
                                                                            alt="Main Page"
                                                                            style="background-color: black; max-width: 150px">
                                                                    <div class="el-overlay">
                                                                        <ul class="el-info">
                                                                            <li>
                                                                                <a class="btn default btn-outline image-popup-vertical-fit"
                                                                                   href="{{ '/storage/'. $settings->logo }}"
                                                                                   target="_blank"><i
                                                                                            class="icon-magnifier"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('footerLogo') ? 'has-danger' : '' }}">
                                                <label class="control-label">Footer Logo</label>
                                                <input type="file" name="footerLogo" class="form-control">

                                                @if ($errors->has('footerLogo'))
                                                    <small class="form-control-feedback">{{ $errors->first('footerLogo') }}</small>
                                                @endif

                                                @if(isset($settings->footerLogo) && $settings->footerLogo != "")
                                                    <div class="col-md-12" style="margin: 10px">
                                                        <div class="row el-element-overlay">
                                                            <div class="el-card-item">
                                                                <div class="el-card-avatar el-overlay-1"><img
                                                                        src="{{ '/storage/'. $settings->footerLogo }}"
                                                                        alt="Main Page"
                                                                        style="background-color: black; max-width: 150px">
                                                                    <div class="el-overlay">
                                                                        <ul class="el-info">
                                                                            <li>
                                                                                <a class="btn default btn-outline image-popup-vertical-fit"
                                                                                   href="{{ '/storage/'. $settings->footerLogo }}"
                                                                                   target="_blank"><i
                                                                                        class="icon-magnifier"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane" id="social" role="tabpanel">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('facebook') ? 'has-danger' : '' }}">
                                                <label class="control-label">Facebook</label>
                                                <input type="text" name="facebook" class="form-control"
                                                       value="{{ $settings->facebook ?? '' }}">
                                                @if ($errors->has('facebook'))
                                                    <small class="form-control-feedback">{{ $errors->first('facebook') }}</small>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('instagram') ? 'has-danger' : '' }}">
                                                <label class="control-label">Instagram</label>
                                                <input type="text" name="instagram" class="form-control"
                                                       value="{{ $settings->instagram ?? '' }}">
                                                @if ($errors->has('instagram'))
                                                    <small class="form-control-feedback">{{ $errors->first('instagram') }}</small>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('twitter') ? 'has-danger' : '' }}">
                                                <label class="control-label">Twitter</label>
                                                <input type="text" name="twitter" class="form-control"
                                                       value="{{ $settings->twitter ?? '' }}">
                                                @if ($errors->has('twitter'))
                                                    <small class="form-control-feedback">{{ $errors->first('twitter') }}</small>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('linkedin') ? 'has-danger' : '' }}">
                                                <label class="control-label">Linkedin</label>
                                                <input type="text" name="linkedin" class="form-control"
                                                       value="{{ $settings->linkedin ?? '' }}">
                                                @if ($errors->has('linkedin'))
                                                    <small class="form-control-feedback">{{ $errors->first('linkedin') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="contact" role="tabpanel">
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('phone') ? 'has-danger' : '' }}">
                                                <label class="control-label">Cell-Phone Number</label>
                                                <input type="text" name="phone" class="form-control"
                                                       value="{{ $settings->phone ?? '' }}">
                                                @if ($errors->has('phone'))
                                                    <small class="form-control-feedback">{{ $errors->first('phone') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('address') ? 'has-danger' : '' }}">
                                                <label class="control-label">Address</label>
                                                <input type="text" name="address" class="form-control"
                                                       value="{{ $settings->address ?? '' }}">
                                                @if ($errors->has('address'))
                                                    <small class="form-control-feedback">{{ $errors->first('address') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                                                <label class="control-label">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                       value="{{ $settings->email ?? '' }}">
                                                @if ($errors->has('email'))
                                                    <small class="form-control-feedback">{{ $errors->first('email') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('addressLink') ? 'has-danger' : '' }}">
                                                <label class="control-label">Address Link</label>
                                                <input type="text" name="addressLink" class="form-control"
                                                       value="{{ $settings->addressLink ?? '' }}">
                                                @if ($errors->has('addressLink'))
                                                    <small class="form-control-feedback">{{ $errors->first('addressLink') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane" id="video" role="tabpanel">
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('videoTitle') ? 'has-danger' : '' }}">
                                                <label class="control-label">Title</label>
                                                <input type="text" name="videoTitle" class="form-control"
                                                       value="{{ $settings->videoTitle ?? '' }}">
                                                @if ($errors->has('videoTitle'))
                                                    <small class="form-control-feedback">{{ $errors->first('videoTitle') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('videoLink') ? 'has-danger' : '' }}">
                                                <label class="control-label">Link</label>
                                                <input type="text" name="videoLink" class="form-control"
                                                       value="{{ $settings->videoLink ?? '' }}">
                                                @if ($errors->has('videoLink'))
                                                    <small class="form-control-feedback">{{ $errors->first('videoLink') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group {{ $errors->has('videoDescription') ? 'has-danger' : '' }}">
                                                <label class="control-label">Description</label>
                                                <input type="text" name="videoDescription" class="form-control"
                                                       value="{{ $settings->videoDescription ?? '' }}">
                                                @if ($errors->has('videoDescription'))
                                                    <small class="form-control-feedback">{{ $errors->first('videoDescription') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <!--/row-->
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
        var lat = parseFloat($("input[name='lat']").val());
        var lng = parseFloat($("input[name='long']").val());

        function initMap() {
            // The location of Uluru
            var uluru = {lat: lat, lng: lng};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 14, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});

            var geocoder = new google.maps.Geocoder;
            google.maps.event.addListener(map, 'click', function (event) {
                placeMarker(event.latLng);
                geocoder.geocode({'location': event.latLng}, function (results, status) {
                    if (status === 'OK') {
                        if (results[0]) {
                            // map.setZoom(17);
                            $("input[name='location']").val(results[0].formatted_address)
                        } else {
                            $("input[name='location']").val("No Address Found!")
                        }
                    } else {
                        window.alert('Geocoder failed due to: ' + status);
                    }
                });
            });

            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function () {
                searchBox.setBounds(map.getBounds());
            });

            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function () {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers.forEach(function (marker) {
                    marker.setMap(null);
                });
                markers = [];

                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function (place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    // var icon = {
                    //     url: place.icon,
                    //     size: new google.maps.Size(71, 71),
                    //     origin: new google.maps.Point(0, 0),
                    //     anchor: new google.maps.Point(17, 34),
                    //     scaledSize: new google.maps.Size(25, 25)
                    // };

                    // // Create a marker for each place.
                    // markers.push(new google.maps.Marker({
                    //     map: map,
                    //     icon: icon,
                    //     title: place.name,
                    //     position: place.geometry.location
                    // }));

                    $("input[name='lat']").val(place.geometry.location.lat);
                    $("input[name='long']").val(place.geometry.location.lng);
                    $("input[name='location']").val(place.formatted_address);

                    marker.setPosition(place.geometry.location);

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });

            function placeMarker(location) {
                marker.setPosition(location);
                $("input[name='lat']").val(marker.getPosition().lat());
                $("input[name='long']").val(marker.getPosition().lng());
            }
        }

        $(document).keypress(function (e) {
            if (e.which == 13) {
                e.preventDefault();   //<---- Add this line
            }
        });
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDX2YTXGETKmbutCt94wZaiZcGp_Jif_C0&callback=initMap&libraries=places">
    </script>
@endsection
