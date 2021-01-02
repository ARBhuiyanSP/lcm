
<script src="js/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<div class="card">
  <!-- /.card-header -->
  <div class="card-body">
	<!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
	 <figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description"> </p>
    <table class="table table-bordered table-striped" id="datatable" style="display:none;">
        <thead>
            <tr>
                <th></th>
                <th>Industrial LC</th>
                <th>Commercial LC</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>January</th>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <th>February</th>
                <td>2</td>
                <td>8</td>
            </tr>
            <tr>
                <th>March</th>
                <td>5</td>
                <td>11</td>
            </tr>
            <tr>
                <th>April</th>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <th>May</th>
                <td>2</td>
                <td>4</td>
            </tr>
            <tr>
                <th>June</th>
                <td>6</td>
                <td>4</td>
            </tr>
            <tr>
                <th>July</th>
                <td>2</td>
                <td>5</td>
            </tr>
            <tr>
                <th>August</th>
                <td>4</td>
                <td>7</td>
            </tr>
            <tr>
                <th>September</th>
                <td>4</td>
                <td>8</td>
            </tr>
            <tr>
                <th>October</th>
                <td>2</td>
                <td>4</td>
            </tr>
            <tr>
                <th>November</th>
                <td>8</td>
                <td>3</td>
            </tr>
            <tr>
                <th>December</th>
                <td>2</td>
                <td>4</td>
            </tr>
        </tbody>
    </table>
</figure>
	<!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
	
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->			
<SCRIPT>
Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total LC Amount in Last 12 Months'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Amounts in Dollars'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
</SCRIPT>