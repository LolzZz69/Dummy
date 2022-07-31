<?php

require './php/allcampaign.php'

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>All Campaigns</h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Campaign Title</th>
                    <th scope="col">Campaign Email</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $arr = json_decode($set_data, true);

                foreach($arr as $item) { 
                    $campaignTitle = $item['campaignTitle'];
                    $campaignEmail = $item['brandEmail'];
                    $campaignId = $item['_id'];
                    echo '
                        <tr>
                            <td>'.$campaignTitle.'</td>
                            <td>'.$campaignEmail.'</td>
                            <td><a href="/dummy/campaign.php/?id='.$campaignId.'"><button type="button" class="btn btn-warning">View</button></a></td>
                        </tr>
                    ';
                }
            ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
