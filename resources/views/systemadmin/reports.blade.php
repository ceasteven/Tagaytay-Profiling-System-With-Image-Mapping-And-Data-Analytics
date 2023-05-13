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
            'Male','Female',
        ],
     
    },
    yAxis: {
    tickInterval: 1,
        min: 0,
    title: {
      text: ' Number'
    },
    
  },
  tooltip: {
    enabled:false,
    pointFormat: '{point.category}: <b>{point.y:.0f}</b>',
    formatter: function() {
        return this.point.category + ': <b>' + Highcharts.numberFormat(this.y, 0) + '</b>';
    }

  },
  plotOptions: {
    
    series: {
      dataLabels: {
        enabled: true,
        format: '{point.y:.0f}'
        
      }
    }
  },
    series: [{
      name:'Total Number of Male and Female',
      data:[
      {  y: {{$male}}, color: '#003A6B'},
    { y: {{$female}},color:'#ff8dc6'}

  

    ],
                }],
    exporting: { enabled: true },
    legend: {
  enabled: false
},
    
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
        text: 'Total Number of Registered and Not Registered Voters'
    },
  
    xAxis: {
        categories: [
          'Registered Voters','Not Registered Voters',
        ],
      
    },
    yAxis: {
      tickInterval: 1,
        min: 0,
        title: {
            text: 'Number'
        },
    },
    tooltip: {
      enabled:false,
    pointFormat: '{point.category}: <b>{point.y:.0f}</b>',
    formatter: function() {
        return this.point.category + ': <b>' + Highcharts.numberFormat(this.y, 0) + '</b>';
    }

  },
  plotOptions: {
    
    series: {
      dataLabels: {
        enabled: true,
        format: '{point.y:.0f}'
        
      }
    }
  },
    series: [{
        name: 'Total Number of Registered and Not Registered Voters',
    data: [
       { y: {{$voter}}, color: '#999999'},
       { y: {{$novoter}},  color:'#333333'},



    ],
}],
    exporting: { enabled: true },
    legend: {
  enabled: false
},
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
        'Infants (0-1)', 'Children (2-12)' ,'Teenager (13-19) ','Adult (20-59) ','Senior Citizen (60 above)',
        ],
    
      
    },
    yAxis: {
    tickInterval: 1,
        min: 0,
    title: {
      text: ' Number'
    },
    
  },
  tooltip: {
    enabled:false,
    pointFormat: '{point.category}: <b>{point.y:.0f}</b>',
    formatter: function() {
        return this.point.category + ': <b>' + Highcharts.numberFormat(this.y, 0) + '</b>';
    }

  },
  plotOptions: {
    
    series: {
      dataLabels: {
        enabled: true,
        format: '{point.y:.0f}'
        
      }
    }
  },
    series: [{
        name: 'Age Group',
       data:[
    {  y: {{$infants}}, color: '#A0D2E7'},
    {  y: {{$children}}, color:'#81B1D5'},
    {  y: {{$teenager}}, color:'#3D60A7'},
    {  y: {{$adults}}, color:'#26408B'},
    {  y: {{$senior}}, color:'#0F084B'},

    
    

    ],
}],
    exporting: { enabled: true },
    legend: {
  enabled: false
},
});
              </script>

            </div>
            </div>
            </div>
    </div>
    
  
</section>
    @endsection




   