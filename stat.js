 $.getJSON(
	"game.php",
	{ me : ""},

  	function (result) {
     $("#game").html('');
    $.each(result, function (i,field) {

 	myChart.data.labels.push(field.data);
    myChart.data.datasets[0].data.push(field.result);
     myChart.data.datasets[0].backgroundColor.push("rgba(19, 18, 28, 0.7)");
   
   


        // if (result != null) {
        //     delete_btn = "<td><a class='btn btn-danger' href='cars?id=" + field.id + "'>DELETE</a> </td>";
        // } else {
        //     delete_btn = '';
        // }

	});
	myChart.update();
});
        // $("#user_table_body").append("<tr><td>" + field.id + "</td><td>" + field.owner + "</td><td>" + field.license + "</td><td>" + field.model + "</td><td>" + field.make +
        //     "</td><td>" + field.entry_date + "</td>" + delete_btn + "</tr>");
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {

    type: 'bar',
    
    data: {



        labels: [],
        datasets: [{
            label: 'My result',
            backgroundColor: [
             'rgba(19, 18, 28, 0.7)'
                
            ],
            data: [],
            
            borderColor: [ 
               'black'
            ],
            borderWidth: 1


        }]
       //{
        //     label: [],
        //     data: ['result'],
        //     backgroundColor: [
               
                
        //     ],
        //     borderColor: [
               
        //     ],
        //     borderWidth: 1,
        //     type:'line'

        // }]

//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero:true
//                 }
//             }]
//         }
//     }
// });
//     });

}

});

