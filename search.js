// search.js
function searchCoaching() {
    const searchQuery = document.getElementById("searchQuery").value;
    const resultsTableBody = document.getElementById("resultsTableBody");

    // Clear previous results
    resultsTableBody.innerHTML = "";

    if (searchQuery.trim() !== "") {
        // Make an AJAX request to csearch.php
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "ssearch.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onload = function () {
            if (xhr.status === 200) {
                const results = JSON.parse(xhr.responseText);

                if (results.length > 0) {
                    results.forEach((result) => {
                        appendResultToTable(result);
                    });
                } else {
                    resultsTableBody.innerHTML = "<tr><td colspan='3'>No results found.</td></tr>";
                }
            } else {
                console.error("Error: " + xhr.status);
            }
        };

        xhr.send("search_query=" + encodeURIComponent(searchQuery));
    }

    return false; // Prevent form submission
}

function appendResultToTable(result) {
    const row = document.createElement("tr");
    row.innerHTML = `
        <td>${result.coaching_Name}</td>
        <td>${result.email}</td>
        <td>${result.contact_Number}</td>
    `;
    document.getElementById("resultsTableBody").appendChild(row);
}
