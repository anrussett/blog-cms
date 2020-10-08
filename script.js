$(document).ready(function() {
    $("#hello").click(function() {
        alert("Hi there!");
    })
})


var options = {
    valueNames: [ 'title' ]
};
new List('sortable-blog-list', options);