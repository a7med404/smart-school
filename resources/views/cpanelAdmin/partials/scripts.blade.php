
<script src="{{ asset('js/app.js') }}"></script>
  
  
  
<!-- jQuery 2.2.3 -->
<script src="{{ asset('modules/master/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
{{-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> --}}
<script src="{{ asset('modules/master/plugins/jQueryUI/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>

<script src="{{ asset('modules/master/js/toastr.min.js') }}"></script>

<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('modules/master/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('modules/master/js/raphael.min.js') }}"></script>
<script src="{{ asset('modules/master/plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('modules/master/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('modules/master/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('modules/master/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('modules/master/plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
{{-- <script src="{{ asset('modules/master/js/script.js') }}"></script> --}}
<script src="{{ asset('modules/master/js/moment.js') }}"></script>
<script src="{{ asset('modules/master/js/datatables-ar.js') }}"></script>
<script src="{{ asset('modules/master/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('modules/master/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('modules/master/plugins/datepicker/bootstrap-datepicker.ar.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('modules/master/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('modules/master/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('modules/master/plugins/fastclick/fastclick.js') }}"></script>
<!-- ChartJS 1.0.1 -->
<script src="{{ asset('modules/master/plugins/chartjs/Chart.min.js') }}"></script>

<script src="{{ asset('modules/master/plugins/echart/echarts.min.js') }}"></script>
<script src="{{ asset('modules/master/plugins/echart/world.js') }}"></script>


<script src="{{ asset('modules/master/plugins/jquery.nicescroll.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('modules/master/plugins/select2/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('modules/master/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('modules/master/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('modules/master/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('modules/master/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- DataTable -->
{{-- <script src="{{ asset('modules/master/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('modules/master/plugins/datatables/dataTables.bootstrap.min.js') }}"></script> --}}
<!-- bootstrap color picker -->
<script src="{{ asset('modules/master/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('modules/master/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('modules/master/plugins/iCheck/icheck.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('modules/master/js/app.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ asset('modules/master/js/pages/dashboard2.js') }}"></script> --}}
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('modules/master/js/demo.js') }}"></script>
<script src="{{ asset('modules/master/js/backend.js') }}"></script>


{!! Html::script(asset('modules/master/plugins/datatables/jquery.dataTables.min.js')) !!}
{!! Html::script(asset('modules/master/plugins/datatables/dataTables.bootstrap.min.js')) !!}


<script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>

<script>
    $(function () {
        $(".select2").select2();
    });

     
    $('#table_id').DataTable({
        // processing: true,
        // serverSide: true,
        // "columnDefs":[
        //   {
        //     "targets":[1, 3, 7],
        //     "orderable":false,
        //   },
        // ],
        "columnDefs": [{
            "defaultContent": "-",
            "targets": "_all"
        }],
        "stateSave": false,
        "responsive": true,
        "order": [
            [0, 'desc']
        ],
        "pagingType": "full_numbers",
        aLengthMenu: [
            [10, 25, 50, 100, 200, -1],
            [10, 25, 50, 100, 200, "All"]
        ],
        iDisplayLength: 25,
        fixedHeader: true,
    });
</script>

<!-- Page script -->
{{-- <script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#identifcation_expire').datepicker({
      autoclose: true
    });
    $('#birthday').datepicker({
      autoclose: true
    });
    $('#start_data').datepicker({
      autoclose: true
    });
    
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
  
</script>
<!-- page script -->
<script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })
  })
</script> --}}




{{-- 
  <script>
    $('#table_id').DataTable({
        //processing: true,
        //serverSide: true,
        // "columnDefs":[
        //     {
        //         "targets":[1, 3, 7],
        //         "orderable":false,
        //     },
        // ],
        "stateSave": false,
        "responsive": true,
        "order": [
            [0, 'desc']
        ],
        "pagingType": "full_numbers",
        aLengthMenu: [
            [10, 25, 50, 100, 200, -1],
            [10, 25, 50, 100, 200, "All"]
        ],
        iDisplayLength: 25,
        fixedHeader: true,

    });
</script> --}}


  
<script>

    echarts.init(document.getElementById('offersRepport')).setOption({

        title : {
            show: true,
            text: 'رسوم الطلاب خلال العام', 
            textStyle:{
            color: '#73879c',
            fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
            },
            // subtext: 'رسوم الطلاب خلال العام',

            
            padding: [6, 10],
            itemGap: 10,
            left: 10,
        },
        tooltip : {
            textStyle:{
            fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
            },
            trigger: 'item',
            axisPointer: {
            type: 'shadow',
            axis: 'line',
            label: {
                show: true,
                precision: 2,// 5,'tets'
                extraCssText: 'box-shadow: 0 0 8px rgba(0, 0, 0, 0.9);', // Extra CSS style for floating layer. The following is an example for adding shadow.
            },
            }
        },
        legend: {
            data:[' طلاب تم سداد الرسوم',' طلاب لم يقوموا بسداد الرسوم'],
            type: 'scroll', // scroll, plain  Scrollable legend. It helps when too many legend items needed to be shown.
            show: true,
            orient : 'horizontal', // vertical  default => horizontal
            align:  'right', //  'auto','left','right'
            padding: [10, 5],
            itemGap: 25, // The distance between each legend, horizontal distance in horizontal layout, and vertical distance in vertical layout.
            itemWidth: 25, // itemHeight = Image width of legend symbol.
            selectedMode: true,  // Selected mode of legend, which controls whether series can be toggled displaying by clicking legends. It is enabled by default, and you may set it to be false to disabled it.
            selectedMode: 'multiple',  //Besides, it can be set to 'single' or 'multiple', for single selection and multiple selection.
            inactiveColor: '#DDD', // Legend color when not selected.
            textStyle: {
            fontWeight: 'bold', // default => normal
            fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
            },
            data: [
            {
                name: 'طلاب تم سداد الرسوم', //Name of legend, which should be the name value of a certain series. If it is a pie chart, legend name can also be the name of a single data item // compulsorily set icon as a circle
                icon: 'roundRect', // Icon types provided by ECharts includes 'circle', 'rect', 'roundRect', 'triangle', 'diamond', 'pin', 'arrow'
                textStyle: {
                color: '#ffcc33',
                fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
                }
            },
            {
                name: ' طلاب لم يقوموا بسداد الرسوم',
                icon: 'pin',
                textStyle: {
                fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'",
                color: '#2f4554'
                }
            },
            ]
        },
        grid: {
        show: true,
        left: '10%',
        tooltip: {
            show: true,
            trigger: 'axis',
            axisPointer: {
            type: 'cross',
            axis: 'x', 
            label: {
                show: true,
                precision: 2,
                extraCssText: 'box-shadow: 10 10 8px rgba(0, 0, 0, 0.5);',
            },
            lineStyle: {
                color: {
                    type: 'radial',
                    x: 0.5,
                    y: 0.5,
                    r: 0.5,
                    colorStops: [{
                        offset: 0, color: 'red' // color at 0% position
                    }, {
                        offset: 1, color: 'blue' // color at 100% position
                    }],
                    globalCoord: false // false by default
                }
            },
            shadowStyle: {
                color: {
                    type: 'radial',
                    x: 0.5,
                    y: 0.5,
                    r: 0.5,
                    colorStops: [{
                        offset: 0, color: 'red' // color at 0% position
                    }, {
                        offset: 1, color: 'blue' // color at 100% position
                    }],
                    globalCoord: false // false by default
                }
            }
            },
            position: {
                position: ['50%', '50%']
            }
        }
        },
        toolbox: {
            show : true,
            orient: 'vertical',
            itemSize: 15,
            itemGap: 10,
            showTitle: true,
            feature : {
            mark : {show: true},
            dataView : {
                show: true, 
                readOnly: false,
                lang: ['data view','turn off', 'refresh'],
                textareaBorderColor: '#0FF',
                title: 'View Data As Table',
            },
            magicType : {
                show: true, 
                type: ['line', 'bar', 'pie'],
                title: {
                line: 'line',
                bar: 'bar',
                pie: 'pie',
                }
            },
            dataZoom: {
                title: {
                zoom: 'Area Zooming',
                back: 'Restore Area Zooming',
                },
            },
            restore : {
                show: true,
                title: 'Restore',
            },
            saveAsImage : {
                show: true,
                type: 'jpeg', 
                title: 'حفظ صورة As',
                // pixelRatio: 55, // Resolution ratio to حفظ صورة, whose default value is that of the container. Values larger than 1 (e.g.: 2) is supported when you need higher resolution.
            }
            }
        },
        aria: {
            show: true
        },
        calculable : true,
        xAxis : [
            {
            /*          

                'value' Numerical axis, suitable for continuous data.

                'category' Category axis, suitable for discrete category data. Data should only be set via data for this type.

                'time' Time axis, suitable for continuous time series data. As compared to value axis, it has a better formatting for time and a different tick calculation method. For example, it decides to use month, week, day or hour for tick based on the range of span.

                'log' Log axis, suitable for log data.

            */
                textStyle:{
                    fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
                },
                type : 'category', 
                data : ['Jan','Feb','Mar','Apr','May','June','July','Aug','Sep','Oct','Nov','Dec'],

                // data : ['يناير','فبراير','مارس','ابريل','مايو','يونيو','يوليو','أغسطس','سبتمبر','أكتوبر','نوفمبر','ديسمبر'],
            
                show: true,
                position: 'bottom',
                offset: 10,  //Offset of x axis relative to default position. Useful when multiple x axis has same position value.
                // name: 'شهور السنة',
                nameLocation: 'middle', //  'start' 'middle' or 'center'  'end'
                nameGap: 30, //Gap between axis name and axis line.
                nameRotate: 0, //Rotation of axis name.
                inverse: 0, // Whether axis is inversed. New option from ECharts 3.
                boundaryGap: ['50%', '20%'], 
                scale: true, //It is available only in numerical axis, i.e., type: 'value'.
                //It specifies whether not to contain zero position of axis compulsively. When it is set to be true, the axis may not contain zero position, which is useful in the scatter chart for both value axes.
                //This configuration item is unavailable when the min and max are set.
                //splitNumber: 4,//
                //minInterval: ,// Maximum gap between split lines.
                /*
                For example, in time axis (type is 'time'), it can be set to be 3600 * 24 * 1000 to make sure that the gap between axis labels is less than or equal to one day.

                {
                    maxInterval: 3600 * 1000 * 24
                }
                It is available only for axis of type 'value' or 'time'.
                */

                axisLine:{
                show: true,
                onZero: false,
                onZeroAxisIndex: 5,

                // Name list of all categories
                // data : ['web developer','mopile Application','Teaster','Programming','Graphical','Designer','Teatcher','Worker','SEO','Freelancer','Writer','Devolper'],                    
                // data: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                // Each item could also be a specific configuration item.
                // In this case, `value` is used as the category name.
                // data: [{
                //     value: 'web develope',
                //     // Highlight Monday
                //     textStyle: {
                //         fontSize: 20,
                //         color: 'red'
                //     }
                // }, 'mopile Application','Teaster','Programming','Graphical','Designer','Teatcher','Worker','SEO','Freelancer','Writer','Devolper']


                }
                            
            }
        ],
        yAxis : [
            {
                type : 'value'
            },
            {
            min: 300,
            }
        ],
        dataZoom:[
        {
            type: 'inside',
            disabled: true,
            //xAxisIndex: [0,2],
        }

        ],
        series : [
        {
            name:'طلاب تم سداد الرسوم',
            type:'bar',
            color: ['#ffcc33'],
            // '6'
            data:[ 3,2,11,6,10,14,4,3,9,1,12,2],
            markPoint : {
            data : [
                {type : 'max', name: 'maximum'},
                {type : 'min', name: 'minimum'}
            ]
            },
            markLine : {
            data : [
                {type : 'average', name: 'average'}
            ]
            },
            textStyle: {
                color: '#ffcc33',
                fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
            }
        },
        {
            name:' طلاب لم يقوموا بسداد الرسوم',
            type:'bar',
            color: ['#2f4554'],
            data:[ 2,8,10,13,16,7,9,12,3,3,8,5],
            markPoint : {
            data : [
                {type : 'max', name: 'maximum'},
                {type : 'min', name: 'minimum'}
                // {name : 'max', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:50},
                // {name : 'min', value : 2.3, xAxis: 11, yAxis: 3}
            ]
            },
            markLine : {
            data : [
                {type : 'average', name : 'average'}
            ]
            }
        }
        ] 
    });
		
		
		/* ECHRTS */
	


        var theme = {
            color: [
                '#FFCC33', '#34495E', '#BDC3C7', '#3498DB',
                '#2A3F54', '#8abb6f', '#759c6a', '#bfd3b7'
            ],

            title: {
                itemGap: 8,
                textStyle: {
                    fontWeight: 'normal',
                    color: '#408829',
                    fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
                }
            },

            dataRange: {
                color: ['#1f610a', '#97b58d']
            },

            toolbox: {
                color: ['#408829', '#408829', '#408829', '#408829']
            },

            tooltip: {
                show:true,
                backgroundColor: 'rgba(0,0,0,0.5)',
                axisPointer: {
                    type: 'line',
                    lineStyle: {
                        color: '#408829',
                        type: 'dashed'
                    },
                    crossStyle: {
                        color: '#408829'
                    },
                    shadowStyle: {
                        color: 'rgba(200,200,200,0.3)'
                    }
                }
            },

            dataZoom: {
                dataBackgroundColor: '#eee',
                fillerColor: 'rgba(64,136,41,0.2)',
                handleColor: '#408829'
            },
            grid: {
                borderWidth: 0
            },

            categoryAxis: {
                axisLine: {
                    lineStyle: {
                        color: '#408829'
                    }
                },
                splitLine: {
                    lineStyle: {
                        color: ['#eee']
                    }
                }
            },

            valueAxis: {
                axisLine: {
                    lineStyle: {
                        color: '#408829'
                    }
                },
                splitArea: {
                    show: true,
                    areaStyle: {
                        color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                    }
                },
                splitLine: {
                    lineStyle: {
                        color: ['#eee']
                    }
                }
            },
            timeline: {
                lineStyle: {
                    color: '#408829'
                },
                controlStyle: {
                    normal: {color: '#408829'},
                    emphasis: {color: '#408829'}
                }
            },

            k: {
                itemStyle: {
                    normal: {
                        color: '#68a54a',
                        color0: '#a9cba2',
                        lineStyle: {
                            width: 1,
                            color: '#408829',
                            color0: '#86b379'
                        }
                    }
                }
            },
            map: {
                itemStyle: {
                    normal: {
                        areaStyle: {
                            color: '#ddd'
                        },
                        label: {
                            textStyle: {
                                color: '#c12e34',
                                fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
                            }
                        }
                    },
                    emphasis: {
                        areaStyle: {
                            color: '#99d2dd'
                        },
                        label: {
                            textStyle: {
                                color: '#c12e34',
                                fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
                            }
                        }
                    }
                }
            },
            force: {
                itemStyle: {
                    normal: {
                        linkStyle: {
                            strokeColor: '#408829'
                        }
                    }
                }
            },
            chord: {
                padding: 4,
                itemStyle: {
                    normal: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        },
                        chordStyle: {
                            lineStyle: {
                                width: 1,
                                color: 'rgba(128, 128, 128, 0.5)'
                            }
                        }
                    },
                    emphasis: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        },
                        chordStyle: {
                            lineStyle: {
                                width: 1,
                                color: 'rgba(128, 128, 128, 0.5)'
                            }
                        }
                    }
                }
            },
            gauge: {
                startAngle: 225,
                endAngle: -45,
                axisLine: {
                    show: true,
                    lineStyle: {
                        color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                        width: 8
                    }
                },
                axisTick: {
                    splitNumber: 10,
                    length: 12,
                    lineStyle: {
                        color: 'auto'
                    }
                },
                axisLabel: {
                    textStyle: {
                        color: 'auto',
                        fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
                    }
                },
                splitLine: {
                    length: 18,
                    lineStyle: {
                        color: 'auto'
                    }
                },
                pointer: {
                    length: '90%',
                    color: 'auto'
                },
                title: {
                    textStyle: {
                        color: '#333',
                        fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
                    }
                },
                detail: {
                    textStyle: {
                        color: 'auto',
                        fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
                    }
                }
            },
            textStyle: {
                fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
            }
        };
    
    //echart Donut
			  
    if ($('#maleAndFemaleCount').length ){  
        
        var echartDonut = echarts.init(document.getElementById('maleAndFemaleCount'), theme);
        
        echartDonut.setOption({
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            calculable: true,
            legend: {
                show:true,
                x: 'center',
                y: 'bottom',
                data: ['الذكور', 'الاناث']
            },
            
            toolbox: {
                show: true,
                feature: {
                magicType: {
                    show: true,
                    type: ['pie', 'funnel'],
                    option: {
                        funnel: {
                            x: '25%',
                            width: '50%',
                            funnelAlign: 'center',
                            max: 1548
                        }
                    }
                },
                restore: {
                    show: true,
                    title: "Restore"
                },
                saveAsImage: {
                    show: true,
                    title: "حفظ صورة"
                }
                }
            },
            series: [{
                name: 'Access to the resource',
                type: 'pie',
                radius: ['35%', '50%'],
                itemStyle: {
                normal: {
                    label: {
                    show: true
                    },
                    labelLine: {
                    show: true
                    }
                },
                emphasis: {
                    label: {
                    show: true,
                    position: 'center',
                    textStyle: {
                        fontSize: '14',
                        fontWeight: 'normal',
                        fontFamily: "'Helvetica Neue', 'Droid Sans', 'sans-serif'"
                        }
                    }
                }
                },
                data: [
                    {
                    value: '1200',
                    name: 'الذكور (1200)',
                    }, {
                    value: '400',
                    name: 'الاناث (400)'
                    }
                ]
            }]
        });
    } 
        

    //echart Pie Collapse
			  
    if ($('#absence').length ){ 
        
        var echartPieCollapse = echarts.init(document.getElementById('absence'), theme);
        
        echartPieCollapse.setOption({
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            x: 'center',
            y: 'bottom',
            data: ['مرحلة رياض الاطفال', 'المرحلة الاساسية', 'المرحلة الثانوية']
        },
        toolbox: {
            show: true,
            feature: {
            magicType: {
                show: true,
                type: ['pie', 'funnel']
            },
            restore: {
                show: true,
                title: "Restore"
            },
            saveAsImage: {
                show: true,
                title: "حفظ صورة"
            }
            }
        },
        calculable: true,
        series: [{
            name: 'Area Mode',
            type: 'pie',
            radius: [25, 90],
            center: ['50%', 170],
            roseType: 'area',
            x: '50%',
            max: 800,
            sort: 'ascending',
            data: [{
            value: 110,
            name: 'مرحلة رياض الاطفال'
            }, {
            value: 800,
            name: 'المرحلة الاساسية'
            }, {
            value: 500,
            name: 'المرحلة الثانوية'
            }]
        }]
        });

    } 
    
    //echart Pie
        
    if ($('#echart_pie2').length ){  
        
        var echartPie = echarts.init(document.getElementById('echart_pie'), theme);

        echartPie.setOption({
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            x: 'center',
            y: 'bottom',
            data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
        },
        toolbox: {
            show: true,
            feature: {
            magicType: {
                show: true,
                type: ['pie', 'funnel'],
                option: {
                funnel: {
                    x: '25%',
                    width: '50%',
                    funnelAlign: 'left',
                    max: 1548
                }
                }
            },
            restore: {
                show: true,
                title: "Restore"
            },
            saveAsImage: {
                show: true,
                title: "حفظ صورة"
            }
            }
        },
        calculable: true,
        series: [{
            name: '访问来源',
            type: 'pie',
            radius: '55%',
            center: ['50%', '48%'],
            data: [{
            value: 335,
            name: 'Direct Access'
            }, {
            value: 310,
            name: 'E-mail Marketing'
            }, {
            value: 234,
            name: 'Union Ad'
            }, {
            value: 135,
            name: 'Video Ads'
            }, {
            value: 1548,
            name: 'Search Engine'
            }]
        }]
        });

        var dataStyle = {
        normal: {
            label: {
            show: false
            },
            labelLine: {
            show: false
            }
        }
        };

        var placeHolderStyle = {
        normal: {
            color: 'rgba(0,0,0,0)',
            label: {
            show: false
            },
            labelLine: {
            show: false
            }
        },
        emphasis: {
            color: 'rgba(0,0,0,0)'
        }
        };

    } 
			 

    //echart Line
			  
    if ($('#echart_line').length ){ 
        
        var echartLine = echarts.init(document.getElementById('echart_line'), theme);

        echartLine.setOption({
        title: {
            text: 'Line Graph',
            subtext: 'Subtitle'
        },
        tooltip: {
            trigger: 'axis'
        },
        legend: {
            x: 220,
            y: 40,
            data: ['Intent', 'Pre-order', 'Deal']
        },
        toolbox: {
            show: true,
            feature: {
            magicType: {
                show: true,
                title: {
                line: 'Line',
                bar: 'Bar',
                stack: 'Stack',
                tiled: 'Tiled'
                },
                type: ['line', 'bar', 'stack', 'tiled']
            },
            restore: {
                show: true,
                title: "Restore"
            },
            saveAsImage: {
                show: true,
                title: "حفظ صورة"
            }
            }
        },
        calculable: true,
        xAxis: [{
            type: 'category',
            boundaryGap: false,
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        }],
        yAxis: [{
            type: 'value'
        }],
        series: [{
            name: 'Deal',
            type: 'line',
            smooth: true,
            itemStyle: {
            normal: {
                areaStyle: {
                type: 'default'
                }
            }
            },
            data: [10, 12, 21, 54, 260, 830, 710]
        }, {
            name: 'Pre-order',
            type: 'line',
            smooth: true,
            itemStyle: {
            normal: {
                areaStyle: {
                type: 'default'
                }
            }
            },
            data: [30, 182, 434, 791, 390, 30, 10]
        }, {
            name: 'Intent',
            type: 'line',
            smooth: true,
            itemStyle: {
            normal: {
                areaStyle: {
                type: 'default'
                }
            }
            },
            data: [1320, 1132, 601, 234, 120, 90, 20]
        }]
        });

    } 


    //echart Radar
        
    if ($('#echart_sonar').length ){ 
        
        var echartRadar = echarts.init(document.getElementById('echart_sonar'), theme);

        echartRadar.setOption({
        title: {
            text: 'Budget vs spending',
            subtext: 'Subtitle'
        },
            tooltip: {
            trigger: 'item'
        },
        legend: {
            orient: 'vertical',
            x: 'right',
            y: 'bottom',
            data: ['Allocated Budget', 'Actual Spending']
        },
        toolbox: {
            show: true,
            feature: {
                restore: {
                    show: true,
                    title: "Restore"
                },
                saveAsImage: {
                    show: true,
                    title: "حفظ صورة"
                }
            }
        },
        polar: [{
            indicator: [{
            text: 'Sales',
            max: 6000
            }, {
            text: 'Administration',
            max: 16000
            }, {
            text: 'Information Techology',
            max: 30000
            }, {
            text: 'Customer Support',
            max: 38000
            }, {
            text: 'Development',
            max: 52000
            }, {
            text: 'Marketing',
            max: 25000
            }]
        }],
        calculable: true,
        series: [{
            name: 'Budget vs spending',
            type: 'radar',
            data: [{
            value: [4300, 10000, 28000, 35000, 50000, 19000],
            name: 'Allocated Budget'
            }, {
            value: [5000, 14000, 28000, 31000, 42000, 21000],
            name: 'Actual Spending'
            }]
        }]
        });

    } 
  
    
        
    //echart Pie
            
    if ($('#students-number').length ){  
        
        var echartPie = echarts.init(document.getElementById('students-number'), theme);

        echartPie.setOption({
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            x: 'center',
            y: 'bottom',
            data: ['مرحلة رياض الاطفال', 'المرحلة الاساسية', 'المرحلة الثانوية']
        },
        toolbox: {
            show: true,
            feature: {
            magicType: {
                show: true,
                type: ['pie', 'funnel'],
                option: {
                funnel: {
                    x: '25%',
                    width: '50%',
                    funnelAlign: 'left',
                    max: 1548
                }
                }
            },
            restore: {
                show: true,
                title: "Restore"
            },
            saveAsImage: {
                show: true,
                title: "حفظ صورة"
            }
            }
        },
        calculable: true,
        series: [{
            name: '访问来源',
            type: 'pie',
            radius: '55%',
            center: ['50%', '48%'],
            data: [{
            value: 335,
            name: 'مرحلة رياض الاطفال'
            }, {
            value: 310,
            name: 'المرحلة الاساسية'
            }, {
            value: 234,
            name: 'المرحلة الثانوية'
            }]
        }]
        });

        var dataStyle = {
        normal: {
            label: {
            show: false
            },
            labelLine: {
            show: false
            }
        }
        };

        var placeHolderStyle = {
        normal: {
            color: 'rgba(0,0,0,0)',
            label: {
            show: false
            },
            labelLine: {
            show: false
            }
        },
        emphasis: {
            color: 'rgba(0,0,0,0)'
        }
        };

    } 
       
    
    if ($('#echart_pie').length ){  
        
        var echartPie = echarts.init(document.getElementById('echart_pie'), theme);

        echartPie.setOption({
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            x: 'center',
            y: 'bottom',
            data: ['مرحلة رياض الاطفال', 'المرحلة الاساسية', 'المرحلة الثانوية']
        },
        toolbox: {
            show: true,
            feature: {
            magicType: {
                show: true,
                type: ['pie', 'funnel'],
                option: {
                funnel: {
                    x: '25%',
                    width: '50%',
                    funnelAlign: 'left',
                    max: 1548
                }
                }
            },
            restore: {
                show: true,
                title: "Restore"
            },
            saveAsImage: {
                show: true,
                title: "حفظ صورة"
            }
            }
        },
        calculable: true,
        series: [{
            name: '访问来源',
            type: 'pie',
            radius: '55%',
            center: ['50%', '48%'],
            data: [{
            value: 335,
            name: 'مرحلة رياض الاطفال'
            }, {
            value: 310,
            name: 'المرحلة الاساسية'
            }, {
            value: 234,
            name: 'المرحلة الثانوية'
            }]
        }]
        });

        var dataStyle = {
        normal: {
            label: {
            show: false
            },
            labelLine: {
            show: false
            }
        }
        };

        var placeHolderStyle = {
        normal: {
            color: 'rgba(0,0,0,0)',
            label: {
            show: false
            },
            labelLine: {
            show: false
            }
        },
        emphasis: {
            color: 'rgba(0,0,0,0)'
        }
        };

    } 
			 

			 
</script>