<!DOCTYPE html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins" rel="stylesheet">
  <style>
  body {
    font-family: 'Montserrat', sans-serif;
    font-size: 24px;
    line-height: 28px;
  }
  .body-about {
    background-color: #A7BCBB;
    color: #fff;
  }
  .wrapper {
    width: 65%;
    background-color: #424242;
    height: 100vh;
    padding-left: 50px;
    color: #fff;
    z-index: 0;
  }
  .content {
    width: 45%;
    margin: 0 auto;
    position: absolute;
    top: 30%;
    color: #fff;
    z-index: 1;
  }
  .sub-heading {
    text-transform: uppercase;
  }
  h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 120px;
  }
  .background-text {
    margin:0;
    bottom: 20%;
    position: fixed;
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    font-size: 170px;
    color: #3F3F3F;
  }
  .nav {
    position: absolute;
    top: 50%;
    right: 0;
    width: 15%;
    margin: 0 50px;
    text-align: right;
    z-index: 3;
    color:#424242;
  }
  .nav ul {
    list-style-type: none;
  }

    li a {
      text-decoration: none;
      color:#3F3F3F;
    }

    li .small {
      font-size: 16px;
    }

  @media (max-width: 800px) {
    body {
      font-size: 18px;
      line-height: 22px;
    }  
    .background-text {
      font-size: 100px;
    }
    h1 {
      font-size: 70px;
    }
    li {
      display:block;
      padding:5px;
    }
    .nav{
    margin: 0 25px;
       width: 25%;
    }
   
  }
  @media (max-width: 500px) {
    body {
      font-size: 16px;
      line-height: 18px;
    }  
    .background-text {
      font-size: 76px;
    }
    h1 {
      font-size: 56px;
    }
    li {
      display:block;
      padding:5px;
    }
    .nav{
    margin: 0 25px;
       width: 25%;
    }
   
  }
  </style>
</head>
<body>
  <div class="body-about">
    <div class="wrapper">
      <div class="content">
        <p class="sub-heading">Full Stack Developer</p>
        <h1>Caroline</h1>
        <p>I like to make beautiful things. Give me 3 months to learn from some amazing people and I'll be making more stunning creations for you to enjoy.</p>
      </div>
      <p class="background-text">Caroline</p>
    </div>
    <div class="nav">
      <ul>
        <li>About</li>
        <li>Contact</li>
      </ul>
    </div>
  </div>
  <script>$("button").on("click", function() {
    alert("clicked!")
  });</script>
</body>
