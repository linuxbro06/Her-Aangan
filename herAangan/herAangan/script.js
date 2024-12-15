
document.addEventListener("DOMContentLoaded", function () {
    const calendar = document.getElementById("calendar");
    const noteText = document.getElementById("note-text");
    const saveNoteButton = document.getElementById("save-note");
    const notesList = document.getElementById("notes-list");
    const selectedDate = document.getElementById("selected-date");
    const currentMonthYear = document.getElementById("current-month-year");
    const prevMonthButton = document.getElementById("prev-month");
    const nextMonthButton = document.getElementById("next-month");

    let activeDate = null;
    let currentDate = new Date();

    // Function to render the calendar
    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        const firstDay = new Date(year, month, 1).getDay(); // Day of the week the month starts on
        const daysInMonth = new Date(year, month + 1, 0).getDate(); // Total days in the month

        calendar.innerHTML = "";
        currentMonthYear.textContent = `${currentDate.toLocaleString("default", { month: "long" })} ${year}`;

        // Blank spaces for days before the 1st of the month
        for (let i = 0; i < firstDay; i++) {
            const blank = document.createElement("div");
            blank.className = "day blank";
            calendar.appendChild(blank);
        }

        // Days of the month
        for (let i = 1; i <= daysInMonth; i++) {
            const day = document.createElement("div");
            day.className = "day";
            day.textContent = i;
            day.addEventListener("click", () => selectDate(i));
            calendar.appendChild(day);
        }
    }

    // Function to handle date selection
    function selectDate(date) {
        activeDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), date);
        selectedDate.textContent = activeDate.toLocaleDateString();
        document.querySelectorAll(".day").forEach(day => day.classList.remove("active"));
        const days = document.querySelectorAll(".day:not(.blank)");
        days[date - 1].classList.add("active");
        fetchNotes();
    }

    // Save note to server
    saveNoteButton.addEventListener("click", () => {
        if (!activeDate) return alert("Please select a date!");
        const note = noteText.value.trim();
        if (!note) return alert("Note cannot be empty!");

        fetch("save_note.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ date: activeDate.toISOString().split("T")[0], note }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                noteText.value = "";
                fetchNotes();
            } else {
                alert("Error saving note!");
            }
        });
    });

    // Fetch notes from server
    function fetchNotes() {
        if (!activeDate) return;
        fetch(`get_notes.php?date=${activeDate.toISOString().split("T")[0]}`)
            .then(response => response.json())
            .then(data => {
                notesList.innerHTML = data.notes
                    .map(note => `<div>${note}</div>`)
                    .join("") || "No notes for this date.";
            });
    }

    // Navigation handlers
    prevMonthButton.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    });

    nextMonthButton.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    });

    renderCalendar();
});

















function calculatePeriod() {
    // Get input values
    const lastPeriod = new Date(document.getElementById("lastPeriod").value);
    const cycleLength = parseInt(document.getElementById("cycleLength").value);

    // Calculate 1  next period start date
    const nextPeriodStart = new Date(lastPeriod);
    nextPeriodStart.setDate(lastPeriod.getDate() + cycleLength);

    // Display the result
    const resultElement = document.getElementById("result");
    resultElement.textContent = `Your next period is expected to start on ${nextPeriodStart.toDateString()}`;
}



    $(document).ready(function() {
        // Function to fetch and display chat messages
        function fetchMessages() {
            $.get("your_php_file.php", function(data) {
                let messages = JSON.parse(data);
                $('#chat-container').html(''); // Clear the chat container
                messages.forEach(message => {
                    $('#chat-container').append('<div><strong>' + message.user_name + ':</strong> ' + message.message + '</div>');
                });
            });
        }

        // Function to send a message
        $('#send-btn-user').on('click', function() {
            let message = $('#msg-user').val();
            let userName = "ajit"; // Replace this with the logged-in user's name

            if (message.trim() !== "") {
                $.post("your_php_file.php", {
                    message: message,
                    user_name: userName
                }, function(response) {
                    let result = JSON.parse(response);
                    if (result.status === "success") {
                        fetchMessages(); // Fetch messages again after sending
                    } else {
                        alert("Error sending message: " + result.message);
                    }
                });
            }
        });

        // Initial fetch of messages
        fetchMessages();

        // Refresh chat every 5 seconds
        setInterval(fetchMessages, 5000);
    });


