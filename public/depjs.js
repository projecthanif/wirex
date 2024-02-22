// Define an object to hold the texts corresponding to each option
const textsToCopy = {
    option1: "bc1qc2vv8mv3r3gj2ffplpj70nrt9vjsgdc9r4yu53",
    option2: "0x13B1a8D7a8a36f231E79171f9cA4d74BB464C68C",
    option3: "rNgBbHzX9PTZhFG2vZKHjv9RpoANtQphfy",
    option4: "ltc1q0l09pd3dnz9c4fyl0yexj4jc4saup9zzjp6etv",
    option5: "qzqddhz4p6kfz357f97lg3f7r8w5wdskys9wxcnkjl",
    option6: "bnb1q8h4ulakyvyhq9hqqncv5z89q2hhls8a3wrml4",
    option6: "addr1qyn7wg5fh54zk3kgf7d875wmu2rw0pvlsm4pn07cdk253vfalg4wwneu6y6ud65lvgkcg7v32d440j27pl75pkk9eavsh7xahv",

    

    // Define more texts for other options here
};

function showCustomPopup() {
    var popupBackground = document.getElementById("custom-popupBackground");
    popupBackground.style.display = "block";
}

function hideCustomPopup() {
    var popupBackground = document.getElementById("custom-popupBackground");
    popupBackground.style.display = "none";
}

function checkCustomCopyButton() {
    var selectedOption = document.getElementById("custom-option1").value;
    var copyButton = document.getElementById("custom-copyButton");

    if (selectedOption !== "") {
        copyButton.style.display = "block";
    } else {
        copyButton.style.display = "none";
    }
}

function copyToClipboard() {
    var selectedOption = document.getElementById("custom-option1").value;
    var textToCopy = textsToCopy[selectedOption];

    // Copy text to clipboard
    navigator.clipboard.writeText(textToCopy)
        .then(function() {
            alert("Text copied to clipboard: " + textToCopy);
            hideCustomPopup(); // Hide the popup after copying
        })
        .catch(function(err) {
            console.error('Failed to copy text: ', err);
        });
}
