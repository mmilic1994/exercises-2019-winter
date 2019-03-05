
/**
 * renders a pie chart for given data into a given element
 * 
 * @param element_id - an element on the page
 * @param data - an object of data to be displayed
 */
function pieChart(element_id, data) {
    var data = google.visualization.arrayToDataTable(data);

    var options = {
        sliceVisibilityThreshold: .1
    };

    var chart = new google.visualization.PieChart(document.getElementById(element_id));

    chart.draw(data, options);
}

/**
 * renders a line chart for given data into a given element
 * 
 * @param element_id - an element on the page
 * @param data - an object of data to be displayed
 */
function lineChart(element_id, data) {
    var data = google.visualization.arrayToDataTable(data);

    var options = {};

    var chart = new google.visualization.LineChart(document.getElementById(element_id));

    chart.draw(data, options);
}