<?php include 'partials/header.php'; ?>
<pre>
  <?php print_r($forecast); ?>
</pre>
<main class="container py-5 text-center">
  <h1>
    Weather Jamz
  </h1>
  <div class="text-left py-5 mx-auto" style="max-width: 320px;">
    <?php include 'partials/form.php'; ?>
  </div>
  
<?php
  $songs = array(
    "1900" => "",
    "1910" => "",
    "1920" => "",
    "1930" => "",
    "1940" => "",
    "1950" => "",
    "1960" => "",
    "1970" => "",
    "1980" => "",
    "1990" => "",
    "2000" => "",
  );
 ?>
  <?php
  if ($forecast['currently']['summary'] > 60)

  <div class= "card p-1 my-5 mx-auto" style="max-width: 400px;"> 
  <p class="mb-0"> <?php echo $place; ?></p>

  <p>Temperature:<?php echo round($forecast['currently']['temperature']); ?>&deg;</p> 
  <p>Wind Speed:<?php echo ($forecast['currently']['windSpeed']); ?> MPH</p>
  <p>Humidity:<?php echo ($forecast['currently']['humidity']); ?>%</p>
  <p><?php echo ($forecast['currently']['summary']); ?></p>
  <p>Wind Gust<?php echo ($forecast['currently']['windGust']); ?> knots</p>
  
  <?php
    if ($forecast['currently']['temperature'] > 70){
      echo "It's okay outside.";
    }
    else{
      echo "It's sort of cold outside.";
    }
  ?>

  </div>
  <div class="card p-4 my-5 mx-auto" style="max-width: 320px;">
    <p class="lead text-bold m-0"><?php echo $place; ?></p>
    <h2 class="display-1 mb-0">
      <?php echo round($forecast['currently']['temperature']); ?>&deg;
    </h2>
    <p class="lead">
      <?php echo $forecast['currently']['summary']; ?>
    </p>
    <p class="lead">
      Wind Speed: <?php echo round($forecast['currently']['windSpeed']); ?> MPH
    </p>
  </div>


</main>
<?php include 'partials/footer.php'; ?>