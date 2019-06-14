<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fresca|Satisfy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>Menu</title>
    <style media="screen">

.menu{
  font-family: 'Fresca', sans-serif;
  text-align: center;
  display: grid;
grid-template-columns: 1fr 1fr 1fr 1fr;

margin:auto;
max-width: 700px;
padding-bottom: 100px;
}
.day {
  font-size: 20px;
  border-left-style: outset;
border-right-style: inset;
border-color: red;
margin-top: 10px;
font-family: 'Shadows Into Light', cursive;
}
.meal{
border-bottom-style: inset;
border-color: red;
margin-right: 10px;

  }
.top{
  font-size: 20px;
  font-family: 'Shadows Into Light', cursive;
  border-bottom-style: inset;
  border-color: red;
  margin-right: 10px;

}


.bot{

  bottom: 0;
position: fixed;
width: 100%;
}

    </style>
  </head>
  <body>
    <div class="bdy">
    <?php include_once "header.php";?>
    <div >
      <br>
      <br>
    <div class="menubody">
      <p>The restaurant offers a variation of meals to eat for customers ranging from meat based diets, vegeterian diets and also quick snacks to eat and enjoy. The people can choose what they want to eat and suggestions can be made in house.</p>
      <p>The special meals are also there for you to choose from and it's in the daily special meals. The people can order from the various items we provide:</p>

    </div>

<br>
<br>
    <div class="menu">
    <div class="day">
    Day
    </div>
    <div class="top">
    Breakfast
    </div>
    <div class="top">
    Lunch
    </div>
    <div class="top">
    Supper
    </div>
    <div class="day">
      moday
    </div>
    <div class="meal">
    tea
    </div>
    <div class="meal">
      lunch
    </div>
    <div class="meal">
    diner
    </div>
    <div class="day">
      Tuesday
    </div>
    <div class="meal">
    Breakfast
    </div>
    <div class="meal">
    lunch
    </div>
    <div class="meal">
    dinner
    </div>
    <div class="day">
    Wednesday
    </div>
    <div class="meal">
    Breakfast
    </div>

    <div class="meal">
      lunch
    </div>
    <div class="meal">
      dinner
    </div>
    <div class="day">
      thusrday
    </div>
    <div class="meal">
    breakfast
    </div>
    <div class="meal">
    lunch
    </div>
    <div class="meal">
      dinner
    </div>
    <div class="day">
    friday
    </div>
    <div class="meal">
    breakfast
    </div>
    <div class="meal">
      lunch
    </div>
    <div class="meal">
    diner
    </div>
    </div>


        </div>
        </div>

        <div class="bot">
          <?php include_once "footer.php";?>
        </div>

</div>
  </body>
</html>
