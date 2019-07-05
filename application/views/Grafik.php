<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        //Grafik 1
        var PieChartData= '<?php echo $PieChartData;?>';
        
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows(JSON.parse(PieChartData));

        // Set chart options
        var options = {'title':'<?php echo $PieChartTitle; ?>',
                       'width':0 ,
                       'height':200,is3D: true};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

        // Grafik 2
        var BarChartData1= '<?php echo $BarChartData1;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', '2014');
        data.addColumn('number', '2015');
        data.addRows(JSON.parse(BarChartData1));
        var options1 = {'title':'<?php echo $BarChartTitle1; ?>',
                       'width':500 ,
                       'height':500 };
        var chart = new google.visualization.ColumnChart(document.getElementById('chart1_div'));
        chart.draw(data, options1);

        //grafik 3
        var BarChartData2= '<?php echo $BarChartData2;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', '2014');
        data.addColumn('number', '2015');
        data.addRows(JSON.parse(BarChartData2));
        var options2 = {'title':'<?php echo $BarChartTitle2; ?>',
                       'width':500 ,
                       'height':500 , legend: { position: "right" },};
        var chart = new google.visualization.ColumnChart(document.getElementById('chart2_div'));
        chart.draw(data, options2);

        //grafik 4
        var BarChartData3= '<?php echo $BarChartData3;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', '2014');
        data.addColumn('number', '2015');
        data.addRows(JSON.parse(BarChartData3));
        var options3 = {'title':'<?php echo $BarChartTitle3; ?>',
                       'width':500 ,
                       'height':500 , legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true,};
        var chart = new google.visualization.ColumnChart(document.getElementById('chart3_div'));
        chart.draw(data, options3);

        //grafik 5
        var BarChartData4= '<?php echo $BarChartData4;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', '2014');
        data.addColumn('number', '2015');
        data.addRows(JSON.parse(BarChartData4));
        var options4 = {'title':'<?php echo $BarChartTitle4; ?>',
                       'width':0,
                       'height':350 };
        var chart = new google.visualization.LineChart(document.getElementById('chart4_div'));
        chart.draw(data, options4);

        //grafik 6
        var BarChartData5= '<?php echo $BarChartData5;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', '2014');
        data.addColumn('number', '2015');
        data.addRows(JSON.parse(BarChartData5));
        var options5 = {'title':'<?php echo $BarChartTitle5; ?>',
                       'width':500 ,
                       'height':500 };
        var chart = new google.visualization.ColumnChart(document.getElementById('chart5_div'));
        chart.draw(data, options5);

        //grafik 7
        var BarChartData6= '<?php echo $BarChartData6;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Jumlah Pelamar');
        data.addRows(JSON.parse(BarChartData6));
        var options6 = {'title':'<?php echo $BarChartTitle6; ?>',
                       'width':600 ,
                       'height':500 };
        var chart = new google.visualization.BarChart(document.getElementById('chart6_div'));
        chart.draw(data, options6);

        //grafik 8
        var BarChartData7= '<?php echo $BarChartData7;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Jumlah Pelamar');
        data.addRows(JSON.parse(BarChartData7));
        var options7 = {'title':'<?php echo $BarChartTitle7; ?>',
                       'width':600 ,
                       'height':500 };
        var chart = new google.visualization.BarChart(document.getElementById('chart7_div'));
        chart.draw(data, options7);

        //grafik 9
        var BarChartData8= '<?php echo $BarChartData8;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Jumlah Pelamar');
        data.addRows(JSON.parse(BarChartData8));
        var options8 = {'title':'<?php echo $BarChartTitle8; ?>',
                       'width':600 ,
                       'height':500 };
        var chart = new google.visualization.BarChart(document.getElementById('chart8_div'));
        chart.draw(data, options8);

        //grafik 10
        var BarChartData9= '<?php echo $BarChartData9;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Jumlah Pelamar');
        data.addRows(JSON.parse(BarChartData9));
        var options9 = {'title':'<?php echo $BarChartTitle9; ?>',
                       'width':600 ,
                       'height':500 };
        var chart = new google.visualization.BarChart(document.getElementById('chart9_div'));
        chart.draw(data, options9);
      }
    </script>
  </head>

  <body>
    

    <table>
      <br><br><h1> <center> Visualisasi Kesejahteraan Penduduk Di Daerah Istimewa Yogyakarta</center> </h1></br></br>
      <tr>
          <div id="chart_div" ></div>
      </tr>
    
      <tr>
        <td>
          <div id="chart1_div"></div>
        </td>
        
        <td>
          <div id="chart2_div"></div>
        </td>
      </tr>

      <tr>
        <td>
          <div id="chart3_div"></div>
        </td>

        <td>
          <div id="chart5_div"></div>
        </td>
      </tr>

      <tr>
        <div id="chart4_div"></div>  
      </tr>

      <tr>
        <td>
          <div id="chart6_div"></div>
        </td>
        <td>
          <div id="chart7_div"></div>
        </td>
      </tr>

      <tr>
        <td>
          <div id="chart8_div"></div>
        </td>
        
        <td>
          <div id="chart9_div"></div>
        </td>
      </tr>
    </table>

  </body>
</html>