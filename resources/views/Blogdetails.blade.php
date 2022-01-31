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
          <h1>Blog Details</h1>
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Blog Details</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="detail-body">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-8 col-lg-9 detail-left">
        <img src="./images/blog1.jpg" alt="">
        <h4>लुम्बिनी फोटोग्राफ संघ पत्रकारहरुको संगठन हो ।</h4>
        <p>लुम्बिनी फोटोग्राफ संघ नेपाली पत्रकारहरुको छाता संगठन हो । पत्रकारहरुलाई संगठित गरी व्यावसायिक नेतृत्व प्रदान गर्दै उनीहरुको हक–अधिकार प्रवद्र्धन गर्ने महासंघको मूल ध्येय, लक्ष्य र दायित्व हो । ६ दशकभन्दा लामो इतिहास रहेको महासंघमा पत्रिका, रेडियो, टिभी, अनलाइन र स्वतन्त्र सहित १३ हजार भन्दा बढी पत्रकार आवद्ध छन् । </p>
        <p>लुम्बिनी फोटोग्राफ संघ नेपाली पत्रकारहरुको छाता संगठन हो । पत्रकारहरुलाई संगठित गरी व्यावसायिक नेतृत्व प्रदान गर्दै उनीहरुको हक–अधिकार प्रवद्र्धन गर्ने महासंघको मूल ध्येय, लक्ष्य र दायित्व हो । ६ दशकभन्दा लामो इतिहास रहेको महासंघमा पत्रिका, रेडियो, टिभी, अनलाइन र स्वतन्त्र सहित १३ हजार भन्दा बढी पत्रकार आवद्ध छन् । </p>
        <p>लुम्बिनी फोटोग्राफ संघ नेपाली पत्रकारहरुको छाता संगठन हो । पत्रकारहरुलाई संगठित गरी व्यावसायिक नेतृत्व प्रदान गर्दै उनीहरुको हक–अधिकार प्रवद्र्धन गर्ने महासंघको मूल ध्येय, लक्ष्य र दायित्व हो । ६ दशकभन्दा लामो इतिहास रहेको महासंघमा पत्रिका, रेडियो, टिभी, अनलाइन र स्वतन्त्र सहित १३ हजार भन्दा बढी पत्रकार आवद्ध छन् । </p>
        <p>लुम्बिनी फोटोग्राफ संघ नेपाली पत्रकारहरुको छाता संगठन हो । पत्रकारहरुलाई संगठित गरी व्यावसायिक नेतृत्व प्रदान गर्दै उनीहरुको हक–अधिकार प्रवद्र्धन गर्ने महासंघको मूल ध्येय, लक्ष्य र दायित्व हो । ६ दशकभन्दा लामो इतिहास रहेको महासंघमा पत्रिका, रेडियो, टिभी, अनलाइन र स्वतन्त्र सहित १३ हजार भन्दा बढी पत्रकार आवद्ध छन् । </p>
        <h3>Write a reply or comment</h3>
        <form>
          <div class="row">
            <div class="col-md-12">
              <div class="md-form">
                <textarea type="text" placeholder="Your message"></textarea>
              </div>
            </div>
            <div class="col-md-4">
              <div class="md-form">
                <input type="text" name="name" class="form-control" placeholder="Your name">
              </div>
            </div>
            <div class="col-md-4">
              <div class="md-form">
                <input type="email" class="form-control" placeholder="Your email">
              </div>
            </div>
            <div class="col-md-4">
              <div class="md-form">
                <input type="url" class="form-control" placeholder="Website">
              </div>
            </div>
            <div class="col-md-12">
              <div class="md-form">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-3">
        <div class="row">
          <div class="posts">
            <div class="col-12 col-sm-12">
              <h4>Recent Posts</h4>
            </div>
            <div class="col-12 col-sm-12">
              <div class="recent-post">
                <a href="#"><img src="{{asset('/frontend./images/blog1.jpg')}}" alt=""> <h6>लुम्बिनी फोटोग्राफ संघ नेपाली पत्रकारहरुको छाता संगठन हो ।</h6></a>
                <ul>
                  <li><i class="fa fa-user"></i> By: <a href="#">Admin</a></li>
                  <li><i class="fa fa-calendar"></i> 07/18</li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-sm-12">
              <div class="recent-post">
                <a href="#"><img src="{{asset('/frontend./images/blog2.jpg')}}" alt=""> <h6>लुम्बिनी फोटोग्राफ संघ नेपाली पत्रकारहरुको छाता संगठन हो ।</h6></a>
                <ul>
                  <li><i class="fa fa-user"></i> By: <a href="#">Admin</a></li>
                  <li><i class="fa fa-calendar"></i> 07/18</li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-sm-12">
              <div class="recent-post">
                <a href="#"><img src="{{asset('/frontend./images/blog3.jpg')}}" alt=""> <h6>लुम्बिनी फोटोग्राफ संघ नेपाली पत्रकारहरुको छाता संगठन हो ।</h6></a>
                <ul>
                  <li><i class="fa fa-user"></i> By: <a href="#">Admin</a></li>
                  <li><i class="fa fa-calendar"></i> 07/18</li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-sm-12">
              <div class="recent-post">
                <a href="#"><img src="{{asset('/frontend./images/blog4.jpg')}}" alt=""> <h6>लुम्बिनी फोटोग्राफ संघ नेपाली पत्रकारहरुको छाता संगठन हो ।</h6></a>
                <ul>
                  <li><i class="fa fa-user"></i> By: <a href="#">Admin</a></li>
                  <li><i class="fa fa-calendar"></i> 07/18</li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-sm-12">
              <div class="recent-post">
                <a href="#"><img src="{{asset('/frontend./images/blog5.jpg')}}" alt=""> <h6>लुम्बिनी फोटोग्राफ संघ नेपाली पत्रकारहरुको छाता संगठन हो ।</h6></a>
                <ul>
                  <li><i class="fa fa-user"></i> By: <a href="#">Admin</a></li>
                  <li><i class="fa fa-calendar"></i> 07/18</li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-sm-12">
              <div class="recent-post">
                <a href="#"><img src="{{asset('/frontend./images/blog6.jpg')}}" alt=""> <h6>लुम्बिनी फोटोग्राफ संघ नेपाली पत्रकारहरुको छाता संगठन हो ।</h6></a>
                <ul>
                  <li><i class="fa fa-user"></i> By: <a href="#">Admin</a></li>
                  <li><i class="fa fa-calendar"></i> 07/18</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('includes.frontend.footer')

</body>
</html>