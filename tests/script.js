const barCanvas = document.getElementById
("barCanvas");

const barChart = new Chart ( barCanvas, {
    type : "bar",
    data : {
        labels : ["Beijing", "Tokyo",
        "Seoul" , "Hong Kong"],
        datasets:[{
            data:[230, 120, 40, 130]
        }]
    }
})