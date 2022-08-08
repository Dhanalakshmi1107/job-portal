<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Feedback</title>
    <style>
        .feed{
    background-image: url(img1.jpg);
    background-size: cover;
    height:100%;
}
.feed h2{
    color: white;
    font-size: 30px;
    text-align: center;
    padding: 10px;
    text-transform: uppercase;
    font-family: Georgia, 'Times New Roman', Times, serif; 
}
.feed .feed_form{
    text-align: left;
}
.feed .feed_form form{
    padding: 20px;
    margin-left: 80px;

}
.feed .feed_form form input{
    width: 40%;
    margin: 10px;
    padding: 8px;
    outline: none;
    border: none;
}
.feed .feed_form form textarea{
    width: 40%;
    margin: 10px;
    padding: 8px;
    outline: none;
    border: none;
}
.feed .feed_form form button{
    width: 37%;
    margin: 10px;
    padding: 8px;
    outline: none;
    border: none;
    background-color:#CE5DAE ;
    color: white;
    border-radius: 10px;
    margin-left: 15px;
}
.feed .feed_form form button:hover{
    background-color:#E25098 ;
    color:white;
    border: none;
    border-bottom: 5px solid purple ;
    transition: 0.6s;
} 
.text1 h1{
    margin-top:25px;
    text-align:center;
    font-size: 50px;
} 
.text1 h1:hover{
    color:#E25098;
    cursor:pointer;
} 
    </style>
</head>
<body>
<div class="feed">
        <h2>WRITE YOUR REVIEWS</h2>
        <div class="feed_form">
          <form action="feed.php" method="POST">
            <input type="text" name="name" placeholder="Name"><br>
            <input type="email" name="email" placeholder="abc@gmail.com"><br>
            <input type="number" name="number" placeholder="Contact Number"><br>
            <textarea rows="6" cols="8" name="review" placeholder="write your review"></textarea><br>
            <button type="submit">SUBMIT</button>
          </form>
        </div>
      </div>  
      <div class="text1">
        <h1>THANK YOU FOR VISITING US !!!<br>COME BACK AGAIN !!!</h1>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>