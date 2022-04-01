<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section id="header">
        <div class="header container">
            <div class="nav-bar">
             <div class="brand">
                 <a href="#hero"> <h1> <span>N</span> MA <span>T</span> OWER</h1></a>
             </div>
             <div class="nav-list">
                 <div class="hamburger"><div class="bar"></div></div>
                 <ul>
                <li><a href="{{url('/')}}" data-after="Home">Home</a></li>
                     <li><a href="{{url('/sickness')}}" data-after="Sickness"> sickness</a></li>
                     <li><a href="{{url('/alldoctor')}}" data-after="Doctors"> doctor</a></li>
                     <li><a href="{{url('/about')}}" data-after="About"> About</a></li>
                     <li><a href="{{url('/contact')}}" data-after="contact"> Contact</a></li>
                 </ul>
             </div>
            </div>
        </div>
    </section>





    <section id="hero"> 
        <div class="hero container">
            <div >
                <h1> Welcome , <span></span></h1>
                <h1>To Medical Tower  <span></span></h1>
                <h1>Nma <span></span></h1>
                <a href="#" type="button" class="cta"> Nma</a>
            </div>
        </div>
    </section>
   
    

    <script src="./ap.js"></script>
</body>
</html>