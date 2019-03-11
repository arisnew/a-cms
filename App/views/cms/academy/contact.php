<div class="breadcumb-area bg-img" style="background-image: url(<?php echo base_url('asset/cms/academy/')?>img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Contact</h2>
    </div>
</div>
<!-- ##### Google Maps ##### -->
<div class="map-area wow fadeInUp" data-wow-delay="300ms">
    <div id="googleMap"></div>
</div>

<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-content">
                    <div class="row">
                        <!-- Contact Information -->
                        <div class="col-12 col-lg-5">
                            <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                <div class="section-heading text-left">
                                    <!-- <span>The Best</span> -->
                                    <h3><?php echo $page->page_title;?></h3>
                                    <p class="mt-30">
                                    <?php echo $page->content;?>
                                    </p>
                                </div>

                                <!-- Contact Social Info -->
                                <div class="contact-social-info d-flex mb-30">
                                    <a href="<?php echo $CMS->account_facebook;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="<?php echo $CMS->account_twitter;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="<?php echo $CMS->account_google;?>"><i class="fa fa-google" aria-hidden="true"></i></a>
                                    <a href="<?php echo $CMS->account_instagram;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="contact-icon mr-15">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <p><?php echo $CMS->company_address;?> <br><?php echo $CMS->company_address_2;?></p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="contact-icon mr-15">
                                        <i class="icon-telephone-1"></i>
                                    </div>
                                    <p><?php echo $CMS->company_phone;?></p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="contact-icon mr-15">
                                        <i class="icon-contract"></i>
                                    </div>
                                    <p><?php echo $CMS->company_email;?></p>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Form Area -->
                        <div class="col-12 col-lg-7">
                            <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                <form action="<?php echo base_url('guestbook');?>" method="post" id="form-guestbook">
                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    <button class="btn academy-btn mt-30" id="btn-submit" onclick="sendMessage(); return false;" type="button">Contact Us</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7707H5fT8MO60v3sgWNNDG27pwlEBRYk"></script>
<script>
    var map;
    var latlng = new google.maps.LatLng(-6.303521, 107.301300);
    var stylez = [{
        featureType: "all",
        elementType: "all",
        stylers: [{
            saturation: -10
                }]
            }];
    var mapOptions = {
        zoom: 15,
        center: latlng,
        scrollwheel: false,
        scaleControl: false,
        disableDefaultUI: true,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gMap']
        }
    };
    map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
    var geocoder_map = new google.maps.Geocoder();
    var address = '<?php echo $CMS->company_map_location;?>';
    geocoder_map.geocode({
        'address': address
    }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: map.getCenter()
            });
        } else {
            alert("Geocode was not successful for the following reason: " + status);
        }
    });
    var mapType = new google.maps.StyledMapType(stylez, {
        name: "Grayscale"
    });
    map.mapTypes.set('gMap', mapType);
    map.setMapTypeId('gMap');

    function sendMessage(){
        $('#btn-submit').attr('disabled', '');
        $.ajax({
            url: '<?php echo base_url('guestbook');?>',
            data: $('#form-guestbook').serialize(),
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json){
                if (json.code == 1) {
                    alert('Your message has been sent.');
                    $('input, textarea').val('');
                } else {
                    alert(json.message);
                }
                $('#btn-submit').removeAttr('disabled');
            },
            error: function () {
                alert('An error has occurred.');
                $('#btn-submit').removeAttr('disabled');
            }
        });
    }
</script>