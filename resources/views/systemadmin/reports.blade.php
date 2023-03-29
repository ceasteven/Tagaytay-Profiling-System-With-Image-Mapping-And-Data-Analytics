@extends('backend.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Reports</h1>
        </div>
        <div class="col-sm-6 text-sm">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}" style="color:#444;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Reports</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <hr />
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
      <div class="col-6">
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">
            
                
              </h3>
            </div>
            <div class="card-body">
              <div>


<figure class="highcharts-figure">
    <div id="container"></div>
    
</figure>

              </div>
             
              <script>
                Highcharts.chart('container', {
    chart: {
        type: 'column',
        
        
    },
    credits: {
    enabled: false
},
    title: {
        text: 'Total Number of Male and Female'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            ''
        ],
        crosshair: true
    },
    yAxis: {
      tickInterval: 1,
        min: 0,
        title: {
            text: 'Number'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: false,
        useHTML: true,
        valueDecimals: 0,
    },
    plotOptions: {
        column: {
          
            borderWidth: 0
        }
    },
    series: [{
        name: 'Male',
        data: ['{{$male}}'],
        color: '#003A6B'

    }, {
        name: 'Female',
        data: ['{{$female}}'],
        color:'#ff8dc6'

    },  

    ],
    exporting: { enabled: true }
    
});
              </script>
       

            </div>
            </div>
            </div>
            <div class="col-6">
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">
            
                
              </h3>
            </div>
            <div class="card-body">
              <div>


<figure class="highcharts-figure">
    <div id="school"></div>
    
</figure>

              </div>
             
              <script>
                
                Highcharts.chart('school', {
                  chart: {
                    
                    type: 'pie'
                  },
                  credits: {
                    enabled: false
                },
                  title: {
                    text: 'Total Number of Schooling and Not Schooling'
                  },
                  tooltip: {
                    pointFormat: '{point.name}: <b>{point.y:.0f}</b>',
                    shared: false,
                    valueDecimals: 0,
                    formatter: function() {
                        return this.point.name + ': <b>' + Highcharts.numberFormat(this.y, 0) + '</b>';
                    }
                
                  },
                  accessibility: {
                        point: {
                           
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true,
                            states: {
                            hover: null,
                            }
                        }
                    },
                  series: [{
                    name: 'Schooling Status',
                    colorByPoint: true,
                    data: [{
                      name: 'Schooling',
                      y: {{$school}},
                      color: '#A0D2E7'
                    }, {
                      name: 'Not Schooling',
                      y: {{$noschool}},
                      color: '#3D60A7'
                    }]
                  }],
                  exporting: { enabled: true }
                });
                
                
                
                              </script>

            </div>
            </div>
            </div>
            <div class="col-6">
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">
            
                
              </h3>
            </div>
            <div class="card-body">
              <div>


<figure class="highcharts-figure">
    <div id="voter"></div>
    
</figure>

              </div>
             
              <script>
                Highcharts.chart('voter', {
    chart: {
        type: 'column',
        
        
    },
    credits: {
    enabled: false
},
    title: {
        text: 'Total Registered and Not Registered Voters'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            ''
        ],
        crosshair: true
    },
    yAxis: {
      tickInterval: 1,
        min: 0,
        title: {
            text: 'Number'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: false,
        useHTML: true,
        valueDecimals: 0,
    },
    plotOptions: {
        column: {
          
            borderWidth: 0
        }
    },
    series: [{
        name: 'Registered Voters',
        data: [{{$voter}}],
        color: '#999999'

    }, {
        name: 'Not Registered Voters',
        data: [{{$novoter}}],
        color:'#333333'

    },  

    ],
    exporting: { enabled: true }
    
});
              </script>

            </div>
            </div>
            </div>
            <div class="col-6">
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">
            
                
              </h3>
            </div>
            <div class="card-body">
              <div>


<figure class="highcharts-figure">
    <div id="age"></div>
    
</figure>

              </div>
              <script>
                Highcharts.chart('age', {
    chart: {
        type: 'column',
        
        
    },
    credits: {
    enabled: false
},
    title: {
        text: 'Age Group'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            ''
        ],
        crosshair: true
    },
    yAxis: {
      tickInterval: 1,
        min: 0,
        title: {
            text: 'Number'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: false,
        useHTML: true,
        valueDecimals: 0,
    },
    plotOptions: {
        column: {
          
            borderWidth: 0
        }
    },
    series: [{
        name: 'Infants',
        data: [{{$infants}}],
        color: '#A0D2E7'

    }, {
        name: 'Children',
        data: [{{$children}}],
        color:'#81B1D5'

    },  
    {
        name: 'Teenager',
        data: [{{$teenager}}],
        color:'#3D60A7'

    },   {
        name: 'Adult',
        data: [{{$adults}}],
        color:'#26408B'

    },  
       {
        name: 'Senior Citizen',
        data: [{{$senior}}],
        color:'#0F084B'

    },  
    

    ],
    exporting: { enabled: true }
    
});
              </script>

            </div>
            </div>
            </div>
  
      </div>
    </div>
    
  
</section>
    @endsection




   