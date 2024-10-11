document.addEventListener("DOMContentLoaded", function () {
    function updateDateTime() {
        const dateTime = new Date();
        const formattedDate = dateTime.toLocaleString("en-GB", {
            weekday: "long",
            year: "numeric",
            month: "long",
            day: "numeric",
            hour: "2-digit",
            minute: "2-digit",
            second: "2-digit"
        });
        document.getElementById("datetime").innerText = formattedDate;
    }

    setInterval(updateDateTime, 1000); // Update every second
});
