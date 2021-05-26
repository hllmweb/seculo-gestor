// Create the chart
Highcharts.chart('chart-pizza', {
    chart: {
        //type: 'column'
        type: 'pie',
        plotBackgroundColor: true,
        plotBorderWidth: null,
        plotShadow: false,
        styledMode: false
       // width: 550
    },
    title: {
        text: ''
    },
    xAxis: {
        type: 'category'
    },
    exporting: {
        enabled: false
    },
    tooltip: {
        pointFormat: '<b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                connectorColor: 'silver'
                /*distance: -80,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                },
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',*/
            }

        },
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true
            },
            cursor: 'pointer',
            point: {
                events: {
                    click: function () {
                        location.href = 'https://www.seculomanaus.com.br/' +
                            this.options.key;
                    }
                }
            }


        }
    },

    series: [{
        data: [{
            y: 29.9,
            name: 'Chamados',
            key: 'site/contato'
        }, {
            y: 71.5,
            name: 'Concluidos',
            key: 'Canada'
        }, {
            y: 106.4,
            name: 'Em Andamento',
            key: 'Mexico'
        }]
    }]
});


// Highcharts.chart('container-2', {
//     chart: {
//         type: 'column'
//     },
//     title: {
//         text: 'Chamados T.I.'
//     },
//     subtitle: {
//         text: ''
//     },
//     xAxis: {
//         type: 'category'
//     },
//     plotOptions: {
//         series: {
//             borderWidth: 0,
//             dataLabels: {
//                 enabled: true
//             }
//         }
//     },

//     series: [{
//         name: 'Aberto',
//         data: [{
//             name: 'Sala de Aula',
//             y: 5,
//             drilldown: 'republican-2010'

//         }, {
//             name: 'Impacto Financeiro',
//             y: 2,
//             drilldown: 'democrats-2010'
//         }, {
//             name: 'Treinamentos e Processos',
//             y: 4,
//             drilldown: 'other-2010'
//         }]
//     }, {
//         name: 'Fechado',
//         data: [{
//             name: 'Sala de Aula',
//             y: 4,
//             drilldown: 'republican-2014'
//         }, {
//             name: 'Impacto Financeiro',
//             y: 4,
//             drilldown: 'democrats-2014'
//         }, {
//             name: 'Treinamentos e Processos',
//             y: 4,
//             drilldown: 'other-2014'
//         }]
//     }],
//     drilldown: {
//         series: [{
//             id: 'republican-2010',
//             data: [
//                 ['East', 4],
//                 ['West', 2],
//                 ['North', 1],
//                 ['South', 4]
//             ]
//         }, {
//             id: 'democrats-2010',
//             data: [
//                 ['East', 6],
//                 ['West', 2],
//                 ['North', 2],
//                 ['South', 4]
//             ]
//         }, {
//             id: 'other-2010',
//             data: [
//                 ['East', 2],
//                 ['West', 7],
//                 ['North', 3],
//                 ['South', 2]
//             ]
//         }, {
//             id: 'republican-2014',
//             data: [
//                 ['East', 2],
//                 ['West', 4],
//                 ['North', 1],
//                 ['South', 7]
//             ]
//         }, {
//             id: 'democrats-2014',
//             data: [
//                 ['East', 4],
//                 ['West', 2],
//                 ['North', 5],
//                 ['South', 3]
//             ]
//         }, {
//             id: 'other-2014',
//             data: [
//                 ['East', 7],
//                 ['West', 8],
//                 ['North', 2],
//                 ['South', 2]
//             ]
//         }]
//     }
// });



// // Create the chart
// Highcharts.chart('container-3', {
//     chart: {
//         type: 'column'
//     },
//     title: {
//         text: 'Chamados T.I.'
//     },
//     subtitle: {
//         text: ''
//     },
//     accessibility: {
//         announceNewData: {
//             enabled: true
//         }
//     },
//     xAxis: {
//         type: 'category'
//     },
//     yAxis: {
//         title: {
//             text: 'Total percent market share'
//         }

//     },
//     legend: {
//         enabled: false
//     },
//     plotOptions: {
//         series: {
//             borderWidth: 0,
//             dataLabels: {
//                 enabled: true,
//                 format: '{point.y:.1f}%'
//             }
//         }
//     },

//     tooltip: {
//         headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
//         pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
//     },

//     series: [
//         {
//             name: "Browsers",
//             colorByPoint: true,
//             data: [
//                 {
//                     name: "Chrome",
//                     y: 62.74,
//                     drilldown: "Chrome"
//                 },
//                 {
//                     name: "Firefox",
//                     y: 10.57,
//                     drilldown: "Firefox"
//                 },
//                 {
//                     name: "Internet Explorer",
//                     y: 7.23,
//                     drilldown: "Internet Explorer"
//                 },
//                 {
//                     name: "Safari",
//                     y: 5.58,
//                     drilldown: "Safari"
//                 },
//                 {
//                     name: "Edge",
//                     y: 4.02,
//                     drilldown: "Edge"
//                 },
//                 {
//                     name: "Opera",
//                     y: 1.92,
//                     drilldown: "Opera"
//                 },
//                 {
//                     name: "Other",
//                     y: 7.62,
//                     drilldown: null
//                 }
//             ]
//         }
//     ],
//     drilldown: {
//         series: [
//             {
//                 name: "Chrome",
//                 id: "Chrome",
//                 data: [
//                     [
//                         "v65.0",
//                         0.1
//                     ],
//                     [
//                         "v64.0",
//                         1.3
//                     ],
//                     [
//                         "v63.0",
//                         53.02
//                     ],
//                     [
//                         "v62.0",
//                         1.4
//                     ],
//                     [
//                         "v61.0",
//                         0.88
//                     ],
//                     [
//                         "v60.0",
//                         0.56
//                     ],
//                     [
//                         "v59.0",
//                         0.45
//                     ],
//                     [
//                         "v58.0",
//                         0.49
//                     ],
//                     [
//                         "v57.0",
//                         0.32
//                     ],
//                     [
//                         "v56.0",
//                         0.29
//                     ],
//                     [
//                         "v55.0",
//                         0.79
//                     ],
//                     [
//                         "v54.0",
//                         0.18
//                     ],
//                     [
//                         "v51.0",
//                         0.13
//                     ],
//                     [
//                         "v49.0",
//                         2.16
//                     ],
//                     [
//                         "v48.0",
//                         0.13
//                     ],
//                     [
//                         "v47.0",
//                         0.11
//                     ],
//                     [
//                         "v43.0",
//                         0.17
//                     ],
//                     [
//                         "v29.0",
//                         0.26
//                     ]
//                 ]
//             },
//             {
//                 name: "Firefox",
//                 id: "Firefox",
//                 data: [
//                     [
//                         "v58.0",
//                         1.02
//                     ],
//                     [
//                         "v57.0",
//                         7.36
//                     ],
//                     [
//                         "v56.0",
//                         0.35
//                     ],
//                     [
//                         "v55.0",
//                         0.11
//                     ],
//                     [
//                         "v54.0",
//                         0.1
//                     ],
//                     [
//                         "v52.0",
//                         0.95
//                     ],
//                     [
//                         "v51.0",
//                         0.15
//                     ],
//                     [
//                         "v50.0",
//                         0.1
//                     ],
//                     [
//                         "v48.0",
//                         0.31
//                     ],
//                     [
//                         "v47.0",
//                         0.12
//                     ]
//                 ]
//             },
//             {
//                 name: "Internet Explorer",
//                 id: "Internet Explorer",
//                 data: [
//                     [
//                         "v11.0",
//                         6.2
//                     ],
//                     [
//                         "v10.0",
//                         0.29
//                     ],
//                     [
//                         "v9.0",
//                         0.27
//                     ],
//                     [
//                         "v8.0",
//                         0.47
//                     ]
//                 ]
//             },
//             {
//                 name: "Safari",
//                 id: "Safari",
//                 data: [
//                     [
//                         "v11.0",
//                         3.39
//                     ],
//                     [
//                         "v10.1",
//                         0.96
//                     ],
//                     [
//                         "v10.0",
//                         0.36
//                     ],
//                     [
//                         "v9.1",
//                         0.54
//                     ],
//                     [
//                         "v9.0",
//                         0.13
//                     ],
//                     [
//                         "v5.1",
//                         0.2
//                     ]
//                 ]
//             },
//             {
//                 name: "Edge",
//                 id: "Edge",
//                 data: [
//                     [
//                         "v16",
//                         2.6
//                     ],
//                     [
//                         "v15",
//                         0.92
//                     ],
//                     [
//                         "v14",
//                         0.4
//                     ],
//                     [
//                         "v13",
//                         0.1
//                     ]
//                 ]
//             },
//             {
//                 name: "Opera",
//                 id: "Opera",
//                 data: [
//                     [
//                         "v50.0",
//                         0.96
//                     ],
//                     [
//                         "v49.0",
//                         0.82
//                     ],
//                     [
//                         "v12.1",
//                         0.14
//                     ]
//                 ]
//             }
//         ]
//     }
// });