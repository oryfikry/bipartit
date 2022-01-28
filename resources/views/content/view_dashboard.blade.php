

<div sty class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div id="top-widget" class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                
                {{-- card candidate  --}}
                @php
                $no = '1';   
                $total = '30';
                @endphp
                @forelse ($name as $name)
                <div class="col-xl-4">
                    <!--begin::Engage Widget 14-->
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="card-body p-15 pb-20">
                            <div class="row mb-17">
                                <div class="col-xxl-5 mb-11 mb-xxl-0">
                                    <!--begin::Image-->
                                    <div class="card card-custom card-stretch">
                                        <div class="card-body p-0 rounded px-10 py-15 d-flex align-items-center justify-content-center" style="background-color: #FFCC69;">
                                            <img src="{{asset('metch')}}/image/avatar-icon.jpg" class="mw-100 w-200px" style="transform: scale(1.6);">
                                        </div>
                                    </div>
                                    <!--end::Image-->
                                </div>
                            </div>
                            <!--begin::Buttons-->
                            <div class="d-flex align-items-center justify-content-center">
                                <button type="button" class="btn btn-primary font-weight-bolder px-12 font-size-sm">
                                {{$total++}} Total</button>  
                            </div>
                            <!--end::Buttons-->
                            <hr>
                            <div class="text-center font-weight-bolder text-primary col-md-12">
                                Voter
                            </div>
                            <div class="text-black text-center col-md-12">
                                voter 1
                            </div>
                            <div class="text-black text-center col-md-12">
                                voter 2
                            </div>
                            <div class="text-black text-center col-md-12">
                                voter 3
                            </div>
                            <div class="text-black text-center col-md-12">
                                voter 4
                            </div>

                        </div>
                    </div>
                    <!--end::Engage Widget 14-->
                </div> 
                @empty         
                @endforelse     

            </div>
            
            {{-- chart --}}
            <div class="row">
            
                    <div class="col-md-6">
                        <div class="card card-custom card-stretch gutter-b">
                            <div class="card-body px-5 pb-5">
                                <div style="position: relative;">
                                    
                                  <canvas id="resultChart"></canvas>
                                </div>
                            </div>
                        </div>
                           
                    </div>
                
            
            </div>

        </div>
    </div>
</div>

{{-- @push('scripts') --}}
<script>
 
    const labels = [
       'Candidate 1',
       'Candidate 2',
       'Candidate 3'
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Vote Result dataset',
      backgroundColor: ['rgb(255, 99, 132)',
      'rgb(75, 192, 192)',
      'rgb(255, 205, 86)'],
    //   borderColor: 'rgb(255, 99, 132)',
      data: [20, 10, 5],
    }]
  };

  const config = {
  type: 'pie',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Chart.js pie Chart'
      }
    }
  },
};

  const myChart = new Chart(
    document.getElementById('resultChart'),
    config
  );
</script>
    
{{-- @endpush --}}