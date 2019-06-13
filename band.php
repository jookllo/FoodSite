<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <title>Band</title>
<style media="screen">
  .flex{
    display: flex;
    flex-flow: column;
    max-width: 700px;
    margin: auto;
    text-align: center;
  }
  .images{
    border-bottom-style: inset;
    border-color: red;
    margin-bottom: 30px;
    padding-bottom: 5px;
  }
</style>
  </head>
  <body>
    <?php include_once "header.php";?>
    <div class="body">
      <div class="bdy">
        <br>
<div class="flex">

         <h2 class="band">Band Play Saturdays</h2>
                <p>The restaurant will sometimes call various bands to come play wiothin the establishment. This is usually done in the balcony of the restaurant.<br> Some artists perform with live bands in the afternoon which also allows for an interesting Sunday lunch with the family on behalf of us.</p>

<br>


                <h3>Some of the frequent musicians include :</h3>



<div class="images">
  <img src="blinkybill.jpg" style="width:500px;height:500px;"/>
  <p>Man of various genres. Brings the vide to the building and make the party much more interesting. He makes a variety of music for the audience to enjoy and also has an interesting tone. </p>

</div>

<div class="images">
  <img src="nyash1.jpg" style="width:500px;height:500px;"/>
  <p>He recently joined the usual musicians to play on sundays but does so on his own timing. The artist always brings the party with him and he makes the mood quite interesting. </p>

</div>
<div class="images">
  <img src="sautisol.jpe" style="width:500px;height:500px;"/>
  <p>With their on stage antics, they are a not a mainstream band but they understand how to get a party started. This group is talented and the unlimited talent they posess makes it interesting to see how they fair off.</p>

</div>






                <h3>Let us hear who you'd like us to call in to present in our Band Play Sunday's.</h3>
                <input type="text" name="band">
                <button type="button">Submit</button>
</div>

</div>

              </div>

    <?php include_once "footer.php";?>
  </body>
</html>
