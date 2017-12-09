/*************************** LINE CHART FOR READERSHIP */
function render_readershipLineChart(oContext) {
    var myChart = new Chart(oContext, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                    label: 'Ad hoc Sweden',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                }, {
                    label: 'Ad hoc Finland',
                    data: [14, 15, 10, 4, 5, 3],
                    backgroundColor: 'rgba(63, 191, 127, 0.2)',
                    borderColor: 'rgba(63,191,127,1)',
                    borderWidth: 1
                }, {
                    label: 'Asia markets',
                    data: [16, 13, 9, 5, 2, 1],
                    backgroundColor: 'rgba(63, 127, 191, 0.2)',
                    borderColor: 'rgba(63, 127, 191, 1)',
                    borderWidth: 1
                }, {
                    label: 'Week ahead',
                    data: [3, 5, 3, 5, 2, 6],
                    backgroundColor: 'rgba(191, 191, 63, 0.2)',
                    borderColor: 'rgba(191, 191, 63, 1)',
                    borderWidth: 1
                }

            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}






/*************************** BAR CHART FOR READERSHIP */
function render_readershipBarChart(oContext) {
    var myChart = new Chart(oContext, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                    label: 'Ad hoc Sweden',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                }, {
                    label: 'Ad hoc Finland',
                    data: [14, 15, 10, 4, 5, 3],
                    backgroundColor: 'rgba(63, 191, 127, 0.2)',
                    borderColor: 'rgba(63,191,127,1)',
                    borderWidth: 1
                }, {
                    label: 'Asia markets',
                    data: [16, 13, 9, 5, 2, 1],
                    backgroundColor: 'rgba(63, 127, 191, 0.2)',
                    borderColor: 'rgba(63, 127, 191, 1)',
                    borderWidth: 1
                }, {
                    label: 'Week ahead',
                    data: [3, 5, 3, 5, 2, 6],
                    backgroundColor: 'rgba(191, 191, 63, 0.2)',
                    borderColor: 'rgba(191, 191, 63, 1)',
                    borderWidth: 1
                }

            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}


/*************************** BAR CHART FOR AUTHOR CLICK RATE */
function render_authorClickRateBarChart(oContext) {
    var myChart = new Chart(oContext, {
        type: 'bar',
        data: {
            labels: ["Jens Bornholm", "Jerry James", "Heidi Smith", "Ronald Meszaros"],
            datasets: [{
                    label: "click rate over time",
                    data: [12, 19, 3, 5],
                    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(63, 191, 127, 0.2)', 'rgba(63, 127, 191, 0.2)', 'rgba(191, 191, 63, 0.2)'],
                    borderColor: ['rgba(255,99,132,1)', 'rgba(63,191,127,1)', 'rgba(63, 127, 191, 1)', 'rgba(191, 191, 63, 1)'],
                    borderWidth: 1
                }

            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

/*************************** Segmentation OVERVIEW */

function render_segmentationChart(oContext) {
    var myChart = new Chart(oContext, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                    label: 'Segmented target',
                    data: [5, 7, 10, 7, 6, 8],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                }, {
                    label: 'Personalized target',
                    data: [14, 12, 10, 16.5, 17, 18.5],
                    backgroundColor: 'rgba(63, 191, 127, 0.2)',
                    borderColor: 'rgba(63,191,127,1)',
                    borderWidth: 1
                },


            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

/*************************** SEND OUTS TIME OVERVIEW */

function render_sendOutsTimeChart(oContext) {
    var myChart = new Chart(oContext, {
        type: 'bar',
        data: {
            labels: ["09:00AM", "12:00AM", "3:00PM", "6:00PM", "9:00PM", "12:00PM"],
            datasets: [{
                    label: 'Send outs time',
                    backgroundColor: 'rgba(191, 191, 63, 0.2)',
                    borderColor: 'rgba(191, 191, 63, 1)',
                    borderWidth: 1

                },

                {
                    label: 'Ad hoc Sweden',
                    data: [15, 2, 6, 5, 4, 3],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                }, {
                    label: 'Ad hoc Finland',
                    data: [12, 11, 10, 4, 5, 3],
                    backgroundColor: 'rgba(63, 191, 127, 0.2)',
                    borderColor: 'rgba(63,191,127,1)',
                    borderWidth: 1
                }, {
                    label: 'Asia markets',
                    data: [10, 13, 9, 5, 2, 1],
                    backgroundColor: 'rgba(63, 127, 191, 0.2)',
                    borderColor: 'rgba(63, 127, 191, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

/*************************** TIME SPENT ON PAGE OVERVIEW */

function render_timeSpentOnPageChart(oContext) {
    var myChart = new Chart(oContext, {
        type: 'line',
        data: {
            labels: ["0 minutes", "0-5 minutes", "5-10 minutes", "10-15 minutes", "15-20 minutes"],
            datasets: [{
                    label: 'User average time spent on article',
                }, {
                    label: 'Ad hoc Sweden',
                    data: [0, 5, 7, 15, 10],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                }, {
                    label: 'Ad hoc Finland',
                    data: [2, 6, 8, 5, 10],
                    backgroundColor: 'rgba(63, 191, 127, 0.2)',
                    borderColor: 'rgba(63,191,127,1)',
                    borderWidth: 1
                }, {
                    label: 'Asia markets',
                    data: [2, 13, 9, 10, 15],
                    backgroundColor: 'rgba(63, 127, 191, 0.2)',
                    borderColor: 'rgba(63, 127, 191, 1)',
                    borderWidth: 1
                }

            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

/*************************** AVERAGE ARTICLES PUBLISHED OVERVIEW */
function render_readershipBarChart2(oContext) {
    var myChart = new Chart(oContext, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                    label: 'Ad hoc Sweden',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                }, {
                    label: 'Ad hoc Finland',
                    data: [14, 15, 10, 4, 5, 3],
                    backgroundColor: 'rgba(63, 191, 127, 0.2)',
                    borderColor: 'rgba(63,191,127,1)',
                    borderWidth: 1
                }, {
                    label: 'Asia markets',
                    data: [16, 13, 9, 5, 2, 1],
                    backgroundColor: 'rgba(63, 127, 191, 0.2)',
                    borderColor: 'rgba(63, 127, 191, 1)',
                    borderWidth: 1
                }, {
                    label: 'Week ahead',
                    data: [3, 5, 3, 5, 2, 6],
                    backgroundColor: 'rgba(191, 191, 63, 0.2)',
                    borderColor: 'rgba(191, 191, 63, 1)',
                    borderWidth: 1
                }

            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}


/*************************** BAR CHART FOR ARTICLES PUBLISHED */

function render_articlesPublishedChart(oContext) {
    var myChart = new Chart(oContext, {
        type: 'horizontalBar',
        data: {
            labels: ["Jens Bornholm", "Jerry James", "Heidi Smith", "Ronald Meszaros"],
            datasets: [{
                    label: "Average articles published by authors 01-14 November 2017",
                    data: [19, 15, 5, 8],
                    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(63, 191, 127, 0.2)', 'rgba(63, 127, 191, 0.2)', 'rgba(191, 191, 63, 0.2)'],
                    borderColor: ['rgba(255,99,132,1)', 'rgba(63,191,127,1)', 'rgba(63, 127, 191, 1)', 'rgba(191, 191, 63, 1)'],
                    borderWidth: 1
                }

            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

/*************************** CHART FOR TopKeywords */

function render_topKeywordsChart(oContext) {
    var myChart = new Chart(oContext, {
        type: 'bar',
        data: {
            labels: ["June", "July", "August", "September", "October", "November"],
            datasets: [{
                    label: 'Top Keywords to use',
                    borderWidth: 1
                }, {
                    label: 'Central Banks',
                    data: [14, 15, 10, 4, 5, 3],
                    backgroundColor: 'rgba(63, 191, 127, 0.2)',
                    borderColor: 'rgba(63,191,127,1)',
                    borderWidth: 1
                }, {
                    label: 'Commodities',
                    data: [16, 13, 9, 5, 11, 5],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                }, {
                    label: 'Fixed Income',
                    data: [15, 5, 3, 5, 4, 9],
                    backgroundColor: 'rgba(191, 191, 63, 0.2)',
                    borderColor: 'rgba(191, 191, 63, 1)',
                    borderWidth: 1
                }, {
                    label: 'Week ahead',
                    data: [3, 5, 3, 5, 7, 3],
                    backgroundColor: 'rgba(10, 10, 10, 0.2)',
                    borderColor: 'rgba(100, 100,3, 1)',
                    borderWidth: 1
                }, {
                    label: 'Foreign Exchange',
                    data: [11, 7, 10, 9, 10, 15],
                    backgroundColor: 'rgba(63, 127, 191, 0.2)',
                    borderColor: 'rgba(63, 127, 191, 1)',
                    borderWidth: 1
                }, {
                    label: 'Regions',
                    data: [9, 10, 7, 9, 10, 18],
                    backgroundColor: 'rgba(10, 50 , 95, 0.2)',
                    borderColor: 'rgba(63,150,130,5)',
                    borderWidth: 1
                }

            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}