function showStock1(params) {
    fetch("/report/details/" + params.value, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": $('input[name="_token"]').val()
        },
        method: "get",
        credentials: "same-origin",
    })
        .then(response => {
            return response.json();
        })
        .then(text => {
            console.log(text);

            document.getElementById('opening_stock1').value = text.availableStock
        })
        .catch(error => console.error(error));
}

function showStock2(params) {
    fetch("/report/details/" + params.value, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": $('input[name="_token"]').val()
        },
        method: "get",
        credentials: "same-origin",
    })
        .then(response => {
            return response.json();
        })
        .then(text => {
            console.log(text);

            document.getElementById('opening_stock2').value = text.availableStock
        })
        .catch(error => console.error(error));
}

function showStock3(params) {
    fetch("/report/details/" + params.value, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": $('input[name="_token"]').val()
        },
        method: "get",
        credentials: "same-origin",
    })
        .then(response => {
            return response.json();
        })
        .then(text => {
            console.log(text);
            document.getElementById('opening_stock3').value = text.availableStock
        })
        .catch(error => console.error(error));
}
function showStock4(params) {
    fetch("/report/details/" + params.value, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": $('input[name="_token"]').val()
        },
        method: "get",
        credentials: "same-origin",
    })
        .then(response => {
            return response.json();
        })
        .then(text => {
            console.log(text);

            document.getElementById('opening_stock4').value = text.availableStock
        })
        .catch(error => console.error(error));
}
function showStock5(params) {
    fetch("/report/details/" + params.value, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": $('input[name="_token"]').val()
        },
        method: "get",
        credentials: "same-origin",
    })
        .then(response => {
            return response.json();
        })
        .then(text => {
            console.log(text);

            document.getElementById('opening_stock5').value = text.availableStock
        })
        .catch(error => console.error(error));
}


document.getElementById(`issued1`).addEventListener("focusout", (e) => {

    let opening_stock = document.getElementById(`opening_stock1`).value;

    let issued = e.target.value; //console.log(Number(issued) > Number(opening_stock));

    if (Number(issued) > Number(opening_stock)) {
        document.getElementById('OpeningStockalert').style.display = "block";
        document.getElementById('outwardsubmit').style.display = "none";
    } else {
        closing_stock1.value = Number(opening_stock) - Number(issued)
        document.getElementById('OpeningStockalert').style.display = "none";
        document.getElementById('outwardsubmit').style.display = "block";
    }
});
document.getElementById(`issued2`).addEventListener("focusout", (e) => {

    let opening_stock = document.getElementById(`opening_stock2`).value;

    let issued = e.target.value; //console.log(Number(issued) > Number(opening_stock));

    if (Number(issued) > Number(opening_stock)) {
        document.getElementById('OpeningStockalert').style.display = "block";
        document.getElementById('outwardsubmit').style.display = "none";
    } else {
        closing_stock2.value = Number(opening_stock) - Number(issued)
        document.getElementById('OpeningStockalert').style.display = "none";
        document.getElementById('outwardsubmit').style.display = "block";
    }
});
document.getElementById(`issued3`).addEventListener("focusout", (e) => {

    let opening_stock = document.getElementById(`opening_stock3`).value;

    let issued = e.target.value; //console.log(Number(issued) > Number(opening_stock));

    if (Number(issued) > Number(opening_stock)) {
        document.getElementById('OpeningStockalert').style.display = "block";
        document.getElementById('outwardsubmit').style.display = "none";
    } else {
        closing_stock3.value = Number(opening_stock) - Number(issued)
        document.getElementById('OpeningStockalert').style.display = "none";
        document.getElementById('outwardsubmit').style.display = "block";
    }
});
document.getElementById(`issued4`).addEventListener("focusout", (e) => {

    let opening_stock = document.getElementById(`opening_stock4`).value;

    let issued = e.target.value; //console.log(Number(issued) > Number(opening_stock));

    if (Number(issued) > Number(opening_stock)) {
        document.getElementById('OpeningStockalert').style.display = "block";
        document.getElementById('outwardsubmit').style.display = "none";
    } else {
        closing_stock4.value = Number(opening_stock) - Number(issued)
        document.getElementById('OpeningStockalert').style.display = "none";
        document.getElementById('outwardsubmit').style.display = "block";
    }
});
document.getElementById(`issued5`).addEventListener("focusout", (e) => {

    let opening_stock = document.getElementById(`opening_stock5`).value;

    let issued = e.target.value; //console.log(Number(issued) > Number(opening_stock));

    if (Number(issued) > Number(opening_stock)) {
        document.getElementById('OpeningStockalert').style.display = "block";
        document.getElementById('outwardsubmit').style.display = "none";
    } else {
        closing_stock5.value = Number(opening_stock) - Number(issued)
        document.getElementById('OpeningStockalert').style.display = "none";
        document.getElementById('outwardsubmit').style.display = "block";
    }
});



