<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../../content/css/hanghoaadminn.css">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Loại', 'Số Lượng'],
        <?php
        foreach ($items as $item){
            echo "['$item[ten_loai]',     $item[so_luong]],";
        }
        ?>
    ]);

    var options = {
      title: 'TỶ LỆ HÀNG HÓA',
      // is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
  }
</script>
    </head>
    <body>
    <div class="add-text"><h2>BIỂU ĐỒ THỐNG KÊ</h2></div>
        
        <div id="piechart_3d" style="width: 100%; height: 500px; text-align:center"></div>
        <div class="form-group"  style=" text-align: left;">
        <button type="submit" style=" text-align: left;"><a href="index.php?list"   >THỐNG KÊ</a></button>
        </div>
    </body>
</html>
