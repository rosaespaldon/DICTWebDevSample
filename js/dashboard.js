
function countStudentRecord(){
    $.ajax({
        url:'./php/getParticipantsCount.php',
        method: "POST",
        data: {},
        dataType: "json",
        success: function(response){
            $.each(response, function(key,value){
                $('#total_students').text(value.ParticipantsCount);
            });
        }
    });
}

function getTotalTrainingFee(){
    $.ajax({
        url:'./php/getTotalTrainingFee.php',
        method: "POST",
        data: {},
        dataType: "json",
        success: function(response){
            $.each(response, function(key,value){
                $('#total_fee').text(value.TOTAL);
            });
        }
    });
}

function getAverageTrainingFee(){
    $.ajax({
        url:'./php/getAverageTrainingFee.php',
        method: "POST",
        data: {},
        dataType: "json",
        success: function(response){
            $.each(response, function(key,value){
                $('#average').text(value.average);
            });
        }
    });
}

function getTotalCourses(){
    $.ajax({
        url:'./php/getTotalCourses.php',
        method: "POST",
        data: {},
        dataType: "json",
        success: function(response){
            $.each(response, function(key,value){
                $('#total_courses').text(value.totalCourses);
            });
        }
    });
}

function addNewRecordHTML(student_id, student_name, student_address, student_sex, course_name, training_fee){
    var newRow = '<tr>'+
        ' <td>'+ student_id +'</td>'+
        ' <td>'+ student_name +'</td>'+ 
        '<td>'+ student_address +'</td> '+ 
        '<td>'+ student_sex +' </td>'+ 
        '<td>'+ course_name +' </td>'+ 
        '<td>'+ training_fee +' </td>'+ 
        '</tr>';

var tableBody = $('#student_summary tbody')
tableBody.append(newRow)
    
}

function getSummary(){
    $.ajax({
        url:'./php/getSummaryData.php',
        method: "POST",
        data: {},
        dataType: "json",
        success: function(response){
            $.each(response, function(key,value){
                addNewRecordHTML(value.student_id, value.student_name, value.student_address, value.student_sex, value.course_name, value.training_fee);
            });
        }
    });
}

function chartParticipantsBySex(){

    var xValues=[];
    var yValues=[];
    var barColors=[];

    $.ajax({
        url:'./php/getParticipantsBySex.php',
        method: "POST",
        data: {},
        dataType: "json",
        success: function(response){
            console.log(response)
            $.each(response, function(key,value){
                xValues.push(value.STUDENT_SEX);
                yValues.push(value.TOTAL);
                barColors.push(value.chartColor)
            });

            new Chart ("NumberParticipantBySex", {
                type:"bar",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    legend: {display:false},
                    scales: {
                        yValues: [{
                            display:true,
                            stacked:true,
                            ticks:{
                                min: 0,
                                max: 10
                            }
                        }]
                    },
                    title:{
                        display: true,
                        text: "Participants by Sex"
                    }
                }
            });

        }
    });

}


$(function(){
console.log("Ready!")
countStudentRecord();
getTotalTrainingFee();
getAverageTrainingFee();
getTotalCourses();
getSummary();
chartParticipantsBySex();
});