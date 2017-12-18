console.log('hey');
/*************************** LINE CHART FOR READERSHIP */

var ctx = document.getElementById("attendanceLineChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [
            {
            label: 'Samsung',
            data: [186, 199, 300, 234, 201, 185],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255,99,132,1)',
            borderWidth: 1
        },
        {
            label: 'Google' ,
            data: [140, 150, 190, 252, 184, 289],
            backgroundColor: 'rgba(63, 191, 127, 0.2)',
            borderColor: 'rgba(63,191,127,1)',
            borderWidth: 1
        },
        {
            label: 'Microsoft' ,
            data: [256, 174, 185, 143, 265, 159],
            backgroundColor: 'rgba(63, 127, 191, 0.2)',
            borderColor: 'rgba(63, 127, 191, 1)',
            borderWidth: 1
        },
        {
            label: 'Asus' ,
            data: [146, 156, 243, 286, 153, 145],
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
                    beginAtZero:true
                }
            }]
        }
    }
});
/*************************** LINE CHART FOR READERSHIP */

/*************************** BAR CHART FOR READERSHIP */

var ctx = document.getElementById("revenueBarChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Samsung", "Google", "Microsoft", "Asus", "Lenovo", "Mozilla"],
        datasets: [
            {
            label: 'Computers',
            data: [120000, 190000, 80000, 150000, 25000, 30000],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255,99,132,1)',
            borderWidth: 1
        },
        {
            label: 'Software' ,
            data: [140000, 150000, 100000, 147000, 52000, 33543],
            backgroundColor: 'rgba(63, 191, 127, 0.2)',
            borderColor: 'rgba(63,191,127,1)',
            borderWidth: 1
        },
        {
            label: 'Web Development' ,
            data: [116004, 134000, 90000, 15000, 24000, 131000],
            backgroundColor: 'rgba(63, 127, 191, 0.2)',
            borderColor: 'rgba(63, 127, 191, 1)',
            borderWidth: 1
        },
        {
            label: 'Mobile' ,
            data: [34300, 125000, 34000, 155000, 75000, 45000],
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
                    beginAtZero:true
                }
            }]
        }
    }
});
/*************************** BAR CHART FOR READERSHIP */

/*************************** BAR CHART FOR AUTHOR CLICK RATE */

var ctx = document.getElementById("anualRevenueChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Samsung", "Mozilla", "Microsoft", "Asus"],
        datasets: [
            {
            label: "Anual revenue from sponsors",
            data: [65999, 25482, 39249, 52493],
            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(63, 191, 127, 0.2)', 'rgba(63, 127, 191, 0.2)', 'rgba(191, 191, 63, 0.2)' ],
            borderColor: ['rgba(255,99,132,1)','rgba(63,191,127,1)','rgba(63, 127, 191, 1)','rgba(191, 191, 63, 1)'],
            borderWidth: 1
        }
    
    ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
/*************************** BAR CHART FOR AUTHOR CLICK RATE */

