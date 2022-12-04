$(document).ready(function () {
    $("a#print").click(function () {
        window.print();
    });

    window.setTimeout(function () {
        $(".alert").slideUp(500);
    }, 5000);

    $("a.delete").click(function (event) {
        var result = window.confirm("Are you sure you want to delete?");
        if (!result) {
            event.preventDefault();
        }
    });
});

function downloadsCount(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("downloads-count").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "../image/" + id, true);
    xhttp.send();
}

function likesCount(id) {
    const userId = document.getElementById("like-user-id").value;
    alert(userId);
}
