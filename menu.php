<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Menu</title>
    <style media="screen">
.top{
  border-right: inset;
  border-right-color: red;
}
.topd{
  border-right: inset;
  border-left: inset;
  border-color: red;
}
th{
  font-family: 'Shadows Into Light', cursive;

}
table{
  padding-top: 5px;
  background-color: #d2e6b1;
}
td{
  padding-bottom: 10px;
padding-left: 10px;
}
    </style>
  </head>
  <body>
    <div class="bdy">
    <?php include_once "header.php";?>
    <div >
    <div class="menubody">
      <p>The restaurant offers a variation of meals to eat for customers ranging from meat based diets, vegeterian diets and also quick snacks to eat and enjoy. The people can choose what they want to eat and suggestions can be made in house.</p>
      <p>The special meals are also there for you to choose from and it's in the daily special meals. The people can order from the various items we provide:</p>

    </div>
          <div class="table">
          <table>
            <tr class="tabl">
                <th class="topd">DAY</th>
                <th class="top">Breakfast</th>
                <th class="top">Lunch</th>
                <th class="top">Supper</th>
            </tr>
            <tr>
              <th>Monday</th>
              <td>Tea/Coffee<br>toast<br>eggs <br> sausage</td>
              <td>Fried rice <br> chicken tika <br> chapati <br>salad</td>
              <td>Spaghetti,meatballs </td>
            </tr>
            <br>
            <tr>
              <th>Tuesday</th>
              <td>Tea/Coffee,<br>baked beans<br>pancakes <br> bacon</td>
              <td>Pilau <br>cow peas <br> kales</td>
              <td>Beef and rice </td>
            </tr>
            <tr>
              <th>Wednesday</th>
              <td>Tea/Coffee <br> grilled cheese sandwich <br> sausage</td>
              <td>Ugali and Spinach</td>
              <td>Baked potatoes <br> lamb soup and bread</td>
            </tr>
            <tr>
              <th>Thursday</th>
              <td>Tea/Coffee <br> arrow roots/sweet potatoes</td>
              <td>Salad and any type of meat available</td>
              <td>Rice/Ugali and chicken with Kale </td>
            </tr>
            <tr>
              <th>Friday</th>
              <td span="">Request Fridays</td>
            </tr>
          </table>
        </div>
        </div>
    <?php include_once "footer.php";?>
</div>
  </body>
</html>
