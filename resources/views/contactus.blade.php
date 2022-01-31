<!DOCTYPE html>
<html lang="en">
    @include('includes.frontend.head')

<body>
    @include('includes.frontend.header')

<div class="team-banner">
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <h1>Contact Us</h1>
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="contact-body">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 contactbox">
        <i class="fa fa-map-marker-alt"></i>
        <h4>Address</h4>
        <p>लुम्बिनी, बुटवल</p>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 contactbox">
        <i class="fa fa-phone-volume"></i>
        <h4>Phone</h4>
        <p>०७१-५४२६००</p>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 contactbox">
        <i class="fa fa-envelope"></i>
        <h4>Email Address</h4>
        <p>test@test.com</p>
      </div>
    </div>
  </div>
</div>
<div class="contact-message">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12">
        <h4>Send Us Message</h4>
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="md-form">
                <input type="text" name="name" class="form-control" placeholder="Your name">
              </div>
              <div class="md-form">
                <input type="email" class="form-control" placeholder="Your email">
              </div>
              <div class="md-form">
                <input type="text" class="form-control" placeholder="Phone Numaber">
              </div>
              <div class="md-form">
                <input type="text" name="name" class="form-control" placeholder="Subject">
              </div>
            </div>
            <div class="col-md-6">
              <div class="md-form">
                <textarea type="text" placeholder="Your message"></textarea>
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@include('includes.frontend.footer')
</body>
</html>